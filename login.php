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



<!-- Privacy Content -->
<div class="ex-basic-2 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="row mt-5">
                    <div class="col-6 offset-3">

                        <!-- Privacy Form -->
                        <div class="form-container">
                            <form data-toggle="validator" method="post">
                                <h1 class="text-center my-5">Login</h1>
                                <div class="form-group">
                                    <label class="label-control" for="pname">Имя пользователя</label>
                                    <input type="text" class="form-control" id="pname" name="phone" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <label class="label-control" for="pemail">Пароль</label>
                                    <input type="password" class="form-control" id="pemail" name="pass" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group mx-auto d-flex justify-content-center pt-3">
                                    <a type="submit" href="../index.php" class="btn btn-outline-info w-25 mr-2 ml-2"><?=$local_strings[$lang]['home'];?></a>
                                    <input type="submit" name="enter" class="btn btn-primary w-25 mr-2 ml-2" value="Вход">
                                </div>
                                <div class="form-message">
                                    <div id="pmsgSubmit" class="h3 text-center hidden"></div>
                                </div>

                                <?
                                if (isset($_POST["enter"])) {
                                    global $con;
                                    $phone = $_POST["phone"];
                                    $pass = $_POST['pass'];

                                    $sql = "select * from user where phone='{$phone}' and password='{$pass}'";
                                    $r = mysqli_query($con, $sql);
                                    if (mysqli_num_rows($r) > 0) {
                                        while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
                                            $_SESSION["user_id"] = $row["id"];
                                            $_SESSION["phone"] = $row["phone"];
                                            ?>
                                                <script type="text/javascript">
                                                    window.location.href = "" + window.location.origin + "/admin"
                                                </script>
                                            <?
                                        }
                                    } else {
                                        echo "<label for='phone_number' class='text-danger'>Login va parol xato</label>";
                                    }
                                }
                                ?>
                            </form>
                        </div> <!-- end of form container -->
                        <!-- end of privacy form -->

                    </div> <!-- end of col-->
                </div> <!-- end of row -->
            </div> <!-- end of col-->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of ex-basic-2 -->
<!-- end of privacy content -->


<?


include "includes/footer.php";
include "includes/pre-loader.php";
include "includes/scripts.php";


?>