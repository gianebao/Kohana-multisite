<?php

// Sanity check, install should only be checked from index.php
defined('SYSPATH') or exit('Install tests must be loaded from within index.php!');

if (version_compare(PHP_VERSION, '5.3', '<'))
{
	// Clear out the cache to prevent errors. This typically happens on Windows/FastCGI.
	clearstatcache();
}
else
{
	// Clearing the realpath() cache is only possible PHP 5.3+
	clearstatcache(TRUE);
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Kohana Installation</title>

	<style type="text/css">
	body { width: 42em; margin: 0 auto; font-family: sans-serif; background: #fff; font-size: 1em; }
	h1 { letter-spacing: -0.04em; }
	h1 + p { margin: 0 0 2em; color: #333; font-size: 90%; font-style: italic; }
	code { font-family: monaco, monospace; }
	table { border-collapse: collapse; width: 100%; }
		table th,
		table td { padding: 0.4em; text-align: left; vertical-align: top; }
		table th { width: 12em; font-weight: normal; }
		table tr:nth-child(odd) { background: #eee; }
		table td.pass { color: #191; }
		table td.fail { color: #911; }
	#results { padding: 0.8em; color: #fff; font-size: 1.5em; }
	#results.pass { background: #191; }
	#results.fail { background: #911; }
	</style>

</head>
<body>

<h1>Templating Tests</h1>

<p>
    Testing if Layout Templating Module works.
</p>

    <?php echo $header?>
    
    <?php echo $body?>
    
    <!-- This one needs clean-up! Follow the header and body examples-->
    <h2>&lt;footer&gt;</h2>
    <p>
        Footer template. This component usually contains credits and navigation.
    </p>
    <?php if (empty($footer)): ?>
        <p id="results" class="fail">✘ footer does not exists! try creating the segment.</p>
    <?php else: ?>
        <?php echo $footer?>
    <?php endif ?>
    <h2>&lt;footer&gt;</h2>
</body>
</html>