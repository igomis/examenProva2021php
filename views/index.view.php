<!DOCTYPE HTML>
<html>
    <head>
        <title>BOOBLE D.C</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="/assets/css/main.css" />
        <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    </head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">
				<!-- Header -->
					<header id="header">
                        <?php loadTemplate('templates.header'); ?>
					</header>
				<!-- Menu -->
					<nav id="menu">
                        <?php loadTemplate('templates.menu'); ?>
					</nav>
				<!-- Main -->
					<div id="main">
                        <?php loadTemplate('templates.main',compact('employees')); ?>
					</div>
				<!-- Footer -->
					<footer id="footer">
                        <?php loadTemplate('templates/footer'); ?>
					</footer>
			</div>
		<!-- Scripts -->
			<script src="/assets/js/jquery.min.js"></script>
			<script src="/assets/js/browser.min.js"></script>
			<script src="/assets/js/breakpoints.min.js"></script>
			<script src="/assets/js/util.js"></script>
			<script src="/assets/js/main.js"></script>
	</body>
</html>