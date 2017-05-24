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
    <link rel="stylesheet" href="components/css/contact.css">
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
    <div id="contactTitle" class="small-12 columns">
        <h4 id="contactTitle">Contact Us</h4>
    </div>
</div>

<div class="row">
    <div class="large-12 columns" id="ContactMain">
        <h4>Need Help?</h4>

        <p>You may find an answer in our FAQs. If these don’t help, please use the form below or call us on <b>0845 300
                3695</b>.</p>

        <div class="row">
            <div class="small-8 small-centered columns" id="contactForm">
                <form>
                    <div class="row">
                        <div class="small-8 columns">
                            <div class="row">
                                <div class="small-3 columns">
                                    <label for="right-label" class="right inline">Your Query:</label>
                                </div>
                                <div class="small-9 columns">
                                    <input type="text" id="right-label" placeholder="Type Query Here...">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="small-8 columns">
                            <div class="row">
                                <div class="small-3 columns">
                                    <label for="right-label" class="right inline">Subject:</label>
                                </div>
                                <div class="small-9 columns">
                                    <input type="text" id="right-label" placeholder="Type Subject Here...">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="small-8 columns">
                            <div class="row">
                                <div class="small-3 columns">
                                    <label for="right-label" class="right inline">Your Message:</label>
                                </div>
                                <div class="small-9 columns">
                                    <textarea id="right-label" placeholder="Type Your Message Here..."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>


            </div>
        </div>


    </div>
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