        <div class="container">
            <div class="hero-unit">
                <h1>Unrequited Love</h1>
                <p>Our Team..</p>
            </div>

            <!-- Example row of columns -->
            <div class="row">
                <div class="span4">
		    {{ HTML::image('img/profile/anthony_doan.png', 'Anthony Doan Picture'); }}
                    <h3>Anthony Doan</h3>
                    <h4>CEO/CTO</h4>
                    <p>Founded Unrequited Love.</p>
                    <p>Programmer, hacker, system administrator...</p>
                    <p><a class="btn" href="/resume/anthony_resume.pdf">View resume&raquo;</a></p>
                </div>
                <div class="span4">
            {{ HTML::image('img/profile/ryan_kwong.jpg', 'Ryan Kwong Picture'); }}
                    <h3>Ryan Kwong</h3>
                    <h4>Developer</h4>
                    <p>I develop for Unrequited Love!</p>
                    <p>Programmer, Ruby Enthusiast, VIM User...</p>
                    <p><a class="btn" href="/resume/ryan_resume.pdf">View resume&raquo;</a></p>
                </div>
            </div>
            <hr>

	@include('partials.footer')

        </div> <!-- /container -->
