<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Buy Cheap MTN, AIRTEL, 9MOBILE and GLO Data Bundles and Aitime with ease" />
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
          <script type="text/javascript">
//if(window.location.href.startsWith('http://')){
//window.location.href=window.location.href.replace('http://', 'https://');
//}
</script>

          <script src="/js/data.js"></script>
          <script src="/js/paymentMethod.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="manifest" href="/js/manifest.json"></link>

        <title>{{env("TELECOM_NAME")}}</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>

        <!-- Header -->
<header class="w3-display-container w3-content w3-center" style="max-width:1500px; background-color: #013220; height: 130px; margin-top: 5px;">

  <div class="w3-display-middle w3-padding-large w3-border w3-wide w3-text-light-grey w3-center">
    <h5 class="w3-hide-medium w3-hide-small w3-xxxlarge">{{env("TELECOM_NAME")}}</h5>
    <h2 class="w3-hide-large" style="white-space:nowrap">{{env("TELECOM_NAME_PART1")}} </h2>
    <h5 class="w3-hide-large" style="white-space:nowrap">{{env("TELECOM_NAME_PART2")}}</h5>
  </div>

  <!-- Navbar (placed at the bottom of the header image) -->
  <div class="w3-bar w3-light-grey w3-round w3-display-bottommiddle w3-hide-small" style="bottom:-16px; font-weight: bolder;">
    <a href="{{ url('/') }}" class="w3-bar-item w3-button">Home</a>
    <a href="{{ url('/buydata') }}" class="w3-bar-item w3-button">Buy Data</a>
    <a href="{{ url('/buyairtime') }}" class="w3-bar-item w3-button">Buy Airtime</a>
    <a href="{{ url('/buypaytv') }}" class="w3-bar-item w3-button">Tv Subscription</a>
  </div>
</header>

<!-- Navbar on small screens -->
<div class="w3-center w3-light-grey w3-padding-16 w3-hide-large w3-hide-medium" style="font-weight: bolder;">
<div class="w3-bar w3-light-grey">
 <a href="{{ url('/') }}" class="w3-bar-item w3-button">Home</a>
  <a href="{{ url('/buydata') }}" class="w3-bar-item w3-button">Buy Data</a>
  <a href="{{ url('/buyairtime') }}" class="w3-bar-item w3-button">Buy Airtime</a>
  <a href="{{ url('/buypaytv') }}" class="w3-bar-item w3-button">Tv Subscription</a>
</div>
</div>

@yield('content')

<!-- Contact -->
        <!-- Contact -->
        <div class="w3-padding-large w3-padding-32 w3-margin-top" id="contact">
            <h2 class="w3-center"></h2>
            <div class="row">
                <div class="col-md-4 w3-blue w3-padding-16" align="center">
                    <h2>{{env("TELECOM_SUPPORT_PHONE")}}</h2>
                    <span style="color: floralwhite"> Customer Care</span>
                </div>
                <div class="col-md-4 w3-border-blue w3-animate-opacity" align="center">
                    <h2>Support</h2>
                    You are not alone

                </div>
                <div class="col-md-4 w3-blue w3-padding-16" align="center">
                    <h3>{{env("TELECOM_SUPPORT_EMAIL")}}</h3>
                    Email

                </div>
            </div>

        </div>


<!-- End page content -->
</div>


        <div class="column dark-background" style="color: white; background-color: darkslategrey; padding: 15px; font-weight: bold;">
            <div align="center">Copyright &copy; 2019 {{env("TELECOM_NAME")}}  &reg; |  <a href="https://www.facebook.com/" style="text-decoration: none">Facebook</a> | <a href="https://wa.me/{{env('TELECOM_SUPPORT_PHONE')}}" style="color: lightgreen; text-decoration: none">Whatsapp</a> </div>
        </div>
    </body>
    <script src="/js/pwabuilder-sw.js"></script><script src="/js/pwabuilder-sw-register.js"></script>
</html>
