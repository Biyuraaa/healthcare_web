<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecialitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $specialities = [
            [1, 'Accident and emergency medicine'],
            [2, 'Allergology'],
            [3, 'Anaesthetics'],
            [4, 'Biological hematology'],
            [5, 'Cardiology'],
            [6, 'Child psychiatry'],
            [7, 'Clinical biology'],
            [8, 'Clinical chemistry'],
            [9, 'Clinical neurophysiology'],
            [10, 'Clinical radiology'],
            [11, 'Dental, oral and maxillo-facial surgery'],
            [12, 'Dermato-venerology'],
            [13, 'Dermatology'],
            [14, 'Endocrinology'],
            [15, 'Gastro-enterologic surgery'],
            [16, 'Gastroenterology'],
            [17, 'General hematology'],
            [18, 'General Practice'],
            [19, 'General surgery'],
            [20, 'Geriatrics'],
            [21, 'Immunology'],
            [22, 'Infectious diseases'],
            [23, 'Internal medicine'],
            [24, 'Laboratory medicine'],
            [25, 'Maxillo-facial surgery'],
            [26, 'Microbiology'],
            [27, 'Nephrology'],
            [28, 'Neuro-psychiatry'],
            [29, 'Neurology'],
            [30, 'Neurosurgery'],
            [31, 'Nuclear medicine'],
            [32, 'Obstetrics and gynecology'],
            [33, 'Occupational medicine'],
            [34, 'Ophthalmology'],
            [35, 'Orthopaedics'],
            [36, 'Otorhinolaryngology'],
            [37, 'Paediatric surgery'],
            [38, 'Paediatrics'],
            [39, 'Pathology'],
            [40, 'Pharmacology'],
            [41, 'Physical medicine and rehabilitation'],
            [42, 'Plastic surgery'],
            [43, 'Podiatric Medicine'],
            [44, 'Podiatric Surgery'],
            [45, 'Psychiatry'],
            [46, 'Public health and Preventive Medicine'],
            [47, 'Radiology'],
            [48, 'Radiotherapy'],
            [49, 'Respiratory medicine'],
            [50, 'Rheumatology'],
            [51, 'Stomatology'],
            [52, 'Thoracic surgery'],
            [53, 'Tropical medicine'],
            [54, 'Urology'],
            [55, 'Vascular surgery'],
            [56, 'Venereology']
        ];

        foreach ($specialities as $speciality) {
            DB::table('specialities')->insert([
                'id' => $speciality[0],
                'name' => $speciality[1],
            ]);
        }
    }
}
