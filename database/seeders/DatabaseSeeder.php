<?php

namespace Database\Seeders;

use App\Models\AppConfig;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        AppConfig::create([
            'name' => 'subdriveweb',
            'email' => 'subdriveweb@gmail.com',
            'phone' => '08123456789',
            'address'=> 'Jl. Ketintang No.156, Ketintang, Kec. Gayungan, Kota SBY, Jawa Timur 60231',
            'image' => 'subdriveweb',
            'description' => 'Subdrive Web merupakan jasa layanan penyewaan kendaraan yang bekerja sama dengan rental-rental mobil dan motor di Surabaya untuk menawarkan jasa rental mobil kepada calon pelanggan khususnya bagi para turis asing maupun dalam negeri yang hendak berwisata di kota Surabaya.',
            'maps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.378856805572!2d112.72669581469194!3d-7.3112661947233315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbd1cb925a1d%3A0x1dbecb0b2e9b059f!2sInstitut%20Teknologi%20Telkom%20Surabaya!5e0!3m2!1sen!2sid!4v1656984439858!5m2!1sen!2sid',
        ]);

        User::create([
            'name' => 'subdriveweb',
            'email' => 'subdriveweb@gmail.com',
            'phone' => '08123456789',
            'gender' => 'laki laki',
            'address' => 'Jl. Ketintang No.156, Ketintang, Kec. Gayungan, Kota SBY, Jawa Timur 60231',
            'image' => 'subdriveweb',
            'password' => Hash::make('subdriveweb')
        ]);
    }

}
