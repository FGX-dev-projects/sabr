<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    // Use the secondary database connection
    protected $connection = 'sabr_secondary';
    
    // Table name
    protected $table = 'donations';

    // Mass assignable attributes
    protected $fillable = [
        // Mother's Details
        'mother_name',
        'mother_surname',
        'mother_cell',
        'mother_alternative_number',
        'mother_email',
        'mother_date_of_birth',
        'mother_id_number',
        'mother_passport_number',
        'mother_race',
        'citizen',
        'nationality',
        
        // Address
        'addres_1',
        'address_2',
        'suburb',
        'postal_code',
        'city',
        'province',
        
        // Occupational Details
        'volunteer',
        'occupation',
        'skills',
        'company_name',
        'work_address_1',
        'work_address_2',
        'work_suburb',
        'work_city',
        'work_province',
        'occupation_country',
        
        // Baby Details
        'baby_name',
        'baby_surname',
        'baby_date_of_birth',
        'family_doctor_name',
        'family_doctor_number',
        
        // Declaration and Consent
        'collect_info',
        'share_info',
        'truth_info',
        'keep_records',
        'cooler_box',
        'lactation_advice',
        
        // Consent
        'hiv_test',
        'confidentiality',
        'withdraw_consent',
        'hiv_info',
        'info_declined',
        'questions_opportunity',
        'questions_answered',
        'antenatal_results',
        'breastmilk_testing',
        
        // Questionnaire
        'blood_transfusion',
        'hard_liquor',
        'vegetarian',
        'b12vitamins',
        'tobacco',
        'drugs',
        'cannabis',
        'prescribed_medication',
        'prescribed_medicines',
        'other_medication',
        'over_counter_medication',
        'medicines',
        'other_medicine',
        'other_medicine_specify',
        'herbal_medicines',
        'herbal_supplements',
        'herbal_medication_specify',
        'herbal_medication_other',
        'galactogogues',
        'cytotoxic_medication',
        'contraceptives',
        'contraceptives_specify',
        'monogamous_relationship',
        'hepatitis_b',
        'hepatitis_c',
        'tb_diagnosis',
        'syphilis_diagnosis',
        'hiv_diagnosis',
        
        // Sexual Partner
        'partner_hiv_risk',
        'partner_drug_use',
        'partner_haemophiliac',
        'last_hiv_test',
        'persistent_cough',
        'persistent_cough_exposure',
        'job_hazard_exposure',
        'hiv_test_results',
        'hiv_rapid_test',
        
        // Additional Fields
        'breast_pump',
        'expressing_donate',
        'donor_type',
        'milk_expression_date',
        'referral_source',
        'info_sharing',
        'communication_consent',
        'communication_method',
        'popia_consent',
    ];

    // Cast certain fields as dates
    protected $casts = [
        'mother_date_of_birth' => 'date',
        'baby_date_of_birth' => 'date',
        'milk_expression_date' => 'date',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}