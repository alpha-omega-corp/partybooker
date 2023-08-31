<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

	private $categories = [
		'cat1' => [
			'en' => [
				"name" => "Reception Venue",
				"sub" => [
					'cat1_1' => "Authentic",
					'cat1_2' => "Estate & Wine Cellar",
					'cat1_3' => "Original Venue",
					'cat1_4' => "Tent Rental",
					'cat1_5' => "Prestigious",
					'cat1_6' => "Lake View",
					'cat1_7' => "Trend",
				]
			],
			'fr' => [
				"name" => "Place Salle de Réception",
				"sub" => [
					'cat1_1' => "Authentique",
					'cat1_2' => "Domaine et caveau",
					'cat1_3' => "Lieu original",
					'cat1_4' => "Location de tente",
					'cat1_5' => "Prestigieux",
					'cat1_6' => "Vue lac",
					'cat1_7' => "Tendance",
				]
			],
		],

		'cat2' => [
			'en' => [
				"name" => "Business Event",
				"sub" => [
					'cat2_1' => "Training, Meeting, Seminar “Small”",
					'cat2_2' => "Seminar “Medium”",
					'cat2_3' => "Conference & Assembly",
					'cat2_4' => "Seminar with accommodation",
					'cat2_5' => "Team Building",
					'cat2_6' => "Company Outing",
					'cat2_7' => "Incentive"],
			],
			'fr' => [
				"name" => "Evènement Professionnel",
				"sub" => [
					'cat2_1' => "Formation, réunion, séminaire «Petit»",
					'cat2_2' => "Séminaire “Medium”",
					'cat2_3' => "Conférence et Assemblée",
					'cat2_4' => "Séminaire avec hébergement",
					'cat2_5' => "Team Building",
					'cat2_6' => "Sortie d'entreprise",
					'cat2_7' => "Motivation",
				]
			],
		],

		'cat3' => [
			'en' => [
				"name" => "Caterer",
				"sub" => [
					'cat3_1' => "Local Artisan",
					'cat3_2' => "Vogue",
					'cat3_3' => "World Cuisine",
					'cat3_4' => "Personal Chef",
					'cat3_5' => "Catering, LunchBox",
					'cat3_6' => "Delivery Service",
				],
			],
			'fr' => [
				"name" => "Traiteur",
				"sub" => [
					'cat3_1' => "Artisan local",
					'cat3_2' => "En Vogue",
					'cat3_3' => "Cuisine du monde",
					'cat3_4' => "Chef à domicile",
					'cat3_5' => "Traiteur, LunchBox",
					'cat3_6' => "Service de livraison",
				]
			],
		],

		'cat4' => [
			'en' => [
				"name" => "Wine lovers",
				"sub" => [
					'cat4_1' => "Wine Tasting",
					'cat4_2' => "Activities",
					'cat4_3' => "Shop & Winebar",
					'cat4_4' => "Guide"
				],
			],
			'fr' => [
				"name" => "Amoureux du vin",
				"sub" => [
					'cat4_1' => "Dégustation de vins",
					'cat4_2' => "Activités",
					'cat4_3' => "Boutique et Bar à vin",
					'cat4_4' => "Guide",
				]
			],
		],

		'cat5' => [
			'en' => [
				"name" => "Equipment / Decoration",
				"sub" => [
					'cat5_1' => "Furniture",
					'cat5_2' => "Kitchen & Office",
					'cat5_3' => "Audiovisual",
					'cat5_4' => "Preparation & Coodination",
					'cat5_5' => "Table Decoration",
					'cat5_6' => "Floral Arrangement",
					'cat5_7' => "Decoration"
				],
			],
			'fr' => [
				"name" => "Matériel & Déco",
				"sub" => [
					'cat5_1' => "Meubles",
					'cat5_2' => "Cuisine et Office",
					'cat5_3' => "Audio-visuel",
					'cat5_4' => "Préparation et coordination",
					'cat5_5' => "Décoration de table",
					'cat5_6' => "Fleurs",
					'cat5_7' => "Décoration",
				]
			],
		],

		'cat6' => [
			'en' => [
				"name" => "Entertainment",
				"sub" => [
					'cat6_1' => "Animation",
					'cat6_2' => "DJ, musiciens",
					'cat6_3' => "Artists & Show",
					'cat6_4' => "Costumes",
					'cat6_5' => "Activities",
				],
			],
			'fr' => [
				"name" => "Animation",
				"sub" => [
					'cat6_1' => "Animation",
					'cat6_2' => "DJ, musiciens",
					'cat6_3' => "Artistes & Spectacle",
					'cat6_4' => "Costumes",
					'cat6_5' => "Activités",
				]
			],
		],
	];


	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		foreach ($this->categories as $category => $data)
		{
			$parentId = \DB::table('categories')->insertGetId([
				'code' => $category
			]);

			\DB::table('category_locales')->insert([
				'categories_id' => $parentId,
				'lang'  => 'en',
				'name' => $data['en']['name']
			]);

			\DB::table('category_locales')->insert([
				'categories_id' => $parentId,
				'lang'  => 'fr',
				'name' => $data['fr']['name']
			]);

			foreach ($data['en']['sub'] as $code => $name){
				$subId = \DB::table('categories')->insertGetId([
					'parent_id' => $parentId,
					'code' => $code
				]);

				\DB::table('category_locales')->insert([
					'categories_id' => $subId,
					'lang'  => 'en',
					'name' => $name
				]);

				\DB::table('category_locales')->insert([
					'categories_id' => $subId,
					'lang'  => 'fr',
					'name' => $data['fr']['sub'][$code]
				]);
			}

		}
	}
}
