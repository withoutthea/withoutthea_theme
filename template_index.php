<?php
/*
Template Name: Static Index Page Template
*/
get_header(); ?>

<!-- Row for main content area -->
	<div class="small-12 large-12 columns" role="main">
        
        <?php if (get_theme_mod('hide_slider') == '') : ?>
        <div class="row">
            <div class="hide-for-small large-12 colums wota-bottom-border">
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
        </div>
        <?php endif; ?>
        
        <?php if (get_theme_mod('hide_boxes') == '') : ?>
        <div class="row wota-pad-the-top wota-bottom-border">
            <div class="large-4 columns">
                <div class="panel"><?php echo get_theme_mod('wota_customize_boxes_textbox_1', 'No panel text saved for this yet.' ); ?></div>
            </div>
            <div class="large-4 columns">
                <div class="panel"><?php echo get_theme_mod('wota_customize_boxes_textbox_2', 'No panel text saved for this yet.' ); ?></div>
            </div>
            <div class="large-4 columns">
                <div class="panel"><?php echo get_theme_mod('wota_customize_boxes_textbox_3', 'No panel text saved for this yet.' ); ?></div>
            </div>
        </div>
        <?php endif; ?>
        
        <?php if (get_theme_mod('hide_panels') == '') : ?>
        <div class="row wota-pad-the-top">
            <div class="large-3 columns">
                <?php echo get_theme_mod('wota_customize_panels_textbox_1', 'No panel text saved for this yet.' ); ?>
            </div>
            <div class="large-6 columns wota-border-left">
                <?php echo get_theme_mod('wota_customize_panels_textbox_2', 'No panel text saved for this yet.' ); ?>
            </div>
            <div class="large-3 columns wota-border-left">
                <?php echo get_theme_mod('wota_customize_panels_textbox_3', 'No panel text saved for this yet.' ); ?>
            </div>
        </div>
        <?php endif; ?>

	</div>
		
<?php get_footer(); ?>