<?php
$PageTitle="Zdenek: Blog";

$COMMONS = $_SERVER['DOCUMENT_ROOT'] . "/../common";

include_once($COMMONS."/header.php");
?>

<article>
	<h2>
		My blogposts
	</h2>
	<p>
		Blogs about various topics will be written here, at some point in the future.
	</p>
	<p>
		The way in which they are made and addressed right now is temporary, so any links you save / share WILL EXPIRE eventualy. This includes media.
	</p>
	<p>
		I am just trying to get a feel for what tools I might need for writing the blogs, so everything is subject to change once I get a solid idea and implement a proper system for doing this, instead of just writing plain html.
	</p>
</article>
<hr>
<ul class="blog-preview-list">
	<li><div class="blog-preview"><a href="http://www.zdenekborovec-dev.cz/blog/godot_spell_system_prototype">
		<h3>
			Godot spell casting system prototype
		</h3>
		</a>
		<div class="blog-metadata">
			<span class="blog-tag" style="background-color: cornflowerblue">
				godot
			</span>
			<span class="blog-tag" style="background-color: khaki">
				game-dev
			</span>
			<span class="blog-tag" style="background-color: sienna">
				the-labyrinth-II
			</span>
			<span class="blog-publish-date">
				Published on: 2024-01-13
			</span>
		</div>
		<p>
			I have wanted to implement this system in my upcoming game "The Labyrith II" for a few years now, but I got distracted and left it, well, I am back now.
		</p>
	</div></li>
	<li><div class="blog-preview"><a href="http://www.zdenekborovec-dev.cz/blog/flatland_review">
		<h3>
			Flatland: A Review.
		</h3>
		</a>
		<div class="blog-metadata">
			<span class="blog-tag" style="background-color: AntiqueWhite">
				books
			</span>
			<span class="blog-tag" style="background-color: LightSkyBlue">
				geometry
			</span>
			<span class="blog-tag" style="background-color: LightPink">
				reviews
			</span>
			<span class="blog-publish-date">
				Published on: 2024-03-12
			</span>
		</div>
		<p>
			I had the privilege to travel Flatland together with A. Square these past few days and the experience was truly delightful.
		</p>
	</div></li>
</ul>

<?php
include_once($COMMONS."/footer.php");
?>
