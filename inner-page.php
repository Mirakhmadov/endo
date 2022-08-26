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
                <h2>Inner Page</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Inner Page</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
        <div class="container">
            <p>
                Example inner page template
            </p>
        </div>
    </section>

</main><!-- End #main -->


<?


include "includes/footer.php";
include "includes/pre-loader.php";
include "includes/scripts.php";


?>

