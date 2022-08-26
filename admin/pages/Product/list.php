<?php
global $local_strings;
global $lang;
global $lang_count;
?>

<a href="/admin/product/create" class="btn btn-success my-3">
    <? echo $local_strings[$lang]['create']; ?>
</a>
<table class="table table-hover">
    <thead>
    <tr>
        <th>№</th>
        <th><? echo $local_strings['uz']['name']; ?></th>
        <th><? echo $local_strings['ru']['name']; ?></th>
        <th><? echo $local_strings['en']['name']; ?></th>
        <th><? echo $local_strings[$lang]['logo']; ?></th>
        <th><? echo $local_strings[$lang]['district']; ?></th>
        <th><? echo $local_strings[$lang]['action']; ?></th>

    </tr>
    </thead>
    <tbody>
    <?php
    $products = getAll("product");

    if ($products !== null && $products !== "") {
        $i = 1;
        foreach ($products as $product) {

            $logo = getAttachmentR($product['photo']);

            echo "<tr>";
            echo "<th>" . $i++ . "</th>";
            echo "<td>" . $product['name_uz'] . "</td>";
            echo "<td>" . $product['name_ru'] . "</td>";
            echo "<td>" . $product['name_en'] . "</td>";

            echo "<td> <img src='/uploads/" . $logo['unique_id'] . "." . $logo['ext'] . "' class='img-thumbnail' style='height: 50px'> </td>";

            echo "<td>";
            $catalog = getOne($product["catalog"], "catalog");
            echo $catalog["name_" . $lang];
            echo "</td>";

            echo "<td>";
            echo "<a href='/admin/product/view/" . $product['id'] . "' class='btn btn-primary mr-1'><i class='fa fa-eye'></i></a>";
            echo "<a href='/admin/product/add/" . $product['id'] . "' class='btn btn-primary mr-1'><i class='fa fa-plus'></i></a>";
            echo "<a href='/admin/product/delete/" . $product['id'] . "' class='btn btn-danger'><i class='fa fa-trash'></i></a>";
            echo "</td>";
            echo "</tr>";
        }
    }
    ?>
    </tbody>
</table>