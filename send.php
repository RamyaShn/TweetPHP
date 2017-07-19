<?php
require_once '../src/twitter.class.php';
// ENTER YOUR CREDENTIALS HERE
$consumerKey = '<Your consumer key>';
$consumerSecret ='<your consumer secret key>';
$accessToken ='<your access token>';
$accessTokenSecret ='<your access token secret>';
$twitter = new TwitterAPI($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);
try {
        $image='../examples/iDidIt.jpg';    
	$tweet = $twitter->send('I did it',$image);
} catch (TwitterException $e) {
	echo 'Error: ' . $e->getMessage();
}