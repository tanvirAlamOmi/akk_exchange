@extends('web.open-bo-account')

@section('bo_form_content')

    <form class="bo-form" method="POST" action="{{ route('submit-bo-form') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="reference_no" class="reference_no_input" value="{{  $application->reference_no}}">

        <div class="row mt-3">
            <div class="col-lg-6 col-md-6">
                <div class="input_group">
                    <h6 class="label">*Bank Name</h6>
                    <input type="text" id="bank_name" name="bank_name" placeholder="Enter Bank Name" class="form-control @error('bank_name') is-invalid @enderror" value="{{ !empty($application->bank_info) ? $application->bank_info->bank_name : old('bank_name') }}" required>
                    @error('bank_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            
            <div class="col-lg-6 col-md-6">
                <div class="input_group">
                    <h6 class="label">*Branch Name</h6>
                    <input type="text" id="branch_name" name="branch_name" placeholder="Enter Branch Name" class="form-control @error('branch_name') is-invalid @enderror" value="{{ !empty($application->bank_info) ? $application->bank_info->branch_name : old('branch_name') }}" required>
                    @error('branch_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            
            <div class="col-lg-6 col-md-6">
                <div class="input_group">
                    <h6 class="label">*Routing Number</h6>
                    <input type="text" id="routing_no" name="routing_no" placeholder="Enter Routing Number" class="form-control numeric_input @error('routing_no') is-invalid @enderror" value="{{ !empty($application->bank_info) ? $application->bank_info->routing_no : old('routing_no') }}" required>
                    @error('routing_no')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            
            <div class="col-lg-6 col-md-6">
                <div class="input_group">
                    <h6 class="label">*Account Number</h6>
                    <input type="text" id="account_no" name="account_no" placeholder="Enter Account Number" class="form-control numeric_input @error('account_no') is-invalid @enderror"  value="{{ !empty($application->bank_info) ? $application->bank_info->account_no : old('account_no') }}">
                    @error('account_no')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="input_group">
                    <h6 class="label">*Swift Code</h6>
                    <input type="text" id="swift_code" name="swift_code" placeholder="Enter Account Number" class="form-control @error('swift_code') is-invalid @enderror"  value="{{ !empty($application->bank_info) ? $application->bank_info->swift_code : old('swift_code') }}">
                    @error('swift_code')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="input_group">
                    <h6 class="label">*Chequebook Image</h6>
                    <input type="file" id="chequebook_image" name="chequebook_image" class="form-control @error('chequebook_image') is-invalid @enderror" value="{{ old('chequebook_image') }}" onchange="readImageURL(this, 'chequebook_imageView');" accept="image/png, image/jpeg, image/PNG, image/JPEG" {{ !empty($application->bank_info) && !empty($application->bank_info->chequebook_image) ? '' : 'required' }}>

                    <span id="chequebook_imageViewAlert" class="text-danger hide">
                        Max Size: 5MB
                    </span>

                    <img id="chequebook_imageView" src="{{ !empty($application->bank_info) && !empty($application->bank_info->chequebook_image) ? asset('img-contents/applicant-images/'.$application->bank_info->chequebook_image) : '' }}"  alt="photo" class="mb-3 img-fluid img-thumbnail max-height-200 {{ !empty($application->bank_info) && !empty($application->bank_info->chequebook_image) ? '' : 'hide' }}">

                    @error('chequebook_image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

        </div>

        <input type="hidden" name="stage" value="bank">
        <input type="hidden" class="application-id" name="application_id" value="{{  $application->id}}">

        <div class="row">
            
            <div class="col-4">
                <p>Your Online BO Ref No:  {{$application->reference_no}}</p>
                </p>
            </div>
            <div class="col-8 text-right">
                <div class="btn_group">
                    @if($application->bo_type == 'joint')
                        <a type="button" href="{{ route('re-open-bo-account',['slug' => 'basic', 'code' => $application->reference_no, 'counter' => 2]) }}" class="btn site_btn bg-secondary previous-form-btn">Go Back</a>
                    @else
                        <a type="button" href="{{ route('re-open-bo-account',['slug' => 'basic', 'code' => $application->reference_no]) }}" class="btn site_btn bg-secondary previous-form-btn">Go Back</a>
                    @endif
                    <button type="submit" class="btn site_btn submit-form-btn" data-title="basic" data-name="bank">Save & Next</button>
                </div>
            </div>
        </div>
    </form>

@endsection

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            var application = {!! json_encode($application) !!}
            console.log(application)

            updateStage(application['stage']);

            function updateStage(currentStage){
                var stages = {intro: 1, basic: 2, bank: 3, nominee: 4, completed: 5};
                let tabs = $('.form-tab');
                $.each(tabs, function(t, tab){
                    if($(tab).data('value') <= stages[currentStage]){
                        $(tab).addClass('completed');
                    }
                });
            };
        });
    </script>
@endpush
