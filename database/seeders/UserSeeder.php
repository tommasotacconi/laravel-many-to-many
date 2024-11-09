<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		$new_user = new User();
		$new_user->name = 'Tommaso Tacconi';
		$new_user->email = 'tommaso.tacconi@gmail.com';
		$new_user->password = Hash::make('ciaoLaravel10');
		$new_user->save();
	}
}
