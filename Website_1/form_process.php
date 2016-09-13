<?php

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = ""; /* Email of Zak */
$subject = "New Message";

mail ($to, $subject, $message, "From: " . $first_name . $last_name . $email);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Thanks!</title>
</head>
	<body>
		<p>You will be redirected in <span id="counter">5</span> second(s).</p>
<script type="text/javascript">
function countdown() {
    var i = document.getElementById('counter');
    if (parseInt(i.innerHTML)<=0) {
        location.href = 'localhost/index.php'; /*Redirecting to */
    }
    i.innerHTML = parseInt(i.innerHTML)-1;
}
setInterval(function(){ countdown(); },1000);
</script>
	</body>
</html>