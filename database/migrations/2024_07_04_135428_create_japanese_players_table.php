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
        Schema::create('japanese_layers', function (Blueprint $table) {
            $table->japanese_player_id();
            $table->foreignId(`club_team_id`)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->player_name()->nullable(false);
            $table->player_age()->nullable(false);
            $table->club_team_name()->nullable(false);
            $table->national_team_retired_flag();
            $table->player_retired_flag();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('japan_players');
    }
};
