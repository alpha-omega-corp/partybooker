<?php

namespace Database\Seeders;

use App\Enums\PlanEnum;
use App\Models\Article;
use App\Models\Caterer;
use App\Models\Entertainment;
use App\Models\Equipment;
use App\Models\EventPlace;
use App\Models\PartnerPlanOption;
use App\Models\Wine;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            CategoriesTableSeeder::class,
        ]);

        Article::factory()->count(10)->create();

        $standardId = $this->newPlan(
            PlanEnum::STANDARD,
            '1',
            '0',
            '5',
            '1',
            '1',
            '300',
            '365',
            config('stripe.standard')
        );

        $premiumId = $this->newPlan(
            PlanEnum::PREMIUM,
            '1',
            '0',
            '10',
            '0',
            '1',
            '500',
            '365',
            config('stripe.premium')

        );

        $exclusiveId = $this->newPlan(
            PlanEnum::EXCLUSIVE,
            '3',
            '0',
            '15',
            '0',
            '1',
            '950',
            '365',
            config('stripe.exclusive')
        );

        // Basic
        DB::table('plan_options')->insert([
            'plans_id' => 1,
            'categories_count' => 1,
            'sub_categories_count' => 1,
            'group' => 1
        ]);

        // Commission
        DB::table('plan_options')->insert([
            'plans_id' => 2,
            'categories_count' => 1,
            'sub_categories_count' => 1,
            'group' => 1
        ]);

        // Standard
        DB::table('plan_options')->insert([
            'plans_id' => $standardId,
            'categories_count' => 1,
            'sub_categories_count' => 1,
            'group' => 1
        ]);

        // Premium
        DB::table('plan_options')->insert([
            'plans_id' => $premiumId,
            'categories_count' => 2,
            'sub_categories_count' => 1,
            'group' => 1
        ]);

        DB::table('plan_options')->insert([
            'plans_id' => $premiumId,
            'categories_count' => 1,
            'sub_categories_count' => 2,
            'group' => 2
        ]);

        // Exclusive
        DB::table('plan_options')->insert([
            'plans_id' => $exclusiveId,
            'categories_count' => 1,
            'sub_categories_count' => 3,
            'group' => 1
        ]);

        DB::table('plan_options')->insert([
            'plans_id' => $exclusiveId,
            'categories_count' => 1,
            'sub_categories_count' => 2,
            'group' => 2
        ]);

        DB::table('plan_options')->insert([
            'plans_id' => $exclusiveId,
            'categories_count' => 1,
            'sub_categories_count' => 1,
            'group' => 2
        ]);

        DB::table('plan_options')->insert([
            'plans_id' => $exclusiveId,
            'categories_count' => 3,
            'sub_categories_count' => 1,
            'group' => 3
        ]);

        DB::table('faq')->insert([
            'faq_created' => now(),
            'relation' => 1,
            'question_en' => 'Question en',
            'answer_en' => 'Answer en',
            'question_fr' => 'Comment fonctionne www.partybooker.ch',
            'answer_fr' => 'Partybooker is a free internet pe connection between customers and service providers via one site.',
        ]);

        DB::table('faq')->insert([
            'faq_created' => now(),
            'relation' => 1,
            'question_en' => 'Question en',
            'answer_en' => 'Answer en',
            'question_fr' => 'Comment fonctionne www.partybooker.ch',
            'answer_fr' => 'Partybooker is a free internet pe connection between customers and service providers via one site.',
        ]);

        DB::table('faq')->insert([
            'faq_created' => now(),
            'relation' => 1,
            'question_en' => 'Question en',
            'answer_en' => 'Answer en',
            'question_fr' => 'Comment fonctionne www.partybooker.ch',
            'answer_fr' => 'Partybooker is a free internet pe connection between customers and service providers via one site.',
        ]);


        $this->newPartner('alphomega', 0, 'bleyo');
        $this->newPartner('dynam-event', 1);
        $this->newPartner('chillfood', 2);
        $this->newPartner('la-cave-geneve-vieille-ville', 3);
        $this->newPartner('moulin-du-creux-vich', 4);
        $this->newPartner('chateau-de-coppet', 5);
        $this->newPartner('twist-events-carouge-geneve', 6);
        $this->newPartner('domaine-la-capitaine', 7);
        $this->newPartner('domaine-des-esserts', 8);
        $this->newPartner('la-caravane-passe-geneve', 9);
        $this->newPartner('headphone-music--silent-disco', 10);


        for ($i = 11; $i < 22; $i++) {
            $this->newPartner(strtolower(fake()->company), $i);
        }


        DB::table('settings')->insert([
            'address' => '1296 Coppet, Suisse',
            'email' => 'contact@partybooker.ch',
            'phone' => '+41 (079 8588872',
            'facebook' => 'https://www.facebook.com/partybooker.ch/',
            'linkedin' => 'https://www.linkedin.com/company/partybooker',
            'instagram' => 'https://www.instagram.com/partybooker/',
            'user_terms_en' => '<ol style="margin-bottom: 0px;"><li><div><span style="font-size: 24px;"><b>Généralités</b></span></div><div><br></div><div><span style="font-size: 14px;">Les informations et conseils publiés sur www.partybooker.ch sont destinés à des privés ou professionnels désireux d’organiser un événement. Le contenu du site est exclusivement informatif. Visiter, consulter et s’inspirer sur le site est gratuit.</span></div><div><br></div><div><br></div><div><span style="font-size: 24px;"><b>Limitation de la responsabilité de Partybooker</b></span></div><div><br></div><div><span style="font-size: 14px;">Partybooker n’est en aucun cas responsable de la qualité et/ou de l’exécution des services des prestataires présentés et/ou réservés sur le site www.partybooker.ch.</span></div><div><br></div><div><span style="font-size: 14px;">Partybooker ne saurait en aucun cas être tenu responsable des contenus, des activités commerciales, des produits et des services proposés à travers les sites vers lesquels des liens hypertextes, directs ou indirects, sont réalisés.</span></div><div><span style="font-size: 14px;"><br></span></div><div><span style="font-size: 14px;">Partybooker met tout en oeuvre pour que le contenu du site soit à jour et reflète la réalité mais ne peut être tenu responsable de données erronées ou obsolètes. S’il s’avérait qu’une information, offre ou promotion était échue ou inexacte, les internautes renoncent à tout dédommagement ou poursuites de Partybooker.</span></div><div><span style="font-size: 14px;"><br></span></div><div><span style="font-size: 14px;">Partybooker se réserve le droit de bloquer temporairement l’accès au site pour effectuer des maintenances nécessaires au bon fonctionnement. Partybooker n’est pas responsable d’éventuels problèmes techniques liés à l’hébergement de son site.</span></div><div><span style="font-size: 14px;"><br></span></div><div><span style="font-size: 14px;">La responsabilité de Partybooker est limitée aux cas de faute intentionnelle ou de négligence grave.</span></div><div><span style="font-size: 14px;">Toute responsabilité de Partybooker pour d’éventuels préjudices supplémentaires ou indirects est expressément exclue.</span></div><div><br></div><div><br></div><div><span style="font-size: 24px;"><b>Utilisation des données personnelles</b></span></div><div><span style="font-size: 14px;"><br></span></div><div><span style="font-size: 14px;">Partybooker se réserve le droit d’utiliser les données personnelles collectées lors de demandes d’offre ou d’une inscription sur le site pour communiquer des informations susceptibles d’intéresser ladite personne.</span></div><div><br></div><div><span style="font-size: 14px;">L’internaute accepte que les données personnelles qu’il a fournies lors d’une demande d’offre à l’un de nos prestataires soient transmises à ce dernier afin de prendre contact ou de réserver une prestation, un équipement ou un service.</span></div><div><br></div><div><br></div><div><span style="font-size: 24px;"><b>Pas de transmission de données personnelles à des tiers</b></span></div><div><span style="font-size: 24px;"><b><br></b></span></div><div><span style="font-size: 14px;">Partybooker ne communique pas de données personnelles à des tiers, sauf dans le cas mentionné sous “Utilisation des données personnelles”.</span></div><div><br></div><div><br></div><div><span style="font-size: 24px;"><b>Cookies</b></span></div><div><span style="font-size: 14px;"><br></span></div><div><span style="font-size: 14px;">Le site www.partybooker.ch emploie des cookies pour déterminer les intérêts de ses internautes, dans le but d’améliorer le site. L’utilisateur a la possibilité d’empêcher la formation de cookies en sélectionnant l’option correspondante sur son programme de navigation.</span></div><div><br></div><div><br></div><div><span style="font-size: 24px;"><b>Propriété des données</b></span></div><div><span style="font-size: 14px;"><br></span></div><div><span style="font-size: 14px;">Les données communiquées sur le site sont recueillies, traitées et publiées par Partybooker. Partybooker est propriétaire de la base de données publiée sur son site. Il est interdit de reproduire, d’utiliser, de copier, modifier ou de vendre ces informations.</span></div><div><br></div><div><br></div><div><span style="font-size: 24px;"><b>Entrée en vigueur</b></span></div><div><span style="font-size: 14px;"><br></span></div><div><span style="font-size: 14px;">Les présentes conditions générales entrent en vigueur le 1er janvier 2014.</span></div></li></ol>',
            'user_terms_fr' => '<ol style="margin-bottom: 0px;"><li><div><span style="font-size: 24px;"><b>Généralités</b></span></div><div><br></div><div><span style="font-size: 14px;">Les informations et conseils publiés sur www.partybooker.ch sont destinés à des privés ou professionnels désireux d’organiser un événement. Le contenu du site est exclusivement informatif. Visiter, consulter et s’inspirer sur le site est gratuit.</span></div><div><br></div><div><br></div><div><span style="font-size: 24px;"><b>Limitation de la responsabilité de Partybooker</b></span></div><div><br></div><div><span style="font-size: 14px;">Partybooker n’est en aucun cas responsable de la qualité et/ou de l’exécution des services des prestataires présentés et/ou réservés sur le site www.partybooker.ch.</span></div><div><br></div><div><span style="font-size: 14px;">Partybooker ne saurait en aucun cas être tenu responsable des contenus, des activités commerciales, des produits et des services proposés à travers les sites vers lesquels des liens hypertextes, directs ou indirects, sont réalisés.</span></div><div><span style="font-size: 14px;"><br></span></div><div><span style="font-size: 14px;">Partybooker met tout en oeuvre pour que le contenu du site soit à jour et reflète la réalité mais ne peut être tenu responsable de données erronées ou obsolètes. S’il s’avérait qu’une information, offre ou promotion était échue ou inexacte, les internautes renoncent à tout dédommagement ou poursuites de Partybooker.</span></div><div><span style="font-size: 14px;"><br></span></div><div><span style="font-size: 14px;">Partybooker se réserve le droit de bloquer temporairement l’accès au site pour effectuer des maintenances nécessaires au bon fonctionnement. Partybooker n’est pas responsable d’éventuels problèmes techniques liés à l’hébergement de son site.</span></div><div><span style="font-size: 14px;"><br></span></div><div><span style="font-size: 14px;">La responsabilité de Partybooker est limitée aux cas de faute intentionnelle ou de négligence grave.</span></div><div><span style="font-size: 14px;">Toute responsabilité de Partybooker pour d’éventuels préjudices supplémentaires ou indirects est expressément exclue.</span></div><div><br></div><div><br></div><div><span style="font-size: 24px;"><b>Utilisation des données personnelles</b></span></div><div><span style="font-size: 14px;"><br></span></div><div><span style="font-size: 14px;">Partybooker se réserve le droit d’utiliser les données personnelles collectées lors de demandes d’offre ou d’une inscription sur le site pour communiquer des informations susceptibles d’intéresser ladite personne.</span></div><div><br></div><div><span style="font-size: 14px;">L’internaute accepte que les données personnelles qu’il a fournies lors d’une demande d’offre à l’un de nos prestataires soient transmises à ce dernier afin de prendre contact ou de réserver une prestation, un équipement ou un service.</span></div><div><br></div><div><br></div><div><span style="font-size: 24px;"><b>Pas de transmission de données personnelles à des tiers</b></span></div><div><span style="font-size: 24px;"><b><br></b></span></div><div><span style="font-size: 14px;">Partybooker ne communique pas de données personnelles à des tiers, sauf dans le cas mentionné sous “Utilisation des données personnelles”.</span></div><div><br></div><div><br></div><div><span style="font-size: 24px;"><b>Cookies</b></span></div><div><span style="font-size: 14px;"><br></span></div><div><span style="font-size: 14px;">Le site www.partybooker.ch emploie des cookies pour déterminer les intérêts de ses internautes, dans le but d’améliorer le site. L’utilisateur a la possibilité d’empêcher la formation de cookies en sélectionnant l’option correspondante sur son programme de navigation.</span></div><div><br></div><div><br></div><div><span style="font-size: 24px;"><b>Propriété des données</b></span></div><div><span style="font-size: 14px;"><br></span></div><div><span style="font-size: 14px;">Les données communiquées sur le site sont recueillies, traitées et publiées par Partybooker. Partybooker est propriétaire de la base de données publiée sur son site. Il est interdit de reproduire, d’utiliser, de copier, modifier ou de vendre ces informations.</span></div><div><br></div><div><br></div><div><span style="font-size: 24px;"><b>Entrée en vigueur</b></span></div><div><span style="font-size: 14px;"><br></span></div><div><span style="font-size: 14px;">Les présentes conditions générales entrent en vigueur le 1er janvier 2014.</span></div></li></ol>',
            'service_terms_en' => '<ol style="margin-bottom: 0px;"><li><div><span style="font-size: 24px;"><b>Généralités</b></span></div><div><br></div><div><span style="font-size: 14px;">Les informations et conseils publiés sur www.partybooker.ch sont destinés à des privés ou professionnels désireux d’organiser un événement. Le contenu du site est exclusivement informatif. Visiter, consulter et s’inspirer sur le site est gratuit.</span></div><div><br></div><div><br></div><div><span style="font-size: 24px;"><b>Limitation de la responsabilité de Partybooker</b></span></div><div><br></div><div><span style="font-size: 14px;">Partybooker n’est en aucun cas responsable de la qualité et/ou de l’exécution des services des prestataires présentés et/ou réservés sur le site www.partybooker.ch.</span></div><div><br></div><div><span style="font-size: 14px;">Partybooker ne saurait en aucun cas être tenu responsable des contenus, des activités commerciales, des produits et des services proposés à travers les sites vers lesquels des liens hypertextes, directs ou indirects, sont réalisés.</span></div><div><span style="font-size: 14px;"><br></span></div><div><span style="font-size: 14px;">Partybooker met tout en oeuvre pour que le contenu du site soit à jour et reflète la réalité mais ne peut être tenu responsable de données erronées ou obsolètes. S’il s’avérait qu’une information, offre ou promotion était échue ou inexacte, les internautes renoncent à tout dédommagement ou poursuites de Partybooker.</span></div><div><span style="font-size: 14px;"><br></span></div><div><span style="font-size: 14px;">Partybooker se réserve le droit de bloquer temporairement l’accès au site pour effectuer des maintenances nécessaires au bon fonctionnement. Partybooker n’est pas responsable d’éventuels problèmes techniques liés à l’hébergement de son site.</span></div><div><span style="font-size: 14px;"><br></span></div><div><span style="font-size: 14px;">La responsabilité de Partybooker est limitée aux cas de faute intentionnelle ou de négligence grave.</span></div><div><span style="font-size: 14px;">Toute responsabilité de Partybooker pour d’éventuels préjudices supplémentaires ou indirects est expressément exclue.</span></div><div><br></div><div><br></div><div><span style="font-size: 24px;"><b>Utilisation des données personnelles</b></span></div><div><span style="font-size: 14px;"><br></span></div><div><span style="font-size: 14px;">Partybooker se réserve le droit d’utiliser les données personnelles collectées lors de demandes d’offre ou d’une inscription sur le site pour communiquer des informations susceptibles d’intéresser ladite personne.</span></div><div><br></div><div><span style="font-size: 14px;">L’internaute accepte que les données personnelles qu’il a fournies lors d’une demande d’offre à l’un de nos prestataires soient transmises à ce dernier afin de prendre contact ou de réserver une prestation, un équipement ou un service.</span></div><div><br></div><div><br></div><div><span style="font-size: 24px;"><b>Pas de transmission de données personnelles à des tiers</b></span></div><div><span style="font-size: 24px;"><b><br></b></span></div><div><span style="font-size: 14px;">Partybooker ne communique pas de données personnelles à des tiers, sauf dans le cas mentionné sous “Utilisation des données personnelles”.</span></div><div><br></div><div><br></div><div><span style="font-size: 24px;"><b>Cookies</b></span></div><div><span style="font-size: 14px;"><br></span></div><div><span style="font-size: 14px;">Le site www.partybooker.ch emploie des cookies pour déterminer les intérêts de ses internautes, dans le but d’améliorer le site. L’utilisateur a la possibilité d’empêcher la formation de cookies en sélectionnant l’option correspondante sur son programme de navigation.</span></div><div><br></div><div><br></div><div><span style="font-size: 24px;"><b>Propriété des données</b></span></div><div><span style="font-size: 14px;"><br></span></div><div><span style="font-size: 14px;">Les données communiquées sur le site sont recueillies, traitées et publiées par Partybooker. Partybooker est propriétaire de la base de données publiée sur son site. Il est interdit de reproduire, d’utiliser, de copier, modifier ou de vendre ces informations.</span></div><div><br></div><div><br></div><div><span style="font-size: 24px;"><b>Entrée en vigueur</b></span></div><div><span style="font-size: 14px;"><br></span></div><div><span style="font-size: 14px;">Les présentes conditions générales entrent en vigueur le 1er janvier 2014.</span></div></li></ol>',
            'service_terms_fr' => '<ol style="margin-bottom: 0px;"><li><div><span style="font-size: 24px;"><b>Généralités</b></span></div><div><br></div><div><span style="font-size: 14px;">Les informations et conseils publiés sur www.partybooker.ch sont destinés à des privés ou professionnels désireux d’organiser un événement. Le contenu du site est exclusivement informatif. Visiter, consulter et s’inspirer sur le site est gratuit.</span></div><div><br></div><div><br></div><div><span style="font-size: 24px;"><b>Limitation de la responsabilité de Partybooker</b></span></div><div><br></div><div><span style="font-size: 14px;">Partybooker n’est en aucun cas responsable de la qualité et/ou de l’exécution des services des prestataires présentés et/ou réservés sur le site www.partybooker.ch.</span></div><div><br></div><div><span style="font-size: 14px;">Partybooker ne saurait en aucun cas être tenu responsable des contenus, des activités commerciales, des produits et des services proposés à travers les sites vers lesquels des liens hypertextes, directs ou indirects, sont réalisés.</span></div><div><span style="font-size: 14px;"><br></span></div><div><span style="font-size: 14px;">Partybooker met tout en oeuvre pour que le contenu du site soit à jour et reflète la réalité mais ne peut être tenu responsable de données erronées ou obsolètes. S’il s’avérait qu’une information, offre ou promotion était échue ou inexacte, les internautes renoncent à tout dédommagement ou poursuites de Partybooker.</span></div><div><span style="font-size: 14px;"><br></span></div><div><span style="font-size: 14px;">Partybooker se réserve le droit de bloquer temporairement l’accès au site pour effectuer des maintenances nécessaires au bon fonctionnement. Partybooker n’est pas responsable d’éventuels problèmes techniques liés à l’hébergement de son site.</span></div><div><span style="font-size: 14px;"><br></span></div><div><span style="font-size: 14px;">La responsabilité de Partybooker est limitée aux cas de faute intentionnelle ou de négligence grave.</span></div><div><span style="font-size: 14px;">Toute responsabilité de Partybooker pour d’éventuels préjudices supplémentaires ou indirects est expressément exclue.</span></div><div><br></div><div><br></div><div><span style="font-size: 24px;"><b>Utilisation des données personnelles</b></span></div><div><span style="font-size: 14px;"><br></span></div><div><span style="font-size: 14px;">Partybooker se réserve le droit d’utiliser les données personnelles collectées lors de demandes d’offre ou d’une inscription sur le site pour communiquer des informations susceptibles d’intéresser ladite personne.</span></div><div><br></div><div><span style="font-size: 14px;">L’internaute accepte que les données personnelles qu’il a fournies lors d’une demande d’offre à l’un de nos prestataires soient transmises à ce dernier afin de prendre contact ou de réserver une prestation, un équipement ou un service.</span></div><div><br></div><div><br></div><div><span style="font-size: 24px;"><b>Pas de transmission de données personnelles à des tiers</b></span></div><div><span style="font-size: 24px;"><b><br></b></span></div><div><span style="font-size: 14px;">Partybooker ne communique pas de données personnelles à des tiers, sauf dans le cas mentionné sous “Utilisation des données personnelles”.</span></div><div><br></div><div><br></div><div><span style="font-size: 24px;"><b>Cookies</b></span></div><div><span style="font-size: 14px;"><br></span></div><div><span style="font-size: 14px;">Le site www.partybooker.ch emploie des cookies pour déterminer les intérêts de ses internautes, dans le but d’améliorer le site. L’utilisateur a la possibilité d’empêcher la formation de cookies en sélectionnant l’option correspondante sur son programme de navigation.</span></div><div><br></div><div><br></div><div><span style="font-size: 24px;"><b>Propriété des données</b></span></div><div><span style="font-size: 14px;"><br></span></div><div><span style="font-size: 14px;">Les données communiquées sur le site sont recueillies, traitées et publiées par Partybooker. Partybooker est propriétaire de la base de données publiée sur son site. Il est interdit de reproduire, d’utiliser, de copier, modifier ou de vendre ces informations.</span></div><div><br></div><div><br></div><div><span style="font-size: 24px;"><b>Entrée en vigueur</b></span></div><div><span style="font-size: 14px;"><br></span></div><div><span style="font-size: 14px;">Les présentes conditions générales entrent en vigueur le 1er janvier 2014.</span></div></li></ol>',
        ]);


    }

    private function newPlan(
        PlanEnum $plan,
        int      $positon,
        bool     $listing,
        int      $photos,
        int      $videos,
        int      $requests,
        int      $price,
        int      $duration,
        string   $planId,
    ): int
    {
        return DB::table('plans')->insertGetId([
            'name' => $plan->value,
            'plan_created' => now(),
            'position' => $positon,
            'listing' => $listing,
            'photos_num' => $photos,
            'video' => $videos,
            'direct_request' => $requests,
            'price' => $price,
            'days_period' => $duration,
            'stripe_plan_id' => $planId,
        ]);


    }

    private function newPartner(string $slug, $r, string $for = null)
    {
        $partnerUid = '120036190814-044' . $r;
        $partnerId = DB::table('partners_info')->insertGetId([
            'id_partner' => $partnerUid,
            'en_company_name' => $slug,
            'fr_company_name' => $slug,
            'slug' => $slug,
            'average_rate' => 0,
            'plans_id' => 3,
            'plan' => 'premium',
            'plan_option_group' => 1,
            'payment_status' => rand(0, 1),
            'public' => true,
            'payed' => '2020-09-18',
            'expiration_date' => '2024-09-18',
            'location_code' => 'VD',
            'address' => 'Rue de la Gare 19, Montreux, Suisse',
            'lat' => '46.4364302',
            'lon' => '6.911386499999935',
            'phone' => fake()->phoneNumber,
            'company_phone' => fake()->phoneNumber,
            'language' => '["french","english","german","italian"]',
            'price' => '60',
            'budget' => true,
            'priority' => 3,

            'category_1' => 'cat1',
            'subcat_1' => 'cat1_7',
            'subcat_2' => 'cat1_3',
            'plan_option' => '1',


            'www' => 'https://www.' . $slug . '.ch',
            'facebook' => 'https://www.facebook.com/' . $slug,
            'instagram' => 'https://www.instagram.com/' . $slug,
            'linkedin' => 'https://www.linkedin.com/company/' . $slug,
            'youtube' => 'https://www.youtube.com/' . $slug,
            'twitter' => 'https://www.twitter.com/' . $slug,
            'vimeo' => 'https://www.vimeo.com/' . $slug,
            'en_slogan' => "Un Chef d'oeuvre au bord du lac Léman",
            'fr_slogan' => "Un Chef d'oeuvre au bord du lac Léman",
            'en_short_descr' => 'En plein centre de Vevey historique, face à l’étendue somptueuse du lac et de la Riviera Vaudoise, retrouvez le Château de l’Aile, prestigieux monument historique néo-gothique du XIXe siècle alliant authenticité et artisanat d’exception. Le Château de l’Aile de Vevey est l’adresse privilégiée pour organiser un événement spécial face au plus beau panorama de la Riviera dans un cadre idyllique et unique en Suisse. Les différents salons du Château, ainsi que son jardin, proposent un cadre époustouflant s’adaptant à l’envergure de votre événement. Qu’il s’agisse d’événements privés ou professionnels, ce chef d’oeuvre architectural restauré avec passion et savoir-faire saura vous séduire.',
            'fr_short_descr' => 'En plein centre de Vevey historique, face à l’étendue somptueuse du lac et de la Riviera Vaudoise, retrouvez le Château de l’Aile, prestigieux monument historique néo-gothique du XIXe siècle alliant authenticité et artisanat d’exception. Le Château de l’Aile de Vevey est l’adresse privilégiée pour organiser un événement spécial face au plus beau panorama de la Riviera dans un cadre idyllique et unique en Suisse. Les différents salons du Château, ainsi que son jardin, proposent un cadre époustouflant s’adaptant à l’envergure de votre événement. Qu’il s’agisse d’événements privés ou professionnels, ce chef d’oeuvre architectural restauré avec passion et savoir-faire saura vous séduire.',
            'en_full_descr' => 'En plein centre de Vevey historique, face à l’étendue somptueuse du lac et de la Riviera Vaudoise, retrouvez le Château de l’Aile, prestigieux monument historique néo-gothique du XIXe siècle alliant authenticité et artisanat d’exception. Le Château de l’Aile de Vevey est l’adresse privilégiée pour organiser un événement spécial face au plus beau panorama de la Riviera dans un cadre idyllique et unique en Suisse. Les différents salons du Château, ainsi que son jardin, proposent un cadre époustouflant s’adaptant à l’envergure de votre événement. Qu’il s’agisse d’événements privés ou professionnels, ce chef d’oeuvre architectural restauré avec passion et savoir-faire saura vous séduire.',
            'fr_full_descr' => 'En plein centre de Vevey historique, face à l’étendue somptueuse du lac et de la Riviera Vaudoise, retrouvez le Château de l’Aile, prestigieux monument historique néo-gothique du XIXe siècle alliant authenticité et artisanat d’exception. Le Château de l’Aile de Vevey est l’adresse privilégiée pour organiser un événement spécial face au plus beau panorama de la Riviera dans un cadre idyllique et unique en Suisse. Les différents salons du Château, ainsi que son jardin, proposent un cadre époustouflant s’adaptant à l’envergure de votre événement. Qu’il s’agisse d’événements privés ou professionnels, ce chef d’oeuvre architectural restauré avec passion et savoir-faire saura vous séduire.',
            'other_lang' => null,
        ]);

        PartnerPlanOption::factory([
            'partners_info_id' => $partnerId
        ])->create();
        $this->createServiceTabs($partnerId, $r);

        DB::table('statistics')->insert([
            'id_partner' => $partnerUid,
            'view' => 0,
            'phone' => 0,
            'email' => 0,
            'website' => 0,
            'address' => 0,
            'facebook' => 0,
            'twitter' => 0,
            'instagram' => 0,
            'linkedin' => 0,
            'vimeo' => 0,
            'youtube' => 0,
            'direct' => 0
        ]);

        if ($for) {
            DB::table('users')->insert([
                'name' => $for,
                'email' => 'bleyo@alphomega.org',
                'id_partner' => '120036190814-044' . $r,
                'email_verification' => 1,
                'password' => bcrypt('password'),
                'type' => 'admin',
                'provider' => null,
                'provider_id' => null,
            ]);
        } else {
            DB::table('users')->insert([
                'name' => $slug,
                'email' => $slug . '@alphomega.org',
                'id_partner' => '120036190814-044' . $r,
                'email_verification' => 1,
                'password' => bcrypt('password'),
                'type' => 'partner',
                'provider' => null,
                'provider_id' => null,
            ]);
        }


    }

    private function createServiceTabs(int $partnerId, $r): void
    {
        $equipmentId = Equipment::factory([
            'id_partner' => '120036190814-044' . $r
        ])->create()->id;
        DB::table('adverts')->insert([
            'partners_info_id' => $partnerId,
            'category_id' => 1,
            'status' => 1,
            'view_name' => 'equipment',
            'service_type' => 'App\Models\Equipment',
            'service_id' => $equipmentId,
        ]);

        $wineId = Wine::factory([
            'id_partner' => '120036190814-044' . $r
        ])->create()->id;
        DB::table('adverts')->insert([
            'partners_info_id' => $partnerId,
            'category_id' => 1,
            'status' => 1,
            'view_name' => 'wine',
            'service_type' => 'App\Models\Wine',
            'service_id' => $wineId,
        ]);


        $entertainmentId = Entertainment::factory([
            'id_partner' => '120036190814-044' . $r
        ])->create()->id;
        DB::table('adverts')->insert([
            'partners_info_id' => $partnerId,
            'category_id' => 1,
            'status' => 1,
            'view_name' => 'entertainment',
            'service_type' => 'App\Models\Entertainment',
            'service_id' => $entertainmentId,
        ]);

        $catererId = Caterer::factory([
            'id_partner' => '120036190814-044' . $r
        ])->create()->id;
        DB::table('adverts')->insert([
            'partners_info_id' => $partnerId,
            'category_id' => 1,
            'status' => 1,
            'view_name' => 'caterer',
            'service_type' => 'App\Models\Caterer',
            'service_id' => $catererId,

        ]);

        $epId = EventPlace::factory([
            'id_partner' => '120036190814-044' . $r
        ])->create()->id;
        DB::table('adverts')->insert([
            'partners_info_id' => $partnerId,
            'category_id' => 1,
            'status' => 1,
            'view_name' => 'event-place',
            'service_type' => 'App\Models\EventPlace',
            'service_id' => $epId,
        ]);


    }

}
