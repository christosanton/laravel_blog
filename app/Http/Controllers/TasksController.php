<?php
namespace App\Http\Controllers;

use App\Task;

use App\Comment;

use Carbon\Carbon;

use App\Like;

class TasksController extends Controller
{


	public function __construct()
	{
		$this->middleware('auth')->except(['index', 'show']);
	}



	public function index()
	{

		$task =Task::latest();

		if ($month = request('month')){

			$task->whereMonth('created_at', Carbon::parse($month)->month);

		}


		if ($year = request('year')){

			$task->whereYear('created_at', $year);

		}


		$task = $task->get();

		
		return view('welcome', compact('task'));
	}

	public function create()
	{
		return view('show');
	}

	public function store()
	{

		$this->validate(request(), [


			'title' => 'required',

			'body' => 'required'

		]);

		Task::create([
			'title' => request('title'),
			'body' => request('body'),
			'user_id' => auth()->id()
		]);
		
		session()->flash('message', 'Thanks for your Post');
		
		return redirect ("/");
	}



	public function show(Task $task)
	{

		$counter = count($task->likes);

		return view('singlepost', compact('task', 'counter'));

	}


	public function storelike(Task $task){
		// try {

			Like::create([
				'user_id' => auth()->id(),
				'task_id' => $task->id
			]);
		// } catch (\Illuminate\Database\QueryException $e) {
		// 	var_dump($e->errorInfo);
		// }

	}

}
