<?php include_once('include.php'); ?>
<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>PHProjekt</title>
  <meta name="description" content="">
  <meta name="author" content="Mayflower Open Source Labs Team">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">

  <link rel="stylesheet" href="css/style.css?v=2">
  <link rel="stylesheet" type="text/css" href="./style.css"></link>
  <link rel="stylesheet" type="text/css" href="./colorbox.css"></link>

  <script src="js/libs/modernizr-1.7.min.js"></script>
</head>

<body>

  <div id="container">
    <header id="mayflower-network">
        <ul>
            <li>
                <a href="http://www.mayflower.de/">
                    Mayflower GmbH
                </a>
            </li>
            <li>
                <a href="http://try.phprojekt.com">
                    Try Online
                </a>
            </li>
            <li>
                <a href="http://jira.opensource.mayflower.de/jira/browse/PHPROJEKT">
                    Bugtracker
                </a>
            </li>
            <li>
                <a href="https://mayflower-osl.atlassian.net/wiki/display/PHPROJEKT/PHProjekt+6">
                    Documentation
                </a>
            </li>
            <li>
                <a href="http://forum.phprojekt.com">
                    Forum
                </a>
            </li>
            <li>
                <a href="https://github.com/Mayflower/PHProjekt">
                    Get Source
                </a>
            </li>
            <li>
                <a href="https://twitter.com/phprojekt6">
                    Twitter
                </a>
            </li>
            <li>
                <a href="https://www.facebook.com/pages/PHProjekt/41182872373">
                    Facebook
                </a>
            </li>
        </ul>
    </header>

    <div id="main" role="main">
        <div class="articleOneContainer">
            <article class="page pageOne">
                <section>

                    <header>
                        <h1>PHProjekt</h1>
                        <h2>Open Source Project Management</h2>
                    </header>

                    <?php
                    $alpha = getLatestVersion(true);
                    $latest = getLatestVersion();
                    $noRC = $alpha->name == $latest->name; ?>
                    <div class="phprojekt-download" id="download">
                        <div class="phprojekt-download-release phprojekt-download-release<?php echo $noRC ? "-norc" : "-rc" ?>" >
                            <a href="download.php?id=<?php echo $latest->commit->sha; ?>">
                                <div class="download">Download</div>
                                <div class="version" id="versionInfo">Version <?php echo $latest->name; ?></div>
                                <!-- You are not allowed to do this -->
                            </a>
                        </div>
                    <?php if (!$noRC) { ?>
                        <div class="phprojekt-download-rc">
                            <a href="download.php?id=<?php echo $alpha->commit->sha; ?>">
                                <div class="download">Beta release</div>
                                <div class="version" id="versionInfo">Version <?php echo $alpha->name; ?></div>
                                <!-- You are not allowed to do this -->
                            </a>
                        </div>
                    <?php } ?>
                    </div>
                    <div class="tooltip">
                        <div>
                        <p>
                            Download <?php echo $latest->name; ?> as </br>
                            <a href="<?php echo $latest->zipball_url; ?>">zip</a> or
                            <a href="<?php echo $latest->tarball_url; ?>">tar.gz.</a>
                        </p>
                        <p>or download <a href="http://github.com/Mayflower/PHProjekt/downloads">older releases</a></p>
                        </div>
                    </div>

                </section>
            </article>
        </div>
        <div class="articleTwoContainer">
            <article class="page pageTwo">
                <section class="left">
                    <header>
                        <h3>PHProjekt 6</h3>
                    </header>
                    <p>
                        <strong>PHProjekt</strong> is a web application that helps
                        you with planning and running your projects.
                    </p>
                    <div id="slides">
                        <div class="slides_container">
                            <div>
                                <a href="images/screenshots/1.png" rel="screenshot" title="The projects view">
                                    <img src="images/screenshots/thumbnails/1.png" alt="projects view screenshot"/>
                                </a>
                            </div>
                            <div>
                                <a href="images/screenshots/2.png" rel="screenshot" title="The calendar">
                                    <img src="images/screenshots/thumbnails/2.png" alt="The calendar"/>
                                </a>
                            </div>
                            <div>
                                <a href="images/screenshots/3.png" rel="screenshot" title="Custom Modules">
                                    <img src="images/screenshots/thumbnails/3.png" alt="Custom Modules"/>
                                </a>
                            </div>
                        </div>
                    </div>
                    <p>
                        If you are interested in PHProjekt but not yet convinced, take a look at
                        <a href="http://try.phprojekt.com">our live demo</a>. It is running the
                        latest stable version.
                    </p>
                </section>
                <section class="center">
                    <header>
                        <h3>News</h3>
                        <h4>09.10.2012</h4>
                    </header>
                    <p>
                        PHProjekt 6.2 released
                    </p>
                    <p>
                        We are proud to announce the latest release of PHProjekt.
                        After several month of work and a huge amount of bug fixes and improvements we are ready to take
                        the next step in PHProjekt development.
                        Among other things there are some true highlights worth mentioning.
                    </p>
                    <p>
                        PHProjekt now comes with a new revolutionary way of timetracking.
                        We enhanced the timecard to use the CalDav interface to allow timekeeping from anywhere and with
                        any CalDav enabled device, without the need to ever open your browser window.
                    </p>
                    <p>
                        The lists views have have been heavily optimized and now allow the listing thousands of items
                        without slowing down the browser.
                    </p>
                    <p>
                        The general performance of the whole calendar system has been improved to make it even more
                        convenient to use CalDav or the web interface to manage events.
                    </p>
                    <p>
                        Tags and the general search have been merged to provide unified access to all the important
                        informations.
                        In addition to that the search is now able to search for multiple tags which makes it possible
                        to easily limit the results to items matching multiple criteria.
                    </p>
                    <p>
                        The WebDav interface and the Filemanager are finally fully unified.
                        This allows to access the same files via WebDav and the web without the need to worry about data
                        duplication.
                    </p>
                    <p>
                        If you would like to give us feedback on your PHProjekt experience, please feel free to sign up
                        at our <a href="http://forum.phprojekt.com">forum</a> and join the discussion!
                    </p>
                    <header>
                        <h3>Commercial</h3>
                    </header>
                    <p>
                        Mayflower GmbH provides commercial support for PHProjekt 6. If you need help
                        with installing Phprojekt or if you have special requirements, you can
                        contact us at <a href="mailto:phprojekt AT mayflower DOT de">phprojekt AT mayflower DOT de</a>.
                    </p>
                </section>
            </article>
        </div>
        <div class="articleThreeContainer">
            <article class="page pageThree">
            <a name="contribute"></a>
                <section class="left">
                    <header>
                        <h3>Contributing</h3>
                    </header>
                    <p>
                        If you are interested in the current development status, you can just take a look at
                        <a href="http://jira.opensource.mayflower.de">our issue tracker</a>.
                        If you find a bug or have an idea how we could make PHProjekt better, you can tell us there.
                    </p>
                </section>
                <section class="center">
                    <header>
                        <h3>Community</h3>
                    </header>
                    <p>
                        PHProjekt is a community project. This shows through an open infrastructure
                        and community platforms. You can visit <a href="http://forum.phprojekt.com">the forum</a>
                        for discussions and help or just
                        <a href="http://jira.opensource.mayflower.de">browser current issues</a> and comment there.
                    </p>

                </section>
                <section class="right">
                    <header>
                        <h3>Mailing list</h3>
                    </header>
                    <p>
                        We use a mailing list to discuss development. You can browse
                        <a href="http://mail.mayflower.de/pipermail/devml/">the archive</a> or subscribe at
                        <a href="https://mail.mayflower.de/mailman/listinfo/devml">the info page</a>
                        if you are interested in the development of PHProjekt.
                    </p>
                </section>
            </article>
        </div>
    </div>

    <footer>
        &copy; 2011-2012 PHProjekt Team.
        All rights reserved.
        Supported by <a href="http://www.mayflower.de/de/unternehmen/open-source-labs">Mayflower Open Source Labs</a>.
    </footer>
  </div> <!--! end of #container -->
    <style type="text/css" media="screen">
      .slides_container {
        width:300px;
        height:170px;
      }
      .slides_container div {
        width:300px;
        height:170px;
        display:block;
      }
    </style>

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
  <script>window.jQuery || document.write("<script src='js/libs/jquery-1.5.1.min.js'>\x3C/script>")</script>

  <!-- scripts concatenated and minified via ant build script-->
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  <!-- end scripts-->

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
