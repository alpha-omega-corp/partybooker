<div>
    @include('livewire.partials.notifications')
    <form
        x-data="{
        content: 'Updated',
        type: 'success',
    }"

        x-on:submit.prevent="$dispatch('notify', { content, type })"
    >
        {{$this->form}}
        @include('livewire.partials.submit')
    </form>
</div>
