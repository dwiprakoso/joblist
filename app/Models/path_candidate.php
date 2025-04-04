<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class path_candidate extends Model
{
    use HasFactory;

    protected $fillable = ['path_id', 'candidate_id', 'status'];

    public function path()
    {
        return $this->belongsTo(paths::class);
    }

    public function candidate()
    {
        return $this->belongsTo(candidates::class);
    }
}
