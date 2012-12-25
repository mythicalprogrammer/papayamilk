<!-- start 1st row -->
<div class="row">
    <!-- start column span8 -->
    <div class="span8">
        <!-- sub column: Latest Updates -->
        <div id="latest_updates">
	        @include('partials.drama.latest_updates')
        </div>
        <!-- sub column: Recommendation -->
        <div id="recommendation">
            <hr />
	        @include('partials.drama.recommendations')
        </div>
    </div><!-- end column span8 -->
    <!-- start column span4 -->
    <div class="span4">
        <!-- sub column: Search Shows -->
        <div id="search_shows">
	        @include('partials.drama.search_shows')
        </div>
        <!-- sub column: Popular Shows -->
        <div id="popular_shows">
            <hr />
	        @include('partials.drama.popular_shows')
        </div>
        <!-- sub column: Popular Shows -->
        <div id="latest_shows">
            <hr />
	        @include('partials.drama.latest_shows')
        </div>
    </div><!-- end column span4 -->
</div><!-- end 1st row -->
