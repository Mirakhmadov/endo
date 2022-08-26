<?php


function savePayment($id, $items)
{
    global $con;

    $unique_key = random_int(10000, 99999);

    $sql = "INSERT INTO `payment`(`travel_id`, `phone`, `full_name`, `card_number`, `count`, `unique_id`) VALUES ('{$items['travel_id']}','{$items['phone']}','{$items['full_name']}','{$items['card_number']}','{$items['count']}','{$unique_key}')";

    $r = mysqli_query($con, $sql);
    if ($r) {
        return $unique_key;
    } else {
        return null;
    }
}


function setPricePayment($id, $price)
{
    global $con;

    $sql = "UPDATE `payment` set `price` = '{$price}'  where id = '{$id}'";

    $r = mysqli_query($con, $sql);
    if ($r) {
        return true;
    } else {
        return false;
    }
}
