<?php

class Company_Model extends CI_Model{

    public function __construct(){

    }

   public function insert($object){

    $this->db->insert('inquery', $object);
    return $this->db->insert_id(); 
   }

   public function delete($id){
    if ($this->db->delete("inquery", "id = ".$roll_no)) { 
        return true; 
     } 
   }

//    public function update($data,$old_id) { 
//     $this->db->set($data); 
//     $this->db->where("id", $old_id); 
//     $this->db->update("stud", $data); 
//  } 





        
}