<?php defined('BASEPATH') OR exit ('No direct script access allowed');

class Paging extends CI_Model {

     //Menu user
     public function get_all_user($table, $hapus, $level, $order)
     {
          $this->db->select('*'); 
          $this->db->from($table);  
          $this->db->where($hapus,'0');
          $this->db->where($level, '1');
          $this->db->order_by($order, 'DESC');

          return $this->db->get();
     }  

     public function get_data_user($table,$limit, $offset, $hapus, $level, $order)
	{
	     $this->db->select('*');
	     $this->db->from($table);
	     $this->db->where($hapus,'0');
	     $this->db->where($level , '1');
	     $this->db->order_by($order, 'DESC');
	     $this->db->limit($limit, $offset);

	     return $this->db->get();
	}
     public function search_data_user($table,$limit, $hapus, $level, $order, $search){
          $this->db->select('*');
          $this->db->from($table);
          $this->db->where($hapus, '0');
          $this->db->where($level, '1'); 
          $this->db->like('user_nama', $search);
          $this->db->order_by($order, 'DESC');
          $this->db->limit($limit);

          return $this->db->get();
     }
     //end menu user


///////////////////////////////////////////////////////////////////////////


     //all
     public function get_all($table, $hapus, $order)
     {
          $this->db->select('*');
          $this->db->from($table);  
          $this->db->where($hapus,'0');
          $this->db->order_by($order, 'DESC');

          return $this->db->get();
     } 

     public function get_data($table,$limit, $offset, $hapus, $order)
     {
          $this->db->select('*');
          $this->db->from($table);
          $this->db->where($hapus,'0');
          $this->db->order_by($order, 'DESC');
          $this->db->limit($limit, $offset);

          return $this->db->get();
     }
     public function search_data($table,$limit, $hapus, $order, $where, $like){
          $this->db->select('*');
          $this->db->from($table);
          $this->db->where($hapus,'0');
          $this->db->like($where, $like);
          $this->db->order_by($order, 'DESC');
          $this->db->limit($limit);

          return $this->db->get();
     }
     //endall
}
