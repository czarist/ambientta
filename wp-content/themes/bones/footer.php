			<footer class="footer container-fluid" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="container mt-5 mb-5 pt-5 pb-5">
					<div class="row">
						<div data-aos="flip-left" data-aos-duration="1000" class="col-xl-3 col-12 text-footer">
							<img id="imgLogo2" src="<?php echo get_template_directory_uri(); ?>/library/images/logo2.png" alt="logo2">
						</div>
						<div data-aos="flip-left" data-aos-duration="2000" class="col-xl-3 col-12 text-footer barra-textos">
							<?= get_field('texto_footer_1', 7) ?>
						</div>
						<div data-aos="flip-left" data-aos-duration="3000" class="col-xl-3 col-12 text-footer barra-textos">
							<?= get_field('texto_footer_2', 7) ?>
						</div>
						<div data-aos="flip-left" data-aos-duration="4000" class="col-xl-3 col-12 text-footer">
							<?= get_field('texto_footer_3', 7) ?>
						</div>
						<div class="col-12 text-center text-white mt-5 mb-0">
							<span class="d-flex align-items-center justify-content-center">
								<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Todos os direitos reservados
									<a href="https://c5w.com.br/" target="_blank">
										<img src="<?php echo get_template_directory_uri(); ?>/library/images/c5w.png" height="20" width="20">
									</a>
								</p>

							</span>
						</div>
					</div>
				</div>

			</footer>
			</div>
			<?php wp_footer(); ?>
			</body>

			</html>