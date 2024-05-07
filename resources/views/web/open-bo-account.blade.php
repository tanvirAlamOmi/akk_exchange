@extends('web.index')

@section('title', 'Open BO Account')

@section('web_content')

    <section class="registration_screen pt-2">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="registration_form">
                            <div class="d-flex">
                                <div class="col">
                                    <div class="section_title">
                                        <h6>Registration</h6>
                                        <h1>BO Account Opening</h1>
                                    </div>
                                </div>
                            </div>

                            <div class="progress_status">
                                <a class="state_elements form-tab {{ isset($slug) && $slug == 'intro' ? 'active' : 'active' }}" href="#intro" title="intro" id="intro-tab" data-value="1">
                                    <span class="scale">01 </span>
                                    <span class="label">DP & BO Type</span>
                                </a>                                
                                <a class="state_elements form-tab {{ isset($slug) && $slug == 'basic' ? 'active' : '' }}" href="#" title="basic" id="basic-tab" data-value="2">
                                    <span class="scale">02</span>
                                    <span class="label">Basic Information</span>
                                </a>                                
                                <a class="state_elements form-tab {{ isset($slug) && $slug == 'bank' ? 'active' : '' }}" href="#" title="bank" id="bank-tab" data-value="3">
                                    <span class="scale">03</span>
                                    <span class="label">Bank Account</span>
                                </a>
                                <a class="state_elements form-tab {{ isset($slug) && $slug == 'nominee' ? 'active' : '' }}" href="#" title="nominee" id="nominee-tab" data-value="4">
                                    <span class="scale">04</span>
                                    <span class="label">Nominees</span>
                                </a>
                                <a class="state_elements form-tab {{ isset($slug) && $slug == 'completed' ? 'active' : '' }}" href="#" title="completed" id="completed-tab" data-value="5">
                                    <span class="scale">05</span>
                                    <span class="label">Complete</span>
                                </a>
                            </div>

                            <!-- Main Form -->
                            <div class="row form_blocks">
                                @yield('bo_form_content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            function updateRadioInput(data) {
                let radioInputs = $('input[type="radio"]');
                $.each(radioInputs, function(index, radio) {
                    if($(radio).prop('value') == data){
                        $(radio).prop('checked', true);
                    }
                });
            }

            $('input').change(function(){
                $('#'+$(this).prop('name')+'_warnings').hide();
            });
        });
    </script>
@endpush
