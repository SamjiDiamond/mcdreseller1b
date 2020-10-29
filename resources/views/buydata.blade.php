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
                    <form id="form" action="/action" method="POST">
  <input type="hidden" name="_token" value="<?php echo csrf_token()?>" />
<input type="hidden" name="code" id="code" value="" />
<input type="hidden" name="price" id="price" value="" />
<input type="hidden" name="order" value="data" />

      <div class="w3-section">
        <label>Choose Network</label>
{{--          <select id="network" name = "network" class="form-control" onchange="populate(this.id,'dataplan')" required>--}}
          <select id="network" name = "network" class="form-control" onchange="showHint(this.value)" required>
    <option value = "">Select Network</option>
  <option value = "MTN" >MTN</option>
    <option value = "9MOBILE">9MOBILE</option>
    <option value = "AIRTEL">AIRTEL</option>
  <option value = "GLO">GLO</option>
</select>
      </div>
      <div class="w3-section">
        <label>Choose Data Plan</label>
{{--        <select id="dataplan" name = "dataplan" class="form-control" onchange="decide('dataplan')" required>--}}
        <select id="dataplan" name = "dataplan" class="form-control" required>
            <option>Waiting to select network</option>
        </select>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" id="contact-email" placeholder="Email Address" autocomplete="on" name="email" size="20" tabindex="20" title="Please Provide A Valid Email Address !" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
      </div>
      <div class="w3-section">
        <label>Recipient Phone Number</label>
        <input class="w3-input w3-border" type="tel" placeholder="Enter phone number" maxlength="11" minlength="11" id="phone" name="phone" value="" onchange="decide('dataplan')" autocomplete="on" size="20" required="">
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
    Account Name: xxxx.<br />
    Account No: xxxxx<br />
    Bank: xxxxx<br />
    <p><strong>Note: Kindly make payment before clicking on submit. Your request will be processed immediately your payment is confirmed. To avoid delay, kindly pay using the ATM option</strong> </p>
    <p>
    <input class="w3-input w3-border" id="narration" placeholder="Input narration from your bank sms/statement" autocomplete="on" name="narration" size="20" tabindex="20" title="Please Provide A Valid narration from bank !" required="" style="margin-left:-30px">
  </p>
  </div>

</div>
      <button type="submit" name="btn-order" id="btn" class="w3-button w3-block w3-blue">Submit</button>
    </form>
                    <!-- /PRICE ITEM -->
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3" style="border-radius: 10px; border-width: 2px; border-style: double; margin-left: 30px; padding: 10px; margin-bottom: 30px; color: black; background-color: #013220">
                    <!-- PRICE ITEM -->
                    <div class="panel price panel-green">
                        <div class="panel-heading arrow_box text-center">
                        <h3>To Check Data Balance</h3>
                        </div>
                        <div class="panel-body text-left">
                            <table class="w3-table-all">
<tbody>
  <tr class="w3-hover-green">
<td> MTN</td>
<td> *461*4# </td>
<td style="padding: 10px"> <a href="tel:*461*4#" class="text-center btn w3-blue text"><small><strong>Dial</strong></small></a> </td>
</tr>
<tr class="w3-hover-green">
<td> 9MOBILE </td>
<td> *229*9# </td>
<td style="padding: 10px"> <a href="tel:*229*9#" class="text-center btn w3-blue text"><small><strong>Dial</strong></small></a> </td>

</tr>
<tr class="w3-hover-green">
<td> GLO</td>
<td> *127*0# </td>
<td style="padding: 10px"> <a href="tel:*127*0#" class="text-center btn w3-blue text"><small><strong>Dial</strong></small></a> </td>

</tr>
<tr class="w3-hover-green">
<td> AIRTEL</td>
<td> *140# </td>
<td style="padding: 10px"> <a href="tel:*140#" class="text-center btn w3-blue text"><small><strong>Dial</strong></small></a> </td>

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
