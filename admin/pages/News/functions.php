<?php

function saveNews($items, $photo)
{
    global $lang_count;

    $photo = uploadFile($photo);

    return saveNewsRep($items['name_uz'], $items['name_ru'], $items['name_en'], $items['description_uz'], $items['description_ru'], $items['description_en'], $photo['unique_id']);
}

function saveNewsRep($item, $item_2, $item_3, $desc, $desc_2, $desc_3, $photo)
{
    global $con;

    $sql = "INSERT INTO `news`(`name_uz`, `name_ru`, `name_en`,`description_uz`, `description_ru`, `description_en`, `photo`, `date`) VALUES ('{$item}','{$item_2}','{$item_3}','{$desc}','{$desc_2}','{$desc_3}', '{$photo}', NOW())";

    print_r($sql);
    $r = mysqli_query($con, $sql);
    if ($r) {
        return true;
    } else {
        return false;
    }
}