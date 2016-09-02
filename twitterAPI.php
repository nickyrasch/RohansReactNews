<?php
session_start();
require_once("twitteroauth/twitteroauth/twitteroauth.php"); //Path to twitteroauth library
 
$twitteruser = "TheRoDamani";
$notweets = 30;
$consumerkey = "xHf3JhetVd5e9T9Mc4eZuLHka";
$consumersecret = "PpDc3PwVnTb5Rf0OXnY419Uu8vNm581XhRU2u5zBpHwq4JM6Uf";
$accesstoken = "490067248-bg7kTmQ2cKj2ZuKNy5O4PDF0YuQndzDbLebwdHpr";
$accesstokensecret = "Jt88J1oV9UPCGVFA70p85fy3arTQNjhq9sOfK4dF0n4fG";
 
function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
  $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
  return $connection;
}
 
$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
 
$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitteruser."&count=".$notweets);
 
echo json_encode($tweets);
?>



---

GET /1.1/search/tweets.json?q=therodamani HTTP/1.1
Authorization:
OAuth oauth_consumer_key="DC0sePOBbQ8bYdC8r4Smg",oauth_signature_method="HMAC-SHA1",oauth_timestamp="1472069537",oauth_nonce="-668492712",oauth_version="1.0",oauth_token="490067248-VfmivkM3GLwWj3e2PglgF9KtpREOWIS4W1GTVxIA",oauth_signature="6r4cKZtIIJipeYJoGv%2BowvwADAA%3D"
Host:
api.twitter.com
X-Target-URI:
https://api.twitter.com
Connection:
Keep-Alive