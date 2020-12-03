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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="manifest" href="/js/manifest.json"></link>

        <title>{{env("TELECOM_NAME")}}</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>

        <!-- Header -->
<header class="w3-display-container w3-content w3-center" style="max-width:1500px">
  <img class="w3-image" src="/images/hand_shake.jpg" alt="Me" width="1500" height="600">
  <div class="w3-display-middle w3-padding-large w3-wide w3-text-light-grey w3-center">
    <h1 class="w3-hide-medium w3-hide-small w3-xxxlarge" style="font-weight: bolder; color: white; margin-top: 50px">{{env("TELECOM_NAME")}}</h1>
    <h3 class="w3-hide-large" style="white-space:nowrap; color: white; font-weight: bolder; margin-top: 70px"> {{env("TELECOM_NAME_PART1")}} </h3>
    <h4 class="w3-hide-large" style="white-space:nowrap;">{{env("TELECOM_NAME_PART2")}}</h4>

    <p class="w3-hide-large w3-hide-medium" style="font-size: 9px; font-max-size: 14px; color: yellow;">Instant delivery on all networks</p>
      <p class="w3-hide-small w3-hide-medium" style="color: yellow; font-weight: bolder">We have an affordable data plan for you. With online payment options and 24/7 availability, take advantage of our cheap data offering for all networks and do more in every area of your life.</p>
  </div>

  <!-- Navbar (placed at the bottom of the header image) -->
  <div class="w3-bar w3-light-grey w3-round w3-display-bottommiddle w3-hide-small" style="bottom:-16px; font-weight: bolder;">
    <a href="{{ url('/buydata') }}" class="w3-bar-item w3-button">Buy Data</a>
    <a href="{{ url('/buyairtime') }}" class="w3-bar-item w3-button">Buy Airtime</a>
    <a href="{{ url('/buypaytv') }}" class="w3-bar-item w3-button">Tv Subscription</a>
    <a href="#pricing" class="w3-bar-item w3-button">Pricing</a>
  </div>

</header>

<!-- Navbar on small screens -->
<div class="w3-center w3-light-grey w3-padding-16 w3-hide-large w3-hide-medium" style="font-weight: bolder;">
<div class="w3-bar w3-light-grey">
  <a href="{{ url('/buydata') }}" class="w3-bar-item w3-button">Buy Data</a>
  <a href="{{ url('/buyairtime') }}" class="w3-bar-item w3-button">Buy Airtime</a>
  <a href="{{ url('/buypaytv') }}" class="w3-bar-item w3-button">Tv Subscription</a>
    <a href="#pricing" class="w3-bar-item w3-button">Pricing</a>
</div>
</div>
<!-- Page content -->
<div class="w3-content w3-padding-large w3-margin-top" id="pricing">

  <div class="row ">
<div class="column-container">
<div class="column dark-background accent-green box box-landing-1">

    <div class="w3-blue w3-padding-large w3-padding-32 w3-margin-top w3-margin-bottom" id="contact">
        <h2 class="w3-center" style="font-size: 15px">We offer best deals when it comes to internet Data Plans, Airtime and Tv Subscription in Nigeria with a completely hassle-free experience with options of paying through online payment/bank transfer through secured and trusted gateways. Top up phone airtime or internet data. Renew TV subscriptions.</h2>
        <div class="row">
            <div class="col-md-4">
                <h3>SPEED</h3>
                Instant delivery on all networks
            </div>
            <div class="col-md-4">
                <h3>AFFORDABILITY</h3>
                Quality + Affordability + Legitimacy, we are here to serve you the cheapest price
            </div>
            <div class="col-md-4">
                <h3>SUPPORT</h3>
                You are not alone, our customer service is always available for you at all time.
            </div>
        </div>
        <p></p>
        <p style="font-weight: bolder;"></p>
    </div>

<div class="container">
        <div class="row" style="color: white;">

    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3" style="border-radius: 10px; border-color: yellow; border-width: 2px; border-style: double; margin-left: 30px; padding: 10px; margin-bottom: 30px; color: black; background-color: #013220">
                    <!-- PRICE ITEM -->
                    <div class="panel price panel-yellow">
                        <div class="panel-heading  text-center">
                        <h3>Buy Phone Airtime</h3>
                        </div>
                        <div class="panel-body text-center">
                            <p class="lead"><strong>Instant Delivery</strong></p>
                        </div>
                        <ul class="list-group list-group-flush text-center">
                            <li class="list-group-item"><i class="icon-ok text-warning"></i>MTN VTU</li>
                    <li class="list-group-item"><i class="icon-ok text-warning"></i>GLO VTU</li>
<li class="list-group-item"><i class="icon-ok text-warning"></i> 9MOBILE VTU</li>
<li class="list-group-item"><i class="icon-ok text-warning"></i> AIRTEL VTU</li>
                        </ul>
                        <div class="panel-footer">
                            <a class="w3-button w3-block w3-hover-blue w3-border-blue" href="{{ url('/buyairtime') }}"><span>BUY NOW!</span></a>
                        </div>
                    </div>
                    <!-- /PRICE ITEM -->
                    </div>


                     <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3" style="border-radius: 10px; border-color: red; border-width: 2px; border-style: double; margin-left: 30px; padding: 10px; margin-bottom: 30px; color: black; background-color: #013220">
                    <!-- PRICE ITEM -->
                    <div class="panel price panel-red">
                        <div class="panel-heading arrow_box text-center">
                        <h3>Buy Internet Data</h3>
                        </div>
                        <div class="panel-body text-center">
                            <p class="lead"><strong>30 days</strong></p>
                        </div>
                        <ul class="list-group list-group-flush text-center">
    <li class="list-group-item"><i class="icon-ok text-danger"></i>MTN DATA</li>
  <li class="list-group-item"><i class="icon-ok text-danger"></i>GLO DATA</li>
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>AIRTEL DATA</li>
<li class="list-group-item"><i class="icon-ok text-danger"></i> 9MOBILE DATA </li>
                        </ul>
                        <div class="panel-footer">
                            <a class="w3-button w3-block w3-hover-blue w3-border-blue" href="{{ url('/buydata') }}"><span>BUY NOW!</span></a>
                        </div>
                    </div>
                    <!-- /PRICE ITEM -->
                </div> <!-- endy -->


                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3" style="border-radius: 10px; border-color: green; border-width: 2px; border-style: double; margin-left: 30px; padding: 10px; margin-bottom: 30px; color: black; background-color: #013220">
                    <!-- PRICE ITEM -->
                    <div class="panel price panel-green">
                        <div class="panel-heading arrow_box text-center">
                        <h3>Pay TV Subs</h3>
                        </div>
                        <div class="panel-body text-center">
                            <p class="lead"><strong>Instant Activation</strong></p>
                        </div>
                        <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item"><i class="icon-ok text-primary"></i>DSTV</li>
                            <li class="list-group-item"><i class="icon-ok text-success"></i>GOTV</li>
  <li class="list-group-item"><i class="icon-ok text-primary"></i>STARTIMES</li>
                        </ul>
                        <div class="panel-footer">
                            <a class="w3-button w3-block w3-hover-blue w3-border-blue" href="{{ url('/buypaytv') }}"><span>BUY NOW!</span></a>
                        </div>
                    </div>
                    <!-- /PRICE ITEM -->
                </div>

                </div><!-- /row -->
            </div><!-- /container -->
        </div>

</div>
</div>

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
            <div align="center">Copyright &copy; 2019 {{env("TELECOM_NAME")}} &reg; |  <a href="https://www.instagram.com/thebuzzeradverts" style="color: white; text-decoration: none">Instagram</a> | <a href="https://wa.me/08133981148" style="color: lightgreen; text-decoration: none">Whatsapp</a> </div>
        </div>
    </body>
      <script src="/js/pwabuilder-sw.js"></script><script src="/js/pwabuilder-sw-register.js"></script>
</html>
