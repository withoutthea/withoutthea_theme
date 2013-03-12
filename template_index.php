<?php
/*
Template Name: Static Index Page Template
*/
get_header(); ?>

<!-- Row for main content area -->
	<div class="small-12 large-12 columns" role="main">
        
        <div class="row">
            <div class="hide-for-small large-12 colums">
                <ul data-orbit>
                    <li>
                        <img src="http://faeyephotography.com/portfolio/weddings/engagement/01engagement.jpg" />
                        <div class="orbit-caption"><strong>Caption 1:</strong> This says something.</div>
                    </li>
                    <li>
                        <img src="http://faeyephotography.com/portfolio/weddings/engagement/02engagement.jpg" />
                        <div class="orbit-caption"><strong>Caption 2:</strong> This says something.</div>
                    </li>
                    <li>
                        <img src="http://faeyephotography.com/portfolio/weddings/engagement/03engagement.jpg" />
                        <div class="orbit-caption"><strong>Caption 3:</strong> This says something.</div>
                    </li>
                    <li>
                        <img src="http://faeyephotography.com/portfolio/weddings/engagement/04engagement.jpg" />
                        <div class="orbit-caption"><strong>Caption 4:</strong> This says something.</div>
                    </li>
                </ul>
            </div>
        
        <div class="row">
            <div class="large-4 columns">
                <div class="panel">Testing panel #1.</div>
            </div>
            <div class="large-4 columns">
                <div class="panel">Testing panel #2.</div>
            </div>
            <div class="large-4 columns">
                <div class="panel">Testing panel #3.</div>
            </div>
        </div>
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php reverie_entry_meta(); ?>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php comments_template(); ?>
		</article>
	<?php endwhile; // End the loop ?>

	</div>
		
<?php get_footer(); ?>