@extends('web.open-bo-account')

@section('bo_form_content') 
    <form class="bo-form" method="POST" action="{{ route('submit-bo-form') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="reference_no" class="reference_no_input" value="{{  $application->reference_no}}">

        <input type="hidden" name="applicant_counter" class="applicant_counter" value="{{  $applicant_counter }}">

        <input type="hidden" name="stage" value="nominee">
        <input type="hidden" class="application-id" name="application_id" value="{{  $application->id}}"> 
         
        <div class="row mt-3">
            <div class="col-lg-6 col-md-6">
                <div class="input_group">
                    <h6 class="label">*Your Name (As per NID)</h6>
                    <input type="text" id="full_name" name="full_name" placeholder="Enter Your Name (As per NID)" class="form-control @error('full_name') is-invalid @enderror" value="{{ !empty($nominee) ? $nominee->full_name : old('full_name') }}" required>
                    @error('full_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            
            <div class="col-lg-6 col-md-6">
                <div class="input_group">
                    <h6 class="label">Passport Number</h6>
                    <input type="text" id="passport_no" name="passport_no" placeholder="Enter Passport Number" class="form-control @error('passport_no') is-invalid @enderror" value="{{ !empty($nominee) ? $nominee->passport_no : old('passport_no') }}">
                    @error('passport_no')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            
            <div class="col-lg-6 col-md-6">
                <div class="input_group">
                    <h6 class="label">*Country</h6>
                    <input type="text" id="present_country" name="present_country" placeholder="Enter Present Country" class="form-control @error('present_country') is-invalid @enderror" value="{{ !empty($nominee) ? $nominee->present_country : old('present_country') }}">
                    @error('present_country')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            
            <div class="col-lg-6 col-md-6">
                <div class="input_group">
                    <h6 class="label">Mobile Number</h6>
                    <input id="mobile_no" type="tel" placeholder="01xxxxxxxxx" class="form-control @error('mobile_no') is-invalid @enderror" name="mobile_no" value="{{ !empty($nominee) && $nominee->mobile_no ? $nominee->mobile_no : old('mobile_no') }}" required>
                    <div class="col-12 text-danger warnings" id="mobile_no_warnings" data-name="mobile_no"></div>
                    @error('mobile_no')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>  
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="input_group">
                    <h6 class="label">*City</h6>
                    <input type="text" id="present_city" name="present_city" placeholder="Enter Present City" class="form-control @error('present_city') is-invalid @enderror" value="{{ !empty($nominee) ? $nominee->present_city : old('present_city') }}">
                    @error('present_city')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            
            <div class="col-lg-6 col-md-6">
                <div class="input_group">
                    <h6 class="label">*Date of Birth (As per NID)</h6>
                    <input type="date" id="dob" name="dob" placeholder="Enter Your Date of Birth (As per NID)" class="form-control @error('dob') is-invalid @enderror" value="{{ !empty($nominee) ? date('Y-m-d', strtotime($nominee->dob)) : old('dob') }}" required>
                    @error('dob')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="input_group">
                    <h6 class="label">*Post Code</h6>
                    <input type="text" id="present_post_code" name="present_post_code" placeholder="Enter Post Code" class="form-control @error('present_post_code') is-invalid @enderror" value="{{ !empty($nominee) ? $nominee->present_post_code : old('present_post_code') }}">
                    @error('present_post_code')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="input_group">
                    <h6 class="label">*Percentage</h6>
                    <input type="text" id="percentage" name="percentage" placeholder="Enter Percentage" class="form-control @error('percentage') is-invalid @enderror" value="{{ !empty($nominee) ? $nominee->percentage : old('percentage') }}">
                    @error('percentage')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="input_group">
                    <h6 class="label">*State/Division</h6>
                    <input type="text" id="present_state" name="present_state" placeholder="Enter Present State" class="form-control @error('present_state') is-invalid @enderror" value="{{ !empty($nominee) ? $nominee->present_state : old('present_state') }}">
                    @error('present_state')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="input_group">
                    <h6 class="label">*Relation With Client</h6>
                    <input type="text" id="relation" name="relation" placeholder="Enter Present State" class="form-control @error('relation') is-invalid @enderror" value="{{ !empty($nominee) ? $nominee->relation : old('relation') }}">
                    @error('relation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="input_group">
                    <h6 class="label">*Present Address</h6>
                    <input type="text" id="present_address" name="present_address" placeholder="Enter Present Address" class="form-control @error('present_address') is-invalid @enderror" value="{{ !empty($nominee) ? $nominee->present_address : old('present_address') }}">
                    @error('present_address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            
            <div class="col-lg-6 col-md-6">
                <div class="input_group">
                    <h6 class="label">*Sex</h6>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="male" required {{ old("gender") == 'male' ? 'checked' : '' }}  {{ !empty($nominee) && $nominee->gender == 'male' ? 'checked' : '' }}>
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="female" {{ old("gender") == 'female' ? 'checked' : '' }}  {{ !empty($nominee) && $nominee->gender == 'female' ? 'checked' : '' }}>
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                    {{-- <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="other" value="other" {{ old("gender") == 'other' ? 'checked' : '' }}  {{ !empty($nominee) && $nominee->gender == 'other' ? 'checked' : '' }}>
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
                    <h6 class="label">NID Front Image</h6>
                    <input type="file" id="nid_front_image" name="nid_front_image" class="form-control @error('nid_front_image') is-invalid @enderror" value="{{ old('nid_front_image') }}" onchange="readImageURL(this, 'nid_front_imageView');" accept="image/png, image/jpeg, image/PNG, image/JPEG" {{  $application->residency == 'nrb' || ( !empty($nominee) && !empty($nominee->nid_front_image)) ? '' : 'required' }}>

                    <span id="nid_front_imageViewAlert" class="text-danger hide">
                        Max Size: 5MB
                    </span>

                    <img id="nid_front_imageView" src="{{ !empty($application) && !empty($nominee->nid_front_image) ? asset('img-contents/applicant-images/'.$nominee->nid_front_image) : '' }}"  alt="nid_front_image" class="mb-3 img-fluid img-thumbnail max-height-200 {{ !empty($nominee) && !empty($nominee->nid_front_image) ? '' : 'hide' }}">

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
                    <input type="file" id="nid_back_image" name="nid_back_image" placeholder="Enter First Holder NID_back_image No.(optional for NRB)" class="form-control @error('nid_back_image') is-invalid @enderror" value="{{ old('nid_back_image') }}" onchange="readImageURL(this, 'nid_back_imageView');" accept="image/png, image/jpeg, image/PNG, image/JPEG" {{  $application->residency == 'nrb' || ( !empty($nominee) && !empty($nominee->nid_back_image)) ? '' : 'required' }}>

                    <span id="nid_back_imageViewAlert" class="text-danger hide">
                        Max Size: 5MB
                    </span>

                    <img id="nid_back_imageView" src="{{ !empty($application) && !empty($nominee->nid_back_image) ? asset('img-contents/applicant-images/'.$nominee->nid_back_image) : '' }}"  alt="nid_back_image" class="mb-3 img-fluid img-thumbnail max-height-200 {{ !empty($nominee) && !empty($nominee->nid_back_image) ? '' : 'hide' }}">

                    @error('nid_back_image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-4">
                <p>Your Online BO Ref No:  {{$application->reference_no}}</p>
                </p>
            </div>
            <div class="col-8 text-right">
                <div class="btn_group">
                    @if(!$applicant_counter == 2)
                        <a type="button" href="{{ route('re-open-bo-account',['slug' => 'bank', 'code' => $application->reference_no]) }}" class="btn site_btn bg-secondary previous-form-btn">Go Back</a>
                        <button type="submit" class="btn site_btn submit-form-btn" data-title="basic" name="nominee" value="second_nominee">Add Another Nominee</button>
                    @else
                        <a type="button" href="{{ route('re-open-bo-account',['slug' => 'nominee', 'code' => $application->reference_no]) }}" class="btn site_btn bg-secondary previous-form-btn">Go Back</a>
                    @endif
                    <button type="submit" class="btn site_btn submit-form-btn" data-title="basic" name="nominee" value="first_nominee">Save & Next</button>
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
        });
    </script>
@endpush
