<?php
 if ($_GET['site'] == 'benij.org') {
	 $donation_for = 'BeniJ';
	 $ministry_name = 'Beni Johnson Ministries';
 }
 else {
	 $donation_for = 'BJM';
	 $ministry_name = 'Bill Johnson Ministries';
 }
?><HTML>
<HEAD>
<TITLE>Donate - <?php print $ministry_name;?></TITLE>
<STYLE STYLE="TEXT/CSS">
<!--
body {font-family:tahoma;font-size:12px;}
-->
</STYLE>
</HEAD>
<BODY>
<center>
<img src="../images/donate_header<?php if ($_GET['site'] == 'benij.org') print '_benij';?>.png">
<br><br>

<?php

if (empty($_POST['amount'])) {
?>

Thank you for your interest in supporting <?php print $ministry_name;?>.
<br><br>
To give by online with your credit/debit card, please enter the amount you would like to give then click the "Continue" button.

<br><br>
<form action="index.php<?php if ($_GET['site'] == 'benij.org') print '?site=benij.org';?>" method=POST>
<b>Amount $ </b> <input type=text size=6 name=amount>
<br><br>
<input type=submit value="Continue">
</form>

<br /><br />

If you wish to give via PayPal, please use the Donate button below to be redirected to PayPal.

<br /><br />

<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="RQ6FZ8HTXF9PC">
<input type="image" src="https://www.paypalobjects.com/WEBSCR-640-20110306-1/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/WEBSCR-640-20110306-1/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

<?php

} else {

$x_Description = $_POST['description'];
$x_Amount = number_format($_POST['amount'],2);

?>
<b>Confirm donation amount:</b><br><br>
You have entered <b>$<?php print $x_Amount; ?></b> as the amount you would like to donate.

<br><br>
If this is correct - please click Continue.

<BR /><BR />
<FORM action="https://secure.authorize.net/gateway/transact.dll" method="POST">
<!--
https://developer.authorize.net/param_dump.asp
https://certification.authorize.net/gateway/transact.dll
https://certification.authorize.net/gateway/transact.dll
https://developer.authorize.net/param_dump.asp


-->
<!-- Uncomment the line ABOVE for test accounts or BELOW for live merchant accounts -->
<!--<FORM action="https://secure.authorize.net/gateway/transact.dll" method="POST"> -->
<?php

include ("simdata.php");
include ("simlib.php");

$amount = $x_Amount;

// Trim $ sign if it exists
if (substr($amount, 0,1) == "$") {
	$amount = substr($amount,1);
}
// I would validate the Order here before generating a fingerprint

// Seed random number for security and better randomness.

$tstamp = time();//-3600;

srand($tstamp);
$sequence = rand(1, 1000);
// Insert the form elements required for SIM by calling InsertFP
$ret = InsertFP ($loginid, $x_tran_key, $amount, $sequence, $tstamp);

//*** IF YOU ARE PASSING CURRENCY CODE uncomment and use the following instead of the InsertFP invocation above  ***
// $ret = InsertFP ($loginid, $x_tran_key, $amount, $sequence, $currencycode);

// Insert rest of the form elements similiar to the legacy weblink integration
echo ("<input type=\"hidden\" name=\"x_description\" value=\"Donation for ".$donation_for."\">\n" );
echo ("<input type=\"hidden\" name=\"x_login\" value=\"" . $loginid . "\">\n");
echo ("<input type=\"hidden\" name=\"x_amount\" value=\"" . $amount . "\">\n");

// *** IF YOU ARE PASSING CURRENCY CODE uncomment the line below *****
//echo ("<input type=\"hidden\" name=\"x_currency_code\" value=\"" . $currencycode . "\">\n");

?>
<INPUT type="hidden" name="x_header_html_payment_form" value="<STYLE STYLE='TEXT/CSS'>
<!--
body,td {font-family:tahoma;font-size:12px;}
hr {height:.5px;color:silver;}
-->
</STYLE><center>Please enter your billing info below to complete your donation.<br><br>">
<INPUT type="hidden" name="x_header_html_receipt" value="<STYLE STYLE='TEXT/CSS'>
<!--
body,td {font-family:tahoma;font-size:12px;}
hr {height:.5px;color:silver;}
-->
</STYLE><center><b>Your donation has been sent!</b><br><br>Thank you for supporting <?php print $ministry_name;?>.<br><br>If you have any questions about your donation, please email <a href='mailto:donations@bjm.org'>donations@bjm.org</a>.">
<INPUT type="hidden" name="x_logo_url" value="https://www.bjm.org/images/donate_header<?php if ($_GET['site'] == 'benij.org') print '_benij';?>.png">
<INPUT type="hidden" name="x_show_form" value="PAYMENT_FORM">
<INPUT type="hidden" name="x_test_request" value="FALSE">
<INPUT type="submit" value="Continue">
</FORM>

<?php
}
?>

</center>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-2614909-11");
pageTracker._initData();
pageTracker._trackPageview();
</script></BODY>
</HTML>
