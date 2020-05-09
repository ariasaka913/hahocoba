<?php

// extends class Model
class mUser extends CI_Model{

  // response jika field ada yang kosong
  public function empty_response(){
    $response['status']=502;
    $response['error']=true;
    $response['message']='Field tidak boleh kosong';
    return $response;
  }


// mengambil semua data user
  public function all_user(){

    $all = $this->db->get("user")->result();
    $response['status']=200;
    $response['error']=false;
    $response['user']=$all;
    return $response;

  }

// mengambil semua data user
  public function where_user($iUser){

    $where = $this->db->get_where('user','iUser'.'='.$iUser)->result();
    $response['status']=200;
    $response['error']=false;
    $response['user']=$where;
    return $response;

  }


  // function untuk insert data ke tabel tb_person
  public function add_user($nimUser,$nUser,$ftUser){

    if(empty($nimUser) || empty($nUser) || empty($ftUser)){
      return $this->empty_response();
    }else{
      $data = array(
        "nimUser"=>$nimUser,
        "nUser"=>$nUser,
        "ftUser"=>$ftUser
      );

      $insert = $this->db->insert("user", $data);

      if($insert){
        $response['status']=200;
        $response['error']=false;
        $response['message']='Data user ditambahkan.';
        return $response;
      }else{
        $response['status']=502;
        $response['error']=true;
        $response['message']='Data user gagal ditambahkan.';
        return $response;
      }
    }

  }

  // hapus data user
  public function delete_user($iUser){

    if($iUser == ''){
      return $this->empty_response();
    }else{
      $where = array(
        "iUser"=>$iUser
      );

      $this->db->where($where);
      $delete = $this->db->delete("user");
      if($delete){
        $response['status']=200;
        $response['error']=false;
        $response['message']='Data user dihapus.';
        return $response;
      }else{
        $response['status']=502;
        $response['error']=true;
        $response['message']='Data user gagal dihapus.';
        return $response;
      }
    }

  }

  // update person
  public function update_user($iUser,$nimUser,$nUser,$ftUser){

    if($iUser == '' || empty($nimUser) || empty($nUser) || empty($ftUser)){
      return $this->empty_response();
    }else{
      $where = array(
        "iUser"=>$iUser
      );

      $set = array(
        "nimUser"=>$nimUser,
        "nUser"=>$nUser,
        "ftUser"=>$ftUser
      );

      $this->db->where($where);
      $update = $this->db->update("user",$set);
      if($update){
        $response['status']=200;
        $response['error']=false;
        $response['message']='Data user diubah.';
        return $response;
      }else{
        $response['status']=502;
        $response['error']=true;
        $response['message']='Data user gagal diubah.';
        return $response;
      }
    }

  }

}

?>
