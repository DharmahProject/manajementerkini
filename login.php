<style>

.alert-danger{
	margin-top:50px !important
	
}

.separator {
    display: flex;
    align-items: center;
    text-align: center;
	color:#fff;
	padding:0px 100px
}
.separator::before, .separator::after {
    content: '';
    flex: 1;
    border-bottom: 1px solid #fff;
}
.separator::before {
    margin-right: .25em;
}
.separator::after {
    margin-left: .25em;
}

.button img
{
    float: left;
}

*,:after,:before{box-sizing:border-box}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}
a{color:inherit;text-decoration:none}

#bodyLogin{
	background:url("img/bg2.jpeg") no-repeat center;
}

.login-wrap{
	width:100%;
	margin:auto;
	max-width:525px;
	min-height:670px;
	position:relative;	
	box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
}

.login-html{
	width:100%;
	height:100%;
	position:absolute;
	padding:90px 70px 50px 70px;
	background:rgba(40,57,101,.9);
}
.login-html .sign-in-htm,
.login-html .sign-up-htm{
	top:0;
	left:0;
	right:0;
	bottom:0;
	position:absolute;
	transform:rotateY(180deg);
	backface-visibility:hidden;
	transition:all .4s linear;
}
.login-html .sign-in,
.login-html .sign-up,
.login-form .group .check{
	display:none;
}
.login-html .tab,
.login-form .group .label,
.login-form .group .button{
	text-transform:uppercase;
}
.login-html .tab{
	font-size:22px;
	margin-right:15px;
	padding-bottom:5px;
	margin:0 15px 10px 0;
	display:inline-block;
	border-bottom:2px solid transparent;
}
.login-html .sign-in:checked + .tab,
.login-html .sign-up:checked + .tab{
	color:#fff;
	border-color:#1161ee;
}
.login-form{
	min-height:345px;
	position:relative;
	perspective:1000px;
	transform-style:preserve-3d;
}
.login-form .group{
	margin-bottom:15px;
}
.login-form .group .label,
.login-form .group .input,
.login-form .group .button{
	width:100%;
	color:#fff;
	display:block;
}
.login-form .group .input,
.login-form .group .button{
	border:none;
	padding:15px 20px;
	border: solid 0.5px;
	border-radius:25px;
	background:rgba(255,255,255,.1);
}
.login-form .group input[data-type="password"]{
	text-security:circle;
	-webkit-text-security:circle;
}
.login-form .group .label{
	color:#aaa;
	font-size:12px;
}
.login-form .group .button{
	background:#1161ee;
	cursor:pointer;
}
.login-form .group label .icon{
	width:15px;
	height:15px;
	border-radius:2px;
	position:relative;
	display:inline-block;
	background:rgba(255,255,255,.1);
}
.login-form .group label .icon:before,
.login-form .group label .icon:after{
	content:'';
	width:10px;
	height:2px;
	background:#fff;
	position:absolute;
	transition:all .2s ease-in-out 0s;
}
.login-form .group label .icon:before{
	left:3px;
	width:5px;
	bottom:6px;
	transform:scale(0) rotate(0);
}
.login-form .group label .icon:after{
	top:6px;
	right:0;
	transform:scale(0) rotate(0);
}
.login-form .group .check:checked + label{
	color:#fff;
}
.login-form .group .check:checked + label .icon{
	background:#1161ee;
}
.login-form .group .check:checked + label .icon:before{
	transform:scale(1) rotate(45deg);
}
.login-form .group .check:checked + label .icon:after{
	transform:scale(1) rotate(-45deg);
}
.login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm{
	transform:rotate(0);
}
.login-html .sign-up:checked + .tab + .login-form .sign-up-htm{
	transform:rotate(0);
}

.hr{
	height:2px;
	margin:60px 0 50px 0;
	background:rgba(255,255,255,.2);
}
.foot-lnk{
	text-align:center;
}

.abcRioButtonLightBlue{
	width:100% !important;
	background-color: transparent;	
	border-radius:25px;
}

.abcRioButton{
	box-shadow:none
}
</style>

<div id="bodyLogin" >
<div class="login-wrap" >
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Email</label>
					<input id="userSI" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="passSI" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<br>
				</div>
				<div class="group">
					<a class="button" style="text-align:center" onClick="signIn('signIn');">Sign In</a><br>
					<div style="text-align:center">
						<div class="separator"> Or</div>
					</div>
					<div class="g-signin2 " data-onsuccess="onSignIn" style="margin-top:10px; width:100%; background-color:#fff; border-radius: 25px;padding:5px"></div>
				</div>
				<div class="hr"></div>
				
			
			</div>
			<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">Email</label>
					<input id="userSU" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Name</label>
					<input id="nameSU" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="passSU" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Repeat Password</label>
					<input id="passRSU" type="password" class="input" data-type="password">
				</div>
				
				
				<div class="group">
					<a class="button" style="text-align:center" onClick="signIn('signUp');">Sign Up</a><br>
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
				
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<script>

  function onSignIn(googleUser) {
	// Useful data for your client-side scripts:
	var profile = googleUser.getBasicProfile();
	console.log("ID: " + profile.getId()); // Don't send this directly to your server!
	console.log('Full Name: ' + profile.getName());
	console.log('Given Name: ' + profile.getGivenName());
	console.log('Family Name: ' + profile.getFamilyName());
	console.log("Image URL: " + profile.getImageUrl());
	console.log("Email: " + profile.getEmail());

	// The ID token you need to pass to your backend:
	var id_token = googleUser.getAuthResponse().id_token;
	console.log("ID Token: " + id_token);
	
		formData= new FormData();
		formData.append("userSI", "");
	    formData.append("passSI", "");
		formData.append("userG", profile.getEmail());
	    formData.append("passG", profile.getEmail());
		formData.append("nameG", profile.getName());
		formData.append("imageG", profile.getImageUrl());
	    formData.append("action", "gmail");
	    formData.append("userSU", "");
	    formData.append("passSU", "");
	    formData.append("nameSU", "");
   
		$.ajax({  
			url:"signin.php",  
			method:"POST",  
			data:{formData: formData},  
			data: formData,
			processData: false,
			contentType: false,  
			success:function(data)  
			{  
				var data = JSON.parse(data);
				if (data != null)
				{
					if(data.pesan !="")
					{
						if (data.pesan == "sukses" && data.pesan != "undefined")
						{
							window.history.back();						
						}
						else{
							showErrorMesgGrowl(data.pesan);  
						}
					}
				}
			}  
	   });
	
  }
  
  
   function onLoad() {
      gapi.load('auth2', function() {
        gapi.auth2.init();
      });
    }
  
  
    function onLoadCallback() {
        $('span[id^="not_signed_"]').html('SIGN IN WITH GOOGLE');
    }
	
	function showErrorMesgGrowl(mesg) {
		$.bootstrapGrowl(mesg, {
			type: 'danger',
			allow_dismiss: true,
			align: 'center',
			delay: 60000
		});
	}
	
	function showSuccessMesgGrowl(mesg) {
		$.bootstrapGrowl(mesg, {
			type: 'success',
			allow_dismiss: true,
			align: 'center',
			delay: 10000
		});
	}
	
	function clear()
	{
		$("#userSI").val('');
		$("#passSI").val('');
		
		$("#userSU").val('');
		$("#passSU").val('');
		$("#nameSU").val('');
		$("#passRSU").val('');
	}
	
	function signIn(action)
	{
		var userSI = $("#userSI").val();
		var passSI = $("#passSI").val();
		var action = action;
		
		var userSU = $("#userSU").val();
		var passSU = $("#passSU").val();
		var nameSU = $("#nameSU").val();
		var passRSU = $("#passRSU").val();
		
		if(action=="signIn")
		{
			if(userSI =="")
			{
				showErrorMesgGrowl("Email Should not be empty");  
				return false;  	
			}
			
			if(passSI == "")
			{
				showErrorMesgGrowl("Password Should not be empty");  
				return false;  	
			}
		}
		
		if(action=="signUp")
		{
			if(userSU =="")
			{
				showErrorMesgGrowl("Email Should not be empty");  
				return false;  	
			}
			if(nameSU == "")
			{
				showErrorMesgGrowl("Name Should not be empty");  
				return false;  	
			}
			if(passSU == "")
			{
				showErrorMesgGrowl("Password Should not be empty");  
				return false;  	
			}
			if(passRSU == "")
			{
				showErrorMesgGrowl("Repeat Password Should not be empty");  
				return false;  	
			}
			if(passSU != passRSU)
			{
				showErrorMesgGrowl("Password and Repeat Password is not match");  
				return false;  	
			}
		}
		
		formData= new FormData();
	    formData.append("userSI", userSI);
	    formData.append("passSI", passSI);
	    formData.append("action", action);
	    formData.append("userSU", userSU);
	    formData.append("passSU", passSU);
	    formData.append("nameSU", nameSU);
		formData.append("userG", "");
	    formData.append("passG", "");
		formData.append("nameG", "");
		formData.append("imageG", "");

	   
		$.ajax({  
			url:"signin.php",  
			method:"POST",  
			data:{formData: formData},  
			data: formData,
			processData: false,
			contentType: false,  
			success:function(data)  
			{  
				var data = JSON.parse(data);
				if(data.pesan !="")
				{
					if (data.pesan == "sukses")
					{
						window.history.back();
					}
					else{
						showErrorMesgGrowl(data.pesan);  
					}
				}
				
				//clear();
			}  
	   });
	}
	
	
</script>