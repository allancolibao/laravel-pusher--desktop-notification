<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Notifications\Notifiable;
use App\Http\Requests;
use Carbon\Carbon;
use App\Send;
Use App\Events\adminNotif;
use Mail;
use Storage;
use Image;
use Validator;
use Response;

class SendController extends Controller
{

   /**
    * Show the form
    *
    * @return \Illuminate\Http\Response
    */
    public function sendUs()
    {
        return view('sender.sender');
    }

  
    /** * Sending the email * * @return \Illuminate\Http\Response */
    public function sendUsPost(Request $request) 
    {

      $rules = array(
         'name' => 'required', 
         'username' => 'required', 
         'team' => 'required', 
         'subteam' => 'required' , 
         'subject' => 'required',
         'type' => 'required', 
         'message' => 'required',
         'filename' => 'required',
         'filename.*' => 'max:5000|mimes:jpeg,png,jpg,gif,svg,txt,pdf,ppt,docx,doc,xls,xlsx,zip',
         );
     
         $validator = Validator::make ( Input::all(), $rules);
        if ($validator->fails())
        return redirect('/send')->with('error', 'You got an error, Please try again!');

        // File saving in DB
        // Send::create($request->all());
        
      else{
      $data = array(
        'name' => $request->get('name'),
        'username' => $request->get('username'),
        'email' => $request->get('email'),
        'team' => $request->get('team'),
        'subteam' => $request->get('subteam'),
        'subject' => $request->get('type').' - '.$request->get('subject'),
        'type' => $request->get('type'),
        'user_message' => $request->get('message')
      );
     
      //Looping the attachments
      foreach($request->file('filename') as $attachment) 
      {
        $attachments[] = [
                            'file' => $attachment->getRealPath(),
                            'options' => ['mime' => $attachment->getClientMimeType(), 'as' => $attachment->getClientOriginalName() ],
                          ];
      }
      
      //Sending the email
      Mail::send('email.template', $data, function($message) use ($data, $attachments, $request)
      {    

        //For gmail//
        $message->from('enns.2019@gmail.com', 'eSender 2019');
        $message->to('enns.spiceworks@gmail.com', 'Admin')->subject($data['subject']);

        //For yahoo//
        // $message->from('enns.2019@yahoo.com', 'eSender 2019');
        // $message->to('ennsurvey@yahoo.com', 'Admin')->subject($data['subject']);

        //For attachments//
        foreach($attachments as $attachment) {
          $message->attach($attachment['file'],$attachment['options']);
        }
      
        //For pusher notifications//
        $name = request()->name;
        event(new adminNotif($name));

        return $message;

      });

      // For Email notification
      Mail::send('email.notification', $data, function($message) use ($data, $request)
      {    
        //For gmail//
        $message->from('enns.2019@gmail.com', 'eSender 2019');
        $message->to($request['email'])->subject('eSender Notification');

        //For yahoo//
        // $message->from('enns.2019@yahoo.com', 'eSender 2019');
        // $message->to($request['email'])->subject('eSender Notification');

        return $message;

      });

     return back()->with('success', 'Successfully sent, Please check your email for the confirmation');
    }
  }

    /**
    * Show the help page
    *
    * @return \Illuminate\Http\Response
    */
    public function help()
    {
        return view('inc.help');
    }
}






