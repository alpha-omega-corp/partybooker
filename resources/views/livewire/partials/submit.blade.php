<div class="flex fixed bottom-0 left-0 w-full">
    <button wire:click="submit"
            class="inline-flex w-full text-center bg-purple-600 text-white px-5 py-2.5">
        {{__('partner.save')}}
    </button>
    <a href="{{
    \Illuminate\Support\Facades\Auth::user()->type === 'admin'
    ? route('profile-advert-admin', $this->partnerId)
    : route('profile-advert', $this->partnerId)
}}"
       class="bg-info-500 p-2 text-white flex-none w-40 text-center">
        Dashboard
    </a>
</div>

