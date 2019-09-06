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
							title: 'Congratulations!',
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
