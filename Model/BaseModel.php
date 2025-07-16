
<?php

class BaseModel{
    public $conn = null;
    public function __construct()
    {
        try{
            $this->conn=new PDO("mysql:host=" . HOST . "; dbname=" . DBNAME . "; charset=utf8; port=" . PORT, USERNAME,PASSWORD);

        }catch(PDOException $e){
            echo " lỗi kết nối dữ liệu" . $e->getMessage();
        }
        
    }
}

?>