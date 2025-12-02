<?php

namespace App\Console\Commands;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;

class CheckSubscriptionExpiration extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'subscription:check-expiration';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check for expired subscriptions and deactivate users';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $expiredUsers = User::where('is_active', true)
            ->where('subscription_expires_at', '<', Carbon::now())
            ->get();

        foreach ($expiredUsers as $user) {
            $user->update(['is_active' => false]);
            $this->info("User {$user->email} deactivated due to expired subscription.");
        }

        $this->info("Checked " . $expiredUsers->count() . " expired subscriptions.");
    }
}
