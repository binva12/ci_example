<?php
	class Authenticate_model extends CI_Model{

		
		public function __construct(){

			parent::__construct();
			$this->load->database();
		}

		public function signup_user($data){
			$this->db->insert("tb_users",$data);
		}

		public function authenticate_user($data){
			
			$this->db->where("user_name", $data["username_or_email"]);
			$this->db->or_where("user_email", $data["username_or_email"]);
			$this->db->where("user_pwd", $data["user_password"]);
			$this->db->from("tb_users");
			$query = $this->db->get();

			if ($query->row_array() >= 1 ){
				$this->db->select("*");
				$this->db->where("user_name", $data["username_or_email"]);
				$this->db->or_where("user_email", $data["username_or_email"]);
				$this->db->where("user_pwd", $data["user_password"]);
				$this->db->from("tb_users");
				$query = $this->db->get();
				$result = $query->result_array();
				echo "<pre>";
				print_r($result);
				echo $result[0]["user_admin"];
				echo "<br>";
				echo count($result);
				echo "<br>";
				return $result;
			}	
		}
	}

?>
