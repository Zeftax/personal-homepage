<?php
$PageTitle="Zdenek: About";

$COMMONS = $_SERVER['DOCUMENT_ROOT'] . "/../common";

include_once($COMMONS."/header.php");
?>

<article>
	<h1>
		About this site.
	</h1>
	<h2>
		Who am I?
	</h2>
	<div class="image-container" style="max-width: 20em">
		<img src="http://assets.zdenekborovec.cz/upload/1d21313c-ca12-4cdd-8943-a19ef5602a9c/8e34af81-a431-42f3-b984-020fda40498f.png" alt="A photo of me."/>
		<p>
			Me at the start of a walk from Brno to Prague.
		</p>
	</div>
	<p>
		Hi, I am Zdenek. A twenty-something year od student at FIT BUT where I mainly engage as a member of the Students Union, mostly as a bartender at the Duck Club, however I do try to do some learning at the school from time to time as well.
	</p>
	<p>
		My interest shift quite often, but as of writing this my main fixation is probably the concertina. A free-reed instrument which is commonly associated with pirates, even though accordion-like instruments only started being invented in the 19th century, well after the golden age of piracy, does not stop me from enjoying playing some shanties on it now though!
	</p>
	<p>
		I also like programming and I want to learn more about SDL2 (or is SDL3 coming out now?), but I never seem to get to it :D.
	</p>
	<p>
		My other interests include backpacking, cooking &amp; baking, weight lifting and pirates, I would like to get into photography, but my current camera is too bad for that. I <b>do not</b> like tabletop games.
	</p>
	<p>
		I am an ordained minister and a firm believer in the Flying Spaghetti Monster. For religious purposes I run the <a href="https://www.pastafarianstvi.cz">pastafarianstvi.cz</a> website.
	</p>
	<div style="height: 1em;"></div> <!-- this is to pad out the image -->
</article>
<hr>
<article>
	<h2>
		Why not write in czech?
	</h2>
	<p>
		I think czech is a beautiful language and I would prefer to write in czech on this site, and I might switch to it at some point in the future. But english has two main advantages: reach and ease of use.
	</p>
	<h3>
		Reach
	</h3>
	<p>
		While there currently isn't much content on this page, I intend to change that. Making the content more accessible to international audience is in my opinion only a good thing.
	</p>
	<h3>
		Ease of use
	</h3>
	<p>
		I am making a lot of assumptions about how I will contribute more text to this website, but I find writing html directly to be the easiest.
	</p>
	<p>
		While I am aware of the czech programmers keyboard layout, and from my limited experience with it I really enjoy using it for mixed english and czech typing, especially in LaTeX, I do not have a layout set-up that I would feel comfortable switching to full time. Writing special characters like `[` is a pain in the ass on the czech layout and writing czech characters with diacritics is basically impossible on the en-us layout. So I find just writing english on us keyboard to be the easiest.
	</p>
</article>
<hr>
<article>
	<h2>
		Why have a website?
	</h2>
	<p>
		While the website might currently seem utterly uninteresting and useless, there is a purpose to it: the domain!
	</p>
	<p>
		While i do want to do some things with the site, the main reason I registered the domain is to use it for personal stuff so that I don't have to remember my IP address. Having a website on top of that to share some of my interests just makes sense to me.
	</p>
</article>
<hr>
<article>
	<h2>
		Why is it so ugly?
	</h2>
	<p>
		Beauty is in the eye of the beholder and while I can appreciate this look is unusual, I really dig it. You are always free to make your own custom css for my site, of course. Hmm, now I am thinking about adding built-in customisation support, but that would require user settings, and having users makes no sense until theres some kind of user interaction like a forum, or article comments, or something like that. I will save that one for later.
	</p>
</article>

<?php
include_once($COMMONS."/footer.php");
?>
