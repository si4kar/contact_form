<?php

/**
* @var string $dir (Initiated in index.php file)
*/

?>

<table width="100%" border="1">
    <tr>
        <th>Autor</th>
        <th>Commemt</th>

    </tr>

    <?php foreach (readDirectory($dir) as $file) : ?>
        <?php $content = readSerializeFile($file, $dir); ?>
        <tr>
            <td valign="top"> <? $name=(getArrayValue($content, 'name')); echo $name;?> </td>
            <td>
                <p> <? $comment=nl2br((getArrayValue($content, 'comment'))); echo $comment;?> </p>

                <p>
                    <a href="/contact/edit.php?file=<?= $file ?>">Edit</a>
                    <a href="/contact/delete.php?file=<?= $file ?>">Delete</a>
                </p>
            </td>
        </tr>

    <?php endforeach; ?>

</table>