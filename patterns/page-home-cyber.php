<?php
/**
 * Title: Cybersecurity and DevOps home
 * Slug: twentytwentyfour/page-home-cyber
 * Categories: twentytwentyfour_page
 * Keywords: cybersecurity, cloud, DevOps, home
 * Block Types: core/post-content
 * Post Types: page, wp_template
 * Viewport width: 1400
 * Description: A three-slide homepage hero for cybersecurity, cloud and IT consulting.
 *
 * @package WordPress
 */
?>

<!-- wp:group {"align":"full","className":"cyber-home","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull cyber-home">
	<!-- wp:group {"align":"wide","className":"cyber-home__intro","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide cyber-home__intro">
		<!-- wp:paragraph {"className":"cyber-home__eyebrow"} -->
		<p class="cyber-home__eyebrow">SECURITY · CLOUD · ENGINEERING</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":1,"className":"cyber-home__title"} -->
		<h1 class="wp-block-heading cyber-home__title">Build boldly.<br><span>Stay protected.</span></h1>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"className":"cyber-home__lead"} -->
		<p class="cyber-home__lead">Practical cybersecurity, cloud and DevOps support for teams ready to move forward with confidence.</p>
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
					<!-- wp:heading {"level":2,"className":"cyber-slide__title"} --><h2 class="wp-block-heading cyber-slide__title">Make security part of every decision.</h2><!-- /wp:heading -->
					<!-- wp:paragraph {"className":"cyber-slide__text"} --><p class="cyber-slide__text">Find weaknesses early, strengthen your defenses and give your team a clear plan for what comes next.</p><!-- /wp:paragraph -->
					<!-- wp:buttons {"className":"cyber-slide__buttons"} --><div class="wp-block-buttons cyber-slide__buttons"><!-- wp:button {"className":"cyber-button"} --><div class="wp-block-button cyber-button"><a class="wp-block-button__link wp-element-button" href="/contact/">Talk to a security expert <span aria-hidden="true">↗</span></a></div><!-- /wp:button --><!-- wp:button {"className":"cyber-button is-style-outline"} --><div class="wp-block-button is-style-outline cyber-button"><a class="wp-block-button__link wp-element-button" href="/services/">Explore services</a></div><!-- /wp:button --></div><!-- /wp:buttons -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"verticalAlignment":"center","width":"45%","className":"cyber-slide__visual"} -->
				<div class="wp-block-column is-vertically-aligned-center cyber-slide__visual" style="flex-basis:45%"><!-- wp:html -->
					<div class="cyber-visual cyber-visual--shield" aria-hidden="true"><div class="cyber-orbit cyber-orbit--one"></div><div class="cyber-orbit cyber-orbit--two"></div><div class="cyber-shield"><span>✓</span></div><div class="cyber-float cyber-float--top">THREAT MONITORING <b>ACTIVE</b></div><div class="cyber-float cyber-float--bottom"><i></i> YOUR SYSTEMS, IN SAFE HANDS</div><span class="cyber-cross cyber-cross--one">+</span><span class="cyber-cross cyber-cross--two">+</span></div>
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
				<div class="wp-block-column is-vertically-aligned-center cyber-slide__copy" style="flex-basis:55%"><!-- wp:paragraph {"className":"cyber-slide__number"} --><p class="cyber-slide__number">02 / DEVOPS & CLOUD</p><!-- /wp:paragraph --><!-- wp:heading {"level":2,"className":"cyber-slide__title"} --><h2 class="wp-block-heading cyber-slide__title">Ship faster. Scale with confidence.</h2><!-- /wp:heading --><!-- wp:paragraph {"className":"cyber-slide__text"} --><p class="cyber-slide__text">Modern cloud foundations and reliable delivery pipelines help your team release better software, more often.</p><!-- /wp:paragraph --><!-- wp:buttons {"className":"cyber-slide__buttons"} --><div class="wp-block-buttons cyber-slide__buttons"><!-- wp:button {"className":"cyber-button"} --><div class="wp-block-button cyber-button"><a class="wp-block-button__link wp-element-button" href="/contact/">Plan your cloud journey <span aria-hidden="true">↗</span></a></div><!-- /wp:button --><!-- wp:button {"className":"cyber-button is-style-outline"} --><div class="wp-block-button is-style-outline cyber-button"><a class="wp-block-button__link wp-element-button" href="/services/">Explore services</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div>
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
				<div class="wp-block-column is-vertically-aligned-center cyber-slide__copy" style="flex-basis:55%"><!-- wp:paragraph {"className":"cyber-slide__number"} --><p class="cyber-slide__number">03 / IT CONSULTING</p><!-- /wp:paragraph --><!-- wp:heading {"level":2,"className":"cyber-slide__title"} --><h2 class="wp-block-heading cyber-slide__title">Technology that moves your business forward.</h2><!-- /wp:heading --><!-- wp:paragraph {"className":"cyber-slide__text"} --><p class="cyber-slide__text">Get a practical partner for IT strategy, custom development, thoughtful design and growth-focused SEO.</p><!-- /wp:paragraph --><!-- wp:buttons {"className":"cyber-slide__buttons"} --><div class="wp-block-buttons cyber-slide__buttons"><!-- wp:button {"className":"cyber-button"} --><div class="wp-block-button cyber-button"><a class="wp-block-button__link wp-element-button" href="/contact/">Let’s talk about your goals <span aria-hidden="true">↗</span></a></div><!-- /wp:button --><!-- wp:button {"className":"cyber-button is-style-outline"} --><div class="wp-block-button is-style-outline cyber-button"><a class="wp-block-button__link wp-element-button" href="/services/">Explore services</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div>
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
</div>
<!-- /wp:group -->
