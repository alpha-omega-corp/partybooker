<?php

use App\Models\Category;
use App\Models\CategoryLocale;
use Illuminate\Database\Migrations\Migration;

class UpdateCategoriesSlugs extends Migration
{
    private $eng = [
        "cat1" => ['name' => "Reception Venue", 'slug' => "reception-venue"],
        "cat1_1" => ['name' => "Authentic", 'slug' => "authentic"],
        "cat1_2" => ['name' => "Estate & WineService Cellar", 'slug' => "estate-wine-cellar"],
        "cat1_3" => ['name' => "Original Venue", 'slug' => "original-venue"],
        "cat1_4" => ['name' => "Tent Rental", 'slug' => "tent-rental"],
        "cat1_5" => ['name' => "Prestigious", 'slug' => "prestigious"],
        "cat1_6" => ['name' => "Lake View", 'slug' => "lake-view"],
        "cat1_7" => ['name' => "Trend", 'slug' => "trend"],
        "cat2" => ['name' => "Business Event", 'slug' => "business-event"],
        "cat2_1" => ['name' => "Training, Meeting, Seminar “Small”", 'slug' => "meeting"],
        "cat2_2" => ['name' => 'Seminar "Medium"', 'slug' => "seminar-medium"],
        "cat2_3" => ['name' => "Conference & Assembly", 'slug' => "conference-assembly"],
        "cat2_4" => ['name' => "Seminar with accommodation", 'slug' => "seminar-accomodation"],
        "cat2_5" => ['name' => "Team Building", 'slug' => "team-building"],
        "cat2_6" => ['name' => "Company Outing", 'slug' => "company-outing"],
        "cat2_7" => ['name' => "Incentive", 'slug' => "incentive"],
        "cat3" => ['name' => "CatererService", 'slug' => "catering"],
        "cat3_1" => ['name' => "Local Artisan", 'slug' => "local-artisan"],
        "cat3_2" => ['name' => "Vogue", 'slug' => "vogue"],
        "cat3_3" => ['name' => "World Cuisine", 'slug' => "world-cuisine"],
        "cat3_4" => ['name' => "Personal Chef", 'slug' => "personal-chef"],
        "cat3_5" => ['name' => "Catering, LunchBox", 'slug' => "lunchbox"],
        "cat3_6" => ['name' => "Delivery Service", 'slug' => "delivery"],
        "cat4" => ['name' => "WineService lovers", 'slug' => "wine-lovers"],
        "cat4_1" => ['name' => "WineService Tasting", 'slug' => "wine-tasting"],
        "cat4_2" => ['name' => "Activities", 'slug' => "activities"],
        "cat4_3" => ['name' => "Shop & Winebar", 'slug' => "shop"],
        "cat4_4" => ['name' => "Guide", 'slug' => "guide"],
        "cat5" => ['name' => "EquipmentService/Decoration", 'slug' => "equipment"],
        "cat5_1" => ['name' => "Furniture", 'slug' => "furniture"],
        "cat5_2" => ['name' => "Kitchen & Office", 'slug' => "kitchen-office"],
        "cat5_3" => ['name' => "Audiovisual", 'slug' => "audiovisual"],
        "cat5_4" => ['name' => "Preparation & Coordination", 'slug' => "coordination"],
        "cat5_5" => ['name' => "Table Decoration", 'slug' => "table-decoration"],
        "cat5_6" => ['name' => "Floral Arrangement", 'slug' => "floral"],
        "cat5_7" => ['name' => "Decoration", 'slug' => "decoration"],
        "cat6" => ['name' => "EntertainmentService", 'slug' => "entertainment"],
        "cat6_1" => ['name' => "Animation", 'slug' => "animation"],
        "cat6_2" => ['name' => "DJ, musiciens", 'slug' => "dj-musiciens"],
        "cat6_3" => ['name' => "Artists & Show", 'slug' => "artists"],
        "cat6_4" => ['name' => "Costumes", 'slug' => "costumes"],
        "cat6_5" => ['name' => "Activities", 'slug' => "activities"],
    ];

    private $fr = [
        "cat1" => ['name' => "Salle de Réception", 'slug' => "salle-reception"],
        "cat1_1" => ['name' => "Authentique", 'slug' => "authentique"],
        "cat1_2" => ['name' => "Domaine et caveau", 'slug' => "domaine-caveau"],
        "cat1_3" => ['name' => "Lieu original", 'slug' => "lieu-original"],
        "cat1_4" => ['name' => "Location de tente", 'slug' => "location-tente"],
        "cat1_5" => ['name' => "Prestigieux", 'slug' => "prestigieux"],
        "cat1_6" => ['name' => "Vue lac", 'slug' => "vue-lac"],
        "cat1_7" => ['name' => "Tendance", 'slug' => "tendance"],
        "cat2" => ['name' => "Evènement Professionnel", 'slug' => "evenement-professionnel"],
        "cat2_1" => ['name' => 'Formation, réuion, séminaire "Petit"', 'slug' => "reunion"],
        "cat2_2" => ['name' => 'Séminaire "Moyen"', 'slug' => "seminaire-moyen"],
        "cat2_3" => ['name' => "Conférence et Assemblée", 'slug' => "conference-assemblee"],
        "cat2_4" => ['name' => "Séminaire avec hébergement", 'slug' => "seminaire-hebergement"],
        "cat2_5" => ['name' => "Team Building", 'slug' => "team-building"],
        "cat2_6" => ['name' => "Sortie d'entreprise", 'slug' => "sortie-entreprise"],
        "cat2_7" => ['name' => "Motivation", 'slug' => "motivation"],
        "cat3" => ['name' => "Traiteur", 'slug' => "traiteur"],
        "cat3_1" => ['name' => "Artisan local", 'slug' => "artisan-local"],
        "cat3_2" => ['name' => "En Vogue", 'slug' => "en-vogue"],
        "cat3_3" => ['name' => "Cuisine du monde", 'slug' => "cuisine-monde"],
        "cat3_4" => ['name' => "Chef à domicile", 'slug' => "chef-domicile"],
        "cat3_5" => ['name' => "Traiteur, LunchBox", 'slug' => "lunchbox"],
        "cat3_6" => ['name' => "Service de livraison", 'slug' => "livraison"],
        "cat4" => ['name' => "Amoureux du Vin", 'slug' => "amoureux-vin"],
        "cat4_1" => ['name' => "Dégustation de vins", 'slug' => "degustation-vins"],
        "cat4_2" => ['name' => "Activités", 'slug' => "activites"],
        "cat4_3" => ['name' => "Boutique et Bar à vin", 'slug' => "boutique-bar-a-vin"],
        "cat4_4" => ['name' => "Guide", 'slug' => "guide"],
        "cat5" => ['name' => "Matériel & Déco", 'slug' => "materiel-deco"],
        "cat5_1" => ['name' => "Meubles", 'slug' => "meubles"],
        "cat5_2" => ['name' => "Cuisine et Office", 'slug' => "cuisine-office"],
        "cat5_3" => ['name' => "Audio-visuel", 'slug' => "audio-visuel"],
        "cat5_4" => ['name' => "Préparation et coordination", 'slug' => "coordination"],
        "cat5_5" => ['name' => "Décoration de table", 'slug' => "decoration-table"],
        "cat5_6" => ['name' => "Fleurs", 'slug' => "fleurs"],
        "cat5_7" => ['name' => "Décoration", 'slug' => "decoration"],
        "cat6" => ['name' => "Animation", 'slug' => "animation"],
        "cat6_1" => ['name' => "Animation", 'slug' => "animation"],
        "cat6_2" => ['name' => "DJ, musiciens", 'slug' => "dj-musiciens"],
        "cat6_3" => ['name' => "Artistes & Spectacle", 'slug' => "artistes"],
        "cat6_4" => ['name' => "Déguisement", 'slug' => "deguisement"],
        "cat6_5" => ['name' => "Activités", 'slug' => "activites"],
    ];

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $categories = Category::all();
        foreach ($categories as $category) {
            CategoryLocale::where('categories_id', $category->id)->where('lang', 'en')->update([
                'name' => $this->eng[$category->code]['name'],
                'slug' => $this->eng[$category->code]['slug'],
            ]);

            CategoryLocale::where('categories_id', $category->id)->where('lang', 'fr')->update([
                'name' => $this->fr[$category->code]['name'],
                'slug' => $this->fr[$category->code]['slug'],
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
