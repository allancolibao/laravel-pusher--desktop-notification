@extends('layouts.main')

@section('content') 
  <section class="section-1">
      <div class="container text-center">
        <div class="row">
          <div class="col-md-12 col-12">
            <div class="panel text-left">
              <h1>User Guide</h1>
                <h3>1. On laptop desktop</h3>
                  <p>a. Double-click the eSender icon to open the eSENDER app, or</p>
                  <p>b. Right-click the eSender icon then select “OPEN”.</p>
                  <img src="{{ asset('sc/sender.png') }}" alt="" width="12%"><br>

                <h3>2.	Fill up the required fields marked with ‘*’</h3>
                  <p><strong>1. Name<br>2. Username<br>3. Email<br>4. Team<br>5. Subteam<br>6. Subject<br>7. Type of Attachment<br>8. Message<strong></p>
                  <p><i><strong>NOTE: Follow the FORMAT for each field as shown on the text box itself</strong></i></p><br>
                  <p><strong>Select “TYPE OF ATTACHMENT” accordingly:</strong></p>
                    <p>a.	Anthropometric = NSIS Forms C, D & E</p>
                    <p>b.	Dietary = iDR and NSIS Form C</p>
                    <p>c. eDCS Backup = Consolidated file</p>
                    <p>d. Salt Form = Salt Form Control List</p>
                    <p>e.	Other Concerns = Inquiries or Report a problem</p>
                  <div class="screenshot">
                    <img src="{{ asset('sc/type.jpg') }}" alt="" width="100%">
                  </div><br>
                  <p><strong>Validation message based on selected type of attachment</strong></p>
                    <p>&#10095;&nbsp;&nbsp;Anthropometric required atleast 1 attachment</p>
                    <p>&#10095;&nbsp;&nbsp;Dietary required atleast 2 attachments</p>
                    <p>&#10095;&nbsp;&nbsp;eDCS Backup required atleast 1 attachment</p>
                    <p>&#10095;&nbsp;&nbsp;Salt Sample required atleast 1 attachment</p>
                    <p>&#10095;&nbsp;&nbsp;Other Concerns required atleast 1 attachment</p>
                  <div class="screenshot">
                    <img src="{{ asset('sc/req.jpg') }}" alt="" width="100%">
                  </div><br><br>
                  <p><strong>On the “MESSAGE” section, list down the list of Enumeration Areas (EA) of the said barangay:</strong></p>
                    <p>eg.  Lower Bicutan / Taguig City / NCR   137607008021 137607008022</p><br>
                  <p><strong>Accepted sample of filling out the eSender:</strong></p>
                  <div class="screenshot">
                    <img src="{{ asset('sc/fill.jpg') }}" alt="" width="100%">
                  </div><br>
                  
                <h3>3.	Attach the necessary FILE/s</h3>
                  <p>a.	Click “Choose Files” button.</p>
                  <div class="screenshot">
                    <img src="{{ asset('sc/choose.jpg') }}" alt="" width="100%">
                  </div><br>
                  <p>b.	Locate the FILE/s to be attached.</p>
                  <div class="screenshot">
                    <img src="{{ asset('sc/locate.jpg') }}" alt="" width="100%">
                  </div><br>
                  <p>c.	Select the FILE/s to be attached and click “Open” button.</p>
                  <div class="screenshot">
                    <img src="{{ asset('sc/select.jpg') }}" alt="" width="100%">
                  </div><br>
                  <p><strong>Error &#10006;</strong></p>
                  <div class="screenshot">
                    <img src="{{ asset('sc/error.jpg') }}" alt="" width="100%">
                  </div><br>
                  <p><strong>Success &#10004;</strong></p>
                  <div class="screenshot">
                    <img src="{{ asset('sc/success.jpg') }}" alt="" width="100%">
                  </div><br>
                  <p><i><strong>NOTE: A maximum of 5MB FILE can be accommodated; FILE type such as: jpeg, png, jpg, gif, svg, txt, pdf, ppt, docx, doc, xls, xlsx, zip are allowed.</strong></i></p><br>
                
                <h3>4.	Click “Send Now” button.</h3>
                  <div>
                    <img src="{{ asset('sc/btn.png') }}" alt="" width="15%">
                  </div><br>
                  <p><i><strong>NOTE: Please make sure that you are connected in the internet and have good signal before clicking the “Send Now” button.</strong></i></p>
            </div>
          </div>
        </div>
      </div>
    </section>

@include('inc.versionmodal')
@include('inc.footer')
@endsection

