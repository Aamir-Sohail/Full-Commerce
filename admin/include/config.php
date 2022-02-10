<?php

    // $dsn  = "mysql:host=localhost; dbname=db_user_system";
    // $dbuser = "root";
    // dbpassword = "";

    // $conn = new PDO($dsn, $dbuser, $dbpassword);

    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    class database{
    // const username = 'testkhan8281@gmail.com';
    // const password = 'Ak1730186043591';
    private $dsn = "mysql:host=localhost; dbname=db_shop";
    private $dbuser="root";
    private $dbpass= "";

    public $conn;

    public function __construct(){
                try {
            $this->conn = new PDO($this->dsn, $this->dbuser, $this->dbpass);
            
    //  echo "successful";
                }catch(PDOException $e) {
                    echo "Error : ".$e->getmessage();
                }
                // return $this->conn;
    }

    
    public function showmessage($type,$message){
    return  '<div class= "alert alert-'.$type.'alert-dismissible">
    <button type= "button" class=" close" data dissmiss="alert">&times</button>
    <strong class="text-center">'.$message.'</strong> </div>';
    }
    }

?>