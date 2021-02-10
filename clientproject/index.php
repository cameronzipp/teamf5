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

<div class="container" id="whatIs">
    <h1>What is this site for?</h1>
    <p>
        This site is your host to find sustainability companies.
    </p>
</div>

<div class="container" id="categoryList">
    <h1>Categories</h1>
    <ul>
        <li>
            <img src="images/imgAgri.png" height="20" alt="Agriculture Image" id="AgriImg">
            <p>Agriculture</p>
        </li>
        <li>
            <img src="images/imgCirc.png" height="20" alt="Circular Economy Image" id="CircImg">
            <p>Circular Economy</p>
        </li>
        <li>
            <img src="images/imgCloth.png" height="20" alt="Clothing Image" id="ClothImg">
            <p>Clothing</p>
        </li>
        <li>
            <img src="images/imgCons.png" height="20" alt="Consumer Goods Image" id="ConsImg">
            <p>Consumer Goods</p>
        </li>
        <li>
            <img src="images/imgEco.png" height="20" alt="Ecology Image" id="EcoImg">
            <p>Ecology</p>
        </li>
        <li>
            <img src="images/imgEduc.png" height="20" alt="Education Image" id="EducImg">
            <p>Education</p>
        </li>
        <li>
            <img src="images/imgEnrg.png" height="20" alt="Energy Image" id="EnrgImg">
            <p>Energy</p>
        </li>
        <li>
            <img src="images/imgHeal.png" height="20" alt="Healthcare Image" id="HealImg">
            <p>Healthcare</p>
        </li>
        <li>
            <img src="images/imgHouse.png" height="20" alt="Housing Image" id="HouseImg">
            <p>Housing</p>
        </li>
        <li>
            <img src="images/imgLight.png" height="20" alt="Lighting Image" id="LightImg">
            <p>Lighting</p>
        </li>
        <li>
            <img src="images/imgManuf.png" height="20" alt="Manufacturing Image" id="ManufImg">
            <p>Manufacturing</p>
        </li>
        <li>
            <img src="images/imgTransp.png" height="20" alt="Transportation Image" id="TranspImg">
            <p>Transportation</p>
        </li>
        <li>
            <img src="images/imgWast.png" height="20" alt="Wastewater Image" id="WastImg">
            <p>Wastewater</p>
        </li>
        <li>
            <img src="images/imgWtr.png" height="20" alt="Water Image" id="WtrImg">
            <p>Water</p>
        </li>
    </ul>
</div>












<!--<div class="container" id="whatIs">
    <h1>What is this site for?</h1>
    <p>
        This site is your host to find sustainability companies.
    </p>
</div>

<div class="container" id="categoryList">
    <h1>Categories</h1>
    <ul>
        <li>
            <icon>
               <svg id="agriculture" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                    <path d="M 23.25 6.785 c -0.4637 -0.6963 -3.285 -0.7925 -3.3125 -0.7925 c -3.42 0.0462 -6.1137 1.945 -7.4375 4.7263 C 11.175 7.9375 8.4838 6.0388 5.0625 5.9925 c -0.0275 0 -2.8487 0.0963 -3.3125 0.7925 c -0.4913 0.7375 0.9625 3.845 0.9775 3.875 C 4.105 13.6512 8.945 15.7012 12.125 13.75 v 4.125 c -4.5137 0.17 -7 3.3675 -7 3.3675 H 19.875 S 17.5 18.0413 12.875 17.875 V 13.75 c 3.1975 1.95 8.0075 -0.0925 9.3975 -3.09 C 22.2875 10.625 23.7413 7.5225 23.25 6.785 Z M 11.625 13.1825 C 7.125 15.2413 2.7862 11.515 2.3875 7.1988 c 4.1913 -1.5837 9.14 1.1113 9.7975 5.1063 L 6.285 9.5288 c -0.4363 -0.215 -0.7638 0.4775 -0.32 0.6775 L 11.875 12.985 A 1.4587 1.4587 90 0 1 11.625 13.1825 Z m 9.975 -2.8575 c -0.33 0.66 -1.5175 2.23 -3.08 2.875 c -1.8625 0.7175 -4.2588 0.7775 -5.3925 -0.215 l 5.905 -2.7788 c 0.4425 -0.2 0.1175 -0.8938 -0.32 -0.6775 l -5.9 2.7763 c 0.665 -4 5.6037 -6.6863 9.7975 -5.1063 C 22.6575 7.61 22.1137 9.3038 21.6025 10.325 Z"/>
                </svg>
                <label>Agriculture</label>
            </icon>

        </li>
        <li>
            <img src="images/imgCirc.png" height="20" alt="Circular Economy Image" id="CircImg">
            <p>Circular Economy</p>
        </li>
        <li>
            <img src="images/imgCloth.png" height="20" alt="Clothing Image" id="ClothImg">
            <p>Clothing</p>
        </li>
        <li>
            <img src="images/imgCons.png" height="20" alt="Consumer Goods Image" id="ConsImg">
            <p>Consumer Goods</p>
        </li>
        <li>
            <img src="images/imgEco.png" height="20" alt="Ecology Image" id="EcoImg">
            <p>Ecology</p>
        </li>
        <li>
            <img src="images/imgEduc.png" height="20" alt="Education Image" id="EducImg">
            <p>Education</p>
        </li>
        <li>
            <img src="images/imgEnrg.png" height="20" alt="Energy Image" id="EnrgImg">
            <p>Energy</p>
        </li>
        <li>
            <img src="images/imgHeal.png" height="20" alt="Healthcare Image" id="HealImg">
            <p>Healthcare</p>
        </li>
        <li>
            <img src="images/imgHouse.png" height="20" alt="Housing Image" id="HouseImg">
            <p>Housing</p>
        </li>
        <li>
            <img src="images/imgLight.png" height="20" alt="Lighting Image" id="LightImg">
            <p>Lighting</p>
        </li>
        <li>
            <img src="images/imgManuf.png" height="20" alt="Manufacturing Image" id="ManufImg">
            <p>Manufacturing</p>
        </li>
        <li>
            <img src="images/imgTransp.png" height="20" alt="Transportation Image" id="TranspImg">
            <p>Transportation</p>
        </li>
        <li>
            <img src="images/imgWast.png" height="20" alt="Wastewater Image" id="WastImg">
            <p>Wastewater</p>
        </li>
        <li>
            <img src="images/imgWtr.png" height="20" alt="Water Image" id="WtrImg">
            <p>Water</p>
        </li>
    </ul>
</div>-->

<!--bootstrap card with logos-->
<!--
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card">
                    <img class="card-img-top" src="images/auroratech.png" height="250"  alt="Card image cap"/>
                    <div class="card-body">
                        <h5 class="card-title">Aurora Tech</h5>
                        <p class="card-text">Technology company that is building the world’s driver and its ecosystem
                            to save lives, get crucial goods where they need to go, and make mobility more efficient
                            and accessible for all.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="https://aurora.tech/"><button type="button" class="btn btn-sm btn-outline-secondary">Visit</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card">
                    <img class="card-img-top" src="images/allpowerlabs.png" height="250"  alt="Card image cap"/>
                    <div class="card-body">
                        <h5 class="card-title">All Power Labs</h5>
                        <p class="card-text">Astrolabe Analytics’ software makes batteries work better, longer and more
                            reliably, using a suite of cloud computing, data management and machine learning techniques.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="http://www.allpowerlabs.com/"><button type="button" class="btn btn-sm btn-outline-secondary">Visit</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card">
                    <img class="card-img-top" src="images/oValley1.png" height="250"  alt="Card image cap"/>
                    <div class="card-body">
                        <h5 class="card-title">Organic Valley</h5>
                        <p class="card-text">Conglomerate of local agriculture co-ops in the Midwest.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="https://www.organicvalley.coop/"><button type="button" class="btn btn-sm btn-outline-secondary">Visit</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card">
                    <img class="card-img-top" src="images/Nuleaf1.png" height="250"  alt="Card image cap"/>
                    <div class="card-body">
                        <h5 class="card-title">Nuleaf</h5>
                        <p class="card-text">NuLeaf’s NuTree makes treating and recycling water at any scale easy by
                            mimicking wetland ecosystems.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="https://www.nuleaftech.com/"><button type="button" class="btn btn-sm btn-outline-secondary">Visit</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card">
                    <img class="card-img-top" src="images/Evmatch.jpg" height="250"  alt="Card image cap"/>
                    <div class="card-body">
                        <h5 class="card-title">Evmatch</h5>
                        <p class="card-text">EVmatch’s peer-to-peer network for EV charging harnesses the power of
                            sharing to address the need for more reliable and convenient charging.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="https://www.evmatch.com/"><button type="button" class="btn btn-sm btn-outline-secondary">Visit</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card">
                    <img class="card-img-top" src="images/aquacycl.png" height="250"  alt="Card image cap"/>
                    <div class="card-body">
                        <h5 class="card-title">Aquacycl</h5>
                        <p class="card-text">Aquacycl uses bacteria to convert organic waste into
                            electricity, while decentralizing wastewater treatment for industries and applications.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                               <a href="https://www.aquacycl.com/"><button type="button" class="btn btn-sm btn-outline-secondary">Visit</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
-->

<?php
include('includes/footer.html');
?>





<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<!--<script src="../scripts/scripts.js"></script> -->

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
-->

</body></html>
