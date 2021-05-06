<?php

namespace Model;

use PDO;
use Shmop;

class PostDB
{
    public $connection;
    public function __construct($connection)
    {
        $this->connection = $connection;
    }
    public function add($post)
    {
        $sql = "INSERT INTO posts (title,teaser,content,created) VALUES (?,?,?,?) ";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(1, $post->title);
        $stm->bindParam(2, $post->teaser);
        $stm->bindParam(3, $post->content);
        $stm->bindParam(4, $post->created);
        return $stm->execute();
    }
    public function getById($id)
    {
        $sql = "SELECT * FROM posts WHERE id = ?";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(1, $id);
        $stm->execute();
        $result = $stm->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public function getDetail($id)
    {
        $sql = "SELECT * FROM posts WHERE id = ?";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(1, $id);
        $stm->execute();
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function getAll()
    {
        $sql = "SELECT * FROM posts";
        $stm = $this->connection->prepare($sql);
        $stm->execute();
        $result =  $stm->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function delete($id)
    {
        $sql = "DELETE FROM posts WHERE id = ?";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(1, $id);
        return $stm->execute();
    }
    public function update($id, $post)
    {
        $sql = "UPDATE `posts` SET `title` = ?, `teaser` = ?, `content` = ?, `created` = ? WHERE `id` = ?";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(1, $post->title);
        $stm->bindParam(2, $post->teaser);
        $stm->bindParam(3, $post->content);
        $stm->bindParam(4, $post->created);
        $stm->bindParam(5, $id);
        return $stm->execute();

    }
}
