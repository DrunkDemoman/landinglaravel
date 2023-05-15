<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class LinkList extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'link:list';

    /**
     * The console command description.
     *
     * @var string
     */

     public function __construct()
    {
        parent::__construct();
    }

    protected $description = 'List saved links';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $headers = [ 'id', 'url', 'description' ];
        $links = Link::all(['id', 'url', 'description'])->toArray();
        $this->table($headers, $links);

        return 0;
    }
}
