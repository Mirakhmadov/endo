<?php




function savePartner($items, $photo)
{
    global $lang_count;

    $photo = uploadFile($photo);

    return savePartnerRep($items['name'], $items['description_uz'], $items['description_ru'], $items['description_en'], $photo['unique_id'], $items['url']);
}

function savePartnerRep($item, $desc, $desc_2, $desc_3, $photo, $url)
{
    global $con;

    $sql = "INSERT INTO `partner`(`name`, `description_uz`, `description_ru`, `description_en`, `photo`, `url`) VALUES ('{$item}','{$desc}','{$desc_2}','{$desc_3}', '{$photo}', '{$url}')";

    print_r($sql);
    $r = mysqli_query($con, $sql);
    if ($r) {
        return true;
    } else {
        return false;
    }
}