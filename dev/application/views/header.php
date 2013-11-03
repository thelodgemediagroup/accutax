<!DOCTYPE html>
<html>
<head>
	<title>Accutax</title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_asset('css/style.css'); ?>">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,400italic' rel='stylesheet' type='text/css'>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.css" rel="stylesheet">
</head>
<body>
	<div class="wrapper">
		<div class="header wrapper">
			<div class="inner-header container">
				<img src="<?php echo get_asset('images/accutax_logo.png'); ?>" alt="Accutax Accounting" />
				<ul class="main-nav floatright">
					<li class="dropdown">
						<a href="<?php echo base_url('business'); ?>">Business <i class="fa fa-angle-down"></i></a>
						<ul class="drop-down">
							<li><a href="<?php echo base_url('business/bookkeeping'); ?>">Bookkeeping</a></li>
							<li><a href="<?php echo base_url('business/payroll'); ?>">Payroll</a></li>
							<li><a href="<?php echo base_url('business/income_tax_returns'); ?>">Income Tax Returns</a></li>
							<li><a href="<?php echo base_url('business/quickbooks'); ?>">Quickbooks</a></li>
							<li><a href="<?php echo base_url('business/irs_help'); ?>">IRS Help</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="<?php echo base_url('personal/'); ?>">Personal <i class="fa fa-angle-down"></i></a>
						<ul class="drop-down">
							<li><a href="<?php echo base_url('personal/income_tax_returns'); ?>">Income Tax Returns</a></li>
							<li><a href="<?php echo base_url('personal/quickbooks'); ?>">Quickbooks</a></li>
							<li><a href="<?php echo base_url('personal/irs_help'); ?>">IRS Help</a></li>
						</ul>
					</li>
					<li><a href="<?php echo base_url('resources/'); ?>">Resources</a></li>
					<li><a href="<?php echo base_url('about/'); ?>">About</a></li>
					<li><a href="<?php echo base_url('contact/'); ?>">Contact Us</a></li>
				</ul><!--/ .main-nav -->
			</div><!--/ .container -->
		</div><!--/ .header -->