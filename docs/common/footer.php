			<div id="footer">
				<article>
					This site does not use cookies. I try to know and store as little information about you as possible. If you have any privacy and/or security concerns, feel free to e-mail me at &lt;zdenda&nbsp;[DOT]&nbsp;borovec&nbsp;[AT]&nbsp;gmail&nbsp;[DOT]&nbsp;com&gt;
				</article>
				<article>
					If you want to audit the site and/or edit and use it for your own purposes, most of the source code should be available on my <a href="https://www.github.com/Zeftax/personal-homepage">github</a> under the <a href="https://unlicense.org/">unlicense license</a>.
				</article>
				<article>
					&#169; 2023 - <?php echo date("Y"); ?> Zdenek Borovec. Content on this site is original production shared under <a href="https://creativecommons.org/licenses/by-sa/4.0/deed.en">Creative Commons Attribution Share Alike license</a>, unless stated otherwise.
				</article>
				<article style="position: relative; right: 0;">
					This page was generated at
					<?php
						echo date('Y-m-d\TH:i:s T').
						" by php/".phpversion()." ".$_SERVER["SERVER_SOFTWARE"];
					?>
				</article>
			</div>
		</main>
	</body>
</html>

<style>
	#footer {
		border-top: double;
		padding-bottom: 1em;
	}
</style>
