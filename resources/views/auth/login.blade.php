{{-- @extends('layouts.app')
@section('title', 'Login')
@section('content')
    <div class="login-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12 py-md-5 m-auto">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="card login-card my-5">
                            <h3 class="text-center mt-5">Login</h3>
                            <h6 class="text-center mb-5">Only for admin login</h6>
                            <div class="mb-5 custom-input ps-md-5 pe-md-5">
                                <input type="text" class="form-control custom-form-control placeicon" placeholder="Email Address" value="{{ old('email') }}" name="email">
                                @error('email')
                                    <span class="text-warning fw-bolder">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-5 custom-input ps-md-5 pe-md-5">
                                <input type="password" class="form-control custom-form-control placeicon" placeholder="Password" value="{{ old('password') }}" name="password">
                                @error('password')
                                    <span class="text-warning fw-bolder">{{ $message }}</span>
                                @enderror
                                <a class="d-flex justify-content-end fw-bolder text-white mt-2" href="#">Forget Password</a>
                            </div>
                            <div class="mt-3 text-center mb-5">
                                <button class="arabic-button text-white" type="submit" name="submit">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}



<html class="no-js" lang="en">
   <head>
      <meta content="charset=utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta http-equiv="content-type" content="text/html">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Login | Customer centric railway system</title>
      <meta name="keywords" content="Online train ticket booking, Buy train tickets, Train ticket booking, Railway ticket, bd railway, online train ticket, bangladesh railway ticket, bd train ticket, railway ticket booking, e ticket railway, e ticket train, bd railway ticket, bangladesh railway online ticket, bd train ticket">
      <meta name="description" content="Login to your account, search for your desired destination and purchase the ticket. E-Tickets will be automatically issued by Bangladesh Railway.">
      <meta name="author" content="Bangladesh Railway">
      <meta content="follow, index, all" name="robots">
      <noscript>
         <meta http-equiv="refresh" id="mtaJSCheck" content="0;/enable-javascript.html" />
      </noscript>
      <!--
         <link href="" rel="author" />
         <link href="" rel="author" />
         <link href="" rel="author" />
         -->
      <link rel="manifest" href="https://eticket.railway.gov.bd/manifest.json">
      <!--Meta properties for Facebook Open Graph
         <meta property="fb:app_id" content=""/>
         <meta property="og:type" content="website" />
         <meta property="og:site_name" content="Bangladesh Railway" />
         Meta properties for Facebook Open Graph -->
      <meta property="og:title" content="Bangladesh Railway E-Ticketing Service">
      <meta property="og:image" content="https://eticket.railway.gov.bd/img/railway-og-image.png">
      <meta property="og:description" content="Buy rail tickets online in three easy steps: search, select and pay. The tickets are issued by Bangladesh Railway’s CCSRTS.">
      <meta property="og:url" content="https://eticket.railway.gov.bd/login/en">
      <link rel="shortcut icon" href="https://eticket.railway.gov.bd/img/favicon.ico" type="image/x-icon">
      <link rel="icon" href="https://eticket.railway.gov.bd/img/favicon.ico" type="image/x-icon">
      <link rel="stylesheet" href="https://eticket.railway.gov.bd/dist/css/login-style.min.css?v=1.0.0">
   </head>
   <body class="body-en" data-new-gr-c-s-check-loaded="14.1111.0" data-gr-ext-installed="">
      <main class="login-screen">
         <div class="login-page-container">
            <div class="login-page-header">
               <a class="login-page-logo-wrapper" href="https://eticket.railway.gov.bd/en">
               <img src="{{ asset('img/logo.png') }}" height="120px" alt="Login page logo">
               </a>
               <div class="login-page-title">
                  <h1 style="color: #1390ea;">Customer centric railway system</h1>
               </div>
               <div class="login-page-slugan">
                  <span class="single-slugan">নিরাপদ</span>
                  <span class="single-slugan">আরামদায়ক</span>
                  <span class="single-slugan">সাশ্রয়ী</span>
               </div>
            </div>
            <div class="login-page-form">
               <div class="login-page-form-header">
               </div>
               <div class="login-form-input-wrapper">
                  <form action="{{ route('login') }}" method="POST">
                    @csrf
                     <div class="login-form-control-single">
                        <label for="mobile_number">Mobile Number</label>
                        <input type="text" name="phone" placeholder="Enter your mobile number">
                        @error('phone')
                            <span style="color: red;">{{ $message }}</span>
                        @enderror
                     </div>
                     <div class="login-form-control-single">
                        <label for="password">Password</label>
                        <input type="password" name="password" placeholder="Enter your password">
                        @error('password')
                            <span style="color: red;">{{ $message }}</span>
                        @enderror
                        <button class="password-show-hide-btn" type="button">
                        <img src="https://eticket.railway.gov.bd/img/icon/eye-slash-icon.svg" alt="Eye slash icon">
                        </button>
                     </div>
                     <div class="login-form-control-single">
                        <button class="login-form-submit-btn" type="submit">LOGIN</button>
                     </div>
                     <div class="login-page-register-link">
                        <span class="login-or-reg-text">OR</span>
                        <a href="{{ route('register') }}">REGISTER</a>
                     </div>
                  </form>
               </div>
            </div>
            <div class="login-request-errors">
            </div>
         </div>
      </main>
      <!-- Login modal related styles -->
      <style>
         .forgot-password-modal-wrapper {
         position: fixed;
         width: 100%;
         height: 100vh;
         background: rgba(0, 0, 0, .5);
         left: 0;
         top: 0;
         z-index: 8800;
         overflow-y: auto;
         }
         .forgot-password-modal-container {
         width: 100%;
         max-width: 376px;
         margin: 0 auto;
         position: relative;
         left: 0;
         right: 0;
         display: flex;
         justify-content: center;
         align-items: center;
         height: 100%;
         }
         @media (max-width: 768px){
         .forgot-password-modal-container{
         padding: 0 10px;
         box-sizing: border-box;
         }
         }
      </style>
      <!-- Login modal -->
      <div class="forgot-password-modal-wrapper" style="display: none;">
         <div class="forgot-password-modal-container">
            <div class="railway-modal-content">
               <!--Phone Number-->
               <form action="https://eticket.railway.gov.bd/auth/password/forgot" method="post" id="forgotPasswordForm" class="forgot-password">
                  <div class="header">
                     <img src="https://eticket.railway.gov.bd/v2/assets/img/icon/arrow-left.svg" alt="arrow left icon" class="go-back-modal-btn">
                     <img src="https://eticket.railway.gov.bd/v2/assets/img/icon/cross.svg" alt="times icon" class="close-icon-image">
                  </div>
                  <div class="img-div">
                     <img src="https://eticket.railway.gov.bd/v2/assets/img/leaf-phone-man.svg" alt="leap phone with a man">
                  </div>
                  <div class="heading-div">
                     Welcome to Bangladesh Railway                
                  </div>
                  <div class="forgot-pass-response-message"></div>
                  <div class="description-div">
                     Enter your phone number to continue                
                  </div>
                  <div class="form-div">
                     <input type="number" name="OTPmobileNumber" id="OTPmobileNumber" placeholder="Phone Number" autocomplete="off">
                  </div>
                  <div class="button-div">
                     <button class="next-button" type="submit">NEXT</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <!-- Login modal related styles -->
      <style>
         .otp-input-modal-wrapper {
         position: fixed;
         width: 100%;
         height: 100vh;
         background: rgba(0, 0, 0, .5);
         left: 0;
         top: 0;
         z-index: 8800;
         overflow-y: auto
         }
         .otp-input-modal-container {
         width: 100%;
         max-width: 376px;
         margin: 0 auto;
         position: relative;
         left: 0;
         right: 0;
         display: flex;
         justify-content: center;
         align-items: center;
         height: 100%;
         }
         .otp-flow-accept-terms {
         margin-top: 29px;
         }
         .otp-flow-accept-terms a {
         color: #006747;
         text-decoration: underline;
         }
         .otp-flow-accept-terms p {
         font-family: Roboto;
         font-style: normal;
         font-weight: normal;
         font-size: 12px;
         line-height: 17px;
         text-align: center;
         color: #595C7D;
         }
         #otpInputForm .form-div .resend-otp-div .resend {
         font-weight: bold;
         font-size: 14px;
         line-height: 18px;
         text-decoration-line: underline;
         color: #595C7D;
         cursor: pointer;
         border: 0;
         outline: 0;
         background-color: transparent;
         }
         .resend-otp-div button:disabled, .resend-otp-div button[disabled] {
         color: #ebebeb !important;
         cursor: not-allowed !important;
         }
         .resend-otp-div button:disabled, 
         .resend-otp-div button[disabled] {
         color: #ebebeb !important;
         cursor: not-allowed !important;
         background-color: transparent !important;
         border: 0 !important;
         }
         @media (max-width: 768px){
         .otp-input-modal-container{
         padding: 0 10px;
         box-sizing: border-box;
         }
         .forgot-password {
         padding: 15px;
         }
         .forgot-password .img-div img {
         width: 100px;
         }
         .forgot-password .img-div {
         margin: 0 0 20px;
         }
         .forgot-password .heading-div {
         font-size: 20px;
         }
         .forgot-password .description-div {
         font-size: 14px;
         line-height: 20px;
         }
         .forgot-password .form-div > .otp-input-div > input {
         width: 40px;
         height: 40px;
         padding: 6px 5px;
         }
         .otp-flow-accept-terms {
         margin-top: 15px;
         }
         .forgot-password .button-div .next-button {
         padding: 10px;
         }
         }
      </style>
      <!-- Login modal -->
      <div class="otp-input-modal-wrapper" style="display: none;">
         <div class="otp-input-modal-container">
            <div class="railway-modal-content">
               <!--OTP-->
               <form action="https://eticket.railway.gov.bd/auth/password/verify-otp" method="post" id="otpInputForm" class="forgot-password create-new">
                  <div class="header">
                     <img src="https://eticket.railway.gov.bd/v2/assets/img/icon/arrow-left.svg" alt="arrow left icon" class="go-back-modal-btn">
                     <img src="https://eticket.railway.gov.bd/v2/assets/img/icon/cross.svg" alt="times icon" class="close-icon-image">
                  </div>
                  <div class="img-div">
                     <img src="https://eticket.railway.gov.bd/v2/assets/img/leaf-phone-man-walk.svg" alt="leap phone with a man">
                  </div>
                  <div class="heading-div">
                     Enter OTP Code
                  </div>
                  <div class="description-div">
                     Please enter the 6-digit code that we sent to your email
                  </div>
                  <div class="form-div" id="railway-otp-input-wrapper">
                     <div class="otp-input-div">
                        <input type="text" data-input-type="otp" data-input-position="1" id="pinInput1" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" placeholder="*" autocomplete="off">
                        <input type="text" data-input-type="otp" data-input-position="2" id="pinInput2" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" placeholder="*" autocomplete="off">
                        <input type="text" data-input-type="otp" data-input-position="3" id="pinInput3" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" placeholder="*" autocomplete="off">
                        <input type="text" data-input-type="otp" data-input-position="4" id="pinInput4" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" placeholder="*" autocomplete="off">
                        <input type="text" data-input-type="otp" data-input-position="5" id="pinInput5" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" placeholder="*" autocomplete="off">
                        <input type="text" data-input-type="otp" data-input-position="6" id="pinInput6" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" placeholder="*" autocomplete="off">
                     </div>
                     <div class="resend-otp-div">
                        <div class="timer"></div>
                        <button type="button" class="resend" data-request-url="https://eticket.railway.gov.bd/auth/password/forgot" disabled="">Resend OTP</button>
                     </div>
                     <div class="opt-sent-again-message"></div>
                     <div class="otp-flow-accept-terms">
                        <p>By sharing this OTP you are agreeing to Bangladesh Railway’s<br><a href="javascript:void(0)" data-modal-target="terms" target="_blank" title="Terms &amp; Conditions" style="font-weight: bold; font-size: 14px;">Terms &amp; Conditions</a>.</p>
                     </div>
                  </div>
                  <div class="button-div" id="forgotPassOTPSubmit">
                     <button class="next-button" type="submit">CONTINUE</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <!-- Login modal related styles -->
      <style>
         .new-password-modal-wrapper {
         position: fixed;
         width: 100%;
         height: 100vh;
         background: rgba(0, 0, 0, .5);
         left: 0;
         top: 0;
         z-index: 8800;
         overflow-y: auto;
         }
         .new-password-modal-container {
         width: 100%;
         max-width: 376px;
         margin: 0 auto;
         position: relative;
         left: 0;
         right: 0;
         display: flex;
         justify-content: center;
         align-items: center;
         height: 100%;
         }
         .new-password-single-input {
         padding: 10px 0;
         }
         @media (max-width: 768px){
         .new-password-modal-container{
         padding: 0 10px;
         box-sizing: border-box;
         }
         }
      </style>
      <!-- Login modal -->
      <div class="new-password-modal-wrapper" style="display: none;">
         <div class="new-password-modal-container">
            <div class="railway-modal-content">
               <!-- Set new password-->
               <form action="https://eticket.railway.gov.bd/auth/password/reset" method="post" id="newPasswordForm" class="forgot-password create-new">
                  <div class="header">
                     <img src="https://eticket.railway.gov.bd/v2/assets/img/icon/arrow-left.svg" alt="arrow left icon" class="go-back-modal-btn">
                     <img src="https://eticket.railway.gov.bd/v2/assets/img/icon/cross.svg" alt="times icon" class="close-icon-image">
                  </div>
                  <div class="img-div">
                     <img src="https://eticket.railway.gov.bd/v2/assets/img/leaf-phone-man-walk.svg" alt="leap phone with a man">
                  </div>
                  <div class="heading-div">
                     Set New Password
                  </div>
                  <div class="description-div">
                     For the purpose of accessing the panel, your details are required.
                  </div>
                  <div class="form-div" id="new-password-input-wrapper">
                     <div class="new-password-single-input">
                        <input class="new-pass-input" type="password" name="new_password" id="new_password" placeholder="New Password" required="">
                     </div>
                     <div class="new-password-single-input">
                        <input type="password" name="new_password_confirmation" id="new_password_confirmation" placeholder="Confirm Password" required="">
                     </div>
                  </div>
                  <div class="button-div">
                     <button class="next-button" type="submit">Save</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <!-- Terms modal related styles -->
      <style>
         #terms-modal {
         position: fixed;
         width: 100%;
         height: 100vh;
         background: rgba(0, 0, 0, .5);
         left: 0;
         top: 0;
         z-index: 8800;
         overflow-y: auto;
         }
         #terms-modal .railway-modal-container {
         width: 100%;
         max-width: 768px;
         margin: 0 auto;
         position: relative;
         left: 0;
         right: 0;
         display: flex;
         justify-content: center;
         align-items: center;
         height: 100%;
         }
         #terms-modal .railway-modal-content {
         background-color: #FFF;
         border-radius: 10px;
         width: 100%;
         }
         #terms-modal .railway-modal-body {
         max-width: 100%;
         background: #FFFFFF;
         margin: auto;
         box-shadow: 0px 2px 8px rgba(108, 152, 166, 0.05);
         border-radius: 8px;
         padding: 24px 15px 32px 24px;
         text-align: center;
         font-weight: 400;
         box-sizing: border-box;
         }
         img.go-back-modal-btn {
         width: 40px;
         height: 40px;
         padding: 12px;
         box-sizing: border-box;
         cursor: pointer;
         }
         .close-icon {
         width: 35px;
         height: 35px;
         padding: 12px;
         box-sizing: border-box;
         cursor: pointer;
         position: relative;
         top: -15px;
         right: -10px;
         }
         .railway-modal-container .header {
         display: flex;
         justify-content: space-between;
         }
         .railway-modal-container .header h4 {
         font-family: Roboto, sans-serif;
         font-style: normal;
         font-weight: bold;
         font-size: 18px;
         line-height: 22px;
         color: #DA924E;
         }
         .railway-modal-container .modal-text-container h5 {
         font-family: Roboto, sans-serif;
         font-style: normal;
         font-weight: bold;
         font-size: 16px;
         line-height: 22px;
         color: #DA924E;
         margin: 15px 0;
         }
         #terms-modal .modal-text-container {
         text-align: left;
         height: 320px;
         overflow-y: auto;
         margin-top: 15px;
         }
         .modal-text-container p, .modal-text-container li{
         font-size: 16px;
         line-height: 24px;
         font-weight: 400;
         color: #444444;
         }
         .modal-text-container p a {
         color: #DA924E;
         }
         /* Custom scrollbar */
         .modal-text-container::-webkit-scrollbar-track
         {
         -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
         box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
         background-color: #F5F5F5;
         border-radius: 4px;
         }
         .modal-text-container::-webkit-scrollbar
         {
         width: 10px;
         background-color: #F5F5F5;
         }
         .modal-text-container::-webkit-scrollbar-thumb
         {
         background-color: #C4C4C4;
         border: 2px solid #C4C4C4;
         border-radius: 4px;
         }
         .btn-tarrif {
         border: 0;
         outline: 0;
         background-color: transparent;
         color: #1C558A;
         text-decoration: underline;
         padding: 0;
         margin: 0;
         }
         @media (max-width: 768px){
         #terms-modal .railway-modal-container{
         padding: 0 10px;
         box-sizing: border-box;
         }
         }
      </style>
      <!-- Terms modal -->
      <div class="railway-modal-wrapper" id="terms-modal" style="display: none;">
         <div class="railway-modal-container">
            <div class="railway-modal-content">
               <div class="railway-modal-body">
                  <div class="header">
                     <h4>TERMS AND CONDITIONS</h4>
                     <img src="https://eticket.railway.gov.bd/v2/assets/img/icon/cross.svg" alt="times icon" class="close-icon" onclick="$('#terms-modal').hide();">
                  </div>
                  <div class="modal-text-container">
                     <p>E-tickets will be automatically issued by Bangladesh Railway Portal within 30 minutes of successful payment. User(s) can obtain their ticket(s) and also download the PDF version of the ticket from the confirmation page. Concurrently, a copy of the ticket will be sent to the user’s email address. However, some mail service providers such as Gmail, Yahoo!, Outlook might place the email in “SPAM” folder. Furthermore, it might also be possible that the mail has been blocked by any of the mentioned service providers. However, email containing PDF tickets may be delayed for technical reasons. Therefore, unavailability of the confirmation mail should not be regarded as non-issuance of ticket. If the reservation does not materialize and the client-passenger still wants to try for the same reservation once again, the process will be treated as a new reservation. User(s) can always download the tickets from the “Purchase History” section of the website or “My Tickets” section of Rail Sheba app.</p>
                     <h5>Ticket purchase limitation per day:</h5>
                     <span><b>Bangladesh Railway passengers:</b></span>
                     <ol style="margin-bottom: 10px;">
                        <li>Can purchase maximum 4 tickets (seats) in a single transaction. The transaction can be online or at the ticket booking counter at stations.</li>
                        <li>
                           <span>Can do maximum of 2 transactions per day.</span>
                           <ul style="list-style: disc;">
                              <li>Maximum of 8 tickets can be purchased per day.</li>
                              <li>Train numbers should be different for those two transactions.</li>
                              <li>Origin stations should be different for those two transactions.</li>
                              <li>Destination stations should be different for those two transactions.</li>
                           </ul>
                        </li>
                     </ol>
                     <p><b>Ticket purchase limitation for Eid journey:</b> For journey dates (17th to 21st April 2023), users can do only 1 transaction and purchase maximum 4 seat(s). Same rule is applicable for the return journey dates (25th to 30th April 2023) - users can do only 1 transaction and purchase maximum 4 seats.</p>
                     <p>To issue railway tickets, Bangladesh Railway Portal depends on different payment getaways for the Card/Wallet charge information. Bangladesh Railway does not store any sensitive information of Passengers such as Card/Wallet details, OTP, Pin Code. In case any Card/Wallet is charged and/or Payment Gateway fails to return the information in due time, it is possible that the passenger’s Card/Wallet would be charged without being issued for the desired tickets. In such instances, Payment Gateways will automatically refund the purchased amount by the Client-Passenger to their respective Card/Wallet within 8 (eight) working days. However, in case such a Client-Passenger does not receive refund within 8 (eight) working days, the client Client-Passenger is requested to send a complaint email to <a href="mailto:support@eticket.railway.gov.bd">support@eticket.railway.gov.bd</a> with details of the issue. A reply to such a Client-Passenger will be sent within 7 working days. Due to the dependency on payment service providers, it might take several days to resolve the issue. For a refund of unsuccessful purchases and card charging issues, Client-Passenger must contact the Payment Service Provider through which s/he made the transaction. For a refund of successfully purchased tickets, the Client-Passenger must visit their respective originating station (i.e., Departure Station from which the Client-Passenger will travel) and contact the refund counter. Bangladesh Railway or Shohoz-Synesis-Vincen JV will not be held responsible for the non-issuance of tickets or delay of refund due to errors in payment processing or any other reasons that are beyond the control of Bangladesh Railway or Shohoz-Synesis-Vincen JV. Bangladesh Railway makes no guarantee/warranty that any of the above services will be uninterrupted, timely or error-free due to the dependencies on many Service Providers.</p>
                     <p>In case of any concerns or grievance against tickets purchased through the e-ticket website or Rail Sheba app, a passenger should notify Bangladesh Railway within 2 hours by sending an email along with the e-ticket details to <a href="mailto:support@eticket.railway.gov.bd">support@eticket.railway.gov.bd</a>.</p>
                     <p>For any other grievance including tickets purchased from counters or any sort of inconvenience caused at stations or trains during their travel, passengers are requested to raise their complaints to Bangladesh Railway through the concerned Travelling Ticket Examiner (“TT”). Any such complaint must be supported by the corresponding tickets. Such grievances will be strictly regulated by Bangladesh Railways Act, 1890 (Act IX of 1890) and <button class="btn-tarrif" type="button" data-modal-target="railwayact">Bangladesh Railway Coaching Tariff</button>.</p>
                     <h5>Ticket purchase, refund and journey rules &amp; regulations:</h5>
                     <ol>
                        <li>This ticket is non-transferable and non-assignable.</li>
                        <li>It is mandatory for children between 3 to 12 years old to purchase minor tickets.</li>
                        <li>No additional fees for Passengers who travel within the luggage weight limits of:<br>AC- 56 KG, First Class- 37.5 KG, Shovon chair/ Shovon- 28 KG, Shulobh- 23 KG;</li>
                        <li>The coach/seat number may change during the journey due to unavoidable circumstances;</li>
                        <li>
                           Ticket return policy:
                           <ul>
                              <li>In case of ticket return 48 hours prior to the commencement of the journey, BDT 40 or 10% of the ticket fare, whichever is more will be deducted;</li>
                              <li>In case of less than 48 hours and more than 24 hours, BDT 40 or 25% of the ticket fare, whichever is more will be deducted;</li>
                              <li>In case of less than 24 hours and more than 12 hours, BDT 40 or 50% of the ticket fare, whichever is more will be deducted;</li>
                              <li>For less than 12 hours and more than 06 hours, BDT 40 or 75% of the ticket fare, whichever is more will be deducted;</li>
                              <li>No refund for less than 06 hours;</li>
                              <li>Service charges for online purchase are non-refundable.</li>
                           </ul>
                        </li>
                        <li>Bangladesh Railway is a national resource. Do not travel by Bangladesh Railway without purchasing a ticket. Buy train tickets while travelling and encourage others to do so. Any travelling without a valid ticket may be subject to prosecution.</li>
                        <li>For travelling with Bangladesh Railway, the passenger must have a valid ticket. No expired ticket or ticket having a future date of travel would be valid.</li>
                        <li>It is the responsibility of the Client-Passenger to check the correctness of the ticket concerning the travel date and time, destination, seat number and coach details. Wrongly purchased tickets may be replaced depending on the availability of the desired destination, seat number etc.</li>
                        <li>Except for whatever liability is admitted by Bangladesh Railway or Shohoz-Synesis-Vincen JV in this terms and conditions, neither Bangladesh Railway nor Shohoz-Synesis-Vincen JV accepts any liability of whatever nature arising out of the rail ticket or the travel.</li>
                     </ol>
                     <p>If you are the Client-Passenger or buying the ticket on behalf of the Client-Passenger, it is required to agree with all these terms and conditions. Please read thoroughly all the terms and conditions and upon perusal, if you have understood the contents of the terms and conditions and agree to the same, please continue. Continuing constitute a formal agreement between you and the Bangladesh Railway for the purpose of transactions on this website.</p>
                     <h5>Provision for cases in which tickets have been issued for trains not having room available for additional passengers:</h5>
                     <ol>
                        <li>Fares shall be deemed to be accepted, and tickets to be issued, subject to the condition of there being room available on the train for which the tickets are issued.</li>
                        <li>A person to whom a ticket has been issued and for whom there is not room available in the train for which the ticket was issued shall on returning the ticket within three hours after the departure of the train be entitled to have his fare refunded at once.</li>
                        <li>A person for whom there is not room available for the class of carriage for which he has purchased a ticket and who is obliged to travel in a carriage of a lower class shall be entitled on delivering up his ticket to a refund of the difference between the fare paid by him and the fare payable for the class of carriage in which he travelled.</li>
                     </ol>
                     <p>*These Terms and Conditions may be changed or amended by Bangladesh Railway at any time without any prior notice for legal, regulatory, commercial or security reasons or to enable the proper delivery of or to improve the delivery of the proper service.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- modal related styles -->
      <style>
         .railway-modal-wrapper {
         position: fixed;
         width: 100%;
         height: 100vh;
         background: rgba(0, 0, 0, .5);
         left: 0;
         top: 0;
         z-index: 8800;
         overflow-y: auto;
         }
         .railway-modal-container {
         width: 100%;
         max-width: 280px;
         margin: 0 auto;
         position: relative;
         left: 0;
         right: 0;
         display: flex;
         justify-content: center;
         align-items: center;
         height: 100%;
         }
         .railway-modal-content {
         background-color: #FFF;
         border-radius: 10px;
         width: 100%;
         }
         .railway-modal-body {
         max-width: 100%;
         background: #FFFFFF;
         margin: auto;
         box-shadow: 0px 2px 8px rgba(108, 152, 166, 0.05);
         border-radius: 8px;
         padding: 24px 15px 32px 24px;
         text-align: center;
         font-weight: 400;
         box-sizing: border-box;
         }
         img.go-back-modal-btn {
         width: 40px;
         height: 40px;
         padding: 12px;
         box-sizing: border-box;
         cursor: pointer;
         }
         .close-icon {
         width: 35px;
         height: 35px;
         padding: 12px;
         box-sizing: border-box;
         cursor: pointer;
         position: relative;
         top: -15px;
         right: -10px;
         }
         .railway-modal-container .header {
         display: flex;
         justify-content: space-between;
         }
         .railway-modal-container .header h4 {
         font-family: Roboto, sans-serif;
         font-style: normal;
         font-weight: bold;
         font-size: 18px;
         line-height: 22px;
         color: #DA924E;
         margin: 0;
         }
         .railway-modal-container .modal-text-container h5 {
         font-family: Roboto, sans-serif;
         font-style: normal;
         font-weight: bold;
         font-size: 16px;
         line-height: 22px;
         color: #DA924E;
         margin: 15px 0;
         }
         .modal-text-container {
         text-align: left;
         height: auto;
         overflow-y: auto;
         margin-top: 0;
         }
         .modal-text-container p, .modal-text-container li{
         font-size: 16px;
         line-height: 24px;
         font-weight: 400;
         color: #444444;
         }
         .modal-text-container p a {
         color: #DA924E;
         }
         /* Custom scrollbar */
         .modal-text-container::-webkit-scrollbar-track
         {
         -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
         background-color: #F5F5F5;
         border-radius: 4px;
         }
         .modal-text-container::-webkit-scrollbar
         {
         width: 10px;
         background-color: #F5F5F5;
         }
         .modal-text-container::-webkit-scrollbar-thumb
         {
         background-color: #C4C4C4;
         border: 2px solid #C4C4C4;
         border-radius: 4px;
         }
         p.tech-support {
         font-size: 18px;
         font-weight: bold;
         margin: 0;
         line-height: 20px;
         }
         @media (max-width: 768px){
         .railway-modal-container{
         padding: 0 10px;
         box-sizing: border-box;
         }
         }
      </style>
      <!-- Need help modal -->
      <div class="railway-modal-wrapper" id="need-help-modal" style="display: none;">
         <div class="railway-modal-container">
            <div class="railway-modal-content">
               <div class="railway-modal-body">
                  <div class="header">
                     <div></div>
                     <img src="https://eticket.railway.gov.bd/v2/assets/img/icon/cross.svg" alt="times icon" class="close-icon" onclick="$('#need-help-modal').hide();">
                  </div>
                  <div class="modal-text-container">
                     <p class="tech-support">Tech Support Team</p>
                     <p class="support-email">
                        <a href="mailto:support@eticket.railway.gov.bd">support@eticket.railway.gov.bd</a>
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script src="https://eticket.railway.gov.bd/v2/assets/js/jquery.min.js"></script>
      <script>
         $("document").ready(function(){
         
             // Login form submission
             $("#loginForm").submit(function(e){
                 e.preventDefault();
         
                 // Clear form validation errors
                 $(".password-reset-success").remove();
                 $(".railway-form-error").remove();
         
                 if(window.navigator.onLine === false){
                     $(".login-request-errors").html('<div class="railway-form-error" style="height: auto;">Please check your internet connection.</div>');
                     return false;
                 }
         
                 $(this).find("button[type='submit']").prop('disabled', true);
         
                 $.ajax({
                     type: 'post',
                     data: $(this).serialize(),
                     url: $(this).attr('action'),
                     dataType: 'json',
                     success: function(response){
                         if(response.data.nid_validated == 0){
                             window.location.href = "https://eticket.railway.gov.bd/verify-nid/en";
                             return;
                         }
                         window.location.href = 'https://eticket.railway.gov.bd';
                     },
                     error: function(jqXHR, textStatus, errorThrown){
                         $("#loginForm").find("button[type='submit']").prop('disabled', false);
         
                         var statusCode = jqXHR.status;
                         var errorMessages = jqXHR.responseJSON.error;
                         if('messages' in errorMessages && statusCode === 422){
                             if('errors' in errorMessages.messages){
                                 var formErrors = errorMessages.messages.errors;
                                 Object.keys(formErrors).forEach(function(key,index) {
                                     var currentElement = $("#" + key).closest(".login-form-control-single");
                                     currentElement.append('<div class="railway-form-error">' + formErrors[key][0] + '</div>');
                                 });
                             }else if(typeof(errorMessages.messages) === 'object'){
                                 for(var i = 0; i < errorMessages.messages.length; i++){
                                     $(".login-request-errors").html('<div class="railway-form-error" style="height: auto;">'+errorMessages.messages[i]+'</div>');
                                 }
                             }
                             return;
                         }
                         $(".login-request-errors").html('<div class="railway-form-error" style="height: auto;">Server error occurred.</div>');
                     }
                 });
             });
         
             /* ########### Password restoration part */
             var forgotPasswordWrapperClass = ".forgot-password-modal-wrapper";
             var OTPInputWrapperClass = ".otp-input-modal-wrapper";
             var newPasswordWrapperClass = ".new-password-modal-wrapper";
             var otpResendable = false;
             var otpSentCount = 0;
             var timerInterval = null;
         
             // Initialize password reset modal
             $("a.forgot-password-link").click(function(e){
                 e.preventDefault();
                 $("body").addClass('modal-opened');
                 $("form#forgotPasswordForm")[0].reset();
                 $(forgotPasswordWrapperClass).fadeIn(function(){
                     $("#OTPmobileNumber").focus();
                 });
             });
         
             if ('') {
                 $("a.forgot-password-link").trigger('click');
             }
         
             // Close forgot password modal
             $(forgotPasswordWrapperClass+" .close-icon-image").click(function(e){
                 e.preventDefault();
                 $("body").removeClass('modal-opened');
                 $(forgotPasswordWrapperClass).fadeOut();
                 resetForgotPasswordFlow();
             });
         
             // Forgot password go back button clicked
             $(forgotPasswordWrapperClass+" .go-back-modal-btn").click(function(e){
                 e.preventDefault();
                 $("body").removeClass('modal-opened');
                 $(forgotPasswordWrapperClass).fadeOut();
             });
         
             // Close PIN input modal
             $(OTPInputWrapperClass+" .close-icon-image").click(function(e){
                 e.preventDefault();
                 $("body").removeClass('modal-opened');
                 $(OTPInputWrapperClass).fadeOut();
                 resetForgotPasswordFlow();
             });
         
             // Pin input go back button clicked
             $(OTPInputWrapperClass+" .go-back-modal-btn").click(function(e){
                 e.preventDefault();
                 $(OTPInputWrapperClass).fadeOut(function(){
                     $(forgotPasswordWrapperClass).fadeIn();
                 });
             });
         
             // Close new password modal
             $(newPasswordWrapperClass+" .close-icon-image").click(function(e){
                 e.preventDefault();
                 $("body").removeClass('modal-opened');
                 $(newPasswordWrapperClass).fadeOut();
                 resetForgotPasswordFlow();
             });
         
             // New password go back button clicked
             $(newPasswordWrapperClass+" .go-back-modal-btn").click(function(e){
                 e.preventDefault();
                 if(otpSentCount > 2){
                     $("#new-password-input-wrapper .railway-form-error").remove();
                     $("#new-password-input-wrapper").prepend('<div class="railway-form-error" style="margin-bottom: 20px; height: auto;">OTP can be resent maximum 2 times.</div>');
                     return false;
                 }
         
                 otpResendable = false;
         
                 // Clearing timer interval
                 if(timerInterval !== null){
                     clearInterval(timerInterval);
                 }
                 // Disabling buttons
                 $(".resend-otp-div button.resend").prop('disabled', true);
                 $(newPasswordWrapperClass).find(".railway-form-error").remove();
         
                 $("form#otpInputForm")[0].reset();
                 $("form#newPasswordForm")[0].reset();
         
                 var mobile_number = $("#OTPmobileNumber").val();
                 if(mobile_number.length > 0){
                     forgotPasswordFormSubmit('new_password');
                 }else{
                     $("#new-password-input-wrapper .railway-form-error").remove();
                     $("#new-password-input-wrapper").prepend('<div class="railway-form-error" style="margin-bottom: 20px; height: auto;">Mobile number not found.</div>');
                 }
             });
         
             var resetForgotPasswordFlow = function() {
                 otpResendable = false;
         
                 // Clearing timer interval
                 if(timerInterval !== null){
                     clearInterval(timerInterval);
                 }
         
                 // Disabling buttons
                 $(".resend-otp-div button.resend").prop('disabled', true);
                 $(forgotPasswordWrapperClass).find(".railway-form-error").remove();
                 $(OTPInputWrapperClass).find(".railway-form-error").remove();
                 $(newPasswordWrapperClass).find(".railway-form-error").remove();
                 $(".forgot-pass-response-message").html('');
                 $(".opt-sent-again-message").html('');
         
                 // Resetting forms
                 $("form#forgotPasswordForm")[0].reset();
                 $("form#otpInputForm")[0].reset();
                 $("form#newPasswordForm")[0].reset();
             }
         
             // Forgot password form submission
             $("#forgotPasswordForm").submit(function(e){
                 e.preventDefault();
                 $(this).find("button[type='submit']").prop('disabled', true);
                 // Removing form validation errors
                 $(".forgot-pass-response-message").html('');
                 if(timerInterval !== null){
                     clearInterval(timerInterval);
                 }
                 forgotPasswordFormSubmit();
             });
         
             function forgotPasswordFormSubmit(type = 'forgot'){
                 $.ajax({
                     type: 'post',
                     data: {mobile_number: $("#OTPmobileNumber").val()},
                     url: $("#forgotPasswordForm").attr('action'),
                     dataType: 'json',
                     success: function(response){
                         otpSentCount++;
                         $("form#otpInputForm")[0].reset();
                         $("#railway-otp-input-wrapper .railway-form-error").remove();
                         $(".opt-sent-again-message").html('');
                         if(type === 'forgot'){
                             $(forgotPasswordWrapperClass).fadeOut(function(){
                                 openOTPInputModal();
                             });
                         }else{
                             $(newPasswordWrapperClass).fadeOut(function(){
                                 openOTPInputModal();
                             });
                         }
                     },
                     error: function(jqXHR, textStatus, errorThrown){
                         $(newPasswordWrapperClass).fadeOut(function(){
                             $(forgotPasswordWrapperClass).fadeIn();
                         });
                         var statusCode = jqXHR.status;
                         var errorMessages = jqXHR.responseJSON.error;
                         if('messages' in errorMessages && statusCode === 422){
                             if('errors' in errorMessages.messages){
                                 var formErrors = errorMessages.messages.errors;
                                 Object.keys(formErrors).forEach(function(key,index) {
                                     $(".forgot-pass-response-message").append('<div class="railway-form-error" style="margin-bottom: 20px; height: auto;">' + formErrors[key][0] + '</div>');
                                 });
                             }else if(typeof(errorMessages.messages) === 'object'){
                                 for(var i = 0; i < errorMessages.messages.length; i++){
                                     $(".forgot-pass-response-message").append('<div class="railway-form-error" style="margin-bottom: 20px; height: auto;">' + errorMessages.messages[i] + '</div>');
                                 }
                             }
                             return;
                         }
                         $(".forgot-pass-response-message").append('<div class="railway-form-error" style="margin-bottom: 20px; height: auto;">Server error occurred.</div>');
                     },
                     complete: function(res){
                         $("#forgotPasswordForm").find("button[type='submit']").prop('disabled', false);
                     }
                 });
             }
         
             // OTP form submission
             $(".otp-input-modal-container #otpInputForm").submit(function(e){
                 e.preventDefault();
         
                 // Removing form validation errors
                 $("#railway-otp-input-wrapper .railway-form-error").remove();
                 $(".opt-sent-again-message").html('');
         
                 var otp = prepareOTPCode();
                 var mobile_number = $("#OTPmobileNumber").val();
                 if(otp !== false && mobile_number.length > 0){
                     $(this).find("button[type='submit']").prop('disabled', true);
                     var request_body = {
                         mobile_number: mobile_number,
                         verification_code: otp
                     }
         
                     $.ajax({
                         type: 'patch',
                         data: request_body,
                         url: $(this).attr('action'),
                         dataType: 'json',
                         success: function(response){
                             $(OTPInputWrapperClass).fadeOut(function(){
                                 // Removing form validation errors for new passwrod form
                                 $(".new-password-single-input .railway-form-error").remove();
                                 $("#new-password-input-wrapper .railway-form-error").remove();
                                 $(".login-request-errors").html('');
                                 $(newPasswordWrapperClass).fadeIn(function(){
                                     $("#new-password-input-wrapper #new_password").focus();
                                 });
                             });
                         },
                         error: function(jqXHR, textStatus, errorThrown){
                             var statusCode = jqXHR.status;
                             var errorMessages = jqXHR.responseJSON.error;
                             if('messages' in errorMessages && statusCode === 422){
                                 if('errors' in errorMessages.messages){
                                     var formErrors = errorMessages.messages.errors;
                                     Object.keys(formErrors).forEach(function(key,index) {
                                         $("#railway-otp-input-wrapper").prepend('<div class="railway-form-error" style="margin-bottom: 20px; height: auto;">' + formErrors[key][0] + '</div>');
                                     });
                                 }else if(typeof(errorMessages.messages) === 'object'){
                                     for(var i = 0; i < errorMessages.messages.length; i++){
                                         $("#railway-otp-input-wrapper").prepend('<div class="railway-form-error" style="margin-bottom: 20px; height: auto;">'+ errorMessages.messages[i] +'</div>');
                                     }
                                 }
                                 return;
                             }
                             $("#railway-otp-input-wrapper").prepend('<div class="railway-form-error" style="margin-bottom: 20px; height: auto;">Server error occurred.</div>');
                         },
                         complete: function(res){
                             $(".otp-input-modal-container #otpInputForm").find("button[type='submit']").prop('disabled', false);
                         }
                     });
                 }else{
                     if(otp === false){
                         $("#railway-otp-input-wrapper").prepend('<div class="railway-form-error" style="margin-bottom: 20px; height: auto;">Please enter OTP.</div>');
                     }else if(!mobile_number.length){
                         $("#railway-otp-input-wrapper").prepend('<div class="railway-form-error" style="margin-bottom: 20px; height: auto;">Mobile number not found.</div>');
                     }
                 }
             });
         
             function openOTPInputModal() {
                 $(OTPInputWrapperClass).fadeIn(function(){
                     resendOTPButtonActivateTimer();
                     $(".otp-input-div input:first-child").focus();
                 });
             }
         
             // New password form submission
             $(".new-password-modal-container #newPasswordForm").submit(function(e){
                 e.preventDefault();
         
                 // Removing form validation errors
                 $(".new-password-single-input .railway-form-error").remove();
                 $("#new-password-input-wrapper .railway-form-error").remove();
                 $(".login-request-errors").html('');
         
                 var mobile_number = $("#OTPmobileNumber").val();
                 var new_password = $("#new_password").val();
                 var new_password_confirmation = $("#new_password_confirmation").val();
                 if(new_password.length === new_password_confirmation.length && new_password === new_password_confirmation && mobile_number.length > 0){
                     $(this).find("button[type='submit']").prop('disabled', true);
                     var request_body = {
                         mobile_number: mobile_number,
                         password: new_password,
                         password_confirmation: new_password_confirmation
                     }
         
                     $.ajax({
                         type: 'patch',
                         data: request_body,
                         url: $(this).attr('action'),
                         dataType: 'json',
                         success: function(response){
                             $(newPasswordWrapperClass).fadeOut(function(){
                                 $(".login-request-errors").html('<div class="password-reset-success">Password has been reset successfully.</div>');
                                 $("form#forgotPasswordForm")[0].reset();
                                 $("form#otpInputForm")[0].reset();
                                 $("form#newPasswordForm")[0].reset();
                                 otpSentCount = 0;
                             });
                         },
                         error: function(jqXHR, textStatus, errorThrown){
                             var statusCode = jqXHR.status;
                             var errorMessages = jqXHR.responseJSON.error;
                             if('messages' in errorMessages && statusCode === 422){
                                 if('errors' in errorMessages.messages){
                                     var formErrors = errorMessages.messages.errors;
                                     Object.keys(formErrors).forEach(function(key,index) {
                                         var currentElement = $("#new_" + key).closest(".new-password-single-input");
                                         if(currentElement.length > 0){
                                             currentElement.append('<div class="railway-form-error">' + formErrors[key][0] + '</div>');
                                         }else{
                                             $(newPasswordWrapperClass).fadeOut(function(){
                                                 openOTPInputModal();
                                                 $("#railway-otp-input-wrapper").prepend('<div class="railway-form-error" style="margin-bottom: 20px; height: auto;">' + formErrors[key][0] + '</div>');
                                             });
                                         }
                                     });
                                 }else if(typeof(errorMessages.messages) === 'object'){
                                     for(var i = 0; i < errorMessages.messages.length; i++){
                                         $("#new-password-input-wrapper").prepend('<div class="railway-form-error" style="margin-bottom: 20px; height: auto;">' + errorMessages.messages[i] + '</div>');
                                     }
                                 }
                                 return;
                             }
                             $("#new-password-input-wrapper").prepend('<div class="railway-form-error" style="margin-bottom: 20px; height: auto;">Server error occurred</div>');
                         },
                         complete: function(res){
                             $(".new-password-modal-container #newPasswordForm").find("button[type='submit']").prop('disabled', false);
                         }
                     });
                 }else{
                     if(!mobile_number.length){
                         $("#new-password-input-wrapper").prepend('<div class="railway-form-error" style="margin-bottom: 20px; height: auto;">Mobile number not found.</div>');
                     }
         
                     if(new_password.length !== new_password_confirmation.length || new_password !== new_password_confirmation){
                         $("#new_password_confirmation").closest(".new-password-single-input").append('<div class="railway-form-error" style="margin-bottom: 20px; height: auto;">Confirm password does not match.</div>');
                     }
                 }
             });
         
             // Resending OTP ajax call.
             $(".resend-otp-div button.resend").click(function(e){
                 e.preventDefault();
                 $(".opt-sent-again-message").html('');
                 $(".railway-form-error").remove();
         
                 if(window.navigator.onLine === false){
                     $(".opt-sent-again-message").html('<div class="railway-form-error" style="height: auto;">Please check your internet connection.</div>');
                     return false;
                 }
         
                 if(otpSentCount > 2){
                     $(".opt-sent-again-message").html('<div class="railway-form-error" style="margin-bottom: 20px; height: auto;">OTP can be resent maximum 2 times.</div>');
                     return false;
                 }
         
                 $(this).prop('disabled', true);
         
                 // Form reset and removing validation error messages
                 $(".otp-input-modal-container #otpInputForm")[0].reset();
         
                 var mobile_number = $("#OTPmobileNumber").val();
                 if(otpResendable && mobile_number.length > 0){
                     $.ajax({
                         type: 'post',
                         data: {mobile_number: mobile_number},
                         url: $(this).attr('data-request-url'),
                         dataType: 'json',
                         success: function(response){
                             otpSentCount++;
                             $(".opt-sent-again-message").html('<div class="otp-resend-success" style="margin-bottom: 20px; height: auto;">OTP sent</div>');
                             resendOTPButtonActivateTimer();
                             $(".otp-input-div input:first-child").focus();
                         },
                         error: function(jqXHR, textStatus, errorThrown){
                             var statusCode = jqXHR.status;
                             var errorMessages = jqXHR.responseJSON.error;
                             if('messages' in errorMessages && statusCode === 422){
                                 if('errors' in errorMessages.messages){
                                     var formErrors = errorMessages.messages.errors;
                                     Object.keys(formErrors).forEach(function(key,index) {
                                         $('#railway-otp-input-wrapper').prepend('<div class="railway-form-error" style="margin-bottom: 20px; height: auto;">' + formErrors[key][0] + '</div>');
                                     });
                                 }else if(typeof(errorMessages.messages) === 'object'){
                                     for(var i = 0; i < errorMessages.messages.length; i++){
                                         $('#railway-otp-input-wrapper').prepend('<div class="railway-form-error" style="margin-bottom: 20px; height: auto;">' + errorMessages.messages[i] + '</div>');
                                     }
                                 }
                                 return;
                             }
                             $(".opt-sent-again-message").html('<div class="railway-form-error" style="margin-bottom: 20px; height: auto;">Server error occurred</div>');
                         }
                     });
                 }else{
                     if(!otpResendable){
                         $(".opt-sent-again-message").html('<div class="railway-form-error waiting-err-text" style="margin-bottom: 20px; height: auto;">Please wait for the timer.</div>');
                     }else if(!mobile_number.length){
                         $(".opt-sent-again-message").html('<div class="railway-form-error" style="margin-bottom: 20px; height: auto;">Mobile number not found</div>');
                     }
                 }
             });
         
             // OTP related part
             var resendOTPButtonActivateTimer = function() {
                 otpResendable = false;
                 $(".resend-otp-div .timer").text("");
                 var timer = parseInt(180);
         
                 // Clearing timer interval
                 if(timerInterval !== null){
                     clearInterval(timerInterval);
                 }
                 
                 timerInterval = setInterval(function(){
                     var secondDigit = timer % 60;
                     var minuteDigit = Math.floor(timer / 60);
                     minuteDigit = (minuteDigit.toString().length == 2) ? minuteDigit : "0"+minuteDigit;
                     secondDigit = (secondDigit.toString().length == 2) ? secondDigit : "0"+secondDigit;
                     $(".resend-otp-div .timer").text(minuteDigit+":"+secondDigit);
                     if(timer == 0){
                         clearInterval(timerInterval);
                         $(".resend-otp-div .resend").removeAttr('disabled');
                         $(".waiting-err-text").remove();
                         otpResendable = true;
                     }
                     timer--;
                 }, 1000);
             }
         
             // Preparing the otp from the inputs
             var prepareOTPCode = function(){
                 var otp = '', otpInputs = $(".otp-input-div input");
                 otpInputs.each(function(index, element){
                     otp += $(element).val();
                 });
                 return (otp.length === otpInputs.length) ? otp : false;
             }
         
             // OTP input changer
             $(".otp-input-div input[data-input-type='otp']").on('keypress keydown', function(e){
                 var isBackspaceOrDelete = false;
                 if (e.key !== undefined && (e.key === 'Backspace' || e.key === 'Delete')) {
                     isBackspaceOrDelete = true;
                 } else if (e.keyCode !== undefined && (e.keyCode === 8 || e.keyCode === 46)) {
                     isBackspaceOrDelete = true;
                 } else if (e.which  !== undefined && (e.which  === 8 || e.which  === 46)) {
                     isBackspaceOrDelete = true;
                 }
         
                 if(isBackspaceOrDelete){
                     var currentInputPosition = parseInt($(this).attr('data-input-position'));
                     if(currentInputPosition > 1 && $(this).val() === ''){
                         $("#pinInput" + (currentInputPosition - 1)).focus();
                     }else{
                         $(this).val('');
                     }
                 }
             });
         
             $(".otp-input-div input[data-input-type='otp']").on('keyup', function(e){
                 var digit = '';
                 if (e.key !== undefined && (e.key >= 0 && e.key <= 9)) {
                     digit = e.key;
                 } else if (e.keyCode !== undefined && ((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105))) {
                     var digitArray = {"48" : 0, "49" : 1, "50" : 2, "51" : 3, "52" : 4, "53" : 5, "54" : 6, "55" : 7, "56" : 8, "57" : 9, "96" : 0, "97" : 1, "98" : 2, "99" : 3, "100" : 4, "101" : 5, "102" : 6, "103" : 7, "104" : 8, "105" : 9};
                     digit = digitArray[e.keyCode];
                 } else if (e.which  !== undefined && ((e.which >= 48 && e.which <= 57) || (e.which >= 96 && e.which <= 105))) {
                     var digitArray = {"48" : 0, "49" : 1, "50" : 2, "51" : 3, "52" : 4, "53" : 5, "54" : 6, "55" : 7, "56" : 8, "57" : 9, "96" : 0, "97" : 1, "98" : 2, "99" : 3, "100" : 4, "101" : 5, "102" : 6, "103" : 7, "104" : 8, "105" : 9};
                     digit = digitArray[e.which];
                 }
                 if(digit){
                     $(this).val(digit);
                     var currentInputPosition = parseInt($(this).attr('data-input-position'));
                     if(currentInputPosition < 6){
                         $("#pinInput" + (currentInputPosition + 1)).focus();
                     }
                 }
             });
         
             var isPasswordShown = false;
             $("button.password-show-hide-btn").click(function(e){
                 e.preventDefault();
                 if(isPasswordShown){
                     $(".login-form-control-single #password").attr('type', 'password');
                     isPasswordShown = false;
                 }else{
                     $(".login-form-control-single #password").attr('type', 'text');
                     isPasswordShown = true;
                 }
             });
         
             $("a[data-modal-target='terms']").on('click', function(e){
                 e.preventDefault();
                 $("#terms-modal").show();
             });
         
             $("a[data-modal-target='help']").on('click', function(e){
                 e.preventDefault();
                 $("#need-help-modal").show();
             });
         
             $("#railway-otp-input-wrapper .otp-input-div input[data-input-type='otp'").bind('paste', function(e){
                 var pin = e.originalEvent.clipboardData.getData('text');
                 $("#railway-otp-input-wrapper .otp-input-div input[data-input-type='otp'").val('');
                 for(var i = 1; i <= pin.length; i++){
                     $("#railway-otp-input-wrapper .otp-input-div input[data-input-position='"+i+"'").val(pin[i-1]).focus();
                 }
             });
         });
      </script>
   </body>
</html>
