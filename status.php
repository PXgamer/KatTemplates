<!DOCTYPE html>
<html>
	<head>
	    <meta charset="utf-8">
		<title>KAT Status</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="assets/css/screen.css">

		<link rel="shortcut icon" href="favicon.ico"/>

		<meta name="description" content="KAT Status">
		<link rel="manifest" href="manifest.json">
		<?php include 'ping_cron.php' ?>
	</head>
	<body>
		<header>
			<nav>
				<h1 class="logo">
					<a href="<?php echo $_SERVER['HTTPS'] ? "http://" . $_SERVER['HTTP_HOST'] : "https://" . $_SERVER['HTTP_HOST']; ?>" style="text-decoration:none">
						<img src="assets/img/logo-small.svg" align="left" border=0 width="72">
						<span>Kickass<strong>Torrents</strong>
						<sub title="100% / 100% / 100%">Site status</sub></span>
					</a>
				</h1>
				<a class="backToSite" href="https:/ourdomain.cr/full/">OUR DOMAIN HERE</a>
			</nav>
		</header>
		<div class="main-content">
			<div class="content">
				<section class="b-primaryDomain">
					<h5>Currently KickassTorrents primary domain is:</h5>
					<div class="w-domainLink">
						<a class="domainLink" href="https://ourdomain.cr/">ourdomain.cr</a>
					</div>
				</section>
				<section>
									<section class="b-issue">
							<i class="b-issue-status-icon icon-checkmark-circle-green"></i>
							<h2>All systems are up and running</h2>
							<p id="links_text" title="100%" style="color:red">KickassTorrents has been blocked in India. Try changing DNS server to 8.8.8.8</p>
							<div class="clear"></div>
						</section>
									<section class="b-proxy">
						<p class="grey">Can't access <a href="https://ourdomain.cr/">ourdomain.cr</a>? Is it slow or unresponsive? Getting DNS error? Try to use one of our safe mirrors:</p>
						<ul>
							<?php
								foreach ($http_status as $site => $status) {
									echo "<li><a href=\"$site\" class=\"domainLink\"><span class=\"";
									if ($status > 400 || $status == 0) {
										echo "icon-cross-circle";
									}
									else {
										echo "icon-checkmark-circle-green";
									}
									echo "\"></span> $site</a></li>";
								}
							?>
						</ul>
					</section>
				</section>
			</div>
		</div>
		<footer>
			<section class="b-request">
				<h2>Still can't get to the site?</h2>
				<p class="grey">Tell us about your problem</p>
				<a href="mailto:email.address@domain.name?Subject=Report%20from%20ourdomain" class="btn">CONTACT US</a>
			</section>
		</footer>
	</body>
</html>
