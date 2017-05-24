<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Aviva POC</title>
    <meta name="description" content="Aviva POC">
    <meta name="author" content="Heather McWha">

    <link rel="stylesheet" href="components/css/account.css">
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
    <div id="personalDetailsTitle" class="small-12 columns">
        <h4>Your Personal Details</h4>
    </div>
</div>

<div class="row">
    <div id="personalDetails" class="small-6 small-centered columns">
        <ul>
            <li><b>Account Type:</b></li>
            <li><b>Name:</b></li>
            <li><b>Address:</b></li>
            <li><b>Telephone:</b></li>
            <li><b>Email:</b></li>
            <br>

            <p>If you would like to change any of you details, please contact your bank.</p>
        </ul>
    </div>
</div>

<div class="row">
    <div id="regDeviceTitle" class="small-12 columns">
        <h4>Your Registered Devices</h4>
    </div>
</div>
<div id="devices" class="large-12 columns">
    <div class="row">
        <div class="small-4 small-centered columns" id="deviceBox1">
            <img id="iPhoneThumb" src="components/images/iphone6-gold-select-2014.png">
            <ul class="deviceList">
                <li><b>iPhone 6+ 16GB White</b></li>
                <li><b>IMEI:</b> 00000000000000</li>
                <li><b>Number:</b> 07456789011</li>
            </ul>
        </div>


        <div class="small-4 small-centered columns" id="deviceBox2">
            <img id="iPhoneThumb" src="components/images/iphone6-gold-select-2014.png">
            <ul class="deviceList">
                <li><b>iPhone 6+ 16GB White</b></li>
                <li><b>IMEI:</b> 00000000000000</li>
                <li><b>Number:</b> 07456789011</li>
            </ul>
        </div>


        <div class="small-4 small-centered columns" id="deviceBox3">
            <img id="iPhoneThumb" src="components/images/iphone6-gold-select-2014.png">
            <ul class="deviceList">
                <li><b>iPhone 6+ 16GB White</b></li>
                <li><b>IMEI:</b> 00000000000000</li>
                <li><b>Number:</b> 07456789011</li>
            </ul>
        </div>

        <div class="small-4 small-centered columns" id="deviceBox4">
            <ul class="addDevice">
                <li><a href="#" data-reveal-id="addDeviceModal"> <b>Add Device</b></li>
                <li><img src="components/images/plus24.png"></a></li>
            </ul>
        </div>

        <div class="small-4 small-centered columns" id="deviceBox5">
            <img id="iPhoneThumb" src="components/images/iphone6-gold-select-2014.png">
            <ul class="deviceList">
                <li><b>iPhone 6+ 16GB White</b></li>
                <li><b>IMEI:</b> 00000000000000</li>
                <li><b>Number:</b> 07456789011</li>
            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="addDeviceModal" class="reveal-modal small" data-reveal aria-labelledby="addDeviceModal" aria-hidden="true"
     role="dialog">
    <div class="row">
        <div id="emptyDiv" class="small columns  ">
            <br>
        </div>
    </div>
    <h4 class="modal">Enter IMEI number:</h4>

    <div class="row">
        <div class="large-12 columns">
            <input type="text" placeholder="IMEI Number...">
        </div>
    </div>

    <a href="#" class="button tiny" id="modalAdd" data-reveal-id="deviceAdded" onclick="showHide('deviceBox5')">Add</a>

    <div class="row">
        <div id="emptyDiv" class="small columns  ">
            <br>
        </div>
    </div>
</div>

<!-- Modal 2 -->
<div id="deviceAdded" class="reveal-modal small" data-reveal aria-labelledby="deviceAdded"
     aria-hidden="true"
     role="dialog">
    <div class="row">
        <div id="emptyDiv" class="small columns">
            <br>
        </div>
    </div>
    <div class="row">
        <div class="small-12 small-centered columns">
            <h4>Device Added Successfully</h4>
        </div>
    </div>

    <a href="Account.php" class="button tiny" id="modalView">View Your Devices</a>

    <div class="row">
        <div id="emptyDiv" class="small small-centered columns">
            <br>
        </div>
    </div>
    <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>


<div class="row">
    <div id="emptyDiv" class="small-12 columns  ">
        <br><br>
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