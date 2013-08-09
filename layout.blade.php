<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>@yield('title')</title>
    <link href='//fonts.googleapis.com/css?family=OFL+Sorts+Mill+Goudy+TT' rel='stylesheet' type='text/css'/>
    <link href="{{ url(theme_path('css/style.css')) }}" rel="stylesheet" media="screen">
    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-35125724-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>
  </head>
  <body>
    <div class="container">
      <header>
        <h1><a href="{{ url('/') }}">{{ site_title() }}</a></h1>
        <h3>Christian, web artisan, lead developer at {{HTML::link('https://ioffertory.com', 'iOffertory')}}</h3>
        <nav>
          <ul>
            <li><a href="{{url('tag/faith') }}">Faith</a></li>
            <li><a href="{{url('tag/code') }}">Code</a></li>
            <li><a href="{{url('tag/other') }}">Other</a></li>
            <li><a href="{{ url('archive') }}">Posts</a></li>
            <li><a href="{{ url('rss') }}">RSS</a></li>
          </ul>
        </nav>
      </header>
      <div class="content">
        @yield('content')
      </div>
      <footer>
        <p>Powered by <a href="http://wardrobecms.com">Wardrobe</a></p>
      </footer>
    </div>
  </body>
</html>
