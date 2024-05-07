@if($section->text_contents && count($section->text_contents) > 0)

    @foreach($section->text_contents as $s => $textContent)

        <div class="{{ $section->type == 'groupContent' ? 'col-lg-3 col-md-3 col-sm-6' : 'col-12' }} text-secondary">

            <div class="content-box mb-2">
                <div class="btn-group pull-right">
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-angle-down"></i>    
                    </button>
                    <ul class="dropdown-menu bg-secondary text-light">
                        <li class="">
                            <a class="dropdown-item" href="{{ route('text-contents.edit',$textContent->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                <i class="fa fa-edit"></i>
                            </a>
                        </li>
                        <li class="">
                            <form action="{{ route('text-contents.status',$textContent->id) }}" method="POST">
                                @csrf
                                <button class="dropdown-item img-delete-btn" type="submit" data-toggle="tooltip" data-placement="top" title="{{ !$textContent->status ? 'Activate' : 'Deactivate' }}">
                                    @if(!$textContent->status)
                                        <i class="fa fa-check-square"></i>
                                    @else
                                        <i class="fa fa-ban"></i>
                                    @endif
                                </button>
                            </form>
                        </li>
                        <li class="">
                            <form action="{{ route('text-contents.destroy',$textContent->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?')">
                                @csrf
                                @method('DELETE')
                                <button class="dropdown-item img-delete-btn" type="submit" data-toggle="tooltip" data-placement="top" title="Delete">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
                {!! $textContent->description !!}
            </div>

            @if($textContent->title)
            <div class="fw500">
                <span class="text-primary">Title</span>: {{ $textContent->title }}
            </div>
            @endif

            @if($textContent->title_icon)
            <div class="fw500">
                <span class="text-primary">Title Icon</span>: {{ $textContent->title_icon }}
            </div>
            @endif

            @if($textContent->link)
            <div class="fw500">
                <span class="text-primary">Link</span>: {{ $textContent->link }}
            </div>
            @endif

            @if($textContent->image)
                <img src="{{ asset('img-contents/content-images/'.$textContent->image) }}" alt="$textContent->image" class="img-fluid img-text-content">
            @endif

            <div class="fw500">
                <span class="text-primary">Serial No</span>: {{ $textContent->serial_no }}
            </div>
        </div>

    @endforeach

@endif