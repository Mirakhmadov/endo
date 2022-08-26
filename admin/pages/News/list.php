<?php
global $local_strings;
global $lang;
global $lang_count;
?>

<a href="/admin/news/create" class="btn btn-success my-3">
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
    $news = getAll("news");

    if ($news !== null && $news !== "") {
        $i = 1;
        foreach ($news as $new) {
            $logo = getAttachmentR($new['photo']);
            echo "<tr>";
            echo "<th>" . $i++ . "</th>";
            echo "<td>" . $new['name_uz'] . "</td>";
            echo "<td>" . $new['name_ru'] . "</td>";
            echo "<td>" . $new['name_en'] . "</td>";

            echo "<td> <img src='/uploads/" . $logo['unique_id'] . "." . $logo['ext'] . "' class='img-thumbnail' style='height: 50px'> </td>";
            echo "<td>";
            echo " <a href='/admin/news/view/" . $new['id'] . "' class='btn btn-primary'><i class='fa fa-eye'></i></a>";
            echo " <a href='/admin/news/delete/" . $new['id'] . "' class='btn btn-danger'><i class='fa fa-trash'></i></a>";
            echo "</td>";
            echo "</tr>";
        }
    }
    ?>
    </tbody>
</table>