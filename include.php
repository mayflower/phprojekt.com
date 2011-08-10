<?php

define("THUMBNAIL_FOLDER", "images/screenshots/thumbnails/");
define("SCREENSHOT_FOLDER", "images/screenshots/");

/**
 * Returns an array like array(
 *  array('thumbnail' => '...', 'image' => '...', 'desc' => ...),
 *  ...
 * )
 */
function getScreenshots()
{
    /**
     * Each entry $num => $desc belongs to screenshot number $num with thumbnail images/screenshots/thumbnail/${num}.png
     * and image file images/screenshots/${num}.png. $desc will be used as  a description.
     */
    $screenshots = array(
        1 => "The projects view",
        2 => "The calendar"
    );
    $ret = array();
    foreach($screenshots as $id => $desc) {
        $ret[] = array(
            'thumbnail' => THUMBNAIL_FOLDER . $id . '.png',
            'image'     => SCREENSHOT_FOLDER . $id . '.png',
            'desc'      => $desc
        );
    }
    return $ret;
}

/**
 * Returns the latest version as returned from github. Looks like stdobject(
 *  'name' => '6.1.0',
 *  'zipball_url' => '...',
 *  'tarball_url' => '...'
 * )
 */
function getLatestVersion()
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
        if (preg_match('/^\d+\.\d+.\d+$/', $t->name)) {
            if (is_null($newest) || version_compare($newest->name, $t->name, '<')) {
                $newest = $t;
            }
        }
    }
    // Make the newest version the first
    return $newest;
}
