<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBudgetsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('budgets', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('proposta_id')->unsigned();
            $table->foreign('proposta_id')->references('id')->on('propostas');
            $table->string('empresa');
            $table->integer('processo');
            $table->integer('cliente_id')->unsigned();
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->string('segmento');
            $table->string('assunto');
            $table->text('respt');
            $table->text('respc');
            $table->text('respcoord');
            $table->text('prop_tec');
            $table->text('prop_com');
            $table->text('estima_valor');
            $table->double('valor');
            $table->string('chance');
            $table->dateTime('data_compa');
            $table->dateTime('data_compb');
            $table->string('interacao');
            $table->string('status');
            $table->longText('observacao');
            $table->string('via_prop');
            $table->string('existe_prop');
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
		Schema::drop('budgets');
	}

}
