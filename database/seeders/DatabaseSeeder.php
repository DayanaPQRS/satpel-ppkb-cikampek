<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        \Illuminate\Database\Eloquent\Model::unguard();

        // 1. Seed Programs
        $programs = [
            ['code' => 'PUS', 'name' => 'Pasangan Usia Subur', 'description' => 'Pemantauan usia subur.'],
            ['code' => 'BUMIL', 'name' => 'Ibu Hamil', 'description' => 'Pendampingan gizi maternal.'],
            ['code' => 'CATIN', 'name' => 'Calon Pengantin', 'description' => 'Bimbingan pranikah terpadu.'],
            ['code' => 'BATITA', 'name' => 'Bawah Tiga Tahun', 'description' => 'Pengukuran antropometri bulanan di posyandu.'],
            ['code' => 'KB', 'name' => 'Keluarga Berencana', 'description' => 'Metode Kontrasepsi.'],
        ];
        
        foreach ($programs as $prog) {
            \App\Models\Program::firstOrCreate(['code' => $prog['code']], $prog);
        }

        // 2. Admin User
        $admin = \App\Models\User::firstOrCreate(
            ['email' => 'admin@cikampek.go.id'],
            [
                'name' => 'Admin PPKB',
                'password' => bcrypt('password123'),
                'role' => 'admin'
            ]
        );

        // 3. Kader User
        $kader = \App\Models\User::firstOrCreate(
            ['email' => 'kader@cikampek.go.id'],
            [
                'name' => 'Siti Nurhaliza',
                'password' => bcrypt('password123'),
                'role' => 'kader'
            ]
        );

        \App\Models\KaderProfile::firstOrCreate(
            ['user_id' => $kader->id],
            [
                'nik' => '3215000000000001',
                'phone' => '081234567890',
                'village' => 'Cikampek Barat',
                'dusun' => 'Dusun 1',
                'status' => 'approved'
            ]
        );

        // 4. Dummy Family and Individual
        $family = \App\Models\Family::firstOrCreate(
            ['no_kk' => '3215111111111111'],
            [
                'head_of_family_name' => 'Bpk. Supriyanto',
                'address' => 'Jl. Mawar No. 10',
                'village' => 'Cikampek Timur',
                'rt' => '01',
                'rw' => '02'
            ]
        );

        $individual = \App\Models\Individual::firstOrCreate(
            ['nik' => '3215222222222222'],
            [
                'family_id' => $family->id,
                'name' => 'Siti Aminah',
                'birth_date' => '1996-01-01',
                'gender' => 'Perempuan',
                'relation_to_head' => 'Istri'
            ]
        );

        // 5. Dummy Classification
        $pusProgram = \App\Models\Program::where('code', 'PUS')->first();
        if ($pusProgram) {
            \App\Models\Classification::firstOrCreate(
                [
                    'individual_id' => $individual->id,
                    'program_id' => $pusProgram->id,
                ],
                [
                    'kader_id' => $kader->id,
                    'status' => 'active',
                    'recorded_at' => now()->toDateString()
                ]
            );
        }
    }
}
