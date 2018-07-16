<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<div>
		<h2 style="text-align:center">Payment Through PayUmoney</h2>
		<h3 style="text-align:center">Fill the form and submit it for starting the transaction...</h3>
	</div>

<div align="center">
<table>
	<form name="postForm" action="form_process.php" method="POST" >
	<tr><td>Txnid</td><td><input type="text" name="txnid" value="<?php echo $txnid=time().rand(1000,99999); ?>" /></td></tr>
	<tr><td>Amount</td><td><input type="text" name="amount" value="" /></td></tr>
	<tr><td>Firstname</td><td><input type="text" name="firstname" value="" /></td></tr>
	<tr><td>Email</td><td><input type="text" name="email" value="" /></td></tr>
	<tr><td>Mobile Number</td><td><input type="text" name="phone" value="" /></td></tr>
	<tr><td>Productinfo</td><td><input type="text" name="productinfo" value="" /></td></tr>
	<!--
	<tr><td>success url</td><td><input type="text" name="surl" value="http://www.lookelite.in/payment/success.php" size="64" /></td></tr>
	<tr><td>failure url</td><td><input type="text" name="furl" value="http://www.lookelite.in/payment/fail.php" size="64" /></td></tr>
	-->	
	<tr><td style="text-align:right"><input type="submit" /></td><td><input type="reset" style="text-align:right" /></td></tr>
	</form>
</table>
</div>
</body>
</html>