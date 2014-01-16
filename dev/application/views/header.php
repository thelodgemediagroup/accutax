<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<meta name="description" content="<?php echo $page_desc; ?>" />
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_asset('css/style.css'); ?>">
		<!--[if lt IE 9]><script src="<?php get_asset('js/respond.js'); ?>"></script><![endif]-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,400italic' rel='stylesheet' type='text/css'>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.css" rel="stylesheet">
</head>
<body>
	<div class="wrapper">
		<div class="header wrapper clear">
			<div class="inner-header container">
				<a href="<?php echo base_url(); ?>" class="header-logo"><img src="<?php echo get_asset('images/accutax_logo.png'); ?>" alt="Accutax Accounting" /></a>
				<p class="header-phone"><i class="fa fa-phone"></i> &nbsp; (586) 580-3040</p>
				<ul class="main-nav floatright">
					<li class="dropdown">
						<a href="<?php echo base_url('business'); ?>">Business <i class="fa fa-angle-down"></i></a>
						<ul class="drop-down">
							<li><a href="<?php echo base_url('business/accounting'); ?>">Accounting</a></li>
							<li><a href="<?php echo base_url('business/payroll'); ?>">Payroll</a></li>
							<li><a href="<?php echo base_url('business/income_tax_returns'); ?>">Income Tax Returns</a></li>
							<li><a href="<?php echo base_url('business/quickbooks'); ?>">QuickBooks</a></li>
							<li><a href="<?php echo base_url('business/irs_help'); ?>">IRS Help</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="<?php echo base_url('personal/'); ?>">Personal <i class="fa fa-angle-down"></i></a>
						<ul class="drop-down">
							<li><a href="<?php echo base_url('personal/income_tax_returns'); ?>">Income Tax Returns</a></li>
							<li><a href="<?php echo base_url('personal/quickbooks'); ?>">QuickBooks</a></li>
							<li><a href="<?php echo base_url('personal/irs_help'); ?>">IRS Help</a></li>
						</ul>
					</li>
					<li><a href="<?php echo base_url('resources/'); ?>">Resources</a></li>
					<li><a href="<?php echo base_url('about/'); ?>">About</a></li>
					<li><a href="<?php echo base_url('contact/'); ?>">Contact Us</a></li>
				</ul><!--/ .main-nav -->
				<div class="mobile-nav">
					<select>
							<option value="">Navigation</option>
							<option value="<?php echo base_url('business'); ?>">Business</option>
							<option value="<?php echo base_url('personal'); ?>">Personal</option>
							<option value="<?php echo base_url('resources'); ?>">Resources</option>
							<option value="<?php echo base_url('about'); ?>">About</option>
							<option value="<?php echo base_url('contact'); ?>">Contact</option>
					</select>
				</div>
			</div><!--/ .container -->
		</div><!--/ .header -->