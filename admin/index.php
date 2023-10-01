<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .maincontent{
            margin-left: 25%;
            margin-top: 100px;
        }
        .maincontent table{
            text-align: center;
            font-size: 35px;
         
            
        }
        @media(max-width:768px){
            table{
                width: 40%;
            }
        }
        .footer{
            
            height: 20%;
            text-align: center;
            
        }
          
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <?php include'headerad.php' ?>
        </div>
        <div class="maincontent">
            <table>
                <tr>
                    <th>Người Dùng</th>
                    <th>
                
                    </th>
                    <th>Thể Loại</th>
                    <th></th>
                    <th>Tác Giả</th>
                    <th></th>
                    <th>Bài Viết</th>
                </tr>
                <tr>
                    <td>110</td>
                    <td></td>
                    <td>10</td>
                    <td></td>
                    <td>20</td>
                    <td></td>
                    <td>110</td>
                </tr>
            </table>
        </div>
        <div class="footer">
        <hr>
        <h2>TLU'S MUSIC GARDEN</h2>
        <hr>
    </div>
    </div>
    
</body>
</html>