<?php

namespace App\Interfaces;

use App\Models\Category;

interface ICategoryService
{
    public function getCategory(string $slug): Category;
}
