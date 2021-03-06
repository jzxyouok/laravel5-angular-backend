<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCmsTaggedTable extends Migration {

	public function up() {
		Schema::create('cms_tagged', function(Blueprint $table) {
			$table->increments('id');
			$table->string('taggable_id', 36)->index();
			$table->string('taggable_type', 255)->index();
			//$table->morphs('taggable');
			$table->string('tag_name', 255);
			$table->string('tag_slug', 255)->index();
		});
	}

	public function down() {
		Schema::drop('cms_tagged');
	}
}
