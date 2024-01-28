<?php

namespace App\Enums;

enum ModalType: string
{
    case CREATE = 'POST';
    case READ = 'GET';
    case UPDATE = 'PUT';
    case DELETE = 'DELETE';
}
