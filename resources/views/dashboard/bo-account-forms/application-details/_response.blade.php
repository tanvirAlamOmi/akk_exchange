@if ($application->note)
    
<div class="container">
    <h1 class="mb-4">Application Response</h1>
    <div class="card mb-4">
        {{-- <div class="card-header">Application Details</div> --}}
        <div class="card-body"> 
            <p>{{$application->note}}</p>
        </div>
    </div>
</div>
@endif