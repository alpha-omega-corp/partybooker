<?php

namespace App\View\Composers;

use Illuminate\View\View;

class IconComposer
{
    public function compose(View $view): void
    {
        $view->with('editIcon', 'heroicon-o-pencil-square');
        $view->with('deleteIcon', 'heroicon-o-trash');
        $view->with('galleryIcon', 'heroicon-o-photo');
        $view->with('keyIcon', 'heroicon-o-key');
        $view->with('navIcon', 'heroicon-s-bars-3-bottom-left');
        $view->with('linkIcon', 'heroicon-o-globe-alt');
    }
}
