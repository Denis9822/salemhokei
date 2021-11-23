<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ISeedAll extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'iseed:all {--force}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'iseed all with --force option';

    protected $exclusions = [
        'migrations',
        'audits',
        'jobs',
        'failed_jobs',
        'enquiries',
        'password_resets',
    ];


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
     * @return int
     */
    public function handle()
    {
        $dbName = env('DB_DATABASE');

        $query = DB::select("SHOW TABLES WHERE Tables_in_$dbName <> 'migrations'");
        $collection = new \Illuminate\Support\Collection($query);
        $tables = $collection->implode("Tables_in_$dbName", ',');

        $tables_array = explode(',', $tables);
        $allowed_tables = array_merge(array_diff($tables_array, $this->exclusions));

        $this->info('Calling iseed for all tables except: ' . implode(', ', $this->exclusions));

        $this->call('iseed', [
            'tables' => implode(',', $allowed_tables),
            '--force' => $this->option('force'),
        ]);
    }
}
