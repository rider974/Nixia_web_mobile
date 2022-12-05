<?php


abstract class ModelMapper {

    protected ?PDO $db;
    protected $table;

    public function __construct()
    {
        $this->db = new PDO("mysql:host=localhost;dbname=easy_follow","userEasyFollow","mdpEasyFollow974!?*");
    } 

    // CRUD
    // create the function select param, insert, update and delete 

    

}



