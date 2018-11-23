<?php

namespace App;


class Like extends Model
{

 
	public function task()
	{


		return $this->belongsTo(Task::class);

	}


	public function user()
	{


		return $this->belongsTo(User::class);

	}
}
