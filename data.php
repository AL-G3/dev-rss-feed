<?php
// Author: Al-G, 2019-07-19
// Get Rss-feed from site
function get_articles($url) {
        $doc = file_get_contents($url);
        $xml = simplexml_load_string($doc);
        return $xml;
}
function make_description_smaller($description) {
        $cleanDesc = strip_tags($description);
        return substr($cleanDesc, 0, 250) . "...";
}
$feeds = [
        "https://css-tricks.com/feed/",
        "https://www.sitepoint.com/javascript/feed/",
        "https://tutorialzine.com/feed/",
        "http://web-design-weekly.com/feed/",
];

$articles_to_display = [];

foreach($feeds as $feed) {
        $articles = get_articles($feed);
        foreach($articles->channel->item as $item) {
                $articles_to_display[] = $item;
        }
}
?>
