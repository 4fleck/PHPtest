<?php
require($_SERVER["DOCUMENT_ROOT"]."/Model/Post.php");

class Home
{
    public function __construct()
    {
    }
    public function index(){

        if("My old name" == $_REQUEST["nam"]){
            $posts = new Post(
                0,
                "My old name",
                "new post"
            );

        }
        elseif("lol" == $_REQUEST["nam"]){
            $posts = new Post(
                23,
                "lol",
                "new lol post"
            );
        }else{
            $posts = new Post(
                3,
                "kek",
                "new lol post"
            );
        }
        $this->render("home",[
            "msg" => "Hello ssss",
            "posts" => $posts
        ]);
    }
    private function render($template, $params = []){
        if(!empty($params)){
            extract($params);
        }
        include $_SERVER["DOCUMENT_ROOT"]."/View/".strtolower(get_class($this))."/".strtolower($template).'.view.php';
    }
}