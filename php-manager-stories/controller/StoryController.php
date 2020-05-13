<?php

namespace Controller;

use function Couchbase\defaultDecoder;
use model\Story;
use model\StoryDB;
use model\DBconnection;

class StoryController
{
    public $storyDB;

    public function __construct()
    {
        $connection = new DBconnection("mysql:host=localhost; dbname=manager_stories", "root", "");
        $this->storyDB = new StoryDB($connection->connect());
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include "view/add.php";
        } else {
            $name = $_POST['name'];
            $category = $_POST['category'];
            $teaser = $_POST['teaser'];
            $content = $_POST['content'];
            $author = $_POST['author'];
            $created = $_POST['created'];
            $story = new Story($name, $category, $teaser, $content, $author, $created);
            $this->storyDB->create($story);
            $message = "Created a story";
            include "view/add.php";
        }
    }

    public function index()
    {
        $storys = $this->storyDB->getAll();
        include "view/list.php";
    }

    public function view()
    {
        $id = $_GET['id'];
        $story = $this->storyDB->get($id);
        include "view/view.php";
    }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $story = $this->storyDB->get($id);
            include "view/delete.php";
        } else {
            $id = $_GET['id'];
            $this->storyDB->delete($id);
            header('location: index.php');
        }
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $story = $this->storyDB->get($id);
            include "view/edit.php";
        } else {
            $id = $_GET['id'];
            $story = new Story($_POST['name'], $_POST['category'], $_POST['teaser'], $_POST['content'], $_POST['author'], $_POST['created']);
            $this->storyDB->update($id, $story);
            header('Location: index.php');
        }
    }
}
