<?php


namespace App\Http\Controllers;


use App\Http\Middleware\LocaleMiddleware;
use App\Models\CategoryLocale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redirect;

class LocaleController extends Controller
{

	public function setLocale($lang, Request $request)
	{
		$referer = Redirect::back()->getTargetUrl();
		$parse_url = parse_url($referer, PHP_URL_PATH);
		$segments = explode('/', $parse_url);
		if (isset($segments[1]) && in_array($segments[1], LocaleMiddleware::$languages)) {
			unset($segments[1]);
		}
		if ($lang != LocaleMiddleware::$mainLanguage) {
			array_splice($segments, 1, 0, $lang);
		}
		$url = $request->root() . implode("/", $segments);
		if (parse_url($referer, PHP_URL_QUERY)) {
			$url = $url . '?' . parse_url($referer, PHP_URL_QUERY);
		}


		$locales_en = Cache::get('en_router_slugs');
		if (!$locales_en) {
			$locales_en = CategoryLocale::where('lang', 'en')->pluck('slug', 'categories_id')->toArray();
			Cache::put('en_router_slugs', $locales_en, 60000);
		}

		$locales_fr = Cache::get('fr_router_slugs');
		if (!$locales_fr) {
			$locales_fr = CategoryLocale::where('lang', 'fr')->pluck('slug', 'categories_id')->toArray();
			Cache::put('fr_router_slugs', $locales_fr, 60000);
		}

		$temp = $lang == 'en' ? array_flip($locales_fr) : array_flip($locales_en);
		$local = $lang == 'en' ? $locales_en : $locales_fr;
		if (preg_match('/\/listings\/(.*)\/(.*)$/', $url, $r) && $lang == 'fr') {
			if (isset($temp[$r[1]]) && isset($temp[$r[2]])) {
				$cat = $local[$temp[$r[1]]];
				$subcat = $local[$temp[$r[2]]];
				$url = preg_replace('/\/listings\/(.*)\/(.*)$/', "/annonces/{$cat}/{$subcat}", $url);
			}
		} elseif (preg_match('/\/listings\/([\w\-]+)$/', $url, $r) && $lang == 'fr') {
			if (isset($temp[$r[1]])) {
				$cat = $local[$temp[$r[1]]];
				$url = preg_replace('/\/listings\/([\w\-]+)$/', "/annonces/{$cat}", $url);
			}
		} elseif (preg_match('/\/annonces\/(.*)\/(.*)$/', $url, $r) && $lang == 'en') {
			if (isset($temp[$r[1]]) && isset($temp[$r[2]])) {
				$cat = $local[$temp[$r[1]]];
				$subcat = $local[$temp[$r[2]]];
				$url = preg_replace('/\/annonces\/(.*)\/(.*)$/', "/listings/{$cat}/{$subcat}", $url);
			}
		} elseif (preg_match('/\/annonces\/([\w\-]+)$/', $url, $r) && $lang == 'en') {
			if (isset($temp[$r[1]])) {
				$cat = $local[$temp[$r[1]]];
				$url = preg_replace('/\/annonces\/([\w\-]+)$/', "/listings/{$cat}", $url);
			}
		} elseif (preg_match('/\/annonce\/(.*)$/', $url, $r) && $lang == 'en') {
			$url = preg_replace('/\/annonce\/(.*)$/', "/listing/{$r[1]}", $url);
		} elseif (preg_match('/\/listing\/(.*)$/', $url, $r) && $lang == 'fr') {
			$url = preg_replace('/\/listing\/(.*)$/', "/annonce/{$r[1]}", $url);
		} elseif(preg_match('/annonces$/', $url, $r) && $lang == 'en') {
			$url = preg_replace('/annonces$/', 'listings', $url);;
        } elseif(preg_match('/listings$/', $url, $r) && $lang == 'fr') {
			$url = preg_replace('/listings$/', 'annonces', $url);
		} elseif (preg_match('/annonces(.*)$/', $url, $r) && $lang == 'en') {
			$url = preg_replace('/annonces/', 'listings', $url);;
		} elseif (preg_match('/listings(.*)$/', $url, $r) && $lang == 'fr') {
			$url = preg_replace('/listings/', 'annonces', $url);
        } elseif(preg_match('/listings-filtered(.*)$/', $url, $r) && $lang == 'fr') {
			$url = preg_replace('/listings-filtered/', 'annonces-filtered', $url);;
        } elseif(preg_match('/annonces-filtered(.*)$/', $url, $r) && $lang == 'en') {
            $url = preg_replace('/annonces-filtered/', 'listings-filtered', $url);

        } elseif(preg_match('/a-propos-de-nous$/', $url, $r) && $lang == 'en') {
            $url = preg_replace('/a-propos-de-nous$/', 'aboutus', $url);;
        } elseif(preg_match('/aboutus$/', $url, $r) && $lang == 'fr') {
            $url = preg_replace('/aboutus$/', 'a-propos-de-nous', $url);

        } elseif(preg_match('/conditions-generales-partnaires$/', $url, $r) && $lang == 'en') {
            $url = preg_replace('/conditions-generales-partnaires$/', 'partner-terms', $url);;
        } elseif(preg_match('/partner-terms$/', $url, $r) && $lang == 'fr') {
            $url = preg_replace('/partner-terms$/', 'conditions-generales-partnaires', $url);

        } elseif(preg_match('/partenaire$/', $url, $r) && $lang == 'en') {
            $url = preg_replace('/partenaire$/', 'partner', $url);;
        } elseif(preg_match('/partner$/', $url, $r) && $lang == 'fr') {
            $url = preg_replace('/partner$/', 'partenaire', $url);

        } elseif(preg_match('/plan-du-site$/', $url, $r) && $lang == 'en') {
            $url = preg_replace('/plan-du-site$/', 'sitemap', $url);;
        } elseif(preg_match('/sitemap$/', $url, $r) && $lang == 'fr') {
            $url = preg_replace('/sitemap$/', 'plan-du-site', $url);
        }

		return redirect($url);
	}

}
