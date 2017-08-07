<?php
namespace Home\Controller;
use Think\Controller;
class ModifyController extends Controller 
{

   public function modify()
   {
	   switch($_POST["type"])
	   {
		case "News" :   $id = $_POST["id"]; $data["title"]=$_POST["title"]; $data["content"]=$_POST["content"];
	                    M("News")->where("id=$id")->save($data);
						break;
	    case "Expert":  $id = $_POST["id"]; $data["name"]=$_POST["name"];   $data["position"]=$_POST["position"]; $data["describe"]=$_POST["describe"];
	                    M("Expert")->where("id=$id")->save($data);
						break;
		case "Products":$id = $_POST["id"]; $data["name"]=$_POST["name"];   $data["picture"]=$_POST["picture"]; $data["describe"]=$_POST["describe"];
	                    M("Products")->where("id=$id")->save($data);
						break;
		case "Suex":	$id = $_POST["id"]; $data["name"]=$_POST["name"]; $data["age"]=$_POST["age"]; $data["school"]=$_POST["school"]; $data["describe"]=$_POST["describe"];
	                    M("Suex")->where("id=$id")->save($data);
						break;	   
	   }
      A("See")->see($_POST["type"]);  
   }   
}