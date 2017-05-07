<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectDevelopersAndGamess extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('games', function (Blueprint $table) {

            # Remove the field associated with the old way we were storing developers
            # Can do this here, or update the original migration that creates the `games` table
            # $table->dropColumn('developer');
            # Add a new INT field called `developer_id` that has to be unsigned (i.e. positive)
            $table->integer('developer_id')->unsigned();

            # This field `developer_id` is a foreign key that connects to the `id` field in the `developers` table
            $table->foreign('developer_id')->references('id')->on('developers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('games', function (Blueprint $table) {

            # ref: http://laravel.com/docs/migrations#dropping-indexes
            # combine tablename + fk field name + the word "foreign"
            $table->dropForeign('games_developer_id_foreign');

            $table->dropColumn('developer_id');
        });
    }

}
