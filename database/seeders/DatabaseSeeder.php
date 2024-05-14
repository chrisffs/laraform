<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\User::factory(1)->create();

        \App\Models\Intern::create([
            'firstName' => 'Juan',
            'midName' => 'Dela Cruz',
            'lastName' => 'Santos',
            'internCategory' => 'Web Developer',
            'school' => 'University of the Philippines',
            'onboardingDate' => '2024-01-29'
        ]);

        \App\Models\Intern::create([
            'firstName' => 'Jose',
            'lastName' => 'Gomez',
            'midName' => 'Cruz',
            'internCategory' => 'Digital Marketing',
            'school' => 'University of the Philippines',
            'onboardingDate' => '2024-01-29'
        ]);
        
        \App\Models\Intern::create([
            'firstName' => 'Maria',
            'lastName' => 'Santos',
            'midName' => 'Gonzales',
            'internCategory' => 'Graphic Design',
            'school' => 'Ateneo de Manila University',
            'onboardingDate' => '2024-02-05'
        ]);
        
        \App\Models\Intern::create([
            'firstName' => 'Pedro',
            'lastName' => 'Lopez',
            'midName' => 'Garcia',
            'internCategory' => 'Digital Marketing',
            'school' => 'De La Salle University',
            'onboardingDate' => '2024-02-05'
        ]);
        
        \App\Models\Intern::create([
            'firstName' => 'Anna',
            'lastName' => 'Reyes',
            'midName' => 'Aquino',
            'internCategory' => 'Web Developer',
            'school' => 'University of Santo Tomas',
            'onboardingDate' => '2024-02-05'
        ]);
        
        
        \App\Models\Intern::create([
            'firstName' => 'Mia',
            'lastName' => 'Lim',
            'midName' => 'Tan',
            'internCategory' => 'Graphic Design',
            'school' => 'Ateneo de Manila University',
            'onboardingDate' => '2024-01-29'
        ]);
        
        \App\Models\Intern::create([
            'firstName' => 'Gabriel',
            'lastName' => 'Tan',
            'midName' => 'Reyes',
            'internCategory' => 'Web Developer',
            'school' => 'De La Salle University',
            'onboardingDate' => '2024-01-29'
        ]);
        
        \App\Models\Intern::create([
            'firstName' => 'Sophia',
            'lastName' => 'Chua',
            'midName' => 'Santos',
            'internCategory' => 'Digital Marketing',
            'school' => 'University of Santo Tomas',
            'onboardingDate' => '2024-01-29'
        ]);
        
        \App\Models\Intern::create([
            'firstName' => 'Diego',
            'lastName' => 'Sy',
            'midName' => 'Gonzales',
            'internCategory' => 'Graphic Design',
            'school' => 'Ateneo de Manila University',
            'onboardingDate' => '2024-02-14'
        ]);
        
        \App\Models\Intern::create([
            'firstName' => 'Luis',
            'lastName' => 'Aquino',
            'midName' => 'Chua',
            'internCategory' => 'Web Developer',
            'school' => 'De La Salle University',
            'onboardingDate' => '2024-02-14'
        ]);
        
        \App\Models\Intern::create([
            'firstName' => 'Andrea',
            'lastName' => 'Lim',
            'midName' => 'Gomez',
            'internCategory' => 'Digital Marketing',
            'school' => 'University of Santo Tomas',
            'onboardingDate' => '2024-02-14'
        ]);
        
        
        
        \App\Models\Program::create([
            'program' => 'Web Developer',
        ]);

        \App\Models\Program::create([
            'program' => 'Graphic Designer',
        ]);

        \App\Models\Program::create([
            'program' => 'Digital Marketing',
        ]);
        
        \App\Models\School::create([
            'schoolName' => 'University of the Philippines',
        ]);

        \App\Models\School::create([
            'schoolName' => 'Ateneo de Manila University',
        ]);

        \App\Models\School::create([
            'schoolName' => 'De La Salle University',
        ]);

        \App\Models\School::create([
            'schoolName' => 'University of Santo Tomas',
        ]);
        
    }
}
