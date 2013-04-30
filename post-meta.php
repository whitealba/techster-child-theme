<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) )
	exit ;

/**
 * Post Meta-Data Template-Part File
 *
 * @file           post-meta.php
 * @package        Responsive
 * @author         Chris Wenk
 * @copyright      2013 Techster
 * @license        license.txt
 * @version        Release: 1.0.0
 * @filesource     wp-content/themes/techster-child-theme/post-meta.php
 * @link           http://codex.wordpress.org/Templates
 * @since          available since Release 1.0
 */
?>

<?php if ( is_single() ): ?>
				<h1 class="entry-title post-title"><?php the_title( ); ?></h1>
<?php else: ?>
				<h1 class="entry-title post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf( __( 'Permanent Link to %s', 'responsive' ), the_title_attribute( 'echo=0' ) ); ?>"><?php the_title( ); ?></a></h1>
<?php endif; ?>

<!-- added triangle-isosceles for speach bubble -->
<div class="post-meta pinched">
<?php responsive_post_meta_data(); ?>

	<?php if ( comments_open() ) : ?>
		<span class="comments-link">
		<span class="mdash">&mdash;</span>
	<?php comments_popup_link( __( 'No Comments &darr;', 'responsive' ), __( '1 Comment &darr;', 'responsive' ), __( '% Comments &darr;', 'responsive' ) ); ?>
		</span>
	<?php endif; ?> 
</div><!-- end of .post-meta -->