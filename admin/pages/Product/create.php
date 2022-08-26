<?php

global $local_strings;
global $lang;
global $lang_count;
global $uri;

$catalogs = getAll("catalog");

?>



<script src="/admin/editor/ckeditor.js"></script>

<div class="container">
    <div class="row">
        <div class="col-12">
            <form method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <input class="form-control my-2" type="search" name="name_uz"
                                   placeholder="<? echo $local_strings[$lang]['name']; ?>">

                            <input
                                    class="form-control my-2" type="search" name="name_ru"
                                    placeholder="<? echo $local_strings['uz']['name']; ?>">

                            <input class="form-control my-2" type="search" name="name_en"
                                   placeholder="<? echo $local_strings["en"]['name']; ?>">

                        </div>
                        <div class="col-6">
                            Catalog<br>
                            <select class="custom-select" name="catalog" required>
                                <option value="0" disabled selected> Catalog tanlang</option>
                                <?
                                if ($catalogs !== null && $catalogs !== "") {
                                    $i = 1;
                                    foreach ($catalogs as $catalog) {
                                        echo "<option value=" . $catalog['id'] . ">" . $catalog['name_' . "$lang"] . "</option>";
                                    }
                                }
                                ?>
                            </select>

                            <hr>

                            <input type="file" class="form-control my-2" name="logo" required
                                   placeholder="<? echo $local_strings[$lang]['logo']; ?>">

                        </div>

                    </div>

                    <div class="row">
                        <div class="col-4">
                            <!--                    Text Start -->
                            <textarea class="my-2 form-control" name="description_uz" id="description_uz"
                                      placeholder="<? echo $local_strings['uz']['description']; ?>"></textarea>
                        </div>

                        <div class="col-4">
                        <textarea class="form-control my-2" name="description_ru" id="description_ru"
                                  placeholder="<? echo $local_strings["ru"]['description']; ?>"></textarea>
                        </div>

                        <div class="col-4">
                        <textarea class="form-control my-2" name="description_en" id="description_en"
                                  placeholder="<? echo $local_strings["en"]['description']; ?>"></textarea>
                        </div>
                        <!--                    Text End -->
                    </div>

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
    $check = getimagesize($_FILES["logo"]["tmp_name"]);
    if ($check !== false) {
        $_POST = str_replace("'", "`", $_POST);
        response(saveProduct($_POST, $_FILES['logo']), "product");
    } else {
        ?>
        <script type="application/javascript">alert("Yuklangan ma'lumot rasm formatida emas!")</script>
        <?php
    }
}

?>


<script>
    CKEDITOR.replace('description_uz');
    CKEDITOR.replace('description_ru');
    CKEDITOR.replace('description_en');
</script>
