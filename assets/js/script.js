function toggleSignup(){
	document.getElementById("login-toggle").style.backgroundColor="#fff";
	document.getElementById("login-toggle").style.color="#222";
	document.getElementById("signup-toggle").style.backgroundColor="#57b846";
	document.getElementById("signup-toggle").style.color="#fff";
	document.getElementById("login-form").style.display="none";
	document.getElementById("signup-form").style.display="block";
}

function toggleLogin(){
	document.getElementById("login-toggle").style.backgroundColor="#57B846";
	document.getElementById("login-toggle").style.color="#fff";
	document.getElementById("signup-toggle").style.backgroundColor="#fff";
	document.getElementById("signup-toggle").style.color="#222";
	document.getElementById("signup-form").style.display="none";
	document.getElementById("login-form").style.display="block";
}

function Register(){
	let email = $('#uemail').val();
	let name = $('#uname').val();
	let password = $('#passw').val();
	if(password==''){
		swal ( "Oops" ,  "Password is mandatory!" ,  "error" );
	}else{
		let dataArry={
			'email':email,
			'name':name,
			'password':password
		};
		$.ajax({
			type:"POST",
			url  : "welcome/register",
			dataType: 'JSON',
			data:dataArry,
			success:function (data) {
				if(data==1){
					swal("Congratulations!", "Your Account Created Successfully. You May Now Logged In.", "success");
				}else{
					swal("Error!", "There might be some problem. Please Try after sometime.", "error");
				}
			}
		});

	}

}

function logIn(){
		let username = $('#email').val();
		let passwrd = $('#upass').val();
		if(username == '' && passwrd==''){
			swal ( "Oops" ,  "Both Fields are mandatory!" ,  "error" );
		}else if(username == '' && passwrd!=''){
			swal ( "Oops" ,  "User Email is mandatory! For Logging In.!" ,  "error" );
		}else if(username != '' && passwrd==''){
			swal ( "Oops" ,  "Password is mandatory! For Logging In.!" ,  "error" );
		}else{
			let dataArry={
				'email':username,
				'password':passwrd
			};
			$.ajax({
				type:"POST",
				url  : "welcome/login",
				dataType: 'JSON',
				data:dataArry,
				success:function (data) {
					if(data==1){
					    swal({
							title: 'Yeahh.!',
							text: "You are Successfully Logged In.  Redirecting....",
							type: 'success',
							showConfirmButton:false,
						})
						setTimeout(function(){
							window.location.href="welcome/dashboard";
							}, 3000);

					}else{
						swal({
							title: 'Error!!',
							text: "There might be some problem. Please Try after sometime.",
							type: 'warning',
							showConfirmButton:false,
						})
					}
				}
			});
		}

}

function startExm() {
	let host =  $('#base').val();
	swal({
		title: "  ",
		text: "\n Get Ready..!\n  You're Exam is Starting In 5 seconds.! \n  Loading Portal....",
		type: "success",
		showConfirmButton:false,
		timer: 5000
	});
	setTimeout(function(){
		// window.location.href=host+"timer";
		window.open(host+"timer");
	}, 5000);
}
function submitExm(){
	let fname=$('#Fname').val();
	let mname=$('#mname').val();
	let lname=$('#lname').val();
	let gender=$('#gender').val();
	let relation=$('#relation').val();
	let social=$('#socialS').val();
	let socialSec=$('#socialSecure').val();
	let dob=$('#DOB').val();
	let add1=$('#address1').val();
	let add2=$('#address2').val();
	let city=$('#city').val();
	let state=$('#state').val();
	let zip=$('#zip').val();
	let home=$('#Htele').val();
	let work=$('#Wtele').val();
	let mob=$('#mobile').val();
	let email=$('#email').val();
	let mailtype=$('#mailtype').val();
	let agree1=$('#agree1').val();
	let agree2=$('#agree2').val();
	let agree3=$('#agree3').val();

	let dataArr= {
		'first_name' : fname,
		'mid_name' : mname,
		'last_name' : lname,
		'gender' : gender,
		'relation' : relation,
		'social_num' : social,
		'social_ses_code' : socialSec,
		'dob' : dob,
		'address1' : add1,
		'address2' : add2,
		'city' : city,
		'state' : state,
		'zip' : zip,
		'home_tele' : home,
		'work_tele' : work,
		'mobile' : mob,
		'email' : email,
		'email_type' : mailtype,
		'agreement1' : agree1,
		'agreement2' : agree2,
		'agreement3' : agree3,
	};

	$.ajax({
		type:"POST",
		url  : "timer/formdata",
		dataType: 'JSON',
		data:dataArr,
		success:function (data) {
			if(data==1){
				swal({
					title: 'Yeahh.!',
					text: "You're Form has been Successfully Submitted.  Redirecting....",
					type: 'success',
					showConfirmButton:false,
				})
				setTimeout(function(){
					window.location.href="welcome/dashboard";
				}, 3000);

			}else{
				swal({
					title: 'Error!!',
					text: "There might be some problem. Please Try after sometime.",
					type: 'warning',
					showConfirmButton:false,
					timer: 3000,
				})
			}
		}
	});


}



/*Logout Functions*/
function exitExam() {
	let host =  $('#base').val();
	swal({
		title: "  ",
		text: "\n Data UnSaved..!\n  You're Logging Out. In 3 seconds.! \n  Wait....",
		type: "warning",
		showConfirmButton:false,
	});
	setTimeout(function(){
		window.location.href="welcome/logout";
	}, 3000);
}
function logOut() {
	let host =  $('#base').val();
	swal({
		title: "  ",
		text: "\n  You're Logging Out. In 3 seconds.! \n  Wait....",
		type: "warning",
		showConfirmButton:false,
	});
	setTimeout(function(){
		window.location.href="logout";
	}, 3000);
}


