
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryTeamRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('delivery_team_requests', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('email');
            $table->string('company')->nullable();
            $table->string('country')->nullable();
            $table->string('role')->nullable();

            $table->string('service')->nullable();
            $table->string('volume')->nullable();
            $table->string('currency')->nullable();
            $table->string('destination')->nullable();
            $table->string('systems')->nullable();

            $table->string('timeline')->nullable();
            $table->string('engagement_model')->nullable();

            $table->text('message')->nullable();

            $table->string('status')->default('Pending');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('delivery_team_requests');
    }
}
