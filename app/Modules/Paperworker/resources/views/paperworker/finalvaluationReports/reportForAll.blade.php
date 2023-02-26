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


        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100">
                <div class="col-9 hidden-md-down" style="position: relative; max-width:83%;flex: 0 0 83%;">
                    <h2 style="font-size:25pt; font-weight: bold;text-decoration:underline;">{{ $sitevisit->bank->name ?? ''}}.
                    </h2>
                    <h3 style="font-size:23pt; font-weight:bold;">{{ $sitevisit->branch->title ?? 'N/A'}}</h3>
                    <h3 style="font-size:20pt;">Contact No :- {{ $sitevisit->branch ?? 'N/A'}}</h3>

                    <br><br><br>
                    <h2 style="font-size:25pt; font-weight: bold;">PROPERTY VALUATION REPORT</h2>
                    <h3 style="font-size:23pt; font-weight:bold;">({{ $sitevisit->valuation_type == "Land" ? 'Land' : 'Land & Building'}})</h3>

                    <br><br><br>
                    <h2 style="font-size:22pt; font-weight: bold; text-decoration:underline;">CLIENT:</h2>
                    <h3 style="font-size:20pt; font-weight:bold; text-decoration:underline;">{{ $sitevisit->client->client_name ?? 'N/A'}}
                    </h3>
                    <h3 style="font-size:20pt;line-height:18px;">{{ $sitevisit->client->address ?? 'N/A'}}</h3>
                    <h3 style="font-size:20pt;line-height:18px;">{{ $sitevisit->client->district ?? 'N/A'}}</h3>

                    <br><br><br>
                    <h2 style="font-size:22pt; font-weight: bold; text-decoration:underline;">OWNER:</h2>
                    <h3 style="font-size:20pt; font-weight:bold; text-decoration:underline;"> {{ $sitevisit->client->owner ?? 'N/A'}}
                    </h3>
                    <h3 style="font-size:20pt;line-height:18px;">{{ $sitevisit->client->owner->address ?? 'N/A'}}</h3>
                    <h3 style="font-size:20pt;line-height:18px;">{{ $sitevisit->client->owner->district ?? 'N/A'}}</h3>

                    <br><br><br>
                    <div style="width:100%;min-height:200px;">
                        <h2 style="font-size:22pt; font-weight: bold; text-decoration:underline;">LOCATION OF PROPERTY:
                        </h2>
                        <h3 style="font-size:20pt; font-weight:bold;">{{$sitevisit->valuationDetails->location_of_land ?? 'N/A'}}</h3>
                        <h3 style="font-size:20pt;">{{$sitevisit->valuationDetails->district ?? 'N/A'}}</h3>
                    </div>
                    <br>Er.Sanjay K. Mahato<br>(Managing Director)<br>NEC No {3700 Civil "A"}
                    <div class="row" style="bottom: 0; width:100%;position: absolute;">
                        <div style="max-widht:12%;flex:12%;webkit-box-flex: 0; padding-left:0px; padding-top:10px;">
                            <p style="font-family: 'Forte';font-size: 65px;padding: 0px;color:red;">ndc</p>
                        </div>
                        <div style="max-widht:87%;flex:87%;webkit-box-flex: 0;">
                            <h5><b style="font-size: 45px;">{{ returnSiteSetting('title') ?? 'Nepal Development Consultants'}}</b></h5><strong>
                                <hr
                                    style="margin-top: 5px; margin-bottom: 5px;width: 78%;text-align: left;padding: 0px;border-top: 2px solid #000;margin-left: 0px;">
                            </strong>
                            <h5 style="font-size: 30px;letter-spacing: 0.05em;"><b>Consulting Engineers [Valuer's &amp;
                                    Designer]</b></h5>
                            <p>{{returnSiteSetting('address') ?? 'Sankhamul-31,Ktm'}} Tel:{{returnSiteSetting('primary_phone') ?? '01-5242605'}}, {{returnSiteSetting('secondary_phone') ?? '01-5242605'}}, Email: {{returnSiteSetting('primary_email') ?? 'ndcaccount@yahoo.com'}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-3"
                    style="height: 100%;background-color: #538DD5 !important;-webkit-print-color-adjust: exact; max-width:17%;flex: 0 0 17%;">
                    <label style="font-size:20pt; text-align:center; width:100%;color:white;">{{$sitevisit->registration_id ?? ''}}</label>
                    <label
                        style="font-size:50pt;text-align:center; color:white; writing-mode: vertical-rl;
                  text-orientation: mixed;padding-left:20px;padding-top:450px;margin:0px;"
                        class="u">Since 2004</label>
                </div>
            </div>
        </div>
        <div class="PageBreak"></div>

        <div class="row ml-0 mr-0">


            <div class="col-md-12">
                <!-- --------- 1 PAGE ---- -->
                <table class="table table-borderless mb-0">
                    <tbody>
                        <tr>
                            <td colspan="3">
                                <br><br><br><br>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <div class="row">
                                    <div class="col-md-6"><b>
                                            <h2 style="margin:0px;">To</h2>
                                            <h2>{{ $sitevisit->bank->name ?? ''}}</h2>
                                        </b>
                                        <h3>  {{ $sitevisit->branch->title ?? 'N/A'}}</h3>Valuation Assignment No : {{$sitevisit->valuation_assignment_no ?? ''}}
                                    </div>
                                    <div class="col-md-6"><label style="float:right;">Date:- {{($sitevisit->preparation_date != null ? $sitevisit->preparation_date->format('Y-m-d') : '')}} (B.S)</label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <h1 class="U B C">Final Valuation Report</h1>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">Dear Sir/Madam<br>
                                We have carried out the final valuation of the property proposed to be mortgaged to this
                                bank. All Required legal Papers and calculation are attached herewith for your
                                reference. We have taken all care to ascertain the fair &amp; distress Value of the
                                properties as per current Market rate.
                            </td>
                        </tr>
                        <tr>
                            <td class="U B" width="40%"><b>Client Name &amp; Address</b></td>
                            <td class="B" width="30"><b>:</b></td>
                            <td class="U B">{{ $sitevisit->client->client_name ?? 'N/A'}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><b>:</b></td>
                            <td>{{ $sitevisit->client->address ?? 'N/A'}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><b>:</b></td>
                            <td>{{ $sitevisit->client->district ?? 'N/A'}}</td>
                        </tr>
                        <tr>
                            <td class="U B"><b>Property Owner Name &amp; Address</b></td>
                            <td class="B"><b>:</b></td>
                            <td class="U B"> {{ $sitevisit->client->owner ?? 'N/A'}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><b>:</b></td>
                            <td>{{ $sitevisit->client->owner->address ?? 'N/A'}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><b>:</b></td>
                            <td>{{ $sitevisit->client->owner->district ?? 'N/A'}}</td>
                        </tr>
                        <tr>
                            <td class="U B"><b>Location of the Property</b></td>
                            <td><b>:</b></td>
                            <td class="U B">{{$sitevisit->valuationDetails->location_of_land ?? 'N/A'}}</td>
                        </tr>
                        <tr>
                            <td>District</td>
                            <td><b>:</b></td>
                            <td>{{$sitevisit->valuationDetails->district ?? 'N/A'}}</td>
                        </tr>
                        <tr>
                            <td>Kitta No</td>
                            <td><b>:</b></td>
                            <td> 

                                {{ $sitevisit->lalpurjaDatas->implode('kita_no',' - ') ?? 'N/A'}}</td>
                        </tr>
                        <tr>
                            <td>Area Considered for Valuation</td>
                            <td><b>:</b></td>
                            <td>0-11-1-2.4</td>
                        </tr>
                        <tr>
                            <td colspan="3">It is our Consideration opinion that the distress value of the above
                                mentioned {{ $sitevisit->valuation_type == "Land" ? 'Land' : 'Land & Building'}} are as follows.</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered mb-0">
                    <tbody>
                        <tr>
                            <td>The Weigheted Fair Market Value of the Property (Rs.)</td>
                            <td>{{ $sitevisit->rateofland->fairMarketValueOfLandAndBuilding }}</td>
                            <td>In word:- {{ getNepaliCurrency($sitevisit->rateofland->fairMarketValueOfLandAndBuilding)}} Only/-</td>
                        </tr>
                        <tr class="vendorListHeading">
                            <th>Distress Value of the Property Nrs.</th>
                            <th>{{ $sitevisit->rateofland->totalDistressValueOfLandAndBuimding }}</th>
                            <th>In word:-  {{ getNepaliCurrency($sitevisit->rateofland->totalDistressValueOfLandAndBuimding)}} Only/-</th>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-borderless mb-0 pb-0">
                    <tbody>
                        <tr>
                            <td>All Legal documents submitted by the clients, the necessary calculation and recently
                                taken photographs of the proposed site are enclosed for your record and perusal.I hereby
                                declare and certify that:-</td>
                        </tr>
                        <tr>
                            <td>
                                <ol style="padding-left:15px;">
                                    <li>We have has physically inspected, verified and measured the property.</li>
                                    <li>We have no direct and indirect interest in the said property.</li>
                                    <li>The information furnished in the report are true and correct to the best of
                                        knowledge and belief which are based on the document and information collected
                                        from the client and resident during our visit.</li>
                                    <li>The market condition may change in course of time affecting the values.</li>
                                    <li>We understand, bank may inspect the property and reserve the right to accept or
                                        reject this valuation report.</li>
                                    <li>Comments If Any : </li>
                                </ol>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-borderless mt-0 pt-0">
                    <tbody>
                        <tr>
                            <td class="U B">Thanking You</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="3">&nbsp;</td>
                        </tr>
                        <tr>
                            <td style="text-align:left">……………………<br>Ajay Sah<br>(Prepared By)</td>
                            <td style="text-align:center">……………………<br>Er.Manish Kumar Singh ( NEC NO :- 22588 "A' Civil)
                                <br>(Site Engineer)</td>
                            <td style="text-align:center">……………………<br>Er.Sanjay K. Mahato<br>(Managing Director)<br>NEC
                                No {3700 Civil "A"}</td>
                        </tr>
                    </tbody>
                </table>
                <!-- --------- 2 PAGE ---- -->
                <div class="PageBreak"></div>
                <table class="table table-borderless">


                    <tbody>
                        <tr>
                            <td style="text-decoration: underline; text-align:center">
                                <br><br><br><br><br><br><br><br><br><br><br>
                                    <h2> TABLE OF CONTENT</h2>
                                </b></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered"
                    style="width:85%;margin-left: auto;margin-right: auto; margin-top:20px;">
                    <!--margin-left: auto;margin-right: auto; -->
                    <tbody>
                        <tr>
                            <td width="50">SNO.</td>
                            <td colspan="2"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>PART 1 - Valuation Report of Land</b></td>
                            <td><b>Page No</b></td>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>Summary of the valuation report</td>
                            <td>5,6</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Detail of Client &amp; Detail of Property Owner</td>
                            <td>7</td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Relation between client and property owner</td>
                            <td>7</td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Location of the property to be mortgaged &amp; Classification of Property</td>
                            <td>7</td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td>Area of the land as per Lalpurja &amp; Area of the land as actual measurement</td>
                            <td>8</td>
                        </tr>
                        <tr>
                            <td>6.</td>
                            <td>Total Are of Land &amp; Permanent of the Boundaries</td>
                            <td>8</td>
                        </tr>
                        <tr>
                            <td>7.</td>
                            <td>Importance of Location, Location and Access to the Land &amp; Value of Land</td>
                            <td>9</td>
                        </tr>
                        <tr>
                            <td>8.</td>
                            <td>Calculation of land value &amp; Summary Information About Land</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>9.</td>
                            <td>Legal Aspects of the property, Remarks &amp; Limiting Condition &amp; Conclusion</td>
                            <td>12</td>
                        </tr>
                        <tr>
                            <td>10.</td>
                            <td>Photograph</td>
                            <td>13</td>
                        </tr>
                    </tbody>
                </table>



                <!-- --------- 3 PAGE ---- -->
                <div class="PageBreak"></div>
                <div class="col-md-12 text-center" style="padding-top: 30rem;">
                    <h1 class="U" style="font-size:50px;"><b>Valuation of</b></h1>
                    <h2 style="font-size:50px;">({{ $sitevisit->valuation_type == "Land" ? 'Land' : 'Land & Building'}})</h2>
                </div>
                <!-- --------- 4 PAGE ---- -->
                <div class="PageBreak"></div>

                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <td colspan="4" class="U"><b>Summary of Valuation Report</b></td>
                        </tr>
                        <tr>
                            <th style="line-height:18px;" width="30">1.</th>
                            <th style="line-height:18px;" width="350">Detail of Client</th>
                            <th style="line-height:18px;" width="30"></th>
                            <th style="line-height:18px;"></th>
                        </tr>
                        <tr>
                            <td style="line-height:18px;"></td>
                            <td class="B" style="line-height:18px;">  Name</td>
                            <td class="B" style="line-height:18px;">:</td>
                            <td class="U B" style="line-height:18px;">{{ $sitevisit->client->client_name ?? 'N/A'}}</td>
                        </tr>
                        <tr>
                            <td style="line-height:18px;"></td>
                            <td style="line-height:18px;">  Address</td>
                            <td style="line-height:18px;">:</td>
                            <td style="line-height:18px;">{{ $sitevisit->client->address ?? 'N/A'}}</td>
                        </tr>
                        <tr>
                            <td style="line-height:18px;"></td>
                            <td style="line-height:18px;">  District</td>
                            <td style="line-height:18px;">:</td>
                            <td style="line-height:18px;">{{ $sitevisit->client->district ?? 'N/A'}}</td>
                        </tr>
                        <tr>
                            <th style="line-height:18px;">2.</th>
                            <th style="line-height:18px;">Detail of Property Owner</th>
                            <th colspan="2" style="line-height:18px;"></th>
                        </tr>
                        <tr>
                            <td style="line-height:18px;"></td>
                            <td class="B" style="line-height:18px;">  Name</td>
                            <td class="B" style="line-height:18px;">:</td>
                            <td class="U B" style="line-height:18px;"> {{ $sitevisit->client->owner ?? 'N/A'}}</td>
                        </tr>
                        <tr>
                            <td style="line-height:18px;"></td>
                            <td style="line-height:18px;">  Address</td>
                            <td style="line-height:18px;">:</td>
                            <td style="line-height:18px;">{{ $sitevisit->client->owner->address ?? 'N/A'}}</td>
                        </tr>
                        <tr>
                            <td style="line-height:18px;"></td>
                            <td style="line-height:18px;">  District</td>
                            <td style="line-height:18px;">:</td>
                            <td style="line-height:18px;">{{ $sitevisit->client->owner->district ?? 'N/A'}}</td>
                        </tr>
                        <tr>
                            <th style="line-height:18px;">3.</th>
                            <th style="line-height:18px;">Plot No</th>
                            <th colspan="2" style="line-height:18px;"></th>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="B">  Kitta No.</td>
                            <td class="B">:</td>
                            <td class="U B"> {{ $sitevisit->lalpurjaDatas->implode('kita_no',' - ') ?? 'N/A'}}</td>
                            
                        </tr>
                        <tr>
                            <td></td>
                            <td>  Sheet No</td>
                            <td>:</td>
                            <td>{{ $sitevisit->lalpurjaDatas->implode('sheet_no',' - ') ?? 'N/A'}}</td>
                        </tr>
                        <tr>
                            <th>4.</th>
                            <th>Address of The Property</th>
                            <th>:</th>
                            <th>{{$sitevisit->valuationDetails->location_of_land ?? 'N/A'}}</th>
                        </tr>
                        <tr>
                            <td colspan="2">Location &amp; Access of The Property</td>
                            <td>:</td>
                            <td>The Property is connected by {{ $sitevisit->valuationDetails->type_of_access}} road and distance of the property is approx. {{$sitevisit->valuationDetails->location_of_land}} to site.</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>  District</td>
                            <td>:</td>
                            <td>{{ $sitevisit->valuationDetails->district ?? ''}}</td>
                        </tr>
                        <tr>
                            <th>5.</th>
                            <th>Total Area of the land</th>
                            <th colspan="2"></th>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <table class="table table-borderless mb-0">
                                    <tbody>
                                        <tr>
                                            <th width="30"></th>
                                            <th style="border:1px solid #dee2e6;" width="300">According to</th>
                                            <th style="border:1px solid #dee2e6;" class="B">(R-A-P-D)</th>
                                            <th style="border:1px solid #dee2e6;">(Square Feet)</th>
                                            <th style="border:1px solid #dee2e6;" class="B">(Anna)</th>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;">Lalpurja</td>
                                            <td style="border:1px solid #dee2e6;">{{ $sitevisit->valuationDetails->total_rapd_as_lalpurja ?? ''}}</td>
                                            <td style="border:1px solid #dee2e6;">{{ $sitevisit->valuationDetails->total_sqf_as_lalpurja ?? ''}}</td>
                                            <td style="border:1px solid #dee2e6;">{{ $sitevisit->valuationDetails->total_anna_as_lalpurja ?? ''}}</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;">Measurement</td>
                                            <td style="border:1px solid #dee2e6;">{{ $sitevisit->valuationDetails->total_rapd_as_measurement ??''}}</td>
                                            <td style="border:1px solid #dee2e6;">{{ $sitevisit->valuationDetails->total_sqf_as_measurement ?? ''}}</td>
                                            <td style="border:1px solid #dee2e6;">{{ $sitevisit->valuationDetails->total_anna_as_measurement ?? ''}}</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;">Deduction For Road</td>
                                            <td style="border:1px solid #dee2e6;">{{ $sitevisit->deduction->rAPDAPConsideration ?? '' }}</td>
                                            <td style="border:1px solid #dee2e6;">{{ $sitevisit->deduction->sqFAPConsideration ?? '' }}</td>
                                            <td style="border:1px solid #dee2e6;">{{ $sitevisit->deduction->annaAPConsideration ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <td></td>                   
                                            <td style="border:1px solid #dee2e6;">Land Development ({{ $sitevisit->deduction->landDevelopmentPercent ?? 0}}% @ of Total Land
                                                Area)</td>
                                            <td style="border:1px solid #dee2e6;">{{ $sitevisit->deduction->total_rapd_as_land_development ?? ''}}</td>
                                            <td style="border:1px solid #dee2e6;">{{ $sitevisit->deduction->total_sqf_as_land_development ?? ''}}</td>
                                            <td style="border:1px solid #dee2e6;">{{ $sitevisit->deduction->total_anna_as_land_development ?? ''}}</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;">Deduction For Hightension Line</td>
                                            <td style="border:1px solid #dee2e6;">{{ $sitevisit->deduction->total_rapd_as_high_tension_deduction ?? 0}}</td>
                                            <td style="border:1px solid #dee2e6;">{{ $sitevisit->deduction->total_sqf_high_tension_deduction ?? 0}}</td>
                                            <td style="border:1px solid #dee2e6;">{{ $sitevisit->deduction->total_anna_as_high_tension_deduction ?? 0}}</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;">Deduction For Low Land</td>
                                            <td style="border:1px solid #dee2e6;">{{ $sitevisit->deduction->total_rapd_as_low_land_deduction ?? 0}}</td>
                                            <td style="border:1px solid #dee2e6;">{{ $sitevisit->deduction->total_sqf_low_land_deduction ?? 0}}</td>
                                            <td style="border:1px solid #dee2e6;">{{ $sitevisit->deduction->total_anna_as_low_land_deduction ?? 0}}</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;">Deduction For River</td>
                                            <td style="border:1px solid #dee2e6;">{{ $sitevisit->deduction->total_rapd_as_river_deduction ?? 0}}</td>
                                            <td style="border:1px solid #dee2e6;">{{ $sitevisit->deduction->total_sqf_river_deduction ?? 0}}</td>
                                            <td style="border:1px solid #dee2e6;">{{ $sitevisit->deduction->total_anna_as_river_deduction ?? 0}}</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;">Boundry Correction({{ $sitevisit->deduction->deductionForBoundryCorrection ?? 0}}% @ of Total
                                                Land Area)</td>
                                                <td style="border:1px solid #dee2e6;">{{ $sitevisit->deduction->total_rapd_as_boundry_correction_deduction ?? 0}}</td>
                                                <td style="border:1px solid #dee2e6;">{{ $sitevisit->deduction->total_sqf_boundry_correction_deduction ?? 0}}</td>
                                                <td style="border:1px solid #dee2e6;">{{ $sitevisit->deduction->total_anna_as_boundry_correction_deduction ?? 0}}</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;">Irregular Shape / Sloppy Land ({{ $sitevisit->deduction->deductionForBoundryCorrection ?? 0}}% @
                                                of Total Land Area)</td>
                                                <td style="border:1px solid #dee2e6;">{{ $sitevisit->deduction->total_rapd_as_irregular_shape_deduction ?? 0}}</td>
                                                <td style="border:1px solid #dee2e6;">{{ $sitevisit->deduction->total_sqf_irregular_shape_deduction ?? 0}}</td>
                                                <td style="border:1px solid #dee2e6;">{{ $sitevisit->deduction->total_anna_as_irregular_shape_deduction??0}}</td>
                                        </tr>
                                        <tr class="B vendorListHeading">
                                            <th
                                                style="background-color: white !important;-webkit-print-color-adjust: exact;">
                                            </th>
                                            <th style="border:1px solid #dee2e6;">Consideration</th>
                                            <th style="border:1px solid #dee2e6;">{{ $sitevisit->deduction->rAPDAPConsideration ?? 0}}</th>
                                            <th style="border:1px solid #dee2e6;">{{ $sitevisit->deduction->sqFAPConsideration  ?? 0}}</th>
                                            <th style="border:1px solid #dee2e6;">{{ $sitevisit->deduction->annaAPConsideration ?? 0}}</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <th>6.</th>
                            <th>Rate of the Land (Per Anna)</th>
                            <th colspan="2"></th>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <table class="table table-borderless mb-0">
                                    <tbody>
                                        <tr>
                                            <td width="30"></td>
                                            <td style="border:1px solid #dee2e6;" width="400">Market Rate</td>
                                            <td style="border:1px solid #dee2e6;">Nrs. {{$sitevisit->rateofland->perAnnaAPMarketRate ?? 'N/A'}}</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;">Land Revenue Office</td>
                                            <td style="border:1px solid #dee2e6;">Nrs. {{$sitevisit->rateofland->perAnnaAPGovRate ?? 'N/A'}}</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;">Wighted Fair Market Rate</td>
                                            <td style="border:1px solid #dee2e6;">Nrs. {{$sitevisit->rateofland->perAnnaAPFairRate ?? 'N/A'}}</td>
                                            <td style="border:1px solid #dee2e6;">{{$sitevisit->bank->fair_market_rate ?? 0}}% MR+{{$sitevisit->bank->governmant_rate ?? 0}}% GR</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;">Distress Rate</td>
                                            <td style="border:1px solid #dee2e6;">Nrs. {{$sitevisit->rateofland->perAnnaAPDistressRate ?? 'N/A'}}</td>
                                            <td style="border:1px solid #dee2e6;"> {{$sitevisit->bank->fair_market_rate}}% Distress</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <th>7.</th>
                            <th>Total Value of Land</th>
                            <th colspan="2"></th>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <table class="table table-borderless mb-0">
                                    <tbody>
                                        <tr>
                                            <td width="30"></td>
                                            <td style="border:1px solid #dee2e6;" width="400">Commercial Value</td>
                                            <td style="border:1px solid #dee2e6;">Nrs. {{$sitevisit->rateofland->commercialValueOfLand ?? 'N/A'}}</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;">Wighted Fair Market Value</td>
                                            <td style="border:1px solid #dee2e6;">Nrs. {{$sitevisit->rateofland->fairMarketValueOfLand ?? 'N/A'}}</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;">Distress Value</td>
                                            <td style="border:1px solid #dee2e6;">Nrs. {{$sitevisit->rateofland->distressValueOfLand ?? 'N/A'}} </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="PageBreak"></div>
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <th width="30">8.</th>
                            <th colspan="3">Accessibility and other Misc. Particulars of Land</th>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td width="30"></td>
                                            <td style="border:1px solid #dee2e6;" width="30">SNo</td>
                                            <td style="border:1px solid #dee2e6;">Plot No.</td>
                                            <td style="border:1px solid #dee2e6;">Importance(Commercial, Residential
                                                etc.)</td>
                                            <td style="border:1px solid #dee2e6;">Access in the Blue Print</td>
                                            <td style="border:1px solid #dee2e6;">Access in the Site</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;">1</td>
                                            <td style="border:1px solid #dee2e6;"> {{ $sitevisit->lalpurjaDatas->implode(' - ','kita_no') ?? 'N/A'}}</td>
                                            <td style="border:1px solid #dee2e6;">Residential</td>
                                            <td style="border:1px solid #dee2e6;">7'-5"</td>
                                            <td style="border:1px solid #dee2e6;">10 Feet (Dead End) Wide Earthen Road
                                                on West.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <th width="30">9.</th>
                            <th colspan="3">Four Boundaries of Land</th>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td width="30"></td>
                                            <td style="border:1px solid #dee2e6;" width="30">SNo</td>
                                            <td style="border:1px solid #dee2e6;">Plot No.</td>
                                            <td style="border:1px solid #dee2e6;">East</td>
                                            <td style="border:1px solid #dee2e6;">West</td>
                                            <td style="border:1px solid #dee2e6;">North</td>
                                            <td style="border:1px solid #dee2e6;">South</td>
                                        </tr>
                                        <tr>
                                            @if ($sitevisit->govBoundaries->count() > 0)
                                                @foreach ( $sitevisit->govBoundaries as $boundary)
                                                <tr>
                                                    <td>{{ $loop->iteration}}</td>
                                                    <td>{{ $boundary->kita_no }}</td>
                                                    <td> {{ $boundary->east }}</td>
                                                    <td> {{ $boundary->west }}</td>
                                                    <td> {{ $boundary->north }}</td>
                                                    <td>{{ $boundary->south }}</td>
                                                </tr>
                                                @endforeach
                                            @endif
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <th width="30">10.</th>
                            <th colspan="3">Total Value Of the Properties</th>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr class="B">
                                            <td width="30"></td>
                                            <td style="border:1px solid #dee2e6;" width="30">SNo</td>
                                            <td style="border:1px solid #dee2e6;">Description</td>
                                            <td style="border:1px solid #dee2e6;">Weighted Fair Market Value (NRs.)
                                            </td>
                                            <td style="border:1px solid #dee2e6;">Distress Value (NRs.)</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;">1</td>
                                            <td style="border:1px solid #dee2e6;">Land</td>
                                            <td style="border:1px solid #dee2e6;">1,08,18,600.00</td>
                                            <td style="border:1px solid #dee2e6;">86,54,880.00</td>
                                        </tr>
                                        <tr>
                                            <th></th>
                                            <th colspan="2" style="border:1px solid #dee2e6; text-align:right;">
                                                Total</th>
                                            <th style="border:1px solid #dee2e6;">1,08,18,000.00</th>
                                            <th style="border:1px solid #dee2e6;">86,54,000.00</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <th width="30">11.</th>
                            <th colspan="3">Total Value of Property {{ $sitevisit->valuation_type == "Land" ? 'Land' : 'Land & Building'}}</th>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td width="30"></td>
                                            <td style="border:1px solid #dee2e6;">Wighted Fair Market Value of Property
                                                is NRs. : 1,08,18,000.00 <br>
                                                In word:- One crore eight lakh eighteen thousand rupees only /-
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">&nbsp;</td>
                                        </tr>
                                        <tr class="vendorListHeading">
                                            <td style="background-color: white !important;-webkit-print-color-adjust: exact;"
                                                width="30"></td>
                                            <th style="border:1px solid #dee2e6;">Distress Value of Property is NRs. :
                                                86,54,000.00 <br>
                                                In word:- Eighty six lakh fifty four thousand rupees only /-
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- -------------PAGE BREAKE--------- -->
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <td></td>
                            <td colspan="4"><br>
                                <span
                                    style="width: 100%;
                text-align: center;
                float: left;
                font-weight: bold;">
                                    <h3 class="U"><b> Method of Valuation:</b></h3>
                                </span>
                                <p><b></b></p>
                                <h3 class="U"><b>Land Value:</b></h3>
                                <p style="text-align: justify;">The value of land recorded in this report is depends up
                                    on the lesser areas among area recorded in Land ownership Documents, Trace
                                    Measurements and field measurements. There are several methods of land Valuation,
                                    but we consider the following two methods:-</p>
                                <p></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="30"></td>
                            <td colspan="4">
                                <b>a.) Comparable Method.</b>
                                <p style="text-align: justify;">The&nbsp;comparative method&nbsp;of valuation relies
                                    exactly on that - comparison. It involves comparing similar types of land a given
                                    area to judge the relative value of any particular one. This is the method most
                                    often used to achieve the Open Market Value. In order for this to be truly effective
                                    in Nepal, it is necessary to know the actual sales prices of the properties, rather
                                    than the more commonly asking prices, however an approximate valuation can still be
                                    achieved using the methods.</p>
                                <p style="text-align: justify;">Enquiry based in local community, surrounding is done
                                    to get average market value of land. Short discussion is also carried out by our
                                    associate members in the topics of market value of land, future prespective of land
                                    and present importance of land and property.</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td width="30"></td>
                                            <td colspan="4">
                                                <p style="text-align: justify;margin-bottom:0px; ">Minimum Government
                                                    rate assigned by government is also considered. The calcutated
                                                    weighted value of land gives the most probable current rate of land
                                                    which is considered by us for valuation work.</p>
                                                <br>
                                                <b>b.) Development Methods.</b>
                                                <p style="text-align: justify;">This method is adopted when the
                                                    property to be valuated is big enough, and can't be sell in as a
                                                    whole but need to sell in as a whole but need to sell in small plot.
                                                    In that case we divide the whole piece of land into small pieces by
                                                    developing the facilities like road, Sanitary, electricity for the
                                                    all small divided plots.</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="PageBreak"></div>
                <table class="table table-borderless">
                    <tbody>
                        <tr class="B U">
                            <td colspan="4">PART 1- VALUATION OF LAND</td>
                        </tr>
                        <tr>
                            <th></th>
                            <th>Purpose of Valuation</th>
                            <th width="30">:</th>
                            <th>To be Mortagaged at <b>{{ $sitevisit->bank->name ?? ''}}</b></th>
                        </tr>
                        <tr>
                            <th width="30"></th>
                            <th width="280">List of Property Evaluated</th>
                            <th width="30">:</th>
                            <th>For {{ $sitevisit->valuation_type == "Land" ? 'Land' : 'Land & Building'}}</th>
                        </tr>
                        <tr>
                            <th>1.</th>
                            <th style="text-transform: uppercase;">Detail of Client</th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr>
                            <td></td>
                            <td>  Name</td>
                            <td>:</td>
                            <td class="B U">{{ $sitevisit->client->client_name ?? 'N/A'}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>  Address</td>
                            <td>:</td>
                            <td>{{ $sitevisit->client->address ?? 'N/A'}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>  District</td>
                            <td>:</td>
                            <td>{{ $sitevisit->client->district ?? 'N/A'}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>  Father Name</td>
                            <td>:</td>
                            <td> {{ $sitevisit->client->father_name ?? 'N/A'}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>  Grand Father Name</td>
                            <td>:</td>
                            <td>{{ $sitevisit->client->grand_father_name ?? 'N/A'}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>  Citizenship No</td>
                            <td>:</td>
                            <td>{{ $sitevisit->client->citizenship_no ?? 'N/A'}} (Issued Date :{{ $sitevisit->client->date_of_issue ?? 'N/A'}}) {{ $sitevisit->client->place_of_issue ?? 'N/A'}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>  Contact No</td>
                            <td>:</td>
                            <td>{{ $sitevisit->client->contact_no ?? 'N/A'}}</td>
                        </tr>
                        <tr>
                            <th>2.</th>
                            <th colspan="3" style="text-transform: uppercase;">Detail of Property Owner</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td>  Name</td>
                            <td>:</td>
                            <td class="B U"> {{ $sitevisit->client->owner->owner_name ?? 'N/A'}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>  Address</td>
                            <td>:</td>
                            <td>{{ $sitevisit->client->owner->address ?? 'N/A'}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>  District</td>
                            <td>:</td>
                            <td>{{ $sitevisit->client->owner->district ?? 'N/A'}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>  Husband's Name</td>
                            <td>:</td>
                            <td>{{ $sitevisit->client->owner->husband_name ?? ''}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>  Father in Law's Name</td>
                            <td>:</td>
                            <td>{{ $sitevisit->client->owner->father_in_law_name ?? ''}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>  Citizenship No</td>
                            <td>:</td>
                            <td>{{ $sitevisit->client->owner->citizenship_no ?? 'N/A'}} (Issued Date :{{ $sitevisit->client->owner->date_of_issue ?? 'N/A'}}) {{ $sitevisit->client->owner->place_of_issue ?? 'N/A'}}</td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>  Contact No</td>
                            <td>:</td>
                            <td>{{ $sitevisit->client->owner->contact_no ?? 'N/A'}}</td>
                        </tr>
                        <tr>
                            <th>3.</th>
                            <th colspan="3">RELATION BETWEEN CLIENT &amp; PROPERTY OWNER : Mother &amp; Son</th>
                        </tr>
                        <tr>
                            <th>4.</th>
                            <th colspan="3">LOCATION OF THE PROPERTY TO BE MORTGAGED</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td>  Kitta No (Plot No)</td>
                            <td>:</td>
                            <td> {{ $sitevisit->lalpurjaDatas->implode(' - ','kita_no') ?? 'N/A'}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>  Sheet No</td>
                            <td>:</td>
                            <td>{{ $sitevisit->lalpurjaDatas->implode(' - ','sheet_no') ?? 'N/A'}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>  Local Authority</td>
                            <td>:</td>
                            <td class="B U">{{$sitevisit->valuationDetails->location_of_land ?? 'N/A'}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>  District</td>
                            <td>:</td>
                            <td>Kathmandu</td>
                        </tr>
                        <tr>
                            <td><b>5.</b></td>
                            <td colspan="3" style="text-transform: uppercase;"><b>Classification of Property</b>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>  Property Usage</td>
                            <td>:</td>
                            <td>{{$sitevisit->valuationDetails->property_usage ?? ''}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>  Shape</td>
                            <td>:</td>
                            <td>{{$sitevisit->valuationDetails->shape ?? ''}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>  Facing</td>
                            <td>:</td>
                            <td>{{$sitevisit->valuationDetails->facing ?? ''}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>  Frontage</td>
                            <td>:</td>
                            <td>{{$sitevisit->valuationDetails->frontage ?? ''}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>  Level with Road</td>
                            <td>:</td>
                            <td>{{$sitevisit->valuationDetails->level_with_road ?? ''}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>  Boundary Wall</td>
                            <td>:</td>
                            <td>{{$sitevisit->valuationDetails->compound_wall ?? ''}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>  Topography</td>
                            <td>:</td>
                            <td>{{$sitevisit->valuationDetails->property_usage ?? ''}}</td>
                        </tr>
                        <tr>
                            <td><b>6.</b></td>
                            <td colspan="3" style="text-transform: uppercase;"><b>Value Of Land</b></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="3">
                                We all know that it is not so easy to determine the value of the land or building
                                because there are so many factors that govern. However the team has considered following
                                factors to reach the final conclusion for fixing per unit rate of the land.
                                <br>
                                1. The urgency of buyer or seller to buy or sell the land.<br>
                                2. Importance and future prospects of the area.<br>
                                3. Shape and frontage of land.<br>
                                4. Size- The unit value may be low if the size of land is too big.<br>
                                5. Past land sales data.<br>

                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="PageBreak"></div>
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <th>7.</th>
                            <th colspan="3">AREA OF LAND AS PER LALPURJA</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="3">As per the copy of land Ownership certificate issued by ministry of land
                                Department of land revenue, NG, area of the parcel (kitta) No is .:- {{ $sitevisit->lalpurjaDatas->implode('kita_no') ?? 'N/A'}}</td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <table class="table table-borderless" style="text-align: center;">
                                    <tbody>
                                        <tr>
                                            <th width="30"></th>
                                            <th style="border:1px solid #dee2e6; background-color: #dedede !important; -webkit-print-color-adjust: exact;"
                                                width="30">SNo</th>
                                            <th
                                                style="border:1px solid #dee2e6; background-color: #dedede !important; -webkit-print-color-adjust: exact;">
                                                Kitta No</th>
                                            <th
                                                style="border:1px solid #dee2e6; background-color: #dedede !important; -webkit-print-color-adjust: exact;">
                                                Area in (Sq.M)</th>
                                            <th
                                                style="border:1px solid #dee2e6; background-color: #dedede !important; -webkit-print-color-adjust: exact;">
                                                Area of Land in <br> (R-A-P-D)</th>
                                            <th
                                                style="border:1px solid #dee2e6; background-color: #dedede !important; -webkit-print-color-adjust: exact;">
                                                Area in (Sq.Ft)</th>
                                            <th
                                                style="border:1px solid #dee2e6; background-color: #dedede !important; -webkit-print-color-adjust: exact;">
                                                Area of the Land in Anna</th>
                                        </tr>
                                        @foreach ($sitevisit->lalpurjaDatas as $lalpurja)
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;padding: .1rem;">{{ $loop->iteration }}</td>
                                            <td style="border:1px solid #dee2e6;padding: .1rem;">{{ $lalpurja->kita_no }}</td>
                                            <td style="border:1px solid #dee2e6;padding: .1rem;">{{ $lalpurja->sqm_as_lalpurja }}</td>
                                            <td style="border:1px solid #dee2e6;padding: .1rem;">{{ $lalpurja->rapd_as_lalpurja }}</td>
                                            <td style="border:1px solid #dee2e6;padding: .1rem;">{{ $lalpurja->sqf_as_lalpurja }}</td>
                                            <td style="border:1px solid #dee2e6;padding: .1rem;">{{ $lalpurja->area_in_anna_as_lalpurja }}</td>
                                            
                                        </tr>
                                        
                                    @endforeach
                                       
                                        <tr>
                                            <th></th>
                                            <th colspan="2"
                                                style="border:1px solid #dee2e6; text-align: right;background-color: #dedede !important; -webkit-print-color-adjust: exact;">
                                                Total</th>
                                            <th
                                                style="border:1px solid #dee2e6;background-color: #dedede !important; -webkit-print-color-adjust: exact;">
                                                {{$sitevisit->valuationDetails->total_sqm_as_lalpurja ?? 0 }}</th>
                                            <th
                                                style="border:1px solid #dee2e6;background-color: #dedede !important; -webkit-print-color-adjust: exact;">
                                                {{$sitevisit->valuationDetails->total_rapd_as_lalpurja ?? 0 }}</th>
                                            <th
                                                style="border:1px solid #dee2e6;background-color: #dedede !important; -webkit-print-color-adjust: exact;">
                                                {{$sitevisit->valuationDetails->total_sqf_as_lalpurja ?? 0 }}</th>
                                            <th
                                                style="border:1px solid #dee2e6;background-color: #dedede !important; -webkit-print-color-adjust: exact;">
                                               {{$sitevisit->valuationDetails->total_anna_as_lalpurja ?? 0 }}</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <th>8.</th>
                            <th colspan="3" class="U">AREA OF LAND BASED ON ACTUAL MEASURMENT</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="3">Shape of the land approximately matches with shape in the cadastral Map.
                                &amp; actual Measurement is taken as By tape in the site, Also, According to the legal
                                document &amp; drawing given by the clients, is to be considerd for Total area of the
                                land is as follows. The Calculation Is shown in the site Plan.</td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <table class="table table-borderless mt-0">
                                    <tbody>
                                        <tr>
                                            <th width="30"></th>
                                            <th
                                                style="border:1px solid #dee2e6; background-color: #dedede !important; -webkit-print-color-adjust: exact;">
                                                Area Symbol</th>
                                            <th
                                                style="border:1px solid #dee2e6; background-color: #dedede !important; -webkit-print-color-adjust: exact;">
                                                Side(A)</th>
                                            <th
                                                style="border:1px solid #dee2e6; background-color: #dedede !important; -webkit-print-color-adjust: exact;">
                                                Side(B)</th>
                                            <th
                                                style="border:1px solid #dee2e6; background-color: #dedede !important; -webkit-print-color-adjust: exact;">
                                                Side(C)</th>
                                            <th
                                                style="border:1px solid #dee2e6; background-color: #dedede !important; -webkit-print-color-adjust: exact;">
                                                S=(A+B+C)/2</th>
                                            <th
                                                style="border:1px solid #dee2e6; background-color: #dedede !important; -webkit-print-color-adjust: exact;">
                                                Total area in sq.ft</th>
                                        </tr>
                                        @foreach ($sitevisit->landbasedDatas as $data)
                                            <tr>
                                                <td>{{ $loop->iteration}}</td>
                                                <td style="border:1px solid #dee2e6;padding: .1rem;">{{ $data->areaSymbol }}</td>
                                                <td style="border:1px solid #dee2e6;padding: .1rem;">{{ $data->sideA }}</td>
                                                <td style="border:1px solid #dee2e6;padding: .1rem;">{{ $data->sideB }}</td>
                                                <td style="border:1px solid #dee2e6;padding: .1rem;">{{ $data->sideC }}</td>
                                                <td style="border:1px solid #dee2e6;padding: .1rem;">{{ $data->sideS }}</td>
                                                <td style="border:1px solid #dee2e6;padding: .1rem;">{{ $data->sqFAPMeasurement }}</td>
                                            </tr>
                                        @endforeach
                                       
                                        <tr>
                                            <th></th>
                                            <th colspan="5"
                                                style="border:1px solid #dee2e6; text-align: right; background-color: #dedede !important; -webkit-print-color-adjust: exact;">
                                                Total</th>
                                            <th
                                                style="border:1px solid #dee2e6; background-color: #dedede !important; -webkit-print-color-adjust: exact;">
                                                {{ $sitevisit->valuationDetails->total_sqf_as_measurement }}</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <th>9.</th>
                            <th colspan="3">TOTAL AREA OF LAND</th>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th style="border:1px solid #dee2e6;">R-A-P-D</th>
                                            <th style="border:1px solid #dee2e6;">Sq Ft</th>
                                            <th style="border:1px solid #dee2e6;">Anna</th>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;padding: .1rem;">As per Lalpurja</td>
                                            <td style="border:1px solid #dee2e6;padding: .1rem;">{{ $sitevisit->valuationDetails->total_rapd_as_lalpurja}}</td>
                                            <td style="border:1px solid #dee2e6;padding: .1rem;">{{ $sitevisit->valuationDetails->total_sqf_as_lalpurja}}</td>
                                            <td style="border:1px solid #dee2e6;padding: .1rem;">{{ $sitevisit->valuationDetails->total_anna_as_lalpurja}}</td>
                                        </tr>
                                        <tr>
                                            <th>
                                            </th>
                                            <td style="border:1px solid #dee2e6;padding: .1rem;">Actual Measurment</td>
                                            <td style="border:1px solid #dee2e6;padding: .1rem;">{{ $sitevisit->valuationDetails->total_rapd_as_measurement}}</td>
                                            <td style="border:1px solid #dee2e6;padding: .1rem;">{{ $sitevisit->valuationDetails->total_sqf_as_measurement}}</td>
                                            <td style="border:1px solid #dee2e6;padding: .1rem;">{{ $sitevisit->valuationDetails->total_anna_as_measurement}}</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;padding: .1rem;">Deduction For Road
                                            </td>
                                            <td style="border:1px solid #dee2e6;padding: .1rem;">{{ $sitevisit->deduction->total_rapd_as_road }}</td>
                                            <td style="border:1px solid #dee2e6;padding: .1rem;">{{ $sitevisit->deduction->total_sqf_as_road }}</td>
                                            <td style="border:1px solid #dee2e6;padding: .1rem;">{{ $sitevisit->deduction->total_anna_as_road }}</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;padding: .1rem;">Deduction For
                                                Hightension</td>
                                            <td style="border:1px solid #dee2e6;padding: .1rem;">{{ $sitevisit->deduction->total_rapd_as_high_tension_deduction }}</td>
                                            <td style="border:1px solid #dee2e6;padding: .1rem;">{{ $sitevisit->deduction->deductionForHighTensionSqF }}</td>
                                            <td style="border:1px solid #dee2e6;padding: .1rem;">{{ $sitevisit->deduction->total_anna_as_high_tension_deduction }}</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;padding: .1rem;">Deduction For River
                                            </td>
                                            <td style="border:1px solid #dee2e6;padding: .1rem;">{{ $sitevisit->deduction->total_rapd_as_river_deduction }}</td>
                                            <td style="border:1px solid #dee2e6;padding: .1rem;">{{ $sitevisit->deduction->deductionForRiverSqF }}</td>
                                            <td style="border:1px solid #dee2e6;padding: .1rem;">{{ $sitevisit->deduction->total_anna_as_river_deduction }}</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;padding: .1rem;">Deduction For Low Land
                                            </td>
                                            <td style="border:1px solid #dee2e6;padding: .1rem;">{{ $sitevisit->deduction->total_rapd_as_river_deduction ?? ''}}</td>
                                            <td style="border:1px solid #dee2e6;padding: .1rem;">{{ $sitevisit->deduction->total_rapd_as_river_deduction ?? ''}}</td>
                                            <td style="border:1px solid #dee2e6;padding: .1rem;">{{ $sitevisit->deduction->total_rapd_as_river_deduction ?? ''}}</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;padding: .1rem;">Land Development (0% @
                                                of Total Land Area)</td>
                                            <td style="border:1px solid #dee2e6;padding: .1rem;">{{ $sitevisit->deduction->total_rapd_as_river_deduction ?? ''}}</td>
                                            <td style="border:1px solid #dee2e6;padding: .1rem;">{{ $sitevisit->deduction->total_rapd_as_river_deduction ?? ''}}</td>
                                            <td style="border:1px solid #dee2e6;padding: .1rem;">{{ $sitevisit->deduction->total_rapd_as_river_deduction ?? ''}}</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;padding: .1rem;">Boundry Correction(10%
                                                @ of Total Land Area)</td>
                                            <td style="border:1px solid #dee2e6;padding: .1rem;">0-1-1-0.67</td>
                                            <td style="border:1px solid #dee2e6;padding: .1rem;">442.80</td>
                                            <td style="border:1px solid #dee2e6;padding: .1rem;">1.29</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;padding: .1rem;">Irregular Shape /
                                                Sloppy Land (0% @ of Total Land Area)</td>
                                            <td style="border:1px solid #dee2e6;padding: .1rem;"></td>
                                            <td style="border:1px solid #dee2e6;padding: .1rem;"></td>
                                            <td style="border:1px solid #dee2e6;padding: .1rem;"></td>
                                        </tr>
                                        <tr>
                                            <th></th>
                                            <th
                                                style="border:1px solid #dee2e6; text-align: right; background-color: #dedede !important; -webkit-print-color-adjust: exact;">
                                                Consideration</th>
                                            <th
                                                style="border:1px solid #dee2e6; background-color: #dedede !important; -webkit-print-color-adjust: exact;">
                                                0-11-1-2.4</th>
                                            <th
                                                style="border:1px solid #dee2e6; background-color: #dedede !important; -webkit-print-color-adjust: exact;">
                                                3902.20</th>
                                            <th
                                                style="border:1px solid #dee2e6; background-color: #dedede !important; -webkit-print-color-adjust: exact;">
                                                11.40</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <th>10.</th>
                            <th colspan="3">A) PERMANENT OF THE BOUNDARIES: As per the four Boundaries letter issued
                                by</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="3">{{$sitevisit->valuationDetails->location_of_land ?? 'N/A'}}</td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <th width="30"></th>
                                            <th style="border:1px solid #dee2e6;" width="30">S.N.</th>
                                            <th style="border:1px solid #dee2e6;">Plot No</th>
                                            <th style="border:1px solid #dee2e6;">East</th>
                                            <th style="border:1px solid #dee2e6;">West</th>
                                            <th style="border:1px solid #dee2e6;">North</th>
                                            <th style="border:1px solid #dee2e6;">South</th>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;">1.</td>
                                            <td style="border:1px solid #dee2e6;">1001, 1004 &amp; 2283</td>
                                            <td style="border:1px solid #dee2e6;">2437</td>
                                            <td style="border:1px solid #dee2e6;">Kachhi Motor Bato</td>
                                            <td style="border:1px solid #dee2e6;">1002, 1005 &amp; 2282</td>
                                            <td style="border:1px solid #dee2e6;">291</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <th></th>
                            <th colspan="3">B) PERMANENT OF THE BOUNDARIES: As per the Site Visit.</th>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <th width="30"></th>
                                            <th style="border:1px solid #dee2e6;" width="30">S.N.</th>
                                            <th style="border:1px solid #dee2e6;">Plot No</th>
                                            <th style="border:1px solid #dee2e6;">East</th>
                                            <th style="border:1px solid #dee2e6;">West</th>
                                            <th style="border:1px solid #dee2e6;">North</th>
                                            <th style="border:1px solid #dee2e6;">South</th>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;">1.</td>
                                            <td style="border:1px solid #dee2e6;">1001, 1004 &amp; 2283</td>
                                            <td style="border:1px solid #dee2e6;">Land</td>
                                            <td style="border:1px solid #dee2e6;">Road</td>
                                            <td style="border:1px solid #dee2e6;">Land</td>
                                            <td style="border:1px solid #dee2e6;">Land</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="PageBreak"></div>
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <th>11.</th>
                            <th colspan="3">IMPORTANCE OF LOCATION</th>
                        </tr>
                        <tr>
                            <th></th>
                            <th colspan="3">A) Accessibility with</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td width="280px">  Right of Way</td>
                            <td>:</td>
                            <td>{{ $sitevisit->valuationDetails->rightOfWay ?? ''}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>  Road size as per Field</td>
                            <td>:</td>
                            <td>{{ $sitevisit->valuationDetails->road_size ?? ''}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>  Road size as per Map</td>
                            <td>:</td>
                            <td> {{ $sitevisit->valuationDetails->access_in_the_blue_print ?? ''}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>  Type of Access</td>
                            <td>:</td>
                            <td>{{ $sitevisit->valuationDetails->type_of_access ?? ''}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>  River</td>
                            <td>:</td>
                            <td>{{ $sitevisit->valuationDetails->river ?? ''}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>  High tension line</td>
                            <td>:</td>
                            <td>{{ $sitevisit->valuationDetails->hightension_line ?? ''}}</td>
                        </tr>
                        <tr>
                            <th></th>
                            <th colspan="3">B) Importanve of Properties &amp; Availability of Public Facilities:
                            </th>
                        </tr>
                        <tr>
                            <td></td>
                            <td>  Telephone</td>
                            <td>:</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>  Sewerage</td>
                            <td>:</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>  Electricity</td>
                            <td>:</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>  Water supply</td>
                            <td>:</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>  Possibility of Land Slide/Flood</td>
                            <td>:</td>
                            <td>No</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>  Mountain Area</td>
                            <td>:</td>
                            <td>No</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <th>12.</th>
                            <th colspan="3">LOCATION &amp; ACCESS OF THE LAND</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="3">The Property is connected by a Earthen road and distance of the property
                                is approx. 850M From Danchi Chowk &amp; 6.2Km from MBL Boudhha Branch to site.</td>
                        </tr>
                        <tr>
                            <th>13.</th>
                            <th colspan="3">VALUE OF LAND (Future Prospective)</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="3">The property is located in the Residential area and is very suitable for
                                livelyhood as well as suitable for Residential use , So the value of land might be
                                increase in coming futures.
                            </td>
                        </tr>
                        <tr>
                            <th></th>
                            <th colspan="3">A) GOVERNMENT RATE OF LAND : (IN NRs.)</th>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <th width="30"></th>
                                            <th style="border:1px solid #dee2e6;">Rate per sq. ft</th>
                                            <th style="border:1px solid #dee2e6;">Page No.</th>
                                            <th style="border:1px solid #dee2e6;">Rate per Anna</th>
                                            <th style="border:1px solid #dee2e6;">Rate per Ropani</th>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;">{{ $sitevisit->rateofland->perSqFAPGovRate ?? ''}}</td>
                                            <td style="border:1px solid #dee2e6;">{{ $sitevisit->rateofland->govPage ?? ''}}</td>
                                            <td style="border:1px solid #dee2e6;">{{$sitevisit->rateofland->perAnnaAPGovRate ?? 'N/A'}}</td>
                                            <td style="border:1px solid #dee2e6;">{{ $sitevisit->rateofland->perRopaniAPGovRate ?? ''}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <th></th>
                            <th colspan="3">B) MARKET RATE OF LAND: (IN NRs.)</th>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <th width="30"></th>
                                            <th style="border:1px solid #dee2e6;">Rate per sq. ft</th>
                                            <th style="border:1px solid #dee2e6;">Rate per Anna</th>
                                            <th style="border:1px solid #dee2e6;">Rate per Ropani</th>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;">{{ $sitevisit->rateofland->perSqFAPMarketRate ?? ''}}</td>
                                            <td style="border:1px solid #dee2e6;">{{ $sitevisit->rateofland->perAnnaAPMarketRate ?? ''}}</td>
                                            <td style="border:1px solid #dee2e6;">{{ $sitevisit->rateofland->perRopaniAPMarketRate ?? ''}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <th></th>
                            <th colspan="3">C) WIEGHTED FAIR MARKET RATE ADOPTED OF LAND : (IN NRs.)</th>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <th width="30"></th>
                                            <th style="border:1px solid #dee2e6;">Rate per sq. ft</th>
                                            <th style="border:1px solid #dee2e6;">Rate per Anna</th>
                                            <th style="border:1px solid #dee2e6;">Rate per Ropani</th>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;">{{ $sitevisit->rateofland->perSqFAPFairRate ?? ''}}</td>
                                            <td style="border:1px solid #dee2e6;">{{$sitevisit->rateofland->perAnnaAPFairRate ?? 'N/A'}}</td>
                                            <td style="border:1px solid #dee2e6;">{{ $sitevisit->rateofland->perRopaniAPFairRate ?? ''}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <th></th>
                            <th colspan="3">Note: Average rate adopted for land = 10% of Government rate + 90% of
                                Market rate</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="3">
                                <b>Commercial Value of Land</b>
                                <p>Commercial value of land is market price of that locality. So by interview and
                                    inquiry with inhabitans of that locality. The value of land varies from NRs.
                                    7,50,000 to 12,50,000 per Aana. Based on prevaling facilities ,size of the land and
                                    the location of the land market price of the land under consideration are taken as
                                    Nrs <b>10,00,000.00</b> per Anna.</p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="3">
                                <b>Distress Value of Land</b>
                                <p>Due to its location, size, access and the prevailing facilities the distress
                                    coefficient is taken as 80% to calculate the distress Value of property.</p>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="PageBreak"></div>
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <th>14.</th>
                            <th colspan="3">CALCULATION OF LAND VALUE</th>
                        </tr>
                        <tr>
                            <th></th>
                            <th colspan="3">A) <span>Wighted Fair Market Value of the Land</span> </th>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <th width="30"></th>
                                            <th style="border:1px solid #dee2e6;">Land Type <br> (R-A-P-D)</th>
                                            <th style="border:1px solid #dee2e6;">Area in Anna</th>
                                            <th style="border:1px solid #dee2e6;">Wighted Fair Market Rate /Anna (NRs)
                                            </th>
                                            <th style="border:1px solid #dee2e6;">Wighted Fair Market Value (NRs)</th>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;">0-11-1-2.4</td>
                                            <td style="border:1px solid #dee2e6;">11.40</td>
                                            <td style="border:1px solid #dee2e6;">{{$sitevisit->rateofland->perAnnaAPFairRate ?? 'N/A'}}</td>
                                            <td style="border:1px solid #dee2e6;">1,08,18,600.00</td>
                                        </tr>
                                        <tr>
                                            <th></th>
                                            <th colspan="3"
                                                style="border:1px solid #dee2e6; text-align: right; background-color: #dedede !important; -webkit-print-color-adjust: exact;">
                                                Total Wighted Fair Market Value of Land</th>
                                            <th
                                                style="border:1px solid #dee2e6; background-color: #dedede !important; -webkit-print-color-adjust: exact;">
                                                1,08,18,600.00</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <th></th>
                            <th colspan="3">B) <span>Distress Value of the Land</span></th>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <th width="30"></th>
                                            <th style="border:1px solid #dee2e6;">Land Type <br> (R-A-P-D)</th>
                                            <th style="border:1px solid #dee2e6;">Area in Anna </th>
                                            <th style="border:1px solid #dee2e6;">Distress Rate / Anna (NRs) @ 80%
                                                (FMV)</th>
                                            <th style="border:1px solid #dee2e6;">Distress Value (NRs)</th>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;">0-11-1-2.4</td>
                                            <td style="border:1px solid #dee2e6;">11.40</td>
                                            <td style="border:1px solid #dee2e6;">7,59,200.00</td>
                                            <td style="border:1px solid #dee2e6;">86,54,880.00</td>
                                        </tr>
                                        <tr>
                                            <th></th>
                                            <th colspan="3"
                                                style="border:1px solid #dee2e6; text-align: right; background-color: #dedede !important; -webkit-print-color-adjust: exact;">
                                                Total Distress Value of Land</th>
                                            <th
                                                style="border:1px solid #dee2e6; background-color: #dedede !important; -webkit-print-color-adjust: exact;">
                                                86,54,880.00</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <th width="30">15.</th>
                            <th>TOTAL WEIGHTED FAIR MARKET &amp; DISTRESS VALUE OF THE LAND</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <table class="table table-borderless mb-0">
                                    <tbody>
                                        <tr>
                                            <td colspan="2">A) Weighted Fair Market Value</td>
                                        </tr>
                                        <tr>
                                            <td style="border:1px solid #dee2e6;" width="200">Value of Land</td>
                                            <td style="border:1px solid #dee2e6;">Nrs. 1,08,18,600.00</td>
                                        </tr>
                                        <tr>
                                            <td style="border:1px solid #dee2e6;">Total Weighted Fair Market Value of
                                                Property (Say)</td>
                                            <td style="border:1px solid #dee2e6;">Nrs. 1,08,18,000.00</td>
                                        </tr>
                                        <tr>
                                            <td style="border:1px solid #dee2e6;" colspan="2"><b>In word:- One
                                                    crore eight lakh eighteen thousand rupees Only/-</b></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">B) Distress Value</td>
                                        </tr>
                                        <tr>
                                            <td style="border:1px solid #dee2e6;" width="200">Distress Value of
                                                Land</td>
                                            <td style="border:1px solid #dee2e6;">Nrs. 86,54,880.00</td>
                                        </tr>
                                        <tr class="vendorListHeading">
                                            <td style="border:1px solid #dee2e6;">Total Distress Value of Property
                                                (Say)</td>
                                            <td style="border:1px solid #dee2e6;">Nrs. 86,54,000.00</td>
                                        </tr>
                                        <tr class="vendorListHeading">
                                            <td style="border:1px solid #dee2e6;" colspan="2"><b>In word:- Eighty
                                                    six lakh fifty four thousand rupees Only/-</b></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <th width="30">16.</th>
                            <th>VALUE APPRECATION OR DEPRECIATION POSSIBILTIES IN</th>
                        </tr>
                        <tr>
                            <th width="30"></th>
                            <td>The property under consideration is useful as commercial/residential purpose. Since
                                these plots are connected by road, the team can assume that its value increases in
                                future. The team does not have any empirical formula to fix appreciation rate but from
                                our analysis we have fixed increment at 10% per annum.</td>
                        </tr>
                        <tr>
                            <th width="30">17.</th>
                            <th>RISKS AND FUTURE PROSPECT</th>
                        </tr>
                        <tr>
                            <th width="30"></th>
                            <td>The team could not visualize any risks at the near future. But one cannot rule out
                                sudden fall down due to recession. The team has not taken into consideration sudden
                                natural calamity or epidemic. Therefore, it is suggested that the property should be
                                insured for unforeseen calamities.</td>
                        </tr>
                        <tr>
                            <th width="30">18.</th>
                            <th>RETURN VALUE</th>
                        </tr>
                        <tr>
                            <th width="30"></th>
                            <td>Rental value has been generally adopted 4 to 5 percent of the capital cost.</td>
                        </tr>
                    </tbody>
                </table>
                <div class="PageBreak"></div>
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <th colspan="5" style="text-transform: uppercase;">19. Summary Information about Land
                            </th>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <th width="30"></th>
                                            <th style="border:1px solid #dee2e6;" width="30">SNO</th>
                                            <th style="border:1px solid #dee2e6;" width="300">(General &amp;
                                                Technical) Discription</th>
                                            <th style="border:1px solid #dee2e6;"></th>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;">1</td>
                                            <td style="border:1px solid #dee2e6;">Facilities available in the Land i.e
                                                Electrification, Sanitation, Water supply etc. </td>
                                            <td style="border:1px solid #dee2e6;">Yes</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;">2</td>
                                            <td style="border:1px solid #dee2e6;">Residential, Commercial, Hotel,
                                                Apartment , Other</td>
                                            <td style="border:1px solid #dee2e6;">Residential</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;">3</td>
                                            <td style="border:1px solid #dee2e6;">Comment on Present condition of Land.
                                            </td>
                                            <td style="border:1px solid #dee2e6;">Properly Maintained</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;">4</td>
                                            <td style="border:1px solid #dee2e6;">Land (Shape Size , Lowland Etc)</td>
                                            <td style="border:1px solid #dee2e6;">Normal</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;">5</td>
                                            <td style="border:1px solid #dee2e6;">Facing Of Land</td>
                                            <td style="border:1px solid #dee2e6;">West</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;">6</td>
                                            <td style="border:1px solid #dee2e6;">Possibility of Land Slide/Flood</td>
                                            <td style="border:1px solid #dee2e6;">No</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;">7</td>
                                            <td style="border:1px solid #dee2e6;">Mountain Area</td>
                                            <td style="border:1px solid #dee2e6;">No</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;">8</td>
                                            <td style="border:1px solid #dee2e6;">Other Major Comments</td>
                                            <td style="border:1px solid #dee2e6;">None</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;">9</td>
                                            <td style="border:1px solid #dee2e6;">Future Perspectives</td>
                                            <td style="border:1px solid #dee2e6;">Possibility of Future Improvement is
                                                normal.</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;">10</td>
                                            <td style="border:1px solid #dee2e6;">Rules and Regulation</td>
                                            <td style="border:1px solid #dee2e6;">Set by Town Development Board has
                                                been complied.</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;">11</td>
                                            <td style="border:1px solid #dee2e6;">Shape of Land</td>
                                            <td style="border:1px solid #dee2e6;">Shape of Land is almost Polygon and
                                                Shape of Land in Site matches with Shape of Land in Cadastral Map.</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;">12</td>
                                            <td style="border:1px solid #dee2e6;">Uses of Property&nbsp;</td>
                                            <td style="border:1px solid #dee2e6;">It is situated at Residential area
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;">13</td>
                                            <td style="border:1px solid #dee2e6;">Topography of Land</td>
                                            <td style="border:1px solid #dee2e6;">The Land is Flat and Not Seen near
                                                site, Hill</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;">14</td>
                                            <td style="border:1px solid #dee2e6;">Level of Land</td>
                                            <td style="border:1px solid #dee2e6;">Same Level</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;">15</td>
                                            <td style="border:1px solid #dee2e6;">Site Constraints</td>
                                            <td style="border:1px solid #dee2e6;">Nothing for site constraint
                                                (Limitation).</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;">16</td>
                                            <td style="border:1px solid #dee2e6;">Availability of Transportation
                                                Facilities</td>
                                            <td style="border:1px solid #dee2e6;">All types of Surface Transportation
                                                Facilities are available.</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;">17</td>
                                            <td style="border:1px solid #dee2e6;">Boundary Wall</td>
                                            <td style="border:1px solid #dee2e6;">yes</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;">18</td>
                                            <td style="border:1px solid #dee2e6;">Proximity to Civic Amenities</td>
                                            <td style="border:1px solid #dee2e6;">Yes, usefull of Land</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;">19</td>
                                            <td style="border:1px solid #dee2e6;">Market</td>
                                            <td style="border:1px solid #dee2e6;">Within Market</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;">20</td>
                                            <td style="border:1px solid #dee2e6;">Hospitals, Schools, College etc</td>
                                            <td style="border:1px solid #dee2e6;">Within Market.</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;">21</td>
                                            <td style="border:1px solid #dee2e6;">Electricity</td>
                                            <td style="border:1px solid #dee2e6;">Yes</td>
                                        </tr>
                                        <tr>
                                            <td width="30"></td>
                                            <td style="border:1px solid #dee2e6;" width="30">22</td>
                                            <td style="border:1px solid #dee2e6;" width="300">Water Supply Line
                                            </td>
                                            <td style="border:1px solid #dee2e6;">Yes</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;">23</td>
                                            <td style="border:1px solid #dee2e6;">Tube Well</td>
                                            <td style="border:1px solid #dee2e6;">Not Available</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;">24</td>
                                            <td style="border:1px solid #dee2e6;">Telecommunication</td>
                                            <td style="border:1px solid #dee2e6;">Yes</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;">25</td>
                                            <td style="border:1px solid #dee2e6;">Cable Television Line</td>
                                            <td style="border:1px solid #dee2e6;">Available.</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;">26</td>
                                            <td style="border:1px solid #dee2e6;">Sanitary System</td>
                                            <td style="border:1px solid #dee2e6;">Available / Not Available</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;">27</td>
                                            <td style="border:1px solid #dee2e6;">Environmental Aspects</td>
                                            <td style="border:1px solid #dee2e6;">Environmental Condition of the Area
                                                is normal. There are not any means of air polluting industries and other
                                                sources of environmental pollution.</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="border:1px solid #dee2e6;">29</td>
                                            <td style="border:1px solid #dee2e6;">Annual Income</td>
                                            <td style="border:1px solid #dee2e6;">Not Applicable</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>


                <!--<div class="PageBreak"></div>-->
                <div class="PageBreak"></div>
                <table class="table table-borderless">


                </table>
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <th width="30">16.</th>
                            <th>LEGAL ASPECTS OF THE PROPERTY</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Following are the legall Aspects which is related to the valuation Report and detail of
                                legal points have been summerized.</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td colspan="3">A) <b>Land ownership Document(Lalpurja)</b></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"> a) Type of Ownership</td>
                                            <td width="25%">Single</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"> b) Availability of Tiller</td>
                                            <td>None</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">B) <b>Land Revenue (Malpot)</b></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"> a) Whether the current Land Revenue has been paid</td>
                                            <td>Available</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"> b) Comments, if any</td>
                                            <td>None</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">C) <b>Land Registration Paper</b></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"> a) Whether Normal sale/ Gift/ Bakaspatra/ Ansabanda
                                            </td>
                                            <td>Rajinama</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"> b) Date of Registration</td>
                                            <td>2073/02/26 &amp; 2074/07/23</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"> c) 1 yr. 35 days In case of Normal sale (as per Muluki
                                                Act Chap 17, Clause   20) And 2 yr. 35 Days in case of gift (as per
                                                Muluki Act Chap 19 Clause 5)</td>
                                            <td>Not Applicable</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"> d) Comments, if any</td>
                                            <td>None</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">D) <b>Right of Property</b></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"> a) Source From Which the property has been acquired
                                            </td>
                                            <td>Normal Sale</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"> b) Is there any claimant to the property</td>
                                            <td>No</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"> c) Relation Between Client and the Owner of the
                                                property</td>
                                            <td>Mother &amp; Son</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"> d) Whether the property was Previously mortagaged to
                                                any other institution</td>
                                            <td>Not Known</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"> e) Has whole part of the land been notified or
                                                acquisition for any other     purpose by government or any other
                                                statutory body</td>
                                            <td>No</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"> f) Comments, if any</td>
                                            <td>No Any Comments</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">E) <b>Resposibal of The Property And Legal Document </b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"> a) Clients are resposibal for All Legal Documents .
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"> b) The Consultants (Engineer) will not take any legal
                                                Responsible of document.</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"> c) Engineer Can Verfy the site With the document
                                                Provided by Client.</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">F) <b>We also certify that no individual in our
                                                    firm/company has any financial interest in the said     property and
                                                    client or the client’s business.</b></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <th width="30">17.</th>
                            <th style="text-transform: uppercase;">Remarks &amp; Limiting Condition</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <table class="table table-borderless mb-0">
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>The Environmental condition is normal.There are not any means of air
                                                polluting industries &amp; other sources of environment pollution nearby
                                                this locality.</td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>This is to declare that the property shown to the consultants (in actual
                                                field) by the owner resembles with the documents provided to us. The
                                                same property is measured &amp; their values is worked out by the
                                                consultants. There are not any disputes on the prperty to be mortgaged
                                                to the best our Knowledge.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <th width="30">18.</th>
                            <th>CONCLUSION</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td>In our opinion this property may be taken as mortgage considering the distress aspect
                                value recommended in the valuation certificate.</td>
                        </tr>

                    </tbody>
                </table>

                <p style="text-align:right; margin-top:-30px;">
                    Er .Sanjay Mahato<br>
                    (Managing Director)<br>
                    NEC No : { 3700 Civil " A "}<br>
                </p>

                <div class="PageBreak"></div>
                <div class="col-md-12 text-center" style="padding-top: 30rem;">
                    <h2 style="font-size:50px;">DRAWING AND PHOTOGRAPH</h2>
                </div>
                <div class="PageBreak"></div>

                <h1 style="margin-left:110px;"><b>Photograph:-</b></h1>
                <br>
                <br>
                <img src="http://ndcnepal.com.np/ndc/storage/UploadPicture/IMG20210620130834_8871.jpg"
                    style="width:8in; height:5in;border: 10px solid #9e9e9e; margin-left:110px;">
                <br><br><br><br>
                <img src="http://ndcnepal.com.np/ndc/storage/UploadPicture/IMG20210620130837_7132.jpg"
                    style="width:8in; height:5in;border: 10px solid #9e9e9e; margin-left:110px;">
                <br><br><br>
                <h2 style="text-align:center"><b>The Above Photograph is of plot No:- {{ $sitevisit->lalpurjaDatas->implode(' - ','kita_no') ?? 'N/A'}}</b></h2>
                <div class="PageBreak"></div>
                <h1 style="margin-left:110px;"><b>Photograph:-</b></h1>
                <br>
                <br>
                <img src="http://ndcnepal.com.np/ndc/storage/UploadPicture/IMG20210620130845_6566.jpg"
                    style="width:8in; height:5in;border: 10px solid #9e9e9e; margin-left:110px;">
                <br><br><br><br>
                <img src="http://ndcnepal.com.np/ndc/storage/UploadPicture/IMG20210620130917_8983.jpg"
                    style="width:8in; height:5in;border: 10px solid #9e9e9e; margin-left:110px;">
                <br><br><br>
                <h2 style="text-align:center"><b>The Above Photograph is of plot No:- {{ $sitevisit->lalpurjaDatas->implode(' - ','kita_no') ?? 'N/A'}}</b></h2>
                <div class="PageBreak"></div>
                <h1 style="margin-left:110px;"><b>Photograph:-</b></h1>
                <br>
                <br>
                <img src="http://ndcnepal.com.np/ndc/storage/UploadPicture/IMG20210620130955_9720.jpg"
                    style="width:8in; height:5in;border: 10px solid #9e9e9e; margin-left:110px;">
                <br><br><br><br>
                <img src="http://ndcnepal.com.np/ndc/storage/UploadPicture/IMG20210620131710_6652.jpg"
                    style="width:8in; height:5in;border: 10px solid #9e9e9e; margin-left:110px;">
                <br><br><br>
                <h2 style="text-align:center"><b>The Above Photograph is of plot No:- {{ $sitevisit->lalpurjaDatas->implode(' - ','kita_no') ?? 'N/A'}}</b></h2>
                <div class="PageBreak"></div>

                <img src="http://ndcnepal.com.np/ndc/storage/UploadDocument/trace_2714.jpg"
                    style="width:100%; height:1400px;">
                <div class="PageBreak"></div>
                <img src="http://ndcnepal.com.np/ndc/storage/UploadDocument/site_8450.jpg"
                    style="width:100%; height:1400px;">
                <div class="PageBreak"></div>
                <img src="http://ndcnepal.com.np/ndc/storage/UploadDocument/consideration_9911.jpg"
                    style="width:100%; height:1400px;">
                <div class="PageBreak"></div>
                <img src="http://ndcnepal.com.np/ndc/storage/UploadDocument/location map_1909.jpg"
                    style="width:100%; height:1400px;">
                <div class="PageBreak"></div>

                <div class="col-md-12 text-center">
                    <br><br>
                    <h2><b>Legal Documents</b></h2><br><br>
                </div>
                <table class="table table-bordered" style="width:60%;margin-left: auto;margin-right: auto;">
                    <tbody>
                        <tr>
                            <td colspan="3" style="text-align:center;"><b>LIST OF ATTACHED DOCUMENTS</b></td>
                        </tr>
                        <tr>
                            <th width="30">SNO</th>
                            <th>Document Name</th>
                            <th>Attached</th>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>Land Ownership Document</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Land Revenue</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Map of plot prepared by Survey Dept</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Citizenship of Owner of property</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td>Citizenship of Client</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>6.</td>
                            <td>Char Killa Approval Letter</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>7.</td>
                            <td>Location Plan</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>8.</td>
                            <td>Site Plan</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>9.</td>
                            <td>Photographs</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>10.</td>
                            <td>Tress Paper Prepared by Survey Dept</td>
                            <td>Yes</td>
                        </tr>
                    </tbody>
                </table>



            </div>
        </div>

        <style type="text/css">
            body {
                /* this affects the margin on the content before sending to printer */
                margin: 0px;
            }

            .table td,
            .table th {
                padding: .2rem;
            }

            @page {

                margin: 13mm -5mm 15mm 13mm;
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
                    font-size: 17pt;
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
