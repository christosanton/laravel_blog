
@extends('layouts.master')




@section ('content')


<div class="col-sm-8 blog-main">

	@foreach ($task as $task)

	@include('post')

	@endforeach
	
	<nav>
		<ul class="pager">
			<li><a href="#">Previous</a></li>
			<li><a href="#">Next</a></li>
		</ul>
	</nav>

</div><!-- /.blog-main -->







@endsection








