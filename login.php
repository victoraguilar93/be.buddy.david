<?php
include "layouts/header_login.php";
?>

<div class="container-fluid main login">
    <div class="row page-title">
        <div class="col-xs-12">
                <p>Employer Login</p>
                <br>
                <div class="hr"></div>
        </div>
    </div>
	<div class="row">
		<div class="col-xs-12">
			<form action="#">
                <div class="input-group">
                  <span class="input-group-addon" id="user-login"><i class="fa fa-user" aria-hidden="true"></i></span>
                  <input type="email" class="form-control" placeholder="Email" aria-describedby="user-login">
                </div>
                <div class="input-group">
                  <span class="input-group-addon" id="pass-login"><i class="fa fa-key" aria-hidden="true"></i></span>
                  <input type="password" class="form-control" placeholder="Password" aria-describedby="pass-login">
                </div>
                <div class="input-group">
                  <a href="forgot_pass.php"><i class="fa fa-unlock" aria-hidden="true"></i>&nbsp;&nbsp;I forgot my password!</a>
                </div>
                <div class="form-input submit">
                    <button type="submit"><i class="fa fa-sign-in" aria-hidden="true"></i>Sing In</button>
                </div>
			</form>
		</div>
	</div>
</div>
<?php
include "layouts/footer.php";
?>
