
<section id="overscores-generator" role="main" class="generator-form-collapsed">
	<form method="POST" action="/generator/" id="overscores-form" class="generator-form">
		<div class="wrap">
			<h1>Pick a topic</h1><section class="form-primary">
				<label for="underscoresme-name" class="screen-reader-text">Topic</label>
				<input type="text" id="topic" name="from" placeholder="ex: nature, fashion" />
			</section><!-- .form-primary --><div class="form-submit">
				<input type="submit" name="underscoresme_generate_submit" value="Generate" />
			</div><!-- .form-submit -->
		</div><!-- .wrap -->

		<section class="form-secondary">
			<div class="wrap">
				<div class="control">
					<label for="number-posts">Number of Posts</label>
					<input id="number-posts" type="number" name="post" min="5" max="50" step="5" value="10" />
				</div>
				<div class="control">
					<label for="number-pages">Number of Pages</label>
					<input id="number-pages" type="number" name="page" min="5" max="50" step="5" value="10" />
				</div>
				<div class="control">
					<div class="featured-img-label">Featured Images?</div>
					<div class="featured-img-choices">
						<label><input type="radio" name="with-images" value="all" /> All posts</label><br />
						<label><input type="radio" name="with-images" value="most" checked="checked" /> Most posts</label><br />
						<label><input type="radio" name="with-images" value="some" /> Some posts</label><br />
						<label><input type="radio" name="with-images" value="few" /> Few posts</label><br />
						<label><input type="radio" name="with-images" value="none" /> No posts</label><br />
					</div>
				</div>
			</div><!-- .wrap -->
		</section><!-- .form-secondary -->
	</form>
</section><!-- #overscores-generator -->
