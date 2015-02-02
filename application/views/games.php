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
			<h1>An example of what Mechanics I analyze</h1>
			<h2>GunZ: The Duel <small>Not to be confused with GunZ: The Second Duel</small></h2>
			<p>
				This was the first "competitive game" that I played. It was a fast paced action <abbr title="Third-Person Shooter">TPS</abbr> game which requires a lot of skill and practice to master. It seems to me that there was an unlimited learning curve due to the nature of the game &#8212; the game was based around "glitching" to manually create &amp; recreate "moves" which players use to play. This "glitching" is commonly known by players as "K-Style (stance)".
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
					<h2>How does it look like physically?</h2>
					<p>Take a look at how fast our hands have to be and how well we have to coordinate to be able to play GunZ with K-Style!</p>
					<p class="text-right">Yeah, that's pretty much how we play the game.</p>
				</div>
				<div id="yt-gunz-hands" class="media-right media-middle">
					<!-- Left blank to load when page is ready with JS -->
					<!-- <iframe width="420" height="315" src="//www.youtube.com/embed/5IhOawjxcKk" frameborder="0" allowfullscreen></iframe> -->
				</div>
			</div>
			<hr>
			<h1>An example of what Game Balance I analyze</h1>
			<h2>Granado Espada <small>or Sword of the New World</small></h2>
			<p>
				This game has so much potential in its PvP but it failed to deliver because of a few factors. <br />
				<small>(Note that all of these observations were made from back when I played the game years ago.)</small> <br />
				Here are 2 of the many: <br />
				<blockquote>
					<p>
						<strong>1. Blindpick</strong> <br />
						Players had to pick their lineups before searching for an opponent in the World Cross PvP system. This made it impossible to counter-pick opponents.
					</p>
					<br />
					<p>
						<strong>2. Imbalance</strong> <br />
						A lot of characters in the game are improperly treated in terms of balance. A very solid example, <a href="http://madnessbook.blogspot.com/2011/09/ramiro.html">Ramiro</a> uses the same stance as some other characters, except his base weapon is a weaker version.
						Characters that use Hanging Stance use Greatswords while Ramiro uses a Sword which has lower base stats. Ramiro also has lower base stats compared to other characters. <br />
						A good example character to compare him with would be <a href="http://madnessbook.blogspot.com/2011/09/grandice.html">Grandice</a> who has a total of 340 base stat points whereas Ramiro only has 290 base stat points. They both have the Hanging Guard stance, but Grandice uses a greatsword while Ramiro uses a sword. <br />
						His personal skill "Sprint", is also weaker than <a href="http://madnessbook.blogspot.com/2012/03/asoka.html">Asoka's</a> personal skill "Swift Move". The major reason (among other minor ones) why Sprint is weaker is because Sprint requires a cast time while Swift Move doesn't. <br />
						<i>Just because he's a kid, doesn't mean he has to be weaker.</i>
					</p>
				</blockquote>
				<p>
					<strong>Bonus content!</strong> Here's a video of me using Ramiro in my lineup to defeat <a href="http://ge.iahgames.com/news/NewsArticle.aspx?id=1828">Grandies</a> (different character; a younger, more powerful version of Grandice)! <br />
					<small>The people talking in the background aren't me, they're my friends that I was in Teamspeak with. I did not record my microphone audio at the time. And yes, we were whining about Grandies.</small>
				</p>
				<div id="ge-ramiro" class="text-center">
					<!-- Left blank to load when page is ready with JS -->
					<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/9BTFPaLHfB8" frameborder="0" allowfullscreen></iframe> -->
				</div>
			</p>
			<hr>
			<h1>An example of ideas that I mess around with</h1>
			<h2><a href="http://dnsea.wikia.com/wiki/Moonlord">Moonlord</a> from Dragon Nest</h2>	
			<p>
				<small>Currently, I feel the Moonlord class fails to impress.</small> <br />
				<strong>Here's an idea to revamp the class.</strong> <br />
				<blockquote>
					Flash Stance should be replaced by a passive skill that adds a "Moonlight Debuff" to opponents hit by the Moonlord's projectile skills.
					When enemies are hit by the Moonlord's projectiles (such as Moonlight Splitter or even Crescent Cleave), they get a "Moonlight Debuff".
					The Moonlord can then proc the debuff by attacking them with another projectile skill.
					Each skill that procs the debuff has a different effect: CCs, additional damage or buffs to the Moonlord.
					For example, an enemy (that has the "Moonlight Debuff") that is hit by Moonblade Dance will have its armor shredded by 30% for the next 6 seconds.
				</blockquote>
			</p>
		</div> <!-- /jumbotron -->
	</div> <!-- /container-fluid -->
	<?=$omega?>
</body>