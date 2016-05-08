<?php
include "layouts/header.php";
?>
<div class="form-title">
	<p>Medical benefits</p>
</div>
<div class="container main client-resourses  company-information medical-benefits">
		<div class="row page-title">
			<div class="col-xs-12">
					<div class="col-xs-12 data-inputs">
						<div class="col-xs-3 col-xs-offset-1 company-name">
							<label for="company-name">Carrier name:</label>
						</div>
						<div class="col-xs-5 input-company-name">
							<select name="" id="">
								<option value="guardian">Guadian</option>
							</select>
						</div>
					</div>
					<div class="col-xs-12 data-inputs">
						<div class="col-xs-3 col-xs-offset-1 company-name">
							<label for="company-name">Policy number:</label>
						</div>
						<div class="col-xs-5 input-company-name">
							<input type="number" placeholder="55 55 55 55 55 55">
						</div>
					</div>
					<div class="col-xs-12 data-inputs">
						<div class="col-xs-3 col-xs-offset-1 company-name">
							<label for="company-name">Carrier phone number:</label>
						</div>
						<div class="col-xs-5 input-company-name">
							<input type="number" placeholder="66 66 66 66 66 66 66">
						</div>
					</div>
					<div class="col-xs-12 data-inputs">
						<div class="col-xs-3 col-xs-offset-1 company-name">
							<label for="company-name">Carrier website:</label>
						</div>
						<div class="col-xs-5 input-company-name">
							<input type="text" placeholder="www.loremipsum.com">
						</div>
					</div>
					<p class="col-xs-12">Plan summaries:</p>
					<div class="col-xs-12 hr"></div>
			</div>
		</div>
		<div class="row summary">
			<div class="col-xs-2 file-title">Summary name:</div>
			<div class="col-xs-8 name">
				<p><span class="pdf-icon fa fa-file-pdf-o"></span></p>
			</div>
			<div class="col-xs-2 button-upload">
				<button type="button" class="btn" onclick="upload_clientresourses(this)"><span class="fa fa-upload" aria-hidden="true"></span>&nbsp;&nbsp;Upload File</button>
				<input type="file" class="subir-archivo hide" onchange="change_inptut_clientresourses(this, 1)" accept="application/pdf">
			</div>
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
