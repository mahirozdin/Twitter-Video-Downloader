<?php

// Functions are included here.
include("includes/functions.php");

// Typing URL Which contains the video that we need.
$url = "https://twitter.com/kthesesmyrna/status/969900650225192960" // etc: https://twitter.com/xxxxxxxx/status/yyyyyyyyyyy 

// Fetching URL to get Tweet ID and Poster Username 
$urlfetch = explode($url,'/');

// We got user name and tweet id. It's not necessary for video downloading But it might be useful to collect meta data's.
$url_username = $urlfetch[3]; //    /xxxxxxxx/ part of URL
$url_tweetid = $urlfetch[5]; //    /yyyyyyyyy/ part of URL

// Will be continued... 



?>