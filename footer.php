<?php if(get_post_type('post')):?>
	<?php get_sidebar()?>
<?php endif; ?>
</div>
<!-- /.row -->

<footer class="footer">
    <ul class="footer-nav">
        <li class="footer-nav__item"><a class="link--white" href="<?php echo get_theme_mod('footer_copy_url', 'http://'); ?>"></a><?php echo get_theme_mod('footer_copy', ' &copy; 2016 VDR Constructions'); ?></a></li>
        <li class="footer-nav__item">KVK: <a class="link--white" href="<?php echo get_theme_mod('footer_kvk_url', ' http://'); ?>"><?php echo get_theme_mod('footer_kvk', ' 66050243'); ?></a></li>
        <li class="footer-nav__item"> Tel.: <a class="link--white" href="tel: <?php echo get_theme_mod('footer_telnummer_url', '(+31)6-xx-xx-xx-xx'); ?>"><?php echo get_theme_mod('footer_telnummer', ' (+31)6-xx-xx-xx-xx'); ?></a></li>
        <li class="footer-nav__item">E-mail: <a class="link--white" href="mailto:<?php echo get_theme_mod('footer_email_url', 'info@vdrconstructions.nl'); ?>"><?php echo get_theme_mod('footer_email', ' info@vdrconstructions.nl'); ?></a></li>
    </ul>
</footer>

<?php wp_footer(); ?>
</body>

</html>
