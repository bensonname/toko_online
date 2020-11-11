<?php namespace App\Database\Migration;

class transaksi extends \CodeIgniter\Database\Migration
{
    public function up(){
        $this->forge->addField([
            'id'=>[
                'type'=>'INT',
                'constraint'=>11,
                'unsigned'=>TRUE,
                'auto_increment'=>TRUE
            ],
            'id_barang'=>[
                'type'=>'INT',
                'constraint'=>11,
                'unsigned'=>TRUE,  
            ],
            'id_pembelian'=>[
                'type'=>'INT',
                'constraint'=>11,
                'unsigned'=>TRUE,
            
            ],
            'jumlah'=>[
            'type'=>'INT',
            'constraint'=>11,
            'unsigned'=>TRUE,
            ],
            'total_harga'=>[
                'type'=>'INT',
                'constraint'=>11,
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
            $this->forge->addForeignKey('id_pembeli','user','id');
            $this->forge->addForeignKey('id_barang','barang','id');
            $this->forge->createTable('transaksi');
 
        }
        public function down(){
            $this->forge->dropTable('transaksi');
        }
}
?>