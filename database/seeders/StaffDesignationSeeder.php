<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaffDesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $designations = [
        'Admin',
        'Staff',
        'Project Manager',
        'Designer',
        'Frontend Developer',
        'Backend Developer'
        // Add more as needed
    ];

    foreach ($designations as $designation) {
        DB::table('designating')->insert([
            'name' => $designation,
        ]);
    }
}

}
