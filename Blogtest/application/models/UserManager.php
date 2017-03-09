<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserManager extends CI_Model {

        public function login()
        {
            $this->db->select('*');
            $this->db->from('user');
            $this->db->where('name', $_POST['username']);
            $this->db->where('password', md5($_POST['password']));
            $query = $this->db->get();
           if($query->num_rows() > 0)
           {
               $data = array( 'Data' => $query->result()[0]);
               return $data;
           }
           else
           {
            $this->db->select('*');
            $this->db->from('user');
            $this->db->or_like('name', $_POST['username']);
            $this->db->or_like('password', md5($_POST['password']));
            $query = $this->db->get();
            if($query->num_rows() > 0)
            {
                if($query->result()[0]->name != $_POST['username'])
                {
                    return 101;
                }
                if($query->result()[0]->password != md5($_POST['password']))
                {
                    return 102;
                }
            }
           }
            
            
            
            echo "czxxz";   
            print_r($_POST);die;
        }
        
        public function getcategory()
        {
            $this->db->select('*');
            $this->db->from('category');
            $this->db->where('isactive', 1);
            $this->db->where('isdeleted', 0);
            $query = $this->db->get();
           if($query->num_rows() > 0)
           {
               $data = array( 'Category' => $query->result());
               return $data;
           }
        }

        public function bloglist()
        {
            $this->db->select('*');
            $this->db->from('blog');
//            $this->db->where('isactive', 1);
//            $this->db->where('isdeleted', 0);
            $query = $this->db->get();
           if($query->num_rows() > 0)
           {
               $data = array( 'Blog' => $query->result());
               return $data;
           }
        }
        
        
        public function blogdetails($ID)
        {
            $this->db->select('blog.*, user.name');
            $this->db->from('blog');
            $this->db->join('user', 'user.id = blog.createdby', 'INNER', FALSE);
            $this->db->where('blog.blogid', $ID);
            $query = $this->db->get();
            $blog = array();
            $mapcategory = array();
            if($query->num_rows() > 0)
            {
               $blog = $query->result();
            }
           
            $this->db->select('category.*');
            $this->db->from('category, blogcategorymapping');
            $this->db->where('blogcategorymapping.blogid', 'category.catid', FALSE);
            $this->db->where('blogcategorymapping.blogid', $ID);
            $query = $this->db->get();
           if($query->num_rows() > 0)
           {
               $mapcategory = array( 'MapCategory' => $query->result());
           }
           return array( 'Blog' => $blog,
               'MapCategory' => $mapcategory
                );
        }
        
        
 /*************************************************/
             /*commit test*/       
 /*************************************************/       
        
}
