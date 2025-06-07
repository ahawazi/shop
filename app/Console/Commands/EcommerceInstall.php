<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class EcommerceInstall extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ecommerce:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install dummy data for the ecommerce App';

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
        if ($this->confirm('this will delete all old data and will install new data , Are you sure ? ')) {

            File::deleteDirectory(public_path('storage/products/dummy'));
            $this->callSilent('storage:link');
            $copySuccess = File::copyDirectory(public_path('img/products') , public_path('storage/products/dummy'));

            if ($copySuccess) {
              $this->info('imgaes successfully copied to storage ');
            }

            $this->call('migrate:fresh',[
              '--seed'=>true,
            ]);

            $this->call('db:seed',[
              '--class'=>'VoyagerDatabaseSeeder',
            ]);

            $this->call('db:seed',[
              '--class'=>'VoyagerDummyDatabaseSeeder',
            ]);

            $this->call('db:seed',[
              '--class'=>'DatabaseSeeder',
            ]);


            $this->info('dummy database is created');

            $this->info('Dummy Data Installed . Enjoy ! ');

        }


    }
}
