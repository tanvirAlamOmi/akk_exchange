@extends('dashboard.index')

@section('title', 'Notices')

@section('breadcrumbs')
    <li class="breadcrumb-item active"><a class="btn-link" href="#">Notices</a></li>
@endsection

@section('dashboard_content')

	<div class="container-fluid">        
        <div class="card mb-4">
            <div class="card-header bg-white">
                <b class="fs-120">Notice List</b>
                <a href="{{ route('notices.create') }}" class="btn btn-sm btn-primary pull-right fw-500">
                    Add Notice
                </a>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Sl.</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Serial No</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Sl.</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Serial No</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($notices as $u => $notice)
                        <tr>
                            <td>{{$u += 1}}</td>
                            <td>{{ $notice->title }}</td>
                            <td>
                                <img src="{{ !empty($notice->image) ? asset('img-contents/notice-images/'.$notice->image) : '' }}" alt="{{ !empty($notice->image) ? 'Image' : 'No Image Found' }}" class="img-fluid td-img">
                            </td>                            
                            <td>{!!  Str::limit( $notice->description, 15)  !!}</td>
                            <td>{{ $notice->serial_no }}</td>
                            <td><b class="text-{{ $notice->status ? 'success' : 'danger' }}">{{ $notice->status ? 'ACTIVE' : 'INACTIVE' }}</b></td>
                            <td>{{ dateTimeAsReadable($notice->created_at) }}</td>
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('notices.edit', $notice) }}" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-placement="top" title="Edit">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{ route('notices.show', $notice) }}" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-placement="top" title="View">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    @if($notice->status == True)
                                        <a href="#" class="btn btn-sm btn-primary change-confirmation" title="Delete"  data-id={{$notice->id}} 
                                            data-request-url="{{ action([\App\Http\Controllers\Dashboard\NoticeController::class, 'setInactiveStatus'] ) }}"  
                                            data-redirect-url="{{ action([\App\Http\Controllers\Dashboard\NoticeController::class, 'index']) }}"
                                            data-title = "delete"
                                            data-description = "You will not be able to undo this delete operation!"
                                            >
                                            <i class="fa fa-trash"></i>
                                        </a> 
                                    @else
                                        <a href="#" class="btn btn-sm btn-primary change-confirmation" title="Delete"  data-id={{$notice->id}} 
                                            data-request-url="{{ action([\App\Http\Controllers\Dashboard\NoticeController::class, 'setActiveStatus'] ) }}"  
                                            data-redirect-url="{{ action([\App\Http\Controllers\Dashboard\NoticeController::class, 'index']) }}"
                                            data-title = "restore"
                                            data-description = "you want to restore the data."
                                            >
                                            <i class="fa fa-trash-restore"></i>
                                        </a> 
                                    @endif
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $notices->links() !!}

            </div>
        </div>
    </div> 

@endsection
 