<?php
use Migrations\AbstractMigration;

class Users extends AbstractMigration
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
        $table = parent::table("users");

        $table->addColumn("username", "string");
        $table->addColumn("email", "string");
        $table->addColumn("password", "string");

        $table->addTimestamps("created", "modified");

        $table->addIndex((array) "username");
        $table->addIndex((array) "email");

        $table->save();
    }
}
