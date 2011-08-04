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
