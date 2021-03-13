<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>

<?php
  global $theme_path;
  global $base_path;

?>

<?php 
$title = $fields['field_views_title']->content;
$image = $fields['field_episode_image']->content;
$desc = $fields['field_description']->content;
$player = $fields['body']->content;
$tags = $fields['field_episode_tags']->content;
$itunes = $fields['field_itunes_link']->content;
$stitcher = $fields['field_stitcher_link']->content;
$directdownload = $fields['field_directdownload_link']->content;
$date = $fields['created']->content;
$edit = $fields['edit_node']->content;
$spotify = $fields['field_spotfiy']->content;

?>

<!-- DISPLAY FOR DESKTOP -->
<div class="desktop-view">
	<figure class="effect-lily">
	<div class="views-field-field-episode-image">
		<?php print $image; ?>
	</div>
		<figcaption>
			<div>
			<h2 class="eps-view-title">
			<?php print $title; ?>
			</h2>		
				<p>
				<a class="directdownload-link" href="<?php print $directdownload ?>" target="_blank"><img src="<?php print $base_path . $theme_path . "/images/directdownload.png";?>" class="directdownload-logo"></a>
				<a class="itunes-link" href="<?php print $itunes ?>" target="_blank"><img src="<?php print $base_path . $theme_path . "/images/itunes.svg";?>" class="itunes-logo"></a>
				<a class="spotify-link" href="<?php print $spotify ?>" target="_blank"><img src="<?php print $base_path . $theme_path . "/images/spotify-logo.svg";?>" class="spotify-logo"></a>
				<a class="stitcher-link" href="<?php print $stitcher ?>" target="_blank"><img src="<?php print $base_path . $theme_path . "/images/stitcherlogo.png";?>" class="stitcher-logo"></a>

				</p>
			</div>
		</figcaption>	
	</figure>
	<div class="ep-info">
		<?php print $desc; ?>
		<p class="ep-tags"><?php print $tags; ?></p>
		<p class="publish-date">Published: <?php print $date; ?></p>
		<?php print $edit; ?>
	</div>
	<div class="views-player"><?php print $player; ?></div>
</div>


<!-- DISPLAY FOR MOBILE -->
<div class="mobile-view">
	<div class="ep-wrapper">
		<div class="mobile-title">
			<strong><?php print $title; ?></strong>
		</div>	
		<div class="views-field-field-episode-image">
			<?php print $image; ?>
		</div>
		<?php print $desc; ?>
		<div class="download-icons-wrap">
			<div class="directdownload-mobile mobile-icon">
				<a class="directdownload-link" href="<?php print $directdownload ?>" target="_blank">
					<img src="<?php print "sites/default/files/directdownload-mobile.png";?>" class="directdownload-logo" width="70px">
				</a>
			</div>
			<div class="itunes-mobile mobile-icon">
				<a class="itunes-link" href="<?php print $itunes ?>" target="_blank">
					<img src="<?php print "sites/default/files/itunesheader.png";?>" class="itunes-logo" width="70px">
				</a>
			</div>
			<div class="stitcher-mobile mobile-icon">
				<a class="stitcher-link" href="<?php print $stitcher ?>" target="_blank">
					<img src="<?php print "sites/default/files/stitcherheader.png";?>" class="stitcher-logo" width="70px">
				</a>
			</div>
			<div class="stitcher-mobile mobile-icon">
				<a class="spotify-link" href="<?php print $spotify ?>" target="_blank">
					<img src="<?php print "sites/all/themes/blogger_theme/images/spotify_2015.png";?>" class="stitcher-logo" width="70px">
				</a>
			</div>
		</div>
		<p class="tags-label">Tags:</p>
		<div class="tags"><?php print $tags; ?></div>
	</div>
</div>
