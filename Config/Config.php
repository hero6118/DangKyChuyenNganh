<?php
try{
    $pdo = new PDO("mysql:host=localhost;dbname=DangKyChuyenNganh","root", "");
    $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERMODE_EXCEPTION);

}catch (PDOException $e)
{
    die("Connection failed: " .$e->getMessage());
}