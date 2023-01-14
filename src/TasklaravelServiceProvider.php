<?php

namespace Musta20\Tasklaravel;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Musta20\Tasklaravel\Commands\TasklaravelCommand;
use Spatie\LaravelPackageTools\Commands\InstallCommand;

class TasklaravelServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('tasklaravel')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigrations([
                '2023_01_13_091406_create_tasks_notifies_table',
                '2023_01_13_091406_create_notify_types_table',
                '2023_01_13_091406_create_corps_table',
                '2023_01_13_091406_create_notify_sales_table'])
            //->runsMigrations()
            ->hasRoute('web')
            ->publishesServiceProvider('TasklaravelServiceProvider')
            ->hasCommand(TasklaravelCommand::class)
            ->hasInstallCommand(function(InstallCommand $command) {
                $command->startWith(function(InstallCommand $command) {
                        $command->info('Hello, and welcome to my great new package!');
                    })
                    ->publishConfigFile()
                    ->publishMigrations()
                   ->askToRunMigrations()
                    ->copyAndRegisterServiceProviderInApp()
                    //->askToStarRepoOnGitHub('your-vendor/your-repo-name')
                    ->endWith(function(InstallCommand $command) {
                        $command->info('Have a great day!');
                    });
            });

        
            
    }
}
