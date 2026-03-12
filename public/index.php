<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HostSpectra — Self-Hosted SIEM for Linux Servers</title>
	<meta name="description" content="HostSpectra: Real-time threat detection, ML anomaly scoring, and automated incident response for Linux servers — fully containerized.">
	<link rel="icon" type="image/svg+xml" href="/favicon.svg">
	<link rel="preload" href="/css/style.css" as="style">
	<link rel="preload" href="/js/script.js" as="script">
	<link rel="stylesheet" href="/css/style.css">
</head>
<body>
	<?php include __DIR__ . '/components/navbar.html'; ?>
	<?php include __DIR__ . '/components/hero.html'; ?>
	<main class="container">
		<div id="overview"><?php include __DIR__ . '/components/sections/overview.html'; ?></div>
		<div id="features"><?php include __DIR__ . '/components/sections/features.html'; ?></div>
		<div id="architecture"><?php include __DIR__ . '/components/sections/architecture.html'; ?></div>
		<div id="data-flow"><?php include __DIR__ . '/components/sections/data-flow.html'; ?></div>
		<div id="deployment"><?php include __DIR__ . '/components/sections/deployment.html'; ?></div>
		<div id="security"><?php include __DIR__ . '/components/sections/security.html'; ?></div>
		<div id="stats"><?php include __DIR__ . '/components/sections/stats.html'; ?></div>
		<div id="faq"><?php include __DIR__ . '/components/sections/faq.html'; ?></div>
		<div id="support"><?php include __DIR__ . '/components/sections/support.html'; ?></div>
	</main>
	<?php include __DIR__ . '/components/footer.html'; ?>
	<button class="back-to-top" id="backToTop" aria-label="Back to top">↑</button>
	<script src="/js/script.js" defer></script>
	<script>
		document.addEventListener('DOMContentLoaded', function() {
			if (typeof initApp === 'function') initApp();
		});
	</script>
</body>
</html>
