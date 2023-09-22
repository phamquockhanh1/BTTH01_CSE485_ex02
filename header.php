<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
  input{
    border-radius: 2px 2px 2px 2px;
    border: none;
    height: 35px;
}
button{
    border: 1px;
    border-color: green;
    width: 30%;
    height: 35px;
    padding-right: 3%;

}

.container{
    width: 100vw;
    height: 100vh;
}
.header{
    width: 95%;
    height: 20%;
    display: flex;
    justify-content: space-between;
}
h3 {
    padding-top: 10px;
}

.left{
    display: flex;
    padding-top: 10px;
}
button{
    border: solid 1px green;
    color: green;
    width: 60px;
}
.header a{
    color: black;
    text-decoration: none;
}
.header .right{
    display: flex;
}
.left h3{
    margin-top: 10px;
}
@media ( max-width :768px ){
    .left{
        width: 40%;
        
    }
    .left img{
        width: 40%;
        
    }
}
    </style>
</head>
<body>
    <div class="container">
<div class="header">
        <div class="left">
        <div class="logo"><img src="img/log.png "alt="" style="width: 100%; height:40%;" ></div>
        <h3><a href=""> Trang Chủ</a><sp
        
        <h3> <a href="">Đăng Nhập</a> </h3>
    </div>
    <div class="right" style="padding-top:10px"><input type="text" placeholder="Nội Dung Cần Tìm">
     <button>Tìm</button></div>
        </div></div>
    
</body>
</html>