<!DOCTYPE html>
<html lang="en">
<head>
  <title>static format</title>
  <meta charset="UTF-8">
  <style media="screen">
    /* eric meyer reset */
    html, body, div, span, applet, object, iframe,
    h1, h2, h3, h4, h5, h6, p, blockquote, pre,
    a, abbr, acronym, address, big, cite, code,
    del, dfn, em, img, ins, kbd, q, s, samp,
    small, strike, strong, sub, sup, tt, var,
    b, u, i, center,
    dl, dt, dd, ol, ul, li,
    fieldset, form, label, legend,
    table, caption, tbody, tfoot, thead, tr, th, td,
    article, aside, canvas, details, embed,
    figure, figcaption, footer, header, hgroup,
    menu, nav, output, ruby, section, summary,
    time, mark, audio, video {
      margin: 0;
      padding: 0;
      border: 0;
      font-size: 100%;
      font: inherit;
      vertical-align: baseline;
    }
    
    /* HTML5 display-role reset for older browsers */
    article, aside, details, figcaption, figure,
    footer, header, hgroup, menu, nav, section {
      display: block;
    }
    
    body {
      line-height: 1;
    }
    
    ol, ul {
      list-style: none;
    }
    
    html {
      background-attachment: fixed;
      background-position: center center;
      background-repeat: no-repeat;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
  </style>
  
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  
</head>
<body>
  
  <section>
    <h1>Static Format</h1>
    <p>Static Format is the photography portfolio of Jon Chretien. The full site is currently being built, but in the meantime most of his work can be found on <a href="http://www.flickr.com/photos/truenotes">Flickr</a> and <a href="http://instagrid.me/jnchrtn/">Instagrid</a>.</p>
  </section>
  <footer>
    <p>Copyright &copy; <?php date("Y"); ?> Jon Chretien. All rights reserved.</p>
  </footer>
  
  <script>
    (function() {
      var photos = ['flags', 'liberty', 'subway', 'tahoe'], max = photos.length;
      document.getElementsByTagName('html')[0].style.backgroundImage = 'url(img/' + photos[Math.floor(Math.random() * max)] + '.jpg)';
    })();
  </script>

  <script>
    // var _gaq = _gaq || [];
    //     _gaq.push(['_setAccount', 'UA-953377-2']);
    //     _gaq.push(['_trackPageview']);
    //     (function() {
    //       var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    //       ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    //       var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    //     })();
  </script>
  
</body>
</html>