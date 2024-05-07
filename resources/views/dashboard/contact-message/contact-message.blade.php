@extends('dashboard.index')

@section('title', 'contact us')

@section('breadcrumbs')
    <li class="breadcrumb-item active"><a class="btn-link" href="#">Contact Message</a></li>
@endsection

@section('dashboard_content')

	<div class="container-fluid">        
        <div class="card mb-4">
            <div class="card-header bg-white">
                <b class="fs-120">Contact Message List</b>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Sl.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>BO ID</th>
                            <th>Message</th>
                            <th>Received At</th>
                            <th>Status</th>
                            <th>is Seen</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Sl.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>BO ID</th>
                            <th>Message</th>
                            <th>Received At</th>
                            <th>Status</th>
                            <th>is Seen</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($contacts as $u => $contact)
                        <tr>
                            <td>{{$u += 1}}</td>
                            <td>{{$contact->name }}</td>                           
                            <td>{{$contact->email}}</td>
                            <td>{{$contact->phone}}</td>
                            <td>{{$contact->bo_id}}</td>
                            <td>{{ Str::limit( $contact->message, 15) }}</td>
                            <td>{{ dateTimeAsReadable($contact->created_at) }}</td>
                            <td><b class="text-{{ $contact->status ? 'success' : 'danger' }}">{{ $contact->status ? 'ACTIVE' : 'INACTIVE' }}</b></td>
                            <td><b class="text-{{ $contact->is_seen ? 'success' : 'danger' }}">{{ $contact->is_seen ? 'Read' : 'Unread' }}</b></td>
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('contact-messages.show', $contact) }}" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-placement="top" title="View">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    @if($contact->status == True)
                                        <a href="#" class="btn btn-sm btn-primary change-confirmation" title="Delete"  data-id={{$contact->id}} 
                                            data-request-url="{{ action([\App\Http\Controllers\Dashboard\ContactMessageController::class, 'setInactiveStatus'] ) }}"  
                                            data-redirect-url="{{ action([\App\Http\Controllers\Dashboard\ContactMessageController::class, 'index']) }}"
                                            data-title = "delete"
                                            data-description = "You will not be able to undo this delete operation!"
                                            >
                                            <i class="fa fa-trash"></i>
                                        </a> 
                                    @else
                                        <a href="#" class="btn btn-sm btn-primary change-confirmation" title="Delete"  data-id={{$contact->id}} 
                                            data-request-url="{{ action([\App\Http\Controllers\Dashboard\ContactMessageController::class, 'setActiveStatus'] ) }}"  
                                            data-redirect-url="{{ action([\App\Http\Controllers\Dashboard\ContactMessageController::class, 'index']) }}"
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

                {!! $contacts->links() !!}

            </div>
        </div>
    </div> 

@endsection
 