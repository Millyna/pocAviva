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
    <link rel="stylesheet" href="components/css/claims.css">

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
            <a id="claims" href="ClaimHistory.php">Claims</a>
            <a id="contact" href="Contact.php">Contact</a>
            <a id="faq" href="FAQ.php">F.A.Q</a></h5>
    </div>
</div>
<div class="row">
    <div class="small-12 small-centered columns" id="journey1">
        <img id="journeyImg" src="components/images/device1.png">
    </div>
</div>

<div class="row">
    <div id="journeyTitle" class="small-12 columns">
        <h4>Your Device</h4>
    </div>
</div>

<div class="row">
    <div id="deviceContent" class="large-12 columns">
        <p align="center"><b>Please confirm this is the device you would like to make a claim on.</b></p>

        <div class="small-4 small-centered columns" id="deviceBox2">
            <img id="iPhoneThumb" src="components/images/iphone6-gold-select-2014.png">
            <ul class="deviceList">
                <li><b>iPhone 6+ 64GB White</b></li>
                <li><b>IMEI:</b> 00000000000000</li>
                <li><b>Number:</b> 07456789011</li>
            </ul>
        </div>
    </div>
</div>
<br>

<div class="row">
    <div class="small-7 columns" id="confirmDevice">
        <a href="ClaimQuestions.php" class="button radius large right" id="confirmDeviceBtn">Confirm</a>
    </div>
</div>

<div class="row">
    <div id="impInfoTitle" class="small-12 columns">
        <h4>Important Information</h4>
    </div>
</div>

<div class="row">
    <div id="impInfo" class="large-12 columns">
        <h3>What You Need:</h3>
        <ul class="impInfo">
            <li>Your <b>current</b> contact details.</li>
            <li>If your claim is accepted, you will need to pay your policy excess of <b>£75</b> before a replacement
                phone can be ordered.
            </li>
            <li>Details of the events <b>leading</b> up to your claim.</li>
        </ul>

        <h3>What You Need To Know:</h3>
        <ul class="impInfo2">
            <li>We will ask a number of questions about what has happened to your device. It is very important that you
                <b>answer every question as carefully and accurately</b> as possible. Providing false information can
                lead to your claim being declined.
            </li>
            <li>All information which you provide <b>will be recorded</b> on our systems and will be used to allow us to
                make a decision on your claim.
            </li>
            <li>For the purpose of fraud prevention and detection, <b>we share information</b> on claims with other
                insurance providers, the police and mobile phone recyclers such as Mazuma and Envirofone.
            </li>
            <li>For theft and loss claims we also <b>blacklist</b> your device, <b>report it as lost/stolen</b> to the
                national database and <b>monitor your devices serial or IMEI number</b>, so that if it gets used, we can
                attempt to recover it.
            </li>
        </ul>
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