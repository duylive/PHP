<?php

namespace Model;

class GunDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create($gun)
    {
        $sql = "INSERT INTO gun (name, series, brand, content, origin, price, status, type_id) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $gun->name);
        $statement->bindParam(2, $gun->series);
        $statement->bindParam(3, $gun->brand);
        $statement->bindParam(4, $gun->content);
        $statement->bindParam(5, $gun->origin);
        $statement->bindParam(6, $gun->price);
        $statement->bindParam(7, $gun->status);
        $statement->bindParam(8, $gun->type_id);
        $statement->execute();
    }

    public function getAll()
    {
        $sql = "SELECT gun.id, gun.name, gun.series, gun.brand, gun.content, gun.origin, gun.price, gun.status, type.name AS type_name
                FROM gun JOIN type ON gun.type_id = type.id";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $guns = [];
        foreach ($result as $row) {
            $gun = new Gun($row['name'], $row['series'], $row['brand'], $row['content'], $row['origin'], $row['price'], $row['status'], $row['type_name']);
            $gun->id = $row['id'];
            $guns[] = $gun;
        }
        return $guns;
    }

    public function get($id)
    {
        $sql = "SELECT * FROM gun WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
        $row = $statement->fetch();
        $gun = new Gun($row['name'], $row['series'], $row['brand'], $row['content'], $row['origin'], $row['price'], $row['status'], $row['type_id']);
        $gun->id = $row['id'];
        return $gun;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM gun WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        return $statement->execute();
    }

    public function update($id, $gun)
    {
        $sql = "UPDATE gun SET name = ?, series = ?, brand = ?, content = ?, origin = ?, price = ?, status = ?, type_id = ? WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $gun->name);
        $statement->bindParam(2, $gun->series);
        $statement->bindParam(3, $gun->brand);
        $statement->bindParam(4, $gun->content);
        $statement->bindParam(5, $gun->origin);
        $statement->bindParam(6, $gun->price);
        $statement->bindParam(7, $gun->status);
        $statement->bindParam(8, $gun->type_id);
        $statement->bindParam(9, $id);
        return $statement->execute();
    }
}

