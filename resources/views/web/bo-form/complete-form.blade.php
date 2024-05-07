@extends('web.open-bo-account')

@section('bo_form_content')

    <form class="bo-form" method="POST" action="{{ route('submit-bo-form') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="reference_no" class="reference_no_input" value="{{  $application->reference_no}}">  
        <input type="hidden" name="stage" value="completed">
        <input type="hidden" class="application-id" name="application_id" value="{{  $application->id}}">
        <input type="checkbox" name="acceptance" value="1" checked> I agree to the Terms and conditions and Refund & Privacy policy<br>

        <div class="row">
            
            <div class="col-4">
                <p>Your Online BO Ref No:  {{$application->reference_no}}</p>
                </p>
            </div>
            <div class="col-8 text-right">
                <div class="btn_group"> 
                    <a type="button" href="{{ route('re-open-bo-account',['slug' => 'nominee', 'code' => $application->reference_no]) }}" class="btn site_btn bg-secondary previous-form-btn">Go Back</a>
                    <button type="submit" class="btn site_btn submit-form-btn" data-title="basic" data-name="bank">Submit Application</button>
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
