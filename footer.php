<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

?>


<footer id="colophon" class="site-footer" style="background-color: #08512D;background-image:url('http://adidas-theme.local/wp-content/uploads/2024/01/pattern-bg.png');">
<style>
    ul{
        list-style: none;
    }
    ul ul{
        list-style-image: url('http://adidas-theme.local/wp-content/uploads/2024/01/Vector-1.png');
    }
    .wp-block-heading{
        margin-left:50px;
    }
</style>
	
<div class="container pb-2 footer-container" >
    <div class="footer-column">
        <?php if (is_active_sidebar('footer_column_1')) : ?>
            <ul id="footer-sidebar-1" class="footer-sidebar" >
                <?php dynamic_sidebar('footer_column_1'); ?>
            </ul>
        <?php endif; ?>
    </div>
    <div class="footer-column">
        <?php if (is_active_sidebar('footer_column_2')) : ?>
            <ul id="footer-sidebar-2" class="footer-sidebar">
                <?php dynamic_sidebar('footer_column_2'); ?>
            </ul>
        <?php endif; ?>
    </div>
    <div class="footer-column">
        <?php if (is_active_sidebar('footer_column_3')) : ?>
            <ul id="footer-sidebar-3" class="footer-sidebar">
                <?php dynamic_sidebar('footer_column_3'); ?>
            </ul>
        <?php endif; ?>
    </div>
</div>


</footer>
<!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
