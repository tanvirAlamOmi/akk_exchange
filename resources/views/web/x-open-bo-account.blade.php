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
                                <!-- <div class="col">
                                    <div class="btn_grp">
                                        <button class="btn_outline"><ion-icon name="cloud-download-outline"></ion-icon>Download</button>
                                        <button class="btn_outline"><ion-icon name="print-outline"></ion-icon>Download</button>
                                    </div>
                                </div> -->
                            </div>

                            <div class="progress_status">
                                <a class="state_elements form-tab active" href="#intro" title="intro" id="intro-tab" data-value="1">
                                    <span class="scale">01 </span>
                                    <span class="label">DP & BO Type</span>
                                </a>                                
                                <a class="state_elements form-tab" href="#" title="basic" id="basic-tab" data-value="2">
                                    <span class="scale">02</span>
                                    <span class="label">Basic Information</span>
                                </a>                                
                                <a class="state_elements form-tab" href="#" title="bank" id="bank-tab" data-value="3">
                                    <span class="scale">03</span>
                                    <span class="label">Bank Account</span>
                                </a>
                                <a class="state_elements form-tab" href="#" title="nominee" id="nominee-tab" data-value="4">
                                    <span class="scale">04</span>
                                    <span class="label">Nominees</span>
                                </a>
                                <a class="state_elements form-tab" href="#" title="completed" id="completed-tab" data-value="5">
                                    <span class="scale">05</span>
                                    <span class="label">Complete</span>
                                </a>
                            </div>

                            <!-- Main Form -->
                            <div class="row form_blocks">
                                <div class="form-card active" id="intro">
                                    @include('web.bo-form.intro-form')
                                </div>
                                
                                <div class="form-card" id="basic">
                                    @include('web.bo-form.basic-form')
                                </div>

                                <div class="form-card" id="bank">
                                    //
                                </div>
                                <div class="form-card" id="nominee">
                                    //
                                </div>
                                <div class="form-card" id="completed">
                                    //
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection

@push('scripts')
    <script type="text/javascript">
        var stages = {intro: 1, basic: 2, bank: 3, nominee: 4, completed: 5};
        let currentWeight = 0;
        var application;

        $(document).ready(function(){
            $('#search-form').submit(function(e){
                e.preventDefault();
                let formInputs = $('#search-form input').serialize();
                $("#overlay").fadeIn(300);
                $.ajax({
                    url: "{{ route('search-by-reference') }}",
                    method: 'GET',
                    data: formInputs,
                    success: function(response) {
                        closeLoader();
                        if(response['success']){
                            application = response['data'];
                            updateStage(application['stage']);
                            presetApplication(application);
                            $('.reference_no_input').val(application['reference_no']);
                            $('.application-id').val(application['id']);
                        }else{
                            $('#reference_no_warnings').html(response['data']);
                            console.log($('#reference_no_warnings'))
                        }
                    },
                    error: function(response) {
                        closeLoader();
                    }
                });
            });

            function updateStage(currentStage){
                let tabs = $('.form-tab');
                $.each(tabs, function(t, tab){
                    if($(tab).data('value') <= stages[currentStage]){
                        $(tab).addClass('completed');
                    }
                });
            };

            // $('.form-tab').click(function(e){
            //     e.preventDefault();
            //     openForm($(this).prop('title'));
            // });

            $('.previous-form-btn').click(function(){
                openForm($(this).data('name'));
            });            

            $('.bo-form').submit(function(e) {
                e.preventDefault();
                let formName = $(this).data('title');
                let nextForm = $(this).data('name');
                submitFormAndNext(formName, nextForm);
            });

            function openForm(formName){
                $('.form-tab').removeClass('active');
                $('.form-card').removeClass('active');
                $('#'+formName+'-tab').addClass('active');
                $('#'+formName).addClass('active');
            }

            function presetApplication(application){
                // var dataArray = Object.entries(application);
                // dataArray.forEach(function([key, value]) {
                //     var key = key;
                //     var value = value;
                //     console.log(key + ": " + value);
                // });
                console.log(application)
                $('#mobile_no').val(application['mobile_no']);
                $('#email').val(application['email']);
                updateRadioInput(application['bo_type']);
                updateRadioInput(application['residency']);
                updateRadioInput(application['bo_option']);
            }

            function updateRadioInput(data)
            {
                let radioInputs = $('input[type="radio"]');
                $.each(radioInputs, function(index, radio) {
                    if($(radio).prop('value') == data){
                        $(radio).prop('checked', true);
                    }
                });
            }

            function submitFormAndNext(formName, nextForm){
                let formInputs = $('#'+formName+'-form input').serialize();
                console.log(formInputs);
                $("#overlay").fadeIn(300);
                $.ajax({
                    url: "{{ route('submit-bo-form') }}",
                    method: 'POST',
                    data: formInputs,
                    success: function(data) {
                        closeLoader();
                        updateStage(data['stage']);
                        
                        /* show success message
                        // write message displaye code here
                        */

                        $('.reference_no_input').val(data['reference_no']);
                        openForm(nextForm);
                    },
                    error: function(data) {
                        closeLoader();
                        console.log(data)
                        var errors = data.responseJSON.errors;
                        $.each(errors, function(inputName, data) {
                             $('#'+inputName+'_warnings').text(data[0]);
                        });
                    }
                });
            }

            function closeLoader(){
                setTimeout(function(){
                    $("#overlay").fadeOut(300);
                },500);
            }

            $('input').change(function(){
                $('#'+$(this).prop('name')+'_warnings').hide();
            });
        });
    </script>
@endpush
