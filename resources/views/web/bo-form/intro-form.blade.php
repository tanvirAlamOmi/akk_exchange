@extends('web.open-bo-account')

@section('bo_form_content')

    <div class="row">
        <div class="col">
            <div class="instruction_sets">
                <h6>Please keep the Soft copy / Picture of the following documents ready</h6>
                <ul>
                    <li><ion-icon name="checkmark-circle-outline"></ion-icon> Applicant's and Nominee's National ID card.</li>
                    <li><ion-icon name="checkmark-circle-outline"></ion-icon> Color Photo and Signature of the Applicant(s) and Nominee(s).</li>
                    <li><ion-icon name="checkmark-circle-outline"></ion-icon> Bank Cheque Leaf of the Applicant.</li>
                    <li><ion-icon name="checkmark-circle-outline"></ion-icon> Applicant's E-TIN certificate (To enjoy tax benefit).</li>
                    <li><ion-icon name="checkmark-circle-outline"></ion-icon> Passport copy for Non-resident Bangladeshi (NRB).</li>
                </ul>
            </div>

            <form id="search-form" class="input_group" method="POST" action="{{ route('search-by-reference') }}">
                @csrf
                <label for="reference_no" class="label">Search by Reference Number</label>
                <input type="text" id="reference_no" name="reference_no" placeholder="Enter Reference Number" class="form-control @error('reference_no') is-invalid @enderror" value="{{ old('reference_no') }}" required>
                @error('reference_no')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ str_replace('reference no', 'mobile number', $message) }}</strong>
                    </span>
                @enderror
                <div class="col-12 text-danger warnings" id="reference_no_warnings" data-name="reference_no"></div>
                <button type="submit" class="btn site_btn">Continue Pevious Application</button>
               
               @isset ($application->status)
               <div class="instruction_sets">
                    <div class="row">
                        <div class="col-4">
                            <h4>Response:</h4>
                        </div>
                        <div class="col-8 text-end">
                            <h5>{{  \App\Helpers\Enums\ApplicationStatusEnum::getLabel($application->status) }}</h5>
                        </div>
                    </div>
                    @if ($application->note) 
                        <hr>
                        <p>{{ $application->note }}</p> 
                    @endif
                </div>
               @endisset
              

            </form>
        </div>

        <div class="col">
            <form class="bo-form" method="POST" action="{{ route('submit-bo-form') }}">
                @csrf
                <div class="input_group">
                    <h6 class="label">Mobile Number</h6>
                    <input id="mobile_no" type="tel" placeholder="01xxxxxxxxx" class="form-control @error('mobile_no') is-invalid @enderror" name="mobile_no" value="{{ !empty($application) && $application->mobile_no ? $application->mobile_no : old('mobile_no') }}" required>
                    <div class="col-12 text-danger warnings" id="mobile_no_warnings" data-name="mobile_no"></div>
                    @error('mobile_no')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>  

                <div class="input_group">
                    <h6 class="label">Email Address</h6>
                    <input id="email" type="email" name="email" placeholder="your@email.com" class="form-control @error('email') is-invalid @enderror" value="{{ !empty($application) && $application->email ? $application->email : old('email') }}" required>
                    <div class="col-12 text-danger warnings" id="email_warnings" data-name="email"></div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>                                        
                
                <div class="input_group">
                    <h6 class="label">*Bo Caption</h6>
                    <div class="radio_group">
                        <input type="radio" id="new_bo" name="bo_option" value="new_bo" required   {{ old("bo_option") == 'new_bo' ? 'checked' : '' }}  {{ !empty($application) && $application->bo_option == 'new_bo' ? 'checked' : '' }}>
                        <label for="new_bo">New BO</label>
                    </div>
                    <div class="radio_group">
                        <input type="radio" id="link_bo" name="bo_option" value="link_bo"  {{ old("bo_option") == 'link_bo' ? 'checked' : '' }}  {{ !empty($application) && $application->bo_option == 'link_bo' ? 'checked' : '' }}>
                        <label for="link_bo">Link BO</label>
                    </div>
                    <div class="col-12 text-danger warnings" id="bo_option_warnings" data-name="bo_option"></div>
                    @error('bo_option')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>                                        
                
                <div class="input_group">
                    <h6 class="label">*Recidency</h6>
                    <div class="radio_group">
                        <input type="radio" id="rb" name="residency" value="rb" required  {{ old("residency") == 'rb' ? 'checked' : '' }}  {{ !empty($application) && $application->residency == 'rb' ? 'checked' : '' }}>
                        <label for="rb">Resident Bangladesh (RB)</label>
                    </div>
                    <div class="radio_group">
                        <input type="radio" id="nrb" name="residency" value="nrb"  {{ old("residency") == 'nrb' ? 'checked' : '' }}  {{ !empty($application) && $application->residency == 'nrb' ? 'checked' : '' }}>
                        <label for="nrb">Non  Resident Bangladesh (NRB)</label>
                    </div>
                    <div class="col-12 text-danger warnings" id="residency_warnings" data-name="residency"></div>
                    @error('residency')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>                
                
                <div class="input_group">
                    <h6 class="label">*BO Type</h6>
                    <div class="radio_group">
                        <input type="radio" id="individual" name="bo_type" value="individual" required {{ old("bo_type") == 'individual' ? 'checked' : '' }} {{ !empty($application) && $application->bo_type == 'individual' ? 'checked' : '' }}>
                        <label for="individual">Individual</label>
                    </div>
                    <div class="radio_group">                                                
                        <input type="radio" id="joint" name="bo_type" value="joint"{{ old("bo_type") == 'joint' ? 'checked' : '' }} {{ !empty($application) && $application->bo_type == 'joint' ? 'checked' : '' }}>
                        <label for="joint">Joint</label>
                    </div>
                    <div class="col-12 text-danger warnings" id="bo_type_warnings" data-name="bo_type"></div>
                    @error('bo_type')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <input type="hidden" name="stage" value="intro">
                <input type="hidden" class="application-id" name="application_id" value="{{ !empty($application) && $application->id ? $application->id : '' }}">

                <button type="submit" class="btn site_btn">Save & Next</button>
            </form>
        </div>
    </div>

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
