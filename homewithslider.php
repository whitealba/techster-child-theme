<?php
  
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;
  
/**
 * Home Page
 *
 * @file           home.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2012 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive-child-theme/home.php
 * @link           http://codex.wordpress.org/Template_Hierarchy
 * @since          available since Release 1.0
 */
?>
<?php get_header(); ?>
  
        <div id="featured" class="grid col-940 fit"><?php echo get_new_royalslider(3); ?></div><!-- end of #featured -->
  
  
    <?php get_sidebar('home'); ?>
    <?php get_footer(); ?>