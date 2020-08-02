


<?php 
 class Loginmodel extends CI_model{

 	public function login_valid($username){

 		$q = $this->db->where(['username'=>$username])
 						->get('users');

 			if($q->num_rows()){ 				
 				return $q->row();
 				//return true;
 			}else{
 				return false;
 			}

 	}

 }