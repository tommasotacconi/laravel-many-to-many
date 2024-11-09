<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 */
	public function up(): void
	{
		Schema::table('projects', function (Blueprint $table) {
			$table->unsignedBigInteger('type_id')->after('name');

			// Create new constraint of foreign key
			// in column `category_id`
			// which refers to `id` in types table
			$table->foreign('type_id')->references('id')->on('types');
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::table('projects', function (Blueprint $table) {
			$table->dropForeign('projects_type_id_foreign'); //can be found as index in related db table


			$table->dropColumn('type_id');
		});
	}
};
