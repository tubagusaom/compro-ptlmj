<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pendaftaran | <?=$aplikasi->singkatan_unit?></title>

	<link rel="shortcut icon" href="<?=base_url()?>assets/icon-pendaftaran.png" type="image/x-icon" />

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/_tera_byte/form/css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/_tera_byte/form/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstraps/font-awesome.min.css" type="text/css"/>

	<!-- Main Style Css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/_tera_byte/form/css/style.css"/>

	<!-- Main Style Wizard -->
	   <link rel="stylesheet" href="<?php echo base_url() ?>assets/_tera_byte/form/css/wizard.css"/>


		 <style media="screen">

		 </style>

</head>

<body>



	<div class="page-content">

		<div id="formHeader" class="form-header">
			<div class="wizard-header-2">
				<ul class="wizard2">
				  <li class="active2">
				    <span>Skema</span>
				  </li>
				  <li>
				    <span>APL-01</span>
				  </li>
				  <li>
				    <span>Dokumen</span>
				  </li>
				  <li>
				    <span>APL-02</span>
				  </li>
				</ul>
			</div>
		</div>

		<div class="form-v1-content">
			<div class="wizard-form">
			      <form id="formRegister" class="form-register" action="#" method="post">

							<!-- <div class="logo-form">
								<a href="<?=base_url()?>" title="Kembali ke beranda">
									<font><i class="fa fa-home"></i></font>
									<img src="<?php echo base_url() ?>assets/img/logo1_transparent.png" alt="tera_byte">
								</a>
							</div> -->

			        <div id="form-total">

									<h2>
										<p class="step-icon"><span>01</span></p>
										<span class="step-text">Skema Sertifikasi</span>
									</h2>
									<?php
										$this->load->view('pendaftaran/step_1');
									?>

			            <h2>
			              <p class="step-icon"><span>02</span></p>
			              <span class="step-text">Personal Infomation</span>
			            </h2>
			            <?php
			              $this->load->view('pendaftaran/step_2');
			            ?>

			            <h2>
			              <p class="step-icon"><span>03</span></p>
			              <span class="step-text">Connect Bank Account</span>
			            </h2>
			            <?php
			              $this->load->view('pendaftaran/step_3');
			            ?>

			            <h2>
			              <p class="step-icon"><span>04</span></p>
			              <span class="step-text">Set Financial Goals</span>
			            </h2>
			            <?php
			              $this->load->view('pendaftaran/step_4');
			            ?>

			        </div>
			      </form>
			</div>

		</div>


	</div>

	<script>
		window.onscroll = function() {myFunction()};

		var header = document.getElementById("formHeader");

		// var header = $('#formHeader');
		var sticky = header.offsetTop;

		function myFunction() {
		  if (window.pageYOffset > sticky) {
		    header.classList.add("sticky");
				header.classList.add("shadow1");
				header.classList.remove("shadow2");
		  } else {
		    header.classList.remove("sticky");
				header.classList.remove("shadow1");
				header.classList.add("shadow2");
		  }
		}
	</script>

	<script src="<?php echo base_url() ?>assets/_tera_byte/form/js/jquery-3.3.1.min.js"></script>
	<script src="<?php echo base_url() ?>assets/_tera_byte/form/js/jquery.steps.js"></script>
	<script src="<?php echo base_url() ?>assets/_tera_byte/form/js/main.js"></script>



</body>
</html>
