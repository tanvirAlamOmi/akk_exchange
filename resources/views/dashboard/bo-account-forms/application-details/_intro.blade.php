<div class="container">
    <h1 class="mb-4">  Applicant Details</h1>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header">Contact Information</div>
                <div class="card-body">
                    <p><strong>Mobile Number:</strong> {{ $application->mobile_no }}</p>
                    <p><strong>Email:</strong> {{ $application->email }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header">Beneficiary Owner's Account Details</div>
                <div class="card-body">
                    <p><strong>Business Ownership Type:</strong> {{ $application->bo_type == 'joint' ?  'Joint' : 'Individual' }}</p>
                    <p><strong>Business Option:</strong> {{ $application->bo_option == 'new_bo' ? 'New BO' : 'Link BO' }}</p>
                    <p><strong>Residency:</strong> {{ $application->residency == 'nrb' ? 'Non  Resident Bangladesh (NRB)' : 'Resident Bangladesh (RB)' }}</p>
                </div>
            </div>
        </div>
    </div>
</div>