<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'btth01_cse485';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
}

$sql = 'SELECT * FROM theloai';
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="fontawesome-free-6.4.0-web/css/all.css">
    <style>
        .maincontent table tr {
            font-size: 30px;
        }

        .maincontent table {
            margin-left: 20%;
        }

        button {
            background-color: green;
            height: 30px;
            border: none;
            color: aliceblue;
            border-radius: 5px 5px 5px 5px;
        }

        td, th {
            padding-right: 100px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <?php include 'headerad.php' ?>
    </div>
    <div class="maincontent">
        <table>
            <tr>
                <th><button>Thêm Mới</button></th>
            </tr>
            <tr>
                <th>#</th>
                <th>Tên thể loại</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
            <?php
            if ($result->rowCount() > 0) {
                foreach ($result as $row) {
                    echo '<tr>';
                    echo '<td>' . $row['ma_tloai'] . '</td>';
                    echo '<td>' . $row['ten_tloai'] . '</td>';
                    echo '<td><a href="edit_category.php"><i class="fas fa-pen-to-square"></i></a></td>';
                    echo '<td><a href="delete_category.php"><i class="fa-solid fa-trash"></i></a></td>';
                    echo '</tr>';
                }
            } else {
                echo "<tr><td colspan='4'>No records found</td></tr>";
            }
            ?>
        </table>
    </div>
</div>
</body>
</html>
