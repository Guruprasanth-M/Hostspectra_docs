// HostSpectra — Mobile menu + smooth scroll

function initApp() {
// Mobile menu toggle
const menuBtn = document.getElementById('mobileMenuBtn');
const navLinks = document.querySelector('.nav-links');

if (menuBtn && navLinks) {
menuBtn.addEventListener('click', () => {
navLinks.classList.toggle('open');
menuBtn.textContent = navLinks.classList.contains('open') ? '\u2715' : '\u2630';
});

// Close menu when clicking a link
navLinks.querySelectorAll('a').forEach(link => {
link.addEventListener('click', () => {
navLinks.classList.remove('open');
menuBtn.textContent = '\u2630';
});
});
}

// Smooth scroll for all hash links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
anchor.addEventListener('click', function (e) {
e.preventDefault();
const target = document.querySelector(this.getAttribute('href'));
if (target) {
const offset = 80;
const top = target.getBoundingClientRect().top + window.scrollY - offset;
window.scrollTo({ top, behavior: 'smooth' });
}
});
});

// FAQ accordion — only one open at a time
document.addEventListener('click', function (e) {
const summary = e.target.closest('.faq-item summary');
if (!summary) return;
const current = summary.parentElement;
document.querySelectorAll('.faq-item').forEach(other => {
if (other !== current) other.removeAttribute('open');
});
});
}
