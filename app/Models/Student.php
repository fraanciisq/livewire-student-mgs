<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'birth_date',
        'address',
        'photo',
        'class_id',
        'section_id',
    ];

    public function class()

    {
        return $this->belongsTo(Classes::class, 'class_id');
    }

    public function section()

    {
        return $this->belongsTo(Section::class, 'section_id');
    }
}
