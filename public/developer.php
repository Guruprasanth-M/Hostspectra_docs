<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Developer — HostSpectra</title>
	<meta name="description" content="HostSpectra Developer Documentation: Technology Stack, API Reference, and Build Guide.">
	<link rel="icon" type="image/svg+xml" href="/favicon.svg">
	<link rel="preload" href="/css/style.css" as="style">
	<link rel="preload" href="/js/script.js" as="script">
	<link rel="stylesheet" href="/css/style.css">
</head>
<body>
	<nav class="navbar">
		<div class="container">
			<div class="logo">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="32" height="32">
					<circle cx="32" cy="32" r="30" fill="#161B22" stroke="#58A6FF" stroke-width="2"/>
					<text x="32" y="43" font-size="32" text-anchor="middle" fill="#58A6FF">🛡</text>
				</svg>
				<a href="/" style="color: var(--primary); text-decoration: none;">HostSpectra</a>
				<span class="version-badge">v0.2</span>
			</div>
			<div class="nav-links">
				<a href="/">Home</a>
				<a href="#technology">Technology</a>
				<a href="#api">API Reference</a>
				<a href="#dev-guide">Dev Guide</a>
			</div>
			<button class="mobile-menu-btn" id="mobileMenuBtn">☰</button>
		</div>
	</nav>

	<header class="hero" style="padding: 50px 20px;">
		<div class="container">
			<nav class="breadcrumb">
				<a href="/">Docs</a>
				<span class="sep">›</span>
				<span>Developer</span>
			</nav>
			<h1>Developer Documentation</h1>
			<p>Technology stack, API reference, and step-by-step build guide</p>
		</div>
	</header>

	<div class="docs-layout">
		<main class="docs-content">
			<div id="technology"><?php include __DIR__ . '/components/sections/technology.html'; ?></div>
			<div id="api"><?php include __DIR__ . '/components/sections/api.html'; ?></div>
			<div id="dev-guide"><?php include __DIR__ . '/components/sections/dev-guide.html'; ?></div>
		</main>
	</div>

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
