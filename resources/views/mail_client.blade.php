<h3>Dear, {{ $cus_email }}</h3>
<p>The payment of your order is currently under review, you will get your order delivered as soon as your payment is confirmed.</p>
<p>You ordered for:<br />
	<strong>
Recipient: {{ $recipient }} <br />
Order: {{ $order }} <br />
Price: #{{ $price }} <br />
Disount: #0 <br />
Total: #{{ $price }}
	</strong>
</p>


<p>Best Regards, <br />
Thank you for patronizing <b><a href="https://lilyclemsmobiledata.com.ng">{{env('TELECOM_NAME')}}</a> !!</b></p>
<p> For inquiries: {{env("TELECOM_SUPPORT_PHONE")}} | {{env("TELECOM_SUPPORT_EMAIL")}}</p>
