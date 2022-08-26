<?php
global $local_strings;
global $lang;
global $lang_count;
?>
<table class="table table-hover">
    <thead>
    <tr>
        <th>№</th>
        <th><? echo $local_strings[$lang]['phone']; ?></th>
        <th><? echo $local_strings[$lang]['full_name']; ?></th>
        <th><? echo $local_strings[$lang]['card_number']; ?></th>
        <th><? echo $local_strings[$lang]['count']; ?></th>
        <th>Kalit</th>
        <th><i class="fa fa-dollar"></i> </th>
        <th><? echo $local_strings[$lang]['action']; ?></th>
    </tr>
    </thead>
    <tbody>
    <?php
    $payments = getAll("payment");

    if ($payments !== null && $payments !== "") {
        $i = 1;

        foreach ($payments as $payment) {

            $frame = getOne($payment['travel_id'], "frame");

            echo "<tr>";
            echo "<th>".$i++."</th>";
            echo "<td>".$payment['phone']."</td>";
            echo "<td>".$payment['full_name']."</td>";
            echo "<td>".$payment['card_number']."</td>";
            echo "<td>".$payment['count']."</td>";
            echo "<td>".$payment['unique_id']."</td>";
            echo "<td>".$payment['price']."</td>";
            echo "<td><a href='".$frame['uri_'.$lang]."' class='btn btn-primary mr-1'><i class='fa fa-eye'></i></a>";
            echo " <a href='/admin/payment/promo/".$payment['id']."' class='btn btn-primary mr-1'><i class='fa fa-dollar'></i></a></td>";
            echo "</tr>";
        }
    }
    ?>
    </tbody>
</table>
