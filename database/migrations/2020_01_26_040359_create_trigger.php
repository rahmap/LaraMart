<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrigger extends Migration
{

    public function up()
    {
        DB::unprepared('
            CREATE TRIGGER tr_after_insert_users AFTER INSERT ON `users` FOR EACH ROW
            BEGIN
                INSERT INTO detail_users SET id_user = NEW.id;
            END
        '); //Membuat id_user di detail_users auto terisi
    }


    public function down()
    {
        DB::unprepared('DROP TRIGGER `tr_after_insert_users` '); 
    }
}
