<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClubsTable extends Migration
{
    public function up()
    {
        Schema::create('clubs', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Tên câu lạc bộ
            $table->text('description'); // Mô tả câu lạc bộ
            $table->foreignId('president_id')->nullable()->constrained('users')->onDelete('set null'); // Chủ tịch câu lạc bộ
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('clubs');
    }
}
