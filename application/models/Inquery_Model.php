

<?php

class Inquery_Model extends CI_Model{

    public function update($data,$id){

        // $this->db->set('true');  
        $this->db->where("id", $id); 
        $this->db->update("approved",1 ); 
    }


    public function delete($id){
        if ($this->db->delete("inquery", "id = ".$id)) { 
            return true; 
         } 


    }

}