<?php
global $local_strings;
global $lang;
global $lang_count;
?>

<a href="/admin/partner/create" class="btn btn-success my-3">
    <? echo $local_strings[$lang]['create']; ?>
</a>
<table class="table table-hover">
    <thead>
    <tr>
        <th>№</th>

        <th><? echo $local_strings[$lang]['name']; ?></th>
        <th><i class="fa fa-eye"></i></th>
        <th><? echo $local_strings[$lang]['action']; ?></th>

    </tr>
    </thead>
    <tbody>
    <?php
    $partners = getAll("partner");

    if ($partners !== null && $partners !== "") {
        $i = 1;
        foreach ($partners as $partner) {
            $logo = getAttachmentR($partner['photo']);
            echo "<tr>";
            echo "<th>" . $i++ . "</th>";
            echo "<td>" . $partner['name'] . "</td>";
            echo "<td>" . $partner['url'] . "</td>";

            echo "<td> <img src='/uploads/" . $logo['unique_id'] . "." . $logo['ext'] . "' class='img-thumbnail' style='height: 50px'> </td>";
            echo "<td>";
            echo " <a href='/admin/partner/view/" . $partner['id'] . "' class='btn btn-primary'><i class='fa fa-eye'></i></a>";
            echo " <a href='/admin/partner/delete/" . $partner['id'] . "' class='btn btn-danger'><i class='fa fa-trash'></i></a>";
            echo "</td>";
            echo "</tr>";
        }
    }
    ?>
    </tbody>
</table>