<?php

function saveCatalog($items, $photo)
{
    global $lang_count;

    $photo = uploadFile($photo);

    return saveCatalogRep($items['name_uz'], $items['name_ru'],$items['name_en'], $photo['unique_id']);
}

function saveCatalogRep($item, $item_2, $item_3, $photo)
{
    global $con;

    $sql = "INSERT INTO `catalog`(`name_uz`, `name_ru`, `name_en`, `photo`) VALUES ('{$item}','{$item_2}','{$item_3}', '{$photo}')";

    print_r($sql);
    $r = mysqli_query($con, $sql);
    if ($r) {
        return true;
    } else {
        return false;
    }
}