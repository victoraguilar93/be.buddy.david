<?php
include "layouts/header_login.php";
?>

<div class="container-fluid main login">
    <div class="row page-title">
        <div class="col-xs-12">
                <p>Restore Employer Password</p>
                <br>
                <div class="hr"></div>
        </div>
    </div>
	<div class="row">
		<div class="col-xs-12">
			<form action="#">
                <div class="input-group">
                  <span class="input-group-addon" id="user-login"><i class="fa fa-user" aria-hidden="true"></i></span>
                  <input type="password" class="form-control" placeholder="Password" aria-describedby="user-login">
                </div>
                <div class="input-group">
                  <span class="input-group-addon" id="pass-login"><i class="fa fa-key" aria-hidden="true"></i></span>
                  <input type="password" class="form-control" placeholder="Confirm Password" aria-describedby="pass-login">
                </div>
                <div class="form-input submit">
                    <button type="submit"><i class="fa fa-unlock-alt" aria-hidden="true"></i>Restore</button>
                </div>
			</form>
		</div>
	</div>
</div>
<?php
include "layouts/footer.php";
?>
