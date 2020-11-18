<?php
    include './connect.php';
    class Account{
        public function addLogin($name, $email, $pass){
            global $conn;
            $sql = "INSERT INTO login values ('$name', '$email', '$pass')";
            return mysqli_query($conn, $sql);
        } 
        public function selectEmail($email){
            global $conn;
            $sql = "SELECT email from login where email = '$email'";
            $run = mysqli_query($conn, $sql);
            return mysqli_num_rows($run);
        }
        public function selectPass($email, $pass){
            global $conn;
            $sql = "SELECT pass FROM login WHERE email = '$email' and pass = '$pass'";
            $run = mysqli_query($conn, $sql);
            return mysqli_num_rows($run);
        }
        public function addInfo($name, $email, $pass, $picture, $gender, $birthday, $like){
            global $conn;
            $sql = "INSERT INTO `info1`(`fullname`, `email`, `pass`, `picture`, `gender`, `birthday`, `likes`) VALUES ('$name', '$email', '$pass', '$picture', '$gender', '$birthday', '$like')";
            return mysqli_query($conn, $sql);
        }
        public function select($email){
            global $conn;
            $sql = "Select * from login, info1 where login.email = info1.email and login.email = '$email'";
            $run = mysqli_query($conn, $sql);
            return mysqli_num_rows($run);
        }
        public function selectInfo1($email){
            global $conn;
            $sql = "SELECT * FROM info1 where email = '$email'";
            $run = mysqli_query($conn, $sql);
            $data = array();
            while($row = mysqli_fetch_assoc($run)){
                $data[] = $row;
            }
            return $data;
        }
        public function updateInfo1($name, $email, $pass, $picture, $gender, $birthday, $like){
            global $conn;
            $sql = "UPDATE `info1` SET `fullname`='$name', `pass`='$pass', `picture`='$picture', `gender`='$gender',`birthday`='$birthday',`likes`='$like' WHERE email = '$email'";
            return mysqli_query($conn, $sql);
        }
        public function updateLogin($name, $email, $pass){
            global $conn;
            $sql = "UPDATE `login` SET `fullname`= '$name', `pass`= '$pass' WHERE email = '$email'";
            return mysqli_query($conn, $sql);
        }
        public function deleteInfo1($email){
            global $conn;
            $sql = "delete from info1 where email = '$email'";
            return mysqli_query($conn, $sql);
        }
        public function deleteLogin($email){
            global $conn;
            $sql = "delete from login where email = '$email'";
            return mysqli_query($conn, $sql);
        }
    }


?>