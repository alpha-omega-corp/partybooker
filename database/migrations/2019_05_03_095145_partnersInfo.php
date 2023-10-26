<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PartnersInfo extends Migration
{
    /* COMPANY MAIN INFO */
    public function up()
    {
        Schema::create('partners_info', function (Blueprint $table) {
            $table->increments('id');

            //SERVICE PROVIDER ID:
            $table->string('id_partner', 30);

            //COMPANY NAME:
            $table->string('en_company_name', 100)->unique();

            $table->string('fr_company_name', 100)->unique();

            $table->string('slug', 100);

            $table->integer('average_rate');

            $table->string('plan', 30);

            $table->integer('plan_option')->nullable();


            $table->string('company_phone', 30)->unique();

            $table->string('budget', 100);

            //PAYED
            $table->dateTime('payed')->nullable();

            $table->boolean('payment_status');
            $table->boolean('public');

            $table->string('lat', 190)->nullable();
            $table->string('lon', 190)->nullable();


            //EXPIRATION DATE
            $table->dateTime('expiration_date')->nullable();

            //LOCATION:
            $table->string('location_code', 10);

            //ADDRESS, POSTCODE
            $table->string('address', 100);

            //PHONE
            $table->string('phone', 30)->nullable()->unique();

            //FAX
            $table->string('fax', 30)->nullable();

            //LOGO
            $table->string('logo')->nullable();

            $table->integer('price');

            $table->string('en_slogan', 300)->nullable();
            $table->longText('en_short_descr')->nullable();
            $table->longText('en_full_descr')->nullable();

            $table->longText('fr_slogan')->nullable();
            $table->longText('fr_short_descr')->nullable();
            $table->longText('fr_full_descr')->nullable();

            $table->text('images');

            //LANGUAGE
            $table->string('language');

            //OTHER LANG
            $table->string('other_lang')->nullable();

            //CATEGORY
            $table->string('category_1')->nullable();
            $table->string('category_2')->nullable();
            $table->string('category_3')->nullable();

            $table->string('subcat_1')->nullable();
            $table->string('subcat_2')->nullable();
            $table->string('subcat_3')->nullable();


            //WWW - website
            $table->string('www')->nullable()->unique();

            //WWW - facebook
            $table->string('facebook')->nullable();

            //WWW - twitter
            $table->string('twitter')->nullable();

            //WWW - instagram
            $table->string('instagram')->nullable();

            //WWW - linkedin
            $table->string('linkedin')->nullable();

            //WWW - youtube
            $table->string('youtube')->nullable();

            //WWW - vimeo
            $table->string('vimeo')->nullable();

            $table->string('main_img', 100)->nullable();

        });
    }

    public function down()
    {
        Schema::dropIfExists('partners_info');
    }
}
