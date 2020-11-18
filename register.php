<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input[type=email], input[type=password], input[type=text]{
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
                <h1 style="text-align: center;">Dang ky tai khoan</h1>
            </div>
            <div class="content" style="display: flex;">
                <div class="img">
                    <img src="./photo-1-1542871611152434908764.jpg" alt="" width="400px" height="400px">
                </div>
                <div class="cont">
                    <input type="text" name="name" placeholder="Nhap ho ten"><br>
                    <input type="email" name="email" placeholder="Nhap email ..."><br>
                    <input type="password" name="pass" placeholder="Nhap password ..."><br>
                    <input type="password" name="pass1" placeholder="Nhap lai password ..."><br>
                    <input type="checkbox" name="check" value="chon">Chap nhap thoa thuan <br>
                    <div class="submit">
                    <input type="submit" name="ok" value="Register">
                    </div>
                </div>
            </div>
        </div>
    </form>
       
       <?php   
            include './control.php';

            if(!isset($_POST['check'])){
                // $name = $_POST['name'];
                // $email = $_POST['email'];
                // $pass = $_POST['pass'];
                // $pass1 = $_POST['pass1'];
                // $ob = new Account();
                // if(empty($email) && empty($pass) && empty($pass1) && $name)
                //     echo "<script>alert('Nhap day du thong tin!!')</script>";
                // else{
                //    if(!isset($_POST['check'])){
                //        echo "<script>alert('Chua chap nhan thoa thuan')</script>";
                //    }
                //    else{
                //        $selectEmail = $ob->select($email);
                //        if($selectEmail != 0){
                //             echo "<script>alert('Trung email')</script>";
                //        }
                //        else{
                //             $addre = $ob->addLogin($name, $email, $pass);
                //             $aadIf = $ob->addInfo($name, $email, $pass, '', '', '' ,'' );
                //             header('location:./login.php');
                //        }
                //    }
                   
                // }
                echo "tich roi ".$_POST['check'];
                // phai issset trc 
            }
        ?>
</body>
</html>