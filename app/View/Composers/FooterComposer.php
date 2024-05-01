<?php

namespace App\View\Composers;

use App\Models\AppContact;
use Illuminate\View\View;

class FooterComposer
{
    public function __construct()
    {
    }

    public function compose(View $view): void
    {
        $view->with('footerContacts', AppContact::first());
    }

}
