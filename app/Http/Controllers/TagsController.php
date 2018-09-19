<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tag;

class TagsController extends Controller
{
	public function index(Tag $tag){

		$task= $tag->tasks;

		return view('welcome', compact('task'));


	}
}
