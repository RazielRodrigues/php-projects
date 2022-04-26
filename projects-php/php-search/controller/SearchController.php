<?php
class SearchController{

    protected $data;

    function __construct(){
            try {
                $host = 'mysql:host=localhost;dbname=search';
                $user = 'root';
                $password = '';
                $database = new PDO($host, $user, $password);
                $sql = "SELECT * FROM sites";
                $this->data = $database->query($sql)->fetchAll();
            } catch (PDOException $e) {
                print "Error with database!: " .__FILE__. $e->getMessage() . "<br/>";
                die();
            }
    }

    function getAll(){
        return $this->data;
    }

}