<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
//        function construct()
//        {
//            
//        }
	public function index()
	{
		$this->load->view('login');
	}
        
        public  function login()
        {
            $this->load->library('session');
            $this->load->model('userManager');
            $result = $this->userManager->login();
            $data =array('val' => 3);
            switch ($result){
            case 101 :
                $data =array('val' => 3);
                    echo json_encode($data);
                break;
            case 102 :
                $data =array('val' => 2);
                    echo json_encode($data);
                break;
            default :
                $sessiondata = array(
                  'user_id' => $result['Data']->id,
                  'user_name' => $result['Data']->name,
                  'user_email' => $result['Data']->email
                );
                $this->session->set_userdata($sessiondata);
                if(!empty($result))
                {
                    $data =array('val' => 1, 'ID' => $result['Data']->id);
                    echo json_encode($data);
                }
                else {
                    $data =array('val' =>0);
                    echo json_encode($data);
                }
                break;
            }
        }
        
        public function dashboard($id)
        {
            $this->load->helper('url'); 
            $this->load->library('session');
            $user_id = $this->session->userdata('user_id');
            if($user_id ==$id)
            {
            //    $result = $this->userManager->bloginfo();
              //      $data =array('val' => 3);   
                $this->load->view('dashboard');
                
                echo "111";
            }
            else
            {
                redirect( $this->config->config['base_url'] );
            }
        }
        public function Home()
        {
            $this->load->model('userManager');
            $result1 = $this->userManager->getcategory();
            $result2 = $this->userManager->bloglist();
            $result = array( 'category' =>$result1,
                'blog' => $result2
                );
            $this->load->view('blog', $result);
        }
        
        public function Blogdetails($id)
        {
            $this->load->helper('url'); 
            $this->load->model('userManager');
            $result2 = $this->userManager->blogdetails($id);
            $result = array(
                'blogdetails' => $result2
            );
//            print_r($result2);
            $this->load->view('Blogdetails', $result);
        }
        
}
