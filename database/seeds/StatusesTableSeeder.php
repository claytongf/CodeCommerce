<?php

use CodeCommerce\OrderStatus;
use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_statuses')->truncate();
        //1
        OrderStatus::create([
            'name' => 'Pagamento Pendente'
        ]);
        //2
        OrderStatus::create([
            'name' => 'Pagamento Recebido'
        ]);
        //3
        OrderStatus::create([
            'name' => 'Pagamento Recusado'
        ]);
        //4
        OrderStatus::create([
            'name' => 'Pacote Enviado'
        ]);
        //5
        OrderStatus::create([
            'name' => 'Em Trânsito'
        ]);
        //6
        OrderStatus::create([
            'name' => 'Pacote Recebido'
        ]);
        //7
        OrderStatus::create([
            'name' => 'Compra Cancelada'
        ]);
    }
}
