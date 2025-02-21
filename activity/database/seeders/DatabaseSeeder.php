<?php

namespace Database\Seeders;
use App\Models\Student;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(100)->create();

        Student::create([
            'name' => 'John Navs',
            'email' => 'navs@gmail.com']);

        Student::create([
            'name' => 'John Navas',
            'email' => 'navas@gmail.com']);
    }
}
