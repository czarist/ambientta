<?php get_header();
/*
 Template Name: Home
*/
?>
<div id="content">
	<div id="inner-content" class="cf">
		<main id="main" class="" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article class="pt-5" id="post-<?php the_ID(); ?>" role="article" itemscope itemtype="http://schema.org/BlogPosting">
						<section class="entry-content" itemprop="articleBody">
							<section id="secao-formulario">
								<div class="container">
									<div class="row">
										<div data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="col-12 bg-white cardsocial">
											<div class="row">

											</div>
										</div>
									</div>
								</div>
							</section>
						</section>
					</article>
			<?php endwhile;
			endif; ?>
		</main>
	</div>
</div>

<?php get_footer(); ?>