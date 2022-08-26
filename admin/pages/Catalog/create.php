<?php

global $local_strings;
global $lang;
global $lang_count;
global $uri;
?>


<div class="container">
    <div class="row">
        <div class="col-6">
            <form method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <input class="form-control my-2" type="search" name="name_uz"
                           placeholder="<? echo $local_strings['uz']['name']; ?>">

                    <input class="form-control my-2" type="search" name="name_ru"
                           placeholder="<? echo $local_strings["ru"]['name']; ?>">
                    <input class="form-control my-2" type="search" name="name_en"
                           placeholder="<? echo $local_strings["en"]['name']; ?>">

                    <input type="file" class="form-control my-2" name="photo" required
                           placeholder="<? echo $local_strings[$lang]['logo']; ?>">



                    <a href="/admin/<? echo $uri[2]; ?>"
                       class="btn btn-secondary"><? echo $local_strings[$lang]['cancel']; ?></a>
                    <input name="save" type="submit" class="btn btn-success"
                           value="<? echo $local_strings[$lang]['create']; ?>">
                </div>

            </form>
        </div>
    </div>
</div>

<?php

if (isset($_POST['save'])) {
    $check = getimagesize($_FILES["photo"]["tmp_name"]);
    if ($check !== false) {
        $_POST = str_replace("'", "`", $_POST);
        response(saveCatalog($_POST, $_FILES['photo']), "catalog");
    } else {
        ?>
        <script type="application/javascript">alert("Yuklangan ma'lumot rasm formatida emas!")</script>
        <?php
    }
}

?>
