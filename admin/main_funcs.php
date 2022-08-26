<?php


function changeLang($l) {
    global $uri;

    $cookie_name = "lang";
    $cookie_value = strtolower($l);
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

    ?>
        <script type="application/javascript">window.location.href = ""+window.location.origin+"/admin/<? echo $uri[2]; ?>"</script>
    <?php
}


function changeLangFront($l) {

    $cookie_name = "lang";
    $cookie_value = strtolower($l);
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

    ?>
    <script type="application/javascript">
        window.location.href = ""+window.location.href
    </script>
    <?php
}





function primary($uri, $count)
{
    if ($count === 3){
        switch ($uri[2]){

            case "dashboard" : include "./pages/Dashboard/index.php";
                break;

            case "catalog" : include "./pages/Catalog/list.php";
                break;

            case "product" : include "./pages/Product/list.php";
                break;

            case "news" : include "./pages/News/list.php";
                break;

            case "partner" : include "./pages/Partner/list.php";
                break;

            case "order" : include "./pages/Payment/list.php";
                break;


            default : null;
        }
    } elseif ($count === 4){
        if ($uri[3] === "create"){
            switch ($uri[2]){
                case "catalog" : include "./pages/Catalog/create.php";
                    break;


                case "product" : include "./pages/Product/create.php";
                    break;


                case "news" : include "./pages/News/create.php";
                    break;

                case "partner" : include "./pages/Partner/create.php";
                    break;


                default : null;
            }
        }
    }
    elseif ($count === 5){
        if ($uri[3] === "view"){
            switch ($uri[2]){

                case "product" : include "./pages/Product/view.php";
                    break;

                case "news" : include "./pages/News/view.php";
                    break;


                default : null;
            }
        } elseif ($uri[3] === "edit") {
            switch ($uri[2]){

                default : null;
            }
        }  elseif ($uri[3] === "add") {
            switch ($uri[2]){

                case "product" : include "./pages/Product/add.php";
                    break;


                default : null;
            }
        } elseif ($uri[3] === "promo") {
            switch ($uri[2]){

                case "payment" : include "./pages/Payment/price.php";
                    break;


                default : null;
            }
        }
        elseif ($uri[3] === "delete") {
            include "./pages/delete.php";
        }
    } else {
        echo "Not found";
    }
}


function delete($id, $table)
{
    global $con;
    $sql = "delete from {$table} where id = '{$id}'";
    $r = mysqli_query($con, $sql);
    if ($r) {
        return true;
    } else {
        return false;
    }
}


function getAll($table)
{
    global $con;
    $sql = "select * from {$table} order by id DESC";
    $r = mysqli_query($con, $sql);
    if (mysqli_num_rows($r) > 0) {
        $arr = [];
        while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)){
            array_push($arr, $row);
        }

        return $arr;
    } else {
        return null;
    }
}

function getSql($sql){
    global $con;
    $r = mysqli_query($con, $sql);
    if (mysqli_num_rows($r) > 0) {
        $arr = [];
        while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)){
            array_push($arr, $row);
        }

        return $arr;
    } else {
        return null;
    }
}

function getLastList($table, $start,$limit){

    global $con;
    $sql = "select * from {$table} order by id DESC limit {$start},{$limit}";
    $r = mysqli_query($con, $sql);
    if (mysqli_num_rows($r) > 0) {
        $arr = [];
        while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)){
            array_push($arr, $row);
        }

        return $arr;
    } else {
        return null;
    }
}

function getOne($id,$table)
{
    global $con;
    $sql = "select * from {$table} where id = '{$id}'";
    $r = mysqli_query($con, $sql);
    if (mysqli_num_rows($r) > 0) {
        return mysqli_fetch_array($r, MYSQLI_ASSOC);
    } else {
        return null;
    }
}


function response($res, $page){
    if ($res === true) {
        ?><script>window.location.href = window.location.origin + "/admin/<?echo $page;?>"</script><?php
    } else {
        ?><script>alert("Malumot yuklanmadi -_-");</script><?php
    }
}

function responseFront($res){
    if ($res === true) {
        ?><script>
            alert("Ma'lumot yuklandi!")
            window.location.href = window.location.origin
        </script><?php
    } else {
        ?><script>alert("Malumot yuklanmadi -_-");</script><?php
    }
}


function responseFrontPay($res){
    if ($res) {
        ?><script>
            alert("Buyurtma berildi! \n Sizning to'lov kalitingiz : <?= $res; ?>")
            window.location.href = ""+window.location.origin+"/pay.php?id=<?= $res; ?>";
        </script><?php
    } else {
        ?><script>alert("Buyurtma amalga oshirilmadi -_-");</script><?php
    }
}