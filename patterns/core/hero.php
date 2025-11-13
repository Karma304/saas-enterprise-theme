<?php
/**
 * Title: Hero Section
 * Slug: saas-enterprise-theme/hero
 * Categories: saas-hero
 * Description: Standard Hero-Sektion mit Überschrift, Text und CTA-Button
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"clamp(4rem, 10vw, 8rem)","bottom":"clamp(4rem, 10vw, 8rem)"}}},"backgroundColor":"background-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-section-background-color has-background" style="padding-top:clamp(4rem, 10vw, 8rem);padding-bottom:clamp(4rem, 10vw, 8rem)">
	<!-- wp:columns {"verticalAlignment":"center"} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
			<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"3.5rem","fontWeight":"800"}}} -->
			<h1 class="wp-block-heading" style="font-size:3.5rem;font-weight:800">Transformieren Sie Ihr Business mit unserer SaaS-Lösung</h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.25rem"},"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|50"}}}} -->
			<p style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--50);font-size:1.25rem">Steigern Sie Ihre Produktivität um 300% mit unserer innovativen All-in-One Plattform. Vertraut von über 10.000 Unternehmen weltweit.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"primary-accent","style":{"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-primary-accent-background-color has-background wp-element-button" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60)">Kostenlos starten</a></div>
				<!-- /wp:button -->

				<!-- wp:button {"backgroundColor":"background-main","textColor":"primary-brand","className":"is-style-outline","style":{"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-primary-brand-color has-background-main-background-color has-text-color has-background wp-element-button" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60)">Demo ansehen</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%">
			<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
			<figure class="wp-block-image size-large"><img src="https://via.placeholder.com/800x600/667eea/ffffff?text=Hero+Image" alt="Hero Image"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
