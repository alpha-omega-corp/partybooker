<?php

use App\Models\Plan as PlansModel;
use Illuminate\Database\Migrations\Migration;

class AddCommissionFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $plan = PlansModel::firstOrNew(['name' => 'Commission']);
        $plan->name = 'Commission';
        $plan->position = 10;
        $plan->listing = 1;
        $plan->photos_num = 5;
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
        PlansModel::where('name', 'Commission')->delete();
    }
}
