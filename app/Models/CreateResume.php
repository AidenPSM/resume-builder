<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreateResume extends Model
{

    /**
     *
     * @var string
     */
    protected $table = 'create_resume';
    /**
     *
     * @var string
     */
    protected $primaryKey = 'cResumeId';
    /**
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email'
    ];
}
