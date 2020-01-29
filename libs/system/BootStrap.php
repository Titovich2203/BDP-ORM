<?php
use src\controller\RolesController;
use libs\system\UserController;
namespace libs\system;
class BootStrap
{
    
    public function __construct()
    {
        if(isset($_GET['url']))
        {
            //echo $_GET['url'];
            $url = explode("/", $_GET['url']);
            $controller_file = 'src/controller/'.$url[0].'Controller.php';
            if(file_exists($controller_file))
            {
                require_once $controller_file;
                $file = $url[0]."Controller";
                $controller_object = new $file();
                if(isset($url[2]))
                {
                    $method = $url[1];
                    if(method_exists($controller_object, $method))
                    {
                        $controller_object->$method($url[2]);
                    }
                    else
                    {
                        die($method." n'existe pas dans le controller ".$file);
                    }
                }
                else if(isset($url[1]))
                {
                    $method = $url[1];
                    if(method_exists($controller_object, $method))
                    {
                        $controller_object->$method();
                    }
                    else
                    {
                        die($method." n'existe pas dans le controller ".$file);
                    }
                }

            }
            else
            {
                die($controller_file." n'existe pas");
            }
        }
        else
        {
            $controller_file = 'src/controller/'.'User'.'Controller.php';
            require_once $controller_file;
            $file = "User"."Controller";
            $controller_object = new $file();
            $controller_object->connexion();
           // $controller_object = new $file();
            //require_once 'src/controller/UserController.php';
            //$userObject = new src\controller\UserController();
            //$userObject->connexion();
        }
    }
    
}
