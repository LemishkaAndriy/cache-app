<?php

namespace App\Console\Commands;

use App\Models\BlackBox;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class UpdateBlackBoxCache extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-black-box-cache';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update BlackBox cache';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Cache::put('bar', BlackBox::getBar(), 600);
    }
}
