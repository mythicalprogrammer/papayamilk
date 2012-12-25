<!DOCTYPE html>
	@include('partials.layout.header',array('title'=>$title))
	<body class="typeface-js">
	    <!--[if lt IE 7]>
		    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
	    <![endif]-->
	    @include('partials.layout.navbar',array('nav_active'=>$nav_active))
	    @include('partials.layout.brand')
	    <div id="wrap" class="container">
	        <div id="main-content" class="container">{{ $content }}</div>
	        @include('partials.layout.footer')
    	</div>
	    @include('partials.layout.globaljs')
	</body>
</html>
