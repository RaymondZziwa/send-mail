<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKAMaz4iL4odyJg-YzOD0gPfz6LKSgDME&callback=initMap&libraries=&v=weekly"
    async
    ></script>
<style>
    html,body{
        padding:0;
        margin: 0;
        max-width: 100%;
    }
    #footer{
        color: white;
    }
    h3{
        color:red;
    }
    #social{
        width: 100%;
        /*border-top: 2px solid white;*/
        margin-top: 30px;
        height: 100px;
        position: relative;
    }
    #social::after{
        content: "";
        display: block;
        position: absolute;
        width: 50%;
        border-top: 2px solid white;
        left: 25%;
        right: 25%;

    }
    #form{
        border: 2px solid grey;
        margin-left: 1px;
        box-shadow: 5px 10px 5px 5px grey;
        height: 300px;
    }
    #map{
        height:300px;
        width:700px;
    }

span{
    opacity: 1;
    transition: all 1s ease-in;
}
span.fade{
    opacity: 5;
}
</style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" id="navbar">
                <nav class="navbar navbar-expand-lg navbar-light ">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="index.html"><img src="/images/IMG-20210329-WA0024.jpg" style="height: 50px;"/></a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="margin-left: 70%;">
                        <div class="navbar-nav">
                          <a class="nav-link" href="index.html">Home</a>
                          <a class="nav-link" href="services.html">Services</a>
                          <a class="nav-link active" aria-current="page" href="#">Contact Us</a>
                        </div>
                      </div>
                    </div>
                  </nav>
            </div>
        </div>
        <div class="row" style="height: 300px;background-image: url(/images/firmbee-com-SpVHcbuKi6E-unsplash.jpg);background-size: contain;">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" id="info">
                    <p  class="anime" style="text-align: center;font-size: 1.8rem;margin-top: 60px;color: white;font-family: Comic Sans, Comic Sans MS, cursive;">For More information,contact us and we shall get back to you with more details</p>                   
            </div>
        </div>
        <div class="row" style="margin-top: 10px;">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" id="form">
                    <form method="POST" name="myemailform" action="form-to-email.php" data-netlify="true">
                        <div class="input-group" style="margin-top: 5px;">
                            <span class="input-group-text">First and last name</span>
                            <input type="text" aria-label="First name" name="fname" class="form-control">
                            <input type="text" aria-label="Last name" name="lname" class="form-control">
                        </div>
                        <div class="input-group mb-3" style="margin-top: 20px;">
                            <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                            <input type="text" class="form-control" name="email" aria-label="email">
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="text" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Message</label>
                        </div>
                        <button class="btn btn-outline-danger" type="submit" name="submitinfo"  style="margin-top: 5px;">Submit</button>
                    </form>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" id="map">

            </div>
        </div>
        <div class="row" style="margin-top: 30px;height: 300px;">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <h2>Hospital Address</h2>
                <p style="padding-left: 25px;">Nelspruit,South Africa </p>
                <img src="/icons/telephone.png" alt="phone" style="height: 20px;padding-left: 25px;">+27619495219<br> 
                <img src="/icons/computer.png" alt="mail" style="height: 20px;padding-left: 25px;"> mabuzawomenclinic@gmail.com<br>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <h2>Operation Time</h2>
                <p style="padding-left: 25px;"> Mon-Fri  <button type="button" class="btn btn-outline-danger">8:00 AM - 10:00 PM</button><br></p>
                <p style="padding-left: 25px;">Sat  <button type="button" class="btn btn-outline-danger" style="margin-left: 35px;">8:00 AM - 1:00 PM</button></p>
            </div>
        </div>
        <div class="row" style="background-image:url(/images/sam-moqadam-7VE6O_-kgxA-unsplash.jpg);background-size: contain;margin-top: 20px;" id="footer">
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4" style="text-align: center;margin-top: 30px;">
                <h3>MABUZA WOMEN'S CLINIC</h3>
                <p>Mabuza clinic is a well set up hospital offering terminations of pregnancy upto 24 weeks both local and conscious sedation are available.Become a mother by choice not by accident. </p>
                <h3>Subscribe to our News Letter</h3>
                <div class="input-group flex-nowrap">
                    <input type="text" class="form-control" placeholder="email" aria-label="Username" aria-describedby="addon-wrapping" required/>
                    <input class="btn btn-primary" type="submit" value="Subscribe">
                  </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4" style="text-align: center;margin-top: 30px;">
                <h3>Links</h3>
                <P style="color: white;">
                    <a href="index.html" style="color: white;">Home</a><br>
                    <a href="services.html" style="color: white;">Services</a><br>
                    <a href="contact us.html" style="color: white;">Contact Us</a>
                </P>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4" style="text-align: center;margin-top: 30px;">
                <h3>Contact Us</h3>
                <img src="/icons/telephone.png" style="height:20px;">+27619495219<br>
                <h3>Email Us On</h3>
                <img src="/icons/computer.png" style="height:20px;">mabuzawomenclinic@gmail.com<br>
                <h3>Location</h3>
                <img src="/icons/placeholder.png" style="height:20px;">Nelspruit, South Africa
            </div>
            <div class="row" id="social">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" style="text-align: center;">
                        <a href="https://www.facebook.com/nickmuwanga/"><img src="/icons/facebook.png" style="height: 30px;margin-top: 5px;"></a>
                        <a href="#"><img src="/icons/whatsapp.png" style="height: 30px;margin-top: 5px;"></a>
                        <a href="https://www.twitter.com/mabuzawomenclinic/"><img src="/icons/twitter.png" style="height: 30px;margin-top: 5px;"></a><br>
                        &copy;2021 MABUZA WOMEN'S CLINIC,SA
                </div>
            </div>
        </div>
    </div>
    <script>
        function initMap() {
          // The location of mabuza
          var mabuza= { lat:-25.457100, lng:  31.008636 };
          // The map, centered at Umssn
           var map = new google.maps.Map(document.getElementById("map"), {
            zoom: 15,
            center: mabuza,
          });
          // The marker, positioned at umssn
          var marker = new google.maps.Marker({
            position: mabuza,
            map: map,
          });
        }
        </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>

<?php
// Uncomment the next line if you're using a dependency loader (such as Composer) (recommended)
require 'vendor/autoload.php';
$API_KEY ="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";
// Uncomment the next line if you're not using a dependency loader (such as Composer), replacing <PATH TO> with the path to the sendgrid-php.php file
// require_once '<PATH TO>/sendgrid-php.php';

if(isset($_POST['submit']))
{
  $name = $_POST['fname'];
  $user_Mail = $_POST['email'];
  $mail = $_POST['text'];
  

  /*$mailTo = "Mabuzawomenclinic@hotmail.com";
  $headers = "From: Mabuza Hospital Website";
  $txt = "You have recieved an email from ".$name.".\n\n".$mail;

  mail($mailTo,$txt,$headers);
  header("Location: index.php?mailsend");*/
  $email = new \SendGrid\Mail\Mail();
  $email->setFrom("Mabuzawomenclinic@hotmail.com", "Mabuza Clinic");
  $email->setSubject("Inquiry from potential client");
  $email->addTo($user_Mail, $name);
  $email->addContent("text/plain", $mail);
  /*$email->addContent(
      "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
  );*/
  $sendgrid = new \SendGrid($API_KEY);
  if($sendgrid->send($email));
  {
    echo "Email sent successfully";
  }
  
  /*try {
      $response = 
      print $response->statusCode() . "\n";
      print_r($response->headers());
      print $response->body() . "\n";
  } catch (Exception $e) {
      echo 'Caught exception: '. $e->getMessage() ."\n";
  }*/
}


/*if(isset($_POST['submit']))
{
  $name = $_POST['fname'];
  $user_Mail = $_POST['email'];
  $mail = $_POST['text'];

  $mailTo = "Mabuzawomenclinic@hotmail.com";
  $headers = "From: Mabuza Hospital Website";
  $txt = "You have recieved an email from ".$name.".\n\n".$mail;

  mail($mailTo,$txt,$headers);
  header("Location: index.php?mailsend");
}
// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
   */
?> 