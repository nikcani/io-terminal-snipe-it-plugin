<?php

namespace Nikcani\IoTerminalSnipeItPlugin\Console\Commands;

use Illuminate\Console\Command;

class InitCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ioterminal:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Init Snipe-IT for IoTerminal';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('start init');
    }
}
