<?php
    class queries extends CI_Model{
        public function getPosts(){
            $query = $this->db->get('apartments');
            if($query->num_rows()>0){
                return $query->result();
            }
        }

        public function addPost($data){
            return $this->db->insert('apartments',$data);
        }

        public function getSinglePost($id){
            $query = $this->db->get_where('apartments',array('Apartment_ID'=>$id));
            if($query->num_rows()>0){
                return $query->row();
            }
        }

        public function updatePost($data,$id){
            return $this->db->where('Apartment_ID',$id)->update('apartments',$data);
        }

        public function deletePost($id){
            return $this->db->where('Apartment_ID',$id)->delete('apartments');
        }
    }
?>