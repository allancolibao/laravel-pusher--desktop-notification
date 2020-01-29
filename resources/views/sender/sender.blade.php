@extends('layouts.main')

@section('content') 
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="carduser">
                    <div class="content">
                        <div class="header" style="padding-bottom:2vmin;">
                            <h3 class="title">Send files<span><p class="category">A NSIS staff will respond promptly to your concern.</p></span></h3> 
                        </div>
                        @include('inc.messages')
                        <form role="form" method="post" action="{{ route('send.store') }}"  enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Name</label> *
                                        <input type="text" class="form-control" name="name" placeholder="Juan Dela Cruz" value="" autofocus>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">User name</label> *
                                        <input type="text" class="form-control" name="username"  placeholder="IT-JUAN" value="" >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Email</label> *
                                        <input type="email" class="form-control" name="email" placeholder="juandelacruz@gmail.com" value="">
                                    </div>
                                </div>
                                <div class="">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Team</label> *
                                                <input type="number" style="any"  class="form-control" name="team" placeholder="99" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Subteam</label> *
                                                <input type="number" style="any"  class="form-control" name="subteam" placeholder="99" value="">
                                            </div>
                                       </div>
                                </div>        
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label >Subject</label> * 
                                        <input type="text" class="form-control" name="subject"  placeholder="Barangay Name / Municipality / Province" value="" >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label >Type of Attachment</label> * 
                                        <select id="type" class="form-control" name="type">   
                                            <option value="">Please select</option>
                                            <option value="Anthropometric">Anthropometric</option>
                                            <option value="Dietary">Dietary</option>
                                            <option value="eDCS Backup">eDCS Backup</option> 
                                            <option value="Other Concerns">Other Concerns</option>                                      
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Message</label> *
                                        <textarea type="text" rows="10" class="form-control" name="message" placeholder="Barangay Name / Municipality / Province / EAcode" value="" ></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                       <label><strong>Notes</strong></label>
                                        <a type="text" ><i class="pe-7s-note2"></i></a><br>
                                        <small>1. Please fill up all the required fields (*).</small><br>
                                        <small>2. Click choose file and select single or multiple files with the maximum size of 5mb in total.</small><br>
                                        <small>3. Click send now button.</small><br>
                                        <small>4. Wait for the confimation message appear.</small><br>
                                        <small>5. Notify the designated staff.</small><br>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Attach file&nbsp;&nbsp;<i class="pe-7s-paperclip"></i>&nbsp;&nbsp; Max size:5MB &nbsp;&nbsp; File type accepted: jpeg,png,jpg,gif,svg,txt,pdf,ppt,docx,doc,xls,xlsx,zip</label> 
                                        <div id="reminder"></div>
                                        <div id="message"></div>
                                        <input type="file" name="filename[]" class="form-control" id="attachment"  accept="file_extension|image/*|media_type" multiple >
                                    </div>
                                </div>
                            </div>
                            <button type="submit" value="send" id="send" class="btn btn-secondary pull-right add" id="send">Send Now</button>
                            <div class="clearfix"></div>
                        </form>
                        <div id="control" hidden>
                            <div class = "loading">
                                <div class = "blob-1"></div>
                                <div class = "blob-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('inc.versionmodal')
@include('inc.footer')
@endsection

