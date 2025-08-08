<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesPermissionsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('roles')->insert([
            ['name' => 'admin'],
            ['name' => 'cashier'],
            ['name' => 'manager'],
        ]);

        DB::table('permissions')->insert([
            ['name' => 'sale.create'],
            ['name' => 'sale.refund'],
            ['name' => 'inventory.manage'],
        ]);
    }
}
