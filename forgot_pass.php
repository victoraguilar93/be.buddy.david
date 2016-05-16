<?php
include "layouts/header_login.php";
?>

<div class="container-fluid main login">
    <div class="row page-title">
        <div class="col-xs-12">
                <p>Forgot Employer Password</p>
                <br>
                <div class="hr"></div>
        </div>
    </div>
	<div class="row">
		<div class="col-xs-12">
			<form action="#">
                <div class="input-group">
                  <span class="input-group-addon" id="user-login"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                  <input type="email" class="form-control" placeholder="Email" aria-describedby="user-login">
                </div>
                <div class="form-input submit">
                    <button type="submit"><i class="fa fa-check" aria-hidden="true"></i>Send</button>
                </div>
			</form>
		</div>
	</div>
</div>
<?php
include "layouts/footer.php";
?>
