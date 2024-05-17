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
        Schema::create('item_master', function (Blueprint $table) {
            $table->id('item_master_id');
            $table->foreignId('item_type_id')->constrained('item_types', 'type_id')->onDelete('cascade');
            $table->foreignId('measure_id')->constrained('measurements', 'measurement_id')->onDelete('cascade');
            $table->foreignId('admin_id')->constrained('admins', 'admin_id')->onDelete('cascade');
            $table->foreignId('dep_id')->constrained('departments', 'dep_id')->onDelete('cascade');
            $table->string('item', 50);
            $table->string('item_code', 50);
            $table->integer('quantity');
            $table->string('manufacturer', 50);
            $table->boolean('is_disposable')->default(false);
            $table->boolean('is_active')->default(false);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_master');
    }
};
