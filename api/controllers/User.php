<?php

use api\core\Controller;

class Product extends Controller{
  
  public function index(){
    $Product = $this->model('User'); // é retornado o model Product()
    $data = $Product::findAll();
    $this->view('user/index', ['users' => $data]);
  }
 
  public function show($id = null){
    if (is_numeric($id)) {
      $User = $this->model('User');
      $data = $User::findById($id);
      $this->view('user/show', ['user' => $data]);
    } else {
      $this->pageNotFound();
    }
  }


  public function edit($id = null){

  if (is_numeric($id)) {

    $User = $this->model('User');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

      $User::updateById($id, $_POST);

      header('Location: ' . BASE_URL . '/user');
      exit;
    }

    $data = $User::findById($id);

    $this->view('user/edit', ['user' => $data]);

  } else {

    $this->pageNotFound();

  }

}


public function delete($id = null){

  if (is_numeric($id)) {

    $User = $this->model('User');

    $User::deleteById($id);

    header('Location: ' . BASE_URL . '/user');

  } else {

    $this->pageNotFound();

  }

}
}
