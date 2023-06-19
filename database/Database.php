<?php

namespace database;

use PDO;
use PDOException;

class Database
{
    private $connection;

    private $options= array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    );

    private $dbHost = DB_HOST;
    private $dbName = DB_NAME;
    private $dbUserName = DB_USERNAME;
    private $dbPassword = DB_PASSWORD;

    function __construct()
    {
        try{
            $this->connection = new PDO("mysql:host=".$this->dbHost.";dbname=".$this->dbName , $this->dbUserName, $this->dbPassword, $this->options);
        }
        catch(PDOException $e){
            echo $e->getMessage();
            exit();
        }
        
    }
// select('select * from users')
// select('select * from users where id = ?', 2)
    public function select($sql, $value =null)
    {
        
        try 
        {
            $statement = $this->connection->prepare($sql);

            if($value == null)
            {
                $statement->execute();
            }else{
                $statement->execute($value);
            }
            $result=$statement;
            return $result;

        } catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    } 
// insert ('users', ['name', 'email', 'password'], ['xohre', 'a@a.com', '12345'])
    public function insert($table, $fields, $values)
    {
        try
        {
            $sql = "INSERT INTO ".$table." (".implode(", ", $fields) .", created_at) VALUES ( :".implode(", :", $fields).", now() );";
            $statement = $this->connection->prepare($sql);
            $statement->execute(array_combine($fields, $values));
            return true;

        } catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }
 // update('user', 2,['name', 'email', 'password'], ['xohre', 'a@a.com', '12345'] )
    public function update($table, $id, $fields, $values)
    {
        $sql = "UPDATE ".$table." SET";
        foreach(array_combine($fields, $values) as $field => $value)
        {
            if($value){
                $sql.= " `".$field ."` = ? ,";
            }else{
                $sql.= " `".$field ."` = NULL ,";
            }
        }
        $sql .= "updated_at = now()";
        $sql.=" WHERE id = ?;";
        try
        {
            $statement= $this->connection->prepare($sql);
            $statement->execute(array_merge(array_filter(array_values($values)), [$id]));
            return true; 
        } catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }

    // delete('users', 2);
    public function delete($table, $id)
    {
        try
        {
            $sql = "DELETE FROM ".$table." WHERE id = ?;";
            $statement = $this->connection->prepare($sql);
            $statement->execute([$id]);
            return true; 
        } catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }


    public function createTable($sql)
    {
        try
        {
            $this->connection->exec($sql);
            return true;
        } catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }


}