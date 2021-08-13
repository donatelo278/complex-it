@if ($paginator->hasPages())
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            @if ($paginator->onFirstPage())

                <li class="disabled page-item"><span class="page-link">&laquo;</span></li>

            @else

                <li class="page-item"><a href="{{ $paginator->previousPageUrl() }}" class="page-link" rel="prev">&laquo;</a></li>

            @endif
            @foreach ($elements as $element)
                @if (is_string($element))

                    <li class="disabled page-item"><span class="page-link">{{ $element }}</span></li>

                @endif
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())

                            <li class="page-item active"><span class="page-link">{{ $page }}</span></li> {{--Строка отвечающая за вывод текущей пагинации--}}

                        @else

                            <li class="page-item"><a href="{{ $url }}" class="page-link">{{ $page }}</a></li>

                        @endif
                    @endforeach
                @endif
            @endforeach
            @if ($paginator->hasMorePages())
                <li class="page-item"><a href="{{ $paginator->nextPageUrl() }}" class="page-link" rel="next">&raquo;</a></li>
            @else
                <li class="disabled page-item"><span class="page-link">&raquo;</span></li>
            @endif
        </ul>
    </nav>

@endif
