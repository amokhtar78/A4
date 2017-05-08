<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectDevelopersAndGames extends Migration {

    public function up() {
        Schema::table('games', function (Blueprint $table) {

            $table->integer('developer_id')->unsigned();
            $table->foreign('developer_id')->references('id')->on('developers');
        });
    }

    public function down() {
        Schema::table('games', function (Blueprint $table) {

            $table->dropForeign('games_developer_id_foreign');
            $table->dropColumn('developer_id');
        });
    }

}

