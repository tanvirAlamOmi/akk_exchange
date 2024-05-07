@if ( $application->first_applicant)
    
<div class="container">
    <h1 class="mb-4">First Applicant Details</h1>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header">Personal Information</div>
                <div class="card-body">
                    <p><strong>Full Name:</strong> {{ $application->first_applicant->full_name }}</p>
                    <p><strong>Father's Name:</strong> {{ $application->first_applicant->father_name }}</p>
                    <p><strong>Mother's Name:</strong> {{ $application->first_applicant->mother_name }}</p>
                    <p><strong>Spouse's Name:</strong> {{ $application->first_applicant->spouse_name }}</p>
                    <p><strong>Date of Birth:</strong> {{ $application->first_applicant->dob }}</p>
                    <p><strong>Gender:</strong> {{ $application->first_applicant->gender }}</p>
                    <p><strong>Occupation:</strong> {{ $application->first_applicant->occupation }}</p>
                    <p><strong>TIN:</strong> {{ $application->first_applicant->tin }}</p>
                    <p><strong>Citizen of Bangladesh:</strong> {{ $application->first_applicant->citizen_of_bangladesh }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header">Address Information</div>
                <div class="card-body">
                    <p><strong>Present Country:</strong> {{ $application->first_applicant->present_country }}</p>
                    <p><strong>Present City:</strong> {{ $application->first_applicant->present_city }}</p>
                    <p><strong>Present State:</strong> {{ $application->first_applicant->present_state }}</p>
                    <p><strong>Present Post Code:</strong> {{ $application->first_applicant->present_post_code }}</p>
                    <p><strong>Present Address:</strong> {{ $application->first_applicant->present_address }}</p>
                    <p><strong>Permanent Country:</strong> {{ $application->first_applicant->permanent_country }}</p>
                    <p><strong>Permanent City:</strong> {{ $application->first_applicant->permanent_city }}</p>
                    <p><strong>Permanent State:</strong> {{ $application->first_applicant->permanent_state }}</p>
                    <p><strong>Permanent Post Code:</strong> {{ $application->first_applicant->permanent_post_code }}</p>
                    <p><strong>Permanent Address:</strong> {{ $application->first_applicant->permanent_address }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header">Passport Information</div>
                <div class="card-body">
                    <p><strong>Passport Number:</strong> {{ $application->first_applicant->passport_no }}</p>
                    <p><strong>Passport Issue Place:</strong> {{ $application->first_applicant->passport_issue_place }}</p>
                    <p><strong>Passport Issue Date:</strong> {{ $application->first_applicant->passport_issue_date }}</p>
                    <p><strong>Passport Expiry Date:</strong> {{ $application->first_applicant->passport_expiry_date }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header">Other Information</div>
                <div class="card-body">
                    <p><strong>NID:</strong> {{ $application->first_applicant->nid }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endif