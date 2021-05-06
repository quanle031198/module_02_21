<?php

namespace Controller;

use Model\DataBase;
use Model\PostDB;
use Model\Post;

class PostController
{
    public $postDB;
    public function __construct()
    {
        $connection = new DataBase();
        $this->postDB = new PostDB($connection->connect());
    }
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'Src/View/add.php';
        } else {
            $title = $_POST['title'];
            $teaser = $_POST['teaser'];
            $content = $_POST['content'];
            $created = $_POST['created'];
            $post = new Post($title, $teaser, $content, $created);
            $this->postDB->add($post);
            header('Location: index.php');
        }
    }
    public function index()
    {
        $postList = $this->postDB->getAll();
        include 'Src/View/list.php';
    }
    public function view()
    {
        
            $id = $_GET['id'];
            $postDetail = $this->postDB->getDetail($id);
            include 'Src/View/view.php';
        
    }
    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $post = $this->postDB->getById($id);
            include 'Src/View/delete.php';
        } else {
            $id = $_POST['id'];
            $this->postDB->delete($id);
            header('Location: index.php');
        }
    }
    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $posts = $this->postDB->getById($id);
            include 'Src/View/edit.php';
        } else {
            $id = $_POST['id'];
            $post = new Post($_POST['title'],$_POST['teaser'],$_POST['content'],$_POST['created']);
            $this->postDB->update($id, $post);
            header('Location: index.php');
        }
    }
}
