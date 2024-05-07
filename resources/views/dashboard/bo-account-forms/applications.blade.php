@extends('dashboard.index')

@section('title', 'Application Center')

@section('breadcrumbs')
    <li class="breadcrumb-item active"><a class="btn-link" href="#">Application Center</a></li>
@endsection

@section('dashboard_content')

	<div class="container-fluid">        
        <div class="card mb-4">
            <div class="card-header bg-white">
                <b class="fs-120">Applications List</b>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Sl.</th>
                            <th>Referance</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Submitted At</th>
                            <th>Status</th>
                            <th>Action</th> 
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Sl.</th>
                            <th>Referance</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Submitted At</th>
                            <th>Status</th>
                            <th>Action</th> 
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($applications as $u => $application)
                        <tr> 
                            <td>{{$u += 1}}</td>
                            <td>{{$application->reference_no}}</td>
                            <td>{{$application->first_applicant->full_name ?? '' }}</td>                           
                            <td>{{$application->email}}</td>
                            <td>{{$application->mobile_no}}</td>
                            <td>{{ dateTimeAsReadable($application->created_at) }}</td>
                            <td>{{ \App\Helpers\Enums\ApplicationStatusEnum::getLabel($application->status) }}</td>
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('application-center.show', $application) }}" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-placement="top" title="View">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </div>

                                
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('bo-form.view', $application  ) }}" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-placement="top" title="View">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                {!! $applications->links() !!}

            </div>
        </div>
    </div> 

@endsection
 