@extends('layout')

@section('content')
<!-- Page content -->
<div class="w3-content w3-padding-large w3-margin-top">

  <div class="row ">
<div class="column-container">
<div class="column dark-background accent-green box box-landing-1">

<div class="container">
        <div class="row" style="color: black;">

    <div class="col-xs-10 col-sm-10 col-md-6 col-lg-6" style="border-radius: 10px;border-width: 2px; border-style: double; margin-left: 30px; padding: 10px; margin-bottom: 30px; ">

    @if (session('error'))
    <div class="alert alert-danger" style="margin-right: 70px">
        {{ session('error') }}
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success" style="margin-right: 70px">
        {{ session('success') }}
    </div>
@endif

                    <!-- PRICE ITEM -->
                    <form action="/action" method="POST">
<input type="hidden" name="_token" value="<?php echo csrf_token()?>" />
<input type="hidden" name="code" id="code" value="airtime" />
<input type="hidden" name="order" value="airtime" />
<input type="hidden" name="dataplan" value="airtime" />

      <div class="w3-section">
        <label>Choose Network</label>
          <select id="network" name = "network" class="form-control" required>
              <option value = "">Select Network</option>
  <option value = "MTN" >MTN</option>
    <option value = "9MOBILE">9MOBILE</option>       <option value = "AIRTEL">AIRTEL</option>
  <option value = "GLO">GLO</option>
</select>
      </div>

      <div class="w3-section">
        <label>Enter Airtime Value</label>
        <input type="number" class="form-control" placeholder="e.g 100" maxlength="4" minlength="1" name="price" id="price" value="" min="50" max="5000" required />
      </div>

      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" id="contact-email" placeholder="Email Address" autocomplete="on" name="email" size="20" tabindex="20" title="Please Provide A Valid Email Address !" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
      </div>

      <div class="w3-section">
        <label>Recipient Phone Number</label>
        <input class="w3-input w3-border" type="tel" placeholder="Enter phone number" maxlength="11" minlength="11" id="phone" name="phone" value="" autocomplete="on" size="20" required="">
      </div>

 <div class="w3-display-topright w3-light-grey w3-card" style="width:130px">
  <h5 class="w3-bar-item w3-bar w3-black">Payment Method</h5>
     <a class="w3-bar-item w3-button tablink" onclick="openCity(event, 'none')">None</a>
     @if(env('TELECOM_PAYMENT_ATM'))
  <a class="w3-bar-item w3-button tablink" onclick="openCity(event, 'atm')">ATM</a>
     @endif
     @if(env('TELECOM_PAYMENT_BANKTRANSFER'))
  <a class="w3-bar-item w3-button tablink" onclick="openCity(event, 'bank')">Bank Transfer</a>
     @endif
</div>

<div style="margin-left:30px">
  <div id="selectPayment" class="w3-padding" style="color: red">Select Payment Method</div>

  <input class="w3-input w3-border" type="text" id="payment" name="payment" value=""required style="display: none;">


  <div id="atm" class="w3-container city" style="display:none">
    <h2>ATM selected</h2>
    <p><strong>Note: Instant Delivery</strong> </p>
  </div>

  <div id="bank" class="w3-container city" style="display:none">
    <h2>Bank Transfer selected</h2>
      Account Name: MBAEBIE ONYINYE L.<br />
      Account No: 6024870139<br />
      Bank: Keystone<br />
    <p><strong>Note: Kindly make payment before clicking on submit. Your request will be processed immediately your payment is confirmed. To avoid this delay, kindly pay using the ATM option</strong> </p>
      <p>
    <input class="w3-input w3-border" id="narration" placeholder="Input narration from your bank sms/statement" autocomplete="on" name="narration" size="20" tabindex="20" title="Please Provide A Valid narration from bank !" required="" style="margin-left:-30px">
  </p>
  </div>

</div>

      <button type="submit" name="btn-order" class="w3-button w3-block w3-blue">Submit<i class="fa fa-arrow-circle-right"></i></button>
    </form>
                    <!-- /PRICE ITEM -->
                    </div>


                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3" style="border-radius: 10px; border-width: 2px; border-style: double; margin-left: 30px; padding: 10px; margin-bottom: 30px; color: #013220; background-color: black">
                    <!-- PRICE ITEM -->
                    <div class="panel price panel-green">
                        <div class="panel-heading arrow_box text-center">
                        <h3>To Check Airtime Balance</h3>
                        </div>
                        <div class="panel-body text-left">
<table class="w3-table-all">

<tbody><tr class="w3-hover-green">
<td> MTN</td>
<td> *556# </td>
<td><a href="tel:*556#" class="text-center btn w3-blue text"><small><strong>Dial</strong></small></a> </td>
</tr>
<tr class="w3-hover-green">
<td> 9MOBILE </td>
<td> *232# </td>
<td><a href="tel:*232#" class="text-center btn w3-blue text"><small><strong>Dial</strong></small></a> </td>

</tr>
<tr class="w3-hover-green">
<td> GLO</td>
<td> #124*1# </td>
<td><a href="tel:#124*1#" class="text-center btn w3-blue text"><small><strong>Dial</strong></small></a> </td>

</tr>
<tr class="w3-hover-green">
<td> AIRTEL</td>
<td> *123# </td>
<td><a href="tel:*123#" class="text-center btn w3-blue text"><small><strong>Dial</strong></small></a> </td>

</tr>
</tbody></table>
                        </div>
                    </div>
                    <!-- /PRICE ITEM -->
                </div>

                </div><!-- /row -->
            </div><!-- /container -->
        </div>

</div>
</div>

<!-- End page content -->
@endsection
