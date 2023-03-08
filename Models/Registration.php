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
    public function getById($id){
        $sql = 'SELECT * FROM phieudangky WHERE MaPhieu = :id';
        $stmt = $this->db->prepare($sql);
        $stmt->execute(array(
            ':id' == $id
        ));
        $result =  $stmt->fetch(PDO::FETCH_ASSOC)
        return $result;
    }
    
    function updateStudent($id,$hoten,$lop,$chuyennganh,$mssv){
        $sql = "UPDATE phieudangky SET Lop = :lop, Major =:chuyennganh, Hoten = :hoten, MSSV = :mssv WHERE Maphieu = :id;";
        $Stmt = $this ->db->prepare($sql);
        $stmt->execute(array(
            ':id' == $id,
            ':lop' == $lop,
            ':chuyennganh' == $chuyennganh,
            ':hoten' == $hoten,
            ':mssv' == $mssv
        ));
        $result =  $stmt->fetch(PDO::FETCH_ASSOC)
        return $result;
    }

}