<?php


define('HOST', 'localhost');
define('USER', 'asma.com');
define('PASSWORD', '');
define('DATABASE', 'my_db');


class Database
{

    public $host = HOST;
    public $user = USER;
    public $password = PASSWORD;
    public $database = DATABASE;



    public $error;
    public $link;

    public function __construct()
    {
        $this->dbConnect();
    }



    public function dbConnect()
    {

        $this->link = mysqli_connect($this->host, $this->user, $this->password, $this->database);

        if (!$this->link) {
            $this->error = "Database Connection Failed";
            return false;
        }
    }

    // Insert function


    public function insert($sql)
    {
        $result = mysqli_query($this->link, $sql) or die($this->link->error . __LINE__);

        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    // Select function


    public function select($sql)
    {
        $result = mysqli_query($this->link, $sql) or die($this->link->erroe . __LINE__);

        if (mysqli_num_rows($result) > 0) {
            return $result;
        } else {
            return false;
        }
    }




    // Update function


    public function update($sql)
    {
        $result = mysqli_query($this->link, $sql) or die($this->link->erroe . __LINE__);

        if ($result) {
            return $result;
        } else {
            return false;
        }
    }



    // Delete function


    public function delete($sql)
    {
        $result = mysqli_query($this->link, $sql) or die($this->link->erroe . __LINE__);

        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
}
