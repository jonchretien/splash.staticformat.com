<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>static format</title>
  
  <meta charset="UTF-8"> 
  <meta name="author" content="Jon Chretien"> 
  <meta name="description" content="Static Format is the photography portfolio of Jon Chretien."> 
  <meta name="keywords" content="jon chretien, photography, portfolio"> 
  <meta name="Copyright" content="Copyright (c) <?php echo (date ("Y")) ?> Jon Chretien">
  <meta name="viewport" content="initial-scale=1.0, width=device-width, maximum-scale=1.0"> 
 
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"> 
  <link rel="stylesheet" href="css/styles.min.css" media="all">
  
</head>
<body>
  
  <div id="welcome">
    <div class="inset">
      <h1>Static Format</h1>
      <p id="summary">Static Format is the photography portfolio of <a href="http://jonchretien.com/">Jon Chretien</a>. The full site is currently being built, but in the meantime most of his work can be found on <a href="http://www.flickr.com/photos/truenotes/">Flickr</a> and <a href="http://instagrid.me/jnchrtn/">Instagrid</a>.</p>
      <p id="footer">Copyright &copy; <?php echo (date ("Y")) ?> <a href="http://jonchretien.com/">Jon Chretien</a>. All rights reserved.</p>
    </div>
  </div>
  
  <script>
    (function() {
      var photos = ['apollo', 'boardwalk', 'dog', 'trevi', 'window', 'wire'], max = photos.length;
      document.getElementsByTagName('html')[0].style.backgroundImage = 'url(img/' + photos[Math.floor(Math.random() * max)] + '.jpg)';
    })();
  </script>

  <script>
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-953377-2']);
    _gaq.push(['_trackPageview']);
    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
  
</body>
</html>