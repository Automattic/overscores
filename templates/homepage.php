<?php
/**
 * Template Name: Homepage Template
 *
 * @package Overscores
 * @since Overscores 1.0
 */

get_header(); ?>	

		<div id="primary" class="site-content">
			
			<section id="generator" role="main">
				<div class="wrap">
					<h1>Lets generate some content</h1>
					<?php do_action( 'underscoresme_print_form' ); ?>
				</div><!-- .wrap -->
			</section><!-- #generator -->

			<section id="about">
				<div class="wrap">
					<div id="intro">
						<h1>What is Overscores?</h1>
						<p><em>Overscores</em> is a content-generation tool for making attractive and simple demo contentfor your WordPress site. Unlike the <a href="https://codex.wordpress.org/Theme_Unit_Test">Theme Unit Test</a>, <em>Overscores</em> is not meant for displaying test data, but instead is meant to give you a head start when crafting content for your theme demo sites - that you hopefully created using <a href="http://underscores.me">Underscores</a>.</p>
					</div><!-- #intro -->
					<div id="features">

						<h1>How does this work?</h1>
						<p>Content Gen uses Wikipedia and Pexels to pull in content and creates an XML file you can import into your WordPress site. Using a category from Wikipedia and a search term for Pexels.com, you can created any number of posts and pages, with a variety of posts with and without featured images.</p>

						<h1>What’s the license info?</h1>
						<p>Most text in Wikipedia is released CC-BY-SA and GFDL, which require source attribution. Pexels images are CC0, which means you can copy, modify, distribute and perform the work, even for commercial purposes, without attribution or permission.</p>

						<h1>Can I run this myself?</h1>
						<p>Yes, you can run Content Gen yourself. Download and activate the plugin from Github, and then use the CLI command through WP CLI. More in-depth instructions on how to run Content Gen yourself can be found on Github.</p>

					</div><!-- #features -->
				</div><!-- .wrap -->
			</section><!-- #about -->
			
			<section id="contribute">
				<div class="wrap">
					<h1>Overscores is brought to you by these fine folks</h1>
					<?php 
					// <div id="github">
					// 	<a href="https://github.com/automattic/_s" title="Go to the Underscores page on github to contribute to the project">Underscores on github</a>
					// </div><!-- #github -->
					?>
					<ul id="team">
						<li><a title="Kelly Dwan" href="https://github.com/ryelle/"><img class="avatar" src="https://avatars3.githubusercontent.com/u/541093?v=3&amp;s=460" /></a></li>
						<li><a title="Mel Choyce" href="https://github.com/melchoyce/"><img class="avatar" src="https://avatars1.githubusercontent.com/u/2846578?v=3&amp;s=460" /></a></li>
						<li><a title="Hugo Baeta" href="https://github.com/hugobaeta/"><img class="avatar" src="https://avatars2.githubusercontent.com/u/1514660?v=3&amp;s=460" /></a></li>
					</ul><!-- #team -->
				</div><!-- .wrap -->
			</section><!-- #contribute -->

		</div><!-- #primary .site-content -->



<?php get_footer(); ?>