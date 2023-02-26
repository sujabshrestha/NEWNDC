<html>

<head></head>

<body>
    <div class="PrintSectionPrePrint" id="PrintDiv">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <style type="text/css">
            body {
                font-size: 14px;
                font-family: "Times New Roman", Times, serif;
            }

            .table td,
            .table th {
                padding: .3rem;
            }

            .table-borderless td,
            .table-borderless th { 
                border: none;
            }

            .table-bordered td,
            .table-bordered th {
                border: 1px solid #9a9a9a;
            }

            .B {
                font-weight: bold;
            }

            .U {
                text-decoration: underline;
            }

            .C {
                text-align: center;
            }

            @font-face {
                font-family: 'Forte';
                src: url('http://localhost/ndc/style/fonts/ForteMT.woff2') format('woff2'),
                    url('http://localhost/ndc/style/fonts/ForteMT.woff') format('woff');
                font-weight: normal;
                font-style: italic;
                font-display: swap;
            }
        </style>

        <div class="row"
            style="background-color: #dedede !important; -webkit-print-color-adjust: exact; margin-top: 10px;">
            <div class="col-md-2">
                <p
                    style="font-family: 'Forte';font-size: 50px;padding: 0px;/* width: 83px; */text-align: right; color:red;">
                    ndc</p>
            </div>
            <div class="col-md-10 text-left ml-0 mr-0 text-bold">
                <h5><b style="font-size: 40px;">Nepal Development Consultants</b></h5><strong>
                    <hr style="margin-top: 5px;margin-bottom: 5px;">
                </strong>
                <h5 style="font-size: 30px;"><b>Consulting Engineers [Valuer's &amp; Designer]</b></h5>
                <p style="margin-bottom:10px;">{{ returnSiteSetting('address') ?? 'Sankhamul-31,Ktm' }}
                    Tel:{{ returnSiteSetting('primary_phone') ?? '01-5242605' }},
                    {{ returnSiteSetting('secondary_phone') ?? '01-5242605' }}, Email:
                    {{ returnSiteSetting('primary_email') ?? 'ndcaccount@yahoo.com' }}
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <label style="font-size:13px;">{{$sitevisit->valuation_assignment_no ?? 'N/A'}}</label></p>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12" style="margin-top: 5px;margin-bottom: 5px;">
                <b>Date :</b> 2078/03/14 <br> {{ $sitevisit->bank->name ?? ''}} <br> {{ $sitevisit->branch->title ?? 'N/A'}} Branch<br>
                <div class="text-center" style="margin-top:-80px;">
                    <h2 class="U B">Pre Valuation Report Summary</h2>
                    <h3>({{ $sitevisit->valuation_type == "Land" ? 'Land' : 'Land & Building'}})</h3>
                </div>
            </div>
            <div class="col-md-12">
                <table class="table table-borderless mb-0">
                    <tbody>
                        <tr>
                            <td colspan="2">Dear Sir,<br> We are submitting the preliminary valuation/revaluation
                                report of the properties which is intended to be mortgaged to the Bank by:</td>
                        </tr>
                        <tr>
                            <td colspan="2"> <b>Client : {{ $sitevisit->client->client_name ?? 'N/A'}}</b></td>
                        </tr>
                        <tr>
                            <td colspan="2"> <b>{{ $sitevisit->client->address ?? 'N/A'}}</b></td>
                        </tr>
                        <tr>
                            <td colspan="2">We have taken all care to ascertain Fair Market &amp; Distress Value of
                                the following properties as directed by the client :</td>
                        </tr>
                        <tr>
                            <td colspan="2"> <b>Owner of Property : {{ $sitevisit->client->owner->owner_name ?? 'N/A'}}</b></td>
                        </tr>
                        <tr>
                            <td colspan="2"> <b>Address of Property as per title deed : {{ $sitevisit->valuationDetails->address_of_land ?? 'N/A' }}</b></td>
                        </tr>
                        <tr>
                            <td colspan="2"> <b>Present address of property : {{$sitevisit->valuationDetails->location_of_land ?? 'N/A'}}</b></td>
                        </tr>
                        <tr>
                            <td colspan="2">We hereby declare and certify that:</td>
                        </tr>
                        <tr>
                            <td width="20">1. </td>
                            <td>We have physically inspected, verified &amp; measured the properties in the presence of
                                the client/representative of the client on {{ $sitevisit->preparation_date->format('Y-m-d') }} (B.S)</td>
                        </tr>
                        <tr>
                            <td width="20">2. </td>
                            <td>We also certify that no individual in our firm/company has any financial interest in the
                                said property and client or the client’s business.</td>
                        </tr>
                        <tr>
                            <td width="20">3. </td>
                            <td>The conclusion in this report are our unbiased considered opinion of Fair Market Value
                                and Distress Value of the subject assets as of the date of valuation which is
                                {{ $sitevisit->preparation_date->format('Y-m-d') }}(B.S)</td>
                        </tr>
                        <tr>
                            <td width="20">4. </td>
                            <td>The area of the land as per Land Ownership Registration Certificate (LORC) for Plot No:-
                               {{ $sitevisit->lalpurjaDatas->implode(" & ",'plot_no') ?? 'N/A'}} ({{ $sitevisit->valuationDetails->total_rapd_as_lalpurja ?? 'N/A'}}) {{ $sitevisit->valuationDetails->total_sqm_as_lalpurja ?? 'N/A'}} sqm ({{ $sitevisit->valuationDetails->total_anna_as_lalpurja ?? 'N/A'}} Anna) &amp; as per measurement is({{ $sitevisit->valuationDetails->total_rapd_as_measurement ?? 'N/A'}})
                                {{ $sitevisit->valuationDetails->total_sqm_as_measurement ?? 'N/A'}} sqm ({{ $sitevisit->valuationDetails->total_anna_as_measurement ?? 'N/A'}} Anna) and net area considered for valuation is ({{ $sitevisit->deduction->rAPDAPConsideration ?? 'N/A'}}) {{ $sitevisit->deduction->sqMAPConsideration ?? 'N/A'}} sqm
                                ({{ $sitevisit->deduction->annaAPConsideration ?? 'N/A'}} Anna.)</td>
                        </tr>
                        <tr>
                            <td width="20">5. </td>
                            <td>Width at the narrowest part of the plot {{ $sitevisit->lalpurjaDatas->implode(" & ",'plot_no') ?? 'N/A'}} is {{ $sitevisit->valuationDetails->narrowestPartOfLand ?? 0}} ( if less than 6M , The
                                Valuer Should certify that a Building can be constructed as per the Building
                                Construction code applicable in the particular area .)</td>
                        </tr>
                        <tr>
                            <td width="20">6. </td>
                            <td>Commercial Rate Rs. <b> {{$sitevisit->rateofland->commercialValueOfLand ?? 'N/A'}}</b> per Anna and Government Rate Rs.
                                <b>{{$sitevisit->rateofland->govValueOfLand ?? 'N/A'}}</b> Anna</td>
                        </tr>
                        <tr>
                            <td width="20">7. </td>
                            <td>The access to the site by {{$sitevisit->valuationDetails->access_in_the_blue_print ? 'N/A'}} wide Road on {{ $sitevisit->valuationDetails->facing }} which is
                                shown in blueprint /other legal documnts and the access Road at site is {{ $sitevisit->valuationDetails->road_size }} wide {{ $sitevisit->valuationDetails->type_of_access }} 
                                road on {{ $sitevisit->valuationDetails->facing }} on our physical verification.</td>
                        </tr>
                        <tr>
                            <td width="20">8. </td>
                            <td>ROW (Right of Way) of {{ $sitevisit->valuationDetails->right_of_way}} in {{ $sitevisit->valuationDetails->facing }} has been deducted as per Fundamental Guideline issued
                                by Ministry of of Federal Affairs and Local Development regarding town development, town
                                planning and building construction, 2072.</td>
                        </tr>
                        <tr>
                            <td width="20">9. </td>
                            <td>The details of building construction with {{ $sitevisit->valuationDetails->frame_structure}} ({{ $sitevisit->valuationDetails->no_of_floors}}) and of
                                {{ $sitevisit->valuationDetails->property_usage}} having plinth area 495.51 sq.ft. &amp; Total Building Area {{ $sitevisit->valuationDetails->totalBuildingAreaSqF}} sq. ft.
                                within Metropolitan/Municipal permission and Building is {{$sitevisit->landbasedDatas()->take(1)->building_age}} Years Old.</td>
                        </tr>
                        <tr>
                            <td width="20">10. </td>
                            <td>Does the collateral fall under watch list category? :- ({{ $sitevisit->valuationDetails->any_collateral_fall}})</td>
                        </tr>
                        <tr>
                            <td width="20">11. </td>
                            <td>Comments in case of qualification/remarks : a) </td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-borderless mb-0">
                    <tbody>
                        <tr>
                            <td colspan="2">12.</td>
                        </tr>
                    </tbody>
                </table>
                <div style="margin-left:32px;  margin-top: -30px;">
                    <b>A) FAIR MARKET VALUE OF THE ASSET :</b>
                    <table class="table table-bordered mb-0" style="width:95%; margin-left:20px;">
                        <tbody>
                            <tr>
                                <td>A. Land (Plot No.)</td>
                                <td rowspan="2">{{ $sitevisit->lalpurjaDatas->implode(" & ",'plot_no') ?? 'N/A'}}</td>
                                <td>Nrs. {{ number_format($sitevisit->rateofland->fairMarketValueOfLand,2) ?? 0 }}</td>
                            </tr>
                            <tr>
                                <td>B. Value of Building (FMV)</td>
                                <td>Nrs. {{ number_format($sitevisit->valuationDetails->totalBuildingFairMarketValue,2)}}</td>
                            </tr>
                            <tr>
                                <td colspan="2">Fair Market Value of Property is</td>
                                <td>Nrs. {{ number_format($sitevisit->rateofland->fairMarketValueOfLand+$sitevisit->valuationDetails->totalBuildingFairMarketValue,2)}}</td>
                            </tr>
                            <tr>
                                <td colspan="3"><b>In word:- Fifteen lakh ninety two thousand rupees Only/-</b></td>
                            </tr>
                        </tbody>
                    </table>
                    <b>B) DISTRESS VALUE OF THE ASSETS :</b>
                    <table class="table table-bordered mb-0" style="width:95%; margin-left:20px;">
                        <tbody>
                            <tr>
                                <td>A. Land (Plot No.)</td>
                                <td rowspan="2">{{ $sitevisit->lalpurjaDatas->implode(" & ",'plot_no') ?? 'N/A'}}</td>
                                <td>Nrs. {{ number_format($sitevisit->rateofland->distressValueOfLand,2) ?? 0 }}</td>
                            </tr>
                            <tr>
                                <td>B. Value of Building</td>
                                <td>Nrs. {{ number_format($sitevisit->valuationDetails->totalBuildingDistressValue,2)}}</td>
                            </tr>
                            <tr>
                                <td colspan="2">The Distress Value of the Property is</td>
                                <td>Nrs. {{ number_format($sitevisit->rateofland->distressValueOfLand+$sitevisit->valuationDetails->totalBuildingDistressValue,2)}}</td>
                            </tr>
                            <tr>
                                <td colspan="3"><b>In word:- Fifteen lakh ninety two thousand rupees Only/-</b></td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-borderless mb-0">
                        <tbody>
                            <tr>
                                <td>
                                    All relevant calculation and documents are attached herewith for the reference and
                                    record which constitute integral part of this valuation report.
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="row">
                        <div class="col-md-9" style="text-align:left; margin-top:0px;">
                            This Pre valuation report is only for banking process, not for loan disbursement. Our
                            consultant will not be responsible if loan is disburse without final valuation report. This
                            pre
                            report is considered voidable without full valuation report &amp; the validity of this
                            report is only
                            for three months.
                        </div>

                        <div class="col-md-3" style="text-align:right; margin-top:-10px;">
                            ......................................................<br>
                            Er. Sanjay Mahato<br>
                            (Managing Director)<br>
                            NEC No {3700 Civil "A"}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="PageBreak"></div>
        <div class="row">
            <div class="col-md-12">
                <br>
                <table class="table table-borderless mb-0">
                    <tbody>
                        <tr>
                            <td colspan="4" style="text-align:center;"><b>
                                    <h4 class="U">Valuation Summary Report</h4>
                                </b></td>
                        </tr>
                        <tr>
                            <td width="23%">Valuation Date</td>
                            <td width="30">:</td>
                            <td>2078/03/14 (B.S)</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Valuer Name</td>
                            <td>:</td>
                            <td>Nepal Development Consultants</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Borrower Name</td>
                            <td>:</td>
                            <td>Mrs. Uma Kumari Shrestha</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Current Property Owner Name </td>
                            <td>: </td>
                            <td>Mrs. Uma Kumari Shrestha </td>
                            <td rowspan="4" width="450">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td colspan="5"><strong>Four Wall Boundary of the Property :</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Plot No.</td>
                                            <td>East</td>
                                            <td>West</td>
                                            <td>North</td>
                                            <td>South</td>
                                        </tr>
                                        <tr>
                                            <td> 441 &amp; 443</td>
                                            <td> 442 &amp; 444</td>
                                            <td> Motar Bato Tatha Raj Kulo Bato &amp; Motar Bato Tatha Raj Kulo Bato
                                            </td>
                                            <td> 443 &amp; 444</td>
                                            <td> 442 &amp; 441</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>Property Address</td>
                            <td>:</td>
                            <td>Ward No:09(Ka) Badegaun VDC(Current Ward No:-14, Godawari Municipality)</td>
                        </tr>
                        <tr>
                            <td>Plot No.</td>
                            <td>:</td>
                            <td> 441 &amp; 443</td>
                        </tr>
                        <tr>
                            <td>VDC/Municipality</td>
                            <td>:</td>
                            <td>Municipality</td>
                        </tr>
                        <tr>
                            <td>District</td>
                            <td>:</td>
                            <td>Lalitpur</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered mb-0">
                    <tbody>
                        <tr>
                            <td>Valuation For</td>
                            <td colspan="2">
                                ❪ &nbsp; ❫ Vacant Land   ❪ ● ❫ Land &amp; Building   ❪ &nbsp; ❫ Readymade House <br> ❪
                                &nbsp; ❫ Apartments/Duplex   ❪ &nbsp; ❫ Construction/Extension/Renovation
                            </td>
                        </tr>
                        <tr>
                            <td>Motorable Access</td>
                            <td>
                                ❪ ● ❫ Yes   ❪ &nbsp; ❫ No
                            </td>
                            <td>12'-0" wide Earthen Road (Dead End) on East &amp; 13'-0"</td>
                        </tr>
                        <tr>
                            <td>River / stream near property</td>
                            <td colspan="2">
                                ❪ ● ❫ Yes   ❪ &nbsp; ❫ No
                            </td>
                        </tr>
                        <tr>
                            <td>Heritage sites near property</td>
                            <td colspan="2">
                                ❪ &nbsp; ❫ Yes   ❪ ● ❫ No
                            </td>
                        </tr>
                        <tr>
                            <td>Property Type</td>
                            <td colspan="2">
                                ❪ ● ❫ Residential   ❪ &nbsp; ❫ Commercial   ❪ &nbsp; ❫ Agricultural   ❪ &nbsp; ❫ Others
                            </td>
                        </tr>
                        <tr>
                            <td>Property Ownership Type</td>
                            <td colspan="2">
                                ❪ ● ❫ Single   ❪ &nbsp; ❫ Joint   ❪ &nbsp; ❫ Company   ❪ &nbsp; ❫ Individual (Joint
                                Name)
                            </td>
                        </tr>
                        <tr>
                            <td>Ownership transferred Through</td>
                            <td colspan="2">
                                ❪ &nbsp; ❫ Bakash Pattra   ❪ &nbsp; ❫ Chod Pattra   ❪ &nbsp; ❫ Anshbanda   ❪ ● ❫
                                Rajinama
                            </td>
                        </tr>
                        <tr>
                            <td>Ownership Transferred Date</td>
                            <td colspan="2">2075/01/05</td>
                        </tr>
                        <tr>
                            <td>Hold Type</td>
                            <td colspan="2">Free Hold</td>
                        </tr>
                        <tr>
                            <td>Residual Age</td>
                            <td colspan="2">50 Years</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table table-bordered mt-0 mb-0">
                    <tbody>
                        <tr>
                            <th></th>
                            <th>Area (Aana)</th>
                            <th>Area (Sq. feet.)</th>
                            <th>Commercial</th>
                            <th>Gov Rate</th>
                            <th>Weightage</th>
                            <th>(FMV)</th>
                            <th>Distress Value (DV)</th>
                        </tr>
                        <tr>
                            <td>Land Value</td>
                            <td>1.58</td>
                            <td>541.89</td>
                            <td>12,00,000.00</td>
                            <td>2,50,000.00</td>
                            <td>Commerical Rate. 60.00%</td>
                            <td>12,95,600.00</td>
                            <td>12,95,600.00</td>
                        </tr>
                        <tr>
                            <td>Building Value</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Government Rate: 40.00%</td>
                            <td>2,97,306.00</td>
                            <td>2,97,306.00</td>
                        </tr>
                        <tr>
                            <td>Apartment Value</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Construction Value</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="3">Extension / Renovation Value</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th colspan="6">TOTAL VALUE</th>
                            <th>15,92,000.00</th>
                            <th>15,92,000.00</th>
                        </tr>
                    </tbody>
                </table>

                <h4 class="B">Construction Progress Schedule</h4>
                <table class="table table-bordered mt-0 mb-0">
                    <tbody>
                        <tr>
                            <td>Phasewise Construction Activities</td>
                            <td>Value of Construction</td>
                        </tr>
                        <tr>
                            <td>Ground Floor (495.51 sq.ft.) @ 600.00</td>
                            <td>2,97,306.00</td>
                        </tr>
                        <tr>
                            <td>First Floor (495.51 sq.ft.) @ 0.00</td>
                            <td>0.00</td>
                        </tr>
                        <tr>
                            <td>Second Floor (495.51 sq.ft.) @ 0.00</td>
                            <td>0.00</td>
                        </tr>
                        <tr>
                            <td>Third Floor (235.40 sq.ft.) @ 0.00</td>
                            <td>0.00</td>
                        </tr>
                        <!-- <tr>
                <td>Total Value of Building</td>
                <td>297306.00</td>
              </tr> -->
                        <tr>
                            <td>Sanitary ,Pulumbing Fitting @ of 0% of Total Value</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>Electricity Work @ 0 % of Total Value</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>Net Total Value of Building</td>
                            <td>2,97,306.00</td>
                        </tr>
                        <tr>
                            <td>Depriciation of Building is 0 % @ 0 Yrs=0%)</td>
                            <td>0.00</td>
                        </tr>
                        <tr>
                            <td>Total Fair Market Value of Building</td>
                            <td>2,97,306.00</td>
                        </tr>
                        <tr>
                            <td>Total Distress Value of Building</td>
                            <td>2,97,306.00</td>
                        </tr>
                        <!-- <tr>
            <td>Total Value of Land and Building (FMV)</td>
            <td>1592906.00</td>
          </tr>
          <tr>
          <th>Total Value of Land and Building (DV)</th>
          <th>1592906.00</th>
        </tr> -->
                    </tbody>
                </table>
                <table class="table table-borderless mb-0 mt-0">
                    <tbody>
                        <tr>
                            <td>
                                <ol style="margin-left:15px; padding:0px; margin-bottom:0px;">
                                    <li>ROW (Right of Way) has been considered (deducted from the area) as per the rules
                                        of government.</li>
                                    <li>The property does not have any danger of flood &amp; land slide</li>
                                    <li>Statements of fact are true and correct</li>
                                    <li>We have no interest in the transaction of property</li>
                                    <li>An inspection of the property has been done.</li>
                                    <li>The property does not have any issues related to access, ownership,
                                        saleability,etc. based on the review of the required land ownership documents,
                                        blue print, tansfer document and as verified by us with the respective Land
                                        Revenue (Malpot) Office.</li>
                                </ol>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="col-md-12">
                    <h5><strong>As a collateral security for the Banking Facilities, the property is</strong></h5>
                </div>
                <div class="col-md-12">
                    <table class="table table-bordered mt-0 mb-0" style="Width:50%">
                        <tbody>
                            <tr>
                                <td width="250">❪ ● ❫ Recommended</td>
                                <td width="250">❪ &nbsp; ❫ Not Recommended</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- <br><br><br><br> All relevant calculation and documents are attached herewith for the reference and record which constitute integral part of this valuation report.<br><br>
      Yours truly<br><br>
      <p>This Pre valuation report is only for banking process, not for loan disbursement. Our consultant will not be responsible if loan is disburse without final valuation report. This pre report is considered voidable without full valuation report & the validity of this report is only for three months.</p> -->
                    <p style="text-align:right; margin-top:-50px;">
                        <img src="{{asset('backendfiles/sign/sign123.png')}}" alt="sign">
                        Er .Sanjay Mahato<br>
                        (Managing Director)<br>
                        NEC No : { 3700 Civil " A "}<br>
                    </p>
                </div>
            </div>
        </div>

        <style type="text/css">
            .table td,
            .table th {
                padding: .2rem;
            }

            @media print {

                html,
                body,
                div,
                span,
                applet,
                object,
                iframe,
                p,
                blockquote,
                pre,
                a,
                abbr,
                acronym,
                address,
                big,
                cite,
                code,
                del,
                dfn,
                em,
                font,
                ins,
                kbd,
                q,
                s,
                samp,
                small,
                strike,
                strong,
                sub,
                sup,
                tt,
                var,
                dl,
                dt,
                dd,
                ol,
                ul,
                li,
                fieldset,
                form,
                label,
                legend,
                table,
                caption,
                tbody,
                tfoot,
                thead,
                tr,
                th,
                td {
                    font-size: 18px;
                    font-family: "Times New Roman", Times, serif;
                }

                h1,
                h2,
                h3,
                h4,
                h5,
                h6 {
                    font-size: 18pt;
                }

                .bank {
                    font-size: 24px;
                }

                .table-bordered td,
                .table-bordered th {
                    border-color: #9a9a9a !important;

                    -webkit-print-color-adjust: exact;
                }

                .table thead tr td,
                .table tbody tr td {

                    border-color: #9a9a9a !important;

                    -webkit-print-color-adjust: exact;
                }

                .table td,
                .table th {
                    padding: .2rem;
                }

                .PageBreak {
                    page-break-before: always;
                }
            }
        </style>
    </div>
</body>

</html>
