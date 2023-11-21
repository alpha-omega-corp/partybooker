<?php

namespace App\Http\Controllers;

use App\Models\Caterer;
use App\Models\DirectMessage;
use App\Models\PartnersInfo;
use App\Models\Rate;
use App\Models\Statistic;
use Auth;
use DB;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ajaxController extends Controller
{
    //Partner form
    public function partner(Request $request)
    {
        $date = date('Y-m-d H:i:s');
        $form = 'partner';
        $name = $request->name;
        $email = $request->email;
        $message = $request->message;
        $lang = $request->lang;
        $id = $request->partner_id;
        DB::insert('insert into messages (message_sent, contact_form, name, email, id_partner, message) value(?, ?, ?, ?, ?, ?)', [$date, $form, $name, $email, $id, $message]);
        if ($lang == 'en') {
            $msg = "Thank you! We will answer you as soon as possible";
        } else {
            $msg = "Je vous remercie! Nous vous répondrons dans les meilleurs délais";
        }
        return response()->json(array('msg' => $msg));
    }

    //Contact form
    public function contact(Request $request)
    {
        $date = date('Y-m-d H:i:s');
        $form = 'contacts';
        $name = $request->name;
        $email = $request->email;
        $message = $request->message;
        $lang = $request->lang;
        DB::insert('insert into messages (message_sent, contact_form, name, email, message) value(?, ?, ?, ?, ?)', [$date, $form, $name, $email, $message]);
        if ($lang == 'en') {
            $msg = "Thank you! We will answer you as soon as possible";
        } else {
            $msg = "Je vous remercie! Nous vous répondrons dans les meilleurs délais";
        }
        return response()->json(array('msg' => $msg));
    }

    //Partner phone form
    public function phone(Request $request)
    {

    }

    //Subscribe form
    public function subscribe(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
        ]);

        $date = date('Y-m-d H:i:s');
        $form = 'subscribe';
        $email = $request->email;
        $lang = $request->lang;
        DB::insert('insert into messages (message_sent, contact_form, email) value(?, ?, ?)', [$date, $form, $email]);
        if ($lang == 'en') {
            $msg = "Congratulations! You've successfuly subscribed!";
        } else {
            $msg = "Toutes nos félicitations! Vous vous êtes inscrit avec succès!";
        }
        return response()->json(array('msg' => $msg));
    }

    //Read message
    public function read(Request $request)
    {
        $id = $request->messageid;
        DB::table('messages')->where('id', $id)->update(['status' => 1]);
    }

    public function readDirectMessage(Request $request)
    {
        $id = $request->messageid;
        DirectMessage::where('id', $id)->update(['status' => 0]);
    }

    //Make post draft
    public function draft(Request $request)
    {
        $id = $request->post;
        $lang = $request->lang;
        if ($lang == 'en') {
            $msg = "Not published";
        } else {
            $msg = "Not published";
        }
        DB::table('blog')->where('post_id', $id)->update(['status' => '0']);
        return response()->json(array('msg' => $msg));
    }

    //Make post published
    public function publish(Request $request)
    {
        $id = $request->post;
        $lang = $request->lang;
        if ($lang == 'en') {
            $msg = "Published";
        } else {
            $msg = "Published";
        }
        DB::table('blog')->where('post_id', $id)->update(['status' => '1']);
        return response()->json(array('msg' => $msg));
    }

    //Partner CP - delete image
    public function partnerDelimage(Request $request)
    {
        $id = $request->id_partner;
        $img = '"' . $request->img . '"';
        $images = DB::table('partners_info')->where('id_partner', $id)->get();
        $images = $images[0]->images;
        $images = str_replace($img, '', $images);
        $images = str_replace('[,', '[', $images);
        $images = str_replace(',,', ',', $images);
        $images = str_replace(',]', ']', $images);
        DB::table('partners_info')->where('id_partner', $id)->update(['images' => $images]);

        if (strlen($images) > 2) {
            $msg = sizeof(json_decode($images)) + 1;
        } else {
            $msg = 1;
        }
        return response()->json(array('msg' => $msg));
    }

    //Partner CP - delete file (menus)
    public function partnerDelfile(Request $request)
    {
        $caterer = Caterer::where('id', $request->id)->first();
        $menus = $caterer->menu ? json_decode($caterer->menu) : [];

        try {
            $key = array_search($request->fileDel, $menus);
            if (false !== $key) {
                unset($menus[$key]);
                Storage::delete('menus/' . $request->fileDel);
            }
            $caterer->menu = json_encode($menus);
            $caterer->save();
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 400);
        }
        return response()->json(['message' => 'Ok'], 200);
    }

    //Partner CP - publish service
    public function partnerPublish(Request $request)
    {
        $id = $request->input('id_partner');
        $status = PartnersInfo::where('id_partner', $id)->value('public');

        if ($status) {
            $msg = __('partner.published');
            $stat = __('partner.draft');
        } else {
            $msg = __('partner.draft');
            $stat = __('partner.published');
        }

        $status = !$status;
        PartnersInfo::where('id_partner', $id)->update(['public' => $status]);

        return response()
            ->json(array('msg' => $msg, 'stat' => $stat, 'status' => $status));
    }

    //LEAVE A RATING
    public function rate(Request $request)
    {
        $rated = date('Y-m-d H:i:s');
        $id_partner = $request->id_partner;
        $user_email = $request->user_email;
        $stars = $request->stars;
        $lang = $request->lang;

        $activeRating = Rate::where('id_partner', $id_partner)
            ->where('user_email', $user_email)
            ->first();

        if (!$activeRating) {
            Rate::insert([
                'rated' => $rated,
                'id_partner' => $id_partner,
                'user_email' => $user_email,
                'rate' => $stars
            ]);

            if ($lang == 'en') {
                $msg = "Thank you!";
            } else {
                $msg = "Merci!";
            }
        } else {
            $activeRating->rate = $stars;
            $activeRating->save();

            if ($lang == 'en') {
                $msg = "Thank you!";
            } else {
                $msg = "Merci!";
            }
        }

        $rating = Rate::where('id_partner', $id_partner)->get();
        $rated = sizeof($rating);
        $total = 0;
        foreach ($rating as $item) {
            $total += $item->rate;
        }
        $average_rate = round($total / $rated);

        DB::table('partners_info')->
        where('id_partner', $id_partner)->
        update(['average_rate' => $average_rate]);

        return response()->json(array('msg' => $msg, 'rate' => $average_rate));
    }

    //STATISTICS
    public function statClicks(Request $request)
    {
        $id_partner = $request->id_partner;
        $click = $request->click;

        $statistic = Statistic::where('id_partner', $request->id_partner)->first();
        if (!$statistic) {
            $statistic = new Statistic();
            $statistic->id_partner = $request->id_partner;
            $statistic->save();
        }

        if (!Auth::user() || Auth::user()->id_partner != $id_partner) {
            $stat = DB::table('statistics')->where('id_partner', $id_partner)->value($click);
            $stat++;
            DB::table('statistics')->where('id_partner', $id_partner)->update([$click => $stat]);
        }
    }
}
