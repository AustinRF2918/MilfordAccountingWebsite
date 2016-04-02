<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Milford Accounting</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" type = "text/css" rel = "stylesheet">

    <!-- Custom CSS -->
    <link href="css/contactExperimental.css" rel="stylesheet">
    <script src="js/jquery.js"></script>

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
        <div id = "navigationData">
            <div class = "col-md-12">
                <a href = "aboutExperiment.html">
                <div class = "col-xs-4 text-center topData lightOnHover" id = "navigationDataThree">
                        <div class = "col-sm-12">
                            <i class = "fa fa-4x fa-th-list"></i>
                        </div>
                        <div class = "col-sm-12 botDivider">
                            <div id = "innerText">
                                <a href="aboutExperiment.html">About</a>
                            </div>
                        </div>
                </div>
                </a>
                <a href = "index.html">
                <div class = "col-xs-4 text-center topData lightOnHover" id = "navigationDataOne">
                    <div class = "col-sm-12 topDivider">
                        <i class = "fa fa-4x fa-home"></i>
                    </div>
                    <div class = "col-sm-12 botDivider">
                        <div id = "innerText">
                            <a href="index.html">Home</a>
                        </div>
                    </div>
                </div>
                </a>
                <div class = "col-xs-4 text-center botData lightOnHover activeData" id = "navigationDataTwo">
                    <div class = "col-sm-12 topDivider">
                        <i class = "fa fa-4x fa-envelope"></i>
                    </div>
                    <div class = "col-sm-12 botDivider">
                        <div id = "innerText">
                            <a>Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row entryBoxes">
                <h1 class = "text-center spacer">Contact Me</h1>
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate method="post" action="contactresponse.php">
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <input type="text" class="form-control" name="name" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <input type="email" class="form-control" name="email" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <input type="tel" class="form-control" name="phone" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <textarea rows="5" class="form-control" name="message" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        <br>
                        <div id="success"></div>
                            <div class="form-group col-xs-12 text-center">
                                <button type="submit" class="btn btn-lg">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src = "js/navCherries.js"></script>


<?php


$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];
?>


<?php

//echo $tagstyle.' Tag Style<br>';


echo 'Name:	'.$name. " <br>";
echo 'Phone:		'.$phone. " <br>";
echo 'EMAIL:		'.$email. " <br>";
echo 'Message:		'.$message. " <br>";

?>

<?php
$to = "andrew.lee12@gmail.com";
 $subject = "New Contact - TILE IMAGE";
 $body = 'Name:	'. $name. "\n" . 'Phone:			'. $phone. "\n" . 'EMAIL:			'. $email. "\n" . 'Message:		'. $message;
 if (mail($to, $subject, $body)) {
   echo("<p>Your message was successfully sent to Milford Accounting!</p>");
  } else {
   echo("<p>Your message was not successfully sent to Milford Accounting. Please contact Milford Accounting.</p>");
  }


?>
</body>
</html>