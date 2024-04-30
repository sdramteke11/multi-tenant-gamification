<?php

namespace App\Console\Commands;

use App\Models\Tenant;
use Illuminate\Console\Command;

class DeleteInactiveTenants extends Command
{
    protected $signature = 'tenant:delete-inactive';

    protected $description = 'Delete tenants with no new data in the past year';

    public function handle()
    {
        $inactiveTenants = Tenant::whereDoesntHave('xpEntries', function ($query) {
            $query->where('created_at', '>=', now()->subYear());
        })->get();

        foreach ($inactiveTenants as $tenant) {
            $tenant->delete();
        }

        $this->info('Inactive tenants deleted successfully.');
    }
}

