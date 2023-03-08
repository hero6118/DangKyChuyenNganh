<?php
require_once("Config/Database.php");
require_once("Models/Registration.php");
class MajorController 
{
    private $model;
    public function __construct()
    {
        global $pdo;
        $this->model = new Registration($pdo);
    }
    function index()
    {
        require_once("Views/Register.php");
    }
    function add(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $hoten = $_POST['name'];
            $lop = $_POST['class'];
            $chuyennganh = $_POST['major'];
            $mssv = $_POST['StudentID'];
            $this->model->addStudent($mssv,$hoten,$lop,$chuyennganh);
            header("Location: index.php");
        }
    }
}