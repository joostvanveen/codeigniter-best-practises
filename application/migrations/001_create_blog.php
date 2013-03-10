<?php
class Migration_Create_blog extends CI_Migration
{

    public function up ()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT', 
                'unsigned' => TRUE, 
                'auto_increment' => TRUE), 
            'pubdate' => array(
                'type' => 'DATETIME'), 
            'title' => array(
                'type' => 'VARCHAR', 
                'constraint' => 250), 
            'text' => array(
                'type' => 'TEXT'))
        );
        
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('blog');
    }

    public function down ()
    {
        $this->dbforge->drop_table('blog');
    }
}