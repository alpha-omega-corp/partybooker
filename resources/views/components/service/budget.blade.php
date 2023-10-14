@php use App\Helpers\BudgetsHelper; @endphp
@props([
    'details',
])

<x-service.list-item :title="__('partner.budget')">
    @if(strlen($details) > 0)
        <p>{{BudgetsHelper::getDescription($details)}} CHF</p>
    @else
        <x-service.list-bool :value="false"/>
    @endif
</x-service.list-item>
