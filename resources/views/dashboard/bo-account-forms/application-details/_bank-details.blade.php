@if ($application->bank_info)
    
<div class="container">
    <h1 class="mb-4">Bank Information</h1>
    <div class="card mb-4">
        <div class="card-header">Bank Details</div>
        <div class="card-body">
            <p><strong>Bank Name:</strong> {{ $application->bank_info->bank_name }}</p>
            <p><strong>Branch Name:</strong> {{ $application->bank_info->branch_name }}</p>
            <p><strong>Routing Number:</strong> {{ $application->bank_info->routing_no }}</p>
            <p><strong>Account Number:</strong> {{ $application->bank_info->account_no }}</p>
            <p><strong>SWIFT Code:</strong> {{ $application->bank_info->swift_code }}</p>
            @if($application->bank_info->chequebook_image)
            <p><strong>Chequebook Image:</strong></p>
            <img src="{{ asset('img-contents/applicant-images/'.$application->bank_info->chequebook_image) }}" alt="Chequebook Image" class="f-news-img img-fluid">
            @endif
        </div>
    </div>
</div>
@endif