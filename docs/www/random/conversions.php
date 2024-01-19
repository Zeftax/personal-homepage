<?php
$PageTitle="Unit conversions";

$COMMONS = $_SERVER['DOCUMENT_ROOT'] . "/../common";

include_once($COMMONS."/header.php");
?>

<article id="toc">
	<h2>
		Table of contents
	</h2>
	<ul>
		<li>
			<a href="#unretard">Standard unretard table</a>
			<ul>
				<li> <a href="#unretard-volume">Volume</a> </li>
				<li> <a href="#unretard-distance">Distance</a> </li>
				<li> <a href="#unretard-weight">Weight</a> </li>
			</ul>
		</li>
		<li><a href="#cooking">Cooking units</a></li>
	</ul>
</article>

<article id="unretard">
	<h2>
		Unretard table
	</h2>
	<p>
		Due to the lackluster nature of imperial units, some of these may be way off. Some may be from the US, some may be from the UK, some may be from atlantis, others from canada and some may be made up by me. Take all of these with a grain (65 mg) of salt.
	</p>

	<h3 id="unretard-volume"> Volume </h3>
	<table>
		<tr>
			<td>Retarded unit</td>
			<td>Unretarded unit</td>
		</tr>
		<tr>
			<td>1 Teaspoon</td>
			<td>5 ml</td>
		</tr>
		<tr>
			<td>1 Tablespoon</td>
			<td>15 ml</td>
		</tr>
		<tr>
			<td>1 Fluid ounce</td>
			<td>240 ml</td>
		</tr>
		<tr>
			<td>1 Cup</td>
			<td>240 ml</td>
		</tr>
		<tr>
			<td>1 Pint (freedomland)</td>
			<td>470 ml</td>
		</tr>
		<tr>
			<td>1 Pint (UKingdom)</td>
			<td>570 ml</td>
		</tr>
		<tr>
			<td>1 Quart</td>
			<td>950 ml</td>
		</tr>
		<tr>
			<td>1 Gallon</td>
			<td>3.8 l</td>
		</tr>
	</table>
	<h3 id="unretard-distance"> Distance </h3>
	<table>
		<tr>
			<td>Retarded unit</td>
			<td>Unretarded unit</td>
		</tr>
		<tr>
			<td>1 Inch (″)</td>
			<td>25.4 mm</td>
		</tr>
		<tr>
			<td>1 Foot (′)</td>
			<td>30 cm</td>
		</tr>
		<tr>
			<td>1 Yard</td>
			<td>91 cm</td>
		</tr>
		<tr>
			<td>1 Fathom</td>
			<td>1.8 m</td>
		</tr>
		<tr>
			<td>1 Mile</td>
			<td>1.6 km</td>
		</tr>
		<tr>
			<td>1 Nautical Mile</td>
			<td>1.85 km</td>
		</tr>
	</table>
	<h3 id="unretard-weight"> Weight </h3>
	<table>
		<tr>
			<td>Retarded unit</td>
			<td>Unretarded unit</td>
		</tr>
		<tr>
			<td>1 Ounce</td>
			<td>28 g</td>
		</tr>
		<tr>
			<td>1 Pound</td>
			<td>450 g</td>
		</tr>
		<tr>
			<td>1 Ton</td>
			<td>907 kg</td>
		</tr>
	</table>
	<h3 id="unretard-others"> Others </h3>
	<table>
		<tr>
			<td>Retarded unit</td>
			<td>Unretarded unit</td>
		</tr>
		<tr>
			<td>1 Knot</td>
			<td> 1.85
				<div class="frac">
					<span> km </span>
					<span class="symbol"> / </span>
					<span class="bottom"> h </span>
				</div>
			</td>
		</tr>
	</table>
</article>

<article id="cooking">
	<h2>
		Cooking unit coversions
	</h2>
	<p>
		Disclaimer: these are chiefly my measurements, it is entirely possible
		I made a mistake somewhere. If your measurements differ significantly,
		please e-mail me.
	</p>
	<table>
		<tr>
			<td> Item </td>
			<td> Special </td>
			<td> Volumetric </td>
			<td> Weight </td>
			<td>
				<div class="frac">
					<span> W </span>
					<span class="symbol"> / </span>
					<span class="bottom"> V </span>
				</div>
			</td>
		</tr>
		<tr>
			<td> Cheese (eidam 45%, roughly grated, pressed down) </td>
			<td> 1 cup </td>
			<td> 236 ml </td>
			<td> 128 g </td>
			<td> 0.5 </td>
		</tr>
		<tr>
			<td> Egg </td>
			<td> Small </td>
			<td> 39.5 ml </td>
			<td> 50 g </td>
			<td> 1.25 </td>
		</tr>
		<tr>
			<td> Honey </td>
			<td> 1 jar </td>
			<td> 600 ml </td>
			<td> 900 g </td>
			<td> 1.5 </td>
		</tr>
	</table>
</article>

<?php
include_once($COMMONS."/footer.php");
?>
