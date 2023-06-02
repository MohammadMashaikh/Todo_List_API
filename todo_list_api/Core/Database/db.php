<?php

namespace Core\Database;

class DB
{
    public $connection;
    public function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "todo_list_api";

        $this->connection = new \mysqli($servername, $username, $password, $database);

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function __destruct()
    {
        $this->connection->close();
    }

    public function submit_query($sql)
    {
        return $this->connection->query($sql);
    }
}
