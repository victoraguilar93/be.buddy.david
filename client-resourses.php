<?php
include "layouts/header.php";
?>
<div class="form-title">
	<p>Medical benefits</p>
</div>
<div class="container main client-resourses">
	<form action="">
		<div class="row page-title">
			<div class="col-xs-12">
					<p>Resource assets</p>
					<br>
					<div class="hr"></div>
			</div>
		</div>
		<div class="row summary">
			<div class="col-xs-2 file-title">Summary name:</div>
			<div class="col-xs-8 name">
				<p><span class="status"></span></p>
			</div>
			<div class="col-xs-2 button-upload">
				<button type="button" class="btn" onclick="upload_clientresourses(this)"><span class="fa fa-upload" aria-hidden="true"></span>&nbsp;&nbsp;Upload File</button>
				<input type="file" class="subir-archivo hide" onchange="change_inptut_clientresourses(this, 0)">
			</div>
		</div>
		<div class="row button-add">
			<div class="col-xs-12">
				<button type="button" class="btn"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>&nbsp;&nbsp;Add new plan</button>
			</div>
		</div>
	</form>
</div>
<?php
include "layouts/back-save.php";
include "layouts/footer.php";
?>
