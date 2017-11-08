    <!-- Footer -->
<footer class="main-footer">
	<div class="top_footer">
		<div class="wrapper">
			<div class="footer_logo footer_inner">
				<?php if (ale_get_option('sitelogofooter')) { ?><a href="<?php echo home_url("/"); ?>" class="logo_link"><img src="<?php echo ale_get_option('sitelogofooter'); ?>" alt="Sitelogo"></a><?php }; ?>
			</div>
			<div class="menu_info footer_inner">
				<h4>Information</h4>
				<?php
	        if (has_nav_menu('footer_menu')) {
            wp_nav_menu(array(
                'theme_location'=> 'footer_menu',
                'menu'            => 'Footer Menu',
                'menu_class'    => 'footermenu cf',
                'walker'        => new Aletheme_Nav_Walker(),
                'container'        => '',
            ));
	        }
	        ?>
			</div>
			<div class="contacts footer_inner">
				<h4>Contacts</h4>
				<?php if(ale_get_option('footer_phone')) { ?>
					<div class="footer_phone">
						<?php echo ale_get_option('footer_phone'); ?>
					</div>
				<?php }; ?>
				<?php if(ale_get_option('footer_address')) { ?>
					<div class="footer_address">
						<?php echo ale_get_option('footer_address'); ?>
					</div>
				<?php }; ?>
				<?php if(ale_get_option('footer_email')) { ?>
					<div class="footer_email">
						<a href="mailto:<?php echo ale_get_option('footer_email'); ?>"><?php echo ale_get_option('footer_email'); ?></a>
					</div>
				<?php }; ?>
			</div>
			<div class="twitter footer_inner">
				TODO: Twitter
			</div>
		</div>
	</div>
	<div class="bottom_footer">
		<div class="wrapper">
			<div class="copyrights">
				<!-- Copy -->
				<?php if (ale_get_option('copyrights')) : ?>
						<?php echo ale_option('copyrights'); ?>
				<?php else: ?>
						&copy; <?php _e('2017 All Rights Reserved', 'iglesia')?>
				<?php endif; ?>
			</div>
			<!-- Social -->
			<div class="footer_social social_section">
				<?php if (ale_get_option('yt')) { ?><a href="<?php echo ale_get_option('yt'); ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a><?php } ?>
				<?php if (ale_get_option('insta')) { ?><a href="<?php echo ale_get_option('insta'); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a><?php } ?>
				<?php if (ale_get_option('twi')) { ?><a href="<?php echo ale_get_option('twi'); ?>"><i class="fa fa-twitter-square" aria-hidden="true"></i></a><?php } ?>
				<?php if (ale_get_option('fb')) { ?><a href="<?php echo ale_get_option('fb'); ?>"><i class="fa fa-facebook-official" aria-hidden="true"></i></a><?php } ?>
			</div>
		</div>
	</div>
</footer>

    <!-- Scripts -->
    <?php wp_footer(); ?>
</body>
</html>
