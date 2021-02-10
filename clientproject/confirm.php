<?php
//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

include('includes/head.html');
?>
<body>
<?php
include('includes/header.html');
?>

<div class="container">
    <h1>Thank you for providing your information!
        It has been sent to the Coneybeare Sustainability team for review.</h1>

    <pre>
            <?php

            //var_dump($_POST);

            $oname = $_POST['oname'];
            $website = $_POST['website'];

            $about = $_POST['about'];

            $category = $_POST['category'];
            $cemail = $_POST['cemail'];

            $inputCity = $_POST['inputCity'];
            $inputState = $_POST['inputState'];
            $inputCountry = $_POST['inputCountry'];
            $inputZip = $_POST['inputZip'];
            $areaServed = $_POST['areaServed'];

            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];

            //Functional, albeit crude, way to check if the uploaded file is an image
            //grabs uploaded file
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES['imgUpload']['name']);
            $uploadOk = 0;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            //Sees if any image file is uploaded
            if($target_file !== $target_dir)
            {
                $check = getimagesize($_FILES['imgUpload']['tmp_name']);
                //file is image
                if($check !== false)
                {
                    echo "<h1>File is an image - " . $check["mime"] . ".</h1>";
                    $uploadOk = 1;
                }
                //file is not image
                else
                {
                    echo "<h1>File is not an image</h1>";
                    $uploadOk = 0;
                }
            }


            /*
            if(isset($_POST['submit']))
            {
            }
            /*
            $imgUoad = $_POST['imgUpload'];
            $logoUploaded = empty($imgUpload);
            */

            echo "<h2>Submission Summary:</h2>";
            echo "<p>Organization Name: $oname</p>";
            echo "<p>Website: $website</p>";
            echo "<p>Tagline: $about</p>";
            echo "<p>Category: $category</p>";
            echo "<p>Company Email: $cemail</p>";
            echo "<p>Located: $inputCity, $inputState. ($inputCountry) ZIP: $inputZip</p>";
            echo "<p>Serves: $areaServed</p>";
            echo "<p>Contact: $fname $lname ($email)</p>";

            //If a logo has been uploaded, the confirm page will say so.
            $logoExist = "false";
            if ($uploadOk == 1)
            {
                $logoExist = "true";
            }
            echo "<p>Uploaded Logo? $logoExist</p>";

            echo "<br>";

            //email function, place proper email addresses in fields
            $emailTo = '#';
            $emailFrom = '#';
            $emailBody = "Welcome to Coneybeare $oname!\r\n";
            $emailBody .= "Their website is: $website and their email address is $cemail.\r\n";
            $emailBody .= "Their tagline is: $about\r\n";
            $emailBody .= "They specialize in $category\r\n";
            $emailBody .= "They are located in: $inputCity, $inputState. ($inputCountry) ZIP: $inputZip\r\n";
            $emailBody .= "Serving: $areaServed\r\n";
            $emailBody .= "You can contact: $fname $lname ($email)\r\n";
            $emailBody .= "\r\nLog in page: #";
            $emailSubject = 'New Submission';
            $headers = "From: $emailFrom\r\n";
            $success = mail($emailTo, $emailSubject, $emailBody, $headers);
            //$success = true;
            if ($success) {
                echo "<h3>Your Submission has been placed!</h3>";
            }
            else {
                echo "<h3>Submission Failed.</h3>";
            }
            ?>
        </pre>
</div>
<?php
include('includes/footer.html');
?>
</body>
</html>
