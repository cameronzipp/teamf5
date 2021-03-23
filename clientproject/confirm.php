<?php
//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Session starts so the post array can be maintained between pages
session_start();

if (count($_POST) > 0) {
    $_SESSION['getPost'] = $_POST;
}

include('includes/phpsetup.php');
include('includes/head.html');

?>
<body>
<?php
include('includes/header.html');
?>

<div class="container">
    <?php
    $confirming = "review";
    if (isset($_GET['confirming']))
    {
        $confirming = $_GET['confirming'];
    }

    $pageHeader = "Here is a summary of your submission.";
    if ($confirming === "confirm") {
        $pageHeader = "Thank you for providing your information!
                               It has been sent to the Coneybeare Sustainability team for review.";
    } elseif ($confirming === "edit") {
        $pageHeader = "Feel free to edit each section as you please!";
    }
    echo "<h1>$pageHeader</h1>";
    ?>

    <pre>
            <div id="confirmDiv">
            <?php
            $getPost = $_SESSION['getPost'];

            $needLogo = true;
            if (isset($_GET['needLogo']))
            {
                $needLogo = $_GET['needLogo'];
            }

            $oname = $getPost['oname'];
            $website = $getPost['website'];

            $about = $getPost['about'];

            $category = $getPost['category'];
            $cemail = $getPost['cemail'];
            $phone = $getPost['phone'];
            $keywords = $getPost['keywords'];

            $inputCity = $getPost['inputCity'];
            $inputState = $getPost['inputState'];
            $inputCountry = $getPost['inputCountry'];
            $inputZip = $getPost['inputZip'];
            $inputAddress = $getPost['inputAddress'];
            $areaServed = $getPost['areaServed'];

            $fname = $getPost['fname'];
            $lname = $getPost['lname'];
            $email = $getPost['email'];
            $cTitle = $getPost['cTitle'];
            //$cAddress = $getPost[];
            $cPhone = $getPost['cPhone'];

            /* With the way I have set up the confirm page, uploading images is a little... weird to say the least.
             * What's happening here is that the image file, whether or not the user confirms their information, is
             * sent to the server, then the filename of the image gets sent to the session so it can be properly
             * put in the database.
             * */
            //If user comes from editing, they don't need the image stuff
            if ($needLogo && $confirming === "review") {
                //This whole next section is for uploading images
                //grabs uploaded file

                $target_dir = "uploads/";
                $target_dir .= date('ymdHis');
                $target_file = $target_dir . basename($_FILES['imgUpload']['name']);
                $_SESSION['getLogoFilename'] = $target_file;
                $uploadOk = 0;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                //Sees if any image file is uploaded
                if($target_file !== $target_dir)
                {
                    $check = getimagesize($_FILES['imgUpload']['tmp_name']);
                    //file is image
                    if($check !== false)
                    {
                        echo "<p>File is an image - " . $check["mime"] . ".</p>";
                        $uploadOk = 1;
                    }
                    //file is not image
                    else
                    {
                        echo "<p>File is not an image</p>";
                        $uploadOk = 0;
                    }
                }

                // Check if file already exists
                if (file_exists($target_file)) {
                    echo "Sorry, logo file already exists.";
                    $uploadOk = 0;
                }

                // Check file size
                if ($_FILES["imgUpload"]["size"] > 500000) {
                    echo "Sorry, your logo file is too large.";
                    $uploadOk = 0;
                }

                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                    echo "Sorry, your logo file was not uploaded.";
                    // if everything is ok, try to upload file
                } else {

                    if (move_uploaded_file($_FILES["imgUpload"]["tmp_name"], $target_file)) {
                        /*
                         * This will be for uploading logo file location to the database
                         *
                        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";

                        require ($_SERVER['HOME'].'/connect.php');
                        $cnxn = connect();

                        $sql = "INSERT INTO uploads (image_name)
                    VALUES ('$target_file')";
                        $success = mysqli_query($cnxn, $sql);
                        if (!$success) {
                            echo "Sorry, there was a database error.";
                        }
                        */
                        echo "<p>Your logo has been uploaded. If you decide to quit now,<br>we will take care of your logo file.</p>";
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                }
                /*Image Stuff end*/
            }
            if ($confirming === "review") { //Reviewing Application

                echo "<div id='shrinkFields'>";

                echo "<h2>Submission Summary:</h2>";

                echo "<div id='submSummary'>";

                echo "<p><strong>Organization Name:</strong> $oname</p>";
                echo "<p><strong>Website:</strong> $website</p>";
                echo "<p><strong>Tagline:</strong> $about</p>";
                echo "<p><strong>Category:</strong> $category</p>";
                echo "<p><strong>Company Email:</strong> $cemail</p>";
                echo "<p><strong>Phone:</strong> $phone</p>";
                echo "<p><strong>Located:</strong> $inputCity, $inputState. ($inputCountry) Address: $inputAddress ZIP: $inputZip</p>";
                echo "<p><strong>Serves:</strong> $areaServed</p>";
                echo "<p><strong>Contact:</strong> $fname $lname ($email)</p>";
                echo "<p><strong>Contact Title:</strong> $cTitle, <strong>Contact Phone:</strong> $cPhone</p>";
                echo "<p><strong>Keywords:</strong> $keywords</p>";

                if ($needLogo) {
                    //If a logo has been uploaded, the confirm page will say so.
                    $logoExist = "false";
                    if ($uploadOk == 1)
                    {
                        $logoExist = "true";
                    }
                    echo "<p>Uploaded Logo? $logoExist</p>";
                }

                echo "</div>";

                echo '<a class="btn btn-success" id="confirm" href="confirm.php?confirming=confirm">Send</a>';
                echo '<a class="btn btn-warning" id="edit" href="confirm.php?confirming=edit">Edit</a>';
                echo '<a class="btn btn-danger" id="redo" href="form.php">Redo</a>';

                echo "<br>";

                echo "</div>";

            } elseif ($confirming === "confirm") { //Confirm Application
                /**/
                $targFil = $_SESSION['getLogoFilename'];
                $sql = "INSERT INTO company (name, category, about, url, logo, email, phone, city, state, country) 
                        VALUES ('$oname', '$category', '$about', '$website', '$targFil', 
                                '$cemail', '$phone', '$inputCity', '$inputState', '$inputCountry')";

                $success = mysqli_query($cnxn, $sql);

                if ($success) {
                    echo "<h3>Added to Database!</h3>";

                } else {
                    echo "<h3>Error Connecting to Database</h3>";
                }
                //

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
                $emailBody .= "\r\nLog in page: http://teamf5.greenriverdev.com/clientproject/admin.php";
                $emailSubject = 'New Submission';
                $headers = "From: $emailFrom\r\n";
                $success = mail($emailTo, $emailSubject, $emailBody, $headers);
                //$success = true;
                if ($success) {
                    echo "<h4>Your Submission has been placed!</h4>";
                }
                else {
                    echo "<h4>Submission Failed.</h4>";
                }

                echo "<img src='images/coneybeare_favicon.png'/>";

                echo "<br><br>";

                echo "<a id='exitForm' href='category.php'>Go to Company List</a>";

                //Barrage of breaks to shove the footer to the bottom of the page.
                echo "<br><br><br><br><br><br>";

            } elseif ($confirming === "edit") { // Editing Application

                /*
                    $fname = $getPost['fname'];
                    $lname = $getPost['lname'];
                    $email = $getPost['email'];
                    $cTitle = $getPost['cTitle'];
                    //$cAddress = $getPost[];
                    $cPhone = $getPost['cPhone'];
                 */

                //I basically recreated and simplified the Form for the editing page

                echo '<form action="confirm.php?confirming=review&needLogo=0" method="post" id="orgForm" enctype="multipart/form-data">';

                echo "<div id='shrinkFields'>";

                echo "<div>"; //Section 1 - Organization Info

                echo "<h1>Organization Info</h1>";

                echo '<label for="oname" class="oInfo"> Organization Name *</label>';
                echo "<input type='text' class='form-control' value='$oname' id='oname' name='oname'>";
                echo '<span class="err" id="err-oname">Please enter an organization name</span>';

                echo '<label for="website" class="oInfo"> Website *</label>';
                echo "<input type='text' class='form-control' value='$website' id='website' name='website'>";
                echo '<span class="err" id="err-website">Please enter a website Must Start with an http(s)://
                            <br> and end with .com, .io, .us, .uk, .org, .gov, or .gg</span>';

                echo '<label for="about"> Enter your companies tagline <br><small>(Character Limit: 250)</small></label>';
                echo "<input type='text' class='form-control' value='$about' id='about' name='about'>";

                echo '<label for="category" class="oInfo">Category *</label>';
                echo "<select id='category' name='category' class='form-control'>
                            <option value='$category'>Leave as is: $category</option>
                            <option value='agriculture'>Agriculture</option>
                            <option value='circular_economy'>Circular Economy</option>
                            <option value='clothing'>Clothing</option>
                            <option value='consumer_goods'>Consumer Goods</option>
                            <option value='ecology'>Ecology</option>
                            <option value='education'>Education</option>
                            <option value='energy'>Energy</option>
                            <option value='healthcare'>Healthcare</option>
                            <option value='housing'>Housing</option>
                            <option value='lighting'>Lighting</option>
                            <option value='manufacturing'>Manufacturing</option>
                            <option value='transportation'>Transportation</option>
                            <option value='wastewater'>Wastewater</option>
                            <option value='water'>Water</option>
                            <option value='other'>Other</option>
                            </select>";
                echo '<span class="err" id="err-category">Please select a category</span>';

                echo '<label for="keywords">Enter keywords: <small>(Style: #Keyword)</small></label>';
                echo "<input type='text' class='form-control' value='$keywords' id='keywords' name='keywords'>";
                echo "</div>";

                echo "<div>"; //Section 2 - Company Contact Info
                echo "<h1>Company Contact Info</h1>";

                echo '<label for="cemail" class="oInfo">Company Email</label>';
                echo "<input type='text' class='form-control' value='$cemail' id='cemail' name='cemail'>";

                echo '<label for="phone" class="cInfo">Phone #</label>';
                echo "<input type='text' class='form-control' value='$phone' id='phone' name='phone'>";
                echo "</div>";

                echo "<div>"; //Section 3 - Location
                echo "<h1>Location Info</h1>";

                echo '<label for="inputCity" class="form-label">City *</label>';
                echo "<input type='text' class='form-control' value='$inputCity' id='inputCity' name='inputCity'>";
                echo '<span class="err" id="err-city">Please enter a city</span>';

                echo '<label for="inputState" class="form-label">State *</label>';
                echo "<input type='text' class='form-control' value='$inputState' id='inputState' name='inputState'>";
                echo '<span class="err" id="err-state">Please enter a state/Region</span>';

                echo '<label for="inputCountry" class="form-label">Country *</label>';
                echo "<input type='text' class='form-control' value='$inputCountry' id='inputCountry' name='inputCountry'>";
                echo '<span class="err" id="err-country">Please enter a Country</span>';

                echo '<label for="inputAddress" class="form-label">Address</label>';
                echo "<input type='text' class='form-control' value='$inputAddress' id='inputAddress' name='inputAddress'>";

                echo '<label for="inputZip" class="form-label">Zip Code</label>';
                echo "<input type='text' class='form-control' value='$inputZip' id='inputZip' name='inputZip'>";


                echo '<label for="areaServed" class="form-label">Area Served *</label>';
                echo "<select id='areaServed' class='form-control' name='areaServed'>
                        <option value='$areaServed'>Leave as is: $areaServed</option>
                        <option value='localRegional'>Local/Regional</option>
                        <option value='state'>State</option>
                        <option value='national'>National</option>
                        <option value='global'>Global</option>
                          </select>";
                echo '<span class="err" id="err-serve">Please select an area served</span>';
                echo "</div>";

                echo "<div>"; //Section 4 - Point of Contact
                echo "<h1>Point of Contact</h1>";

                echo '<span class="err" id="err-contact">Please fill out this section</span><br>
                            <span class="err" id="err-cEmail">Invalid email, please use an email that uses an @ and a .</span><br>
                            <span class="err" id="err-cPhone">Invalid phone, must be in format ###-###-####</span>';

                echo '<br><label for="fname" class="cInfo">First Name</label>';
                echo "<input type='text' class='form-control' value='$fname' id='fname' name='fname'>";
                echo '<label for="lname" class="cInfo">Last Name</label>';
                echo "<input type='text' class='form-control' value='$lname' id='lname' name='lname'>";
                echo '<label for="email" class="cInfo">Email</label>';
                echo "<input type='text' class='form-control' value='$email' id='email' name='email'>";
                echo '<label for="cTitle" class="cInfo">Contact Title</label>';
                echo "<input type='text' class='form-control' value='$cTitle' id='cTitle' name='cTitle'>";
                echo '<label for="cPhone" class="cInfo">Phone #</label>';
                echo "<input type='text' class='form-control' value='$cPhone' id='cPhone' name='cPhone'>";
                echo "</div>";

                echo '<button class="btn btn-primary" type="submit">Review</button>';
                echo '<a class="btn btn-danger" id="redo" href="form.php">Redo</a>';

                echo "</div>";

                echo '</form>';

            } else { // If something messes up
                echo "<h1>Oops! Something went wrong.</h1>";
                echo "<h1>Confirming = $confirming</h1>";
            }
            echo "<br>";
            ?>
        </div>


        </pre>
</div>
<?php
include('includes/footer.html');
?>
<script src="scripts/scripts.js"></script>
</body>

</html>