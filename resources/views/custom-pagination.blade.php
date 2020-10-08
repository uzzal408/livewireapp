@if ($paginator->hasPages())
<nav aria-label="...">
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
        <li class="page-item disabled">
            <span class="page-link"  tabindex="-1">Previous</span>
        </li>
        @else
            <li class="page-item">
                <a class="page-link" wire:click="previousPage" tabindex="-1">Previous</a>
            </li>
            @endif

        {{-- Page Number Link --}}

        @foreach($elements as $element)
            @if(is_array($element))
                @foreach($element as $page=>$url)
                    @if($page==$paginator->currentPage())
                        <li class="page-item active">
                            <a class="page-link" wire:click="gotoPage({{$page}}">{{ $page }}<span class="sr-only">(current)</span></a>
                        </li>
                        @else
                        <li class="page-item"><a class="page-link" wire:click="gotoPage({{$page}})">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

        {{-- Next  Page Link --}}
        @if ($paginator->hasMorePages())
        <li class="page-item">
            <a class="page-link" wire:click="nextPage">Next</a>
        </li>
            @else
            <li class="page-item disabled">
                <a class="page-link" href="#">Next</a>
            </li>
            @endif
    </ul>
</nav>
    @endif
