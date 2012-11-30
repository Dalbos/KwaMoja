<?php include 'includes/twitter.php'; ?>
<script type="text/javascript" src = "javascripts/distal/trunk/distal.js"></script><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
			"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><title>KwaMoja - Manage your business better</title><link rel="shortcut icon" href="/favicon.ico" /><link rel="icon" href="/favicon.ico" /><meta http-equiv="Content-Type" content="application/html; charset=utf-8; content="no-cache" /></head><script type="text/javascript" src="javascripts/library.js"></script><link rel="stylesheet" type="text/css" href="css/default.css" />
<body onload="searchTwitter();">

<div id="Mask">
</div>

<div id="SubWindow">
<div id="title_bar"></div>
	<div id="contents">
	</div>
</div>

<div class="tabs">

	<div class="tab">
		<?php include 'home.php'; ?>
	</div>

	<div class="tab">
		<input type="radio" id="tab-2" name="tab-group-1">
		<label for="tab-2">News</label>
				<div class="content">
			<p class="triangle-isosceles">11/11/2012 : First patch is applied to <i>KwaMoja</i> develop branch by Munir Patel.</p>
			<p class="triangle-isosceles">10/11/2012 : New github repository is created.</p>
		</div>
	</div>

	<div class="tab">
		<?php include 'features.php'; ?>
	</div>

	<div class="tab">
		<input type="radio" id="tab-4" name="tab-group-1">
		<label for="tab-4">Development</label>

		<div class="content">
			<?php include 'development.php'; ?>
		</div>
	</div>

	<div class="tab">
		<input type="radio" id="tab-5" name="tab-group-1">
		<label for="tab-5">Community</label>
		<div class="content">
			<?php include 'community.php'; ?>
		</div>
	</div>

	<div class="tab">
		<input type="radio" id="tab-6" name="tab-group-1">
		<label for="tab-6">Support</label>

		<div class="content">
			<?php include 'support.php'; ?>
		</div>
	</div>

	<div class="tab">
		<input type="radio" id="tab-7" name="tab-group-1">
		<label for="tab-7">FAQ</label>

		<div class="content">
			<?php include 'faq.php'; ?>
		</div>
	</div>
</div>
</body>