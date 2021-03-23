<?php
//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

include('includes/head.html');
?>

<body>
    <link href="images/symbol-defs.svg">
    <?php
    include('includes/header.html');
    ?>


    <br>
    <h1>Search Catalog by Category</h1>
    <br>
    <div class="container" id="categoryList">
        <div class="row">
            <div class="col">
                <div class="text-center">
                    <svg><use href="Icons/symbol-defs.svg#agriculture"></use></svg>
                    <p><a href="category.php?getIndex=Agriculture">Agriculture</a></p>
                </div>
            </div>
            <div class="col">
                <div class="text-center">
                    <svg><use href="Icons/symbol-defs.svg#circular-economy"></use></svg>
                    <p><a href="category.php?getIndex=Circular Economy">Circular Economy</a></p>
                </div>
            </div>
            <div class="col">
                <div class="text-center">
                    <svg><use href="Icons/symbol-defs.svg#clothing"></use></svg>
                    <p><a href="category.php?getIndex=Clothing">Clothing</a></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="text-center">
                    <svg><use href="Icons/symbol-defs.svg#consumer-goods"></use></svg>
                    <p><a href="category.php?getIndex=Consumer Goods">Consumer Goods</a></p>
                </div>
            </div>
            <div class="col">
                <div class="text-center">
                    <svg><use href="Icons/symbol-defs.svg#ecology"></use></svg>
                    <p><a href="category.php?getIndex=Ecology">Ecology</a></p>
                </div>
            </div>
            <div class="col">
                <div class="text-center">
                    <svg><use href="Icons/symbol-defs.svg#education"></use></svg>
                    <p><a href="category.php?getIndex=Education">Education</a></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="text-center">
                    <svg><use href="Icons/symbol-defs.svg#energy"></use></svg>
                    <p><a href="category.php?getIndex=Energy">Energy</a></p>
                </div>
            </div>
            <div class="col">
                <div class="text-center">
                    <svg><use href="Icons/symbol-defs.svg#healthcare"></use></svg>
                    <p><a href="category.php?getIndex=Healthcare">Healthcare</a></p>
                </div>
            </div>
            <div class="col">
                <div class="text-center">
                    <svg><use href="Icons/symbol-defs.svg#housing"></use></svg>
                    <p><a href="category.php?getIndex=Housing">Housing</a></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="text-center">
                    <svg><use href="Icons/symbol-defs.svg#lighting"></use></svg>
                    <p><a href="category.php?getIndex=Lighting">Lighting</a></p>
                </div>
            </div>
            <div class="col">
                <div class="text-center">
                    <svg><use href="Icons/symbol-defs.svg#manufacturing"></use></svg>
                    <p><a href="category.php?getIndex=Manufacturing">Manufacturing</a></p>
                </div>
            </div>
            <div class="col">
                <div class="text-center">
                    <svg><use href="Icons/symbol-defs.svg#transportation"></use></svg>
                    <p><a href="category.php?getIndex=Transportation">Transportation</a></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="text-center">
                    <svg><use href="Icons/symbol-defs.svg#wastewater"></use></svg>
                    <p><a href="category.php?getIndex=Wastewater">Wastewater</a></p>
                </div>
            </div>
            <div class="col">
                <div class="text-center">
                    <svg><use href="Icons/symbol-defs.svg#water"></use></svg>
                    <p><a href="category.php?getIndex=Water">Water</a></p>
                </div>
            </div>
            <div class="col"><!--This empty column keeps the list evenly spaced--></div>
        </div>
    </div>

    <?php
    include('includes/footer.html');
    ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="scripts/scripts.js"></script>

</body></html>