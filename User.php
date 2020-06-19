<?php

include_once('Controller.php');
class User
{
    private $db;
    public function __construct()
    {
        $this->db = new Controller();
        $this->db = $this->db->dbConnect();
    }
    public function Login($email, $password)
    {
        if (!empty($email) && !empty($password)) {
            $st = $this->db->prepare("select * from tb_user where email=? AND password=?");
            $st->bindParam(1, $email);
            $st->bindParam(2, $password);
            $st->execute();
            $data = $st->fetchAll();
            foreach ($data as $rows_user) {
                $_SESSION['id'] = $rows_user['id'];
                $_SESSION['nama'] = $rows_user['nama'];
                $_SESSION['email'] = $rows_user['email'];
                $_SESSION['password'] = $rows_user['password'];
            }


            if ($st->rowCount() == 1) {

                echo "<script>alert('Login Berhasil');</script>";
                echo "<script>location='index.php';</script>";
            } else {
                echo "<script>alert('Email dan Password Anda Salah');</script>";
                echo "<script>location='login.php';</script>";
            }
        } else {
            echo "<script>alert('Tolong Masukkan Email dan Passwordnya');</script>";
            echo "<script>location='login.php';</script>";
        }
    }
}
