<?php

namespace App\View\Composers;

use App\Models\AppContact;
use App\Models\Category;
use Illuminate\View\View;

class FooterComposer
{
    public function compose(View $view): void
    {
        $view->with('footerContacts', AppContact::first());
        $view->with('footerCategories', Category::all());
    }

}
