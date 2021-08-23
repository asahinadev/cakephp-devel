<?php
use Migrations\AbstractMigration;

class UserRoles extends AbstractMigration
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
        $table = parent::table("user_roles");
        $table->addColumn("user_id", "integer");
        $table->addColumn("role_id", "integer");

        $table->addForeignKey("user_id", "users", "id");
        $table->addForeignKey("role_id", "roles", "id");

        $table->save();
    }
}
