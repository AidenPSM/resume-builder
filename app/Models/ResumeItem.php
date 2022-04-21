<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResumeItem extends Model
{
    /**
     * @var string
     */
    protected $table = 'resume_item';
    
    /**
     * @var string
     */
    protected $primaryKey = 'itemId';

    /**
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'section'
    ];
}
