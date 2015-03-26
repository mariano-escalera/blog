<!-- Title -->
<h1>Blog Post Title</h1>

<!-- Author -->
<p class="lead">by <a href="#">Blog Post Author</a></p>

<hr>

<!-- Date/Time -->
<p><span class="glyphicon glyphicon-time"></span> Posted on August 24, 2013 at 9:00 PM</p>

<hr>

<!-- Preview Image -->
{{--<img class="img-responsive" src="http://placehold.it/900x300" alt="">
<hr>--}}

<!-- Post Content -->
<p class="lead">
	{{$post['description']}}
</p>
{{$post['content']}}
<hr>