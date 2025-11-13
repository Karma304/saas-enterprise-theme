/**
 * SaaS Enterprise Theme JavaScript
 *
 * @package SaaS_Enterprise_Theme
 * @since 1.0.0
 */

(function() {
	'use strict';

	// Back to top button
	function initBackToTop() {
		const backToTop = document.querySelector('.back-to-top');
		if (!backToTop) return;

		window.addEventListener('scroll', function() {
			if (window.pageYOffset > 300) {
				backToTop.classList.add('visible');
			} else {
				backToTop.classList.remove('visible');
			}
		});

		backToTop.addEventListener('click', function(e) {
			e.preventDefault();
			window.scrollTo({
				top: 0,
				behavior: 'smooth'
			});
		});
	}

	// Reading progress bar
	function initReadingProgress() {
		const progressBar = document.querySelector('.reading-progress-bar');
		if (!progressBar) return;

		window.addEventListener('scroll', function() {
			const windowHeight = window.innerHeight;
			const documentHeight = document.documentElement.scrollHeight - windowHeight;
			const scrolled = (window.pageYOffset / documentHeight) * 100;
			progressBar.style.width = scrolled + '%';
		});
	}

	// Mobile menu toggle
	function initMobileMenu() {
		const toggle = document.querySelector('.mobile-menu-toggle');
		if (!toggle) return;

		const menu = document.querySelector('.mobile-menu');
		if (!menu) return;

		toggle.addEventListener('click', function() {
			menu.classList.toggle('active');
			toggle.classList.toggle('active');
		});
	}

	// Cookie consent
	function initCookieConsent() {
		const consent = document.querySelector('.cookie-consent');
		if (!consent) return;

		// Check if user has already consented
		if (localStorage.getItem('cookieConsent')) {
			return;
		}

		// Show consent banner
		consent.classList.add('visible');

		// Accept button
		const acceptBtn = consent.querySelector('.cookie-accept');
		if (acceptBtn) {
			acceptBtn.addEventListener('click', function() {
				localStorage.setItem('cookieConsent', 'true');
				consent.classList.remove('visible');
			});
		}

		// Decline button
		const declineBtn = consent.querySelector('.cookie-decline');
		if (declineBtn) {
			declineBtn.addEventListener('click', function() {
				localStorage.setItem('cookieConsent', 'false');
				consent.classList.remove('visible');
			});
		}
	}

	// Typing animation
	function initTypingAnimation() {
		const elements = document.querySelectorAll('[data-typing]');
		if (!elements.length) return;

		elements.forEach(function(element) {
			const text = element.getAttribute('data-typing');
			const speed = parseInt(element.getAttribute('data-typing-speed')) || 50;
			let i = 0;

			element.textContent = '';

			function type() {
				if (i < text.length) {
					element.textContent += text.charAt(i);
					i++;
					setTimeout(type, speed);
				}
			}

			// Start typing when element is in viewport
			const observer = new IntersectionObserver(function(entries) {
				entries.forEach(function(entry) {
					if (entry.isIntersecting) {
						type();
						observer.unobserve(element);
					}
				});
			});

			observer.observe(element);
		});
	}

	// Countdown timer
	function initCountdown() {
		const countdowns = document.querySelectorAll('[data-countdown]');
		if (!countdowns.length) return;

		countdowns.forEach(function(countdown) {
			const endDate = new Date(countdown.getAttribute('data-countdown')).getTime();

			const timer = setInterval(function() {
				const now = new Date().getTime();
				const distance = endDate - now;

				if (distance < 0) {
					clearInterval(timer);
					countdown.textContent = 'Abgelaufen';
					return;
				}

				const days = Math.floor(distance / (1000 * 60 * 60 * 24));
				const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
				const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
				const seconds = Math.floor((distance % (1000 * 60)) / 1000);

				countdown.textContent = days + 'd ' + hours + 'h ' + minutes + 'm ' + seconds + 's';
			}, 1000);
		});
	}

	// Fade in animation on scroll
	function initFadeInOnScroll() {
		const elements = document.querySelectorAll('.fade-in-on-scroll');
		if (!elements.length) return;

		const observer = new IntersectionObserver(function(entries) {
			entries.forEach(function(entry) {
				if (entry.isIntersecting) {
					entry.target.classList.add('fade-in');
					observer.unobserve(entry.target);
				}
			});
		}, {
			threshold: 0.1
		});

		elements.forEach(function(element) {
			observer.observe(element);
		});
	}

	// Initialize all functions on DOM ready
	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', function() {
			initBackToTop();
			initReadingProgress();
			initMobileMenu();
			initCookieConsent();
			initTypingAnimation();
			initCountdown();
			initFadeInOnScroll();
		});
	} else {
		initBackToTop();
		initReadingProgress();
		initMobileMenu();
		initCookieConsent();
		initTypingAnimation();
		initCountdown();
		initFadeInOnScroll();
	}
})();
