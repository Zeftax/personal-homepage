
<?php
$PageTitle="Zdenek: Blog";

$COMMONS = $_SERVER['DOCUMENT_ROOT'] . "/../common";

include_once($COMMONS."/header.php");
?>

<article>
	<h2>
		Godot spell casting system prototype.
	</h2>
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
		I wanted to implement this system in my game "The Labyrinth II" ever since I was maybe 13, but the project failed a few times and for the last few years it has been just rotting in the back of my mind. Well, I have decided to return to it again.
	</p>
	<p>
		The system is inspired by the spell casting system in the videogame <a href="https://en.wikipedia.org/wiki/Dungeon_Master_(video_game)">Dungeon Master</a>. I really liked the way you had to actually study the spells and then cast them. This was not selecting a option in a menu, it was way more involved - and exciting. Originally, when I was thinking about the spell system I wanted in my game I just wanted to pretty much copy their system, but at some point, this appeared to me as a better idea. I think it will allow you to feel not like you are uttering the spells, but insted like you are casting them with your wand, or finger, or a screwdiver or whatever. Plus it gives you a nice natural way to upgrade it once you do get a better mana-channeler: just increase the dimension of the matrix! Allows you to cast new, more complicated spells, and does so in a natural way only once you've mastered the simpler spell matrix.
	</p>
	<p>
		Now, I have to admit, that I am not at all sure if this system will actually work in a modern game, or, really any game that's not basically turn-based. I do have some ideas how to solve these problems (including a time slow-down mechanic), but that is too far in the future now. I am planning on taking this very easy and slow, more focused on having fun and exploring the godot engine, rather than trying to sprint to the goal of a finished game.
	</p>

	<div class="image-gallery">
		<h2> Gallery </h2>
		<div>
			<div>
				<img src="http://www.zdenekborovec-dev.cz/blog/godot_spell_system_prototype/nodes.png" alt="A screenshot of the spell casting system.">
				<p>
					A path drawn between some nodes, this is what the spell casting looks like.
				</p>
			</div>
			<div>
				<img src="http://www.zdenekborovec-dev.cz/blog/godot_spell_system_prototype/console.png" alt="A screenshot showing cast spells log.">
				<p>
					A log from the spellbook, it detects all entered paths. It also has a dictionary of paths and spells, if you enter a path that corresponds to a spell, you cast it!
				</p>
			</div>
			<div>
				<img src="http://www.zdenekborovec-dev.cz/blog/godot_spell_system_prototype/spellbookexports.png" alt="A screenshot from the godot editor showing node export values.">
				<p>
					This is how I can interact with the spellbook from the editor. I can add in nodes (it then works with them automagically, so I am not anyhow limited to the 3x3 grid). And I can also add in the spell paths and names (I can then use these to emit a spell_cast event with its name, or something like that).
				</p>
			</div>
		</div>
	</div>

	<p>
		Once I tried actually using it in a control node, I found out the mapping of the mouse was completely off, I remade it into control nodes, which I am actually happy about as I feel like the nodes being buttons makes more sense than them being sprites with a collision box that only reacts to the mouse, or whatever I was using, I don't wven remember, but it was wacky :D. But I encountered a problem! I still had to use the Line2D, which is a Node2D. And it's position just did not map well. Through experimentation I found out that it was using the position as relating to its scene origin, but once the control scene was inserted into a control container, it got scaled, as controls should, but it was now offset and the line was not. The only solution I could find was putting the SpellBook scene inside of a MarginContainer, and offseting it using margins and thus preserving its 'relative origin', instead of letting it stretch. I do not like this solution as it requires manual fiddling if you want to change up the HUD, but it was the only solution I could find.
	</p>
	<p>
		Here is a bit of code, so that I can test my code block css:
	</p>
	<code>
## Add a node to current spell
func _on_spellnode_entered(node: SpellNode)-&gt;void:
	if is_receiving_spell &amp;&amp; not spell_builder.has(node):
	# Append node to the spell builder
	spell_builder.append(node);
		# Add new point to the spell line and set the old top to the new nodes position
		spell_line.add_point(node.position)
		spell_line.set_point_position(spell_line.get_point_count() - 2, node.position)
	</code>
	<p>
		I would like to add some kind of syntax highlighting, but from my research I'd have to write a php function for that, as css cannot look for key words, and writing a bunch of php is not something I am currently in the mood for, so this will have to do, for now.
	</p>
</article>

<?php
include_once($COMMONS."/footer.php");
?>
