@extends('web.index')

@section('title', 'Board Of Directors')

@section('web_content')

<!-- Hedaer of Page -->
<header class="page_header" style="background-image: url({{ asset('web/resources/images/management/mg-bg.jpg')  }});">
    <div class="container">
        <h1 class="text-light text-center"> Our Directors </h1>
    </div>
</header>

<!-- page contents -->
<main>
    <section class="management_top">

        <!--  -->

        <div class="container">
            <!-- <div class="section_title text-center p-3">
                <h6 class="">Board</h6>
                <h1 class="">Our Directors</h1>
            </div> -->

            <!-- Profile 1-->
            <div class="row profile_card pt-5 pb-5">
                <div class="col-3">
                    <div class="img_profile">
                        <img class="circle img-fluid" src="{{ asset('web/resources/images/management/DMD-akk-1.png') }}" alt="">
                    </div>
                </div>
                <div class="col-9 align-self-center">
                    <div class="profile_book">
                        <h3>Mr. A. M. Ziauddin Khan, Chairman</h3>
                        <p class="text-dark">
                            Chairman, A K Khan & Company Limited <br>
                            Member, Bangladesh Institute of Planners<br>
                            Management Experience in Textile & Garments, Hospitality Industry<br>
                            Committee Member, A L Khan High School, Mohora, Ctg.
                        </p>
                        <div class="pt-2">
                            <a class="site_btn" href="javascript:void(0);" onclick="togglePopup('one');">SEE DETAILS</a>

                        </div>
                    </div>

                    <div id="popup-one" class="popup">
                        <div class="popup-content">
                            <span class="close" onclick="togglePopup('one');">&times;</span>
                            <h4>Mr. A. M. Ziauddin Khan, Chairman</h4>
                            <ul>
                                <strong>Education:</strong>
                                <li>Master of Science [MSC], Development & Planning, UCL, UK</li>
                                <li>Master of Commerce [M. COM.], Chittagong University</li>
                                <li>Bachelor of Commerce [B. COM.], Chittagong University</li>

                            </ul>
                        </div>
                    </div>


                </div>
            </div>


            <!-- Profile 2-->
            <div class="row profile_card pt-5 pb-5">

                <div class="col-9 align-self-center order-2 order-md-1">
                    <div class="profile_book">
                        <h3 class="text-md-end">Mr. A. K. Shamsuddin Khan, Director</h3>
                        <p class="text-dark text-md-end">

                            A patriotic Freedom Fighter <br>
                            Chairman of A.K. Khan & Company Ltd. (2005 – 2015) <br>
                            Chairman of Bengal Fisheries Ltd. (2005 – till date) (2005 – till date) <br>
                            President of Bangladesh Plywood Manufacturers Association. (1979-1987) <br>
                            President of Wildlife Preservation & Natural Conservation Association (1979-1987) <br>
                            President of Bangladesh Marine Fisheries Association (BMFA) (1999-2003) (2005-2009) <br>

                        </p>
                        <div class="pt-2 text-md-end">
                            <a class="site_btn" href="javascript:void(0);" onclick="togglePopup('two');">SEE DETAILS</a>

                        </div>
                    </div>

                    <div id="popup-two" class="popup">
                        <div class="popup-content">
                            <span class="close" onclick="togglePopup('two');">&times;</span>
                            <h4>Mr. A. K. Shamsuddin Khan, Director</h4>
                            <ul>
                                <strong>Member: </strong>
                                <li> Member of FBCCI (Federation of Bangladesh Chamber of Commerce & Industries) (1999-2003) (2005-2009)</li>
                                <li>EC Member of Chittagong Chamber of Commerce and Industries (1979-1987)</li>
                                <li>EC Member of Metropolitan Chamber of Commerce and Industries (MCCI) Dhaka (1979-1987)</li>
                                <li>EC Member of Bangladesh Jute Mills Owner Association (BJMA) (1979-1987)</li>
                                <li>Honorary Consul General of Peoples’ Republic of Indonesia</li>

                            </ul>
                        </div>
                    </div>


                </div>
                <div class="col-3 order-1 order-md-2">
                    <div class="img_profile">
                        <img class="circle img-fluid" src="{{ asset('web/resources/images/management/chairman_sir_pic-1.png') }}" alt="">
                    </div>
                </div>
            </div>

            <!-- Profile 3-->
            <div class="row profile_card pt-5 pb-5">
                <div class="col-3">
                    <div class="img_profile">
                        <img class="circle img-fluid" src="{{ asset('web/resources/images/management/md-sir-pic-1.png') }}" alt="">
                    </div>
                </div>
                <div class="col-9 align-self-center">
                    <div class="profile_book">
                        <h3>Mr. Salahuddin Kasem Khan, Former Managing Director</h3>
                        <p class="text-dark">
                            Mr. Salahuddin Kasem Khan is third son of pioneer industrialist of Bangladesh, Late A. K. Khan, who was the Member of Parliament from 1947 – 1962, former Federal Minister of Government of Pakistan (1958 – 1962). <br>
                            He did his schooling from Aitchison College, Lahore, 1964; Graduated from the University of Punjab in 1968 and did Post Graduate in Legal Studies in London (1969 – 1972).
                            Mr.Khan was appointed as Honorary Consul General of the Republic of Turkey, Chittagong by the President of Turkey in 1984.
                        </p>
                        <div class="pt-2">
                            <a class="site_btn" href="javascript:void(0);" onclick="togglePopup('three');">SEE DETAILS</a>

                        </div>
                    </div>

                    <div id="popup-three" class="popup">
                        <div class="popup-content">
                            <span class="close" onclick="togglePopup('three');">&times;</span>
                            <h4>Mr. Salahuddin Kasem Khan, Former Managing Director</h4>
                            <ul>

                                <strong>Professional Career: </strong>
                                <li>Former Managing Director of A. K. Khan & Co. Ltd.</li>
                                <li>Chairman of Coats (Bangladesh) Ltd., a joint venture with Coats U.K.</li>
                                <li>Chairman A. K. Khan Jute Mills</li>
                                <li>Vice Chairman of A. K. Khan Penfabric Company Ltd., A JV with Penfabric Malaysia of Malaysia and subsidiary of Toray, Japan</li>
                                <li>Director of Bengal Fisheries Ltd., joint ventures with Nichiro & Maruha of Japan</li>
                                <li>Former Chairman of AKTEL, Bangladesh.</li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>
            <!-- Profile 4-->
            <div class="row profile_card pt-5 pb-5">

                <div class="col-9 align-self-center order-2 order-md-1">
                    <div class="profile_book">
                        <h3 class="text-md-end">Dr. Muhammad Abdul Mazid, Adviser</h3>
                        <p class="text-dark text-md-end">
                            Chief Coordinator, Diabetic Association of Bangladesh (2010 – 2017) <br>
                            Chairman, Chittagong Stock Exchanges Limited (2014 – 2017) <br>
                            Chairman, South Asian Federation of Exchanges (2014 – 2017) <br>
                            Secretary to the Government of Bangladesh, Internal Resources Division (IRD), Ministry of Finance
                        </p>
                        <div class="pt-2 text-md-end">
                            <a class="site_btn" href="javascript:void(0);" onclick="togglePopup('four');">SEE DETAILS</a>

                        </div>
                    </div>

                    <div id="popup-four" class="popup">
                        <div class="popup-content">
                            <span class="close" onclick="togglePopup('four');">&times;</span>
                            <h4>Dr. Muhammad Abdul Mazid, Adviser</h4>
                            <ul>
                                <strong>Education:</strong>
                                <li>Doctor of Philosophy in Social Science 2009, Victoria University, Delaware, USA</li>
                                <li>B.A.(Hons) M.A. in English literature , Dhaka University</li>
                                <strong>Professional Career: </strong>
                                Chairman, National Board of Revenue(NBR) (2007 – 2009)
                                <li>Member, Physical Infrastructure Division and Power Sector Planning Commission (2007 – 2009)</li>
                                <li>Additional Secretary, Banking Wing, Finance Division, Ministry of Finance (2005 – 2007)</li>
                                <li>Deputy and Joint Secretary, Budget wing, Finance Division, Ministry of Finance (2002 – 2005)</li>
                                <li>Director, Policy and Planning &Foreign Investment, Board of Investment Prime Minister’s Office (2000 – 2002)</li>
                                <li>Commercial Counsellor, Bangladesh Embassy Tokyo, Japan (1994 – 2000)</li>
                                <li>Director, Foreign Aid Budget and Accounts Economic Relations Division (ERD), Ministry of Finance (1990 – 1994)</li>
                                <li>National Project Director, Debt Management and Financial Analysis, System Project (a UNCTAD project and sponsored by local UNDP , BGD/88/058) (1990 – 1994)</li>
                                <li>Director, Civil Audit Directorate, Bangladesh Audit Department (1990 – 1990)</li>
                                <li>Chief Accounts Officer, Internal Resources Division Ministry of Finance (1986 – 1990)</li>
                                <li>Joined BCS Audit and Accounts Cadre and worked as AAG and DAG ( 1981 -1985)</li>
                                <li>Started career in Bangladesh Bank ( 1974-1980)</li>
                            </ul>
                        </div>
                    </div>


                </div>
                <div class="col-3 order-1 order-md-2">
                    <div class="img_profile">
                        <img class="circle img-fluid" src="{{ asset('web/resources/images/management/abdulmazid-1.png') }}" alt="">
                    </div>
                </div>
            </div>

        </div>
    </section>
</main>

@endsection