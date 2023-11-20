<div>
    <form>

        @include('livewire.partials.notifications')

        <div>

            {{$this->form}}
            @if(count($errors->all()) !== 0)
                <div
                        x-init="$dispatch('notify', { content: '{{$errors->first()}}', type: 'error' })"></div>
            @endif
            @include('livewire.partials.submit')
        </div>
    </form>
</div>
