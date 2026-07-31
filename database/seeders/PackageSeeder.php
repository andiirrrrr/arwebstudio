<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    public function run(): void
    {
        $packages = [
            ['name' => 'Basic', 'description' => 'Paket dasar untuk kebutuhan sederhana', 'sort_order' => 1, 'is_popular' => false, 'badge' => 'Startup'],
            ['name' => 'Standard', 'description' => 'Paket standar dengan fitur lebih lengkap', 'sort_order' => 2, 'is_popular' => true, 'badge' => 'Paling Populer'],
            ['name' => 'Premium', 'description' => 'Paket premium dengan fitur maksimal', 'sort_order' => 3, 'is_popular' => false, 'badge' => 'Pro'],
            ['name' => 'Enterprise', 'description' => 'Paket enterprise untuk kebutuhan korporasi', 'sort_order' => 4, 'is_popular' => false, 'badge' => 'Korporasi'],
        ];

        foreach ($packages as $pkg) {
            Package::create($pkg);
        }
    }
}