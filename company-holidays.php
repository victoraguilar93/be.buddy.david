<?php
include "layouts/header.php";
?>
<div class="form-title">
	<p>Company Holidays</p>
</div>
<div class="container main company-holidays">
		<div class="row page-title">
			<div class="col-xs-12">
					<p>HOLIDAYS(check all that apply):</p>
					<br>
					<div class="hr"></div>
			</div>
		</div>
		<section class="holidays">
			<div class="row holiday">
				<div class="col-xs-6 name">
					<input id="holi1" type="checkbox">
					<label for="holi1"><span></span>New Year’s Eve</label>
				</div>
				<div class="col-xs-6 date">
					<p>31/12/2015</p>
				</div>
				<div class="col-xs-12"><hr></div>
			</div>
			<div class="row holiday">
				<div class="col-xs-6 name">
					<input id="holi2" type="checkbox">
					<label for="holi2"><span></span>New Year’s Day</label>
				</div>
				<div class="col-xs-6 date">
					<p>01/01/2016</p>
				</div>
				<div class="col-xs-12"><hr></div>
			</div>
			<div class="row holiday">
				<div class="col-xs-6 name">
					<input id="holi3" type="checkbox">
					<label for="holi3"><span></span>Martin Luther King Day</label>
				</div>
				<div class="col-xs-6 date">
					<p>18/01/2016</p>
				</div>
				<div class="col-xs-12"><hr></div>
			</div>
			<div class="row holiday">
				<div class="col-xs-6 name">
					<input id="holi4" type="checkbox">
					<label for="holi4"><span></span>Presidents Day</label>
				</div>
				<div class="col-xs-6 date">
					<p>15/02/2016</p>
				</div>
				<div class="col-xs-12"><hr></div>
			</div>
			<div class="row holiday">
				<div class="col-xs-6 name">
					<input id="holi5" type="checkbox">
					<label for="holi5"><span></span>Memorial Day</label>
				</div>
				<div class="col-xs-6 date">
					<p>30/05/2016</p>
				</div>
				<div class="col-xs-12"><hr></div>
			</div>
			<div class="row holiday">
				<div class="col-xs-6 name">
					<input id="holi6" type="checkbox">
					<label for="holi6"><span></span>Independence Day</label>
				</div>
				<div class="col-xs-6 date">
					<p>04/07/2016</p>
				</div>
				<div class="col-xs-12"><hr></div>
			</div>
			<div class="row holiday">
				<div class="col-xs-6 name">
					<input id="holi7" type="checkbox">
					<label for="holi7"><span></span>Thanksgiving Day</label>
				</div>
				<div class="col-xs-6 date">
					<p>24/11/2016</p>
				</div>
				<div class="col-xs-12"><hr></div>
			</div>
			<div class="row holiday">
				<div class="col-xs-6 name">
					<input id="holi8" type="checkbox">
					<label for="holi8"><span></span>Day after Thanksgiving</label>
				</div>
				<div class="col-xs-6 date">
					<p>25/11/2016</p>
				</div>
				<div class="col-xs-12"><hr></div>
			</div>
			<div class="row holiday">
				<div class="col-xs-6 name">
					<input id="holi9" type="checkbox">
					<label for="holi9"><span></span>Christmas Eve</label>
				</div>
				<div class="col-xs-6 date">
					<p>24/12/2016</p>
				</div>
				<div class="col-xs-12"><hr></div>
			</div>
			<div class="row holiday">
				<div class="col-xs-6 name">
					<input id="10" type="checkbox">
					<label for="10"><span></span>Christmas Day</label>
				</div>
				<div class="col-xs-6 date">
					<p>25/12/2016</p>
				</div>
				<div class="col-xs-12"><hr></div>
			</div>
			<div class="row holiday">
				<div class="col-xs-6 name">
					<input id="holi11" type="checkbox">
					<label for="holi11"><span></span>Other</label>
				</div>
				<div class="col-xs-6 date">
					<p>00/00/0000</p>
				</div>
				<div class="col-xs-12"><hr></div>
			</div>
			<div class="row button-add">
			<div class="col-xs-12">
				<button type="button" class="btn"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>&nbsp;&nbsp;Add new holiday</button>
			</div>
		</div>
		</section>

</div>
<?php
include "layouts/back-save.php";
include "layouts/footer.php";
?>
