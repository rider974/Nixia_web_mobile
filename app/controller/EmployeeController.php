<?php 


require_once "model/EmployeeModel.php";


class EmployeeController extends AppController{



    public function login(){
        if (isset($_POST["email"]) && $_POST["email"] !== null && isset($_POST["pass"]) && $_POST["pass"] !== null ){
            $user = new EmployeeModel();
            $user->login();

            if ($user){
                
            $_SESSION["idUser"] = $user->getIdEmployee();
            $_SESSION["connectionVerify"] = true;
            return header("location: /api");
            }
        }
        else {
            return "error: you must enter an email and a password";
        }
    }

// param = email et mdp
function getData($email, $pass){
    $user = getUserData($email, $pass);
    if (!empty($user)){
        $_SESSION["idUser"] = $user["idUser"];
        $_SESSION["connexionOk"] = true; 
        $_SESSION["email"] = $user["email"]; 
        
        $data=  json_encode($user, JSON_PRETTY_PRINT);
    }
   
    return $data; 
}

}