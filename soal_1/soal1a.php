<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Input Jumlah Baris dan Kolom</title>
</head>

<body>
    <form method="post" action="soal1b.php">
        <label for="rows">Inputkan Jumlah Baris:</label>
        <input type="number" name="rows" id="rows" min="1" required style="width: 5%;"><br><br>

        <label for="cols">Inputkan Jumlah Kolom:</label>
        <input type="number" name="cols" id="cols" min="1" required style="width: 5%;"><br><br>

        <button type="submit">Submit</button>
    </form>
</body>

</html>