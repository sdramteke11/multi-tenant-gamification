<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\XPEntry;

class Tenant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function xpEntries()
    {
        return $this->hasMany(XPEntry::class);
    }
}
