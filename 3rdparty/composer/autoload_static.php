<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2fd16dd8fbb94748e1ada016e6921a0f
{
    public static $files = array (
        'decc78cc4436b1292c6c0d151b19445c' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phpseclib\\' => 10,
        ),
        'H' => 
        array (
            'Hybridauth\\' => 11,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phpseclib\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib',
        ),
        'Hybridauth\\' => 
        array (
            0 => __DIR__ . '/..' . '/hybridauth/hybridauth/src',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Firebase\\JWT\\BeforeValidException' => __DIR__ . '/..' . '/firebase/php-jwt/src/BeforeValidException.php',
        'Firebase\\JWT\\ExpiredException' => __DIR__ . '/..' . '/firebase/php-jwt/src/ExpiredException.php',
        'Firebase\\JWT\\JWK' => __DIR__ . '/..' . '/firebase/php-jwt/src/JWK.php',
        'Firebase\\JWT\\JWT' => __DIR__ . '/..' . '/firebase/php-jwt/src/JWT.php',
        'Firebase\\JWT\\SignatureInvalidException' => __DIR__ . '/..' . '/firebase/php-jwt/src/SignatureInvalidException.php',
        'Hybridauth\\Adapter\\AbstractAdapter' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Adapter/AbstractAdapter.php',
        'Hybridauth\\Adapter\\AdapterInterface' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Adapter/AdapterInterface.php',
        'Hybridauth\\Adapter\\DataStoreTrait' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Adapter/DataStoreTrait.php',
        'Hybridauth\\Adapter\\OAuth1' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Adapter/OAuth1.php',
        'Hybridauth\\Adapter\\OAuth2' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Adapter/OAuth2.php',
        'Hybridauth\\Adapter\\OpenID' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Adapter/OpenID.php',
        'Hybridauth\\Data\\Collection' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Data/Collection.php',
        'Hybridauth\\Data\\Parser' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Data/Parser.php',
        'Hybridauth\\Exception\\AuthorizationDeniedException' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Exception/AuthorizationDeniedException.php',
        'Hybridauth\\Exception\\BadMethodCallException' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Exception/BadMethodCallException.php',
        'Hybridauth\\Exception\\Exception' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Exception/Exception.php',
        'Hybridauth\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Exception/ExceptionInterface.php',
        'Hybridauth\\Exception\\HttpClientFailureException' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Exception/HttpClientFailureException.php',
        'Hybridauth\\Exception\\HttpRequestFailedException' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Exception/HttpRequestFailedException.php',
        'Hybridauth\\Exception\\InvalidAccessTokenException' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Exception/InvalidAccessTokenException.php',
        'Hybridauth\\Exception\\InvalidApplicationCredentialsException' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Exception/InvalidApplicationCredentialsException.php',
        'Hybridauth\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Exception/InvalidArgumentException.php',
        'Hybridauth\\Exception\\InvalidAuthorizationCodeException' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Exception/InvalidAuthorizationCodeException.php',
        'Hybridauth\\Exception\\InvalidAuthorizationStateException' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Exception/InvalidAuthorizationStateException.php',
        'Hybridauth\\Exception\\InvalidOauthTokenException' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Exception/InvalidOauthTokenException.php',
        'Hybridauth\\Exception\\InvalidOpenidIdentifierException' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Exception/InvalidOpenidIdentifierException.php',
        'Hybridauth\\Exception\\NotImplementedException' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Exception/NotImplementedException.php',
        'Hybridauth\\Exception\\RuntimeException' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Exception/RuntimeException.php',
        'Hybridauth\\Exception\\UnexpectedApiResponseException' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Exception/UnexpectedApiResponseException.php',
        'Hybridauth\\Exception\\UnexpectedValueException' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Exception/UnexpectedValueException.php',
        'Hybridauth\\HttpClient\\Curl' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/HttpClient/Curl.php',
        'Hybridauth\\HttpClient\\Guzzle' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/HttpClient/Guzzle.php',
        'Hybridauth\\HttpClient\\HttpClientInterface' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/HttpClient/HttpClientInterface.php',
        'Hybridauth\\HttpClient\\Util' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/HttpClient/Util.php',
        'Hybridauth\\Hybridauth' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Hybridauth.php',
        'Hybridauth\\Logger\\Logger' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Logger/Logger.php',
        'Hybridauth\\Logger\\LoggerInterface' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Logger/LoggerInterface.php',
        'Hybridauth\\Logger\\Psr3LoggerWrapper' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Logger/Psr3LoggerWrapper.php',
        'Hybridauth\\Provider\\AOLOpenID' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/AOLOpenID.php',
        'Hybridauth\\Provider\\Amazon' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/Amazon.php',
        'Hybridauth\\Provider\\Apple' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/Apple.php',
        'Hybridauth\\Provider\\Authentiq' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/Authentiq.php',
        'Hybridauth\\Provider\\BitBucket' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/BitBucket.php',
        'Hybridauth\\Provider\\Blizzard' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/Blizzard.php',
        'Hybridauth\\Provider\\BlizzardAPAC' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/BlizzardAPAC.php',
        'Hybridauth\\Provider\\BlizzardEU' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/BlizzardEU.php',
        'Hybridauth\\Provider\\DeviantArt' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/DeviantArt.php',
        'Hybridauth\\Provider\\Discord' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/Discord.php',
        'Hybridauth\\Provider\\Disqus' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/Disqus.php',
        'Hybridauth\\Provider\\Dribbble' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/Dribbble.php',
        'Hybridauth\\Provider\\Dropbox' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/Dropbox.php',
        'Hybridauth\\Provider\\Facebook' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/Facebook.php',
        'Hybridauth\\Provider\\Foursquare' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/Foursquare.php',
        'Hybridauth\\Provider\\GitHub' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/GitHub.php',
        'Hybridauth\\Provider\\GitLab' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/GitLab.php',
        'Hybridauth\\Provider\\Google' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/Google.php',
        'Hybridauth\\Provider\\Instagram' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/Instagram.php',
        'Hybridauth\\Provider\\LinkedIn' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/LinkedIn.php',
        'Hybridauth\\Provider\\Mailru' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/Mailru.php',
        'Hybridauth\\Provider\\Medium' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/Medium.php',
        'Hybridauth\\Provider\\MicrosoftGraph' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/MicrosoftGraph.php',
        'Hybridauth\\Provider\\ORCID' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/ORCID.php',
        'Hybridauth\\Provider\\Odnoklassniki' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/Odnoklassniki.php',
        'Hybridauth\\Provider\\OpenID' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/OpenID.php',
        'Hybridauth\\Provider\\Patreon' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/Patreon.php',
        'Hybridauth\\Provider\\Paypal' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/Paypal.php',
        'Hybridauth\\Provider\\PaypalOpenID' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/PaypalOpenID.php',
        'Hybridauth\\Provider\\Pinterest' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/Pinterest.php',
        'Hybridauth\\Provider\\QQ' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/QQ.php',
        'Hybridauth\\Provider\\Reddit' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/Reddit.php',
        'Hybridauth\\Provider\\Slack' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/Slack.php',
        'Hybridauth\\Provider\\Spotify' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/Spotify.php',
        'Hybridauth\\Provider\\StackExchange' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/StackExchange.php',
        'Hybridauth\\Provider\\StackExchangeOpenID' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/StackExchangeOpenID.php',
        'Hybridauth\\Provider\\Steam' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/Steam.php',
        'Hybridauth\\Provider\\SteemConnect' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/SteemConnect.php',
        'Hybridauth\\Provider\\Strava' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/Strava.php',
        'Hybridauth\\Provider\\Telegram' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/Telegram.php',
        'Hybridauth\\Provider\\Tumblr' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/Tumblr.php',
        'Hybridauth\\Provider\\TwitchTV' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/TwitchTV.php',
        'Hybridauth\\Provider\\Twitter' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/Twitter.php',
        'Hybridauth\\Provider\\Vkontakte' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/Vkontakte.php',
        'Hybridauth\\Provider\\WeChat' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/WeChat.php',
        'Hybridauth\\Provider\\WeChatChina' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/WeChatChina.php',
        'Hybridauth\\Provider\\WindowsLive' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/WindowsLive.php',
        'Hybridauth\\Provider\\WordPress' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/WordPress.php',
        'Hybridauth\\Provider\\Yahoo' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/Yahoo.php',
        'Hybridauth\\Provider\\Yandex' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Provider/Yandex.php',
        'Hybridauth\\Storage\\Session' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Storage/Session.php',
        'Hybridauth\\Storage\\StorageInterface' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Storage/StorageInterface.php',
        'Hybridauth\\Thirdparty\\OAuth\\OAuthConsumer' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Thirdparty/OAuth/OAuthConsumer.php',
        'Hybridauth\\Thirdparty\\OAuth\\OAuthRequest' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Thirdparty/OAuth/OAuthRequest.php',
        'Hybridauth\\Thirdparty\\OAuth\\OAuthSignatureMethod' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Thirdparty/OAuth/OAuthSignatureMethod.php',
        'Hybridauth\\Thirdparty\\OAuth\\OAuthSignatureMethodHMACSHA1' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Thirdparty/OAuth/OAuthSignatureMethodHMACSHA1.php',
        'Hybridauth\\Thirdparty\\OAuth\\OAuthUtil' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Thirdparty/OAuth/OAuthUtil.php',
        'Hybridauth\\Thirdparty\\OpenID\\LightOpenID' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/Thirdparty/OpenID/LightOpenID.php',
        'Hybridauth\\User\\Activity' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/User/Activity.php',
        'Hybridauth\\User\\Contact' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/User/Contact.php',
        'Hybridauth\\User\\Profile' => __DIR__ . '/..' . '/hybridauth/hybridauth/src/User/Profile.php',
        'phpseclib\\Crypt\\AES' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Crypt/AES.php',
        'phpseclib\\Crypt\\Base' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Crypt/Base.php',
        'phpseclib\\Crypt\\Blowfish' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Crypt/Blowfish.php',
        'phpseclib\\Crypt\\DES' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Crypt/DES.php',
        'phpseclib\\Crypt\\Hash' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Crypt/Hash.php',
        'phpseclib\\Crypt\\RC2' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Crypt/RC2.php',
        'phpseclib\\Crypt\\RC4' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Crypt/RC4.php',
        'phpseclib\\Crypt\\RSA' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Crypt/RSA.php',
        'phpseclib\\Crypt\\Random' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Crypt/Random.php',
        'phpseclib\\Crypt\\Rijndael' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Crypt/Rijndael.php',
        'phpseclib\\Crypt\\TripleDES' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Crypt/TripleDES.php',
        'phpseclib\\Crypt\\Twofish' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Crypt/Twofish.php',
        'phpseclib\\File\\ANSI' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/File/ANSI.php',
        'phpseclib\\File\\ASN1' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/File/ASN1.php',
        'phpseclib\\File\\ASN1\\Element' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/File/ASN1/Element.php',
        'phpseclib\\File\\X509' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/File/X509.php',
        'phpseclib\\Math\\BigInteger' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Math/BigInteger.php',
        'phpseclib\\Net\\SCP' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Net/SCP.php',
        'phpseclib\\Net\\SFTP' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Net/SFTP.php',
        'phpseclib\\Net\\SFTP\\Stream' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Net/SFTP/Stream.php',
        'phpseclib\\Net\\SSH1' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Net/SSH1.php',
        'phpseclib\\Net\\SSH2' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Net/SSH2.php',
        'phpseclib\\System\\SSH\\Agent' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/System/SSH/Agent.php',
        'phpseclib\\System\\SSH\\Agent\\Identity' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/System/SSH/Agent/Identity.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2fd16dd8fbb94748e1ada016e6921a0f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2fd16dd8fbb94748e1ada016e6921a0f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2fd16dd8fbb94748e1ada016e6921a0f::$classMap;

        }, null, ClassLoader::class);
    }
}
