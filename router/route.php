<?php 

class Route{



    private string $path; 
    private string $controller;
    private string $pathController ;
    private string $function;

/**
 * undocumented function summary
 *
 * Undocumented function long description
 *         
 * @param  Type string path, string action
 * @return 
 **/
    public function __construct(string $path, string $controller, string $function){
        $this->path= $path;
        $this->controller= $controller;
        $this->function= $function;
        $this->pathController =  "../../nixia_app_mobile/app/controller/" . $this->controller; 
    }

    public function getPath(){
        return $this->path;
    }

    public function getController(){
        return $this->controller;
    }
    public function getFunction(){
        return $this->function;
    }

    
    public function getPathController(){
        return $this->pathController;
    }


    public function execute(): method 
    {
       
require_once $this->pathController .".php";

       
      $appController = new $this->controller();
      $function= $this->function;
      $appController->$function();
    }
}