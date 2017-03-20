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

        /*
        DB::table('slides')->insert([
        		'title_slide' => 'Slide 01',
        		'description' => 'Slide 01 de la premiere presentation',
        		'presentation_id' => 1,
        		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	]);
        DB::table('slides')->insert([
        		'title_slide' => 'Slide 02',
        		'description' => 'Slide 02 de la premiere presentation',
        		'presentation_id' => 1,
        		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	]);
        DB::table('slides')->insert([
        		'title_slide' => 'Slide 03',
        		'description' => 'Slide 03 de la premiere presentation',
        		'presentation_id' => 1,
        		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	]);
        DB::table('slides')->insert([
        		'title_slide' => 'Slide 01',
        		'description' => 'Slide 01 de la deuxieme presentation',
        		'presentation_id' => 2,
        		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	]);
        DB::table('slides')->insert([
        		'title_slide' => 'Slide 02',
        		'description' => 'Slide 01 de la deuxieme presentation',
        		'presentation_id' => 2,
        		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	]);

		*/
	
        /*
         *
         *  Files
         *
         */

        /*
        DB::table('files')->insert([
        		'title_file' => 'Img01',
        		'path_file' => 'slides/pictures/Img01.jpg',
        		'url' => '',
        		'width' => 1920 ,
        		'height' => 1080,
        		'mimeType' = 'image/jpeg',
        		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        		'slide_id' => 1,
        	]);
        */
    }
}
