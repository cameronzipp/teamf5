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

<br>
<div class="container formContainer" id="formPage">
    <div id="aboutText">
        <p>Please complete the form to be included in the Sustainability Catalog.</p>
    </div>

    <form action="confirm.php" method="post" id="orgForm" enctype="multipart/form-data">
        <!-- Organization Name -->
        <fieldset class="form-group border p-2">
            <legend>Organization Info</legend>

            <div class="row">
                <div class="col">
                    <!-- Company Name -->
                    <div class="form-group">
                        <label for="oname" class="oInfo"> Organization Name *</label>
                        <input type="text" class="form-control" placeholder="Organization name" id="oname" name="oname">
                        <span class="err" id="err-oname">Please enter an organization name</span>
                    </div>
                </div>
                <div class="col">
                    <!-- Website Name -->
                    <div class="form-group">
                        <label for="website" class="oInfo"> Website *</label>
                        <input type="text" class="form-control" placeholder="http(s)://website.com" id="website" name="website">
                        <span class="err" id="err-website">Please enter a website Must Start with an 'http(s)://'
                            <br> and end with .com, .io, .us, .uk, .org, .gov, or .gg</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="about"> Enter your companies tagline <br><small>(Character Limit: 250)</small></label>
                        <textarea class="form-control" rows="1" id="about" placeholder="Company Tagline" name="about"></textarea>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="imgUpload" class="cInfo"> Upload an image of your logo<br><small>Acceptable: png, tif, bmp, jpeg</small></label>
                        <input type="file" value="Upload Image" class="form-control" name="imgUpload" id="imgUpload">
                        <span class="err" id="err-img">Please upload a photo
                            <br>Acceptable Formats: .png, .tif, .tiff, .bmp, .jpg, .jpeg</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <!-- Category -->
                    <div class="form-group">
                        <label for="category" class="oInfo"> Category *</label>
                        <select id="category" name="category" class="form-control">
                            <option value="none">Select a category</option>
                            <option value="agriculture">Agriculture</option>
                            <option value="circular_economy">Circular Economy</option>
                            <option value="clothing">Clothing</option>
                            <option value="consumer_goods">Consumer Goods</option>
                            <option value="ecology">Ecology</option>
                            <option value="education">Education</option>
                            <option value="energy">Energy</option>
                            <option value="healthcare">Healthcare</option>
                            <option value="housing">Housing</option>
                            <option value="lighting">Lighting</option>
                            <option value="manufacturing">Manufacturing</option>
                            <option value="transportation">Transportation</option>
                            <option value="wastewater">Wastewater</option>
                            <option value="water">Water</option>
                            <option value="other">Other</option>
                        </select>
                        <span class="err" id="err-category">Please enter a category</span>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="keywords">Enter keywords: <small>(Style: #Keyword)</small></label>
                        <textarea class="form-control" rows="1" id="keywords" placeholder="#Keyword #Key word2 #Key word 3" name="keywords"></textarea>
                    </div>
                </div>
            </div>
        </fieldset>

        <br>
        <!-- Contact Info -->
        <fieldset class="form-group border p-2">
            <legend>Company Contact Info</legend>
            <p class="aboutSide">This section is not required, but if provided will be included in the catalog. </p>

            <div class="row">
                <div class="col">
                    <!-- Email -->
                    <div class="form-group">
                        <label for="cemail" class="oInfo"> Company Email</label>
                        <input type="text" class="form-control" placeholder="companyemailhere@email.com" id="cemail" name="cemail">
                        <!--<span class="err" id="err-cemail">Please enter an email with an @ and a .com</span>-->
                    </div>
                </div>
                <div class="col">
                    <!--Phone-->
                    <div class="form-group">
                        <label for="phone" class="cInfo">Phone #</label>
                        <input type="text" class="form-control" placeholder="###-###-####" id="phone" name="phone">
                        <!--<span class="err" id="err-phone">Please enter a Phone Number in the style (###-###-####)</span>-->
                    </div>
                </div>
            </div>
        </fieldset>

        <br>
        <!-- Location -->
        <fieldset class="form-group border p-2">
            <legend>Location</legend>

            <div class="row">
                <div class="col">
                    <label for="inputCity" class="form-label">City *</label>
                    <input type="text" class="form-control" id="inputCity" placeholder="City" name="inputCity">
                    <span class="err" id="err-city">Please enter a city</span>
                </div>
                <div class="col">
                    <label for="inputState" class="form-label">State *</label>
                    <input type="text" id="inputState" class="form-control" name="inputState" placeholder="State/Region">
                    <span class="err" id="err-state">Please enter a state/Region</span>
                </div>
                <div class="col">
                    <label for="inputCountry" class="form-label"> Country *</label>
                    <input type="text" class="form-control" id="inputCountry" placeholder="Country" name="inputCountry">
                    <span class="err" id="err-country">Please enter a Country</span>
                </div>
            </div>
            <div class="row">
                <p>Both of these are optional, but if Address is provided, it will be put on our map!</p>
                <div class="col">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Address" name="inputAddress">
                </div>
                <div class="col">
                    <label for="inputZip" class="form-label">Zip Code</label>
                    <input type="text" class="form-control" id="inputZip" placeholder="Zip Code" name="inputZip">
                </div>
            </div>
            <div class="row">
                <!--Geographical area served (local/regional, state, national, global)-->
                <div class="col">
                    <label for="areaServed" class="form-label"> Area Served *</label>
                    <select id="areaServed" class="form-control" name="areaServed">
                        <option value="localRegional">Local/Regional</option>
                        <option value="state">State</option>
                        <option value="national">National</option>
                        <option value="global">Global</option>
                    </select>
                    <span class="err" id="err-serve">Please select an area served</span>
                </div>
            </div>
        </fieldset>

        <br>
        <!-- Point of Contact -->
        <fieldset class="form-group border p-2">
            <legend>*Point of Contact*</legend>
            <p class="aboutSide">This person will be contacted regarding questions about their submission.<br>
                This section is required, but will not be included in the catalog. </p>
            <span class="err" id="err-contact">Please fill out this section</span><br>
            <span class="err" id="err-cEmail">Invalid email, please use an email that uses an @ and a .com</span><br>
            <span class="err" id="err-cPhone">Invalid phone, must be in format ###-###-####</span>

            <div class="row">
                <div class="col">
                    <!-- First Name -->
                    <div class="form-group">
                        <label for="fname" class="cInfo">First Name</label>
                        <input type="text" class="form-control" placeholder="First name" id="fname" name="fname">
                    </div>
                </div>
                <div class="col">
                    <!-- Last Name -->
                    <div class="form-group">
                        <label for="lname" class="cInfo">Last Name</label>
                        <input type="text" class="form-control" placeholder="Last name" id="lname" name="lname">
                    </div>
                </div>
                <div class="col">
                    <!-- Email -->
                    <div class="form-group">
                        <label for="email" class="cInfo">Email</label>
                        <input type="text" class="form-control" placeholder="personalemailhere@email.com" id="email" name="email">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <!--Contact Title-->
                    <div class="form-group">
                        <label for="cTitle" class="cInfo">Contact Title</label>
                        <input type="text" class="form-control" placeholder="Title" id="cTitle" name="cTitle">
                    </div>
                </div>
                <div class="col">
                    <!--Phone-->
                    <div class="form-group">
                        <label for="cPhone" class="cInfo">Phone #</label>
                        <input type="text" class="form-control" placeholder="###-###-####" id="cPhone" name="cPhone">
                    </div>
                </div>
            </div>
        </fieldset>

        <br>
        <!-- Check and submit buttons -->
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <br>
    </form>
</div>

<?php
include('includes/footer.html');
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="scripts/scripts.js"></script>

</body></html>