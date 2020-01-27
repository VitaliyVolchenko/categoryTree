<?php

class IndexController extends Controller
{
    use \services\CreateTreeServices;


    public function __construct()
    {
        $this->model = new CategoryModel();
    }

    public function index()
    {
        $categories = $this->model->getCategories();
        $tree = $this->buildTree($categories);
        print_r($tree);
    }

}