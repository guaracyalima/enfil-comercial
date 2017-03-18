<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFornecedorsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fornecedors', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('cidade');
            $table->string('estado');
            $table->string('rua');
            $table->string('bairro');
            $table->string('numero');
            $table->string('cep');
            $table->string('telefone');
            $table->string('email');
            $table->string('site');
            $table->string('contato');
            $table->string('cnpj')->nulable();
            $table->string('cpf')->nulable();
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
		Schema::drop('fornecedors');
	}

}
