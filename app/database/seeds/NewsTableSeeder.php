<?php

class NewsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('news')->truncate();

		$faker = Faker\Factory::create();

		for ($i=0; $i < 10; $i++) { 
			$news = array(
				'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
				'date' => $faker->date($format = 'Y-m-d', $max = 'now'),
				'category' => $faker->word,
				'source' => $faker->word,
				'pic_link' => $faker->imageUrl(460,270, 'cats'),
				'shortdesc' => $faker->text(500),
				'longdesc' => $faker->paragraph($nbSentences = 50)
			 );
			DB::table('news')->insert($news);
		}
		
		// Uncomment the below to run the seeder
		
	}

}
