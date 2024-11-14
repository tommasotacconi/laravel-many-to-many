<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	use HasFactory;

	protected $fillable = [
		'name',
		'type_id',
		'authors',
		'arguments',
		'start_date',
		'end_date',
		'img_url'
	];

	public function type() {
			return $this->belongsTo(Type::class);
	}

	public function technologies() {
		return $this->belongsToMany(Technology::class);
	}
}
