<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificatemodel extends Model
{
    use HasFactory;
    protected $table = 'certificate';
    protected $guarded = ['id_certificate'];
}
