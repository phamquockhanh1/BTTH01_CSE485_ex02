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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ten_tloai = $_POST['ten_tloai'];

    $sql = "INSERT INTO theloai (ten_tloai) VALUES (:ten_tloai)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':ten_tloai', $ten_tloai, PDO::PARAM_STR);

    try {
        $stmt->execute();
        echo "Data added successfully";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h2 {
            text-align: center;
        }
        form input {
            width: 80%;
            margin-left: 10%;
            height: 30px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        .btn-container {
            display: flex;
            margin-left: 81%;
            margin-top: 10px;
            gap: 10px;
            padding-top: 15px;
        }
        button {
            height: 30px;
            border-radius: 5px;
            border: none;
        }
    </style>
</head>
<body>
<div class="container">
    <!-- header -->
    <div class="header">
        <?php include 'headerad.php' ?>
    </div>
    <div class="maincontent">
        <h2>THÊM MỚI THỂ LOẠI</h2>
        <form action="add_category.php" method="post">
            <input type="text" id="ten_tloai" name="ten_tloai" required>
            <div class="btn-container">
                <button class="btn1" style="color: beige; background-color: green; margin-left: 5px;" type="submit">Thêm</button>
                <a href="category.php">Quay lại</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>
