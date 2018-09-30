<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require "functions.php";
use Abraham\TwitterOAuth\TwitterOAuth;

// API Connection Parameters.
$consumer_key = "PKH803R9mSKnESzIHDYoslV4r";
$consumer_secret_key = "sRrObGM0DA0IKjXl3JTmf7g7VzBCW3w8ajCPKVWrnW2hKCFzzK";

// My tokens created by using Twitter Applications page create my tokens.
$access_token = "891375250780377088-pa3CCCpxL1COetaXXZpqP3mPltWkyII";
$access_token_secret = "gQzlTzFUX0K5GUZTzaOxjuUo2L72NWFLOhGy71lfOezNC";

// Connection and getting permisions from API Connection parameters.
$connection = new TwitterOAuth($consumer_key, $consumer_secret_key, $access_token, $access_token_secret);
$content = $connection->get("account/verify_credentials");

// https://twitter.com/CANBERK_dr/status/1046362761477926913
// Getting Tweet Informations.
$tweet_id = "1046362761477926913"; // Example_Tweet_id  get from :  https://twitter.com/TwitterMusic/status/1045676724770484224
$tweet = getTweetInfo($connection,$tweet_id);

//print_r($tweet);

//Get Tweet Text
echo 'Tweet Text:'.getTweetText($tweet).'<br>';
 
//Get Tweet Video Image Thumb
echo 'Tweet Thumb:'.getTweetImage($tweet).'<br>';

//Get Tweet Video URL
print_r(getTweetVideo($tweet));

	
	//	print_r ($tweet); // see all json formatted datas you can reach.

?>

	
