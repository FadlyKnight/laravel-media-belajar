<li class="dropdown"><a href="{{ route('home.materi', $parent_id) }}"><span>{{ $name_parent }}</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
    <ul>
        @foreach ($child as $item)
        
            @if ($item->child()->count() > 0)
            @include('frontend.layouts.child-menu', ['child' => $item->child()->get(), 'name_parent' => $item->nama, 'parent_id' => $item->id ])
            @else
            <li><a href="{{ route('home.materi', $item->id) }}">{{ $item->nama }}</a></li>
            @endif
                    
        @endforeach
    </ul>
</li>