<div class="flex mt-3 fixed bottom-0 w-full">
    <a href="{{route('profile-advert', auth()->user()->id_partner)}}"
       class="bg-info-500 rounded p-2 text-white flex-none w-40 text-center">
        Dashboard
    </a>
    <button type="button" wire:click.prevent="submit"
            class="bg-primary-500 rounded p-2 text-white ml-2 text-center w-full">
        Save
    </button>
</div>
