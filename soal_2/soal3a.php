<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'testdb';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$search = isset($_GET['hobi']) ? $conn->real_escape_string($_GET['hobi']) : '';

$sql = "
    SELECT hobi, COUNT(DISTINCT person_id) as jumlah_orang
    FROM hobi
";

if ($search !== '') {
    $sql .= " WHERE hobi LIKE '%$search%'";
}

$sql .= " GROUP BY hobi ORDER BY jumlah_orang DESC";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Soal 2</title>
</head>

<body>

    <form method="get" action="soal3a.php">
        <label for="hobi">Cari Berdasarkan Hobi:</label>
        <input type="text" id="hobi" name="hobi" value="<?= htmlspecialchars($search) ?>">
        <button type="submit">Cari</button>
    </form>

    <br>
    <table border="1" cellpadding="4">
        <thead>
            <tr>
                <th>hobi</th>
                <th>jumlah person</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($result->num_rows > 0) : ?>
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <tr>
                        <td><?= htmlspecialchars($row['hobi']) ?></td>
                        <td><?= $row['jumlah_orang'] ?></td>
                    </tr>
                <?php endwhile; ?>
            <?php else : ?>
                <tr>
                    <td colspan="2">Tidak ada data ditemukan.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>

</html>