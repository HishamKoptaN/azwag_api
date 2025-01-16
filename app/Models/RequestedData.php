<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestedData extends Model
{
    protected $fillable = [
        'min_age',
        'max_age',
        'marital_status_id',
        'residence_area_id',
        'educational_level_id',
        'weight',
        'skin_color_id'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    public function maritalStatus()
    {
        return $this->belongsTo(
            MaritalStatus::class,
            'marital_status_id',
        );
    }
    public function residenceArea()
    {
        return $this->belongsTo(
            City::class,
            'residence_area_id',
        );
    }

    public function educationalLevel()
    {
        return $this->belongsTo(
            EducationalLevel::class,
            'educational_level_id',
        );
    }
    public function skinColor()
    {
        return $this->belongsTo(
            SkinColor::class,
            'skin_color_id',
        );
    }
}
