<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Middleware\LocaleMiddleware;

class newFaq extends Controller
{
    public function create(Request $request) {
		$faq_created = date('Y-m-d h:m:s');
		$relation = $request->input('type');
		$question_en = $request->input('question_en');
		$answer_en = $request->input('answer_en');
		$question_fr = $request->input('question_fr');
		$answer_fr= $request->input('answer_fr');
				
		if (DB::insert('insert into faq (faq_created, relation, question_en, answer_en, question_fr, answer_fr) value(?, ?, ?, ?, ?, ?)',[$faq_created, $relation, $question_en, $answer_en, $question_fr, $answer_fr])) {
			return redirect(LocaleMiddleware::getLocale().'/cp/faq#success');
		} else {
			return redirect(LocaleMiddleware::getLocale().'/cp/faq#error');
		}
	}
	public function remove(Request $request) {
		$faq_id = $request->input('faq-id');
		
		if (DB::table('faq')->where('id', $faq_id)->delete()) {
			return redirect(LocaleMiddleware::getLocale().'/cp/faq#success');
		} else {
			return redirect(LocaleMiddleware::getLocale().'/cp/faq#error');
		}
	}
	
	public function edit(Request $request) {
		$faq_id = $request->input('faq-id');
		$relation = $request->input('type');
		$question_en = $request->input('question_en');
		$answer_en = $request->input('answer_en');
		$question_fr = $request->input('question_fr');
		$answer_fr= $request->input('answer_fr');
		
		if (DB::table('faq')
				->where('id', $faq_id)
				->update(['relation'=>$relation, 'question_en'=>$question_en, 'answer_en'=>$answer_en, 'question_fr'=>$question_fr, 'answer_fr'=>$answer_fr])) {
			return redirect(LocaleMiddleware::getLocale().'/cp/faq#success');
		} else {
			return redirect(LocaleMiddleware::getLocale().'/cp/faq#error');
		}
	}
}
