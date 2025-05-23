<?php
if (isset($_POST['rows']) && isset($_POST['cols'])) {
    $rows = (int) $_POST['rows'];
    $cols = (int) $_POST['cols'];
} else {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Soal 1</title>
</head>

<body>
    <form method="post" action="soal1c.php">
        <input type="hidden" name="rows" value="<?= $rows ?>">
        <input type="hidden" name="cols" value="<?= $cols ?>">

        <table>
            <?php for ($i = 0; $i < $rows; $i++) : ?>
                <tr>
                    <?php for ($j = 0; $j < $cols; $j++) : ?>
                        <td>
                            <div style="display: flex; gap:1rem">
                                <p><?= $i + 1 ?>.<?= $j + 1 ?></p>
                                <input type="text" name="data[<?= $i ?>][<?= $j ?>]">
                            </div>
                        </td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>

        <br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>