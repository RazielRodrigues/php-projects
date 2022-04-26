<?php

class Database{
 
    protected $host = 'mysql:host=localhost;dbname=search';
    protected $user = 'root';
    protected $password = '';

    public $db;
    
    function __construct(){
        try {
            $db = new PDO($this->host, $this->user, $this->password);
        } catch (PDOException $e) {
            print "Error with database!: " .__FILE__. $e->getMessage() . "<br/>";
            die();
        }
    }

    public function constructSearchTable() {
        $sql = "CREATE TABLE `search`.`sites` (
            `site_id` INT NOT NULL AUTO_INCREMENT,
            `site_title` VARCHAR(240) NOT NULL,
            `site_link` VARCHAR(240) NOT NULL,
            `site_keyword` TEXT(500) NULL,
            `site_desc` TEXT(100) NULL,
            `site_image` TEXT(100) NULL,
            PRIMARY KEY (`site_id`))
          ENGINE = InnoDB
          DEFAULT CHARACTER SET = utf8;
          ";
          return $this->db->query($sql);
    }
    
    public function insertSearch(
        $site_title,
        $site_link,
        $site_keyword,
        $site_description,
        $_site_image,
        $_site_image_tmp
    ){
        
    }

    

}