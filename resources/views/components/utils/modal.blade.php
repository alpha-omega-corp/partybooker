@php use App\Enums\ModalType; @endphp

@props([
     'type' => ModalType::CREATE,
    'id',
    'title',
    'action',
    'size' => 'modal-sm',
    'button',
    'icon',

    'multipart' => false,

])



