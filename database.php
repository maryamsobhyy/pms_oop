<?php 
class db{
    public $conn;
    function __construct()
    {
        try{
        $this->conn =new PDO("mysql:host=localhost;dbname=pms","root","");
        $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }
        catch (PDOException $e){
            echo $e->getMessage();
            die;
        }
      
}
public function insertData($table, $columns, $data)
    {
        
        $query = "INSERT INTO $table ($columns) VALUES ($data)";
        $sql = $this->conn->prepare($query);
        return $sql->execute();
    }
}
$db=new db;

?>