<?php
require "twitteroauth/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

function getTweetInfo($connection,$tweetid){
    $tweet = $connection->get('statuses/show', [
      'id' => $tweetid,
      'tweet_mode' => 'extended',
      'include_entities' => 'true'
    ]);
	return $tweet;
}
function getTweetImage($tweet){
	return $tweet->extended_entities->media[0]->media_url;
}
function getTweetText($tweet){
	return $tweet->full_text;
}
function getTweetVideo($tweet){
	return $tweet->extended_entities->media[0]->video_info->variants[0]->url;
}

?>