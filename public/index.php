<?php 
require_once '../router/Router.php';
// je clique sur valider dans le formulaire de connexion

// le JS envoi une requete vers une addresse http précise avec une méthode demandé GET/POST/PUT/ DELETE

// je suis dirigé vers le router qui mappe la requete SRVER URI http avec un controller User ou Modele et la méthode qui va avec getUser par exemple l'envoi de paramétres en POST ou GET se fait via l'url  

$data = "{error: do not pass the uri}";
$router = new Router($_SERVER["REQUEST_URI"]);

// how to  remove the additionnal path, controller and other dupplicate string ?

// in the function 
$router->addRoute("/api",  "AppController", "GET", ["function"=> "getApi"]);

$router->addRoute("/login",  "UserController", "POST", ["function"=>"login");

$router->addRoute("/logout",  "AppController", "GET", ["function"=>"logout");



$router->run();
