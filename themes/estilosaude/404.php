<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package kelly
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Opa! Você se perdeu?', 'kelly' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content entry-content">
					<p><?php _e( 'Essa página não existe ou foi removida. Que tal tentar fazer uma busca logo abaixo?', 'kelly' ); ?></p>

					<?php get_search_form(); ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>