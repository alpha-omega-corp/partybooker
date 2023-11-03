<?php

use App\Models\Plan as PlansModel;
use Illuminate\Database\Migrations\Migration;

class AddBasicPlan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $plan = PlansModel::firstOrNew(['name' => 'Basic']);
        $plan->name = 'Basic';
        $plan->position = 0;
        $plan->listing = 0;
        $plan->photos_num = 1;
        $plan->video = 0;
        $plan->direct_request = 0;
        $plan->price = 0;
        $plan->plan_created = date('Y-m-d H:i:s');
        $plan->save();
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
