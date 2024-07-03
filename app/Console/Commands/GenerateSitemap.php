<?php

namespace App\Console\Commands;

use App\Models\News;
use Spatie\Sitemap\Sitemap;
use App\Models\Announcement;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Console\Command;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Automatically Generate an XML Sitemap';
    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $sitemap = Sitemap::create();
        $sitemap->add('/perangkat-kelurahan');
        $sitemap->add('/lembaga-kelurahan');
        $sitemap->add('/struktur-organisasi');
        $sitemap->add('/tentang');
        $sitemap->add('/visimisi');
        $sitemap->add('/sejarah');
        $sitemap->add('/geografis');
        $sitemap->add('/demografis');
        $sitemap->add('/galeri');
        $sitemap->add('/layanan');


        News::all()->each(function (News $news) use ($sitemap) {
            $sitemap->add(
                Url::create("berita")
                    ->setPriority(0.9)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                    ->setLastModificationDate($news->updated_at)
                    ->setUrl("/berita/{$news->slug}")
            );
        });
        // Menambahkan Announcements ke sitemap
        Announcement::all()->each(function (Announcement $announcement) use ($sitemap) {
            $sitemap->add(
                Url::create("pengumuman")
                    ->setPriority(0.8)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                    ->setLastModificationDate($announcement->updated_at)
                    ->setUrl("/pengumuman/{$announcement->slug}")
            );
        });

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully.');
    }
}
