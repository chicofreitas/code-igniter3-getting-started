<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_users_table extends CI_Migration {
    public function up() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => FALSE
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => TRUE
            ),
        ));
        // * Add a primary key (pk)
        $this->dbforge->add_key('id', TRUE);
        // * Create the table
        $this->dbforge->create_table('users');
    }

    public function down() {
        // * Drop the table
        $this->dbforge->drop_table('users');
    }
}