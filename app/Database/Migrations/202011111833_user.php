<?php namespace App\Database\Migration;

class User extends \CodeIgniter\Database\Migration
{
    public function up(){
        $this->forge->addField([
            'id'=>[
                'type'=>'INT',
                'constraint'=>11,
                'unsigned'=>TRUE,
                'auto_increment'=>TRUE
            ],
            'username'=>[
                'type'=>'Varchar',
                'constraint'=>100,
                
            ],
            'password'=>[
                'type'=>'TEXT',
            ],
            'salt'=>[
                'type'=>'TEXT'
            ],
            'avatar'=>[
                'type'=>'TEXT',
                'null'=>TRUE,
            ],
            'role'=>[
                'type'=>'TEXT',
                'null'=>TRUE,
            ],
            'role'=>[
                'type'=>'INT',
                'constraint'=>1,
                'default'=>1,
            ],
            'created_by'=>[
                'type'=> 'INT',
                'contraint'=>11,
            ],
            'create_date'=>[
                'type'=>'DATETIME',
            ],
            'update_by'=>[
                'type'=>'INT',
                'contraint'=>11,
                'null'=>TRUE,
            ],
            'update_date'=>[
                'type'=>'DATETIME',
                'null'=>TRUE,
            ]
        ]);
            $this->forge->addKey('id',TRUE);
            $this->forge->createTable('user');
 
        }
        public function down(){
            $this->forge->dropTable('user');
        }
}
?>