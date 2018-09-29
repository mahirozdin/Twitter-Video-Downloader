<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require "functions.php";
use Abraham\TwitterOAuth\TwitterOAuth;

// API Connection Parameters.
$consumer_key = "YOUR_CONSUMER_KEY";
$consumer_secret_key = "YOUR_CONSUMER_SECRET";

// My tokens created by using Twitter Applications page create my tokens.
$access_token = "YOUR_TOKEN";
$access_token_secret = "YOUR_TOKEN_SECRET";

// Connection and getting permisions from API Connection parameters.
$connection = new TwitterOAuth($consumer_key, $consumer_secret_key, $access_token, $access_token_secret);
$content = $connection->get("account/verify_credentials");


// Getting Tweet Informations.
$tweet_id = "1045676724770484224"; // Example_Tweet_id  get from :  https://twitter.com/TwitterMusic/status/1045676724770484224
$tweet = getTweetInfo($connection,$tweet_id);

//Get Tweet Text
echo 'Tweet Text:'.getTweetText($tweet).'<br>';
 
//Get Tweet Video Image Thumb
echo 'Tweet Thumb:'.getTweetImage($tweet).'<br>';

//Get Tweet Video URL
echo 'Tweet Video URL:'.getTweetVideo($tweet);

	
	//	print_r ($tweet); // see all json formatted datas you can reach.

?>

	
