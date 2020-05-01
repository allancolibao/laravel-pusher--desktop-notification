<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
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
      $path = storage_path() . "\app\public\json\localsurveyareas.json";

      $json = json_decode(file_get_contents($path), true); 

      return view('sender.sender', compact('json'));
    }

  
    /** * Sending the email * * @return \Illuminate\Http\Response */
    public function sendUsPost(Request $request) 
    {

      $connected = @fsockopen("www.google.com", 80); 
                                       
      if ($connected){

        $is_conn = true; 

        $rules = array(
          'name' => 'required', 
          'username' => 'required', 
          'email' => 'required',
          'team' => 'required', 
          'subteam' => 'required', 
          'subject' => 'required',
          'type' => 'required', 
          'message' => 'required',
          'filename' => 'required',
          'filename.*' => 'max:5000|mimes:jpeg,png,jpg,gif,svg,txt,pdf,ppt,docx,doc,xls,xlsx,zip',
          );
      
          $validator = Validator::make ( Input::all(), $rules);
          if ($validator->fails())
          return redirect('/send')->with('error', 'You got an error, Please try again!')->withInput();

          
        else {
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
        $i = 0;
        foreach($request->file('filename') as $attachment) 
        {
          $attachments[] = [
                              'file' => $attachment->getRealPath(),
                              'options' => ['mime' => $attachment->getClientMimeType(), 'as' => $attachment->getClientOriginalName() ],
                            ];
          $i++;                 
        }
        
        //Sending the email
        Mail::send('email.template', $data, function($message) use ($data, $attachments, $request)
        {    

          //For gmail//
          $message->from('esender.2019@gmail.com', 'eSender 2020');

          if($data['type'] == 'Dietary'){
            $message->to('esender.2020.dietary@gmail.com', 'Admin')->subject($data['subject']);
          } else if($data['type'] == 'Food Item' ){
            $message->to('esender.2020.fooditem@gmail.com', 'Admin')->subject($data['subject']);
          }else{
            $message->to('esender.2020@gmail.com', 'Admin')->subject($data['subject']);
          }
          

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
          $message->from('esender.2019@gmail.com', 'eSender 2020');
          $message->to($request['email'])->subject('eSender Notification');

          return $message;

        });

        // Saving data to database after sending email
        Send::create([
          'name' => $request['name'],
          'username' => $request['username'],
          'email'=> $request['email'],
          'team'=> $request['team'],
          'subteam'=> $request['subteam'],
          'subject'=> $request['type'].' - '.$request['subject'],
          'eacode'=> Str::substr($request['subject'], 0, 12),
          'area_name'=> Str::substr($request['subject'], 15),
          'type'=> $request['type'],
          'user_message'=> $request['message'], 
          'file_count' => $i
        ]);

        
      return back()->with('success', 'Successfully sent, Please check your email for the confirmation')
                   ->withInput($request->except(['subject','type','message']));
      }     
      
      fclose($connected);

    } else {

      $is_conn = false; 

      return back()->with('error', 'Please check your internet connection, Thank you!')->withInput();

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






