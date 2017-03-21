<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DataTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        /*
         *
         *  DONE
         *
         */
        
        DB::table('presentations')->insert([
        		'title_pres' => 'presentation test 01',
        		'description' => 'ceci est la description de la premiere presentation',
        		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	]);
        DB::table('presentations')->insert([
        		'title_pres' => 'presentation test 02',
        		'description' => 'ceci est la description de la deuxieme presentation',
        		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	]);
        DB::table('presentations')->insert([
        		'title_pres' => 'presentation test 03',
        		'description' => 'ceci est la description de la troisieme presentation',
        		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	]);
        DB::table('presentations')->insert([
        		'title_pres' => 'presentation test 04',
        		'description' => 'ceci est la description de la quatrieme presentation',
        		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	]);

        /*
         *
         * SLIDES
         *
         */

        
        DB::table('slides')->insert([
        		'title_slide' => 'Slide 01',
        		'description' => 'Slide 01 de la premiere presentation',
        		'presentation_id' => 1,
                'composant_id' => 0,
                'composant_type' => '',
        		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	]);
        DB::table('slides')->insert([
        		'title_slide' => 'Slide 02',
        		'description' => 'Slide 02 de la premiere presentation',
        		'presentation_id' => 1,
                'composant_id' => 0,
                'composant_type' => '',
        		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	]);
        DB::table('slides')->insert([
        		'title_slide' => 'Slide 03',
        		'description' => 'Slide 03 de la premiere presentation',
        		'presentation_id' => 1,
                'composant_id' => 0,
                'composant_type' => '',
        		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	]);
        DB::table('slides')->insert([
        		'title_slide' => 'Slide 01',
        		'description' => 'Slide 01 de la deuxieme presentation',
        		'presentation_id' => 2,
                'composant_id' => 0,
                'composant_type' => '',
        		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	]);
        DB::table('slides')->insert([
        		'title_slide' => 'Slide 02',
        		'description' => 'Slide 01 de la deuxieme presentation',
        		'presentation_id' => 2,
                'composant_id' => 0,
                'composant_type' => '',
        		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	]);

		/*
         *
         *  SLIDE_ELEMENTS
         *
         */

        DB::table('slide_elements')->insert([
                'title' => 'Premier essai de titre en element',
                'subtitle' => '',
                'text' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'slide_id' => 1,
            ]);	
        DB::table('slide_elements')->insert([
                'title' => 'Deuxieme essai de titre en element',
                'subtitle' => 'avec un sous-titre',
                'text' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'slide_id' => 2,
            ]);
        DB::table('slide_elements')->insert([
                'title' => '',
                'subtitle' => '',
                'text' => 'que du texte pour compléter ce slide',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'slide_id' => 3,
            ]);
        DB::table('slide_elements')->insert([
                'title' => '',
                'subtitle' => 'juste un sous-titre',
                'text' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'slide_id' => 4,
            ]);
        DB::table('slide_elements')->insert([
                'title' => '',
                'subtitle' => '',
                'text' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'slide_id' => 5,
            ]);

        /*
         *
         *  Files
         *
         */

        
        DB::table('files')->insert([
        		'title_file' => 'Img01',
        		'path_file' => 'files/pictures/Img01.jpg',
        		'url' => '',
        		'width' => 1920 ,
        		'height' => 1080,
        		'mimeType' => 'image/jpeg',
        		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        		'slide_id' => 1,
        	]);
        DB::table('files')->insert([
                'title_file' => 'Img02',
                'path_file' => 'files/pictures/Img02.jpg',
                'url' => '',
                'width' => 1920 ,
                'height' => 1080,
                'mimeType' => 'image/jpeg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'slide_id' => 4,
            ]);
        DB::table('files')->insert([
                'title_file' => 'video test',
                'path_file' => 'files/videos/1MD-intro.webm',
                'url' => '',
                'width' => 1280 ,
                'height' => 720,
                'mimeType' => 'video/webm',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'slide_id' => 5,
            ]);
    }
}
