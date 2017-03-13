<?php 
list($bfa_ata, $cols, $left_col, $left_col2, $right_col, $right_col2, $bfa_ata['h_blogtitle'], $bfa_ata['h_posttitle']) = bfa_get_options();
get_header(); 
extract($bfa_ata); 
?>
<style type="text/css">
/* 
	Styles triplevé pour le blocs en page d'accueil 
*/
div#envedette h2{font-size:20px;color:#333333;margin:0; padding:0;}
div#envedette div.vedette{margin:0; padding :0; float:left; width:168px; float:left; margin:10px 3px 0 3px; padding:5px;  background:#F3F3F3;  border: 1px solid #990000}
div#envedette h3 {margin-top:0; min-height:45px;}
div#envedette h3 a, div#envedette h3 a:link {text-decoration:none; font-weight:bold;font-size:12px;}
div#envedette h3 a:hover, div#envedette h3 a:active {text-decoration:underline;}
div#envedette p.toutes{margin:15px 0; border-bottom:1px dotted #CCCCCC;text-align:left; padding-bottom:10px;}
div#envedette p.toutes a{font-size:13px; font-weight:bold;text-decoration:none; color:#909090 }
div#envedette p.toutes a:hover,div#envedette p.toutes a:active {text-decoration:underline; color:rgb(204, 0, 0);}
div#envedette span.date{color:#666666; font-size:11px; }
div#envedette img.thumbvedette{float:none;  margin:5px auto;}
div#envedette div.tb{text-align:center; width:inherit;}
</style>

<?php /* --------------------------  DEBUT  code page accueil tripleve  -------------------------- */ ?>

<?php /* If there are any posts: */
if (have_posts()) : $bfa_ata['postcount'] = 0; /* Postcount needed for option "XX first posts full posts, rest excerpts" */ ?>
	<?php if (function_exists('ec3_get_schedule')): ?>
		<div id="envedette">
		<h2>Prochaines sorties</h2>
		<?php $my_query = "showposts=3&order=DESC&post_type=post&category_name=events"; $my_query = new WP_Query($my_query); ?>
			<?php if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); ?>
				<div id="post-<?php the_ID(); ?>" class="vedette" >
						
						<h3><a href="<?php the_permalink(); ?>" title= "<?php echo("Consultez le billet "); the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
						<?php 
						
						?>
						<?php echo( "<span class=\"date\">".
									 ec3_get_schedule(
										'%s ',
										'%1$s %3$s %2$s ',
										'[ %s] '
									) .
									"</span>"
						); 
						?>
						
						<div class="tb">
							<?php 
			
								if ( has_post_thumbnail() ) {
									the_post_thumbnail('thumbnail', array('class' => 'thumbvedette'));
								} 
							?>
						</div>
					<div class="entry-content">
						<?php // the_content(); ?>
					</div>
				</div>	
		<?php endwhile; // end of one post ?>
	<?php endif;  //end function exists ec3_get_schedule ?>
<?php endif; //end of loop ?>

<div style="clear:both;"></div>
<p class="toutes"><a href="/index.php/category/events/">Toutes les sorties »</a></p>
</div>


<?php /* --------------------------  FIN code page accueil tripleve -------------------------- */ ?>

<?php /* If there are any posts: */
if (have_posts()) : $bfa_ata['postcount'] = 0; /* Postcount needed for option "XX first posts full posts, rest excerpts" */ ?>

	<?php // Deactivated since 3.6.5
	# include 'bfa://content_above_loop'; 
	// Uses the following static code instead: ?>
	<?php bfa_next_previous_page_links('Top'); // For MULTI post pages if activated at ATO -> Next/Previous Navigation:  ?>

	<?php while (have_posts()) : the_post(); $bfa_ata['postcount']++; ?>
	
		<?php // Deactivated since 3.6.5
		#include 'bfa://content_inside_loop'; 
		// Uses the following static code instead: ?>
		<?php bfa_next_previous_post_links('Top'); // For SINGLE post pages if activated at ATO -> Next/Previous Navigation  ?>
		<?php /* Post Container starts here */
		if ( function_exists('post_class') ) { ?>
		<div <?php if ( is_page() ) { post_class('post'); } else { post_class(); } ?> id="post-<?php the_ID(); ?>">
		<?php } else { ?>
		<div class="<?php echo ( is_page() ? 'page ' : '' ) . 'post" id="post-'; the_ID(); ?>">
		<?php } ?>
		<?php bfa_post_kicker('<div class="post-kicker">','</div>'); ?>
		<?php bfa_post_headline('<div class="post-headline">','</div>'); ?>
		<?php bfa_post_byline('<div class="post-byline">','</div>'); ?>
		<?php bfa_post_bodycopy('<div class="post-bodycopy clearfix">','</div>'); ?>
		<?php bfa_post_pagination('<p class="post-pagination"><strong>'.__('Pages:','atahualpa').'</strong>','</p>'); ?>
		<?php bfa_post_footer('<div class="post-footer">','</div>'); ?>
		</div><!-- / Post -->	
						
	<?php endwhile; ?>

	<?php // Deactivated since 3.6.5
	# include 'bfa://content_below_loop'; 
	// Uses the following static code instead: ?>
	<?php bfa_get_comments(); // Load Comments template (on single post pages, and static pages, if set on options page): ?>
	

<?php /* END of: If there are any posts */
else : /* If there are no posts: */ ?>

<?php // Deactivated since 3.6.5
#include 'bfa://content_not_found'; 
// Uses the following static code instead: ?>
<h2><?php _e('Not Found','atahualpa'); ?></h2>
<p><?php _e("Sorry, but you are looking for something that isn't here.","atahualpa"); ?></p>

<?php endif; /* END of: If there are no posts */ ?>

<?php endif; /* Triplevé : Ajout d'un if supplémentaire pour faire fonctionner ce gabarit.... */  ?>

<?php get_footer(); ?>