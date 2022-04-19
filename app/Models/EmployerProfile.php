<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployerProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'user_id',
        'status',
        'user_designation',
        'description',
        'website',
        'contact_number'
    ];
    /**
     * Get the user related to the employer profile.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
