<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input[type=email], input[type=password]{
            width: 200px;
        }
        .cont input{
            padding: 5px;
            margin: 10px;
        }
        input[type=submit]{
            align-items: center;
            text-align: center;
            width: 100px;
            height: 100px;
        }
        .submit{
            text-align: center;
            align-items: center;
        }
        .cont{
            margin-left: 20px;
        }
        .img{
            padding: 0px 10px 10px 20px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <div style="width: 800px; background-color: pink; margin: auto;">
            <div class="title">
                <h1 style="text-align: center;">Dang nhap</h1>
            </div>
            <div class="content" style="display: flex;">
                <div class="img">
                    <img src="./photo-1-1542871611152434908764.jpg" alt="" width="400px" height="400px">
                </div>
                <div class="cont">
                    <input type="email" name="email" placeholder="Nhap email ..."><br>
                    <input type="password" name="pass" placeholder="Nhap password ..."><br>
                    <input type="checkbox" name="check">Chap nhap thoa thuan <br>
                    <div class="submit">
                    <input type="submit" name="ok" value="Login">
                    <input type="submit" name="re" value="Register">
                    </div>
                </div>
            </div>
        </div>
    </form>
       
       <?php   
            include './control.php';

            if(isset($_POST['ok'])){
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $ob = new Account();
                if(empty($email) && empty($pass))
                    echo "<script>alert('Nhap day du thong tin!!')</script>";
                else{
                   if(!isset($_POST['check'])){
                       echo "<script>alert('Chua chap nhan thoa thuan')</script>";
                   }
                   else{
                       if($email == 'admin@gmail.com'){
                            $_SESSION['email'] = $email;
                            header('location:./admin.php');
                       }
                       else{
                            $selectEmail = $ob->select($email);
                            if($selectEmail == 0){
                                echo "<script>alert('Email khong ton tai')</script>";
                            }
                            else{
                                $selectPass = $ob->selectPass($email, $pass);
                                if($selectPass == 0 )
                                    echo "<script>alert('Sai mat khau')</script>";
                                else{
                                    $_SESSION['email'] = $email;
                                    header('location:info.php');
                                }
                            }   
                       }
                   }
                   
                }
            }
            if(isset($_POST['re'])){
                header('location:./register.php');
            }
        ?>
</body>
</html>