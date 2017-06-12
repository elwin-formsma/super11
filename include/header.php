<?php

echo "<html>";
echo "<head>";
//echo "<link rel='stylesheet' type='text/css' href='/main.css'>";
//echo "<script type='text/javascript' src='/badintel-tool/content_script.js'></script>";
echo "
<link href='/bootstrap/css/bootstrap.css' rel='stylesheet'>
<script src='/bootstrap/jquery-1.11.1.min.js'></script>
<script src='/bootstrap/js/bootstrap.min.js'></script>
<script src='/bootstrap/jquery.tablesorter.min.js'></script>
<script type='text/javascript' src='https://www.google.com/jsapi'></script>


<script type='text/javascript'>
	$.tablesorter.addParser({
		// set a unique id
		id: 'comma_parser',
		is: function(s) {
			// return false so this parser is not auto detected
			return false;
		},
		format: function(s) {
			// format gc values
			return s.replace(/,/g,'');
		},
		// set type, either numeric or text
		type: 'numeric'
	});
	$.tablesorter.addParser({
		// set a unique id
		id: 'sot_parser',
		is: function(s) {
			// return false so this parser is not auto detected
			return false;
		},
		format: function(s) {
			// format gc values
			return s.replace(/\/[0-9-]+/g,'');
		},
		// set type, either numeric or text
		type: 'numeric'
	});
</script>

";

?>
