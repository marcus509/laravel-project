<?php

class Create_Educations_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('educations', function($table)
		{
			//auto-increments
			$table->increments('id_educations');

			//var char 32
			$table->string('title', 32);
			$table->string('period', 32);

			//champ pour la description de la mission
			$table->text('description');

			//Utilise les fonctions created_at() et updated_at()
			$table->timestamps();
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('educations');
	}

}