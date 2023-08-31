<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateDatePriceForKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \App\Models\EventPlace::where('price_for', 'space rental price per hour')
	        ->orWhere('price_for',"prix de location de l'espace par heure")
	        ->update(['price_for' => 'space_rental_price_per_hour' ]);

	    \App\Models\EventPlace::where('price_for', 'fixed price per person')
		    ->orWhere('price_for',"Prix fixe par personne")
		    ->update(['price_for' => 'fixed_price_per_person' ]);

	    \App\Models\EventPlace::where('price_for', 'flat rate for service')
		    ->orWhere('price_for',"Forfait de service")
		    ->update(['price_for' => 'flat_rate_for_service' ]);

	    \App\Models\EventPlace::where('price_for', 'price per hour')
		    ->orWhere('price_for',"Prix par heure")
		    ->update(['price_for' => 'price_per_hour' ]);

	    \App\Models\EventPlace::where('price_for', 'space rental price per day')
		    ->orWhere('price_for',"prix de location de l'espace par jour")
		    ->update(['price_for' => 'space_rental_price_per_day' ]);

	    \App\Models\EventPlace::where('price_for', 'Autre')
		    ->orWhere('price_for', 'Like', "%other%")
		    ->update(['price_for' => 'other' ]);


	    \App\Models\Wine::where('price_for', 'space rental price per hour')
		    ->orWhere('price_for',"prix de location de l'espace par heure")
		    ->update(['price_for' => 'space_rental_price_per_hour' ]);

	    \App\Models\Wine::where('price_for', 'fixed price per person')
		    ->orWhere('price_for',"Prix fixe par personne")
		    ->update(['price_for' => 'fixed_price_per_person' ]);

	    \App\Models\Wine::where('price_for', 'flat rate for service')
		    ->orWhere('price_for',"Forfait de service")
		    ->update(['price_for' => 'flat_rate_for_service' ]);

	    \App\Models\Wine::where('price_for', 'price per hour')
		    ->orWhere('price_for',"Prix par heure")
		    ->update(['price_for' => 'price_per_hour' ]);

	    \App\Models\Wine::where('price_for', 'space rental price per day')
		    ->orWhere('price_for',"prix de location de l'espace par jour")
		    ->update(['price_for' => 'space_rental_price_per_day' ]);

	    \App\Models\Wine::where('price_for', 'Autre')
		    ->orWhere('price_for', 'Like', "%other%")
		    ->update(['price_for' => 'other' ]);





	    \App\Models\Entertainment::where('price_for', 'space rental price per hour')
		    ->orWhere('price_for',"prix de location de l'espace par heure")
		    ->update(['price_for' => 'space_rental_price_per_hour' ]);

	    \App\Models\Entertainment::where('price_for', 'fixed price per person')
		    ->orWhere('price_for',"Prix fixe par personne")
		    ->update(['price_for' => 'fixed_price_per_person' ]);

	    \App\Models\Entertainment::where('price_for', 'flat rate for service')
		    ->orWhere('price_for',"Forfait de service")
		    ->update(['price_for' => 'flat_rate_for_service' ]);

	    \App\Models\Entertainment::where('price_for', 'price per hour')
		    ->orWhere('price_for',"Prix par heure")
		    ->update(['price_for' => 'price_per_hour' ]);

	    \App\Models\Entertainment::where('price_for', 'space rental price per day')
		    ->orWhere('price_for',"prix de location de l'espace par jour")
		    ->update(['price_for' => 'space_rental_price_per_day' ]);

	    \App\Models\Entertainment::where('price_for', 'Autre')
		    ->orWhere('price_for', 'Like', "%other%")
		    ->update(['price_for' => 'other' ]);




	    \App\Models\Equipment::where('price_for', 'space rental price per hour')
		    ->orWhere('price_for',"prix de location de l'espace par heure")
		    ->update(['price_for' => 'space_rental_price_per_hour' ]);

	    \App\Models\Equipment::where('price_for', 'fixed price per person')
		    ->orWhere('price_for',"Prix fixe par personne")
		    ->update(['price_for' => 'fixed_price_per_person' ]);

	    \App\Models\Equipment::where('price_for', 'flat rate for service')
		    ->orWhere('price_for',"Forfait de service")
		    ->update(['price_for' => 'flat_rate_for_service' ]);

	    \App\Models\Equipment::where('price_for', 'price per hour')
		    ->orWhere('price_for',"Prix par heure")
		    ->update(['price_for' => 'price_per_hour' ]);

	    \App\Models\Equipment::where('price_for', 'space rental price per day')
		    ->orWhere('price_for',"prix de location de l'espace par jour")
		    ->update(['price_for' => 'space_rental_price_per_day' ]);

	    \App\Models\Equipment::where('price_for', 'Autre')
		    ->orWhere('price_for', 'Like', "%other%")
		    ->update(['price_for' => 'other' ]);




	    \App\Models\Caterer::where('price_for', 'space rental price per hour')
		    ->orWhere('price_for',"prix de location de l'espace par heure")
		    ->update(['price_for' => 'space_rental_price_per_hour' ]);

	    \App\Models\Caterer::where('price_for', 'fixed price per person')
		    ->orWhere('price_for',"Prix fixe par personne")
		    ->update(['price_for' => 'fixed_price_per_person' ]);

	    \App\Models\Caterer::where('price_for', 'flat rate for service')
		    ->orWhere('price_for',"Forfait de service")
		    ->update(['price_for' => 'flat_rate_for_service' ]);

	    \App\Models\Caterer::where('price_for', 'price per hour')
		    ->orWhere('price_for',"Prix par heure")
		    ->update(['price_for' => 'price_per_hour' ]);

	    \App\Models\Caterer::where('price_for', 'space rental price per day')
		    ->orWhere('price_for',"prix de location de l'espace par jour")
		    ->update(['price_for' => 'space_rental_price_per_day' ]);

	    \App\Models\Caterer::where('price_for', 'Autre')
		    ->orWhere('price_for', 'Like', "%other%")
		    ->update(['price_for' => 'other' ]);




	    \App\Models\EventPlace::whereNotNull('other_price')
		    ->update(['price_for' => 'other' ]);
	    \App\Models\Wine::whereNotNull('other_price')
		    ->update(['price_for' => 'other' ]);
	    \App\Models\Equipment::whereNotNull('other_price')
		    ->update(['price_for' => 'other' ]);
	    \App\Models\Entertainment::whereNotNull('other_price')
		    ->update(['price_for' => 'other' ]);

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
