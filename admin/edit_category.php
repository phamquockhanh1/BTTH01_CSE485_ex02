<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'btth01_cse485';
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die('Không thể kết nối tới cơ sở dữ liệu: ' . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ma_tloai = $_POST['ma_tloai'];
    $ten_tloai = $_POST['ten_tloai'];

    $sql = "UPDATE theloai SET ten_tloai = '$ten_tloai' WHERE ma_tloai = '$ma_tloai'";

    if ($conn->query($sql) === TRUE) {
        echo 'Cập nhật thông tin thành công';
    } else {
        echo 'Lỗi: ' . $sql . '<br>' . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Thông Tin Thể Loại</title>
    <style>
        h2 {
            text-align: center;
        }
        label {
            display: inline-block;
            width: 30%;
            text-align: right;
            margin-right: 10px;
        }
        input {
            width: 60%;
            height: 30px;
        }
        form {
            display: flex;
            flex-direction: column;
            margin-left: -15%;
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
        .btn-container a {
            color: black;
            height: 30px;
            line-height: 30px;
            border-radius: 5px;
            text-decoration: none;
            background-color: yellow;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- header -->
        <div class="header">
            <?php include 'headerad.php'; ?>
        </div>
        <div class="maincontent">
            <h2>SỬA THÔNG TIN THỂ LOẠI</h2>
            <form action="edit_category.php" method="post">
                <div class="input-container">
                    <label for="ma_tloai">Mã Thể Loại</label>
                    <input type="text" id="ma_tloai" name="ma_tloai" required>
                </div>
                <div class="input-container">
                    <label for="ten_tloai">Tên Thể Loại</label>
                    <input type="text" id="ten_tloai" name="ten_tloai" required>
                </div>
                <div class="btn-container">
                    <button class="btn1" style="color: beige; background-color: green; margin-left: 5px;" type="submit">Lưu Lại</button>
                    <a href="category.php">Quay lại</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
