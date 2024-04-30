<?php

namespace App\Http\Controllers;

use App\Models\XPEntry;
use Illuminate\Http\Request;

class LeaderboardController extends Controller
{
    public function getLeaderboard(Request $request)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'tenant_id' => 'required|exists:tenants,id',
        ]);

        // Fetch top 10 users based on XP for the specified tenant
        $leaderboard = XPEntry::where('tenant_id', $validatedData['tenant_id'])
            ->orderByDesc('xp')
            ->take(10)
            ->get();

        return response()->json(['leaderboard' => $leaderboard]);
    }
}

