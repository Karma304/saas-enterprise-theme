<?php
/**
 * Title: Hero with Sign-Up Form
 * Slug: saas-enterprise-theme/hero-split-form
 * Categories: saas-hero
 * Description: Hero mit Split Layout und integriertem Signup-Formular
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"clamp(4rem, 10vw, 8rem)","bottom":"clamp(4rem, 10vw, 8rem)"}}},"backgroundColor":"background-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-section-background-color has-background" style="padding-top:clamp(4rem, 10vw, 8rem);padding-bottom:clamp(4rem, 10vw, 8rem)">
	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"3rem","fontWeight":"800"}}} -->
			<h1 class="wp-block-heading" style="font-size:3rem;font-weight:800">Starten Sie noch heute kostenlos</h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem"},"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
			<p style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40);font-size:1.125rem">Keine Kreditkarte erforderlich. Sofortiger Zugang zu allen Features.</p>
			<!-- /wp:paragraph -->

			<!-- wp:list {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<ul class="wp-block-list" style="margin-top:var(--wp--preset--spacing--40)">
				<li>✅ 14 Tage kostenlose Testphase</li>
				<li>✅ Keine Einrichtungsgebühren</li>
				<li>✅ Jederzeit kündbar</li>
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"1rem"}},"backgroundColor":"background-main","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-background-main-background-color has-background" style="border-radius:1rem;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">Kostenlosen Account erstellen</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|40"}}}} -->
				<p style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--40)">Registrieren Sie sich jetzt und erhalten Sie sofortigen Zugang.</p>
				<!-- /wp:paragraph -->

				<!-- wp:html -->
				<form class="signup-form">
					<div style="margin-bottom: 1rem;">
						<input type="text" placeholder="Ihr Name" style="width: 100%; padding: 0.75rem; border: 1px solid #E2E8F0; border-radius: 0.5rem; font-size: 1rem;" />
					</div>
					<div style="margin-bottom: 1rem;">
						<input type="email" placeholder="E-Mail Adresse" style="width: 100%; padding: 0.75rem; border: 1px solid #E2E8F0; border-radius: 0.5rem; font-size: 1rem;" />
					</div>
					<div style="margin-bottom: 1.5rem;">
						<input type="password" placeholder="Passwort" style="width: 100%; padding: 0.75rem; border: 1px solid #E2E8F0; border-radius: 0.5rem; font-size: 1rem;" />
					</div>
				</form>
				<!-- /wp:html -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"backgroundColor":"primary-accent","width":100,"fontSize":"medium"} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size has-medium-font-size"><a class="wp-block-button__link has-primary-accent-background-color has-background wp-element-button">Kostenlos registrieren</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->

				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.75rem"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
				<p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--30);font-size:0.75rem">Mit der Registrierung stimmen Sie unseren AGB zu.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
