<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('borrows', function (Blueprint $table) {
            $table->uuid()->primary()->unique()->default(Str::uuid());
            $table->foreignUuid("user_uuid")->constrained("users", "uuid")->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignUuid("book_uuid")->constrained("books", "uuid")->cascadeOnDelete()->cascadeOnUpdate();
            $table->date("borrow_date");
            $table->date("return_date");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borrows');
    }
};
