<?php
class User extends CI_Model {

	public function create_user($data){
		$email=isset($data['email']) ? $data['email'] :  null;
		$uname= isset($data['name']) ? $data['name'] :  null;
		$passwrd= isset($data['password']) ? $data['password'] :  null;
		$date=date('Y-m-d H:m:s');

		if(!empty($passwrd)){
			$password=md5($passwrd);
			$dataArr=array(
				'name'=> $uname,
				'email'=> $email,
				'password'=> $password,
				'photo_url'=> '',
				'created_on'=> $date
			);

			$this->db->insert('users',$dataArr);
			return ($this->db->affected_rows() != 1) ? false : true;

		}else{
			return 2;
		}
	}

	public function loggIn($data){
		$email=isset($data['email']) ? $data['email'] :  null;
		$pass= isset($data['password']) ? $data['password'] :  null;

		$password=md5($pass);

		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$query = $this->db->get();
		  if($this->db->affected_rows()){
			$User_data=$query->row();

			$sesUser=array(
				'user_id'=> $User_data->id,
				'username'=> $User_data->name,
				'email'=> $User_data->email,
				'photo_url'=> $User_data->photo_url,
			);
			  $this->session->set_userdata($sesUser);
			return 1;
		  }else{
		  	return 2;
		  }

	}


}
?>
