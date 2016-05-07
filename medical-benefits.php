<?php
include "layouts/header.php";
?>
<div class="form-title">
	<p>Medical benefits</p>
</div>
<div class="container main medical-benefits">
	<div class="row resourses-title">
		<div class="col-xs-12">
				<p>Resource assets</p>
				<br>
				<div class="hr"></div>
		</div>
	</div>
	<div class="row summary">
		<div class="col-xs-2 file-title">Summary name:</div>
		<div class="col-xs-8 name"><p></p></div>
		<div class="col-xs-2 button-upload"><button type="button" class="btn"><span class="glyphicon glyphicon-open" aria-hidden="true"></span>&nbsp;&nbsp;Upload File</button></div>
	</div>
	<div class="row summary">
		<div class="col-xs-2 file-title">Summary name:</div>
		<div class="col-xs-8 name"><p></p></div>
		<div class="col-xs-2 button-upload"><button type="button" class="btn"><span class="glyphicon glyphicon-open" aria-hidden="true"></span>&nbsp;&nbsp;Upload File</button></div>
	</div>
	<div class="row button-add">
		<div class="col-xs-12">
			<button type="button" class="btn"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>&nbsp;&nbsp;Add new plan</button>
		</div>
	</div>
</div>
<?php
include "layouts/back-save.php";
include "layouts/footer.php";
?>
