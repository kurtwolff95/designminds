<?php get_header(); ?>
<div id="main">

	<div class="site-title">
		<?php
			bloginfo('name');
		?>
	</div>

	<div id="column1">
		
		<div class="content-box aboutbox">
			<div class="large-callout">
				<span id="top">Melbourne</span><br>
				<span id="middle">website design</span><br>
				<span id="bottom">&amp; development</span>
			</div>
			<h2 class="boxheading">About Us</h2>
			<p class="aboutp">
				Design Minds sprouted into life in early 2014, a mutual passion within our team motivates us to design and 
				implement beautiful websites. <strong>We create to inspire and motivate.</strong>
			</p>
			
				<h2 class="boxheading">News from the team</h2>
				<ul>
					<?php
					$args = array( 'posts_per_page' => 5, 'category' => 2 );
					$newsposts = get_posts( $args );
					foreach ( $newsposts as $post ) : setup_postdata( $post ); 
					?>
					<li>
						<h3 class="newstitle"><?php the_title(); ?></h3>
						<p><?php the_content(); ?></p>
					</li>
					<?php
						//Close the request: if has thumb, get everything 
						endforeach; 
						wp_reset_postdata();
					?>
				</ul>
			</p><!--News Paragraph-->
		</div><!--.aboutbox-->
		<div class="content-box portfoliobox">
			<ul>
				<?php
				$args = array( 'posts_per_page' => 5, 'category' => 3 );
				$portfolioposts = get_posts( $args );
				foreach ( $portfolioposts as $post ) : setup_postdata( $post ); 
				?>
				<li>
					<?php 
					if ( has_post_thumbnail() ) 
					{
					?>
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail(); ?>
					</a>
					<!--<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>-->
					<!--<p><?php the_content(); ?></p>-->
				</li>
				<?php
					} //Close the request: if has thumb, get everything 
					endforeach; 
					wp_reset_postdata();
				?>
			</ul>
		</div>
	</div><!--#column1-->
	<div id="column2">
		<div class="content-box" id="form-info">
			<h2 id="form-info-title">Contact us for a quote</h2>
			<p id="form-info-para">To find out how we can help your small business, fill the in form below.<br>There are no obligations, and we don't follow up unless you request.</p>
		</div>
		<div class="content-box formbox">
			<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 2 ); }?>
		</div><!--.formbox-->
		
	</div><!--#column2-->

</div><!--#main-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>