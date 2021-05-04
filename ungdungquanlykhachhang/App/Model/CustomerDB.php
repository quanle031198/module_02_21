<?php

namespace Model;

use Controller\CustomerController;

class CustomerDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }
    public function creat($customer)
    {
        $sql = "INSERT INTO customers (name, email, address) VALUES (?, ?, ?)";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(1, $customer->name);
        $stm->bindParam(2, $customer->email);
        $stm->bindParam(3, $customer->address);
        return $stm->execute();
    }
    public function getAll(){
        $sql = "SELECT * FROM customers";
        $stm = $this->connection->prepare($sql);
        $stm->execute();
        $result = $stm->fetchAll();
        $customers = [];
        foreach ($result as $row ){
            $customer = new Customer($row['name'],$row['email'],$row['address']);
            $customer->id = $row['id'];
            $customers[] = $customer;
        }
        return $customers;
    }
    public function get($id){
        $sql = "SELECT * FROM customers WHERE id = ?";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(1,$id);
        $stm->execute();
        $row = $stm->fetch();
        $customer = new Customer($row['name'], $row['email'], $row['address']);
        $customer->id = $row['id'];
        return $customer;
    }
    public function delete($id){
        $sql = "DELETE FROM customers WHERE id = ?";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(1,$id);
        return $stm->execute();
    }
    public function update($id, $customer)
    {
        $sql = "UPDATE customers SET name = ?, email = ?, address = ? WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $customer->name);
        $statement->bindParam(2, $customer->email);
        $statement->bindParam(3, $customer->address);
        $statement->bindParam(4, $id);
        return $statement->execute();
    }
}
