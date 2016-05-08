<?php
include "layouts/header.php";
?>
<div class="form-title">
	<p>New Client Questionaire</p>
</div>
<div class="container main new-client">
	<div class="row">
		<div class="col-xs-12">
			<form action="#">
				<div class="row datos">
					<div class="form-label">
						<label for="name">Broker/employer name:</label>
					</div>
					<div class="form-input">
						<input id="name" type="text" placeholder="Lorem ipsum">
					</div>
				</div>
				<div class="row datos">
					<div class="form-label">
						<label for="client-name">New client company name:</label>
					</div>
					<div class="form-input">
						<input id="client-name" type="text" placeholder="Suspendisse Pharetra ">
					</div>
				</div>
				<div class="row datos">
					<div class="form-label">
						<label for="company-logo">Company logo:</label>
					</div>
					<div class="form-input">
						<div class="start-upload-img">
							<input id="company-logo" type="file" accept="image/*">
							<button type="button" class="btn"><span class="fa fa-upload" aria-hidden="true"></span>&nbsp;&nbsp;Upload File</button>
						</div>
						<div class="img-input">
							<div class="img-pre">
								<img src="" alt="" class="img-responsive">
								<p></p>
							</div>
							<div class="acc-info">
								<button type="button" class="btn"><span class="fa fa-upload" aria-hidden="true"></span>&nbsp;&nbsp;Upload File</button>
								<div class="media">
									<div class="media-left">
										<i class="fa fa-info-circle" aria-hidden="true"></i>
									</div>
									<div class="media-body">
										<p></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row datos">
					<div class="form-label">
						<label for="manager-name">Account manager name::</label>
					</div>
					<div class="form-input">
						<input id="manager-name" type="text" placeholder="Curabitur Dui">
					</div>
				</div>
				<div class="row datos">
					<div class="form-label">
						<label for="manager-email">Account manager email:</label>
					</div>
					<div class="form-input">
						<input id="manager-email" type="email" placeholder="lorem.ipsum@mail.com">
					</div>
				</div>
				<div class="row datos">
					<div class="form-label">
						<label for="manager-number">Account manager phone number:</label>
					</div>
					<div class="form-input">
						<input id="manager-number" type="number" placeholder="55 55 55 55 55">
					</div>
				</div>
				<div class="row datos">
					<div class="form-label">
						<label for="number-employeess">Number of employees:</label>
					</div>
					<div class="form-input">
						<input id="number-employeess" type="number" placeholder="102">
					</div>
				</div>
				<div class="row datos">
					<div class="form-label">
						<label for="comments">Additional comments:</label>
					</div>
					<div class="form-input comments">
						<textarea name="" id="comments" rows="8" placeholder="Ut pretium congue ipsum quis feugiat. Fusce consectetur eu nulla a tincidunt. Vestibulum ipsum risus, pellentesque vel dignissim vel, auctor eu libero. Nullam vestibulum augue egestas, faucibus nulla vitae"></textarea>
					</div>
				</div>
				<div class="row datos">
					<div class="form-label"></div>
					<div class="form-input submit">
						<button type="submit">Submit</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<?php
include "layouts/footer.php";
?>
