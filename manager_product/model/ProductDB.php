<?php

namespace Model;

class ProductDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create($product)
    {
        $sql = "INSERT INTO product(code, name, type, price, numbers, create_date, description) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $product->code);
        $statement->bindParam(2, $product->name);
        $statement->bindParam(3, $product->type);
        $statement->bindParam(4, $product->price);
        $statement->bindParam(5, $product->numbers);
        $statement->bindParam(6, $product->create_date);
        $statement->bindParam(7, $product->description);
        $statement->execute();
    }

    public function getAll()
    {
        $sql = "SELECT product.id, product.code, product.name, type.name AS type_name FROM product JOIN type ON product.type = type_product.id,
                product.price, product.numbers, product.create_date, product.description FROM product";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $products = [];
        foreach ($result as $row) {
            $product = new Product($row['code'], $row['name'], $row['type'], $row['price'], $row['numbers'], $row['create_date'], $row['description']);
            $product->id = $row['id'];
            $products[] = $product;
        }
        return $products;
    }

    public function get($id)
    {
        $sql = "SELECT * FROM product WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
        $row = $statement->fetch();
        $product = new Product($row['code'], $row['name'], $row['type'], $row['price'], $row['numbers'], $row['create_date'], $row['description']);
        $product->id = $row['id'];
        return $product;
    }

    public function delete($id)
    {
        $sql = "DELETE * FROM product WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        return $statement->execute();
    }

    public function update($id, $product)
    {
        $sql = "UPDATE product SET code = ?, name = ?, type = ?, price = ?, numbers = ?, create_date = ?, description = ? WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $product->code);
        $statement->bindParam(2, $product->name);
        $statement->bindParam(3, $product->type);
        $statement->bindParam(4, $product->price);
        $statement->bindParam(5, $product->numbers);
        $statement->bindParam(6, $product->create_date);
        $statement->bindParam(7, $product->description);
        $statement->bindParam(8, $id);
        return $statement->execute();
    }

    public function search($key)
    {
        $sql = "SELECT * FROM product WHERE name LIKE name = '%$key%'";
        $statement = $this->connection->query($sql);
        return $statement->fetchAll();
    }
}
