<?php
class Portfolio
{
    private $db;
    public function __construct($db)
    {
        $this->db = $db;
    }
    public function getItems()
    {
        $query = $this->db->query("SELECT * FROM portfolio");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}
