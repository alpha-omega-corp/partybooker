@props([
    'pages',
    'useIcons' => false,
    'tooltips' => [],
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
    class="tab">

    <!-- Tab List -->
    <ul
        x-ref="list"
        @keydown.right.prevent.stop="$focus.wrap().next()"
        @keydown.home.prevent.stop="$focus.first()"
        @keydown.page-up.prevent.stop="$focus.first()"
        @keydown.left.prevent.stop="$focus.wrap().prev()"
        @keydown.end.prevent.stop="$focus.last()"
        @keydown.page-down.prevent.stop="$focus.last()"
        role="list"
        class="tab-list d-flex justify-content-start">
        @foreach($pages as $key => $page)
            <li>
                <div
                    :id="$id('tab', whichChild($el.parentElement, $refs.list))"
                    @click="select($el.id)"
                    @mousedown.prevent
                    @focus="select($el.id)"
                    :tabindex="isSelected($el.id) ? 0 : -1"
                    :aria-selected="isSelected($el.id)"
                    :class="isSelected($el.id) ? ' border-accent text-accent fw-bold shadow-lg' : ''"
                    class="{{count($tooltips) > 0 ? 'tippy' : ''}} tab-button h-100 border border-bottom-0"
                    {{count($tooltips) > 0 ? 'data-tippy-content='.$tooltips[$key] : ''}}
                    role="tab">
                    @if($useIcons)
                        @svg($page, 'tab-icon')
                    @else
                        {{$page}}
                    @endif
                </div>
            </li>
        @endforeach
    </ul>
    <div>
        <!-- Panels -->
        <div role="tabpanel" class="tab-page">
            {{$slot}}
        </div>
    </div>
</div>
