<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda');
            $table->string('stazione_di_partenza');
            $table->string('stazione_di_arrivo');
            $table->time('orario_di_partenza');
            $table->time('orario_di_arrivo');
            $table->string('codice_treno');
            $table->integer('numero_carrozze');
            $table->boolean('in_orario')->default(true);
            $table->boolean('cancellato')->default(false);
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
        Schema::dropIfExists('trains');
    }
}



// commento: In mySQL si traduce cosi
// CREATE TABLE `trains` (
//     `id` bigint unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
//     `azienda` varchar(255) NOT NULL,
//     `stazione_di_partenza` varchar(255) NOT NULL,
//     `stazione_di_arrivo` varchar(255) NOT NULL,
//     `orario_di_partenza` time NOT NULL,
//     `orario_di_arrivo` time NOT NULL,
//     `codice_treno` varchar(255) NOT NULL,
//     `numero_carrozze` int NOT NULL,
//     `in_orario` tinyint(1) NOT NULL DEFAULT 1,
//     `cancellato` tinyint(1) NOT NULL DEFAULT 0,
//     `created_at` timestamp NULL DEFAULT NULL,
//     `updated_at` timestamp NULL DEFAULT NULL
//   );
