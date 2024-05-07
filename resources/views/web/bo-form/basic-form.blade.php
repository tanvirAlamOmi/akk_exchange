@extends('web.open-bo-account')

@section('bo_form_content')

    <form class="bo-form" method="POST" action="{{ route('submit-bo-form') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="reference_no" class="reference_no_input" value="{{  $application->reference_no}}">

        <input type="hidden" name="applicant_counter" class="applicant_counter" value="{{  $applicant_counter }}">

        @if($application->bo_type == 'joint' && $applicant_counter > 0)
        <div class="row">
            <div class="col-12">
                <small class="text-primary">{{ $applicant_counter == 1 ? 'First' : 'Joint' }} Applicant Information</small>
            </div>
        </div>
        @endif

        <div class="row mt-3">
            <div class="col-12">
                <h5>Personal Information</h5>
                <hr class="mb-0">
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="input_group">
                    <h6 class="label">*Your Name (As per NID)</h6>
                    <input type="text" id="full_name" name="full_name" placeholder="Enter Your Name (As per NID)" class="form-control @error('full_name') is-invalid @enderror" value="{{ !empty($applicant) ? $applicant->full_name : old('full_name') }}" required>
                    @error('full_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            
            <div class="col-lg-6 col-md-6">
                <div class="input_group">
                    <h6 class="label">*Father Name</h6>
                    <input type="text" id="father_name" name="father_name" placeholder="Enter Your Father Name" class="form-control @error('father_name') is-invalid @enderror" value="{{ !empty($applicant) ? $applicant->father_name : old('father_name') }}" required>
                    @error('father_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            
            <div class="col-lg-6 col-md-6">
                <div class="input_group">
                    <h6 class="label">*Mother Name</h6>
                    <input type="text" id="mother_name" name="mother_name" placeholder="Enter Your Mother Name" class="form-control @error('mother_name') is-invalid @enderror" value="{{ !empty($applicant) ? $applicant->mother_name : old('mother_name') }}" required>
                    @error('mother_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            
            <div class="col-lg-6 col-md-6">
                <div class="input_group">
                    <h6 class="label">*Spouse Name</h6>
                    <input type="text" id="spouse_name" name="spouse_name" placeholder="Enter Your Spouse Name" class="form-control @error('spouse_name') is-invalid @enderror"  value="{{ !empty($applicant) ? $applicant->spouse_name : old('spouse_name') }}">
                    @error('spouse_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="input_group">
                    <h6 class="label">*Date of Birth (As per NID)</h6>
                    <input type="date" id="dob" name="dob" placeholder="Enter Your Date of Birth (As per NID)" class="form-control @error('dob') is-invalid @enderror" value="{{ !empty($applicant) ? date('Y-m-d', strtotime($applicant->dob)) : old('dob') }}" required>
                    @error('dob')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="input_group">
                    <h6 class="label">*Gender</h6>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="male"  {{ old("gender") == 'male' ? 'checked' : '' }} required {{ !empty($applicant) && $applicant->gender == 'male' ? 'checked' : '' }}>
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="female" {{ old("gender") == 'female' ? 'checked' : '' }}  {{ !empty($applicant) && $applicant->gender == 'female' ? 'checked' : '' }}>
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                    {{-- <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="other" value="other" {{ old("gender") == 'other' ? 'checked' : '' }}   {{ !empty($applicant) && $applicant->gender == 'other' ? 'checked' : '' }}>
                        <label class="form-check-label" for="other">Other</label>
                    </div> --}}
                    @error('gender')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="input_group">
                    <h6 class="label">*Signature Image</h6>
                    <input type="file" id="signature" name="signature" class="form-control @error('signature') is-invalid @enderror" value="{{ old('signature') }}" onchange="readImageURL(this, 'signatureView');" accept="image/png, image/jpeg, image/PNG, image/JPEG" {{ !empty($applicant) && !empty($applicant->signature) ? '' : 'required' }}>

                    <span id="signatureViewAlert" class="text-danger hide">
                        Max Size: 5MB
                    </span>

                    <img id="signatureView" src="{{ !empty($applicant) && !empty($applicant->signature) ? asset('img-contents/applicant-images/'.$applicant->signature) : '' }}"  alt="photo" class="mb-3 img-fluid img-thumbnail max-height-200 {{ !empty($applicant) && !empty($applicant->signature) ? '' : 'hide' }}">

                    @error('signature')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="input_group">
                    <h6 class="label">*Photo</h6>
                    <input type="file" id="photo" name="photo"class="form-control @error('photo') is-invalid @enderror" value="{{ old('photo') }}" onchange="readImageURL(this, 'photoView');" accept="image/png, image/jpeg, image/PNG, image/JPEG" {{ !empty($applicant) && !empty($applicant->photo) ? '' : 'required' }}>

                    <span id="photoViewAlert" class="text-danger hide">
                        Max Size: 5MB
                    </span>

                    <img id="photoView" src="{{ !empty($applicant) && !empty($applicant->photo) ? asset('img-contents/applicant-images/'.$applicant->photo) : '' }}"  alt="photo" class="mb-3 img-fluid img-thumbnail max-height-200 {{ !empty($applicant) && !empty($applicant->photo) ? '' : 'hide' }}">

                    @error('photo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="input_group">
                    <h6 class="label">Occupation</h6>
                    <input type="text" id="occupation" name="occupation" placeholder="Enter Occupation" class="form-control @error('occupation') is-invalid @enderror" value="{{ !empty($applicant) ? $applicant->occupation : old('occupation') }}">
                    @error('occupation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="input_group">
                    <h6 class="label">TIN</h6>
                    <input type="text" id="tin" name="tin" placeholder="Enter TIN" class="form-control @error('tin') is-invalid @enderror" value="{{ !empty($applicant) ? $applicant->tin : old('tin') }}">
                    @error('tin')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="input_group">
                    <h6 class="label">Citizen of Bangladesh</h6>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="citizen_of_bangladesh" id="yes" value="yes" required  {{ old("citizen_of_bangladesh") == 'yes' ? 'checked' : '' }} {{ !empty($applicant) && $applicant->citizen_of_bangladesh ? 'checked' : '' }}>
                        <label class="form-check-label" for="yes">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="citizen_of_bangladesh" id="no" value="no"  {{ old("citizen_of_bangladesh") == 'no' ? 'checked' : '' }}  {{ !empty($applicant) && !$applicant->citizen_of_bangladesh ? 'checked' : '' }}>
                        <label class="form-check-label" for="no">No</label>
                    </div>
                    @error('citizen_of_bangladesh')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            @if($applicant_counter != 2)

                <div class="col-lg-6 col-md-6">
                    <div class="input_group">
                        <h6 class="label">Application Holder NID No.(optional for NRB)</h6>
                        <input type="text" id="nid" name="nid" placeholder="Enter Application Holder NID No.(optional for NRB)" class="form-control @error('nid') is-invalid @enderror" value="{{ !empty($applicant) ? $applicant->nid : old('nid') }}" {{  $application->residency == 'rb' ? 'required' : '' }}>
                        @error('nid')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="input_group">
                        <h6 class="label">NID Front Image</h6>
                        <input type="file" id="nid_front_image" name="nid_front_image" class="form-control @error('nid_front_image') is-invalid @enderror" value="{{ old('nid_front_image') }}" onchange="readImageURL(this, 'nid_front_imageView');" accept="image/png, image/jpeg, image/PNG, image/JPEG" {{  $application->residency == 'nrb' || ( !empty($applicant) && !empty($applicant->nid_front_image)) ? '' : 'required' }}>

                        <span id="nid_front_imageViewAlert" class="text-danger hide">
                            Max Size: 5MB
                        </span>

                        <img id="nid_front_imageView" src="{{ !empty($applicant) && !empty($applicant->nid_front_image) ? asset('img-contents/applicant-images/'.$applicant->nid_front_image) : '' }}"  alt="nid_front_image" class="mb-3 img-fluid img-thumbnail max-height-200 {{ !empty($applicant) && !empty($applicant->nid_front_image) ? '' : 'hide' }}">

                        @error('nid_front_image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="input_group">
                        <h6 class="label">NID Back Image</h6>
                        <input type="file" id="nid_back_image" name="nid_back_image" placeholder="Enter First Holder NID_back_image No.(optional for NRB)" class="form-control @error('nid_back_image') is-invalid @enderror" value="{{ old('nid_back_image') }}" onchange="readImageURL(this, 'nid_back_imageView');" accept="image/png, image/jpeg, image/PNG, image/JPEG" {{  $application->residency == 'nrb' || ( !empty($applicant) && !empty($applicant->nid_back_image)) ? '' : 'required' }}>

                        <span id="nid_back_imageViewAlert" class="text-danger hide">
                            Max Size: 5MB
                        </span>

                        <img id="nid_back_imageView" src="{{ !empty($applicant) && !empty($applicant->nid_back_image) ? asset('img-contents/applicant-images/'.$applicant->nid_back_image) : '' }}"  alt="nid_back_image" class="mb-3 img-fluid img-thumbnail max-height-200 {{ !empty($applicant) && !empty($applicant->nid_back_image) ? '' : 'hide' }}">

                        @error('nid_back_image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            @endif

        </div>
        
        <div class="row mt-3">
            <div class="col-12">
                <h5>Present Address</h5>
                <hr class="mb-0">
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="input_group">
                    <h6 class="label">*Present Country</h6>
                    <input type="text" id="present_country" name="present_country" placeholder="Enter Present Country" class="form-control @error('present_country') is-invalid @enderror" value="{{ !empty($applicant) ? $applicant->present_country : old('present_country') }}">
                    @error('present_country')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="input_group">
                    <h6 class="label">*Present City</h6>
                    <input type="text" id="present_city" name="present_city" placeholder="Enter Present City" class="form-control @error('present_city') is-invalid @enderror" value="{{ !empty($applicant) ? $applicant->present_city : old('present_city') }}">
                    @error('present_city')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="input_group">
                    <h6 class="label">*Present State</h6>
                    <input type="text" id="present_state" name="present_state" placeholder="Enter Present State" class="form-control @error('present_state') is-invalid @enderror" value="{{ !empty($applicant) ? $applicant->present_state : old('present_state') }}">
                    @error('present_state')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="input_group">
                    <h6 class="label">*Present Post Code</h6>
                    <input type="text" id="present_post_code" name="present_post_code" placeholder="Enter Post Code" class="form-control @error('present_post_code') is-invalid @enderror" value="{{ !empty($applicant) ? $applicant->present_post_code : old('present_post_code') }}">
                    @error('present_post_code')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="input_group">
                    <h6 class="label">*Present Address</h6>
                    <input type="text" id="present_address" name="present_address" placeholder="Enter Present Address" class="form-control @error('present_address') is-invalid @enderror" value="{{ !empty($applicant) ? $applicant->present_address : old('present_address') }}">
                    @error('present_address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-12">
                <h5>Permanent Address</h5>
                <hr class="mb-0">
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="input_group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="copyAddress">
                        <label class="form-check-label" for="copyAddress">Same as Present Address </label>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="input_group">
                    <h6 class="label">*Permanent Country</h6>
                    <input type="text" id="permanent_country" name="permanent_country" placeholder="Enter Permanent Country" class="form-control @error('permanent_country') is-invalid @enderror" value="{{ !empty($applicant) ? $applicant->permanent_country : old('permanent_country') }}">
                    @error('permanent_country')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="input_group">
                    <h6 class="label">*Permanent City</h6>
                    <input type="text" id="permanent_city" name="permanent_city" placeholder="Enter Permanent City" class="form-control @error('permanent_city') is-invalid @enderror" value="{{ !empty($applicant) ? $applicant->permanent_city : old('permanent_city') }}">
                    @error('permanent_city')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="input_group">
                    <h6 class="label">*Permanent State</h6>
                    <input type="text" id="permanent_state" name="permanent_state" placeholder="Enter Permanent State" class="form-control @error('permanent_state') is-invalid @enderror" value="{{ !empty($applicant) ? $applicant->permanent_state : old('permanent_state') }}">
                    @error('permanent_state')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="input_group">
                    <h6 class="label">*Permanent Post Code</h6>
                    <input type="text" id="permanent_post_code" name="permanent_post_code" placeholder="Enter Post Code" class="form-control @error('permanent_post_code') is-invalid @enderror" value="{{ !empty($applicant) ? $applicant->permanent_post_code : old('permanent_post_code') }}">
                    @error('permanent_post_code')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="input_group">
                    <h6 class="label">*Permanent Address</h6>
                    <input type="text" id="permanent_address" name="permanent_address" placeholder="Enter Permanent Address" class="form-control @error('permanent_address') is-invalid @enderror" value="{{ !empty($applicant) ? $applicant->permanent_address : old('permanent_address') }}">
                    @error('permanent_address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-12">
                <h5>Passport Information</h5>
                <hr class="mb-0">
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="input_group">
                    <h6 class="label">Passport Number</h6>
                    <input type="text" id="passport_no" name="passport_no" placeholder="Enter Passport Number" 
                    class="form-control @error('passport_no') is-invalid @enderror" value="{{ !empty($applicant) ? $applicant->passport_no : old('passport_no') }}"
                    @if($application->residency == 'nrb') required @endif>
                    @error('passport_no')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="input_group">
                    <h6 class="label">Issue Place of Passport</h6>
                    <input type="text" id="passport_issue_place" name="passport_issue_place" placeholder="Enter the Place of Passport Issue" class="form-control @error('passport_issue_place') is-invalid @enderror" value="{{ !empty($applicant) ? $applicant->passport_issue_place : old('passport_issue_place') }}"
                    @if($application->residency == 'nrb') required @endif>
                    @error('passport_issue_place')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="input_group">
                    <h6 class="label">Issue Date of Passport</h6>
                    <input type="date" id="passport_issue_date" name="passport_issue_date" placeholder="Enter the Date of Passport Issue" class="form-control @error('passport_issue_date') is-invalid @enderror" value="{{ !empty($applicant) && !empty($applicant->passport_issue_date) ? date('Y-m-d', strtotime($applicant->passport_issue_date)) : old('passport_issue_date') }}"
                    @if($application->residency == 'nrb') required @endif>
                    @error('passport_issue_date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="input_group">
                    <h6 class="label">Expiry Date of Passport</h6>
                    <input type="date" id="passport_expiry_date" name="passport_expiry_date" placeholder="Enter the Expiry Date of Passport" class="form-control @error('passport_expiry_date') is-invalid @enderror" value="{{ !empty($applicant) && !empty($applicant->passport_expiry_date) ? date('Y-m-d', strtotime($applicant->passport_expiry_date)) : old('passport_expiry_date') }}"
                    @if($application->residency == 'nrb') required @endif>
                    @error('passport_expiry_date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

        </div>

        <input type="hidden" name="stage" value="basic">
        <input type="hidden" class="application-id" name="application_id" value="{{  $application->id}}">

        <div class="row">
            <div class="col-4">
                <p>Your Online BO Ref No:  {{$application->reference_no}}</p>
                </p>
            </div>
            <div class="col-8 text-right">
                <div class="btn_group">
                    @if($application->bo_type == 'joint' && $applicant_counter = 2)
                        <a type="button" href="{{ route('re-open-bo-account',['slug' => 'basic', 'code' => $application->reference_no, 'counter' => 1]) }}" class="btn site_btn bg-secondary previous-form-btn">Go Back</a>
                    @else
                        <a type="button" href="{{ route('re-open-bo-account',['slug' => 'intro', 'code' => $application->reference_no]) }}" class="btn site_btn bg-secondary previous-form-btn">Go Back</a>
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

            // same as permanent address
            $('#copyAddress').change(function () {
                if (this.checked) {
                    $('#permanent_country').val($('#present_country').val());
                    $('#permanent_city').val($('#present_city').val());
                    $('#permanent_state').val($('#present_state').val());
                    $('#permanent_post_code').val($('#present_post_code').val());
                    $('#permanent_address').val($('#present_address').val());
                }
            });

        });
    </script>
@endpush
