<?php
include "layouts/header.php";
?>
<div class="form-title">
	<p>Benefits assistance - Contact information</p>
</div>
<div class="container main cntact_information">
	<div class="row">
		<div class="col-xs-12">
			<form action="#">
				<ol>
					<li>
						<input type="text" placeholder="Contact name">
						<select>
							<option value="" selected disabled=true>Title</option>
							<option value="Mr.">Mr.</option>
							<option value="Mrs.">Mrs.</option>
						</select>
						<input type="text" placeholder="Phone">
						<input type="text" placeholder="Email">
					</li>
				</ol>
				<div class="add-contact">
					<button type="button" class="btn"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>&nbsp;&nbsp;Add new contact</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php
include "layouts/back-save.php";
include "layouts/footer.php";
?>
