<?php

$to = 'lee.leffingwell@austintexas.gov, Laura.Morrison@austintexas.gov, Chris.Riley@austintexas.gov, sheryl.cole@austintexas.gov, Mike.Martinez@austintexas.gov, bill.spelman@austintexas.gov, kathie.tovo@austintexas.gov';

$citizen_name = $_POST['citizen_name'];
$citizen_phone = $_POST['citizen_phone'];
$citizen_email = $_POST['citizen_email'];
$citizen_state = $_POST['citizen_state'];
$subject = $_POST['email_subject'];
$message = $_POST['message'];
$headers = 'From: ' . $citizen_email . '
Cc: '. $citizen_email . ' 
Bcc: ilovedowntownaustin@gmail.com ';


if ($citizen_name == "")
  {
    $citizen_name = "Concerned Citizen";
  }

$message .= "
$citizen_name 
$citizen_phone";

if ($citizen_state == "" && $citizen_email != "")
  {
    mail($to, $subject, $message, $headers);
  }

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>I Love Downtown Austin</title>
<link href="inc/screen_style.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<link href='//fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
<?php include_once("inc/ga.php") ?>
<div class="container">

<header>
    <img src="img/austinskylineAudio.png" alt="I Love Downtown Austin" />
</header>

<nav>
</nav>


<article>
<p>Thank you for your participation.</p>

</article>

<footer>
<p> I Love Downtown Austin</p>
</footer>

</div>

</body>

</html>