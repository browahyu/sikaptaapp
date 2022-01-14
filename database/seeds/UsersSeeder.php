<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // role admin
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin";
        $adminRole->save();
        
        // role mahasiswa
        $mahasiswaRole = new Role();
        $mahasiswaRole->name = "mahasiswa";
        $mahasiswaRole->display_name = "Mahasiswa";
        $mahasiswaRole->save();

        // role Dosen
        $dosenRole = new Role();
        $dosenRole->name = "dosen";
        $dosenRole->display_name = "Dosen";
        $dosenRole->save();
        
        // Membuat sample admin
        $admin = new User();
        $admin->name = 'Admin Sikapta';
        $admin->email = 'wahyu4rifkurniawan@gmail.com';
        $admin->password = bcrypt('rahasia');
        $admin->save();
        $admin->attachRole($adminRole);
        
        // Membuat sample mahasiswa
        $mahasiswa = new User();
        $mahasiswa->name = "Sample Member";
        $mahasiswa->email = 'member@gmail.com';
        $mahasiswa->password = bcrypt('rahasia');
        $mahasiswa->save();
        $mahasiswa->attachRole($mahasiswaRole);

        // Membuat sample mahasiswa
        $dosen = new User();
        $dosen->name = "Sample Dosen";
        $dosen->email = 'dosen@gmail.com';
        $dosen->password = bcrypt('rahasia');
        $dosen->save();
        $dosen->attachRole($dosenRole);

    }
}
