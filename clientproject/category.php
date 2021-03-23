<?php
//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

include('includes/phpsetup.php');
include('includes/head.html');

?>
<body>

<?php
include('includes/header.html');
?>

<div class="container" id="main">
    <!--Include headers for each category-->
    <form action="#" method="post" id="catSelector">
        <label for="category">Search by Category</label>
        <select id="category" name="category">
            <option value="none">Select a category</option>
            <option value="Agriculture">Agriculture</option>
            <option value="Circular Economy">Circular Economy</option>
            <option value="Clothing">Clothing</option>
            <option value="Consumer Goods">Consumer Goods</option>
            <option value="Ecology">Ecology</option>
            <option value="Education">Education</option>
            <option value="Energy">Energy</option>
            <option value="Healthcare">Healthcare</option>
            <option value="Housing">Housing</option>
            <option value="Lighting">Lighting</option>
            <option value="Manufacturing">Manufacturing</option>
            <option value="Transportation">Transportation</option>
            <option value="Wastewater">Wastewater</option>
            <option value="Water">Water</option>
            <option value="Other">Other</option>
        </select>
        <button type="submit">Go!</button>
    </form>
    <div id="catAgriculture">
        <?php
        //Variables
        //Variable for search bar input
        $searching = "";
        //Category Array
        $categories = array("Agriculture", "Circular Economy", "Clothing", "Consumer Goods", "Ecology", "Education",
            "Energy", "Healthcare", "Housing", "Lighting", "Manufacturing", "Transportation", "Wastewater", "Water",
            "Other");
        //Determines whether or not to search by category or by finding matching words
        $searchMode = false;

        //Gets searched item from search bar
        if (isset($_GET['search'])) {
            $searching = $_GET['search'];
        } elseif (isset($_GET['getIndex'])) {
            $searching = $_GET['getIndex'];
        } elseif (isset($_POST['category'])) {
            $searching = $_POST['category'];
        }

        //If what is searched is in the categories array, displays category name
        if (in_array($searching, $categories)) {
            echo "<h1>$searching</h1>";
        }
        //If search bar input is not empty, header displays Search: (Thing)
        else if (!empty($searching)) {
            echo "<h1>Search: $searching</h1>";
            $searchMode = true;
        }
        //For if nothing is being searched
        else {
            echo "<h1>Use the search bar or category list to start looking for companies!</h1>";
        }

        ?>
        <!--<ul>-->
        <?php
        $sql = "";
        // Gets companies with Names/Descriptions with searched words
        if ($searchMode) {
            $sql = "SELECT name, about, url, city, state, country, email, phone, logo FROM company WHERE (about LIKE '%$searching%' OR name LIKE '%$searching%') AND url != ''";
        }
        // (Default) Gets all companies
        else if (empty($_GET)) {
            $sql = "SELECT name, about, url, city, state, country, email, phone, logo FROM company WHERE url != ''";
        }
        // Gets all companies from one category
        else {
            $sql = "SELECT name, about, url, city, state, country, email, phone, logo FROM company WHERE category = '$searching' AND url != ''";
        }

        //Query to database
        $result = mysqli_query($cnxn, $sql);

        //Opens row
        echo "<div class='row row-cols-md-3 row-cols-1'>";
        //Assigns database fields to variables
        foreach ($result as $row) {
            $name = $row['name'];
            $about = $row['about'];
            $url = $row['url'];
            $validURL = !empty($url);
            $city = $row['city'];
            $state = $row['state'];
            $country = $row['country'];
            $email = $row['email'];
            $phone = $row['phone'];
            //Loads logo from uploads if it is available, otherwise uses the coneybeare logo
            $hasImage = $row['logo'];
            $image = "";
            if ($hasImage == null) {
                $image = "images/coneybeare_favicon.png";
            } else {
                $image = "$hasImage";
            }
            echo "<div class='col-md-4'>";
            //echo "<li>";
            //Hyperlinks title and image if url is available
            if ($validURL) {
                echo "<h4><a href='$url' target='_blank'>$name</a></h4>";
                echo "<a href='$url' target='_blank'><img class='rounded mx-auto d-block' src='$image' alt='placeholder logo'></a>";
            } else {
                echo "<h4>$name</h4>";
                echo "<img class='rounded mx-auto d-block' src='$image' alt='placeholder logo'>";
            }
            //Displays Location if available
            if (!empty($city) || !empty($state) || !empty($country))
            { echo "<p>$city: $state, $country</p>"; }
            //Displays Tagline if available
            if (!empty($about))
            { echo "<p>$about</p>"; }
            //Displays Contact Info if available
            if (!empty($email) || !empty($phone)) {
                echo "<p>Contact Info:</p>";
                if (!empty($email)) { echo "<p>$email</p>";}
                if (!empty($phone)) { echo "<p>$phone</p>";}
            }
            //echo "</li>";
            echo "</div>";/*
                    $colNum++;
                    if ($colNum == 5) {
                        $colNum = 0;
                        $inRow = false;
                    }*/
        }
        echo "</div>";
        //Closes row if it is open
        //if ($inRow) {echo "</div>";}
        $inRow = false;
        ?>
        <!--</ul>-->
    </div>
</div>

<?php
include('includes/footer.html');
?>
</body>
</html>