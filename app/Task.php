<?php

namespace App;




class Task extends Model
{

	public function comments()
	{

		return $this->hasMany(Comment::class);

	}

	public function user()
	{

		return $this->belongsTo(User::class);

	}


	public function addComment($body, $user_id)
	{

		

		$this->comments()->create(compact('body', 'user_id'));
	}

	public static function archives()
	{

		return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
		
		->groupBy('year', 'month')

		->orderByRaw('min(created_at) desc')
		
		->get()
		
		->toArray();

	}


	public function tags(){

		return $this->belongsToMany(Tag::class);


	}

	public function likes()
	{

		return $this->hasMany(Like::class);

	}

}



