<?php

use App\Models\Expense;
use App\Models\Tag;
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
        Schema::create('expense_tags', function (Blueprint $table) {
            $table->foreignIdFor(Expense::class)
                ->constrained()
                ->onDelete('cascade');
            $table->foreignIdFor(Tag::class)
                ->constrained()
                ->onDelete('cascade');
            $table->timestamps();

            $table->primary(['expense_id', 'tag_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expense_tags');
    }
};
