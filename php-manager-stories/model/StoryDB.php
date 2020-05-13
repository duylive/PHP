<?php

namespace Model;

class StoryDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create($story)
    {
        $sql = "INSERT INTO story (name, category, teaser, content, author, created) VALUES (?, ?, ?, ?, ?, ?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $story->name);
        $statement->bindParam(2, $story->category);
        $statement->bindParam(3, $story->teaser);
        $statement->bindParam(4, $story->content);
        $statement->bindParam(5, $story->author);
        $statement->bindParam(6, $story->created);
        $statement->execute();
    }

    public function get($id)
    {
        $sql = "SELECT * FROM story WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
        $row = $statement->fetch();
        $story = new Story($row['name'], $row['category'], $row['teaser'], $row['content'], $row['author'], $row['created']);
        $story->id = $row['id'];
        return $story;
    }

    public function getAll()
    {
        $sql = "SELECT * FROM story";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $storys = [];
        foreach ($result as $row) {
            $story = new Story($row['name'], $row['category'], $row['teaser'], $row['content'], $row['author'], $row['created']);
            $story->id = $row['id'];
            $storys[] = $story;
        }
        return $storys;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM story WHERE id =  ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
    }

    public function update($id, $story)
    {
        $sql = "UPDATE story SET name = ?, category = ?, teaser = ?, content = ?, author = ?, created = ? WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $story->name);
        $statement->bindParam(2, $story->category);
        $statement->bindParam(3, $story->teaser);
        $statement->bindParam(4, $story->content);
        $statement->bindParam(5, $story->author);
        $statement->bindParam(6, $story->created);
        $statement->bindParam(7, $id);
        $statement->execute();
    }
}
