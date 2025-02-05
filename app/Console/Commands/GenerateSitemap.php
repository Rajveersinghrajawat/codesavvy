<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate the sitemap for the website';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Create a new sitemap instance
        $sitemap = Sitemap::create()
            ->add(Url::create('/'))
            ->add(Url::create('/about-us'))
            ->add(Url::create('/services'))
            ->add(Url::create('/contact-us'));

        // Save the sitemap to the public folder
        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully!');
    }
}
