
<div class="form-modal">

	<div class="form-toggle">
		<button id="login-toggle" onclick="toggleLogin()">log in</button>
		<button id="signup-toggle" onclick="toggleSignup()">sign up</button>
	</div>

	<div id="login-form">
		<?php //echo form_open_multipart($login);?>
			<input type="email" name="email" id="email" autocomplete="off" placeholder="Enter email or username"/>
			<input type="password" name="upass" id="upass" autocomplete="off" placeholder="Enter password"/>
			<button type="submit" name="log" onclick="logIn()" class="btn login">login</button>
		<?php  //echo form_close();  ?>
			<p><a href="javascript:void(0)">Forgotten account</a></p>
			<hr/>
			<button type="button" class="btn -box-sd-effect"> <i class="fa fa-google fa-lg" aria-hidden="true"></i> sign in with google</button>
			<button type="button" class="btn -box-sd-effect"> <i class="fa fa-linkedin fa-lg" aria-hidden="true"></i> sign in with linkedin</button>
			<button type="button" class="btn -box-sd-effect"> <i class="fa fa-windows fa-lg" aria-hidden="true"></i> sign in with microsoft</button>

	</div>

	<div id="signup-form">
		<?php		//echo form_open_multipart($register);		?>
			<input type="email" name="uemail" id="uemail" autocomplete="off" placeholder="Enter your email"/>
			<input type="text" name="uname" id="uname" autocomplete="off" placeholder="Choose username"/>
			<input type="password" name="passw" id="passw" autocomplete="off" placeholder="Create password"/>
			<button type="submit" name="reg" id="reg" onclick="Register(this.id)" class="btn signup">create
				account</button>
		<?php  //echo form_close();  ?>
			<p>Clicking <strong>create account</strong> means that you are agree to our <a href="javascript:void(0)">terms of services</a>.</p>
			<hr/>
			<button type="button" class="btn -box-sd-effect"> <i class="fa fa-google fa-lg" aria-hidden="true"></i> sign up with google</button>
			<button type="button" class="btn -box-sd-effect"> <i class="fa fa-linkedin fa-lg" aria-hidden="true"></i> sign up with linkedin</button>
			<button type="button" class="btn -box-sd-effect"> <i class="fa fa-windows fa-lg" aria-hidden="true"></i> sign up with microsoft</button>

	</div>

</div>
