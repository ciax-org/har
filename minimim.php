<?php //» <- If this character is not a '>>' symbol, then UTF-8 encoding has not been used

	// CHANGE Self-contained - quick and dirty one liner - is all that is needed
	foreach (json_decode(file_get_contents('/har_files/a.har'), TRUE)['log']['entries'] as $entry) { echo $entry['request']['url'], PHP_EOL; }

?>
