<?php

require APPPATH . 'libraries/REST_Controller.php';

class User extends REST_Controller{

  // construct
 function __construct(){
  parent::__construct();
  $this->load->model('mUser');
  $this->methods['index_get']['limit'] =20;
}

  // method index untuk menampilkan semua data person menggunakan method get
function index_get(){
  $response = $this->mUser->all_user();
  $this->response($response);
}

function where_get(){
  $response = $this->mUser->where_user($this->get('iUser'));
  $this->response($response);
}

  // untuk menambah person menaggunakan method post
function add_post(){
  $response = $this->mUser->add_user(
    $this->post('nimUser'),
    $this->post('nUser'),
    $this->post('ftUser')
  );
  $this->response($response);
}

  // update data person menggunakan method put
function update_put(){
  $response = $this->mUser->update_user(
    $this->put('iUser'),
    $this->put('nimUser'),
    $this->put('nUser'),
    $this->put('ftUser')
  );
  $this->response($response);
}

  // hapus data person menggunakan method delete
function delete_delete(){
  $response = $this->mUser->delete_user(
    $this->delete('iUser')
  );
  $this->response($response);
}

}

?>
