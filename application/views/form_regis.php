<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<body style="background-color: gray;">
	<div class="container" style="background-color: white;margin-top: 5%;width: 45%;">
		<form class="text-center border border-light p-5" action="#!">

			<p class="h4 mb-4">Daftar Dulu Gan</p>

			<div class="form-row mb-4">
				<div class="col">
					<input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name">
				</div>
				<div class="col">
					<input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name">
				</div>
			</div>
			<input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail">
			<input type="password" id="defaultRegisterFormPassword" class="form-control mb-4" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
			<input type="text" id="defaultRegisterPhonePassword" class="form-control" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock">
			<input class="btn btn-info my-4 btn-block" type="submit" value="Lanjut Daftar">
		</form>
	</div>
</body>
