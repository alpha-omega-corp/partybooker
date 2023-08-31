<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Middleware\LocaleMiddleware;
use Illuminate\Support\Facades\Storage;

class newPost extends Controller
{
    public function create(Request $request) {
		$time = $_SERVER["REQUEST_TIME_FLOAT"];
		$pos = strpos($time, '.');
		$in = substr($time, $pos+1);
		$post_id = date('hisymd').'-'.$in;
		
		$post_created = date('Y-m-d h:m:s');
		$post_status = 1;
		$slug = $request->input('slug');
		$title_en = $request->input('title_en');
		$title_fr = $request->input('title_fr');
		$post_en = $request->input('post_en');
		$post_fr = $request->input('post_fr');
                $author = $request->input('author');
		$main_img = $post_id . '-' . $request->file('main-img')->getClientOriginalName();
		$main_img_alt = $request->input('main_img_alt');
                $main_img_alt_fr = $request->input('main_img_alt_fr');
		if($request->file('sec-img')) {
			$sec_img = $post_id . '-' . $request->file('sec-img')->getClientOriginalName();
		} else {
			$sec_img = '';
		}
		
		if (DB::insert('insert into blog (post_id, created, updated, published, status, title_en, title_fr, slug, main_img, sec_img, article_en, article_fr,main_img_alt,main_img_alt_fr,author) value(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?)',[$post_id, $post_created, $post_created, $post_created, $post_status, $title_en, $title_fr, $slug, $main_img, $sec_img, $post_en, $post_fr,$main_img_alt,$main_img_alt_fr,$author])) {
			
			$request->file('main-img')->storeAs('posts',$main_img);
			
			if($request->file('sec-img')) {
				$request->file('sec-img')->storeAs('posts',$sec_img);
			}
			return redirect(LocaleMiddleware::getLocale().'/cp/blog/post/'.$slug);
		} else {
			return redirect(LocaleMiddleware::getLocale().'/cp/blog');
		}
	}
	
	public function remove(Request $request, $postid) {
		$postid = $request->postid;
		DB::table('blog')->where('post_id',$postid)->delete();
		return redirect(LocaleMiddleware::getLocale().'/cp/blog');
	}
	
	public function edit(Request $request) {
		$post_id = $request->post_id;
		$post_updated = date('Y-m-d h:m:s');
		$slug = $request->input('slug');
		$title_en = $request->input('title_en');
		$title_fr = $request->input('title_fr');
		$post_en = $request->input('post_en');
		$post_fr = $request->input('post_fr');
                $main_img_alt = $request->input('main_img_alt');
                $main_img_alt_fr = $request->input('main_img_alt_fr');
                $author = $request->input('author');
		if($request->file('main-img')) {
			$main_img = $post_id . '-' . $request->file('main-img')->getClientOriginalName();
			$upload_main= true;
		} else {
			$main_img = $request->input('main-img-old');
			$upload_main= false;
		}
		if($request->file('sec-img')) {
			$sec_img = $post_id . '-' . $request->file('sec-img')->getClientOriginalName();
			$upload_sec= true;
		} else {
			$sec_img = $request->input('sec-img-old');
			$upload_sec= false;
		}
		if (DB::table('blog')->
				where ('post_id',$post_id)->
				update([
					'updated'=>$post_updated, 
					'slug'=>$slug, 
					'title_en'=>$title_en, 
					'title_fr'=>$title_fr, 
					'article_en'=>$post_en, 
					'article_fr'=>$post_fr, 
					'main_img'=>$main_img, 
					'sec_img'=>$sec_img,
                                        'main_img_alt'=>$main_img_alt,
                                        'main_img_alt_fr'=>$main_img_alt_fr,
                                        'author'=>$author

                                    ])
			) {
			
			if ($upload_main == true) {
				$request->file('main-img')->storeAs('posts',$main_img);
			}
			if ($upload_sec == true) {
				$request->file('sec-img')->storeAs('posts',$sec_img);
			}
			return redirect(LocaleMiddleware::getLocale().'/cp/blog/post/'.$slug.'#success');
		} else {
			return redirect(LocaleMiddleware::getLocale().'/cp/blog/post/'.$slug.'#error');
		}
	}
}
