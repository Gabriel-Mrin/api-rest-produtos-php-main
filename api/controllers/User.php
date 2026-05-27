<?php

use api\core\Controller;

class user extends Controller{
  
  public function index(){
    $Product = $this->model('User'); // é retornado o model Product()
    $data = $Product::findAll();
    $this->view('user/index', ['users' => $data]);
  }
 
  public function show($cpf  = null){
    if (is_numeric($cpf )) {
      $User = $this->model('User');
      $data = $User::findById($cpf);
      $this->view('user/show', ['user' => $data]);
    } else {
      $this->pageNotFound();
    }
  }


  public function edit($cpf  = null){

  if (is_numeric($cpf )) {

    $User = $this->model('User');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

      $User::updateById($cpf , $_POST);

      header('Location: ' . BASE_URL . '/user');
      exit;
    }

    $data = $User::findById($cpf );

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

 public function create(){

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

      $User = $this->model('User');

      $User::create($_POST);

      header('Location: ' . BASE_URL . '/user');
      exit;
    }

    $this->view('user/create');
  }

}
