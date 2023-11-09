<div>
    <form wire:submit="create">
        {{$this->form}}

        <button type="submit" class="bg-primary-500 rounded p-2 w-full mt-3 text-white">
            Submit
        </button>
    </form>

    <x-filament-actions::modals/>
</div>
