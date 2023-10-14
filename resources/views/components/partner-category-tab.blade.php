@props([
    'tabs'
])

<div
    x-data="{
        selectedId: null,
        init() {
            this.$nextTick(() => this.select(this.$id('tab', 1)))
        },
        select(id) {
            this.selectedId = id
        },
        isSelected(id) {
            return this.selectedId === id
        },
        whichChild(el, parent) {
            return Array.from(parent.children).indexOf(el) + 1
        }
    }"
    x-id="['tab']"
    class="tabcat">

    {{$title}}

    <!-- Tab List -->
    <ul
        x-ref="tablist"
        @keydown.right.prevent.stop="$focus.wrap().next()"
        @keydown.home.prevent.stop="$focus.first()"
        @keydown.page-up.prevent.stop="$focus.first()"
        @keydown.left.prevent.stop="$focus.wrap().prev()"
        @keydown.end.prevent.stop="$focus.last()"
        @keydown.page-down.prevent.stop="$focus.last()"
        role="tablist"
        class="tab-overflow d-flex justify-content-start m-0">
        @foreach($tabs as $tab)
            <li>
                <button
                    :id="$id('tab', whichChild($el.parentElement, $refs.tablist))"
                    @click="select($el.id)"
                    @mousedown.prevent
                    @focus="select($el.id)"
                    type="button"
                    :tabindex="isSelected($el.id) ? 0 : -1"
                    :aria-selected="isSelected($el.id)"
                    :class="isSelected($el.id) ? 'text-white bg-accent fw-bold h-100' : 'bg-primary text-white mt-3'"
                    class="btn rounded-0 fw-bold"
                    data-tippy-content="{{$tab}}"
                    role="tab">
                    {{$tab}}
                </button>
            </li>
        @endforeach
    </ul>

    <!-- Panels -->

    <div role="tabpanel" class="tab-content">
        {{$slot}}
    </div>
</div>
