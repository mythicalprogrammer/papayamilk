<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    @if ($nav_active == 'home')
                    <li class="active"><a href="/">Home</a></li>
                    @else
                    <li><a href="/">Home</a></li>
                    @endif
                    @if ($nav_active == 'projects')
                    <li class="active"><a href="projects">Projects</a></li>
                    @else
                    <li><a href="projects">Projects</a></li>
                    @endif
                    <li><a href="http://unrequitedlovesoftware.tumblr.com/">Blog</a></li>
                    @if ($nav_active == 'about')
                    <li class="active"><a href="about">About</a></li>
                    @else
                    <li><a href="about">About</a></li>
                    @endif
                    <!--
                    <li><a href="contact">Contact</a></li>
                    -->
                </ul>
            </div><!--/.nav-collapse -->
            <div class="navbar-form pull-right">
                <a id="login" class="btn" href="login">Login</a>
            </div>
        </div>
    </div>
</div>
