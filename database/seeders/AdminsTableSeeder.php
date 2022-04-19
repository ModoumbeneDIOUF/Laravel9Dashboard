<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRecords = [

            ['id' => 4, 'name' => 'Super Admin', 'type' => 'superadmin', 'vendor_id' => 0, 'mobile' => '773283705', 'email' => 'admin@superadmin.com', 'password' => '$2y$10$grmb6ClBDuwhuCuCscECoeht3ME/Ew18XCmr1TNDhP9ZC3NKioGAi', 'image' => '', 'status' => 1],

        ];

        Admin::insert($adminRecords);
    }
}
