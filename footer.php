
<div id="loading" class="ico_loading" class="lds-css ng-scope">
	<div style="width:100%;height:100%" class="lds-rolling">
		<div></div>
	</div>
</div>

<div id="goToTopArrow">
	
</div>

</body>
</html>

<?php

$output_html = ob_get_clean();

if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']=="on") {
	$output_html = str_replace("http://","https://",$output_html);
}

print $output_html;
