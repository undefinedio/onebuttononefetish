<?php
$hits = file_get_contents("hits.txt");
?>
<!doctype html>
<html ng-app="fetishApp" lang="en">
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta charset="UTF-8">
    <title>One Button One Fetish</title>
    <link href='http://fonts.googleapis.com/css?family=Chivo:400,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/main.css"/>
    <!-- for Google -->
    <meta name="description"
          content="Still looking for your inner fetish? You've always wonderd why normal sex couldn't turn you on? One Button, One Fetish will give you the answer!"/>

    <meta name="author" content="Unde.fined.io"/>
    <meta name="copyright" content="Yes some..."/>
    <meta name="application-name" content="One button one fetish"/>

    <!-- for Facebook -->
    <meta property="og:title" content="One button one fetish"/>
    <meta property="og:type" content="article"/>
    <meta property="og:image" content="http://onebuttononefetish.com/share.jpg"/>
    <meta property="og:url" content="http://onebuttononefetish.com/"/>
    <meta property="og:description"
          content="Still looking for your inner fetish? You've always wonderd why normal sex couldn't turn you on? One Button, One Fetish will give you the answer!"/>

    <!-- for Twitter -->
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:title" content="One button one fetish"/>
    <meta name="twitter:description"
          content="Still looking for your inner fetish? You've always wonderd why normal sex couldn't turn you on? One Button, One Fetish will give you the answer!"/>
    <meta name="twitter:image" content="http://onebuttononefetish.com/share.jpg"/>
</head>
<body>
<audio id="js-audio-1">
    <source src="sounds/squirt.mp3" type="audio/mpeg"/>
    <source src="sounds/squirt.ogg" type="audio/ogg"/>
</audio>
<div class="wrapper" ng-controller="fetishCtrl">
    <div class="logo"></div>
    <button ng-click="openFetish()" id="js-button"
            onClick="_gaq.push(['_trackEvent', 'Button', 'Clicked', 'A nasty fucker clicked the button']);">
        <h2>PRESS HERE*</h2>
        </br>
        <p class="hits"> <?= number_format($hits) ?> pervs have already pressed this button </p>
        <span>* If you dare, pussy!</span>

    </button>
    <p class="hits-mobile">Already <?= $hits ?> pervs have pressed the button </p>

    <div class="social">
        <div class="fb-share-button share-button" data-href="http://onebuttononefetish.com"
             data-type="button_count"></div>
        <div class="share-button" style="vertical-align: baseline;">
            <div class="g-plus" data-action="share" data-annotation="none" data-height="15"
                 data-href="http://onebuttononefetish.com"></div>
        </div>
        <div class="share-button">
            <a href="https://twitter.com/share" class="twitter-share-button "
               data-url="http://onebuttononefetish.com"></a>
        </div>
    </div>

    <div class="follow-us">
       <div class="undefined">
               <p>Leuk bedacht door <a href="http://weareundefined.be" target="_blank" class="rainbow">undefined</a></p>
           </div>
      </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.17/angular.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>var fetishes = <?php include ("json/db.json");?>;</script>
<script src="js/app.js"></script>
<script>


    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-51941210-1', 'onebuttononefetish.com');
    ga('require', 'displayfeatures')
    ga('send', 'pageview');
    //google analytics
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-51941210-1']);
    _gaq.push(['_trackPageview']);

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&appId=1431685560449528&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    /* Twitter */
    !function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
        if (!d.getElementById(id)) {
            js = d.createElement(s);
            js.id = id;
            js.src = p + '://platform.twitter.com/widgets.js';
            fjs.parentNode.insertBefore(js, fjs);
        }
    }(document, 'script', 'twitter-wjs');
    /* G+ */
    (function () {
        var po = document.createElement('script');
        po.type = 'text/javascript';
        po.async = true;
        po.src = 'https://apis.google.com/js/plusone.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(po, s);
    })();

</script>
</body>
</html>
<?php
$fp = fopen("hits.txt", "r+");
if (flock($fp, LOCK_EX)) {  // acquire an exclusive lock
    ftruncate($fp, 0);      // truncate file
    if(intval($hits) < 1230567){
        $hits = 1230567;
    }
    fwrite($fp, intval($hits) + 1);
    fflush($fp);            // flush output before releasing the lock
    flock($fp, LOCK_UN);    // release the lock
}
?>
