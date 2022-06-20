<li class="dropdown"><a href="#"><span>{{ $name_parent }}</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
    <ul>
        @foreach ($child as $item)
        
            @if ($item->child()->count() > 0)
            @include('frontend.layouts.child-menu', ['child' => $item->child()->get(), 'name_parent' => $item->nama ])
            @else
            <li><a href="{{ route('home.materi', $item->id) }}">{{ $item->nama }}</a></li>
            @endif
                    
        @endforeach
    </ul>
</li>