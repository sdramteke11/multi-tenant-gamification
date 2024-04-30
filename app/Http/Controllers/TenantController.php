<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|unique:tenants',
        ]);

        $tenant = Tenant::create($validatedData);

        return response()->json(['message' => 'Tenant created successfully', 'tenant' => $tenant], 201);
    }

    public function delete(Request $request, $id)
    {
        $tenant = Tenant::findOrFail($id);
        $tenant->delete();

        return response()->json(['message' => 'Tenant deleted successfully'], 200);
    }

}
