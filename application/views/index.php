<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Infinia's Summer Home!</title>
	<?=$alpha?>
</head>
<body>
	<div class="container-fluid parallax-window screen-wide" data-parallax="scroll" data-image-src="<?=base_url('public/img/kurobg.png')?>">
		<div class="jumbotron jumbotron-transparent continuous">
			<h1>Welcome to Infinia's Summer Home!</h1>
			<p>This page is currently under construction!</p>
			<hr />
			<h1>Hi, let me introduce myself.</h1>
			<div class="darker">
				<p>
					My name is <strong>Isaac Yong</strong> (Infiniafication or Infinia) and I am from <a href="https://goo.gl/maps/JQOAO" target="_blank">Kuching, Sarawak, Malaysia</a>. <br /> 
					I'm currently <?=date('Y')-1993?> years old and I've just recently completed the final semester of my degree in Computer Science at <a href="http://www.swinburne.edu.my/" target="_blank">Swinburne University of Technology, Sarawak Campus</a>.
				</p>
				<p>
					I worked in a team of four for my <strong>Final Year Project</strong> entitled "Smart Home". I was assigned as the project team leader who was responsible for planning and making sure the project ran smoothly. Besides that, I was the lead Frontend Developer and was in charge of <abbr title="User Experience">UX</abbr> and the <abbr title="User Interface">UI</abbr> for the mobile web application which you may see a <a href="../smarthome" target="_blank">sample here</a>. <br />
					You may read more about my project <a href="#">here</a>.
				</p>
			</div>
		</div> <!-- /jumbotron -->
		<div class="jumbotron jumbotron-white continuous">
			<h2>What I can do</h2>
			<ul>
				<li>
					<h3>Code. <small>Whether it's coding a website or coding algorithms, I'm up to the task. I take coding for efficiency and coding with standards very seriously.</small></h3>
				</li>
				<li>
					<h3>Design. <small>From the layout of an entire page to details as fine as single pixels, I carry with me the trait that the average programmer doesn't: <strong>Creativity</strong>.</small></h3>
				</li>
				<li>
					<h3>Present. <small>I love presentations &#8212; especially the more spontaneous ones. Among my peers, I am considered to be one of the best presenters.</small></h3>
				</li>
				<li>
					<h3>Analyze. <small>No matter what I'm doing, I'm always analyzing. I especially love to analyze user interfaces and codes that increase efficiency. Also, analyzing game balance is a thing I do daily.</small></h3>
				</li>
			</ul>
		</div> <!-- /jumbotron -->
		<div class="jumbotron jumbotron-transparent continuous">
			<div class="darker">
				<h2>And what do I want to do?</h2>
				<p>
					I want to live my life doing something that I love doing, everyday. On top of that, I want to be able to grow in a friendly and motivating environment. <br />
					My true aspiration is to be able to design and develop games as well as to keep game balance (and mechanics) in check. <br />
					Besides that, I dream that someday, I will be able to successfully flesh the idea of a game that I've had (and have been continuously working on) for a long time.
				</p>
				<h2>So, what else do I do?</h2>
				<p>
					I love playing computer games and have been playing computer games since I was 11. I am a huge fan of competitive gaming but currently play games more casually than competitively.
				</p>
				<h2>Who is that in the background?</h2>
				<p>
					That's Ciel Phantomhive from the anime Black Butler (<span lang="ja">黒執事</span> or Kuroshitsuji). <br />
					He's one of my favourite characters thus far in all of the movies and anime that I've watched. He is determined and makes a firm stand on what he believes in. He bears a tainted path and a scarred life (some would call it cursed) but accepts his fate and continues to move forward. Despite it all, he still has a kind heart for others and wishes for them to not be involved with him too much because of the darkness that he may bring upon them. <br />
					Also, cute factor: he always has to rely on Sebastian Michaelis (his demon butler) to get things done for him, including dressing him up daily.
				</p>
			</div>
		</div> <!-- /jumbotron -->
		<div class="jumbotron jumbotron-white continuous">
			<h1>How can you contact me?</h1>
			<h2>
				<dl class="dl-horizontal">
					<dt>Email</dt>
					<dd><?=safe_mailto('infiniafication@gmail.com', 'Send me an email')?></dd>
					<dt>Linkedin</dt>
					<dd><a href="http://my.linkedin.com/in/infinia/" target="_blank">Isaac on Linkedin!</a></dd>
				</dl>
				<small>I prefer not to disclose my Facebook or Twitter information.</small>
			</h2>
		</div> <!-- /jumbotron -->
	</div> <!-- /container-fluid -->
	<?=$omega?>
</body>
</html>