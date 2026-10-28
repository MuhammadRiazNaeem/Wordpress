<?php
/**
 * Title: Cybersecurity and DevOps home
 * Slug: twentytwentyfour/page-home-cyber
 * Categories: twentytwentyfour_page
 * Keywords: cybersecurity, cloud, DevOps, home
 * Block Types: core/post-content
 * Post Types: page, wp_template
 * Viewport width: 1400
 * Description: Cybersecurity, ethical testing, cloud and DevOps homepage with a three-slide hero.
 *
 * @package WordPress
 */
?>

<!-- wp:group {"align":"full","className":"cyber-home","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull cyber-home">
	<!-- wp:group {"align":"wide","className":"cyber-home__intro","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide cyber-home__intro">
		<!-- wp:paragraph {"className":"cyber-home__eyebrow"} -->
		<p class="cyber-home__eyebrow">CYBERSECURITY · DEVSECOPS · CLOUD</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":1,"className":"cyber-home__title"} -->
		<h1 class="wp-block-heading cyber-home__title">Secure what matters.<br><span>Build what’s next.</span></h1>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"className":"cyber-home__lead"} -->
		<p class="cyber-home__lead">Security testing, cloud engineering and practical IT consulting—built around your goals, your environment and your next step.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","className":"cyber-carousel","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide cyber-carousel" data-cyber-carousel aria-roledescription="carousel" aria-label="Our services">
		<!-- wp:group {"className":"cyber-slide is-active","layout":{"type":"constrained"}} -->
		<div class="wp-block-group cyber-slide is-active" data-cyber-slide aria-roledescription="slide" aria-label="1 of 3">
			<!-- wp:columns {"verticalAlignment":"center","className":"cyber-slide__columns"} -->
			<div class="wp-block-columns are-vertically-aligned-center cyber-slide__columns">
				<!-- wp:column {"verticalAlignment":"center","width":"55%","className":"cyber-slide__copy"} -->
				<div class="wp-block-column is-vertically-aligned-center cyber-slide__copy" style="flex-basis:55%">
					<!-- wp:paragraph {"className":"cyber-slide__number"} --><p class="cyber-slide__number">01 / CYBERSECURITY</p><!-- /wp:paragraph -->
					<!-- wp:heading {"level":2,"className":"cyber-slide__title"} --><h2 class="wp-block-heading cyber-slide__title">Find the gaps before attackers do.</h2><!-- /wp:heading -->
					<!-- wp:paragraph {"className":"cyber-slide__text"} --><p class="cyber-slide__text">Authorized penetration testing, vulnerability assessments and security reviews—with clear findings your team can act on.</p><!-- /wp:paragraph -->
					<!-- wp:buttons {"className":"cyber-slide__buttons"} --><div class="wp-block-buttons cyber-slide__buttons"><!-- wp:button {"className":"cyber-button"} --><div class="wp-block-button cyber-button"><a class="wp-block-button__link wp-element-button" href="/contact/">Talk to a security expert <span aria-hidden="true">↗</span></a></div><!-- /wp:button --><!-- wp:button {"className":"cyber-button is-style-outline"} --><div class="wp-block-button is-style-outline cyber-button"><a class="wp-block-button__link wp-element-button" href="/services/">Explore services</a></div><!-- /wp:button --></div><!-- /wp:buttons -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"verticalAlignment":"center","width":"45%","className":"cyber-slide__visual"} -->
				<div class="wp-block-column is-vertically-aligned-center cyber-slide__visual" style="flex-basis:45%"><!-- wp:html -->
					<div class="cyber-visual cyber-visual--shield" aria-hidden="true"><div class="cyber-orbit cyber-orbit--one"></div><div class="cyber-orbit cyber-orbit--two"></div><div class="cyber-shield"><span>✓</span></div><div class="cyber-float cyber-float--top">SECURITY REVIEW <b>AUTHORIZED</b></div><div class="cyber-float cyber-float--bottom"><i></i> TEST · REPORT · IMPROVE</div><span class="cyber-cross cyber-cross--one">+</span><span class="cyber-cross cyber-cross--two">+</span></div>
				<!-- /wp:html --></div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"cyber-slide","layout":{"type":"constrained"}} -->
		<div class="wp-block-group cyber-slide" data-cyber-slide aria-roledescription="slide" aria-label="2 of 3" hidden>
			<!-- wp:columns {"verticalAlignment":"center","className":"cyber-slide__columns"} -->
			<div class="wp-block-columns are-vertically-aligned-center cyber-slide__columns">
				<!-- wp:column {"verticalAlignment":"center","width":"55%","className":"cyber-slide__copy"} -->
				<div class="wp-block-column is-vertically-aligned-center cyber-slide__copy" style="flex-basis:55%"><!-- wp:paragraph {"className":"cyber-slide__number"} --><p class="cyber-slide__number">02 / DEVSECOPS & CLOUD</p><!-- /wp:paragraph --><!-- wp:heading {"level":2,"className":"cyber-slide__title"} --><h2 class="wp-block-heading cyber-slide__title">Secure the path from code to cloud.</h2><!-- /wp:heading --><!-- wp:paragraph {"className":"cyber-slide__text"} --><p class="cyber-slide__text">Design reliable cloud foundations and delivery pipelines with security built into the way your team ships.</p><!-- /wp:paragraph --><!-- wp:buttons {"className":"cyber-slide__buttons"} --><div class="wp-block-buttons cyber-slide__buttons"><!-- wp:button {"className":"cyber-button"} --><div class="wp-block-button cyber-button"><a class="wp-block-button__link wp-element-button" href="/contact/">Plan your cloud journey <span aria-hidden="true">↗</span></a></div><!-- /wp:button --><!-- wp:button {"className":"cyber-button is-style-outline"} --><div class="wp-block-button is-style-outline cyber-button"><a class="wp-block-button__link wp-element-button" href="/services/">Explore services</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div>
				<!-- /wp:column -->
				<!-- wp:column {"verticalAlignment":"center","width":"45%","className":"cyber-slide__visual"} -->
				<div class="wp-block-column is-vertically-aligned-center cyber-slide__visual" style="flex-basis:45%"><!-- wp:html --><div class="cyber-visual cyber-visual--cloud" aria-hidden="true"><div class="cloud-glow"></div><div class="cloud-node cloud-node--a">CODE</div><div class="cloud-node cloud-node--b">BUILD</div><div class="cloud-node cloud-node--c">DEPLOY</div><div class="cloud-path"></div><div class="cloud-core">∞<small>DELIVERY PIPELINE</small></div><div class="cyber-float cyber-float--top">RELEASE STATUS <b>● READY</b></div><span class="cyber-cross cyber-cross--one">+</span><span class="cyber-cross cyber-cross--two">+</span></div><!-- /wp:html --></div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"cyber-slide","layout":{"type":"constrained"}} -->
		<div class="wp-block-group cyber-slide" data-cyber-slide aria-roledescription="slide" aria-label="3 of 3" hidden>
			<!-- wp:columns {"verticalAlignment":"center","className":"cyber-slide__columns"} -->
			<div class="wp-block-columns are-vertically-aligned-center cyber-slide__columns">
				<!-- wp:column {"verticalAlignment":"center","width":"55%","className":"cyber-slide__copy"} -->
				<div class="wp-block-column is-vertically-aligned-center cyber-slide__copy" style="flex-basis:55%"><!-- wp:paragraph {"className":"cyber-slide__number"} --><p class="cyber-slide__number">03 / IT CONSULTING</p><!-- /wp:paragraph --><!-- wp:heading {"level":2,"className":"cyber-slide__title"} --><h2 class="wp-block-heading cyber-slide__title">Make technology work for your next move.</h2><!-- /wp:heading --><!-- wp:paragraph {"className":"cyber-slide__text"} --><p class="cyber-slide__text">Get a thoughtful partner for IT strategy, secure development, web design and digital growth.</p><!-- /wp:paragraph --><!-- wp:buttons {"className":"cyber-slide__buttons"} --><div class="wp-block-buttons cyber-slide__buttons"><!-- wp:button {"className":"cyber-button"} --><div class="wp-block-button cyber-button"><a class="wp-block-button__link wp-element-button" href="/contact/">Let’s discuss your goals <span aria-hidden="true">↗</span></a></div><!-- /wp:button --><!-- wp:button {"className":"cyber-button is-style-outline"} --><div class="wp-block-button is-style-outline cyber-button"><a class="wp-block-button__link wp-element-button" href="/services/">Explore services</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div>
				<!-- /wp:column -->
				<!-- wp:column {"verticalAlignment":"center","width":"45%","className":"cyber-slide__visual"} -->
				<div class="wp-block-column is-vertically-aligned-center cyber-slide__visual" style="flex-basis:45%"><!-- wp:html --><div class="cyber-visual cyber-visual--consult" aria-hidden="true"><div class="consult-ring consult-ring--outer"></div><div class="consult-ring consult-ring--inner"></div><div class="consult-card consult-card--one"><span>01</span>Understand</div><div class="consult-card consult-card--two"><span>02</span>Design</div><div class="consult-card consult-card--three"><span>03</span>Deliver</div><div class="consult-center">IT<br>PARTNER</div><span class="cyber-cross cyber-cross--one">+</span><span class="cyber-cross cyber-cross--two">+</span></div><!-- /wp:html --></div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->

		<!-- wp:html -->
		<div class="cyber-carousel__controls"><div class="cyber-carousel__dots" role="group" aria-label="Choose a slide"><button type="button" class="is-current" data-cyber-to="0" aria-label="Show cybersecurity slide" aria-current="true"></button><button type="button" data-cyber-to="1" aria-label="Show DevOps and cloud slide"></button><button type="button" data-cyber-to="2" aria-label="Show IT consulting slide"></button></div><div class="cyber-carousel__arrows"><button type="button" data-cyber-prev aria-label="Previous slide">←</button><span data-cyber-count>01 <i>/</i> 03</span><button type="button" data-cyber-next aria-label="Next slide">→</button></div></div>
		<!-- /wp:html -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","className":"cyber-trust","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide cyber-trust"><!-- wp:paragraph --><p>ONE PARTNER FOR YOUR DIGITAL FOUNDATION</p><!-- /wp:paragraph --><!-- wp:paragraph --><p><span>Cybersecurity</span> &nbsp;·&nbsp; <span>Cloud & DevOps</span> &nbsp;·&nbsp; <span>IT Consulting</span> &nbsp;·&nbsp; <span>Web & Growth</span></p><!-- /wp:paragraph --></div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","className":"cyber-services","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull cyber-services">
		<!-- wp:group {"align":"wide","className":"cyber-section-heading","layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignwide cyber-section-heading"><!-- wp:paragraph {"className":"cyber-home__eyebrow"} --><p class="cyber-home__eyebrow">WHAT WE DO</p><!-- /wp:paragraph --><!-- wp:heading {"level":2,"className":"cyber-section-title"} --><h2 class="wp-block-heading cyber-section-title">Security and engineering, built around your needs.</h2><!-- /wp:heading --><!-- wp:paragraph {"className":"cyber-section-lead"} --><p class="cyber-section-lead">Bring the right expertise to your next challenge—from reducing risk to improving the way you build and run technology.</p><!-- /wp:paragraph --></div>
		<!-- /wp:group -->
		<!-- wp:columns {"align":"wide","className":"cyber-service-grid"} -->
		<div class="wp-block-columns alignwide cyber-service-grid">
			<!-- wp:column --><div class="wp-block-column"><!-- wp:group {"className":"cyber-service-card","layout":{"type":"constrained"}} --><div class="wp-block-group cyber-service-card"><!-- wp:paragraph {"className":"cyber-service-card__index"} --><p class="cyber-service-card__index">01 / DEFEND</p><!-- /wp:paragraph --><!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Cybersecurity & ethical testing</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Authorized penetration testing, vulnerability assessments, security reviews and remediation guidance to help you understand and address risk.</p><!-- /wp:paragraph --><!-- wp:paragraph {"className":"cyber-service-card__link"} --><p class="cyber-service-card__link"><a href="/services/cybersecurity/">Explore security services <span aria-hidden="true">↗</span></a></p><!-- /wp:paragraph --></div><!-- /wp:group --></div><!-- /wp:column -->
			<!-- wp:column --><div class="wp-block-column"><!-- wp:group {"className":"cyber-service-card","layout":{"type":"constrained"}} --><div class="wp-block-group cyber-service-card"><!-- wp:paragraph {"className":"cyber-service-card__index"} --><p class="cyber-service-card__index">02 / BUILD</p><!-- /wp:paragraph --><!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Cloud, DevOps & DevSecOps</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Cloud architecture, CI/CD automation, infrastructure as code and secure delivery practices designed for your team's workflow.</p><!-- /wp:paragraph --><!-- wp:paragraph {"className":"cyber-service-card__link"} --><p class="cyber-service-card__link"><a href="/services/cloud-devops/">Explore cloud services <span aria-hidden="true">↗</span></a></p><!-- /wp:paragraph --></div><!-- /wp:group --></div><!-- /wp:column -->
			<!-- wp:column --><div class="wp-block-column"><!-- wp:group {"className":"cyber-service-card","layout":{"type":"constrained"}} --><div class="wp-block-group cyber-service-card"><!-- wp:paragraph {"className":"cyber-service-card__index"} --><p class="cyber-service-card__index">03 / ADVISE</p><!-- /wp:paragraph --><!-- wp:heading {"level":3} --><h3 class="wp-block-heading">IT consulting & digital</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Practical IT guidance, secure web development, thoughtful design and digital foundations that support your business goals.</p><!-- /wp:paragraph --><!-- wp:paragraph {"className":"cyber-service-card__link"} --><p class="cyber-service-card__link"><a href="/services/it-consulting/">Explore consulting <span aria-hidden="true">↗</span></a></p><!-- /wp:paragraph --></div><!-- /wp:group --></div><!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","className":"cyber-approach","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull cyber-approach">
		<!-- wp:group {"align":"wide","className":"cyber-approach__inner","layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignwide cyber-approach__inner">
			<!-- wp:columns {"verticalAlignment":"center","className":"cyber-approach__columns"} -->
			<div class="wp-block-columns are-vertically-aligned-center cyber-approach__columns">
				<!-- wp:column {"verticalAlignment":"center","width":"38%"} --><div class="wp-block-column is-vertically-aligned-center" style="flex-basis:38%"><!-- wp:paragraph {"className":"cyber-home__eyebrow"} --><p class="cyber-home__eyebrow">A CLEAR WAY FORWARD</p><!-- /wp:paragraph --><!-- wp:heading {"level":2,"className":"cyber-section-title"} --><h2 class="wp-block-heading cyber-section-title">From first conversation to a practical plan.</h2><!-- /wp:heading --><!-- wp:paragraph {"className":"cyber-section-lead"} --><p class="cyber-section-lead">No two environments are the same. Start with your priorities, then agree on the scope and next steps together.</p><!-- /wp:paragraph --></div><!-- /wp:column -->
				<!-- wp:column {"verticalAlignment":"center","width":"62%"} --><div class="wp-block-column is-vertically-aligned-center" style="flex-basis:62%"><!-- wp:group {"className":"cyber-steps","layout":{"type":"grid","columnCount":2}} --><div class="wp-block-group cyber-steps"><!-- wp:group {"className":"cyber-step"} --><div class="wp-block-group cyber-step"><!-- wp:paragraph {"className":"cyber-step__number"} --><p class="cyber-step__number">01</p><!-- /wp:paragraph --><!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Understand</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Discuss your environment, priorities and the outcome you need.</p><!-- /wp:paragraph --></div><!-- /wp:group --><!-- wp:group {"className":"cyber-step"} --><div class="wp-block-group cyber-step"><!-- wp:paragraph {"className":"cyber-step__number"} --><p class="cyber-step__number">02</p><!-- /wp:paragraph --><!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Scope</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Agree on boundaries, deliverables, access and timing before work begins.</p><!-- /wp:paragraph --></div><!-- /wp:group --><!-- wp:group {"className":"cyber-step"} --><div class="wp-block-group cyber-step"><!-- wp:paragraph {"className":"cyber-step__number"} --><p class="cyber-step__number">03</p><!-- /wp:paragraph --><!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Deliver</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Work to the agreed scope and share clear, useful findings or outcomes.</p><!-- /wp:paragraph --></div><!-- /wp:group --><!-- wp:group {"className":"cyber-step"} --><div class="wp-block-group cyber-step"><!-- wp:paragraph {"className":"cyber-step__number"} --><p class="cyber-step__number">04</p><!-- /wp:paragraph --><!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Improve</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Review recommendations together and decide what to address next.</p><!-- /wp:paragraph --></div><!-- /wp:group --></div><!-- /wp:group --></div><!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","className":"cyber-ethics","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull cyber-ethics"><!-- wp:group {"align":"wide","className":"cyber-ethics__inner","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} --><div class="wp-block-group alignwide cyber-ethics__inner"><!-- wp:group {"className":"cyber-ethics__copy","layout":{"type":"constrained"}} --><div class="wp-block-group cyber-ethics__copy"><!-- wp:paragraph {"className":"cyber-home__eyebrow"} --><p class="cyber-home__eyebrow">TRUST STARTS WITH CLEAR BOUNDARIES</p><!-- /wp:paragraph --><!-- wp:heading {"level":2,"className":"cyber-ethics__title"} --><h2 class="wp-block-heading cyber-ethics__title">Ethical security work. Explicit permission. Clear scope.</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Any penetration test or security assessment is performed only with written authorization and agreed testing boundaries. Findings are handled confidentially and shared with the people responsible for fixing them.</p><!-- /wp:paragraph --></div><!-- /wp:group --><!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button {"className":"cyber-button"} --><div class="wp-block-button cyber-button"><a class="wp-block-button__link wp-element-button" href="/contact/">Discuss a scoped assessment <span aria-hidden="true">↗</span></a></div><!-- /wp:button --></div><!-- /wp:buttons --></div><!-- /wp:group --></div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","className":"cyber-final-cta","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull cyber-final-cta"><!-- wp:group {"align":"wide","className":"cyber-final-cta__inner","layout":{"type":"constrained"}} --><div class="wp-block-group alignwide cyber-final-cta__inner"><!-- wp:paragraph {"className":"cyber-home__eyebrow"} --><p class="cyber-home__eyebrow">START WITH A CONVERSATION</p><!-- /wp:paragraph --><!-- wp:heading {"level":2,"className":"cyber-final-cta__title"} --><h2 class="wp-block-heading cyber-final-cta__title">What are you working to secure or build?</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Share the challenge. We’ll help you define a sensible next step.</p><!-- /wp:paragraph --><!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button {"className":"cyber-button"} --><div class="wp-block-button cyber-button"><a class="wp-block-button__link wp-element-button" href="/contact/">Contact our team <span aria-hidden="true">↗</span></a></div><!-- /wp:button --></div><!-- /wp:buttons --></div><!-- /wp:group --></div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
