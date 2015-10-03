<?php

use App\Models\Newsletter;
use Illuminate\Database\Seeder;

class NewsletterTableSeeder extends Seeder
{
    public function run()
    {
        Newsletter::truncate();

        Newsletter::create(
            [
                'header_image' => 'https://s3-eu-west-1.amazonaws.com/eliteprogrammersclub.cf/1443833158newsletter_1_header.jpg'
            ]
        );

    }
}
