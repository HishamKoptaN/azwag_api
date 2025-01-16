<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequesterData extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'second_name',
        'title',
        'mobile_number',
        'gender',
        'nationality_id',
        'weight',
        'age',
        'skin_color_id',
        'employment_status_id',
        'commitment_degree_id',
        'tribe_id',
        'tribe_name',
        'is_smoker',
        'marital_status_id',
        'educational_level_id',
        'residence_area_id',
        'origin_region',
        'mariage_type_id',
        'notes',
        'self_information',
        'email'
    ];

    public function orders()
    {
        return $this->hasMany(
            Order::class,
        );
    }

    public function nationality()
    {
        return $this->belongsTo(
            Country::class,
            'nationality_id',
        );
    }
    public function skinColor()
    {
        return $this->belongsTo(
            SkinColor::class,
            'skin_color_id',
        );
    }
    public function employmentStatus()
    {
        return $this->belongsTo(
            EmploymentStatus::class,
            'employment_status_id',
        );
    }
    public function commitmentDegree()
    {
        return $this->belongsTo(
            CommitmentDegree::class,
            'commitment_degree_id',
        );
    }
    public function tribe()
    {
        return $this->belongsTo(
            Tribe::class,
            'tribe_id',
        );
    }

    public function  maritalStatus()
    {
        return $this->belongsTo(
            MaritalStatus::class,
            'marital_status_id',
        );
    }
    public function educationalLevel()
    {
        return $this->belongsTo(
            EducationalLevel::class,
            'educational_level_id',
        );
    }
    public function residenceArea()
    {
        return $this->belongsTo(
            City::class,
            'residence_area_id',
        );
    }
    public function mariageType()
    {
        return $this->belongsTo(
            MariageType::class,
            'mariage_type_id',
        );
    }
}
