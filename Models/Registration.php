<?php
class Registration
{
    private $db;
    public function _construct($pdo)
    {
        $this->db= $pdo;
        public function addStudent($studentId, $class, $major):variant_mod{
            $sql = "INSERT INTO phieudangky (Mssv, HoTen, Lop, MaNganh) VALUES (:mssv, :hoten, :lop, :chuyennganh)";
            $Stmt = $this ->db->prepare($sql);
            $stmt->execute(array(
                ':mssv' =>$studentId,
                ':hoten' =>$name,
                ':lop' => $class,
                ':chuyennganh' =>$major
            ));
        }
    }
}