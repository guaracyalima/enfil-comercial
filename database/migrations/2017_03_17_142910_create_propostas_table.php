<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropostasTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('propostas', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('proposta_id')->unsigned();
            $table->foreign('proposta_id')->references('id')->on('propostas');
            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->integer('processo_id')->unsigned();
            $table->foreign('processo_id')->references('id')->on('processo');
            $table->integer('cliente_id')->unsigned();
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->integer('fornecedor_id')->unsigned();
            $table->foreign('fornecedor_id')->references('id')->on('fornecedores');
            $table->longText('observacao');
            $table->string('resp_tec');
            $table->string('resp_com');
            $table->string('status');
            $table->string('respa');
            $table->string('respb');
            $table->string('respc');
            $table->string('respd');
            $table->string('respe');
            $table->string('respf');
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
		Schema::drop('propostas');
	}

}
