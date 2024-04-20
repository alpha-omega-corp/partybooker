@props([
    'title',
])


<!-- <div class="service-advert"/> | @components/advert/form-group -->
<h6 class="service-advert-title">
    {{$title}}
</h6>

<div class="service-advert-content">
    {{$slot}}
</div>

