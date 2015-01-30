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
		<div class="jumbotron jumbotron-transparent continuous">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 text-center">
					<h1>Hi, let me introduce myself.</h1>
					<div class="darker">
						<p>
							My name is <strong>Isaac Yong</strong> (Infiniafication or Infinia) and I am from <a href="https://goo.gl/maps/JQOAO" target="_blank">Kuching, Sarawak, Malaysia</a>. <br /> 
							I'm currently <?=date('Y')-1993?> years old and I'm currently awaiting my graduation in October 2015 for my Bachelor's Degree in Computer Science at <a href="http://www.swinburne.edu.my/" target="_blank">Swinburne University of Technology, Sarawak Campus</a>.
						</p>
						<h2 class="fyp">Final Year Project</h2>
						<p>
							I worked in a team of four for my <strong>Final Year Project</strong> entitled "Smart Home" which scored a <strong>High Distinction</strong> (HD; 85% and above). I was assigned as the project team leader who was responsible for planning and making sure the project ran smoothly. Besides that, I was the lead Frontend Developer and was in charge of <abbr title="User Experience">UX</abbr> and the <abbr title="User Interface">UI</abbr> for the mobile web application which you may see a <a href="../smarthome" target="_blank"><button class="btn btn-primary btn-sm" role="button">sample here</button></a> (password field filled intentionally). <br />
							You may read the <abbr title="User Interface">UI</abbr> document which I wrote <a href="https://docs.google.com/document/d/12JrqnLg8J0f-RMMSFJLS7vkrXYk2wt93tGsVchMqEyo/edit?usp=sharing" target="_blank">here</a>.
							You may see the coding repository <a href="https://bitbucket.org/epic-org/smart-home-web-app">here</a>. <br />
							Other documentation wrote by myself and the team <a href="https://drive.google.com/folderview?id=0B16TbRfIX4PYZ1BmRXRKUTB4alk&usp=sharing">here</a>.
						</p>
					</div>
				</div> <!-- /col-lg-8 -->
			</div> <!-- /row -->
		</div> <!-- /jumbotron -->
		<div class="jumbotron jumbotron-white continuous">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 text-center">
					<h2>What I can do</h2>
					<h3>Code. <br /><small>Whether it's coding a website or coding algorithms, I'm up to the task. I take coding for efficiency and coding with standards very seriously.</small></h3>
					<h3>Design. <br /><small>From the layout of an entire page to details as fine as single pixels, I carry with me the trait that the average programmer doesn't: <strong>Creativity</strong>.</small></h3>
					<h3>Present. <br /><small>I love presentations &#8212; especially the more spontaneous ones. Among my peers, I am considered to be one of the best presenters.</small></h3>
					<h3>Analyze. <br /><small>No matter what I'm doing, I'm always analyzing. Analyzing interfaces, codes and game balance is a thing I do daily.</small></h3>
				</div> <!-- /col-lg-8 -->
			</div> <!-- /row -->
		</div> <!-- /jumbotron -->
		<div class="jumbotron jumbotron-transparent continuous">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 text-center">
					<div class="darker">
						<h2>And what do I want to do?</h2>
						<p>
							I want to live my life doing something that I love doing, everyday. On top of that, I want to be able to grow in a friendly and motivating environment.
							My true aspiration is to be able to design and develop games as well as to keep game balance (and mechanics) in check.
							Besides that, I dream that someday, I will be able to successfully flesh the idea of a game that I've had (and have been continuously working on) for a long time.
						</p>
					</div>
				</div> <!-- /col-lg-8 -->
			</div> <!-- /row -->
		</div> <!-- /jumbotron -->
		<div class="jumbotron jumbotron-white continuous">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 text-center">
					<h2>So, what else do I do?</h2>
					<p>
						I love playing computer games and I play them a lot. I've been playing computer games since I was 11. I am a huge fan of competitive gaming but currently play games more casually than competitively.
					</p>
				</div> <!-- /col-lg-8 -->
			</div> <!-- /row -->
		</div> <!-- /jumbotron -->
		<div class="jumbotron jumbotron-transparent continuous">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 text-center">
					<div class="darker">
						<h2>Who is that in the background?</h2>
						<p>
							That's Ciel Phantomhive from the anime Black Butler (<span lang="ja">黒執事</span> or Kuroshitsuji). <br />
							He's one of my favourite characters thus far in all of the movies and anime that I've watched. He is determined and makes a firm stand on what he believes in. He bears a tainted path and a scarred life (some would call it cursed) but accepts his fate and continues to move forward. Despite it all, he still has a kind heart for others and wishes for them to not be involved with him too much because of the darkness that he may bring upon them. <br />
						</p>
					</div>
				</div> <!-- /col-lg-8 -->
			</div> <!-- /row -->
		</div> <!-- /jumbotron -->
		<div class="jumbotron jumbotron-white continuous">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 text-center">
					<h1>How can you contact me?</h1>
					<h2 class="row">
						<div class="col-lg-8 col-lg-offset-2 table-responsive">
							<table class="table">
								<tr>
									<td><strong>Email</strong></td>
									<td><?=safe_mailto('infiniafication@gmail.com', 'Send me an email')?></td>
								</tr>
								<tr>
									<td><strong>Linkedin</strong></td>
									<td><a href="http://my.linkedin.com/in/infinia/" target="_blank">Isaac on Linkedin!</a></td>
								</tr>
							</table>
						</div>
					</h2>
					<hr>
					<h2>Other Links</h2>
					<h2 class="row">
						<div class="col-lg-8 col-lg-offset-2 table-responsive">
							<table class="table">
								<tr>
									<td><a href="http://github.com/infiniafication">Github</a></td>
									<td><a href="https://bitbucket.org/infiniafication">Bitbucket</a></td>
								</tr>
							</table>
							<small>I prefer not to disclose my Facebook or Twitter information.</small>
						</div>
					</h2>
				</div> <!-- /col-lg-8 -->
			</div> <!-- /row -->
		</div> <!-- /jumbotron -->
	</div> <!-- /container-fluid -->
	<?=$omega?>
</body>
</html>