<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Tenant;

class XPEntry extends Model
{
    use HasFactory;
    protected $table = "xp_entries";
    protected $fillable = [
        'user_id',
        'tenant_id',
        'xp',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }
}
