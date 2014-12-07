<?php
if (ini_get('allow_url_fopen') == '1') {
	$installed2 = file_get_contents('version.txt');
	// Edit URL to display location of version.text, or whatever the name of the version check file is.
	$version2 = file_get_contents('http://domain-name.ext/version.txt');
	if ($version2 !== false) {
		if ($installed2 == $version2) { //version numbers are the same
		  // Change SCRIPT NAME to name of script
			echo "<p>Your SCRIPT NAME is up to date.</p>";
		}
		else if ($installed2 != $version2) { //version numbers are not the same
			// Change SCRIPT NAME to name of script, and edit URL to match upgrade/script destination location.
			echo "<p>You are using SCRIPT NAME version ".$installed2.". Please update to <a href=\"http://domain-name.ext/\">SCRIPT NAME ".$version2."</a>.";
		}
	}
	else {
		// an error happened
		// Change SCRIPT NAME to name of script, and edit URL to match upgrade/script destination location.
		echo "Could not check for updates. Please make sure you use the latest version of <a href=\"http://domain-name.ext/\">SCRIPT NAME</a>.";
	}
}
else {
  // Change SCRIPT NAME to name of script, and edit URL to match upgrade/script destination location.
   echo "Could not check for updates. Please make sure you use the latest version of <a href=\"http://domain-name.ext\">SCRIPT NAME</a>.";
}
?>
