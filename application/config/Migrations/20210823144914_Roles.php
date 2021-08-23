<?php
use Migrations\AbstractMigration;

class Roles extends AbstractMigration
{

    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * @return void
     */
    public function change()
    {
        $table = parent::table("roles");
        $table->addColumn("code", "string");
        $table->addColumn("name", "string");
        $table->save();
    }
}
