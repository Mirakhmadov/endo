<?php

global $uri;
global $lang_count;
global $lang;
global $local_strings;

$travel = getOne($uri[4], "payment");

?>

<div class="container mt-5">
    <div class="row">
        <div class="col text-center align-items-center">
            <h4>Акция </h4>
            <form method="post" class="pt-3">
                <div class="modal-body">
                    <input type="number" class="form-control my-2" name="price" required
                           placeholder="Tолько число">
                </div>
                <div class="modal-footer">
                    <a class="btn btn-secondary"
                       href="/admin/order"><? echo $local_strings[$lang]['cancel']; ?></a>
                    <input name="save" type="submit" class="btn btn-success"
                           value="<? echo $local_strings[$lang]['create']; ?>">
                </div>
            </form>
        </div>
    </div>
</div>

<?php
if (isset($_POST['save'])) {
    response(setPricePayment($travel['id'], $_POST['price']), "order");
}
?>
