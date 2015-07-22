<?php
/*
WP Post Template: Artist Assets
*/
?>
<head><link href="/cloudempire-website/wp-content/themes/cloud2015/assets/css/lightbox.css" rel="stylesheet"></head>
<body>
<div class="top-panel">
<div class="company-slider">
  <div class="company-slide slide" style="background: #FFFFFF url('<?php the_field("artist_headerbg"); ?>') no-repeat top right fixed;">
	<div class="text-container">
		<div class="text-title">
		<h1><?php the_field('act_name'); ?></h1>
		</div>
		<div class="text-body">
		<?php the_field('artist_tagline'); ?>
		</div>
	</div>
  </div>
</div>
</div>

<?php while (have_posts()) : the_post(); ?>
<!-- Custom Field Calls -->
<?php
	// Video Embed Calls
	$video1= get_post_meta( get_the_ID(), 'video1', true);
	$video2= get_post_meta( get_the_ID(), 'video2', true);
	$video3= get_post_meta( get_the_ID(), 'video3', true);
	$video4= get_post_meta( get_the_ID(), 'video4', true);
	$video5= get_post_meta( get_the_ID(), 'video5', true);
	$video6= get_post_meta( get_the_ID(), 'video6', true);
	// Streaming Embed Calls
	$soundcloud_stream= get_post_meta ( get_the_ID(), 'soundcloud_stream', true);
	$bandcamp_stream= get_post_meta ( get_the_ID(), 'bandcamp_stream', true);
	$id= get_post_meta ( get_the_ID(), 'bandcamp_id', true);
	// Social Media Link Calls
	$weblink= get_post_meta ( get_the_ID(), 'weblink', true);
	$fbook= get_post_meta ( get_the_ID(), 'fbook', true);
	$twitter= get_post_meta ( get_the_ID(), 'twitter', true);
	$instagram= get_post_meta ( get_the_ID(), 'insta', true);
	$soundcloud= get_post_meta ( get_the_ID(), 'soundcloud', true);
	$bandcamp= get_post_meta ( get_the_ID(), 'bandcamp_id', true);
	$tumblr= get_post_meta ( get_the_ID(), 'tumblr', true);
	$cbc= get_post_meta ( get_the_ID(), 'cbcmusic', true);
	$youtube= get_post_meta ( get_the_ID(), 'youtube', true);
	$myspace= get_post_meta ( get_the_ID(), 'myspace', true);
	// Artist Asset Calls
	$hotpoints= get_post_meta ( get_the_ID(), 'hot_points', true);
	$album1= get_post_meta ( get_the_ID(), 'album1', true); 
	
?>
  <article>
    <div class="container-fluid">
      <aside class="primary-panel col-md-4">
<!--Social Media-->
        <?php if ($weblink || $fbook || $twitter || $instagram || $youtube || $tumblr || $bandcamp || $soundcloud || $myspace || $cbc ) : ?><h3>Social Links</h3><?php endif; ?>
	<ul class="list-unstyled">
	 <?php if ( ! empty( $webLink ) ) :?><li class="m-nav-hide" style="display: inline; font-size: 25px;"><a href="<?php echo $weblink; ?>" target="_blank"><i class="fa fa-globe"></i></a></li><?php endif; ?>
	<?php if ( ! empty ( $fbook ) ) : ?><li class="m-nav-hide" style="display: inline; font-size: 25px;"><a href="<?php echo $fbook; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li><?php endif; ?>
	<?php if ( ! empty ( $twitter ) ) : ?><li class="m-nav-hide" style="display: inline; font-size: 25px;"><a href="<?php echo $twitter; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li><?php endif; ?>
	<?php if ( ! empty ( $instagram ) ) : ?><li class="m-nav-hide" style="display: inline; font-size: 25px;"><a href="<?php echo $instagram; ?>" target="_blank"><i class="fa fa-instagram"></i></a></li><?php endif; ?>
	<?php if ( ! empty ( $soundcloud ) ) : ?><li class="m-nav-hide" style="display: inline; font-size: 25px;"><a href="<?php echo $soundcloud; ?>" target="_blank"><i class="fa fa-soundcloud"></i></a></li><?php endif; ?>
	<?php if ( ! empty ( $bandcamp ) ): ?><li class="m-nav-hide" style="display: inline; font-size: 25px;"><a href="<?php echo $bandcamp; ?>" target="_blank"><img src="http://www.cloudempirecreative.com/wp-content/uploads/2015/07/bandcamp-01.png" style="max-width: 25px;" /></a></li><?php endif; ?>
	<?php if ( ! empty ( $youtube ) ) : ?><li class="m-nav-hide" style="display: inline; font-size: 25px;"><a href="<?php echo $youtube; ?>" target="_blank"><i class="fa fa-youtube"></i></a></li><?php endif; ?>
	<?php if ( ! empty ( $cbc ) ) : ?><li class="m-nav-hide" style="display: inline; font-size: 25px;"><a href="<?php echo $cbc; ?>" target="_blank"><img src="http://www.cloudempirecreative.com/wp-content/uploads/2015/07/CBC-01.png" style="max-width: 25px;" /></a></li><?php endif; ?>
	<?php if ( ! empty ( $myspace ) ) : ?><li class="m-nav-hide" style="display: inline; font-size: 25px;"><a href="<?php echo $myspace; ?>" target="_blank"><img src="http://www.cloudempirecreative.com/wp-content/uploads/2015/07/myspace.png" style="max-width: 25px;"/></a></li><?php endif; ?>
	<?php if ( ! empty ( $tumblr ) ) : ?><li class="m-nav-hide" style="display: inline; font-size: 25px;"><a href="<?php echo $tumblr; ?>" target="_blank"><i class="fa fa-tumblr"></i></a></li><?php endif; ?>
	</ul>
	<!--Hot Points -->
        <?php if ($hotpoints ) : ?><h3>Hot Points</h3><?php endif; ?>
	<?php if ($hotpoints ) : ?><?php echo $hotpoints; ?><?php endif; ?>
	<!--Promoter Assets -->
	<?php if ($album1 ) : ?><h3>Albums</h3><?php endif; ?>
	<?php if ($album1 ) : ?><h4><?php the_field('album_name1'); ?></h4><?php endif; ?>
	<?php if ($album1 ) : ?><img src="<?php the_field('artwork1'); ?>" style="max-width: 290px;" width="90%;"/><?php endif; ?>
	<?php if ($album1 ) : ?><p><?php the_field('review'); ?></p><?php endif; ?>
	<?php if ($album1 ) : ?><button><a href="<?php the_field('artwork_tif1'); ?>" target="_blank">Download Artwork (.TIF)</a></button><?php endif; ?><br />
	<?php if ($album1 ) : ?><button><a href="<?php the_field('artwork1'); ?>" target="_blank">Download Artwork (.JPG)</a></button><?php endif; ?><br />
	<?php if ($album1 ) : ?><button><a href="<?php echo $album1 ?>" target="_blank">Download the Album</a></button><?php endif; ?>
      </aside>
      <div class="secondary-panel col-md-8">
        <h3><?php the_field('act_name'); ?></h3>
        <?php the_field('artist_biography'); ?>
<!--Photos -->
<div class="row"><div class="col-md-3">
<a href="<?php the_field('photo1'); ?>" data-lightbox="<?php the_field('photo1'); ?>"><img src="<?php the_field('photo1'); ?>" style="max-width=150px;" width="90%" /></a>
</div>
<div class="col-md-3"><img src="<?php the_field('photo2'); ?>" style="max-width=150px;" width="90%" /></div>
<div class="col-md-3"><img src="<?php the_field('photo3'); ?>" style="max-width=150px;" width="90%" /></div>
<div class="col-md-3"><img src="<?php the_field('photo4'); ?>" style="max-width=150px;" width="90%" /></div></div>
&nbsp;
<div class="row" style="padding-bottom: 10px;"><div class="col-md-3"><img src="<?php the_field('photo5'); ?>" style="max-width=150px;" width="90%" /></div>
<div class="col-md-3"><img src="<?php the_field('photo6'); ?>" style="max-width=150px;" width="90%" /></div>
<div class="col-md-3"><img src="<?php the_field('photo7'); ?>" style="max-width=150px;" width="90%" /></div>
<div class="col-md-3"><img src="<?php the_field('photo8'); ?>" style="max-width=150px;" width="90%" /></div></div>
&nbsp;
	<!--Streaming Embeds-->
	<?php if ($soundcloud_stream ) : ?><iframe width="100%" height="450" scrolling="no" frameborder="no" src="<?php echo $soundcloud_stream; ?>"></iframe><?php endif; ?>
<?php if ($bandcamp_stream ) : ?><iframe style="border: 0; width: 350px; height: 470px;" src="https://bandcamp.com/EmbeddedPlayer/album=<?php echo $id; ?>/size=large/bgcol=ffffff/linkcol=0687f5/tracklist=false/transparent=true/" seamless><a href="<?php echo $bandcamp_stream; ?>">Places To Die by Rob Moir</a></iframe><?php endif; ?>
<!--Video Embeds-->
	<?php if ($video1 || $video2 || $video3 || $video4 || $video5 || $video6 ) : ?>
	<h3><?php the_field('act_name')?>'s Videos</h3>
	<?php endif; ?>
	<div class="row"><div class="col-md-6" style="padding: 5px;">
		<?php if ($video1 ) : ?><iframe width="350" height="197" src="//www.youtube.com/embed/<?php echo $video1; ?>" frameborder="0" allowfullscreen></iframe><?php endif; ?></div>
<div class="col-md-6" style="padding: 5px;">
		<?php if ($video2 ) : ?><iframe width="350" height="197" src="//www.youtube.com/embed/<?php echo $video2; ?>" frameborder="0" allowfullscreen></iframe><?php endif; ?></div></div>
<div class="row"><div class="col-md-6" style="padding: 5px;">
		<?php if ($video3 ) : ?><iframe width="350" height="197" src="//www.youtube.com/embed/<?php echo $video3; ?>" frameborder="0" allowfullscreen></iframe><?php endif; ?></div>
<div class="col-md-6" style="padding: 5px;">
		<?php if ($video4 ) : ?><iframe width="350" height="197" src="//www.youtube.com/embed/<?php echo $video4; ?>" frameborder="0" allowfullscreen></iframe><?php endif; ?></div></div>	
<div class="row"><div class="col-md-6" style="padding: 5px;">
		<?php if ($video5 ) : ?><iframe width="350" height="197" src="//www.youtube.com/embed/<?php echo $video5; ?>" frameborder="0" allowfullscreen></iframe><?php endif; ?></div>
<div class="col-md-6" style="padding: 5px;">
		<?php if ($video6 ) : ?><iframe width="350" height="197" src="//www.youtube.com/embed/<?php echo $video6; ?>" frameborder="0" allowfullscreen></iframe><?php endif; ?></div></div><php endwhile; ?>
      </div>
      <div class="clearfix"></div>
    </div>
  </article>

<?php endwhile; ?>
<script src="/cloudempire-website/wp-content/themes/cloud2015/assets/js/lightbox-plus-jquery.js"></script>
</body>
