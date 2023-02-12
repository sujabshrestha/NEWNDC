<html>

<head></head>

<body>
    <div class="PrintSectionPrePrint" id="PrintDiv">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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

        <div class="row" style="background-color: #dedede !important; -webkit-print-color-adjust: exact; margin-top: 10px;">
            <div class="col-md-2">
                <p style="font-family: 'Forte';font-size: 50px;padding: 0px;/* width: 83px; */text-align: right; color:red;">ndc</p>
            </div>
            <div class="col-md-10 text-left ml-0 mr-0 text-bold">
                <h5><b style="font-size: 40px;">{{ returnSiteSetting('title') ?? 'Nepal Development Consultants'}}</b></h5><strong>
                    <hr style="margin-top: 5px;margin-bottom: 5px;">
                </strong>
                <h5 style="font-size: 30px;"><b>Consulting Engineers [Valuer's & Designer]</b></h5>
                <p style="margin-bottom:10px;">{{returnSiteSetting('address') ?? 'Sankhamul-31,Ktm'}} Tel:{{returnSiteSetting('primary_phone') ?? '01-5242605'}}, {{returnSiteSetting('secondary_phone') ?? '01-5242605'}}, Email: {{returnSiteSetting('primary_email') ?? 'ndcaccount@yahoo.com'}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label style="font-size:13px;"> {{$sitevisit->registration_id ?? 'registration_id'}}</label></p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12" style="margin-top: 20px;">
                <div style="float:left">
                    <b><span class="bank">{{ $sitevisit->bank->name ?? ''}}</span></b>
                    <br>
                    {{ $sitevisit->branch ?? 'N/A'}} Branch
                </div>
                <div style="float:right"> <b style="text-align:right;">Date:- 2078/03/14 (B.S)</b></div>
            </div>
        </div>
        <div class="row" style="margin-top: 20px;margin-bottom: 20px;">
            <div class="col-md-12 text-center">
                <h4 class="U B">Preliminary Valuation Report</h4>
                <h4>{{ $sitevisit->valuation_type == "Land" ? 'Land' : 'Land & Building'}}</h4>
            </div>
        </div>
        <div class="col-md-12">
            <h4>1 Detail of Client</h4>
        </div>
        <div class="col-md-12">
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <td width="30"></td>
                        <td width="200"><b>Name</b></td>
                        <td class="B" width="30"><b>:</b></td>
                        <td class="U B">{{ $sitevisit->client->client_name ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <td width="30"></td>
                        <td width="200">Address</td>
                        <td width="30"><b>:</b></td>
                        <td>{{ $sitevisit->client->address ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <td width="30"></td>
                        <td width="200">District</td>
                        <td class="B" width="30"><b>:</b></td>
                        <td>{{ $sitevisit->client->district ?? 'N/A'}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-12">
            <h4>2 Detail of Property Owner</h4>
        </div>
        <div class="col-md-12">
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <td width="30"></td>
                        <td width="200"><b>Name</b></td>
                        <td class="B" width="30"><b>:</b></td>
                        <td class="B U">{{ $sitevisit->client->owner->owner_name ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <td width="30"></td>
                        <td width="200">Address</td>
                        <td width="30">:</td>
                        <td>{{ $sitevisit->client->owner->address ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <td width="30"></td>
                        <td width="200">District</td>
                        <td width="30">:</td>
                        <td>{{ $sitevisit->client->owner->district ?? 'N/A'}}</td>
                    </tr>

                </tbody>
            </table>
        </div>
        <div class="col-md-12">
            <h4>3 Plot No</h4>
        </div>
        <div class="col-md-12">
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <td width="30"></td>
                        <td width="200">Kitta No.</td>
                        <td width="30">:</td>
                        <td>
                            {{ $sitevisit->lalpurjaDatas->implode('kita_no') ?? 'N/A'}} </td>
                    </tr>
                    <tr>
                        <td width="30"></td>
                        <td width="200">Sheet No</td>
                        <td width="30">:</td>
                        <td>{{ $sitevisit->lalpurjaDatas->implode('sheet_no') ?? 'N/A'}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-12">
            <h4>4 Location of The Property</h4>
        </div>
        <div class="col-md-12">
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <td width="30"></td>
                        <td width="200"><b>Address :</b></td>
                        <td class="B" width="30">:</td>
                        <td class="B">{{$sitevisit->valuationDetails->location_of_land ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <td width="30"></td>
                        <td width="200">District</td>
                        <td width="30">:</td>
                        <td>{{$sitevisit->valuationDetails->district ?? 'N/A'}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-12">
            <h4>5 Total Area of the land</h4>
        </div>
        <div class="col-md-12">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th style="background-color: #dedede !important; -webkit-print-color-adjust: exact;" width="200">According to</th>
                        <th style="background-color: #dedede !important; -webkit-print-color-adjust: exact;">(R-A-P-D)</th>
                        <th style="background-color: #dedede !important; -webkit-print-color-adjust: exact;">(Square M)</th>
                        <th style="background-color: #dedede !important; -webkit-print-color-adjust: exact;">(Square Feet)</th>
                        <th style="background-color: #dedede !important; -webkit-print-color-adjust: exact;">(Anna)</th>
                    </tr>
                    <tr>
                        <td>Lalpurja</td>
                        <td>{{ $sitevisit->valuationDetails->total_rapd_as_lalpurja ?? 'N/A'}}</td>
                        <td>{{ $sitevisit->valuationDetails->total_sqm_as_lalpurja ?? 'N/A'}}</td>
                        <td>{{ $sitevisit->valuationDetails->total_sqf_as_lalpurja ?? 'N/A'}}</td>
                        <td>{{ $sitevisit->valuationDetails->total_anna_as_lalpurja ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <td>Measurement</td>
                        <td>{{ $sitevisit->valuationDetails->total_rapd_as_measurement ?? 'N/A'}}</td>
                        <td>{{ $sitevisit->valuationDetails->total_sqm_as_measurement ?? 'N/A'}}</td>
                        <td>{{ $sitevisit->valuationDetails->total_sqf_as_measurement ?? 'N/A'}}</td>
                        <td>{{ $sitevisit->valuationDetails->total_anna_as_measurement ?? 'N/A'}}</td>
                    </tr>
                    
                    <tr>
                       
                        <td>Deduction For Road</td>
                        <td>{{ $sitevisit->deduction->total_rapd_as_road ?? '0'}}</td>
                        <td>{{ $sitevisit->deduction->total_sqm_as_road ?? '0'}}</td>
                        <td>{{ $sitevisit->deduction->deductionOfRoadSqF ?? '0'}}</td>
                        <td>{{ $sitevisit->deduction->total_anna_as_road ?? '0'}}</td>
                    </tr>
                    <tr>
                        <td>Land Development ({{ $sitevisit->deduction->landDevelopmentPercent ?? 0 }}% @ of Total Land Area)</td>
                        <td>{{ $sitevisit->deduction->total_rapd_as_land_development ?? '0'}}</td>
                        <td>{{ $sitevisit->deduction->total_sqm_as_land_development ?? '0'}}</td>
                        <td>{{ $sitevisit->deduction->total_sqf_as_land_development ?? '0'}}</td>
                        <td>{{ $sitevisit->deduction->total_anna_as_land_development ?? '0'}}</td>
                    </tr>
                    <tr>
                        <td>Deduction For High Tension Line</td>
                        <td>{{ $sitevisit->deduction->total_rapd_as_high_tension_deduction ?? '0'}}</td>
                        <td>{{ $sitevisit->deduction->total_sqm_as_high_tension_deduction ?? '0'}}</td>
                        <td>{{ $sitevisit->deduction->deductionForHighTensionSqF ?? '0'}}</td>
                        <td>{{ $sitevisit->deduction->total_anna_as_high_tension_deduction ?? '0'}}</td>
                    </tr>
                    <tr>
                        <td>Deduction For Low Land</td>
                        <td>{{ $sitevisit->deduction->total_rapd_as_low_land_deduction ?? '0'}}</td>
                        <td>{{ $sitevisit->deduction->total_sqm_as_low_land_deduction ?? '0'}}</td>
                        <td>{{ $sitevisit->deduction->deductionForLowLandSqF ?? '0'}}</td>
                        <td>{{ $sitevisit->deduction->total_anna_as_low_land_deduction ?? '0'}}</td>
                    </tr>
                 
                   
                    <tr>
                        <td>Deduction For River</td>
                        <td>{{ $sitevisit->deduction->total_rapd_as_river_deduction ?? '0'}}</td>
                        <td>{{ $sitevisit->deduction->total_sqm_as_river_deduction ?? '0'}}</td>
                        <td>{{ $sitevisit->deduction->deductionForRiverSqF ?? '0'}}</td>
                        <td>{{ $sitevisit->deduction->total_anna_as_river_deduction ?? '0'}}</td>
                    </tr>                 
                    <tr>
                        <td>Boundry Correction({{  $sitevisit->deduction->deductionForBoundryCorrection ?? 0}}% @ of Total Land Area)</td>
                        <td>{{ $sitevisit->deduction->total_rapd_as_boundry_correction_deduction ?? '0'}}</td>
                        <td>{{ $sitevisit->deduction->total_sqm_as_boundry_correction_deduction ?? '0'}}</td>
                        <td>{{ $sitevisit->deduction->total_sqf_as_boundry_correction_deduction ?? '0'}}</td>
                        <td>{{ $sitevisit->deduction->total_anna_as_boundry_correction_deduction ?? '0'}}</td>
                    </tr>
                    
                    <tr>
                        <td>Irregular Shape / Sloppy Land ({{ $sitevisit->deduction->deductionForIrregularShapeSloppyLand ?? 0}}% @ of Total Land Area)</td>
                        <td>{{ $sitevisit->deduction->total_rapd_as_irregular_shape_deduction ?? '0'}}</td>
                        <td>{{ $sitevisit->deduction->total_sqm_as_irregular_shape_deduction ?? '0'}}</td>
                        <td>{{ $sitevisit->deduction->total_sqf_as_irregular_shape_deduction ?? '0'}}</td>
                        <td>{{ $sitevisit->deduction->total_anna_as_irregular_shape_deduction ?? '0'}}</td>
                    </tr>
                    <tr>
                        <th style="background-color: #dedede !important; -webkit-print-color-adjust: exact;">Consideration</th>
                        <th style="background-color: #dedede !important; -webkit-print-color-adjust: exact;">{{ $sitevisit->deduction->rAPDAPConsideration ?? 'N/A'}}</th>
                        <th style="background-color: #dedede !important; -webkit-print-color-adjust: exact;">{{ $sitevisit->deduction->sqMAPConsideration ?? 'N/A'}}</th>
                        <th style="background-color: #dedede !important; -webkit-print-color-adjust: exact;">{{ $sitevisit->deduction->sqFAPConsideration ?? 'N/A'}}</th>
                        <th style="background-color: #dedede !important; -webkit-print-color-adjust: exact;">{{ $sitevisit->deduction->annaAPConsideration ?? 'N/A'}}</th>
                    </tr>
                </tbody>
            </table> 
        </div>

        <div class="PageBreak"></div>
        <br><br>

        <div class="col-md-12">
            <h4>6 Four Boundaries of Land</h4>
        </div>
        <div class="col-md-12">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td width="30">SNo</td>
                        <td>Plot No.</td>
                        <td>East</td>
                        <td>West</td>
                        <td>North</td>
                        <td>South</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td> 441 &amp; 443</td>
                        <td> 442 &amp; 444</td>
                        <td> Motar Bato Tatha Raj Kulo Bato &amp; Motar Bato Tatha Raj Kulo Bato</td>
                        <td> 443 &amp; 444</td>
                        <td> 442 &amp; 441</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="col-md-12">
            <h4>7 Rate of the Land (Per Anna)</h4>
        </div>
        <div class="col-md-12">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td width="200">Market Rate</td>
                        <td>Nrs. {{$sitevisit->rateofland->perAnnaAPMarketRate ?? 'N/A'}}</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Land Revenue Office</td>
                        <td>Nrs. {{$sitevisit->rateofland->perAnnaAPGovRate ?? 'N/A'}}</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Weghted Fair Market Rate</td>
                        <td>Nrs. {{$sitevisit->rateofland->perAnnaAPFairRate ?? 'N/A'}}</td>
                        <td>MR {{$sitevisit->bank->fair_market_rate ?? 0}}% + GR {{$sitevisit->bank->governmant_rate ?? 0}}%</td>
                        {{-- "commercial_rate" => 90.0 --}}
                        {{-- @dd($sitevisit->bank); --}}
                    </tr>
                    <tr>
                        <td>Distress Rate</td>
                        <td>Nrs. {{$sitevisit->rateofland->perAnnaAPDistressRate ?? 'N/A'}}</td>
                        <td>100% Distress</td>
                        {{-- Need To Check DistressRate --}}
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-12">
            <h4>8 Total Value of Land</h4>
        </div>
        <div class="col-md-12">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td width="345">Commercial Value</td>
                        <td>Nrs. {{$sitevisit->rateofland->commercialValueOfLand ?? 'N/A'}}  </td>
                    </tr>
                    <tr>
                        <td>Weghted Fair Market Value</td>
                        <td>Nrs. {{$sitevisit->rateofland->fairMarketValueOfLand ?? 'N/A'}} </td>
                    </tr>
                    <tr>
                        <td>Distress Value</td>
                        <td>Nrs. {{$sitevisit->rateofland->distressValueOfLand ?? 'N/A'}}  </td>
                    </tr>
                </tbody>
            </table>
        </div>
        @if($sitevisit->valuation_type != "Land" && $sitevisit->buildingValuations->count() > 0)
   
        <div class="col-md-12">
            <h4>9 Total Value of Building</h4>
        </div>
        <div class="col-md-12">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Floor Name</th>
                        <th>Area (Sq.Ft)</th>
                        <th>Rate (Nrs)</th>
                        <th width="180">Amount (Nrs)</th>
                    </tr>
                    @foreach ($sitevisit->buildingValuations as $buildingValuation)
                    <tr>
                        <td>{{ $buildingValuation->floor ?? 'N/A'}}</td>
                        <td>{{ $buildingValuation->buildingarea_sqf ?? 'N/A'}}</td>
                        <td>{{ $buildingValuation->building_rate ?? 'N/A'}}</td>
                        <td>{{ $buildingValuation->building_amount ?? 'N/A'}}</td>
                    </tr>
                    @endforeach            
            
                           
                    <tr>
                        <td colspan="3">Total Value of Building</td>
                        <td>{{ $sitevisit->valuationDetails->totalBuildingAmount ?? 0}}</td>
                    </tr>
                    <tr>
                        <td colspan="3">Sanitary ,Plumbing Fitting ( Hot Water & Cold Water) @ of 0% of Total Building value</td>
                        <td>{{$sitevisit->valuationDetails->totalNetBuildingAmount ?? 0}}</td>
                    </tr>
                    <tr>
                        <td colspan="3">Electricity Work @ 0% of Total Building value</td>
                        <td>{{$sitevisit->valuationDetails->totalNetBuildingAmount ?? 0}}</td>
                    </tr>
                    <tr>
                        <td colspan="3">Net Total Value of Building</td>
                        <td> {{$sitevisit->valuationDetails->totalNetBuildingAmount ?? 0}}</td>
                    </tr>
                    <tr>
                        <td colspan="3">Depriciation of Building is (0% @ 0 yrs=0% Net Total Value of Building)</td>
                        <td>{{$sitevisit->valuationDetails->totalBuildingDepriciation ?? 0}}</td>
                    </tr>
                    <tr>
                        <td colspan="3">Total Weghted Fair Market Value of the Building (WFMV)</td>
                        <td>{{$sitevisit->valuationDetails->totalBuildingDistressValue ?? 0}}</td>
                    </tr>
                    <tr>
                        <td colspan="3">Total Distress Value of the Building @ 100% of (WFMV)</td>
                        <td>{{$sitevisit->valuationDetails->totalNetBuildingAmount ?? 0}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        @endif
        <div class="col-md-12">
            <h4>{{ $sitevisit->valuation_type == "Land" ? 9 : 10 }} Total Value of Property {{ $sitevisit->valuation_type == "Land" ? "Land" : "Land & Building" }}</h4>
        </div>
        <div class="col-md-12">
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <td style="border:1px solid #dee2e6;">Weghted Fair Market Value of Property is NRs. : 15,92,000.00 <br>
                            In word:- Fifteen lakh ninety two thousand rupees only /-
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <th style="border:1px solid #dee2e6;">Distress Value of Property is NRs. : 15,92,000.00 <br>
                            In word:- Fifteen lakh ninety two thousand rupees only /-
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">11 Road size :- {{ $sitevisit->valuationDetails->road_size ?? ''}} wide {{ $sitevisit->valuationDetails->type_of_access ?? ''}} Road on East &amp; 13'-0" Wide Earthen Road on South.</div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">12 Note :- This Pre valuation report is only for banking process, not for loan disbursement. Our consultant will not be responsible if loan is disburse without final valuation report. This pre report is considered voidable without full valuation report &amp; the validity of this report is only for three months.</div>
            </div>
        </div>
        <div class="col-md-12" style="text-align:right;">
            <img src="{{asset('backendfiles/sign/sign123.png')}}" alt="sign">

            <p style="margin-top:10px;">......................................................</p>
            <h6 class="text-bold">Er. Sanjay Mahato</h6>
            (Managing Director)<br>
            <p>NEC No {3700 Civil "A"}</p>
        </div>

        <style type="text/css">
            .table td,
            .table th {
                padding: .2rem;
            }

            @page {
                margin-top: 30pt !important;
                margin-bottom: 35pt !important;
                margin-left: 18pt !important;
                margin-right: 30pt !important;
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
                    font-size: 16pt;
                    font-family: "Times New Roman", Times, serif;
                }

                h1,
                h2,
                h3,
                h4,
                h5,
                h6 {
                    font-size: 16pt;
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