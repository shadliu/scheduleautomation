{{-- @extends('layouts.app')
@section('title', 'Register')
@section('content')
  <!-- signup -->
  <div class="page-3-sec-1">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="p-3d1">
                <form class="sgnup" method="POST" action="{{ route('register') }}" style="border:1px solid #ccc">
                  @csrf
                    <div class="container">
                      <h1>Create an account</h1>
                      <p>Or, <span> sign into your account.</span></p>
                      <hr>
                      <div class="p3-1 d-flex">
                          <div class="col-lg-12">
                            <label for="name"><b>Full Name Here</b></label>
                            <input  type="text" id="lgin" placeholder="Full Name" name="name" value="{{ old('name') }}" required>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                      </div>
                      <br>
                      <label for="email"><b>Email</b></label>
                      <input type="text" id="lgin" placeholder="Enter Email" name="email" value="{{ old('email') }}" required>
                      @error('email')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                      <br>
                      <br>
                      <label for="ph">Phone Number</label> <br>
                      <div class="snup-dgn d-flex">
                          <select name="" id="">
                            <option value=""> +880</option>
                          </select>
                          <input type="text" id="lgin" placeholder="Enter your phone number" name="phone" value="{{ old('phone') }}" required>
                          @error('phone')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                      </div>
                      <br> <br>
                      <label for="psw"><b>Password</b></label>
                      <input type="password" id="lgin" placeholder="Enter Password" name="password" value="{{ old('password') }}" required>
                      @error('password')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                      <br> <br>
                      <label for="psw"><b>Confirm Password</b></label>
                      <input type="password" id="lgin" placeholder="Enter Password" name="password_confirmation">
                      <br> <br>
                      <p> By registering I accept the TOLETBOOK.COM Terms and Condition</p>
                      <div class="clearfix">
                          <button type="submit" class="signupbtn">Sign Up</button>
                      </div>
                    </div>
                </form>
                <p>------------------------------------Or-----------------------------------</p>
                <button class="p3btn"><i class="fab fa-google "></i>Continue with Google</button>
                <button class="p3btn"><i class="fab fa-facebook"></i>Continue with Facebook</button>
              </div>
          </div>
        </div>
        </form> 
    </div>
  </div>
  </div>    
  </div>
  </div>
@endsection --}}

<html lang="en" class=" js multiplebgs boxshadow cssgradients">
   <head>
      <link href="https://eticket.railway.gov.bd/manifest.json" rel="manifest">
      <meta property="og:title" content="Bangladesh Railway E-Ticketing Service">
      <meta property="og:image" content="https://eticket.railway.gov.bd/img/railway-og-image.png">
      <meta property="og:description" content="Buy rail tickets online in three easy steps: search, select and pay. The tickets are issued by Bangladesh Railway’s CCSRTS.">
      <meta property="og:url" content="https://eticket.railway.gov.bd/register/en">
      <meta charset="utf-8">
      <meta http-equiv="content-type" content="text/html">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta http-equiv="Pragma" content="no-cache">
      <meta http-equiv="Expires" content="-1">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- <meta name="google-site-verification" content="" /> -->
      <link rel="shortcut icon" href="https://eticket.railway.gov.bd/img/favicon.ico" type="image/x-icon">
      <link rel="icon" href="https://eticket.railway.gov.bd/img/favicon.ico" type="image/x-icon">
      <!-- <meta name="msvalidate.01" content="" /> -->
      <script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/releases/sNQO7xVld1CuA2hfFHvkpVL-/recaptcha__en.js" crossorigin="anonymous" integrity="sha384-Zkv9F02+yghSXAFFLPZt/TKDOCrO9vWe4j0Nx8+F2CXcAqAqpPE66Q9PuIf0y2a3"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
      <script src="https://eticket.railway.gov.bd/js/bootstrap-modal.js"></script>
      <!-- Trufis core CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
      <!-- JQuery UI CSS -->
      <link rel="stylesheet" type="text/css" href="https://eticket.railway.gov.bd/css/jquery-ui.css?v=2">
      <!-- datepicker for this template -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
      <!-- Custom styles for this template -->
      <link href="https://eticket.railway.gov.bd/css/shohoz_style.css?v=10.0.19" rel="stylesheet">
      <link href="https://eticket.railway.gov.bd/css/meanmenu.min.css" rel="stylesheet">
      <link href="https://eticket.railway.gov.bd/css/template.css?v=1" rel="stylesheet">
      <noscript>
         <meta http-equiv="refresh" id="mtaJSCheck" content="0;/enable-javascript.html" />
      </noscript>
      <link href="https://eticket.railway.gov.bd/font-awesome-4.3.0/css/font-awesome.css?v=2" rel="stylesheet">
      <!--CleverTap and Google - Start-->
      <script>
         if ('serviceWorker' in navigator) {
             window.addEventListener('load', function() {
                 navigator.serviceWorker.register("https://eticket.railway.gov.bd/sw.js").then(function(registration) {
                     // Registration was successful
                     console.log('ServiceWorker registration successful with scope: ', registration.scope);
                 }, function(err) {
                     // registration failed :(
                     console.log('ServiceWorker registration failed: ', err);
                 });
             });
         }
      </script><!--CleverTap and Google - End-->
      <title>Verify Your NID | Customer centric railway system</title>
      <meta name="keywords" content="Online train ticket booking, Buy train tickets, Train ticket booking, Railway ticket, bd railway, online train ticket, bangladesh railway ticket, bd train ticket, railway ticket booking, e ticket railway, e ticket train, bd railway ticket, bangladesh railway online ticket, bd train ticket">
      <meta name="description" content="Register on Bangladesh Railway E-Ticketing Service powered by Shohoz-Synesis-Vincen JV, in an easy way.">
      <meta name="author" content="Bangladesh Railway">
      <meta content="follow, index, all" name="robots">
      <link href="https://eticket.railway.gov.bd/css/loader.css" rel="stylesheet">
      <meta name="format-detection" content="telephone=no">
      <style>
         body {
         font-family: Roboto, sans-serif;
         font-size: 16px;
         margin: 0;
         padding: 0;
         font-weight: 400;
         box-sizing: border-box;
         }
         #main_wrapper {
         margin-top: 83px !important;
         }
         main.railway-register-page {
         width: 100%;
         height: auto;
         background-color: #FCFCFC;
         padding: 0 30px;
         box-sizing: border-box;
         padding-bottom: 60px;
         }
         .register-page-wrapper {
         width: 100%;
         max-width: 1150px;
         margin: 0 auto;
         }
         .rw-reg-header {
         height: 80px;
         margin-bottom: 20px;
         border-bottom: 1px solid #00674766;
         display: flex;
         justify-content: space-between;
         }
         .rw-reg-form-header {
         max-width: 370px;
         font-size: 16px;
         margin-bottom: 30px;
         }
         .rw-reg-header-title {
         height: 80px;
         line-height: 80px;
         }
         .rw-reg-header-title h2 {
         margin: 0;
         padding: 0;
         color: #0F2444;
         font-size: 24px;
         line-height: 80px;
         }
         .rw-go-back-home-btn-wrp {
         height: 80px;
         line-height: 80px;
         }
         .rw-go-back-home-btn-wrp a.go-back-home-btn {
         color: #0F2444AA;
         text-decoration: none;
         }
         .rw-go-back-home-btn-wrp a.go-back-home-btn:hover {
         color: #000000;
         }
         .rw-reg-form-header p {
         color: #0F244488;
         padding-left: 16px;
         }
         .rw-reg-form-wrapper {
         padding: 16px 0;
         background-color: #FFFFFF;
         max-width: 388px;
         border-radius: 4px;
         box-shadow: 0 0 3px inset #e6e6e6;
         margin: 0 auto;
         }
         .rw-reg-form-row {
         margin: 8px;
         display: flex;
         justify-content: space-between;
         }
         .rw-reg-form-control-wrp label {
         display: none;
         }
         .rw-reg-form-control-wrp input, .rw-reg-form-control-wrp select {
         display: block;
         width: 100%;
         height: 50px;
         border: 1px solid #CCCCCC;
         background-color: #FFFFFF;
         outline: 0;
         box-sizing: border-box;
         padding-left: 10px;
         border-radius: 4px;
         font-size: 16px;
         font-weight: normal;
         }
         .rw-reg-form-control-wrp input:focus,
         .rw-reg-form-control-wrp select:focus,
         .rw-reg-form-control-wrp textarea:focus {
         border-color: #888;
         }
         .rw-reg-form-control-wrp textarea {
         height: 95px;
         width: 100%;
         border-radius: 4px;
         border: 1px solid #CCCCCC;
         outline: 0;
         padding: 10px;
         font-size: 16px;
         box-sizing: border-box;
         font-weight: normal;
         }
         .rw-reg-form-col {
         width: 100%;
         padding: 4px 8px;
         }
         .address-form-control-col {
         width: 100%;
         }
         button.railway-reg-form-submit-btn {
         width: 100%;
         height: 46px;
         border: 0;
         outline: 0;
         background-color: #006747;
         color: #FFFFFF;
         font-size: 16px;
         letter-spacing: 1px;
         border-radius: 4px;
         cursor: pointer;
         }
         button.railway-reg-form-submit-btn:hover{
         background-color: #069669;
         }
         button:disabled, button[disabled] {
         border: 1px solid #4d645d !important;
         background-color: #9bb9b0 !important;
         color: #808080 !important;
         cursor: not-allowed !important;
         }
         .rw-reg-block {
         display: block;
         }
         a.already-registered-btn {
         color: #006747;
         text-decoration: none;
         font-weight: bold;
         display: block;
         text-align: center;
         margin-top: 16px;
         }
         a.already-registered-btn:hover {
         color: #011d14;
         }
         .railway-form-error {
         min-height: 40px;
         margin-top: 10px;
         padding: 11px 10px 11px 32px;
         font-weight: normal;
         background: #FFF1F0;
         border: 1px solid #FFCCC7;
         box-sizing: border-box;
         border-radius: 5px;
         font-size: 12px;
         line-height: 16px;
         color: rgba(0, 0, 0, 0.85);
         background-image: url(../img/icon/times-circle-icon.svg);
         background-repeat: no-repeat;
         background-position: 10px;
         text-align: left;
         }
         .success-alert {
         height: auto;
         padding: 11px 10px 11px 32px;
         background-color: #F6FFED;
         border-radius: 4px;
         border: 1px solid #B7EB8F;
         color: #000000;
         background-image: url(../img/icon/check-icon.svg);
         background-repeat: no-repeat;
         background-position: 10px;
         margin-bottom: 20px;
         }
         .rw-reg-form-control-wrp {
         position: relative;
         }
         .page-illustration {
         max-width: 388px;
         margin: 0 auto 16px;
         }
         .page-illustration img {
         width: 180px;
         margin: 0 auto;
         }
         .page-illustration h2 {
         font-style: normal;
         font-weight: 700;
         font-size: 24px;
         line-height: 26px;
         text-align: center;
         color: #595C7D;
         margin-top: 17px;
         }
         .page-illustration p {
         font-style: normal;
         font-weight: 400;
         font-size: 16px;
         line-height: 22px;
         text-align: center;
         color: #595C7D;
         mix-blend-mode: normal;
         opacity: 0.8;
         }
         .page-illustration span {
         font-style: normal;
         font-weight: 400;
         font-size: 16px;
         line-height: 22px;
         text-align: center;
         color: #595C7D;
         mix-blend-mode: normal;
         opacity: 0.8;
         display: block;
         }
         .dob-input-calendar-icon-button .ui-datepicker-trigger {
         float: none;
         margin: 0;
         }
         .dob-input-calendar-icon-button {
         position: absolute;
         right: 0;
         width: 40px;
         height: 50px;
         display: flex;
         justify-content: center;
         align-items: center;
         border: 0;
         top: 0;
         background: transparent;
         }
         .ui-datepicker select.ui-datepicker-month, .ui-datepicker select.ui-datepicker-year {
         color: black;
         }
         .rw-reg-form-control-wrp.has-error input {
         border-color: red !important;
         }
         .btn-submit-data {
         height: 48.45px;
         border: 1px solid #006747 !important;
         border-radius: 4.21329px;
         width: 100%;
         font-style: normal;
         font-weight: 700;
         font-size: 14.7465px;
         text-align: center;
         text-transform: uppercase;
         color: #006747;
         padding: 0;
         display: block;
         line-height: 48px;
         cursor: pointer;
         outline: 0;
         text-decoration: none !important;
         }
         .btn-submit-data:hover {
         background-color: #006747;
         color: #FFFFFF;
         }
         .birth-certificate-passport p {
         font-style: normal;
         font-weight: 400;
         font-size: 16.8532px;
         line-height: 23px;
         text-align: center;
         color: #595C7D;
         mix-blend-mode: normal;
         opacity: 0.8;
         margin: 14px 0 20px;
         }
         /* Chrome, Safari, Edge, Opera */
         input::-webkit-outer-spin-button,
         input::-webkit-inner-spin-button {
         -webkit-appearance: none;
         margin: 0;
         }
         /* Firefox */
         input[type=number] {
         -moz-appearance: textfield;
         }
         @media (max-width: 600px){
         .rw-reg-form-row {
         display: block;
         margin-bottom: 0;
         margin-top: 0;
         }
         .rw-reg-form-col {
         width: 100%;
         padding: 4px 8px;
         box-sizing: border-box;
         }
         .post-code-input-wrapper {
         margin-right: 8px;
         }
         .rw-reg-form-header p{
         padding-right: 16px;
         }
         }
         @media (max-width: 480px){
         main.railway-register-page{
         padding: 0 5px;
         }
         button.railway-reg-form-submit-btn {
         width: 100%;
         font-size: 14px;
         }
         }
         @media (max-width: 400px){
         .rw-reg-header-title h2 {
         font-size: 20px;
         padding-left: 20px;
         }
         .rw-reg-form-wrapper{
         margin-bottom: 50px;
         }
         .rw-reg-form-row{
         margin: 0;
         }
         }
         @media (max-width: 360px){
         button.railway-reg-form-submit-btn {
         width: 100px;
         font-size: 14px;
         height: 34px;
         margin-right: 10px;
         }
         a.already-registered-btn{
         font-size: 14px;
         }
         }
         @media (max-width: 290px){
         .rw-reg-header-title h2 {
         font-size: 18px;
         padding-left: 5px;
         }
         a.already-registered-btn {
         margin-top: 24px;
         display: block;
         text-align: center;
         }
         button.railway-reg-form-submit-btn {
         width: 100%;
         font-size: 14px;
         height: 34px;
         margin: 0;
         }
         .rw-reg-block {
         margin: 8px;
         }
         }
      </style>
   </head>
   <body class="body-en" style="" data-new-gr-c-s-check-loaded="14.1111.0" data-gr-ext-installed="">
      <style>
         .truck-nav:hover .truck-nav-icon-black {
         display:none !important;
         }
         .truck-nav-icon-white {
         display: none;
         }
         .main-navigation ul li a:hover, .main-navigation ul li a.current {
         background: inherit !important;
         color: #0F2444 !important;
         border-bottom: 2px solid #0F2444;
         border-radius: 0;
         }
         .main-navigation ul li a:focus, .main-navigation ul li a:active {
         text-decoration: none;
         }
         .current .truck-nav-icon-white {
         display:inline !important;
         }
         .truck-nav:hover .truck-nav-icon-white {
         display:inline !important;
         }
         .main-navigation {
         margin-right: 0;
         float: right;
         margin-top: 8px;
         }
         .site-logo .header-logo {
         display: flex;
         align-items: center;
         color: #DA924E;
         font-weight: 700;
         font-size: 20px;
         text-decoration: none;
         }
         .site-logo .header-logo .header-logo-img {
         margin-right: 10px;
         }
         .site-logo .header-logo-text {
         align-items: center;
         color: #DA924E;
         font-weight: 700;
         font-size: 20px;
         }
         .main-header {
         padding: 15px 0 15px;
         }
         .railway-logged-user {
         width: 211px;
         height: 42px;
         border: 1px solid #eeeeee !important;
         border-radius: 8px !important;
         box-sizing: border-box;
         color: #001529 !important;
         font-weight: bold;
         line-height: 42px;
         display: flex !important;
         justify-content: space-between;
         padding: 0 20px !important;
         align-items: center;
         }
         span.user-name-text {
         flex-basis: 157px;
         text-align: left;
         text-overflow: ellipsis;
         overflow: hidden;
         font-size: 14px !important;
         white-space: nowrap;
         }
         .railway-logged-user:hover, .railway-logged-user.has-active-child {
         border: 1px solid #C4C4C4 !important;
         border-radius: 8px !important;
         }
         .user-dropdown-railway {
         position: relative;
         }
         .user-dropdown-railway a i {
         font-size: 12px;
         }
         .user-dropdown-railway a .fa-chevron-up {
         display: none;
         }
         .user-dropdown-railway .user-related-links .single-url a {
         border-bottom: 0 !important;
         display: flex !important;
         align-items: center;
         font-style: normal;
         font-weight: 400;
         font-size: 14px !important;
         line-height: 22px !important;
         color: #6E6E6E !important;
         padding: 0 20px !important;
         height: 22px;
         }
         .user-dropdown-railway .user-related-links .single-url a > i {
         font-size: 16px;
         text-align: center;
         width: 16px;
         flex: none;
         margin-right: 15px;
         }
         .single-url a span {
         flex: 1;
         }
         .user-dropdown-submenu {
         position: absolute;
         width: 274px;
         height: auto;
         text-align: left;
         top: 100%;
         right: 0;
         display: none;
         background: #FFFFFF;
         box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.15);
         border-radius: 4px;
         z-index: 100;
         padding: 20px 0 0;
         }
         p.drop-title-user {
         font-family: 'Roboto';
         font-style: normal;
         font-weight: 500;
         font-size: 20px;
         line-height: 22px;
         color: #001529;
         margin: 0 0 24px;
         padding: 0 20px;
         overflow: hidden;
         text-overflow: ellipsis;
         }
         .dropdown-user-info {
         display: flex;
         padding: 0 20px;
         align-items: center;
         font-family: 'Roboto';
         font-style: normal;
         font-weight: 400;
         font-size: 14px;
         line-height: 22px;
         color: #6E6E6E;
         height: auto;
         margin-bottom: 20px;
         }
         .dropdown-user-info span {
         word-break: break-word;
         flex: 1;
         }
         .dropdown-user-info i {
         width: 16px;
         text-align: center;
         margin-right: 15px;
         flex: none;
         }
         .dropdown-user-info i.fa-envelope {
         font-size: 16px;
         }
         .dropdown-user-info i.fa-mobile {
         font-size: 28px;
         }
         .user-dropdown-divider {
         height: 1px;
         background: #CCC;
         margin-bottom: 20px;
         }
         .user-dropdown-submenu .user-related-links .single-url {
         display: block;
         margin-bottom: 18px;
         height: 24px;
         }
         .user-dropdown-submenu .user-related-links .single-url > a:hover, .user-dropdown-submenu .user-related-links .single-url > a.current {
         border-bottom-color: transparent !important;
         color: #006747 !important;
         }
         .nid-verification-warning {
         max-width: 1150px;
         min-height: 70px;
         margin: 16px auto;
         display: flex;
         padding: 0 15px;
         align-items: center;
         background: #FFFFFF;
         border: 1px solid rgba(133, 165, 205, 0.2);
         box-shadow: 0px 2px 8px rgb(108 152 166 / 10%);
         border-radius: 8px;
         }
         .verify-nid-btn {
         flex: none;
         margin-left: 16px;
         }
         .verify-nid-link:hover, .verify-nid-link:focus {
         color: #FFFFFF;
         }
         .warning-icon-holder {
         width: 70px;
         margin-right: 5px;
         flex: none;
         }
         .warning-text-holder {
         mix-blend-mode: normal;
         opacity: 0.8;
         }
         .warning-text-holder p {
         margin: 0;
         font-style: normal;
         font-weight: 700;
         font-size: 14px;
         line-height: 20px;
         color: #FF1A04;
         }
         .identity-verification-unavailable .warning-text-holder p {
         font-size: 16px;
         }
         .verify-nid-link {
         background: #006747;
         border-radius: 4px;
         width: 125px;
         height: 46px;
         font-style: normal;
         font-weight: 700;
         font-size: 14px;
         line-height: 19px;
         text-align: center;
         text-transform: uppercase;
         color: #FFFFFF;
         display: flex;
         justify-content: center;
         align-items: center;
         text-decoration: none !important;
         }
         .m-0{
         margin: 0;
         }
         @media (max-width: 991px){
         .identity-verification-guide {
         padding-bottom: 16px;
         }
         .user-dropdown-submenu {
         width: 100%;
         padding: 20px 0;
         height: calc(100vh - 388px);
         overflow: auto;
         }
         .dropdown-user-info, 
         .user-dropdown-railway .user-related-links .single-url a, 
         p.drop-title-user{
         padding: 0 5% !important;
         }
         .mean-container .mean-nav ul li.mean-last .railway-logged-user{
         width: 100%;
         color: #FFF !important;
         padding: 0 5% !important;
         border-left: 0 !important;
         border-bottom: 0 !important;
         border-radius: 0 !important;
         border-top: 1px solid rgba(255,255,255,.5) !important;
         background-color: #089d49 !important;
         }
         .user-dropdown-railway a .fa-chevron-up, .user-dropdown-railway a .fa-chevron-down {
         position: absolute;
         right: 20px;
         }
         .user-dropdown-railway a:hover .fa-chevron-down{
         display: none;
         }
         }
         @media screen and (max-width: 767px){
         .verify-nid-link {
         width: 100%;
         height: 30px;
         font-size: 12px;
         }
         .nid-verification-warning {
         display: block;
         padding: 5px;
         top: 80px;
         }
         .verify-nid-btn {
         margin: 10px 0 0;
         }
         .warning-icon-holder {
         width: 40px;
         margin-right: 5px;
         float: left;
         }
         .warning-text-holder p {
         font-size: 11px;
         }
         .nid-verification-warning {
         margin-bottom: 0;
         align-items: start;
         }
         .truck-nav-icon-white {
         display: inline;
         }
         .truck-nav-icon-black {
         display: none;
         }
         .railway-logged-user {
         color: #FFF;
         padding: 10px 20px;
         }
         header.new-header .site-wrapper {
         padding: 0 5px 0 0;
         }
         }
      </style>
      <link rel="stylesheet" href="https://eticket.railway.gov.bd/v2/assets/styles/learn.css?v=1.4.10">
      <header class="new-header">
         <input type="hidden" id="www-search-id" name="www-search-id" value="">
         <!-- Header Top Part End Here -->
         <div class="main-header">
            <!-- Header Start Here -->
            <div class="container-wrapper">
               <div class="site-wrapper clearfix">
                  <div class="site-logo">
                     <a title="Bangladesh Railway" href="{{ route('index') }}" class="header-logo">
                        <div class="header-logo-img">
                           <img src="{{ asset('img/logo.png') }}" width="60" alt="Bangladesh Railway Logo">
                        </div>
                        <div class="header-logo-text" style="color: #206ad8;">
                           Customer centric railway system          
                        </div>
                     </a>
                  </div>
                  <nav class="main-navigation" style="display: block;">
                     <ul>
                        <li><a title="Railway Home" href="{{ route('index') }}" class="">Home</a></li>
                        @guest
                          <li><a title="Login" href="{{ route('login') }}" class="">Login</a></li>
                          <li><a title="Register" href="{{ route('register') }}" class="current">Register</a></li>
                        @endguest
                        @auth
                          @if (Auth::user()->role == 1)
                              <li><a title="Login" href="{{ route('admin.index') }}" class="">Admin Panel</a></li>
                          @endif
                          @if (Auth::user()->role == 2)
                              <li><a title="Login" href="#" class="">{{ Auth::user()->name }}</a></li>
                              <li>
                                 <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit">Logout </button>
                                 </form>
                              </li>
                          @endif
                        @endauth
                     </ul>
                  </nav>
                  <div class="mobile-menu"></div>
                  <!-- Header End Here -->
               </div>
            </div>
         </div>
      </header>
      <!-- main_wrapper starts here -->
      <div id="main_wrapper">
        <main class="railway-register-page">
            <div class="register-page-wrapper">
              <div class="rw-reg-header">
                  <div class="rw-reg-header-title">
                    <h2>Registration</h2>
                  </div>
                  <div class="rw-go-back-home-btn-wrp">
                    <!-- <a href="https://eticket.railway.gov.bd/en" class="go-back-home-btn">< Go Back To Home</a> -->
                  </div>
              </div>
              <div class="page-illustration">
                  <img src="https://eticket.railway.gov.bd/v2/assets/img/auth/verify-nid-illustration.svg" id="verify-nid-illustration" alt="Verify NID" class="img-responsive" width="180" height="136">
                  <p>Enter the information below to verify and register  with Customer centric railway system</p>
              </div>
              <div class="rw-reg-form-wrapper">
                  <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="rw-reg-form-row">
                        <div class="rw-reg-form-col">
                          <div class="rw-reg-form-control-wrp">
                              <label for="mobile_number">Enter Mobile Number</label>
                              <input type="tel" inputmode="tel" name="phone" placeholder="Enter Mobile Number" autocomplete="off" maxlength="11" required>
                              @error('phone')
                                  <span style="color: red;">{{ $message }}</span>
                              @enderror
                          </div>
                        </div>
                    </div>
                    <div class="rw-reg-form-row">
                        <div class="rw-reg-form-col">
                          <div class="rw-reg-form-control-wrp">
                              <label for="nid_number">Enter Name</label>
                              <input type="text" inputmode="tel" name="name" placeholder="Enter Name" autocomplete="off" >
                              @error('name')
                                  <span style="color: red;">{{ $message }}</span>
                              @enderror
                          </div>
                        </div>
                    </div>
                    <div class="rw-reg-form-row">
                        <div class="rw-reg-form-col">
                          <div class="rw-reg-form-control-wrp">
                              <label for="nid_number">Location</label>
                              <input type="text" inputmode="tel" name="address" placeholder="Enter Location" autocomplete="off" >
                              @error('address')
                                  <span style="color: red;">{{ $message }}</span>
                              @enderror
                          </div>
                        </div>
                    </div>
                    <div class="rw-reg-form-row">
                        <div class="rw-reg-form-col">
                          <div class="rw-reg-form-control-wrp">
                              <label for="nid_number">Password</label>
                              <input type="password" name="password" placeholder="Enter Password">
                              @error('password')
                                  <span style="color: red;">{{ $message }}</span>
                              @enderror
                          </div>
                        </div>
                    </div>
                    <div class="rw-reg-form-row rw-reg-block">
                        <div class="rw-reg-form-col">
                          <button type="submit" class="railway-reg-form-submit-btn">Register Now</button>
                        </div>
                    </div>
                  </form>
                  <div id="status"></div>
              </div>
            </div>
        </main>
      </div>
      <!-- main_wrapper ends here -->
      <style>
         .footer {
         background: #F6F9FF;
         padding: 0 50px;
         height: 119px;
         width: 100%;
         overflow: hidden;
         visibility: hidden;
         }
         .railway-footer-wrapper {
         display: flex;
         justify-content: space-between;
         align-items: center;
         height: 100%;
         width: 100%;
         max-width: 1150px;
         margin: 0 auto;
         }
         .footer .railway-logo{
         display: flex;
         }
         .footer .railway-logo .railway-logo-img{
         margin-right: 10px;
         }
         .footer .railway-logo .railway-logo-img img {
         width: 55px;
         }
         .footer .railway-logo-text .railway-text{
         font-weight: bold;
         font-size: 24px;
         line-height: 29px;
         text-align: center;
         color: #DA924E;
         }
         .footer .railway-logo-text .bangla-text{
         font-size: 13px;
         line-height: 15px;
         text-align: center;
         color: #006747;
         font-weight: 400;
         padding-top: 8px;
         }
         .footer .powered-by{
         font-weight: bold;
         font-size: 13px;
         line-height: 23px;
         color: #000000;
         }
         .footer .powered-by img{
         height: 32px;
         }
         .footer p{
         margin: 0;
         padding: 0;
         }
         .powered-company {
         font-size: 22px;
         font-weight: bold;
         color: #006747;
         }
         @media (max-width: 767px) {
         .mobile_view{
         margin: 0px 0px 4px -10px;
         }
         .footer {
         height: auto;
         padding: 50px;
         }
         .railway-footer-wrapper {
         flex-direction: column;
         }
         .footer .railway-logo {
         margin-bottom: 30px;
         }
         .footer .railway-logo-text .bangla-text, 
         .footer .railway-logo-text .railway-text {
         text-align: left;
         }
         }
      </style>
      <!-- Footer Start Here -->
      <footer class="footer" style="visibility: visible;">
         <div class="railway-footer-wrapper">
            <div class="railway-logo">
               <div class="railway-logo-img">
                  <img src="{{ asset('img/logo.png') }}" width="60" alt="Bangladesh Railway Logo">
               </div>
               <div class="railway-logo-text">
                  <p class="railway-text">Customer centric railway system</p>
                  <p class="bangla-text">নিরাপদ . আরামদায়ক . সাশ্রয়ী</p>
               </div>
            </div>
            <div class="railway-footer-urls" style="padding: 0px 0 15px;">
               <a href="#">Terms and Conditions</a> | <a href="#">Privacy Policy</a>
            </div>
         </div>
      </footer>
      <!-- Footer End Here -->
      <script>
         $(function () {
           setTimeout(function(){
             $('[autocomplete=off]').each(function(){
               if(typeof $(this).attr('value') === 'undefined'){
                 $(this).val('');
               }
             });
           }, 600);
         });
      </script>
      <!-- ===============  JAVASCRIPT STARTS ================ -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
      <!-- JQuery UI CSS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
      <script src="https://eticket.railway.gov.bd/js/modernizr.custom.2.6.2.min.js"></script>
      <script src="https://eticket.railway.gov.bd/js/jquery.meanmenu.min.js"></script>
      <script>
         $('nav.main-navigation').meanmenu({
               meanScreenWidth: "992",
               meanMenuContainer: '.mobile-menu'
           });
         
      </script>
      <style type="text/css">
         #couponPopup{
         z-index: 99999999;
         }
         #couponPopup .modal-dialog{
         z-index:99999; 
         margin-top: 10%; 
         width:600px;
         max-width: 100%;
         }
         #couponPopup .modal-content{
         padding: 12px; 
         border-radius:10px;
         }
         #couponPopup .modal-content button{
         margin: -25px -25px 0 0;
         background: #f73131;
         border-radius: 25px;
         font-weight: bold;
         color: #fff;
         }
         #coupon-popup-home{
         background: url("https://eticket.railway.gov.bd/img/coupon-popup/coupon-popup-home.png") no-repeat center #fff;
         background-size: 100% auto;
         min-height: 333px;
         }
         #coupon-popup-search{
         background: url("https://eticket.railway.gov.bd/img/coupon-popup/coupon-popup-search.png") no-repeat center #fff;
         background-size: 100% auto;
         min-height: 333px;
         }
         #coupon-popup-trip{
         background: url("https://eticket.railway.gov.bd/img/coupon-popup/coupon-popup-trip.png") no-repeat center #fff;
         background-size: 100% auto;
         min-height: 333px;
         background-size:cover;
         }
         .coupon-popup-content h4{
         margin: 207px 10px 0 0;
         }
         .coupon-popup-content h4 span{
         padding: 10px 3px;
         border-radius: 5px;
         color: #222;
         font-size: 16px;
         font-weight: bold;
         }
         .coupon-popup-content h4 span.coupon-code{
         padding: 3px 15px;
         border-radius: 5px;
         color: #c70000;
         font-weight: bold;
         font-size: 16px;
         margin-right: 120px;
         border: 2px dashed #f73131;
         font-family: sans-serif;
         }
         @media (max-width: 600px) {
         #coupon-popup-home, #coupon-popup-search, #coupon-popup-trip {
         background-size: 500px auto; /* Force the image to its minimum width */
         }
         .coupon-popup-content h4{
         margin: 192px 10px 0 0;
         }
         .coupon-popup-content h4 span.coupon-code{
         margin-right: 80px;
         }
         }
         @media (max-width: 500px) {
         #coupon-popup-home, #coupon-popup-search, #coupon-popup-trip {
         background-size: 420px auto; /* Force the image to its minimum width */
         }
         .coupon-popup-content h4{
         margin: 180px 10px 0 0;
         }
         .coupon-popup-content h4 span{
         font-size: 12px;
         }
         .coupon-popup-content h4 span.coupon-code{
         padding: 2px 11px;
         font-size: 12px;
         margin-right: 60px;
         }
         }
      </style>
      <script>
         /* Modal call */
         function modalCall(heading, text, body) 
         {
         var html = '<div style="" class="modal fade bs-example-modal-sm" id="modalCall" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">'
         		+ '<div class="modal-dialog modal-sm">'
         		+ '<div class="modal-content" style="padding: 12px"><h3>' + heading + '</h3>'
         		+ '<h4 style="">' + text + '</h4>'
         		+ '<div class="clearfix">&nbsp;</div>'
         		+ '<div class="">' + body + '</div>'
         		+ '<div class="col-xs-12 text-right">'
         		+ '<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>'                    
         		+ '</div>'
         		+ '<br><br>'
         		+ '</div>'
         		+ '</div>'
         		+ '</div>';
         		$('body').prepend(html);
         		$('#modalCall').modal({'backdrop': 'static'});
         		$('#modalCall').addClass('animated bounce');
         		$('#modalCall').on('hidden.bs.modal', function(e) {
         $('#modalCall').remove();
         });
         }
         
         function couponPopup(flash_coupon_page)
         {
         	return;
                $.ajax({
                    type: "POST",
                    url: "/booking/bus/flash-coupon/",
                    data: { flash_coupon_page: flash_coupon_page },
                    complete: function(xhr, textStatus) {
                        //  popAlert(xhr.status);
                    }
                }).done(function(data) {
                    //console.log(data);
                    //alert(data.flash_coupon)
                    if(data.coupon_code){
                    	$('.modal').modal('hide');
                    	var html = '<div class="modal fade bs-example-modal-sm" id="couponPopup" role="dialog" >'
         						+ '<div class="modal-dialog modal-sm">'
         						+ '<div id="coupon-popup-'+data.flash_coupon_page+'" class="modal-content coupon-popup-content">'
         						//+ '<div class="row text-right">'
         						+ '<button type="button" class="btn btn-sm pull-right" data-dismiss="modal">X</button>'                    
         						//+ '</div>'
         						+ '<h3> </h3>'
         						+ '<h4 class="round hollow pull-right"><span>Coupon: </span><span class="coupon-code">' + data.coupon_code + '</span></h4>'
         						+ '<div class="clearfix">&nbsp;</div>'
         						//+ '<div class="">' + body + '</div>'
         						+ '<br><br>'
         						+ '</div>'
         						+ '</div>'
         						+ '</div>';
         						$('body').prepend(html);
         						$('#couponPopup').modal({'backdrop': 'static'});
         						//$('#couponPopup').modal();
         						$('#couponPopup').addClass('animated bounce');
         						$('#couponPopup').on('hidden.bs.modal', function(e) {
         							$('#couponPopup').remove();
         						});
                    }
                });
         }
      </script>
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-Y4CW6X15DG"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         gtag('config', 'G-Y4CW6X15DG');
      </script>
      <script>
         if(typeof clevertap !== 'undefined'){
             clevertap.notificationCallback = function(msg){
                 //raise the notification viewed and clicked events in the callback
                 clevertap.raiseNotificationViewed();
                 console.log(JSON.stringify(msg));//your custom rendering implementation here
                 console.log(msg.msgContent.html);
                 var htmldata = msg.msgContent.html;
                 var modal = document.getElementById("mod-body");
                 modal.innerHTML = htmldata;
                 $("#cleverTapModal").modal();
             };
         
             clevertap.notifications.push({
                 "titleText":'Would you like to receive Push Notifications?',
                 "bodyText":'We promise to only send you relevant content and give you updates on your transactions',
                 "okButtonText":'Sign me up!',
                 "rejectButtonText":'No thanks',
                 "askAgainTimeInSeconds":600,
                 "serviceWorkerPath": "https://eticket.railway.gov.bd/js/sw.js",
                 "okButtonColor":'#079d49'
             });
         }
      </script>	
      <script src="https://www.google.com/recaptcha/api.js"></script>
      <script src="https://eticket.railway.gov.bd/js/identification-date.js?v=1.0.4"></script>
      <script>
         $(function() {
             $("#mobile_number").focus();
         
             // NID Verification form submission
             $("#nid-verification-form").submit(function(e){
                 e.preventDefault();
         
                 // Clear for error messages
                 $(".railway-form-error").remove();
                 $(".rw-reg-form-control-wrp").removeClass('has-error');
                 $("#verify-nid-illustration").attr('src', "https://eticket.railway.gov.bd/v2/assets/img/auth/verify-nid-illustration.svg");
         
                 if(window.navigator.onLine === false){
                     $(".page-illustration").after('<div class="railway-form-error" style="margin-bottom: 20px; height: auto;">Please check your internet connection.</div>');
                     return false;
                 }
         
                 const recaptcha = $(this).find('#recaptcha');
                 $(this).find("button[type='submit']").prop('disabled', true);
                 recaptcha.val($('#g-recaptcha-response').val());
         
                 $.ajax({
                     type: 'post',
                     data: $(this).serialize(),
                     url: $(this).attr('action'),
                     dataType: 'json',
                     success: function(response){
                         if(response.data.validate === true){
                             $(".railway-form-error").remove();
                             var nidInfo = {
                                 'name': response.data.name,
                                 'nid': response.data.given_nid,
                                 'mobile': $("#mobile_number").val(),
                                 'dob': $("#dob").val(),
                             }
                             localStorage.setItem('nidVerificationData', JSON.stringify(nidInfo));
                             window.location.href = "https://eticket.railway.gov.bd/register/user-info/nid/en";
                         }else{
                             $("#verify-nid-illustration").attr('src', "https://eticket.railway.gov.bd/v2/assets/img/auth/nid-not-verified.svg");
                             $(".page-illustration").append('<div class="railway-form-error" style="margin-bottom: 20px; height: auto;">Unknown error occurred.</div>');
                         }
                     },
                     error: function(jqXHR, textStatus, errorThrown){
                         $("#verify-nid-illustration").attr('src', "https://eticket.railway.gov.bd/v2/assets/img/auth/nid-not-verified.svg");
                         var statusCode = jqXHR.status;
                         var errorMessages = jqXHR.responseJSON.error;
                         if('messages' in errorMessages && statusCode === 422){
                             if('errors' in errorMessages.messages){
                                 var formErrors = errorMessages.messages.errors;
                                 Object.keys(formErrors).forEach(function(key,index) {
                                     var currentElement = $("#" + key).closest(".rw-reg-form-control-wrp");
                                     currentElement.append('<div class="railway-form-error">' + formErrors[key][0] + '</div>').addClass('has-error');
                                 });
                             }else if(typeof(errorMessages.messages) === 'object'){
                                 for(var i = 0; i < errorMessages.messages.length; i++){
                                     $(".page-illustration").append('<div class="railway-form-error" style="margin-bottom: 20px; height: auto;">'+errorMessages.messages[i]+'</div>');
                                 }
                             }
                             return;
                         }
                         $(".page-illustration").append('<div class="railway-form-error" style="margin-bottom: 20px; height: auto;">Server error occurred.</div>');
                     },
                     complete: function(response){
                         recaptcha.val('');
                         grecaptcha.reset();
                         $("#nid-verification-form").find("button[type='submit']").prop('disabled', false);
                     }
                 });
             });
         
         });
      </script>
      <!-- Common script -->
      <script type="text/javascript">
         // Setting initial height of main_wrapper
         $("document").ready(function(){
             function setMainWrapperHeight(){
                 var browserHeight = $(window).height();
                 var headerHeight = $("header.new-header").height();
                 var mainWrapperHeight = $("#main_wrapper").height();
                 var footerHeight = $("footer.footer").height();
         
                 var documentHeight = headerHeight + mainWrapperHeight + footerHeight;
         
                 if(documentHeight < browserHeight){
                     var mainWrapperHeight = browserHeight - (headerHeight + footerHeight + 25);
                     $("#main_wrapper").css('min-height', mainWrapperHeight);
                 }
             }
         
             // Initial
             setMainWrapperHeight();
             $("footer.footer").css('visibility', 'visible');
         
             // On resize
             $(window).resize(function(){
                 setMainWrapperHeight();
             });
         
             // Logout request
             $("a[title='Logout']").on('click', function(e) {
                 e.preventDefault();
                 sessionStorage.removeItem('skip_verification_progress_popup');
                 $('form#logout-form').submit();
             });
         
             $("a[data-modal-target='terms'], button[data-modal-target='terms']").on('click', function(e){
                 e.preventDefault();
                 $("#terms-modal").show();
             });
         
             $("button[data-modal-target='railwayact']").on('click', function(e){
                 e.preventDefault();
                 $("#railway-act-modal").show();
             });
         
             $("a[data-modal-target='privacy'], button[data-modal-target='privacy']").on('click', function(e){
                 e.preventDefault();
                 $("#privacy-modal").show();
             });
             
             $("a[data-modal-target='refund'], button[data-modal-target='refund']").on('click', function(e){
                 e.preventDefault();
                 $("#refund-modal").show();
             });
         
             // User dropdown
             var userDropdownOpened = false;
             $(document).on('click', function (e) {
                 if ($(e.target).closest(".user-dropdown-railway").length === 0) {
                     $(".user-dropdown-submenu").slideUp();
                     $(".user-dropdown-railway a .fa-chevron-up").hide();
                     $(".user-dropdown-railway a .fa-chevron-down").show();
                     userDropdownOpened = false;
                 }else if($(e.target).closest(".railway-logged-user").length === 1){
                     if(userDropdownOpened){
                         $(".user-dropdown-submenu").slideUp();
                         $(".user-dropdown-railway a .fa-chevron-up").hide();
                         $(".user-dropdown-railway a .fa-chevron-down").show();
                         userDropdownOpened = false;
                     }else{
                         $(".user-dropdown-submenu").slideDown();
                         $(".user-dropdown-railway a .fa-chevron-up").show();
                         $(".user-dropdown-railway a .fa-chevron-down").hide();
                         userDropdownOpened = true;
                     }
                     return;
                 }
             });
         });
      </script>
      <!-- ===============  JAVASCRIPT ENDS ================ -->
      <!-- Google Tag Manager (noscript) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WMV5Z7B"
         height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->
      <div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" style="position: absolute; top: 731.312px; left: 773.5px; z-index: 1; display: none;">
         <div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-all">
            <a class="ui-datepicker-prev ui-corner-all" data-handler="prev" data-event="click" title="Prev"><span class="ui-icon ui-icon-circle-triangle-w">Prev</span></a><a class="ui-datepicker-next ui-corner-all ui-state-disabled" title="Next"><span class="ui-icon ui-icon-circle-triangle-e">Next</span></a>
            <div class="ui-datepicker-title">
               <select class="ui-datepicker-month" data-handler="selectMonth" data-event="change">
                  <option value="0">Jan</option>
                  <option value="1">Feb</option>
                  <option value="2">Mar</option>
                  <option value="3">Apr</option>
                  <option value="4">May</option>
                  <option value="5" selected="selected">Jun</option>
               </select>
               <select class="ui-datepicker-year" data-handler="selectYear" data-event="change">
                  <option value="1997">1997</option>
                  <option value="1998">1998</option>
                  <option value="1999">1999</option>
                  <option value="2000">2000</option>
                  <option value="2001">2001</option>
                  <option value="2002">2002</option>
                  <option value="2003">2003</option>
                  <option value="2004">2004</option>
                  <option value="2005">2005</option>
                  <option value="2006">2006</option>
                  <option value="2007" selected="selected">2007</option>
               </select>
            </div>
         </div>
         <table class="ui-datepicker-calendar">
            <thead>
               <tr>
                  <th class="ui-datepicker-week-end"><span title="Sunday">Su</span></th>
                  <th><span title="Monday">Mo</span></th>
                  <th><span title="Tuesday">Tu</span></th>
                  <th><span title="Wednesday">We</span></th>
                  <th><span title="Thursday">Th</span></th>
                  <th><span title="Friday">Fr</span></th>
                  <th class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                  <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                  <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                  <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                  <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                  <td class=" " data-handler="selectDay" data-event="click" data-month="5" data-year="2007"><a class="ui-state-default" href="#">1</a></td>
                  <td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="5" data-year="2007"><a class="ui-state-default" href="#">2</a></td>
               </tr>
               <tr>
                  <td class=" ui-datepicker-week-end ui-datepicker-days-cell-over " data-handler="selectDay" data-event="click" data-month="5" data-year="2007"><a class="ui-state-default ui-state-hover" href="#">3</a></td>
                  <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">4</span></td>
                  <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">5</span></td>
                  <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">6</span></td>
                  <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">7</span></td>
                  <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">8</span></td>
                  <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">9</span></td>
               </tr>
               <tr>
                  <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">10</span></td>
                  <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">11</span></td>
                  <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">12</span></td>
                  <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">13</span></td>
                  <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">14</span></td>
                  <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">15</span></td>
                  <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">16</span></td>
               </tr>
               <tr>
                  <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">17</span></td>
                  <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">18</span></td>
                  <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">19</span></td>
                  <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">20</span></td>
                  <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">21</span></td>
                  <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">22</span></td>
                  <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">23</span></td>
               </tr>
               <tr>
                  <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">24</span></td>
                  <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">25</span></td>
                  <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">26</span></td>
                  <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">27</span></td>
                  <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">28</span></td>
                  <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">29</span></td>
                  <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">30</span></td>
               </tr>
            </tbody>
         </table>
      </div>
      <div style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 3px; position: absolute; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0; visibility: hidden; z-index: 2000000000; left: 0px; top: -10000px;">
         <div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.05;"></div>
         <div class="g-recaptcha-bubble-arrow" style="border: 11px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;"></div>
         <div class="g-recaptcha-bubble-arrow" style="border: 10px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;"></div>
         <div style="z-index: 2000000000; position: relative;"><iframe title="recaptcha challenge expires in two minutes" src="https://www.google.com/recaptcha/api2/bframe?hl=en&amp;v=sNQO7xVld1CuA2hfFHvkpVL-&amp;k=6LcufsUhAAAAADFOLSJnrKI0XP_8JKaIuEi7kCMI" name="c-xpy3xxbn7qqa" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" style="width: 100%; height: 100%;"></iframe></div>
      </div>
   </body>
</html>

