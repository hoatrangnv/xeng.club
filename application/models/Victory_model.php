<?php
Class Victory_model extends MY_Model
{
    var $table = 'victory`';
   function get_list_victory_other($id){
       $this->db->where('id !=',$id);
       $this->db->order_by('month','DESC');
       $query = $this->db->get($this->table);
       if($query->result())
       {
           return $query->result();
       }else{
           return FALSE;
       }
   }
}