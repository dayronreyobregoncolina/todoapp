<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'user_id',
        'status_id',
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Status()
    {
        return $this->belongsTo(Status::class);
    }
}
