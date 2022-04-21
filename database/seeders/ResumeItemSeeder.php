<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\ResumeItem;

class ResumeItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        // Skill => section 1
        // Education => section 2
        // Work Experience => section 3
        // etc => section 4

        // Skill
        ResumeItem::create([
            'name' => 'Front End Development',
            'description' => 'Front End devs use programming languages and frameworks to create what a user experiences in a browser.',
            'section' => '1'
        ]);
        ResumeItem::create([
            'name' => 'Back End Development',
            'description' => 'The server side of an application and everything that communicates between the database and the browser.',
            'section' => '1'
        ]);          
        ResumeItem::create([
            'name' => 'Web App Security',
            'description' => 'Web security is important to keeping hackers and cyber-thieves from accessing sensitive information.',
            'section' => '1'
        ]);  
        ResumeItem::create([
            'name' => 'Content Management Systems',
            'description' => 'A software application or a set of tools and capabilities, that allows you to create, manage and deliver content via digital channels.',
            'section' => '1'
        ]);
        ResumeItem::create([
            'name' => 'Database Administration',
            'description' => 'Database administrators use specialized software to store and organize data.',
            'section' => '1'
        ]);    
        ResumeItem::create([
            'name' => 'Project Management',
            'description' => 'Project management is the process of leading the work of a team to achieve all project goals within the given constraints.',
            'section' => '1'
        ]);
        ResumeItem::create([
            'name' => 'Outdoor Adventure',
            'description' => 'Adventure!!!!!!!!!',
            'section' => '1'
        ]);
        
        // Education
        ResumeItem::create([
            'name' => 'IT Web Programming Diploma',
            'description' => 'Post-graduation acquisition of NSCC',
            'section' => '2'
        ]);
        ResumeItem::create([
            'name' => 'Project Management Certificate',
            'description' => 'Certificate for project management',
            'section' => '2'
        ]);    
        ResumeItem::create([
            'name' => 'High School Diploma',
            'description' => 'Your high school Graduation',
            'section' => '2'
        ]);  
        ResumeItem::create([
            'name' => 'Laracasts - Laravel From Scratch',
            'description' => 'Finished develop Laravel Web app',
            'section' => '2'
        ]);  
        ResumeItem::create([
            'name' => 'AWS Ceritified Cloud Practitioner',
            'description' => 'Can use AWS Web Server tool such as EC2, S3',
            'section' => '2'
        ]);  
        ResumeItem::create([
            'name' => 'Free Code Camp - Vue.js',
            'description' => 'Certification for finished free Vue.js course',
            'section' => '2'
        ]);
        ResumeItem::create([
            'name' => 'Certified Scrum Master',
            'description' => 'Finished Scrum Master course',
            'section' => '2'
        ]);
        
        // Work Experience
        ResumeItem::create([
            'name' => 'NSCC Faculty',
            'description' => 'Faculty of IT Web Programming',
            'section' => '3'
        ]);  
        ResumeItem::create([
            'name' => 'IT Manager',
            'description' => 'IT Manager in the company',
            'section' => '3'
        ]);
        ResumeItem::create([
            'name' => 'Jr Developer',
            'description' => '1-3 years experienced of web developing',
            'section' => '3'
        ]);    
        ResumeItem::create([
            'name' => 'Youtube Content Creator',
            'description' => '10k subscriber you had',
            'section' => '3'
        ]);
        ResumeItem::create([
            'name' => 'Property Manager',
            'description' => 'Setting and collecting rent, handling maintenance requests, filling vacant units and potentially setting the budget for the property.',
            'section' => '3'
        ]);
        ResumeItem::create([
            'name' => 'Lab Monitor',
            'description' => 'Repair Lab',
            'section' => '3'
        ]);      
        ResumeItem::create([
            'name' => 'Dog Walker',
            'description' => 'I love dogs',
            'section' => '3'
        ]);
        
        // Awards, Other etc
        ResumeItem::create([
            'name' => 'Laravel Snowday Project',
            'description' => 'WEBD3000 Laravel Course',
            'section' => '4'
        ]);
        ResumeItem::create([
            'name' => 'Weather API',
            'description' => 'Simple weater API Web App developed at JS course',
            'section' => '4'
        ]);
        ResumeItem::create([
            'name' => 'Resume-builder',
            'description' => 'THIS PROJECT WAS SO HARD',
            'section' => '4'
        ]);
        ResumeItem::create([
            'name' => 'Photo Album React',
            'description' => 'Simple Photo album Web App developed at JS course',
            'section' => '4'
        ]); 
        ResumeItem::create([
            'name' => 'Game Jam Award',
            'description' => 'Game Master',
            'section' => '4'
        ]);
        ResumeItem::create([
            'name' => 'Capstone Project',
            'description' => 'Happiness Journal!',
            'section' => '4'
        ]);
        ResumeItem::create([
            'name' => 'Portfolio build',
            'description' => 'Self-directed Course',
            'section' => '4'
        ]);         
    }
}
