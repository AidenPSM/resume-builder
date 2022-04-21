<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    /**
     * @var string
     */
    
    protected $table = 'resume_connect';
    /**
     * @var string
     */
    protected $primaryKey = 'resumeId';

    /**
     * @var array
     */
    protected $fillable = [
        'cResumeId', 'itemId'
    ];
}
