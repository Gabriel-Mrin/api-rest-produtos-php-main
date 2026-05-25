<?php

use api\core\Controller;

class Category extends Controller{
  
  public function index(){
    $Category = $this->model('Category'); // é retornado o model Product()
    $data = $Category::findAll();
    $this->view('category/index', ['categories' => $data]);
  }
 
  public function show($id = null){
    if (is_numeric($id)) {
      $Category = $this->model('Category');
      $data = $Category::findById($id);
      $this->view('category/show', ['category' => $data]);
    } else {
      $this->pageNotFound();
    }
  }


  public function edit($id = null){

  if (is_numeric($id)) {

    $Category = $this->model('Category');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

      $Category::updateById($id, $_POST);

      header('Location: ' . BASE_URL . '/category');
      exit;
    }

    $data = $Category::findById($id);

    $this->view('category/edit', ['category' => $data]);

  } else {

    $this->pageNotFound();

  }

}


public function delete($id = null){

  if (is_numeric($id)) {

    $Category = $this->model('Category');

    $Category::deleteById($id);

    header('Location: ' . BASE_URL . '/category');

  } else {

    $this->pageNotFound();

  }

}
}
