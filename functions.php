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
	$sizeOfArray = count($tweet->extended_entities->media[0]->video_info->variants);
	
	$videoUrls = Array();
	$videoUrlsIndexPoint = 0;
	for($i = 0; $i< $sizeOfArray; $i++){
		// can be video/mp4 , application/x-mpegURL
		$typeOfContent = $tweet->extended_entities->media[0]->video_info->variants[$i]->content_type;
		
		if($typeOfContent == "video/mp4"){
			$videoUrls[$videoUrlsIndexPoint]["bitrate"] = $tweet->extended_entities->media[0]->video_info->variants[$i]->bitrate;
			$videoUrls[$videoUrlsIndexPoint]["url"] = cleanParametersFromUrl($tweet->extended_entities->media[0]->video_info->variants[$i]->url);
		//Have to make index point+1 on each object added.
		$videoUrlsIndexPoint++;
		}
	}
	
	return $videoUrls;
}
function cleanParametersFromUrl($url){
	
	// If URL has ? paramters. 
	if(strpos($url, '?') !== false){
		
		//Catch and select first part.
		$urlarray = explode("?",$url);
		$newurl = $urlarray[0];
		
	}else{
		
		$newurl = $url;
	
	}
	
	return $newurl;
}

?>