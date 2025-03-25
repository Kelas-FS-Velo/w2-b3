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
        Schema::create('borrowings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('resource_id')->constrained()->onDelete('cascade');
            $table->timestamp('borrow_date')->useCurrent();
            $table->timestamp('due_date')->useCurrent();
            $table->timestamp('return_date')->nullable();
            $table->integer('amount')->default(1);
            $table->float('borrowing_price')->default(0.00);
            $table->float('fine_price')->default(0.00);
            $table->integer('total_borrowing_date')->default(0);
            $table->integer('total_fine_date')->default(0);
            $table->enum('status', ['pending', 'approved', 'rejected', 'borrowed', 'returned', 'overdue'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borrowings');
    }
};
