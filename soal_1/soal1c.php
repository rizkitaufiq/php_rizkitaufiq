<?php
if (!isset($_POST['data']) || !isset($_POST['rows']) || !isset($_POST['cols'])) {
    header("Location: index.php");
    exit;
}

$data = $_POST['data'];
$rows = (int) $_POST['rows'];
$cols = (int) $_POST['cols'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Soal 1</title>
</head>

<body>
    <ul>
        <?php for ($i = 0; $i < $rows; $i++) : ?>
            <?php for ($j = 0; $j < $cols; $j++) : ?>
                <div>
                    <?= ($i + 1) . '.' . ($j + 1) ?>: <?= htmlspecialchars($data[$i][$j] ?? '') ?>
                </div>
            <?php endfor; ?>
        <?php endfor; ?>
    </ul>
</body>

</html>