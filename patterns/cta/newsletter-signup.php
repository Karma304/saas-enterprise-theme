<?php
/**
 * Title: Newsletter Signup
 * Slug: saas-enterprise-theme/newsletter-signup
 * Categories: saas-cta
 * Description: Newsletter Anmeldung mit Formular
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"clamp(4rem, 10vw, 6rem)","bottom":"clamp(4rem, 10vw, 6rem)"}}},"backgroundColor":"background-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-section-background-color has-background" style="padding-top:clamp(4rem, 10vw, 6rem);padding-bottom:clamp(4rem, 10vw, 6rem)">
	<!-- wp:columns {"verticalAlignment":"center"} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:heading {"style":{"typography":{"fontSize":"2.5rem","fontWeight":"800"}}} -->
			<h2 class="wp-block-heading" style="font-size:2.5rem;font-weight:800">Bleiben Sie auf dem Laufenden</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
			<p style="margin-top:var(--wp--preset--spacing--30)">Erhalten Sie wöchentliche Updates zu neuen Features, Best Practices und exklusive Angebote direkt in Ihr Postfach.</p>
			<!-- /wp:paragraph -->

			<!-- wp:list {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<ul class="wp-block-list" style="margin-top:var(--wp--preset--spacing--40)">
				<li>✓ Keine Werbung, nur wertvolle Inhalte</li>
				<li>✓ Jederzeit abmelden</li>
				<li>✓ Über 15.000 zufriedene Abonnenten</li>
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"1rem"}},"backgroundColor":"background-main","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-background-main-background-color has-background" style="border-radius:1rem;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
				<h3 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--30)">Newsletter abonnieren</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
				<p style="margin-bottom:var(--wp--preset--spacing--40)">Name</p>
				<!-- /wp:paragraph -->

				<!-- wp:html -->
				<input type="text" placeholder="Ihr Name" style="width: 100%; padding: 12px; border: 1px solid #E2E8F0; border-radius: 0.5rem; margin-bottom: 1rem; font-family: inherit;">
				<!-- /wp:html -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40","top":"var:preset|spacing|40"}}}} -->
				<p style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)">E-Mail-Adresse *</p>
				<!-- /wp:paragraph -->

				<!-- wp:html -->
				<input type="email" placeholder="ihre@email.de" style="width: 100%; padding: 12px; border: 1px solid #E2E8F0; border-radius: 0.5rem; margin-bottom: 1.5rem; font-family: inherit;" required>
				<!-- /wp:html -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"backgroundColor":"primary-accent","width":100} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-primary-accent-background-color has-background wp-element-button">Jetzt abonnieren</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"textColor":"body-text"} -->
				<p class="has-body-text-color has-text-color" style="margin-top:var(--wp--preset--spacing--30);font-size:0.75rem">Mit der Anmeldung akzeptieren Sie unsere Datenschutzbestimmungen.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
