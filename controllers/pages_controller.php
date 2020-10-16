<?php
require_once('controllers/base_controller.php');
require_once('models/student.php');
class PagesController extends BaseController
{
    function __construct()
    {
        $this->folder = 'pages';
    }
//    public function index()
//    {
//        $posts = Student::all();
//        $data = array('posts' => $posts);
//        $this->render('home', $data);
//    }
    public function home()
    {
        $posts = Student::all();
        $data = array('posts' => $posts);
        $this->render('home', $data);
    }

    public function error()
    {
        $this->render('error');
    }
    public function add()
    {
        if(!empty($_POST))
        {
            if(empty($_POST["name"]) || empty($_POST["point_1"]) || empty($_POST["point_2"]) || empty($_POST["point_3"]))
            {
                $this->render('error');
            }
            else
            {
                $posts = Student::add_student($_POST["name"],$_POST["point_1"],$_POST["point_2"],$_POST["point_3"]);
                if($posts)
                {
                    header('Location:/');
                }
                else
                {
                    $this->render('error');
                }
            }
        }
    }
}