@extends('dashboard.index')

@section('title', 'Application Center')

@section('breadcrumbs')
    <li class="breadcrumb-item active"><a class="btn-link" href="#">Application Center </a></li>
@endsection

@section('dashboard_content')

	<div class="container-fluid">        
        <div class="container">
            <div class="row justify-content-center">
                <ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="pills-intro-tab" data-bs-toggle="pill" data-bs-target="#pills-intro" type="button" role="tab" aria-controls="pills-intro" aria-selected="true">DP & BO Type</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-basic-tab" data-bs-toggle="pill" data-bs-target="#pills-basic" type="button" role="tab" aria-controls="pills-basic" aria-selected="false">Basic Information</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-bank-tab" data-bs-toggle="pill" data-bs-target="#pills-bank" type="button" role="tab" aria-controls="pills-bank" aria-selected="false">Bank Account</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-nominee-tab" data-bs-toggle="pill" data-bs-target="#pills-nominee" type="button" role="tab" aria-controls="pills-nominee" aria-selected="false">Nominee</button>
                    </li>
                  </ul>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-intro" role="tabpanel" aria-labelledby="pills-intro-tab"> 
                        @include('dashboard.bo-account-forms.application-details._intro')
                    </div>

                    <div class="tab-pane fade" id="pills-basic" role="tabpanel" aria-labelledby="pills-basic-tab"> 
                        @include('dashboard.bo-account-forms.application-details._first-applicant')
                        @include('dashboard.bo-account-forms.application-details._second-applicant')
                    </div>

                    <div class="tab-pane fade" id="pills-bank" role="tabpanel" aria-labelledby="pills-bank-tab">
                        @include('dashboard.bo-account-forms.application-details._bank-details')
                    </div>

                    <div class="tab-pane fade" id="pills-nominee" role="tabpanel" aria-labelledby="pills-nominee-tab">
                        @include('dashboard.bo-account-forms.application-details._first-nominee')
                        @include('dashboard.bo-account-forms.application-details._second-nominee')
                    </div>
                  </div>
            </div>


            
    <form class="bo-form" method="POST" action="{{ route('check-bo-form') }}">
        @csrf 
        <input type="hidden" class="application-id" name="application_id" value="{{  $application->id}}">

           
        <!-- Modal for Note Input -->
        <div class="modal fade" id="noteModal" tabindex="-1" aria-labelledby="noteModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="noteModalLabel">Enter Note</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <input type="hidden" name="result" id="modalResultInput"> <!-- This will hold the action: reject, recheck -->

                    <div class="modal-body">
                        <textarea name="note" class="form-control" rows="3" placeholder="Enter your note"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit Note</button>
                    </div>
                </div>
            </div>
        </div>

        @if ($application->status == \App\Helpers\Enums\ApplicationStatusEnum::COMPLETED
    || $application->status == \App\Helpers\Enums\ApplicationStatusEnum::RECHECK)
            <div class="row">
                <div class="col-12 text-right">
                    <div class="btn_group"> 
                        {{-- <button type="button" class="btn site_btn submit-form-btn btn-danger" data-bs-toggle="modal" data-bs-target="#noteModal" data-result="reject">Reject</button> --}}
                        <button type="button" class="btn site_btn submit-form-btn btn-danger" data-bs-toggle="modal" data-bs-target="#noteModal" data-result="recheck">Recheck</button>
                        <button type="submit" class="btn site_btn submit-form-btn btn-success" name="result" value="accept">Accept</button> 
                    </div>
                </div>
            </div>
        @endif
    </form>
        </div>
    </div> 

 
@endsection
 

@push('scripts')
    <script type="module">
        $(document).ready(function(){
        let modalResultInput = $("#modalResultInput");

        $(".submit-form-btn").on("click", function () {
            let result = $(this).data("result");
            modalResultInput.val(result);
        });
        })
    </script>
@endpush 