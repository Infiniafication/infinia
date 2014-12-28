<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Infinia's Summer Home!</title>
	<?=$alpha?>
</head>
<body>
	<?=$nav?>
	<div class="container-fluid parallax-window screen-wide" data-parallax="scroll" data-image-src="<?=base_url('public/img/kurobg.png')?>">
		<div class="jumbotron jumbotron-white continuous">
			<h1>GunZ: The Duel <small>Not to be confused with GunZ: The Second Duel</small></h1>
			<p>
				This was the first "competitive game" that I played. It was a fast paced action <abbr title="Third-Person Shooter">TPS</abbr> game which required a lot of skill and practice to master. It seemed to me that there was an unlimited learning curve due to the nature of the game &#8212; the game was based around "glitching" to manually create &amp; recreate "moves" which players use to play. This "glitching" is commonly known by players as "K-Style (stance)".
			</p>
			<div class="media">
				<div id="yt-gunz" class="media-left media-middle">
					<!-- Left blank to load when page is ready with JS -->
					<!-- <iframe width="560" height="315" src="//www.youtube.com/embed/VF6RT0IC7Ro" frameborder="0" allowfullscreen></iframe> -->
				</div>
				<div class="media-body">
					<h2>Here's a brief look at the playstyle of the game <br />
					<small><strong>I do not own this video.</strong> <i>The beeping sounds indicate that the player has hit the enemy player.</i></small></h2>
					<h2>An example of K-Style</h2>
					<p class="text-justify">As you can notice, the player has to switch between sword and gun (2 shotguns) really quickly. The basic move is known as <code>Slash Shot (SS)</code> because of the combination of a <kbd>slash</kbd> before switching to the <kbd>gun</kbd> and <kbd>firing</kbd>. However, the original <code>Slash Shot (SS)</code> was found that it could be improved to <code>Reload Slash Shot (RSS)</code> which decreases the action response times &#8212; this was a combination of a <kbd>slash</kbd> before switching to the <kbd>gun</kbd> and <kbd>firing</kbd>, and then <kbd>reloading</kbd> at the very end before performing the next action (response time is increased here). So for example, if the player were to <kbd>reload</kbd> and <kbd>switch</kbd> back to the sword, the time it takes for the sword switch to respond will be decreased.</p>
				</div>
			</div>
			<div class="media">
				<div class="media-body media-middle">
					<h1>How does it look like physically?</h1>
					<p>Take a look at how fast our hands have to be and how well we have to coordinate to be able to play GunZ with K-Style!</p>
					<p class="text-right">Yeah, that's pretty much how we play the game.</p>
				</div>
				<div id="yt-gunz-hands" class="media-right media-middle">
					<!-- Left blank to load when page is ready with JS -->
					<!-- <iframe width="420" height="315" src="//www.youtube.com/embed/5IhOawjxcKk" frameborder="0" allowfullscreen></iframe> -->
				</div>
			</div>
		</div> <!-- /jumbotron -->
	</div> <!-- /container-fluid -->
	<?=$omega?>
</body>