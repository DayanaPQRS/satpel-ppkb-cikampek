<?php

namespace App\Services;

use App\Models\User;
use App\Models\KaderProfile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class KaderRegistrationService
{
    /**
     * Process the full registration data and create the Kader.
     */
    public function registerKader(array $data)
    {
        return DB::transaction(function () use ($data) {
            $user = User::create([
                'name' => $data['step1']['name'],
                'email' => $data['step1']['email'],
                'phone' => $data['step1']['phone'],
                'password' => Hash::make($data['step1']['password']),
                'role' => 'kader',
            ]);

            KaderProfile::create([
                'user_id' => $user->id,
                'nik' => $data['step2']['nik'] ?? null,
                'birth_place' => $data['step2']['birth_place'] ?? null,
                'birth_date' => $data['step2']['birth_date'] ?? null,
                'gender' => $data['step2']['gender'] ?? null,
                'address' => $data['step3']['address'] ?? null,
                'village' => $data['step3']['village'] ?? null,
                'rt' => $data['step3']['rt'] ?? null,
                'rw' => $data['step3']['rw'] ?? null,
                'education' => $data['step4']['education'] ?? null,
                'occupation' => $data['step4']['occupation'] ?? null,
                'marital_status' => $data['step4']['marital_status'] ?? null,
                'bank_name' => $data['step5']['bank_name'] ?? null,
                'account_number' => $data['step5']['account_number'] ?? null,
                'account_name' => $data['step5']['account_name'] ?? null,
                'status' => 'pending', // Requires admin approval
                'ktp_path' => $data['step6']['ktp_path'] ?? null,
                'sk_path' => $data['step6']['sk_path'] ?? null,
            ]);

            return $user;
        });
    }
}
