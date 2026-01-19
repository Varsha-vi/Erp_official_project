<?php 
    define("DB_NAME","school_erp");
    define("DB_HOST","localhost");
    define("DB_USERNAME","root");
    define("DB_PASSWORD","");

    try {
        $connect = new PDO("mysql:host = ".DB_HOST."dbname = ".DB_NAME.";", DB_USERNAME, DB_PASSWORD);
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connect->exec("USE school_erp");
        // echo "Database connection Successfull";

    } catch (PDOException $e) {
        echo "Error Connecting database ".$e->getMessage();
    }
?>