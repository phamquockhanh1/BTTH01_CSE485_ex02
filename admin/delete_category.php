<?php
// Xử lý sự kiện xóa thể loại
if (isset($_GET['delete_id'])) {
    $deleteId = $_GET['delete_id'];

    // Kết nối đến cơ sở dữ liệu
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'btth01_cse485';
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die('Không thể kết nối tới cơ sở dữ liệu: ' . $conn->connect_error);
    }

    // Xóa thể loại từ cơ sở dữ liệu
    $sql = "DELETE FROM theloai WHERE ma_tloai = '$deleteId'";

    if ($conn->query($sql) === TRUE) {
        echo 'Xóa thành công';
    } else {
        echo 'Lỗi: ' . $sql . '<br>' . $conn->error;
    }

    $conn->close();
}
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
            border-radius: 5px;
        }

        td,
        th {
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
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<tr>';
                        echo '<td>' . $row["ma_tloai"];
                        echo '<td>' . $row["ten_tloai"];
                        echo '<td><a href="edit_category.php"><i class="fas fa-pen-to-square"></i></a></td>';
                        echo '<td><a href="category.php?delete_id=' . $row["ma_tloai"] . '" onclick="return confirmDelete()"><i class="fa-solid fa-trash"></i></a></td>';
                        echo '<tr>';
                    }
                }
                ?>
            </table>
        </div>
    </div>

    <script>
        function confirmDelete() {
            return confirm("Bạn có chắc chắn muốn xóa thể loại này?");
        }
    </script>
</body>
</html>