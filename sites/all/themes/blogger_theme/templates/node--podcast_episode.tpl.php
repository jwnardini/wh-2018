<?php
/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all, or
 *   print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct url of the current node.
 * - $terms: the themed list of taxonomy term links output from theme_links().
 * - $display_submitted: whether submission information should be displayed.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the following:
 *   - node: The current template type, i.e., "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type, i.e. story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode, e.g. 'full', 'teaser'...
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined, e.g. $node->body becomes $body. When needing to access
 * a field's raw values, developers/themers are strongly encouraged to use these
 * variables. Otherwise they will have to explicitly specify the desired field
 * language, e.g. $node->body['en'], thus overriding any language negotiation
 * rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 */
?>

<?php
  global $theme_path;
  global $base_path;

?>

<?php 
$image = render($content['field_episode_image']);
$desc = render($content['field_description']);
$player = render($content['body']);
$tags = render($content['field_episode_tags']);
$itunes = strip_tags(render($content['field_itunes_link']));
$googleplay = strip_tags(render($content['field_googleplay_link']));
$stitcher = strip_tags(render($content['field_stitcher_link']));
$directdownload = strip_tags(render($content['field_directdownload_link']));
$spotify = strip_tags(render($content['field_spotfiy']));
// $date = $content['created'];
// $edit = $content['edit_node'];


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
				<a class="googleplay-link" href="<?php print $googleplay ?>" target="_blank"><img src="<?php print $base_path . $theme_path . "/images/googleplay.png";?>" class="googleplay-logo"></a>
				<a class="spotify-link" href="<?php print $spotify ?>" target="_blank"><img src="<?php print $base_path . $theme_path . "/images/spotify-logo.svg";?>" class="spotify-logo"></a>
				<a class="stitcher-link" href="<?php print $stitcher ?>" target="_blank"><img src="<?php print $base_path . $theme_path . "/images/stitcherlogo.png";?>" class="stitcher-logo"></a>

				</p>
			</div>
		</figcaption>	
	</figure>
	<div class="ep-info">
		<?php print $desc; ?>
		<p class="ep-tags">Tags: <?php print $tags; ?></p>
		<p class="publish-date">Published: <?php print $date; ?></p>
	</div>
	<div class="views-player"><?php print $player; ?></div>
</div>


<!-- DISPLAY FOR MOBILE -->
<div class="mobile-view">
	<div class="ep-wrapper">
		<div class="mobile-title">
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
			<div class="googleplay-mobile mobile-icon">
				<a class="googleplay-link" href="<?php print $googleplay ?>" target="_blank">
					<img src="<?php print "sites/default/files/googleplayheader.png";?>" class="googleplay-logo" width="70px">
				</a>
			</div>
			<div class="stitcher-mobile mobile-icon">
				<a class="stitcher-link" href="<?php print $stitcher ?>" target="_blank">
					<img src="<?php print "sites/default/files/stitcherheader.png";?>" class="stitcher-logo" width="70px">
				</a>
			</div>
		</div>
		<div class="tags"><?php print $tags; ?></div>
	</div>
</div>
