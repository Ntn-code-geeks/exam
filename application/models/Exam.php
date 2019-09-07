<?php
class Exam extends CI_Model {

	public function storeRec($data){
		$fname=isset($data['first_name']) ? $data['first_name'] :  null;
		$mname=isset($data['mid_name']) ? $data['mid_name'] :  null;
		$lname=isset($data['last_name']) ? $data['last_name'] :  null;
		$gender=isset($data['gender']) ? $data['gender'] :  null;
		$relatn=isset($data['relation']) ? $data['relation'] :  null;
		$social=isset($data['social_num']) ? $data['social_num'] :  null;
		$socialSec=isset($data['social_ses_code']) ? $data['social_ses_code'] :  null;
		$dob=isset($data['dob']) ? $data['dob'] :  null;
		$add1=isset($data['address1']) ? $data['address1'] :  null;
		$add2=isset($data['address2']) ? $data['address2'] :  null;
		$city=isset($data['city']) ? $data['city'] :  null;
		$state=isset($data['state']) ? $data['state'] :  null;
		$zip=isset($data['zip']) ? $data['zip'] :  null;
		$home=isset($data['home_tele']) ? $data['home_tele'] :  null;
		$work=isset($data['work_tele']) ? $data['work_tele'] :  null;
		$mob=isset($data['mobile']) ? $data['mobile'] :  null;
		$email=isset($data['email']) ? $data['email'] :  null;
		$mailtype=isset($data['email_type']) ? $data['email_type'] :  null;
		$agree1=isset($data['agreement1']) ? $data['agreement1'] :  null;
		$agree2=isset($data['agreement2']) ? $data['agreement2'] :  null;
		$agree3=isset($data['agreement3']) ? $data['agreement3'] :  null;
		$date=date('Y-m-d  h:i:s');


		$dataPackArr=array(
			'first_name' => $fname,
			'mid_name' => $mname,
			'last_name' => $lname,
			'gender' => $gender,
			'relation' => $relatn,
			'social_num' => $social,
			'social_ses_code' => $socialSec,
			'dob' => $dob,
			'address1' => $add1,
			'address2' => $add2,
			'city' => $city,
			'state' => $state,
			'zip' => $zip,
			'home_tele' => $home,
			'work_tele' => $work,
			'mobile' => $mob,
			'email' => $email,
			'email_type' => $mailtype,
			'agreement1' => $agree1,
			'agreement2' => $agree2,
			'agreement3' => $agree3,
			'created_on' => $date
			);
		$strPackData=implode(';,;',$dataPackArr);
		$jsonEnc=base64_encode(json_encode($strPackData));
//		pr(json_decode(base64_decode($jsonEnc)));

		$ud=$this->session->userdata();
		$usr_ID=$ud['user_id'];
		$dataArr=array(
			'user_id' => $usr_ID,
			'data_record' => $jsonEnc,
			'created_on' => $date,
			'is_blocked' => 0,
				);

		$this->db->insert('exam_data',$dataArr);
		return ($this->db->affected_rows() != 1) ? false : true;
	}

}

?>
