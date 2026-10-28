(function () {
	'use strict';

	function initCarousel(carousel) {
		var slides = Array.prototype.slice.call(carousel.querySelectorAll('[data-cyber-slide]'));
		var dots = Array.prototype.slice.call(carousel.querySelectorAll('[data-cyber-to]'));
		var counter = carousel.querySelector('[data-cyber-count]');
		var current = 0;
		var timer;
		var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

		if (slides.length < 2) return;

		function show(index) {
			current = (index + slides.length) % slides.length;
			slides.forEach(function (slide, slideIndex) {
				slide.hidden = slideIndex !== current;
				slide.classList.toggle('is-active', slideIndex === current);
			});
			dots.forEach(function (dot, dotIndex) {
				var active = dotIndex === current;
				dot.classList.toggle('is-current', active);
				if (active) dot.setAttribute('aria-current', 'true');
				else dot.removeAttribute('aria-current');
			});
			if (counter) counter.innerHTML = '0' + (current + 1) + ' <i>/</i> 0' + slides.length;
		}

		function restart() {
			window.clearInterval(timer);
			if (!reduceMotion && !document.hidden) timer = window.setInterval(function () { show(current + 1); }, 7000);
		}

		dots.forEach(function (dot) {
			dot.addEventListener('click', function () { show(Number(dot.getAttribute('data-cyber-to'))); restart(); });
		});
		var previous = carousel.querySelector('[data-cyber-prev]');
		var next = carousel.querySelector('[data-cyber-next]');
		if (previous) previous.addEventListener('click', function () { show(current - 1); restart(); });
		if (next) next.addEventListener('click', function () { show(current + 1); restart(); });
		carousel.addEventListener('mouseenter', function () { window.clearInterval(timer); });
		carousel.addEventListener('mouseleave', restart);
		carousel.addEventListener('focusin', function () { window.clearInterval(timer); });
		carousel.addEventListener('focusout', restart);
		document.addEventListener('visibilitychange', restart);
		show(0);
		restart();
	}

	document.addEventListener('DOMContentLoaded', function () {
		document.querySelectorAll('[data-cyber-carousel]').forEach(initCarousel);
	});
}());
