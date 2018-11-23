

@extends ('layouts.master')



@section ('content')


<div class="col-sm-8 blog-main">


	<h1>{{ $task->title }}</h1>

</a>


</h2>

@if (count($task->tags))

<ul>
	
	@foreach ($task->tags as $tag)

	<li>

		<a href="/tasks/tags/{{ $tag->name }}">

			{{ $tag->name }}

		</a>

	</li>

	@endforeach

</ul>

@endif


<p class="blog-post-meta">

	{{ $task->user->name }}

	{{ $task->created_at->toFormattedDateString() }}
</p>



<p id="likes"><i class="fa fa-thumbs-up" id="like"></i><span id="like_counter">{{ $counter }}</span></p>


<br>
<div id="post_container" data-task-id={{$task->id}}>
	{{ $task->body }}
</div>
<hr>


<div class="comments">


	<ul class="comments"> 

		@foreach ($task->comments as $comment)



		<li class="list-group-item">

			{{ $comment->user->name }}


			<strong>



				{{ $comment->created_at->diffForHumans() }}:&nbsp;



			</strong>


			{{ $comment->body }}

		</li>


		@endforeach

	</ul>


</div>

</hr>


<div class="card">

	<div class="card-block">


		<form method="POST" action="/tasks/{{ $task->id }}/comments">

			{{  csrf_field() }}


			<div class="form-group">

				<textarea name= "body" placeholder="Your comment here." class="form-control"> </textarea>

			</div>



			<div class="form-group">

				<button type="submit" class="btn btn-primary">Add Comment</button>

			</div>


		</form>
		
		@if (count($errors))

		<div class="form-group">

			<div class="alert alert-danger">

				<ul>
					@foreach ($errors->all() as $error)

					<li>{{ $error }}</li>

					@endforeach

				</ul>

			</div>


		</div>


		@endif

	</div>



</div>




</div>





@endsection