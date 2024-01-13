
<?php
$PageTitle="Zdenek: Blog";

$COMMONS = $_SERVER['DOCUMENT_ROOT'] . "/../common";

include_once($COMMONS."/header.php");
?>

<article>
	<h1>
		Godot spell casting system prototype.
	</h1>
	<div style="text-align:right">
		Published on: 2024-01-13
	</div>
	<p>
		I wanted to implement this system in my game "The Labyrinth II" ever since I was maybe 13, but the project failed a few times and for the last few years it has been just rotting in the back of my mind. Well, I have decided to return to it again.
	</p>
	<p>
		The system is inspired by the spell casting system in the videogame <a href="https://en.wikipedia.org/wiki/Dungeon_Master_(video_game)">Dungeon Master</a>. I really liked the way you had to actually study the spells and then cast them. This was not selecting a option in a menu, it was way more involved - and exciting. Originally, when I was thinking about the spell system I wanted in my game I just wanted to pretty much copy their system, but at some point, this appeared to me as a better idea. I think it will allow you to feel not like you are uttering the spells, but insted like you are casting them with your wand, or finger, or a screwdiver or whatever. Plus it gives you a nice natural way to upgrade it once you do get a better mana-channeler: just increase the dimension of the matrix! Allows you to cast new, more complicated spells, and does so in a natural way only once you've mastered the simpler spell matrix.
	</p>
	<p>
		Now, I have to admit, that I am not at all sure if this system will actually work in a modern game, or, really any game that's not basically turn-based. I do have some ideas how to solve these problems (including a time slow-down mechanic), but that is too far in the future now. I am planning on taking this very easy and slow, more focused on having fun and exploring the godot engine, rather than trying to sprint to the goal of a finished game.
	</p>

	<h3> Gallery </h3>
	<div>
		<img src="http://www.zdenekborovec-dev.cz/blog/godot_spell_system_prototype/nodes.png"/>
		<p>
			A path drawn between some nodes, this is how the spell casting looks like.
		</p>
		<img src="http://www.zdenekborovec-dev.cz/blog/godot_spell_system_prototype/console.png"/>
		<p>
			A log from the spellbook, it detects all entered paths. It also has a dictionary of paths and spells, if you enter a path that corresponds to a spell, you cast it!
		</p>
		<img src="http://www.zdenekborovec-dev.cz/blog/godot_spell_system_prototype/spellbookexports.png"/>
		<p>
			This is how I can interact with the spellbook from the editor. I can add in nodes (it then works with them automagically, so I am not anyhow limited to the 3x3 grid). And I can also add in the spell paths and names (I can then use these to emit a spell_cast event with its name, or something like that).
		</p>
	</div>

	<p>
		I am not including any code snippets or more technical stuff as I do not have the css for any code blocks or galleries of pictures (lets be honest, the one right above this text looks absolutely disgusting, or at least it looks like that while I am writing this, I will elaborate on the meta problems of this blog in the next paragraph). But please do let me know if you want to see more or less of the more technical stuff, I am listening (or rather reading e-mails ;-)).
	</p>
	<p>
		So, the promised meta rambling. These blogposts are, in their current form, very temporary. I am just writing it without any express purpose to see what kind of template I might want for a blogpost. The lacking css is just me not wanting to do css at the time of writing. Right now I am just collecting the need for such things as the article content, header, short summary, publish date, previous and next blogpost in related series, and so on and so forth. Ah, hell, let me just throw a code snippet in here to test the css on in the future.
	</p>
	<div>
		# Called when the node enters the scene tree for the first time.
		func _ready():
			if(spell_nodes.size() == 0):
				print("feedbacking")
				fallback_add_nodes()
			for spellNode in spell_nodes:
				spellNode.input_event.connect(spell_node_input_event)
	</div>
	<p>
		Damn, just look how much styling that needs.
	</p>
	<p>
		Also, have som grass texture I made, but most likely won't use. But I think it's pretty so I don't want to delete it.
	</a>
		<img src="http://www.zdenekborovec-dev.cz/blog/godot_spell_system_prototype/grass.png"/>
</article>

<?php
include_once($COMMONS."/footer.php");
?>
