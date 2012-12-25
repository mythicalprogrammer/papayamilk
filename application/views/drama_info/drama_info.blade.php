<link rel="stylesheet" href="css/drama_info.css">
<!-- Example row of columns -->
<div class="row">
    <div class="span8">
        <div class="row">
	        @include('partials.drama.drama_info')
        </div>
        <div class="row">
            <div id="cast" class="span8">
                <hr />
	            @include('partials.drama.casts')
            </div>
        </div>
        <div class="row">
            <div id="reviews" class="span8">
                <hr />
	            @include('partials.drama.drama_reviews')
            </div>
        </div>
        <div class="row">
            <div id="recommendation" class="span8">
                <hr />
	            @include('partials.drama.recommendations')
            </div>
        </div>
    </div>
    <div class="span4">
        <div id="title">
	        @include('partials.drama.drama_title')
        </div>
        <div id="genre">
            <hr />
	        @include('partials.drama.drama_genre')
        </div>
        <div id="details">
            <hr />
	        @include('partials.drama.drama_details')
        </div>
        <div id="statistics">
            <hr />
	        @include('partials.drama.drama_statistics')
        </div>
    </div>
</div>
