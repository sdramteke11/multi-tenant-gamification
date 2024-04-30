<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenantDeletionLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'tenant_id',
    ];

    protected $table = 'tenant_deletion_log';
}
