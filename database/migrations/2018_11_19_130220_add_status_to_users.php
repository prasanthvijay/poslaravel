<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatusToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function($table) {

            $table->string('phone')->after('email')->nullable();
            $table->text('address')->after('phone')->nullable();
            $table->enum('user_type',[1,2])
            ->after('remember_token')
            ->comment('1-super_admin,2-admin,3-showroom,4-employee');
            $table->enum('status',[1,2])->after('user_type')->comment('1-active,2-deactivate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
