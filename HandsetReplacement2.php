<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Aviva POC</title>
    <meta name="description" content="Aviva POC">
    <meta name="author" content="Heather McWha">

    <link rel="stylesheet" href="components/css/home.css">
    <link rel="stylesheet" href="components/css/handsetReplace.css">

    <link rel="stylesheet" href="components/foundation/css/foundation.css">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>


    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>
<script src="components/js/home.js"></script>
<script src="components/foundation/js/vendor/modernizr.js"></script>
<div class="row">
    <div class="small-12 columns" id="header">
        <img id="avivaLogo" src="components/images/aviva_logo_portrait1.jpg" height="60" width="90">
        <img id="natwestLogo" src="components/images/natwest-logo.png" height="22" width="120">
        <img id="rbsLogo" src="components/images/rbs.jpg" height="25" width="90">
        <br><h5>
            <a id="home" href="Index.php">Home</a>
            <a id="account" href="Account.php">Account</a>
            <a id="claim" href="ClaimHistory.php">Claims</a>
            <a id="contact" href="Contact.php">Contact</a>
            <a id="faq" href="FAQ.php">F.A.Q</a>
        </h5>
    </div>
</div>
<div class="row">
    <div class="small-12 small-centered columns" id="journey1">
        <img id="journeyImg" src="components/images/delivery.png">
    </div>
</div>

<div class="row">
    <div id="impInfoTitle" class="small-12 columns">
        <h4>Important Information</h4>
    </div>
</div>

<div class="small-6  small-centered columns" id="impInfo">

    <p>In order to finalise your claim, <b>we need to collect your damaged phone</b>. The courier who delivers your replacement phone will collect your damaged phone at the same time.</p>

    <p><b>Please note that if the damaged phone is not available for collection the courier will not be able to deliver your replacement.</b></p>

    <p>To ensure the collection goes as smoothly as possible, please follow these simple instructions:</p>
    <ul class="impInfo">
    <li><b>Do not package or wrap up your damaged phone</b> in any way as the courier will need to check it to ensure it matches our records.</li>
    <li>Make sure you have <b>removed your SIM card, memory card (if applicable) and accessories</b> before you give the damaged phone to the courier.</li>
    <li>Please ensure you <b>keep your phone charger</b> as your replacement phone will not include a new one.</li>
    </ul>
    <p>It is really important that you follow these instructions. If you do not then unfortunately the courier will not be able to deliver your replacement phone.</p>


    <div class="row">
        <div class="small-8 columns" id="questionSubmit">
            <a href="HandsetReplacementDelivery.php" class="button radius large" id="impInfoSubmitBtn">Submit</a></div>
    </div>
</div>


</div>


<div class="row">
    <div id="siteMap" class="large-12 columns"><br><br><br>

        <h1 class="welcome" align="center">Site Map</h1><br><br><br>
    </div>
</div>


<footer>
    <div class="row">
        <div id="footer" class="small-12 columns">
            <img src="components/images/Carphone-Warehouse-logo.jpg" width="130px" height="80px">
            &copy; 2015 Aviva &copy; Carphone Warehouse Group PLC 2015
        </div>
    </div>
</footer>


<script src="components/foundation/js/vendor/jquery.js"></script>
<script src="components/foundation/js/foundation.min.js"></script>
<script>
    $(document).foundation();
</script>
</body>


</html>