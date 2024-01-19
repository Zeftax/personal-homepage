<?php
$PageTitle="Unit conversions";

$COMMONS = $_SERVER['DOCUMENT_ROOT'] . "/../common";

include_once($COMMONS."/header.php");
?>

<article id="toc">
	<h2>
		Table of contents
	</h2>
	<ol>
		<li><a href="#unretard">Standard unretard table</a></li>
		<li><a href="#cooking">Cooking units</a></li>
	</ol>
</article>

<article id="unretard">
	<h2>
		Unretard table
	</h2>
	<table>
		<tr>
			<td>Retard unit</td>
			<td>Unretard unit</td>
			<td>Conversion factor</td>
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
