<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $table = 'locations';
    protected $primaryKey = 'id';
    protected $fillable = ['state_id','name','status'];

    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
