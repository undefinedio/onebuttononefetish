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
<div class="form">
    <form action=""></form>
</div>
<div class="wrapper" ng-controller="fetishCtrl">
    <div class="logo"></div>
    <button ng-click="openFetish()" id="js-button"
            onClick="_gaq.push(['_trackEvent', 'Button', 'Clicked', 'A nasty fucker clicked the button']);">
        <h2>PRESS HERE*</h2>
        <span>* If you dare, pussy!</span>
    </button>

</div>
<footer><p>Have any sick suggestions? Send a message <a href="mailto:creepo@onebuttononefetish.com">here</a></p>
</footer>

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

</script>
</body>
</html>