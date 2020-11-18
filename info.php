<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        include './control.php';
        if(isset($_SESSION['email'])){
            $ob = new Account();
            $select = $ob->selectInfo1($_SESSION['email']);
            foreach($select as $key){
                echo "<span >Ban ".$key['fullname']." dang dang nhap"."<a href='./logout.php'>. Thoat</a></span>";
            ?>
                <img src="<?php echo $key['picture'];?>" alt="no" style="width: 50px; height: 50px; border-radius: 50px;">
    <form action="" method="post" enctype="multipart/form-data" >
        <div class="warp">
            <div class="title">
                <h1>Thong tin ban than</h1>
            </div>
            <div class="content">
                <div class="cont">
                    <label for="">Fullname:</label>
                    <input type="text" name="name" value="<?php echo $key['fullname'] ;?>" readonly>
                </div>
                <div class="cont">
                    <label for="">Username: </label>
                    <input type="email" name="email" value="<?php echo $key['email'] ;?>" readonly>
                </div>
                <div class="cont">
                    <label for="">Password:</label>
                    <input type="text" name="pass" value="<?php echo $key['pass'] ;?>" readonly>
                </div>
                <div class="cont">
                    <label for="">Birthday:</label>
                    <input type="text" name="date" value="<?php echo $key['birthday'] ;?>" readonly>
                </div>
                <div class="cont">
                    <label for="">Gioi tinh: </label>
                    <input type="radio" name="gender" value="Nam" <?php if($key['gender'] == 'Nam') echo 'checked'; ?>  readonly>Nam
                    <input type="radio" name="gender" value="Nu" <?php if($key['gender'] == 'Nu') echo 'checked'; ?> readonly>Nu
                </div>
                <div class="cont">
                    <label for="">Chon anh: </label>
                    <input type="text" name="avatar" value="<?php echo $key['picture'] ;?>" readonly>
                </div>
                <div class="cont">
                    <label for="">So thich:</label><br>
                    <input type="checkbox" name="like[]" value="dabong" readonly <?php
                                                                                        $get_sr = explode(' ', $key['likes']);
                                                                                        if(in_array('dabong', $get_sr)) echo 'checked';        
                                                                                    ?> >Da bong <br>
                    <input type="checkbox" name="like[]" value="nghenhac" readonly <?php
                                                                                        $get_sr = explode(' ', $key['likes']);
                                                                                        if(in_array('nghenhac', $get_sr)) echo 'checked';        
                                                                                    ?> >Nghe nhac <br>
                    <input type="checkbox" name="like[]" value="danhcau" readonly <?php
                                                                                        $get_sr = explode(' ', $key['likes']);
                                                                                        if(in_array('danhcau', $get_sr)) echo 'checked';        
                                                                                    ?> >Danh cau
                </div>
                <div class="submit">
                    <input type="submit" value="Update" name="ok">
                    <input type="submit" value="Delete" name="del">
                </div>
            </div>
            <div>
            
            </div>
        </div>
    </form>
    <?php
            }
        }
        
        if(isset($_POST['ok'])){
            // $name=$_POST['name'];
            // $email=$_POST['email'];
            // $pass=$_POST['pass'];
            // $birth=$_POST['date'];
            // $file=$_FILES['avatar'];
            // $like=$_POST['like'];
            // $gender=$_POST['gender'];
            // $demsothich="";
            
            // $a=$file['tmp_name'];
            // $b=$file['name'];
            // $up=move_uploaded_file($a,'../../img/'.$b);
            // $xpath = '../../img/'.$b;
            
            // foreach($like as $vl){
            //     $demsothich.=$vl." ";
            // }

            // if(empty($name) && empty($email) && empty($pass)){
            //     echo "<script>alert('Nhap day du thong tin')</script>";               
            // }
            // else{
            //     if($file['name'] == null && $birth )
            // }           
            header('location:./update_info1.php');
        }
        if(isset($_POST['del'])){
            $ob -> deleteInfo1($_POST['email']);
            $ob -> deleteLogin($_POST['email']);
            header('location:./register.php');
        }
        
    ?>
</body>
</html>