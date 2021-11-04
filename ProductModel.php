<?php
include_once 'DB.php';
class ProductModel
{
    private $table;
    private $dbConnect;

    public function __construct()
    {
        $this->table = "products";
        $db = new DB();
        $this->dbConnect = $db->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM $this->table";
        $stmt = $this->dbConnect->query($sql);
        return $stmt->fetchAll();
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM $this->table where id = $id ";
        $stmt = $this->dbConnect->query($sql);
        return $stmt->fetch();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM $this->table where id = :id";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(":id",$id);
        $stmt->execute();
    }

    public function create($data)
    {
        $sql = "insert into $this->table(`name`,`price`,`description`) value(?,?,?)";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1,$data["name"]);
        $stmt->bindParam(2,$data["price"]);
        $stmt->bindParam(3,$data["description"]);
        $stmt->execute();
    }
}