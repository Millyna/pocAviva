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
    <link rel="stylesheet" href="components/foundation/css/foundation.css">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>


    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>
<div id="main">
    <script src="components/js/home.js"></script>
    <script src="components/foundation/js/vendor/modernizr.js"></script>
    <div class="row">
        <div class="small-12 columns" id="header">
            <img id="avivaLogo" src="components/images/aviva_logo_portrait1.jpg" height="60" width="90">
            <img id="natwestLogo" src="components/images/natwest-logo.png" height="22" width="120">
            <img id="rbsLogo" src="components/images/rbs.jpg" height="25" width="90">
            <br><h5>
                <a id="account" href="Account.php" class="links">Account</a>
                <a id="claim" href="ClaimHistory.php" class="links">Claims</a>
                <a id="contact" href="Contact.php" class="links">Contact</a>
                <a id="faq" href="FAQ.php" class="links">F.A.Q</a></h5>
        </div>
    </div>


    <div class="row">
        <div class="large-12 columns" id="welcome">

            <img id="welcomeImage" src="components/images/iphone6-gold-select-2014.png">

            <h1 class="welcome">Welcome Stephanie!</h1>

            <p class="small">How can we help?</p>

            <div class="small-7 columns" id="claim">
                <a href="#" class="button radius large right" id="claimBtn" data-reveal-id="myModal">Make a Claim</a>
            </div>
            <br><br><br>

            <div class="small-4 columns"><h4 class="reg">Register a device...</h4></div>
            <div id="myModal" class="reveal-modal small" data-reveal aria-labelledby="myModalTitle" aria-hidden="true"
                 role="dialog">
                <div class="row">
                    <div id="emptyDiv" class="small columns  ">
                        <br>
                    </div>
                </div>
                <h4 class="modal">Select Your Device</h4>

                <div class="row">
                    <div class="large-12 columns">
                        <label>Please choose:
                            <select>
                                <option value="device1">iPhone 6+ white 64GB - 0123456789010</option>
                                <option value="device2">iPhone 6+ white 64GB - 0123456789010</option>
                                <option value="device3">iPhone 6+ white 64GB - 0123456789010</option>
                                <option value="device4">iPhone 6+ white 64GB - 0123456789010</option>
                            </select>
                        </label>
                    </div>
                </div>

                <a href="Claims.php" class="button tiny" id="modalNext">Next</a>

                <div class="row">
                    <div id="emptyDiv" class="small columns">
                        <br>
                    </div>
                </div>
                <a class="close-reveal-modal" aria-label="Close">&#215;</a>
            </div>
            <br>

            <div class="row">
                <div class="medium-3 columns">
                    <div class="row collapse">
                        <div class="small-10 columns">
                            <input type="text" placeholder="IMEI Number...">
                        </div>
                        <div class="small-2 columns">
                            <a href="#" class="button postfix" id="goBtn" data-reveal-id="myModal2"> <b>></b> </a>
                        </div>
                    </div>
                </div>

                <div id="myModal2" class="reveal-modal small" data-reveal aria-labelledby="myModalTitle"
                     aria-hidden="true"
                     role="dialog">
                    <div class="row">
                        <div id="emptyDiv" class="small columns">
                            <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-12 columns">
                            <h4 class="addDevice">Device Added Successfully</h4>
                        </div>
                    </div>

                    <a href="Account.php" class="button tiny" id="modalView">View Your Devices</a>

                    <div class="row">
                        <div id="emptyDiv" class="small columns">
                            <br>
                        </div>
                    </div>
                    <a class="close-reveal-modal" aria-label="Close">&#215;</a>
                </div>


                <div id="step2" class="small-4 columns"><h4 class="reg">Already Registered?</h4></div>
                <div id="viewDevice" class="small-6 columns">
                    <a href="Account.php" class="button radius large" id="viewBtn">View your Devices</a></div>
            </div>
        </div>
    </div>


    <div class="row">
        <div id="howTo" class="large-12 columns">
            <h4 class="claim">How do I make a claim?</h4>
            <ul>
                <li class="claimText">
                    All claims must be reported to us <b>as soon as possible</b>, but always within 60 days of
                    discovering
                    the loss or other incident.
                </li>
                <li class="claimText">
                    If device is lost or stolen. You must contact your network provider within <b>24 hours of the
                        incident</b> (If outside of the UK at the time of discovering the incident, contact within 48
                    hours).
                </li>
                <li class="claimText">
                    If stolen, <b>inform the police</b> and get a crime reference number as soon as possible.
                </li>
            </ul>

            <div class="small-11 columns" id="claim2">
                <a href="#" class="button radius large right" id="claimBtn">Make a Claim</a></div>
        </div>

    </div>

    <div class="row">
        <div id="benefits" class="large-12 columns">
            <h4 class="textBenefits">Your Benefits</h4>
            <ul class="benefitText" style="margin-left: 10px">
                <li><img src="components/images/iphone26.png" width="50px" height="50px" style="float: left;">
                    Replacement phone within <b>48</b> hours of your claim being accepted.
                </li>
                <br>
                <li><img src="components/images/global50.png" width="50px" height="50px" style="float: left;">
                    Worldwide cover – so your phone is covered <b>travelling</b> outside the UK.
                </li>
                <br>
                <li><img src="components/images/camera113.png" width="50px" height="50px" style="float: left;">
                    If your phone is lost/stolen. We provide unauthorised use cover for up to <b>£2500</b>
                    for monthly customers and £100 for pay as you go customers.
                </li>
            </ul>
            <ul class="benefitText2">
                <li><img src="components/images/headphones4.png" width="50px" height="50px" style="float: left;">
                    Accessories are covered up to <b>£250</b> per claim, if they are lost, stolen or damaged at the same
                    time as your phone.
                </li>
                <br>
                <li><img src="components/images/calendar-icons.png" width="50px" height="50px" style="float: left;">
                    Make up to <b>two</b> claims in any 12 month period.
                </li>
                <br>
                <br>
                <li><img src="components/images/mobile55.png" width="50px" height="50px" style="float: left;">
                    We also provide breakdown cover outside of the phone manufacturers warranty.
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
</div>
</body>


</html>