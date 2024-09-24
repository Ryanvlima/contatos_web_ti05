<?php

require_once 'Database.php';

class ContatoDAO 
{
    private $db;

    public function __construct()
    {
        $this->db =  Database::getInstance()->getConnection();
    }

    public function getAll()
    {

    }

    public function getById($id)
    {

    }

    public function create($contato)
    {
        return "Contato criado";
    }

    public function update($contato)
    {

    }

    public function delete($id)
    {

    }
}

?>