<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEventTypesTable extends Migration
{

	private $list = [
		['en_slug' => 'corporate', 'en_name' => 'Corporate', 'fr_slug' => 'corporate', 'fr_name' => 'Corporate'],
		['en_slug' => 'conference', 'en_name' => 'Conference', 'fr_slug' => 'conference', 'fr_name' => 'Conférence'],
		['en_slug' => 'seminar', 'en_name' => 'Seminar', 'fr_slug' => 'seminare', 'fr_name' => 'Séminaire'],
		['en_slug' => 'board-meeting', 'en_name' => 'Board Meeting', 'fr_slug' => 'conseil-d-administration', 'fr_name' => 'Conseil d’administration'],
		['en_slug' => 'product-launch', 'en_name' => 'Product Launch', 'fr_slug' => 'lancement-de-produit', 'fr_name' => 'Lancement de produit'],
		['en_slug' => 'team-building', 'en_name' => 'Team Building', 'fr_slug' => 'team-building', 'fr_name' => 'Team Building'],
		['en_slug' => 'trade-show', 'en_name' => 'Trade Show', 'fr_slug' => 'exposition', 'fr_name' => 'Exposition'],
		['en_slug' => 'incentive', 'en_name' => 'Incentive', 'fr_slug' => 'incentive', 'fr_name' => 'Incentive'],
		['en_slug' => 'charity', 'en_name' => 'Charity', 'fr_slug' => 'charite', 'fr_name' => 'Charité'],
		['en_slug' => 'cocktail-party', 'en_name' => 'Cocktail Party', 'fr_slug' => 'cocktail', 'fr_name' => 'Cocktail'],
		['en_slug' => 'garden-party', 'en_name' => 'Garden Party', 'fr_slug' => 'garden-party', 'fr_name' => 'Garden party'],
		['en_slug' => 'pool-party', 'en_name' => 'Pool Party', 'fr_slug' => 'pool-party', 'fr_name' => 'Pool party'],
		['en_slug' => 'banquet', 'en_name' => 'Banquet', 'fr_slug' => 'banquet', 'fr_name' => 'Banquet'],
		['en_slug' => 'wedding', 'en_name' => 'Wedding', 'fr_slug' => 'mariage', 'fr_name' => 'Mariage'],
		['en_slug' => 'wedding-anniversary', 'en_name' => 'Wedding Anniversary', 'fr_slug' => 'anniversaire-de-mariage', 'fr_name' => 'Anniversaire de mariage'],
		['en_slug' => 'birthday', 'en_name' => 'Birthday', 'fr_slug' => 'anniversaire', 'fr_name' => 'Anniversaire'],
		['en_slug' => 'themed-party', 'en_name' => 'Themed Party', 'fr_slug' => 'fete-a-theme', 'fr_name' => 'Fête à thème'],
		['en_slug' => 'family-celebration', 'en_name' => 'Family celebration', 'fr_slug' => 'famille', 'fr_name' => 'Famille'],
		['en_slug' => 'kids-party', 'en_name' => 'Kids Party', 'fr_slug' => 'fete-enfants', 'fr_name' => 'Fête Enfants'],
		['en_slug' => 'vip-event', 'en_name' => 'VIP Event', 'fr_slug' => 'evenement-vip', 'fr_name' => 'Événement VIP'],
		['en_slug' => 'religious-celebration', 'en_name' => 'Religious celebration', 'fr_slug' => 'ceremonie-religieuse', 'fr_name' => 'Cérémonie religieuse'],
		['en_slug' => 'bachelor-party', 'en_name' => 'Bachelor Party', 'fr_slug' => 'enterrement-de-vie-de-jeune-fille-garcon', 'fr_name' => 'Enterrement de vie de Jeune fille/garçon']
	];

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('event_types', function (Blueprint $table) {
			$table->increments('id');
			$table->string('en_slug');
			$table->string('en_name');
			$table->string('fr_slug');
			$table->string('fr_name');
		});

		foreach ($this->list as $item){
			\App\Models\EventType::insert($item);
		}
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('event_types');
	}
}
