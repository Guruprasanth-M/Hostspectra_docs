// Component Loader - loads HTML components into main page
class ComponentLoader {
constructor() {
this.components = {};
}

async load(name, path) {
try {
const response = await fetch(path);
if (!response.ok) throw new Error(`Failed to load ${name}`);
this.components[name] = await response.text();
} catch (error) {
console.error(`Error loading component ${name}:`, error);
}
}

async loadMultiple(componentMap) {
await Promise.all(
Object.entries(componentMap).map(([name, path]) => this.load(name, path))
);
}

render(name, selector) {
const element = document.querySelector(selector);
if (element && this.components[name]) {
element.innerHTML = this.components[name];
}
}

renderMultiple(renderMap) {
Object.entries(renderMap).forEach(([name, selector]) => {
this.render(name, selector);
});
}
}

// Initialize component loader
const loader = new ComponentLoader();

// Define component paths
const componentMap = {
navbar: '/components/navbar.html',
hero: '/components/hero.html',
overview: '/components/sections/overview.html',
features: '/components/sections/features.html',
architecture: '/components/sections/architecture.html',
'data-flow': '/components/sections/data-flow.html',
deployment: '/components/sections/deployment.html',
security: '/components/sections/security.html',
stats: '/components/sections/stats.html',
faq: '/components/sections/faq.html',
support: '/components/sections/support.html',
footer: '/components/footer.html'
};

// Load all components on page load
document.addEventListener('DOMContentLoaded', async () => {
await loader.loadMultiple(componentMap);

// Render components into their designated areas
loader.renderMultiple({
navbar: 'nav[data-component="navbar"]',
hero: 'header[data-component="hero"]',
overview: 'div[data-component="overview"]',
features: 'div[data-component="features"]',
architecture: 'div[data-component="architecture"]',
'data-flow': 'div[data-component="data-flow"]',
deployment: 'div[data-component="deployment"]',
security: 'div[data-component="security"]',
stats: 'div[data-component="stats"]',
faq: 'div[data-component="faq"]',
support: 'div[data-component="support"]',
footer: 'footer[data-component="footer"]'
});

// Initialize mobile menu and smooth scroll after components load
if (typeof initApp === 'function') {
	setTimeout(initApp, 100);
}
});
