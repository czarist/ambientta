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
						<section class="entry-content p-0" itemprop="articleBody">
							<section id="secao-formulario">
								<div class="container">
									<div class="row pt-5">
										<div class="col-xl-1 col-12"></div>
										<div class="col-xl-10 col-12">
											<div data-aos="fade-down" class="text-white">
												<?= get_field('texto_contato', 7) ?>
											</div>
										</div>
										<div class="col-xl-1 col-12"></div>
									</div>
									<div class="row pb-5">
										<div class="col-xl-2 col-0"></div>
										<div class="col-xl-8 col-12">
											<form data-aos="fade-down" action="#" method="post" class="text-white" id="form-contact">
												<div class="row">
													<div class="col-12 w-100">
														<label for="nome">Nome</label>
														<input class="" type="text" name="nome" id="nome">
													</div>
													<div class="col-12 col-xl-6">
														<label for="email">E-mail</label>
														<input type="email" name="email" id="email">
													</div>
													<div class="col-12 col-xl-6">
														<label for="telefone">Telefone</label>
														<input type="text" name="telefone" id="telefone">
													</div>
													<div class="col-12">
														<label for="mensagem">Mensagem</label>
														<textarea name="mensagem" id="mensagem" cols="30" rows="10"></textarea>
													</div>
												</div>
												<div class="row mt-5">
													<div class="col-xl-5 col-12 d-xl-block d-flex justify-content-center align-items-center flex-column">
														<span>Prefiro receber informações por</span>
														<div class="d-flex">
															<div class="d-flex">
																<label for="email-check">E-mail</label>
																<input class="mr-2" type="checkbox" name="email-check" id="email-check">
															</div>
															<div class="d-flex">
																<label for="whats-check">WhatsApp</label>
																<input class="mr-2" type="checkbox" name="whats-check" id="whats-check">
															</div>
															<div class="d-flex">
																<label for="telefone-check">Telefone</label>
																<input class="mr-2" type="checkbox" name="telefone-check" id="telefone-check">
															</div>
														</div>
													</div>
													<div class="col-xl-2 col-0"></div>
													<div class="col-xl-5 col-12 d-flex justify-content-xl-end align-items-xl-end justify-content-center align-items-center flex-column">
														<input type="submit" class="input_enviar" id="enviar" name="enviar" value="ENVIAR">
													</div>
												</div>
											</form>

										</div>
										<div class="col-xl-2 col-0"></div>
									</div>
								</div>
							</section>
							<section id="infos" class="container-fluid mt-5 mb-5">
								<div class="row min-h-500">
									<div data-aos="fade-right" class="col-xl-6 col-12 general-bg min-h-500" style="background-image: url('<?= get_field('imagem_apresentacao_1', 7) ?>');"></div>
									<div data-aos="fade-left" class="col-xl-6 col-12">
										<div class="row align-items-center justify-content-start">
											<div class="col-xl-6 col-12 d-flex publicacao-1 ">
												<?= get_field('texto_apresentacao_1', 7) ?>
											</div>
										</div>
									</div>
								</div>
								<div data-aos="fade-right" class="row min-h-500">
									<div class="col-xl-6 col-12">
										<div class="row align-items-center justify-content-end">
											<div class="col-xl-6 col-12 d-flex publicacao-2">
												<?= get_field('texto_apresentacao_2', 7) ?>
											</div>
										</div>
									</div>
									<div data-aos="fade-left" class="col-xl-6 col-12 general-bg min-h-500" style="background-image: url('<?= get_field('imagem_apresentacao_2', 7) ?>');"></div>
								</div>
							</section>
							<section id="secao3" class="container-fluid position-relative" style="background-image: url('<?= get_field('imagem_apresentacao_3', 7) ?>');">
								<div data-aos="fade-left" class="text-3 text-white p-4">
									<?= get_field('texto_apresentacao_3', 7) ?>
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