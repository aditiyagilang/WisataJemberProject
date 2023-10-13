<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Documentation extends Model
{
    protected $table = 'documentation';

    protected $fillable = ['judul', 'deskripsi', 'foto', 'jenis'];

    // Add any additional model-specific code or relationships here
}
