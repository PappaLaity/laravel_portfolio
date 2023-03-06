<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("entreprise");
            $table->string("lien_entreprise")->nullable();
            $table->string("contrat");
            $table->string("debut_experience");
            $table->string("fin_experience");
            $table->string("outils");
            $table->string("environnement");
            $table->boolean("statut");
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('experiences');
    }
};
