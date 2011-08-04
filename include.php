<?php

define("THUMBNAIL_FOLDER", "images/screenshots/thumbnails/");
define("SCREENSHOT_FOLDER", "images/screenshots/");

function screenshotSection()
{
    /**
     * Each entry $num => $desc belongs to screenshot number $num with thumbnail images/screenshots/thumbnail/${num}.png
     * and image file images/screenshots/${num}.png. $desc will be used as  a description.
     */
    $screenshots = array(
        1 => "The projects view",
        2 => "The calendar"
    );

    echo "<section id=\"screenshots\">\n  <div class=\"slides_container\">\n";
    foreach ($screenshots as $id => $description) {
        $thumbnail = THUMBNAIL_FOLDER . $id . '.png';
        $image     = SCREENSHOT_FOLDER . $id . '.png';
        echo "    <div>\n      <a href='$image' rel='screenshot' title='$description'>\n";
        echo "        <img src='$thumbnail' alt='$description'/>\n";
        echo "      </a>\n    </div>\n";
    }

    echo "  </div>\n</section>\n";
}

function downloadsJson()
{
    $tags = file_get_contents('https://api.github.com/repos/Mayflower/PHProjekt/tags');
    if ($tags === false) {
        // HAELP
        throw new Exception('Could not contact github');
    }

    $tags = json_decode($tags);
    if (empty($tags)) {
        throw new Exception('No version found!');
    }

    $newest = null;
    foreach ($tags as $t) {
        if (preg_match('/^\d+\.\d+.\d+.*/', $t->name)) {
            if (is_null($newest) || version_compare($newest->name, $t->name, '<')) {
                $newest = $t;
            }
        }
    }
    // Make the newest version the first
    echo json_encode($t);
}
