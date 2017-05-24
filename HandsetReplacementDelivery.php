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
        <h4>Contact and Delivery Information</h4>
    </div>
</div>
<div class="row">
<div class="small-12  small-centered columns" id="impInfo">
    <p>So we can keep you updated on the progress of your replacement phone, kindly confirm the details below:</p>
    <p><label><b>Alternative Mobile Number:</b></label>
    <input type="text" name="claimWhatHappened" placeholder="Enter Mobile Number..." id="claimWhatHappenedLost">
    <label><b>Email Address:</b></label>
    <input type="text" name="claimWhatHappened" placeholder="Enter Email Address..." id="claimWhatHappenedLost"></p>

            <h4>Where would you like your replacement phone delivered?</h4>
            <p class="deliveryInfo">
                We deliver to most UK postal addresses, but as we require a signature for all deliveries it is important that someone is available to sign for the phone.  If no one is available to sign, the courier will not be able to deliver your phone.
                Please note that we are unable to deliver to university halls of residence, hostels, schools, hospitals and army barracks.
            </p>

    <p><label><b>Post Code:</b></label>
        <input type="text" name="claimWhatHappened" placeholder="Enter Post Code" id="claimWhatHappenedLost"></p>

    <p><label><b>Address:</b></label>
        <input type="text" name="claimWhatHappened" placeholder="Enter Address" id="claimWhatHappenedLost"></p>
    <p><label><b>Town:</b></label>
        <input type="text" name="claimWhatHappened" placeholder="Enter Town" id="claimWhatHappenedLost"></p>
    <p><label><b>County:</b></label>
        <input type="text" name="claimWhatHappened" placeholder="Enter County" id="claimWhatHappenedLost"></p>
    <p><label><b>Delivery Date:</b></label>
        <input type="text" name="claimWhatHappened" placeholder="Choose a delivery date" id="claimWhatHappenedLost"></p>


    <div class="row">
        <div class="small-8 columns" id="questionSubmit">
            <a href="HandsetReplacementPayment.php" class="button radius large" id="impInfoSubmitBtn">Continue</a></div>
    </div>
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