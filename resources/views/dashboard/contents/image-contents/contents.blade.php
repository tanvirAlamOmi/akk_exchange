@if($section->image_contents && count($section->image_contents) > 0)

    @foreach($section->image_contents as $s => $imageContent)

        <div class="col-lg-4 col-md-4 col-sm-6 text-secondary">
            <div class="content-box">
                <div class="btn-group pull-right">
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-angle-down"></i>    
                    </button>
                    <ul class="dropdown-menu bg-secondary text-light">
                        <li class="">
                            <a class="dropdown-item" href="{{ route('image-contents.edit',$imageContent->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                <i class="fa fa-edit"></i>
                            </a>
                        </li>
                        <li class="">
                            <form action="{{ route('image-contents.status',$imageContent->id) }}" method="POST">
                                @csrf
                                <button class="dropdown-item img-delete-btn" type="submit" data-toggle="tooltip" data-placement="top" title="{{ !$imageContent->status ? 'Activate' : 'Deactivate' }}">
                                    @if(!$imageContent->status)
                                        <i class="fa fa-check-square"></i>
                                    @else
                                        <i class="fa fa-ban"></i>
                                    @endif
                                </button>
                            </form>
                        </li>
                        <li class="">
                            <form action="{{ route('image-contents.destroy',$imageContent->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?')">
                                @csrf
                                @method('DELETE')
                                <button class="dropdown-item img-delete-btn" type="submit" data-toggle="tooltip" data-placement="top" title="Delete">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
                <img src="{{ asset('img-contents/content-images/'.$imageContent->image) }}" alt="" class="img-fluid">
                @if($imageContent->description)
                <div class="fw500 mt-2">
                    <span class="text-primary">Description</span> <br>
                    {!! $imageContent->description !!}
                </div>
                @endif
            </div>

            @if($imageContent->title)
            <div class="fw500">
                <span class="text-primary">Title</span>: {{ $imageContent->title }}
            </div>
            @endif
            @if($imageContent->caption)
            <div class="fw500">
                <span class="text-primary">Caption</span>: {{ $imageContent->caption }}
            </div>
            @endif
            @if($imageContent->link)
            <div class="fw500">
                <span class="text-primary">Link</span>: {{ $imageContent->link }}
            </div>
            @endif
            <div class="fw500">
                <span class="text-primary">Serial No</span>: {{ $imageContent->serial_no }}
            </div>
        </div>

    @endforeach

@endif

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            //
        })
    </script>
@endpush