<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class member extends Model
{
    use HasFactory, LogsActivity;
    public $table = 'member';

    protected $fillable =[
        'Nama',
        'NIK'
    ];

    public function getActivitylogOptions(): LogOptions {
        return LogOptions::defaults()
        ->useLogName('member')
        ->logFillable();
    }
}
