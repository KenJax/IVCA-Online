<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>IVCA Social Media</title>
    <link rel="stylesheet" type="text/css" href="css/ivca.css"/>
    <script src="/js/SmoothScroll.js" ></script>

</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    <?php 
  include ("topNav.htm");
?>
<div class="fb-page" 
  data-tabs="timeline,events,messages"
  data-href="https://www.facebook.com/groups/608730092531729/"
  data-width="380" 
  data-hide-cover="false"></div>

</body>
</html>