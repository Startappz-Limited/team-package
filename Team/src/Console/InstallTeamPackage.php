<?php

namespace Startappz\Team\Console;

use Illuminate\Console\Command;

class InstallTeamPackage extends Command
{
    protected $signature = 'team-package:install';

    protected $description = 'Install the Team package';

    public function handle()
    {
        $this->call('migrate');
        $this->info('Team package installed successfully!');
    }
}