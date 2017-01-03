<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Console\Commands;

class PING extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ping:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'ping check';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info("Thanks for do the quiz in the console, your answers : ");

    }
}
