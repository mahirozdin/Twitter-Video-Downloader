# Twitter Video Downloade PHP

This app is one of the apps created using this repository.
[Twitter Video Downloader](https://play.google.com/store/apps/details?id=com.videodownloader.twittervideoindir)

# THIS REPOSITORY IS DEPRECED DUE TO TWITTER DEVELOPERS UPDATE API1.1 NO MORE IN USE. 
Tweet lookups is not supported on Basic Plan of Twitter's API anymore. You would have basic or pro plan to get tweet info. For more information check Twitter Developers Page. 

Open Source Twitter Video Downloder PHP Script

# How to Install.

1. Download Zip.
2. Set $consumer_key , $consumer_key_secret , $access_token , $access_token_secret variables from index.php
3. Set $tweet_id Variable from index.php
4. Run Script.

# Methods.

$tweet = getTweetInfo($connection,$tweet_id);

getTweetText($tweet)

getTweetImage($tweet)

getTweetVideo($tweet)

# Output.

![alt text](https://github.com/mahirozdin/Twitter-Video-Downloader/blob/master/sc1.png)

# Credits.

Uses Twitter API v1.1 as a library credits : TwitterOAuth (https://github.com/abraham/twitteroauth)
