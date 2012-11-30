<?php

$StrictXHTML=False;

$ViewTopic = isset($ViewTopic)?"?ViewTopic=$ViewTopic":'';
$BookMark = isset($BookMark)? "#$BookMark":'';
if (!headers_sent()){
	if ($StrictXHTML) {
		header('Content-type: application/xhtml+xml; charset=utf-8');
	} else {
		header('Content-type: text/html; charset=utf-8;');
	}
}
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
			"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">';


echo '<html xmlns="http://www.w3.org/1999/xhtml"><head><title>' . $title . '</title>';
echo '<link rel="shortcut icon" href="'. '/favicon.ico" />';
echo '<link rel="icon" href="' . '/favicon.ico" />';
if ($StrictXHTML) {
	echo '<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />';
} else {
	echo '<meta http-equiv="Content-Type" content="application/html; charset=utf-8; content="no-cache" />';
}

echo '</head>';
echo '<script type="text/javascript" src="javascripts/library.js"></script>';

echo '<link rel="stylesheet" type="text/css" href="css/default.css" />';

?>