<?php
include_once('include.php');
if (!isset($_GET['id'])) {
    $error = "ID not specified";
}

$all = getVersions(true);
$result = array_filter($all, function($v) {
    return $v->commit->sha === $_GET['id'];
});

if (count($result) != 1) {
    $error = "Cannot find ID";
}

$result = array_pop($result);
$downloadURL = $result->zipball_url;
?>
<html>
<head>
    <title>Downloading PHProjekt</title>
    <meta name="description" content="">
    <meta name="author" content="Mayflower Open Source Labs Team">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
  
<?php if (empty($error)) { ?>
    <script language="JavaScript">
    function download() {
        window.location = "<?= $downloadURL; ?>";
    }
    setTimeout("download()", 5000);
    </script>
<?php } ?>
</head>
<body>
<?php if (empty($error)) { ?>
    Thank you for downloading PHProjekt. The download will begin in 5 seconds.
    If the download doesn't start, please click <a href="<?= $downloadURL; ?>">here</a>.
<?php } else { ?>
    An error occured: <?= $error; ?>
<?php } ?>
<!-- Piwik -->
<script type="text/javascript">
var pkBaseURL = (("https:" == document.location.protocol) ?  "https://piwik.mayflower.de/" : "http://piwik.mayflower.de/");
document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script><script type="text/javascript">
try {
var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 3);
piwikTracker.trackPageView();
piwikTracker.enableLinkTracking();
} catch( err ) {}
</script>
<noscript>
<p>
    <img src="http://piwik.mayflower.de/piwik.php?idsite=3" style="border:0" alt="" />
</p>
</noscript>
<!-- End Piwik Tracking Code -->
</body>
</html>
