<?php
date_default_timezone_set('America/Chicago');
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>I Love Downtown Austin</title>
<link href="inc/screen_style.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<link href='//fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="inc/validationEngine.jquery.css" type="text/css"/>
<script src="inc/jquery-1.6.min.js" type="text/javascript">
</script>
<script src="inc/languages/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
</script>
<script src="inc/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
</script>
<script>
     jQuery(document).ready(function(){
  // binds form submission and fields to the validation engine
     jQuery("#formID").validationEngine();
     });
</script>

</head>
<body>
<?php include_once("inc/ga.php") ?>
<div class="container">

<header>
    <img src="img/austinskylineAudio.png" alt="I Love Downtown Austin" />
</header>

<nav>
</nav>

<section class="call-to-action">

<div class="callout">
<h1>DOWNTOWN IS NOT A <span class="highlight">PLACE TO LIVE</span> IF YOU <span class="highlight">CAN'T SLEEP.</span></h1>
</div>

<div class="the-form">
<p>TELL THE MAYOR AND CITY COUNCIL to amend the City of Austin Code, section 9-2, 
to limit downtown construction to the same hours as the rest of the City: 7AM to 7PM! 
Come to the City Council Meeting on Thursday, November 6th to show your support!</p>

<form name="form1" id="formID" method="post" action="thank_you.php">
  <label for="citizen_name">Your Name (<span class="form-tip">first last, will be appended to the email</span>):</label>
  <input type="text" name="citizen_name" id="citizen_name" />

  <label for="citizen_phone">Your Phone Number (<span class="form-tip">will be appended to the email</span>):</label>
  <input type="text" name="citizen_phone" id="citizen_phone" />
  
  <label for="citizen_email">Your Email*</label>
  <input type="text" name="citizen_email" id="citizen_email" class="validate[required,custom[email]]" value=""/>
  
  <input type="hidden" name="citizen_state" id="citizen_state" value="" />

  <label for="email_subject">Subject*</label>
  <input type="text" name="email_subject" id="email_subject" class="validate[required] text-input" value="After-hours concrete pouring" />
   
  <label for="email_subject">Message* (feel free to personalize your message)</label>
  <textarea  name="message" id="message" rows="17">
Dear Mayor Leffingwell and Austin City Council Members,
  
In just a few years, our "Central Business District" has become one of Austin's most desirable neighborhoods. You had a big role in leading that change: from the vision of a more compact and vibrant city, to its realization!

I think it's great that Austin's attracting new residents and businesses from all over the world. And, it's clear that the City is working hard to accommodate all our growth. But, we have to work smart, too. And, that's impossible without sleep.

What I would like is that Austin's downtown neighborhood be allowed the same 7AM to 7PM construction time limitation that all other neighborhoods enjoy.

Thank you for your time and consideration.

Sincerely,
</textarea>
  <input type="submit" class="narrow" />
</form>
</div>
</section>
<article>
<p><span class="highlight">We have a noisy problem.</span> Currently Austin allows construction in our downtown neighborhood from 1AM to 7AM. Properties under construction are lit up like a sports stadium. Equipment constantly roars, whistles, and groans. Try not sleeping 3 nights out of 5. It's awful.</p>

<p><span class="highlight">Even New York City stops construction at 6PM.</span> Austin City Council is considering a proposal to "limit" downtown construction from 7AM to 2AM. Sure, that's less awful than what's currently on the books. But 4 or 5 hours of sleep just ain't enough. Every neighborhood but downtown is guaranteed 12 hours of relative peace and quiet to wind down after a long work day, share dinner with family, and get a good night's sleep.</p>
<p><span class="highlight">All Austin residential areas except downtown are restricted from 7AM to 7PM construction.</span></p>

<p>Please, let's give the downtown residents the same respect as other neighborhoods. Apply the same noise and light standards imposed on construction for everyone and give the downtown neighbors back their sleep.</p>

<img src="img/cementTrucks.jpg" alt="Downtown Austin Too Loud" />

<img src="img/dBcounter.png" alt="Downtown Austin Too Loud" />

</article>

<footer>
<p> I Love Downtown Austin</p>
</footer>

</div>

</body>

</html>