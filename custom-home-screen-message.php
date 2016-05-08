<?php
include "layouts/header.php";
?>
<div class="form-title">
	<p>Custom home screen message</p>
</div>
<div class="container main home-screen">
		<div class="row page-title">
			<div class="col-xs-12">
					<p>Input home screen message:</p>
					<br>
					<div class="hr"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-6 input-message">
				<p>To get started, please select the icon you need further assistance with</p>
				<textarea rows="5" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed luctus ante. Nulla consequat erat ac"></textarea>
				<p class="note">*max 3 lines. XX characters. Limit to max characters if blank the default message will show. </p>
			</div>
			<div class="col-xs-12 col-sm-6 image">
				<img src="assets/images/image-phone-customhomemessage.png" alt="" class="img-responsive" >
			</div>
		</div>


</div>
<?php
include "layouts/back-save.php";
include "layouts/footer.php";
?>
