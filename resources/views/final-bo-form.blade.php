<!DOCTYPE html>
<html>

<head>
    <title>Download Submited Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        id="bootstrap-css">


    <style>
        .bo-form {
            padding: 30px 0;

        }

        td {
            border: none;
        }

        .panel {
            border: 1px solid #ccc;
            border-radius: 10px;
        }

        .panel-title {
            color: #fff;
            font-size: 20px;
            text-transform: uppercase;
            padding: 10px 15px;
            background-color: #212887;
            border-radius: 10px 10px 0px 0px;
        }

        td.text-title {
            color: #5572DC;

        }
        .inside-panel{
            background: #5572DC;
            padding: 8px 0;
            color: #fff;
            text-align: center;
        }
        .inside-border{
            border: 1px solid #5572DC;
            margin: 20px;
        }
    </style>
</head>

<body>
    <div class="container bo-form">
        <div class="row">
            <div class="col-xs-12">
                <div style="text-align:left;"><img style="max-width: 150px;"
                        src="https://akk.parlorsuite.com/web/resources/images/Logo.png" alt="Akk Khan">
                </div>
                <hr>

            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-12">
                <div class=" panel-default">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-condensed">

                                    <tr>
                                        <td class="text-title">ONLINE BO REF NO</td>
                                        <td class="text-title text-right">STATUS</td>
                                        <td class="text-title text-right">REMARKS</td>
                                        <td class="text-title text-right">UDPADE ON</td>
                                        <td class="text-title text-right">BOID</td>


                                    </tr>
                                    <tr>
                                        <td>{{ $application->reference_no }}</td>
                                        <td class="text-right">{{ $application->status }}</td>
                                        <td class="text-right"></td>
                                        <td class="text-right">{{ $application->updated_at }}</td>
                                        <td class="text-right">{{ $application->id}}</td>

                                    </tr>
                                    <tr>
                                        <td class="text-title">BO CATEGORY</td>
                                        <td class="text-title text-right">RESIDENCY BO</td>
                                        <td class="text-title text-right">BO TYPE</td>
                                        <td class="text-title text-right">Link BO Code</td>



                                    </tr>

                                    <tr>
                                        <td>{{ $application->bo_option}}</td>
                                        <td class="text-right">{{ $application->residency}}</td>
                                        <td class="text-right">{{ $application->bo_type}}</td>
                                        <td class="text-right"></td>


                                    </tr>


                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- PARTICIPANT INFORMATION --}}
        <div class="row mt-2">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>PARTICIPANT INFORMATION</strong></h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-condensed">
                                    <tr>
                                        <td class="text-title">PARTICIPANT NAME</td>
                                        <td class="text-title text-right">PARTICIPANT ID</td>
                                        <td class="text-title text-right">DP INT REF NO/CLIENT ID</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $application->first_applicant->full_name}}</td>
                                        <td class="text-right">{{ $application->id}}</td>
                                        <td class="text-right"></td>
                                    </tr>
                            </table>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p> I/We request you to open a Depository Account in my/our name as per the following details.</p>
            </div>
        </div>
        {{-- FIRST APPLICANT --}}
        <div class="row mt-2">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>FIRST APPLICANT</strong></h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-condensed">
                                <tr>
                                    <td class="text-title">FULL NAME</td>
                                    <td class="text-title text-right">NID NO</td>
                                    <td class="text-title text-right">SEX</td>
                                    <td class="text-title text-right">FATHER/HUSBAND</td>
                                    <td class="text-title text-right">MOTHER NAME</td>
                                    <td class="text-title">DATE OF BIRTH</td>

                                </tr>
                                <tr>
                                    <td>{{ $application->first_applicant->full_name}}</td>
                                    <td class="text-right">{{ $application->first_applicant->nid}}</td>
                                    <td class="text-right">{{ $application->first_applicant->gender}}</td>
                                    <td class="text-right">{{ $application->first_applicant->father_name	}} {{ $application->first_applicant->spouse_name	}}</td>
                                    <td class="text-right">{{ $application->first_applicant->mother_name	}}</td>
                                    <td class="text-right">{{ $application->first_applicant->dob	}}</td>
                                </tr>
                                <tr>
                                    <td class="text-title text-right">PASSPORT NO</td>
                                    <td class="text-title text-right">ISSUE PLACE</td>
                                    <td class="text-title text-right">ISSUE DATE</td>
                                    <td class="text-title text-right">EXPIRY DATE</td>
                                    <td class="text-title text-right">OCCUPATION</td>
                                    <td class="text-title text-right">TIN</td>

                                </tr>
                                <tr>
                                    <td>{{ $application->first_applicant->passport_no	}}</td>
                                    <td class="text-right">{{ $application->first_applicant->passport_issue_place	}}</td>
                                    <td class="text-right">{{ $application->first_applicant->passport_issue_date	}}</td>
                                    <td class="text-right">{{ $application->first_applicant->passport_expiry_date}}</td>
                                    <td class="text-right">{{ $application->first_applicant->occupation}}</td>
                                    <td class="text-right">{{ $application->first_applicant->tin}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- SECOND APPLICANT --}}
        <div class="row mt-2">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>SECOND APPLICANT</strong></h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-condensed">
                                <tr>
                                    <td class="text-title">FULL NAME</td>
                                    <td class="text-title text-right">NID NO</td>
                                    <td class="text-title text-right">SEX</td>
                                    <td class="text-title text-right">FATHER/HUSBAND</td>
                                    <td class="text-title text-right">MOTHER NAME</td>
                                    <td class="text-title">DATE OF BIRTH</td>

                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="text-right"></td>
                                    <td class="text-right"></td>
                                    <td class="text-right"></td>
                                    <td class="text-right"></td>
                                    <td class="text-right"></td>
                                </tr>
                                <tr>
                                    <td class="text-title text-right">PASSPORT NO</td>
                                    <td class="text-title text-right">ISSUE PLACE</td>
                                    <td class="text-title text-right">ISSUE DATE</td>
                                    <td class="text-title text-right">EXPIRY DATE</td>
                                    <td class="text-title text-right">OCCUPATION</td>
                                    <td class="text-title text-right">TIN</td>

                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="text-right"></td>
                                    <td class="text-right"></td>
                                    <td class="text-right"></td>
                                    <td class="text-right"></td>
                                    <td class="text-right"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- CONTACT DETAILS --}}
        <div class="row mt-2">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>CONTACT DETAILS</strong></h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-condensed">
                                <tr>
                                    <td class="text-title">ADDRESS LINE 1</td>
                                    <td class="text-title text-right">ADDRESS LINE 2</td>
                                    <td class="text-title text-right">ADDRESS LINE 3</td>
                                    <td class="text-title text-right">CITY</td>
                                    <td class="text-title text-right">STATE</td>

                                    <td class="text-title text-right">POSTCODE</td>

                                </tr>
                                <tr>
                                    <td>{{$application->first_applicant->present_address}}</td>
                                    <td class="text-right"></td>
                                    <td class="text-right"></td>
                                    <td class="text-right">{{$application->first_applicant->present_city}}</td>
                                    <td class="text-right">{{$application->first_applicant->present_state}}</td>
                                    <td class="text-right">{{$application->first_applicant->present_post_code}}</td>

                                </tr>
                                <tr>
                                    <td class="text-title text-right">COUNTRY</td>
                                    <td class="text-title text-right">MOBILE</td>
                                    <td class="text-title text-right">FAX</td>
                                    <td class="text-title text-right">EMAIL</td>
                                </tr>
                                <tr>
                                    <td class="text-right">{{$application->first_applicant->present_country}}</td>
                                    <td class="text-right">{{$application->mobile_no}}</td>
                                    <td class="text-right"></td>
                                    <td class="text-right">{{$application->email}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- BANK DETAILS --}}
        <div class="row mt-2">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>BANK DETAILS</strong></h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-condensed">
                                <tr>

                                    <td class="text-title text-right">BANK NAME</td>
                                    <td class="text-title text-right">BANK BRANCH NAME</td>
                                    <td class="text-title text-right">BANK DISTRICT NAME</td>
                                    <td class="text-title text-right">BANK ACCOUNT NO</td>

                                </tr>
                                <tr>
                                    <td class="text-right">{{$application->bank_info->bank_name}}</td>
                                    <td class="text-right">{{$application->bank_info->branch_name}}</td>
                                    <td class="text-right"></td>
                                    <td class="text-right">{{$application->bank_info->account_no}}</td>
                                </tr>
                                <tr>
                                    <td class="text-title">BANK ROUTION NUMBER</td>
                                    <td class="text-title text-right">IBAN</td>
                                    <td class="text-title text-right">BIC</td>
                                    <td class="text-title text-right">SWIFT</td>
                                </tr>
                                <tr>
                                    <td class="text-right">{{$application->bank_info->routing_no}}</td>
                                    <td class="text-right"></td>
                                    <td class="text-right"></td>
                                    <td class="text-right">{{$application->bank_info->swift_code}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
           <div class="col-md-12">
            <p>I/We nominate the following person(s) who is/are entitled to recive securities outstanding in my/our account in the event of the death of the sole holder/all the joint holder:</p>
           </div>
        </div>
        {{-- FIRST NOMNEE --}}
        <div class="row mt-2">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>FIRST NOMNEE</strong></h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-condensed">
                                <tr>
                                    <td class="text-title">FULL NAME</td>
                                    <td class="text-title text-right">NID</td>
                                    <td class="text-title text-right">SEX</td>
                                    <td class="text-title text-right">DATE OF BIRTH</td>
                                    <td class="text-title text-right">PERCENTAGE</td>
                                    <td class="text-title text-right">RELATION</td>
                                </tr>
                                <tr>
                                    <td class="text-right">{{$application->first_nominee->full_name}}</td>
                                    <td class="text-right">{{$application->first_nominee->nid}}</td>
                                    <td class="text-right">{{$application->first_nominee->gender}}</td>
                                    <td class="text-right">{{$application->first_nominee->dob}}</td>
                                    <td class="text-right">{{$application->first_nominee->percentage}}</td>
                                    <td class="text-right">{{$application->first_nominee->relation}}</td>


                                </tr>

                                <tr>
                                    <td class="text-title text-right">ADDRESS LINE</td>
                                    <td class="text-title text-right">CITY</td>
                                    <td class="text-title text-right">STATE</td>
                                    <td class="text-title text-right">COUNTRY</td>
                                    <td class="text-title text-right">ZIP</td>
                                </tr>

                                <tr>
                                    <td class="text-right">{{$application->first_nominee->present_address}}</td>
                                    <td class="text-right">{{$application->first_nominee->present_city}}</td>
                                    <td class="text-right">{{$application->first_nominee->present_state	}}</td>
                                    <td class="text-right">{{$application->first_nominee->present_country}}</td>
                                    <td class="text-right">{{$application->first_nominee->present_post_code}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- PHOTOGRAPH --}}
        <div class="row mt-2">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>PHOTOGRAPH</strong></h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-condensed">
                                <tr>
                                    <td class="text-title">FIRST APPLICANT</td>
                                    <td class="text-title">SECOND APPLICANT</td>
                                </tr>
                                <tr>
                                    <td class="text-right">
                                        <img src="http://127.0.0.1:8000/img-contents/applicant-images/{{$application->first_applicant->photo}}" alt="" width="200px">
                                    </td>
                                    <td class="text-right"></td>
                                </tr>
                                <tr>
                                    <td class="text-title">FIRST NOMINEE</td>
                                </tr>
                                <tr>
                                    <td class="text-right"> <img src="http://127.0.0.1:8000/img-contents/applicant-images/{{$application->first_nominee->photo}}" alt="" width="200px"></td>

                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- DECLARATION --}}
        <div class="row mt-2">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong> DECLEARTION</strong></h3>
                    </div>
                  <p style="padding:0 20px;">The rules and regulations of the Depository and CDBL Participant pertaining to an account which are in force now have been read by me/us and
                    I/we have understood the same and I/we agree to abide by and to be bound by the rules as are in force from time to time for such accounts. I/We also declare that the particulars given by me/us are true to the best of my/our knowledge as on the date of making such application. I/We further agree that any false/misleading information given by me/us or suppression of any material fact will render my/our account liable for termination and further action.</p>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-condensed">
                                <tr>
                                    <td class="text-title text-right">FIRST APPLICANT NAME</td>
                                </tr>
                                <tr>
                                    <td class="text-right">{{$application->first_applicant->full_name}}</td>
                                </tr>
                                <tr>
                                    <td class="text-title text-right">FIRST APPLICANT SIGNATURE</td>
                                </tr>
                                <tr>
                                    <td class="text-right"> <img src="http://127.0.0.1:8000/img-contents/applicant-images/{{$application->first_applicant->signature}}" alt="" height="100px"></td>
                                </tr>
                                <tr>
                                    <td class="text-title text-right">FIRST NOMINEE NAME</td>
                                </tr>
                                <tr>
                                    <td class="text-right">{{$application->first_nominee->full_name}}</td>
                                </tr>
                                <tr>
                                    <td class="text-title text-right">FIRST NOMINEE SIGNATURE</td>
                                </tr>
                                <tr>
                                    <td class="text-right"> <img src="http://127.0.0.1:8000/img-contents/applicant-images/{{$application->first_nominee->photo}}" alt="" height="100px"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         {{-- DOCUMENTS --}}
         <div class="row mt-2">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>DOCUMENTS</strong></h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-condensed">
                                <tr>
                                    <td class="text-title text-right">NID FRONT</td>
                                </tr>
                                <tr>
                                    <td class="text-right"> <img src="http://127.0.0.1:8000/img-contents/applicant-images/{{$application->first_applicant->nid_front_image}}" alt="" height="100px"></td>
                                </tr>
                                <tr>
                                    <td class="text-title text-right">NID BACK</td>
                                </tr>
                                <tr>
                                    <td class="text-right"> <img src="http://127.0.0.1:8000/img-contents/applicant-images/{{$application->first_applicant->nid_back_image}}" alt="" height="100px"></td>
                                </tr>
                                <tr>
                                    <td class="text-title text-right">CHEQUEBOOK</td>
                                </tr>
                                <tr>
                                    <td class="text-right"> <img src="http://127.0.0.1:8000/img-contents/applicant-images/{{$application->bank_info->chequebook_image}}" alt="" height="100px"></td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- INTRODUCER --}}
        <div class="row mt-2">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>INTRODUCER</strong></h3>
                    </div>
                    <p style="padding: 0 10px">We confirm the identity, occupation and address of the applicant(s)</p>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-condensed">
                                <tr>
                                    <td class="text-title text-right">PARTICIPANT ID</td>
                                </tr>
                                <tr>
                                    <td class="text-right"></td>
                                </tr>
                                <tr>
                                    <td class="text-title text-right">PARTICIPANT NAME</td>
                                </tr>
                                <tr>
                                    <td class="text-title text-right"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         {{-- APEENDIX --}}
         <div class="row mt-2">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>APEENDIX</strong></h3>
                    </div>
                    <p style="padding: 0 20px">Your NID information</p>

                   <div class="row">
                    <div class="col-md-6">
                        <div class="inside-border">
                            <p class="inside-panel">FIRST HOLDER</p>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-condensed">
                                        <tr>
                                            <td class="text-title text-right">NID</td>
                                        </tr>
                                        <tr>
                                            <td class="text-right">{{$application->first_applicant->nid}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-title text-right">NAME</td>
                                        </tr>
                                        <tr>
                                            <td class="text-right">{{$application->first_applicant->full_name}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-title text-right">FATHER/HUSBAND NAME</td>
                                        </tr>
                                        <tr>
                                            <td class="text-right">{{$application->first_applicant->father_name}} {{$application->first_applicant->spouse_name}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-title text-right">MOTHER NAME</td>
                                        </tr>
                                        <tr>
                                            <td class="text-right">{{$application->first_applicant->mother_name}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-title text-right">DATE OF BIRTH</td>
                                        </tr>
                                        <tr>
                                            <td class="text-right">{{$application->first_applicant->dob}}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                           </div>
                    </div>
                    <div class="col-md-6">
                        <div class="inside-border">
                            <p class="inside-panel">FIRST NOMINEE</p>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-condensed">
                                        <tr>
                                            <td class="text-title text-right">NID</td>
                                        </tr>
                                        <tr>
                                            <td class="text-right">{{$application->first_nominee->nid}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-title text-right">NAME</td>
                                        </tr>
                                        <tr>
                                            <td class="text-right">{{$application->first_nominee->full_name}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-title text-right">FATHER/HUSBAND NAME</td>
                                        </tr>
                                        <tr>
                                            <td class="text-right">{{$application->first_nominee->father_name}} {{$application->first_applicant->spouse_name}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-title text-right">MOTHER NAME</td>
                                        </tr>
                                        <tr>
                                            <td class="text-right">{{$application->first_nominee->mother_name}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-title text-right">DATE OF BIRTH</td>
                                        </tr>
                                        <tr>
                                            <td class="text-right">{{$application->first_nominee->dob}}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                           </div>
                    </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
    

    @if (!isset($pdfMode) || !$pdfMode)
        <div class="d-grid gap-2 col-6 mx-auto mt-5 mb-5">
            <a href="{{ route($download_route, $application) }}" class="btn btn-sm btn-primary"
                data-bs-toggle="tooltip" data-placement="top" title="View">
                DOWNLOAD
            </a>
        </div>
    @endif
</body>

</html>
