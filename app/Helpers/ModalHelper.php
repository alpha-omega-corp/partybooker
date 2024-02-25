<?php

namespace App\Helpers;

use App\Enums\ModalName;
use App\Enums\ModalType;

class ModalHelper
{
    public static function getId(ModalName $name, ?ModalType $type, bool $singleton, mixed $index): string
    {
        if ($singleton) {
            $uid = $name->name;
        } else {
            $uid = $type->name . '_' . $name->name;
        }

        return $index ? $uid . $index : $uid;
    }
}
