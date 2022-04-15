<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployerProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id'
    ];
    /**
     * Get the user related to the employer profile.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
