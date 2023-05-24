@extends('front_end.layouts.main')

@section('content')
    <!-- ! Slider Starts -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner max-h-[200px] sm:max-h-[400px] md:max-h-[500px] lg:max-h-[600px] xl:max-h-[700px]">
          <div class="carousel-item active">
            <img src="{{ asset('file') }}/images/namibiavisaslideImage1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('file') }}/images/namibiavisaslideImage2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('file') }}/images/namibiavisaslideImage3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>


    <!-- ! Slider Ends -->

    <!-- ! Service Type Starts -->

    <div class="flex flex-col justify-center items-center my-20">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-5/6 sm:w-4/6 md:w-1/2 xl:w-1/3">
            <table class="w-full text-sm text-left text-gray-600 ">
                <thead class="text-xs text-gray-800 bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            SERVICE TYPE
                        </th>
                        <th scope="col" class="px-6 py-3">
                            DURATION
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b ">
                        <td class="px-6 py-4">Expedited service</td>
                        <td class="px-6 py-4">7 business days </td>
                    </tr>
                    <tr class="bg-white border-b ">
                        <td class="px-6 py-4">Regular service </td>
                        <td class="px-6 py-4">15-20 business days </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="w-5/6 sm:w-4/6 md:w-1/2 xl:w-1/3 my-4 text-center">
            <p class="text-sm leading-7 tracking-wide">
                <span class="font-bold"> NOTE : </span> <span class="font-semibold">Mail-in and Mail-out not included in
                    Processing period Processing fees (You can Pay for application fees online after completing *
                    Merchant charges may apply.)</span>
            </p>
        </div>
    </div>

    <!-- ! Service Type Ends -->

    <!-- ! Article 1 Starts -->


    <div class="w-full flex justify-center items-center my-20">
        <div class="w-full px-2 sm:px-0 sm:w-5/6 md:4/6 lg:w-3/6 bg-white border border-gray-200 rounded-lg shadow ">
            <div class="h-[300px] overflow-hidden">
                <img class="rounded-t-lg h-full w-full object-cover" src="{{ asset('file') }}/images/namibiavisanamibia3.jpg"
                    alt="Namibia Visa" />
            </div>
            <div class="p-5">
                <h5
                    class="my-7 text-lg sm:text-xl md:text-2xl lg:text-3xl xl:text-4xl leading-relaxed text-blue-700 font-bold tracking-tight ">
                    YOU ARE REQUIRED TO APPLY FOR A VISA, PLEASE SUBMIT THE FOLLOWING:
                </h5>
                <p class="mb-3 font-normal text-gray-700  text-sm lg:text-base leading-8 tracking-wide space-y-4">
                    A duly filled and signed application form Valid passport with at
                    least 6 months validity from the date of entry and at least 3 or
                    more full blank pages Attach 2 colored 2” x 2” photographs, taken
                    within three months before the date of application, showing a clear
                    front view of applicant’s face, with a white background. No
                    sleeveless attire and eyeglasses. Men should not wear earrings.
                    Blurred or low quality photos are not accepted. A self-addressed,
                    pre-paid envelope from DHL, FEDEX or United States Postal Service
                    only with tracking. Receipt of payment for the envelope must be
                    attached. Please do NOT send UPS envelopes. Cash, money order or
                    certified United States bank check (personal checks will not be
                    accepted) payable to the Embassy of Namibia (fees below). Payments
                    must be in US Dollars. Business letter stating nature of visit (if
                    applicable) Proof of confirmed return ticket Copy of legal residence
                    in the countries accredited to the Embassy of the Republic of
                    Namibia in Washington, DC (list below) Proof of confirmed hotel
                    reservations or tour/safari confirmation (Official receipt/signed
                    invitation letter) Proof of financial statement for a period of six
                    (6) months from applicants. For dependents who are minors or
                    spouses, kindly attach a signed letter of the person responsible for
                    the expenses. If invited, show proof of : Legal status of inviter
                    (if invited), Six (6) months bank statement from the inviter (if
                    invited), Deed of Surety signed by the inviter (Form)
                </p>
            </div>
        </div>
    </div>

    <!-- ! Article 1 Ends -->


    <!-- ! Visa Type Starts -->


    <div class="flex flex-col justify-center items-center">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg px-2 sm:px-0 w-full sm:w-2/3 md:w-1/2">
            <table class="w-full text-sm text-left text-gray-600 ">
                <thead class="text-xs text-gray-800 uppercase bg-gray-50 ">
                    <tr>
                        <th scope="col" class="px-3 sm:px-6 py-3">
                            VISA TYPE
                        </th>
                        <th scope="col" class="px-3 sm:px-6 py-3">
                            SERVICE TYPE
                        </th>
                        <th scope="col" class="px-3 sm:px-6 py-3">
                            FEE
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b ">
                        <td class="px-3 sm:px-6 py-4">Single Entry visa </td>
                        <td class="px-3 sm:px-6 py-4">Regular Service </td>
                        <td class="px-3 sm:px-6 py-4">$60.00</td>
                    </tr>
                    <tr class="bg-white border-b ">
                        <td class="px-3 sm:px-6 py-4">Single Entry visa</td>
                        <td class="px-3 sm:px-6 py-4">Expedited Service </td>
                        <td class="px-3 sm:px-6 py-4">$100.00</td>
                    </tr>
                    <tr class="bg-white border-b ">
                        <td class="px-3 sm:px-6 py-4">Multiple Entry visa </td>
                        <td class="px-3 sm:px-6 py-4">Regular Service </td>
                        <td class="px-3 sm:px-6 py-4">$200.00</td>
                    </tr>
                    <tr class="bg-white border-b ">
                        <td class="px-3 sm:px-6 py-4">Multiple Entry visa</td>
                        <td class="px-3 sm:px-6 py-4">Expedited Service </td>
                        <td class="px-3 sm:px-6 py-4">$400.00 </td>
                    </tr>
                    <tr class="bg-white border-b ">
                        <td class="px-3 sm:px-6 py-4">Emergency Entry visa </td>
                        <td class="px-3 sm:px-6 py-4">Regular Service </td>
                        <td class="px-3 sm:px-6 py-4">$400.00</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="w-full sm:w-2/3 md:w-1/2 px-2 sm:px-0 my-4 text-center">
            <p class="text-sm font-semibold leading-7 tracking-wide">
                The purpose of your journey and other factors will determine the type
                of visa required under Namibia immigration law. As a visa applicant,
                you will need to establish that you meet all requirements to receive
                the category of visa for which you are applying.
            </p>
        </div>
    </div>

    <!-- ! Visa Type Ends -->


    <!-- ! Article 2 Starts -->


    <div
        class="w-full flex flex-col xl:flex-row justify-center items-center xl:items-start space-y-4 xl:space-y-0 space-x-0 xl:space-x-4 px-2 sm:px-0 my-10">
        <div class="max-w-xl bg-white border border-gray-200 rounded-lg shadow ">
            <div class="h-[250px] overflow-hidden">
                <img class="rounded-t-lg" src="{{ asset('file') }}/images/namibiavisaarticle2Image1.jpeg" alt="Namibia Visa" />
            </div>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 ">
                        Requirements for holders of Diplomatic, Official and
                        Laisser-Passer (United Nations, World Bank and International
                        Monetary Fund):
                    </h5>
                </a>
                <p class="mb-3 font-normal text-gray-700  text-sm leading-5 tracking-wide space-y-4">
                <p>
                    A duly filled and signed application form Valid passport with at
                    least 6 months validity from the date of entry and at least 3 or
                    more full blank pages; Two (2) colour 2 x 2 passport photographs
                    (should be identical) A self-addressed, pre-paid envelope from
                    DHL, USPS or FEDEX only with tracking.
                </p>
                <p>
                    Receipt of payment for the envelope must be attached Complete
                    flight itinerary An official letter from the applicant’s
                    diplomatic mission/organization. The letter should state the
                    full identity of the visa applicant and the grounds for him/her
                    holding a diplomatic/official passport (position within the
                    diplomatic mission or family links with an official), the full
                    details of the travel document, and the purposes and dates of
                    the stay in Namibia.
                </p>
                <p>
                    Please note: Applicants are strongly encouraged to provide an
                    email address in case additional documents are needed. All
                    documents must be written in English. Further information may be
                    requested depending on individual circumstances. Visitors with
                    tourist visas are not allowed to engage in any employment while
                    in the country. Work/Study/Research visa applications must be
                    sent to the Ministry of Home Affairs. Check their website for
                    more information. Here are the guidelines when travelling to and
                    from Namibia with children.
                </p>
                </p>
            </div>
        </div>
        <div class="max-w-xl bg-white border border-gray-200 rounded-lg shadow ">
            <div class="h-[250px] overflow-hidden">
                <img class="rounded-t-lg" src="{{ asset('file') }}/images/namibiavisaarticle2Image2.jpg" alt="Namibia Visa" />
            </div>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 ">
                        GENERAL INFORMATION ON REQUIRED VACCINES AND COVID-19 MEASURES:
                    </h5>
                </a>
                <p class="mb-3 font-normal text-gray-700  text-sm leading-5 tracking-wide space-y-4">
                <p>
                    COVID 19 Measures Summary for International Travelers The Yellow
                    Fever vaccination is required only if you travel to these
                    countries prior to traveling  to Namibia: List of Countries.
                </p>
                <p>
                    How Long Does It Take? The processing time is a minimum of 3
                    working days after the application is submitted but incomplete
                    forms and requirements may delay the process. Visa applications
                    should be submitted between 09:00 and 11:00 am and pick up is
                    3:00-4:00 pm. All visas are processed around the date the
                    application forms are received and will be valid for 3
                    months. Do not apply for the visa more than 3 months in advance
                    of the planned travel date.
                </p>
                <p>
                    What Do I Do with the Completed Documents? Once you have all the
                    required documents, please place them in one envelope and mail
                    them to the following address: The Embassy of the Republic of
                    Namibia in Washington, DC Attn: Consular Section 1605 New
                    Hampshire Avenue, NW Washington, DC 20009
                </p>
                </p>
            </div>
        </div>
        <div class="max-w-xl bg-white border border-gray-200 rounded-lg shadow ">
            <div class="h-[250px] overflow-hidden">
                <img class="rounded-t-lg" src="{{ asset('file') }}/images/namibiavisaWorkPermit.jpg" alt="Namibia Visa" />
            </div>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900  uppercase">
                        work permit citizenship
                    </h5>
                </a>
                <p class="mb-3 font-normal text-gray-700  text-sm leading-5 tracking-wide space-y-4">
                <p>
                    Requirements for the Temporary Work or Study Permit All
                    applicants must submit the following:
                </p>
                <p>
                    Duly filled and signed application form (3-1/0001) [PDF]
                    Representation by Employer form (3-1/0002) [PDF] Radiological
                    Report form (3-1/0004) [PDF] Medical Certificate form (3-1/0003)
                    [PDF] Two (2) Passport size photos of applicant and accompanying
                    spouse Highest Educational Qualifications and/or Certificates
                    Previous Work Reference or Certificates of Service Police
                    Clearance Certificate from Country of Origin (For applicants 18
                    and older) If married to a Namibian Citizen, Marriage Contract
                    If position was advertised, a copy of Advertisement A letter
                    from Namibian Company/Institution A letter from
                    Company/Institution from which you are presently employed with
                    Copy of valid Passport Deed of Surety application form
                    (3-1/0005) [PDF] Note:
                </p>
                <p>
                    An official translator must translate all documents or
                    certificates into English. All forms must be duly filled
                    (clearly and legibly). Submission of incomplete requirements
                    will result to delay in application. All permits are subject to
                    the approval of the Ministry of Home Affairs before entering
                    Namibia; therefore applicants who acquired permits from the
                    other Namibian Ministries or Institutions are still required to
                    get an approval from the Ministry of Home Affairs for it to be
                    acknowledged.
                </p>
                <p>
                    How long does it take? In general the process takes 2 – 4
                    months. However, the speed at which your papers will be
                    processed depends greatly on your ability to furnish the Embassy
                    with all the proper documents. It is always recommended that you
                    send your application material far in advance of when your need
                    them and that you make copies of your records before sending
                    them through the mail. All application forms must be sent
                    directly to the Ministry of Home Affairs www.mha.gov.na.
                </p>
                </p>
            </div>
        </div>
    </div>

    <!-- ! Article 2 Ends -->

    <!-- ! Namibia Citizenship Article Starts -->


    <div class="w-full flex justify-center items-center my-20">
        <div class="w-full px-2 sm:px-0 sm:w-5/6 md:4/6 lg:w-3/6 bg-white border border-gray-200 rounded-lg shadow ">
            <div class="h-[300px] overflow-hidden">
                <img class="rounded-t-lg h-full w-full object-cover" src="{{ asset('file') }}/images/namibiavisaCitizenship.jpg"
                    alt="Namibia Visa" />
            </div>
            <div class="p-5">
                <h5
                    class="my-7 text-lg sm:text-xl md:text-2xl lg:text-3xl xl:text-4xl leading-relaxed text-blue-700 font-bold tracking-tight  uppercase w-full text-center">
                    Namibia citizenship
                </h5>
                <p class="mb-3 font-normal text-gray-700  text-sm lg:text-base leading-8 tracking-wide space-y-4">
                <p>
                    Who are allowed to hold Dual Namibian Citizenship? Dual
                    Citizenship for Namibia [PDF]
                </p>
                <p>
                    Requirements for the Namibian Citizenship: All applicants must
                    submit the following:
                </p>
                <p>Duly filled and signed application form [PDF]
                    A self-addressed, pre-paid envelope from DHL, FEDEX or United States Postal Service only with
                    tracking. Receipt of payment for the envelope must be attached. Please do NOT send UPS envelopes.
                    By Decent
                </p>
                <p>Application form
                    Certified copy of Birth Certificate
                    Certified copy of Namibian ID (if held)
                    Certified copy of parent’s Birth Certificates
                    Certified copy of parents’ ID (if held)
                    Certified copy of Repatriation Form (if held)
                    Letter from SWAPO Office (if child in exile)
                    By Descent: Duplicate</p>
                <p>Namibian ID (Original and certified copy)
                    Affidavit stating what happened to the original document
                    By Marriage (10 year period of being a legal resident)</p>
                <p>Application form
                    Certified copy of passport
                    Certified copy of Marriage Certificate
                    Certified copy of Birth Certificate
                    Certified copy of Namibian ID (if held)
                    Certified copy of Namibian spouse’s Birth Certificate
                    Certified copy of spouse’s ID (if held)
                    Letter from the Receiver of Revenue confirming period of residence
                    Police Clearance Certificate from country of origin, last country of residence, Namibian police
                    Affidavit stating motivation for application from applicant and spouse
                    By Marriage: Duplicate</p>
                <p>Namibian ID (Original and certified copy)
                    Affidavit stating what happened to the original document By Naturalisation 10 years of ordinary
                    residence in Namibia by virtue of a permanent residence permit (refer to Article 4(5) of the
                    Constitution with section 5 of the Namibian Citizenship Act)</p>
                <p>Application form
                    Certified copy of Permanent Residence Permit
                    Certified copy of Birth Certificate
                    Certified copy of Namibian ID (if held)
                    Letter from the Receiver of Revenue confirming period of residence
                    Police Clearance Certificate from country of origin, last country of residence, Namibian police</p>
                <p>Medical report
                    Affidavit stating motivation for application from applicant
                    Job description of applicant (and spouse if applicable)
                    Two character references (known for a period of longer than two years)
                    By Naturalisation: Duplicate</p>
                <p>Namibian ID (Original and certified copy)
                    Affidavit stating what happened to the original document
                    By Registration</p>
                <p>We have a Swart Case copy of Old Swart ID indicate country of birth and date of entry. Police
                    certificate of conduct from Namibia and country of origin Herero – Bostwana Renunciation letter of
                    Botswana citizenship Riemvasmakers & Topnaars Letter from the Riemvasmaak committee Copy of old SWA
                    ID (if in possession of one) Namibia Police Certificate of Conduct Angolan They Qualify For Trp and
                    Prp Copy of old SWA ID indicate country of birth and date of entry Namibia police certificate of
                    conduct</p>
                <p>What do I do with the completed documents?
                    Once you have all the required documents, please place them in one envelope and mail them to the
                    following address:</p>
                <p>The Embassy of the Republic of Namibia in Washington, DC
                    Attn: Consular Section
                    1605 New Hampshire Avenue, NW
                    Washington, DC 20009</p>
                <p>How long does it take?
                    The processing time is not certain and would depend on the Ministry of Home Affairs. Make sure to
                    write an email address on the application form so that the Ministry can contact the applicant
                    directly</p>

                </p>
            </div>
        </div>
    </div>

    <!-- ! Namibia Citizenship Article Ends -->
@endsection

