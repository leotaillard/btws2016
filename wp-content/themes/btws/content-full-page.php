
		<?php while (have_posts()) : the_post(); ?>
			<?php
				$hidden_title = get_field('hidden_title');
				if (!empty($hidden_title) & !is_page_template( 'template-last-work.php' )) { ?>
					<section class="full-page">
						<h1 id="headline-hidden"><span><?php echo $hidden_title; ?></span></h1>
					</section>
			<?php	
				}
				else{
					// Page archive
					if (is_archive() || is_page_template( 'template-archive.php' ) || is_page_template( 'template-archive-work.php' ) || is_page_template( 'template-archives-journal.php' )) { ?>
							<section class="full-page">
								<h1 id="headline-hidden"><span>Archives</span></h1>
							</section>
					<?php 
						}
					// Front page
					if (is_front_page()) { ?>
							<section class="full-page">
								<h1 id="headline-hidden"><span>Salut</span></h1>
							</section>
					<?php 
						}
					// Page gazette
					if (is_home() || is_singular('post')) {
							?>
						<section class="full-page">
							<h1 id="headline-hidden"><span>Gazette</span></h1>
						</section>
					<?php 
						}
					// Page Portfolio
					if (is_page_template( 'template-last-work.php' )) {
						
						$args = array( 'post_type' => 'work' );
						$last = wp_get_recent_posts( $args );
						$last_work_id = $last['0']['ID'];
						$hidden_title = get_field('hidden_title', $last_work_id);
						if (!empty($hidden_title)) {
						?>
							<section class="full-page">
								<h1 id="headline-hidden"><span><?php echo($hidden_title); ?></span></h1>
							</section>

					<?php
						}

					?>

					<?php 


						}
					// Work
					if (is_singular( 'work' )) {
						
						?>
						<section class="full-page">
							<h1 id="headline-hidden"><span>Portfolioaaa</span></h1>
						</section>

					<?php
					
						}
					// Studio
					if (is_page_template( 'template-bytheway.php' )) {
						?>
						<section class="full-page">
							<h1 id="headline-hidden"><span>By the ouais ouais</span></h1>
						</section>

						<?php
							}
					}
				?>
				<?php endwhile; ?>
