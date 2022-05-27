<?php
class Category {
  // Properties
  public $MaTheLoai;public $TenTheLoai;
  public $ID;

  // Methods
  function set_name($TenTheLoai) {
    $this->TenTheLoai = $TenTheLoai;
  }
  function get_name() {
    return $this->TenTheLoai;
  }
  function set_matheloai($MaTheLoai) {
    $this->MaTheLoai = $MaTheLoai;
  }
  function get_matheloai(){
    return $this->MaTheLoai;
  }
  function set_id($ID){
    $this -> ID= $ID;
  }
  function get_id(){
      return $this->ID;
  }
}
?>