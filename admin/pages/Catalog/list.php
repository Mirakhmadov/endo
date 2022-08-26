<?php
global $local_strings;
global $lang;
global $lang_count;
?>

<a href="/admin/catalog/create" class="btn btn-success my-3">
    <? echo $local_strings[$lang]['create']; ?>
</a>
<table class="table table-hover">
    <thead>
    <tr>
        <th>№</th>

        <th><? echo $local_strings['uz']['name']; ?></th>
        <th><? echo $local_strings['ru']['name']; ?></th>
        <th><? echo $local_strings['en']['name']; ?></th>
        <th><i class="fa fa-eye"></i></th>
        <th><? echo $local_strings[$lang]['action']; ?></th>

    </tr>
    </thead>
    <tbody>
    <?php
    $catalogs = getAll("catalog");

    if ($catalogs !== null && $catalogs !== "") {
        $i = 1;
        foreach ($catalogs as $catalog) {
            $logo = getAttachmentR($catalog['photo']);
            echo "<tr>";
            echo "<th>" . $i++ . "</th>";
            echo "<td>" . $catalog['name_uz'] . "</td>";
            echo "<td>" . $catalog['name_ru'] . "</td>";
            echo "<td>" . $catalog['name_en'] . "</td>";

            echo "<td> <img src='/uploads/" . $logo['unique_id'] . "." . $logo['ext'] . "' class='img-thumbnail' style='height: 50px'> </td>";
            echo "<td><a href='/admin/catalog/delete/" . $catalog['id'] . "' class='btn btn-danger'><i class='fa fa-trash'></i></a></td>";
            echo "</tr>";
        }
    }
    ?>
    </tbody>
</table>