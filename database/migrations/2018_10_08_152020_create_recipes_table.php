<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('prev_img')->nullable();
            $table->string('full_img')->nullable();
            $table->string('number_servings')->nullable();
            $table->string('time')->nullable();
            $table->string('difficulty')->nullable();
            $table->text('ingredients')->nullable();
            $table->text('description')->nullable();
            $table->text('advise')->nullable();
            $table->timestamps();
        });

        DB::table('recipes')->insert([
            'name' => 'Сендвіч із тунцем і авокадо',
            'prev_img' => 'recipe1.jpg',
            'full_img' => 'recipe1_main.jpg',
            'number_servings' => '4',
            'time' => '15 хвилин',
            'difficulty' => 'Простий',
            'ingredients' => '200 г тунця у власному соку «Премія»
1 невелике авокадо
1 невеликий огірок
4 листки салату',
            'description' => 'Перед подачею сендвіч можна скропити оливковою олією і злегка обсмажити з обох боків на сковороді-гриль.',
            'advise' => 'Перед подачею сендвіч можна скропити оливковою олією і злегка обсмажити з обох боків на сковороді-гриль.'
        ]);

        DB::table('recipes')->insert([
            'name' => 'Сендвіч із тунцем і авокадо',
            'prev_img' => 'recipe1.jpg',
            'full_img' => 'recipe1_main.jpg',
            'number_servings' => '4',
            'time' => '15 хвилин',
            'difficulty' => 'Простий',
            'ingredients' => '200 г тунця у власному соку «Премія»
1 невелике авокадо
1 невеликий огірок
4 листки салату',
            'description' => 'Перед подачею сендвіч можна скропити оливковою олією і злегка обсмажити з обох боків на сковороді-гриль.',
            'advise' => 'Перед подачею сендвіч можна скропити оливковою олією і злегка обсмажити з обох боків на сковороді-гриль.'
        ]);

        DB::table('recipes')->insert([
            'name' => 'Сендвіч із тунцем і авокадо',
            'prev_img' => 'recipe1.jpg',
            'full_img' => 'recipe1_main.jpg',
            'number_servings' => '4',
            'time' => '15 хвилин',
            'difficulty' => 'Простий',
            'ingredients' => '200 г тунця у власному соку «Премія»
1 невелике авокадо
1 невеликий огірок
4 листки салату',
            'description' => 'Перед подачею сендвіч можна скропити оливковою олією і злегка обсмажити з обох боків на сковороді-гриль.',
            'advise' => 'Перед подачею сендвіч можна скропити оливковою олією і злегка обсмажити з обох боків на сковороді-гриль.'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes');
    }
}
