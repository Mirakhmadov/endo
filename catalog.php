<?
include "admin/config.php";
include "admin/strings.php";
include "admin/main_funcs.php";


global $local_strings;
global $lang;


session_start();



include "includes/head.php";

include "includes/top-bar.php";
include "includes/header.php";
?>


<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Catalog page</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Catalog page</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="catalog-sidebar">
                        <a href="#">Catalog 1</a>
                        <a href="#">Catalog 1</a>
                        <a href="#">Catalog 1</a>
                        <a href="#">Catalog 1</a>
                        <a href="#">Catalog 1</a>
                    </div>
                </div>
                <div class="col-9 catalog-main">
                    <div class="row">
                        <a class="col-md-4" href="#">
                            <div class="custom-card">
                                <img src="https://via.placeholder.com/300x300.png" class="custom-card-img">
                                <div class="custom-card-body">
                                    Product name
                                </div>
                            </div>
                        </a>
                        <a class="col-md-4" href="#">
                            <div class="custom-card">
                                <img src="https://via.placeholder.com/300x300.png" class="custom-card-img">
                                <div class="custom-card-body">
                                    Product name
                                </div>
                            </div>
                        </a>
                        <a class="col-md-4" href="#">
                            <div class="custom-card">
                                <img src="https://via.placeholder.com/300x300.png" class="custom-card-img">
                                <div class="custom-card-body">
                                    Product name
                                </div>
                            </div>
                        </a>
                        <a class="col-md-4" href="#">
                            <div class="custom-card">
                                <img src="https://via.placeholder.com/300x300.png" class="custom-card-img">
                                <div class="custom-card-body">
                                    Product name
                                </div>
                            </div>
                        </a>
                        <a class="col-md-4" href="#">
                            <div class="custom-card">
                                <img src="https://via.placeholder.com/300x300.png" class="custom-card-img">
                                <div class="custom-card-body">
                                    Product name
                                </div>
                            </div>
                        </a>
                        <a class="col-md-4" href="#">
                            <div class="custom-card">
                                <img src="https://via.placeholder.com/300x300.png" class="custom-card-img">
                                <div class="custom-card-body">
                                    Product name
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->


<?


include "includes/footer.php";
include "includes/pre-loader.php";
include "includes/scripts.php";


?>

