<?php

namespace App\Http\Controllers;

use App\Models\XPEntry;
use Illuminate\Http\Request;

class XPController extends Controller
{
    public function awardXP(Request $request)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'tenant_id' => 'required|exists:tenants,id',
            'xp' => 'required|integer|min:0',
        ]);

        // Create XP entry
        $xpEntry = XPEntry::create($validatedData);

        return response()->json(['message' => 'XP awarded successfully', 'xp_entry' => $xpEntry], 201);
    }
}
