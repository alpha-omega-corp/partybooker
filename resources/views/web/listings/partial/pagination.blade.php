@if ($partners->lastPage() > 1)
    <nav aria-label="listing pagination">
        <ul class="pagination justify-content-end">
            <li class="page-item disabled">
                <a class="page-link" href="{{ $partners->url(1) }}">Previous</a>
            </li>

            @for ($i = 1; $i <= $partners->lastPage(); $i++)
                <li class="page-item {{ $partners->currentPage() == $i ? ' active' : '' }}">
                    <a href="{{ $partners->url($i) }}" class="page-link">{{ $i }}</a>
                </li>
            @endfor

            @if ($partners->currentPage() != $partners->lastPage())
                <li class="page-item {{ $partners->currentPage() == $partners->lastPage() ? ' disabled' : '' }}">
                    <a href="{{ $partners->url($partners->currentPage() + 1) }}" class="page-link">
                        Next
                    </a>
                </li>
            @endif
        </ul>
    </nav>
@endif
