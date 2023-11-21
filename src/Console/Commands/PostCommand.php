<?php


namespace FxApp\Posts\Console\Commands;


use Illuminate\Console\Command;

class PostCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'posts:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Posts Install';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //> php artisan posts:install
        //AboutCommand::add('My Package', fn () => ['Version' => '1.0.0']);
        $ask = $this->ask('Install start?');
        dd($ask);
    }
}
