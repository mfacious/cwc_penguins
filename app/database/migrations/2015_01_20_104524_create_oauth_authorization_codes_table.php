<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOauthAuthorizationCodesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('oauth_authorization_codes', function(Blueprint $table)
		{
			$table->string('authorization_code',40);
			$table->string('client_id',80);
			$table->string('user_id',255);
			$table->string('redirect_uri',2000);
			$table->timestamp('expires');
			$table->string('scope',2000);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('oauth_authorization_codes');
	}

}
