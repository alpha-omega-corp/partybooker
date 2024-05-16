<body>
@include('app.partials.navigation')

<div class="app-content">
    @include('app.partials.notification')
    {{$slot}}
</div>

</body>

@include('app.partials.footer')

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('openModal', (name, action, iterator) => ({
            open() {
                document.getElementById(`modalBtn${action}_${name + iterator}`).click()
            },
        }))

        Alpine.data('modal', (modal) => ({
            open() {
                document.getElementById('modalBtn' + modal).click()
            },
        }))

        Alpine.data('accordion', (id) => ({
            toggle() {
                document.getElementById(id).click()
            },
        }))
    })
</script>
