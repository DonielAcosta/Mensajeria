<?php

class Mensajeria_model extends CI_Model {

  public function __construct() {
      $this->load->database(); 
  }
    
  /**
   * It returns a query object
   * 
   * @return The query result.
   */
  public function datacli($cliente){
      
    $this->db->select(array('cliente','telefon2'));
    $this->db->from('scli');
    $this->db->where('cliente', $cliente);
    $query = $this->db->get();
    return $query->result();
    // $datCli = $this->db->query("SELECT cliente,telefon2 FROM scli Where cliente $cliente");
    
    // return $datCli;
  }

  /**
   * It returns a query object
   */
  public function templade($id){
    
    $this->db->select(array('id','templade'));
    $this->db->from('plantilla');
    $this->db->where('id', $id);
    $temp = $this->db->get();
    return $temp->result();
  }
}
?>
