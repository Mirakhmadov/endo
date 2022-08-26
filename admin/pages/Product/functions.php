<?php

function saveProduct($items, $logo){
    global $lang_count;

    $logo = uploadFile($logo);

    return saveProductRep($items['name_uz'],$items['name_ru'],$items['name_en'],$items['description_uz'],$items['description_ru'],$items['description_en'],$items['catalog'],$logo['unique_id']);
}


function saveProductRep($item, $item_2,$item_3, $description, $description_2,$description_3, $catalog, $logo){
    global $con;

    $sql = "INSERT INTO `product`(`name_uz`,`name_ru`, `name_en`,`description_uz`,`description_ru`,`description_en`, `catalog`, `photo`) VALUES ('{$item}','{$item_2}','{$item_3}','{$description}','{$description_2}','{$description_3}', '{$catalog}', '{$logo}')";

    $r = mysqli_query($con, $sql);
    if ($r) {
        return true;
    } else {
        return false;
    }
}


function addToGallery($travel, $logo){
    global $con;

    $logo = uploadFile($logo);

    if ($travel['gallery'] === "" || $travel['gallery'] === null){
        $sql = "UPDATE `product` set `gallery` = '{$logo['unique_id']}' where id = '{$travel['id']}'";
    }else {
        $ds = $travel['gallery'].",".$logo['unique_id'];
        $sql = "UPDATE `product` set `gallery` = '{$ds}' where id = '{$travel['id']}'";
    }

    $r = mysqli_query($con, $sql);
    if ($r) {
        return true;
    } else {
        return false;
    }

}

function removeFromGallery($travel, $img_id){
    global $con;

    $ds = "";
    foreach (explode(",",$travel['gallery']) as $img){
        if ($img !== $img_id){
            if ($ds === ""){
                $ds = $img;
            }else {
                $ds = $ds.",".$img;
            }
        }
    }

    $sql = "UPDATE `product` set `gallery` = '{$ds}' where id = '{$travel['id']}'";


    $r = mysqli_query($con, $sql);
    if ($r) {
        return true;
    } else {
        return false;
    }

}