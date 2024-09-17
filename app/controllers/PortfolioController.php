<?php
require_once '../app/models/Portfolio.php';
class PortfolioController
{
    private $model;
    public function __construct($db)
    {
        $this->model = new Portfolio($db);
    }
    public function index()
    {
        $items = $this->model->getItems();
        require '../app/views/portfolio.php';
    }
}
