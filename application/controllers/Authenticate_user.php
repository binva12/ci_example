<?php
	class Authenticate_user extends CI_Controller{
			
		public function __construct(){
			parent::__construct();	
			$this->load->helper(array("form", "url"));
			$this->load->library(array("email","form_validation", "session"));
			$this->load->model("authenticate_model");
			
		}

		public function signup(){
      $this->load->view("sigup-page");
			
		}

		public function signup_process(){
			
			$config_rules = array(
				array(
					"field" => "username",
					"label" => "Name",
					"rules" => "required|trim|is_unique[tb_users.user_name]"
				),
				array(
					"field" => "email",
					"label" => "Email",
					"rules" => "required|min_length[10]|trim|is_unique[tb_users.user_email]"
				),
				array(
					"field" => "password",
					"label" => "Phone no",
					"rules" => "required"
				)
			);
			$this->form_validation->set_rules($config_rules);
		
			if ($this->form_validation->run() == false) {
				$this->signup();
			} else {
				$data_input = $this->input->post();			
				$data = array(
					"user_name" => $data_input["username"],
					"user_email" => $data_input["email"],
					"user_pwd" => $data_input["password"]					
				);
			$this->authenticate_model->signup_user($data);
			$this->load->view("pages/signup_success");
			}		
		}

		public function login(){
			$this->load->view('login-page'); 
		}

		public function login_process(){
			
			$data = $this->input->post();
			$result = $this->authenticate_model->authenticate_user($data);
			print_r($result);
			$array_max = count($result);
			for($i = 0; $i <= $array_max - 1 ;$i++){
				echo "hello";
				if ($result[$i]["user_admin"] = 1){
					redirect("admin-page");
				}
			}
		}

		public function admin_process(){
			$this->load->view("pages/admin_page");
		}

		public function forgot_password(){
			$this->load->view("pages/forgot_password_page");
		}

		public function send_email(){
			$data = $this->input->post();
			$this->email->from('binva12@gmail.com', 'binva12');
			$this->email->to($data["email"]);
			$this->email->subject(' My mail through codeigniter from localhost '); 
			$this->email->message('Hello World…');
			$this->email->send();

			if (!$this->email->send()) {
				show_error($this->email->print_debugger()); }
			else {
				echo 'Your e-mail has been sent!';
			}
		}   
		
      
		

	}

?>
