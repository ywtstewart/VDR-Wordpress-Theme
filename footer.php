<?php if(get_post_type('post')):?>
<?php get_sidebar()?>
<?php endif; ?>
</div>
<!-- /.row -->


</div>

<?php if (!is_front_page()): ?>
<footer class="footer">
    <p><a href="<?php echo nl2br( esc_html(get_theme_mod('footer_copy_url', 'http://'))); ?>"></a><?php echo nl2br( esc_html(pll__(get_theme_mod('footer_copy', ' &copy; 2016 VDR Constructions')))); ?> |
        KVK: <a href="<?php echo nl2br( esc_html(get_theme_mod('footer_kvk_url', ' http://'))); ?>"><?php echo nl2br( esc_html(pll__(get_theme_mod('footer_kvk', ' 66050243')))); ?></a> |
        Tel.: <a href="tel: <?php echo nl2br( esc_html(get_theme_mod('footer_telnummer_url', ' (+31)6-xx-xx-xx-xx'))); ?>"><?php echo nl2br( esc_html(pll__(get_theme_mod('footer_telnummer', ' (+31)6-xx-xx-xx-xx')))); ?></a> |
        E-mail: <a href="mailto:<?php echo nl2br( esc_html(get_theme_mod('footer_email_url', ' info@vdrconstructions.nl'))); ?>"><?php echo nl2br( esc_html(pll__(get_theme_mod('footer_email', ' info@vdrconstructions.nl')))); ?></a></p>
</footer>
<?php else : ?>
    <footer class="footer">
        <p><a href="<?php echo nl2br( esc_html(get_theme_mod('footer_copy_url', 'http://'))); ?>"></a><?php echo nl2br( esc_html(pll__(get_theme_mod('footer_copy', ' &copy; 2016 VDR Constructions')))); ?> |
           KVK: <a href="<?php echo nl2br( esc_html(get_theme_mod('footer_kvk_url', ' http://'))); ?>"><?php echo nl2br( esc_html(pll__(get_theme_mod('footer_kvk', ' 66050243')))); ?></a> |
        Tel.: <a href="tel: <?php echo nl2br( esc_html(get_theme_mod('footer_telnummer_url', ' (+31)6-xx-xx-xx-xx'))); ?>"><?php echo nl2br( esc_html(pll__(get_theme_mod('footer_telnummer', ' (+31)6-xx-xx-xx-xx')))); ?></a> |
        E-mail: <a href="mailto:<?php echo nl2br( esc_html(get_theme_mod('footer_email_url', ' info@vdrconstructions.nl'))); ?>"><?php echo nl2br( esc_html(pll__(get_theme_mod('footer_email', ' info@vdrconstructions.nl')))); ?></a></p>


    </footer>


<?php endif; ?>


<?php wp_footer(); ?>
</body>

</html>
