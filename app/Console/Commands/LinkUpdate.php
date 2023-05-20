<?php

namespace App\Console\Commands;

use App\Models\Link;
use App\Models\LinkList;
use Illuminate\Console\Command;

class LinkUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:link-update {link_id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $link_id = $this->argument('link_id');
        $link = Link::find($link_id);

        if ($link == null)
        {
            $this->error("Invalid or non-ecistent link ID.")
        }
    }
}
