<?php namespace App\Database\Migration;

class barang extends \CodeIgniter\Database\Migration
{
    public function up(){
        $this->forge->addField([
            'id'=>[
                'type'=>'INT',
                'constraint'=>11,
                'unsigned'=>TRUE,
                'auto_increment'=>TRUE
            ],
            'nama'=>[
                'type'=>'Varchar',
                'constraint'=>100,  
            ],
            'harga'=>[
                'type'=>'INT',
                'constraint'=>11,
            
            ],
            'stok'=>[
                'type'=>'INT',
                'constraint'=>11,
            ],
            'gambar'=>[
                'type'=>'TEXT',
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
            $this->forge->createTable('barang');
 
        }
        public function down(){
            $this->forge->dropTable('barang');
        }
}
?>