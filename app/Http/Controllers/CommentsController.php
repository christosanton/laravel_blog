<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

use App\Comment;


class CommentsController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}


	public function store(Task $task)
	{

		
		$this->validate(request(), ['body' => 'required']);

		

		$task->addComment(request('body'), auth()->id());


		
		return back();




	}


}
