@if ($application->first_nominee)
    
<div class="container">
    <h1 class="mb-4"> First Nominee Information</h1>
    <div class="card mb-4">
        <div class="card-header">Nominee Details</div>
        <div class="card-body">
            <p><strong>Full Name:</strong> {{ $application->first_nominee->full_name  }}</p>
            <p><strong>Mobile Number:</strong> {{ $application->first_nominee->mobile_no }}</p>
            <p><strong>Present Country:</strong> {{ $application->first_nominee->present_country }}</p>
            <p><strong>Present City:</strong> {{ $application->first_nominee->present_city }}</p>
            <p><strong>Date of Birth:</strong> {{ $application->first_nominee->dob }}</p>
            <p><strong>Present Postal Code:</strong> {{ $application->first_nominee->present_post_code }}</p>
            <p><strong>Percentage:</strong> {{ $application->first_nominee->percentage }}</p>
            <p><strong>Present State:</strong> {{ $application->first_nominee->present_state }}</p>
            <p><strong>Relation:</strong> {{ $application->first_nominee->relation }}</p>
            <p><strong>Present Address:</strong> {{ $application->first_nominee->present_address }}</p>
            <p><strong>Gender:</strong> {{ $application->first_nominee->gender }}</p>
            @if($application->first_nominee->nid_front_image)
            <p><strong>NID Front Image:</strong></p>
            <img src="{{ asset('img-contents/applicant-images/'.$application->first_nominee->nid_front_image) }}" alt="NID Front Image" class="f-news-img img-fluid">
            @endif
            @if($application->first_nominee->nid_back_image)
            <p><strong>NID Back Image:</strong></p>
            <img src="{{ asset('img-contents/applicant-images/'.$application->first_nominee->nid_back_image) }}" alt="NID Back Image" class="f-news-img img-fluid">
            @endif
        </div>
    </div>
</div>
@endif