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
             style="background-color: #dedede !important; -webkit-print-color-adjust: exact; margin-top: 20px;">

             <div class="col-md-2">
                 <p style="font-family: 'Forte';font-size: 75px;padding: 0px;/* width: 83px; */text-align: right; color:red;">
                     ndc</p>
             </div>

             <div class="col-md-10 text-left ml-0 mr-0 text-bold">
                 <h5><b style="font-size: 55px; ">Nepal Development Consultants</b></h5>
                 <strong>
                     <hr style=" margin-top: 5px; margin-bottom: 5px;">
                 </strong>

                 <h5 style="font-size: 40px;"><b>
                    Consulting Engineers [Valuer's &amp; Designer]</b>
                 </h5>
                 <p>Sankhamul-31,Ktm Tel 01-5242605, 9803658160,Email: ndcaccount@yahoo.com</p>
             </div>
         </div>

         <div class="row" style="margin-top: 80px;">
             <div class="col-md-4 ml-4">
                 <b>{{ $sitevisit->bank->name ?? ''}}</b>
                 <br>
                 {{ $sitevisit->branch ?? 'N/A'}} Branch
             </div>
             <div class="col-md-7 text-right ml-3">
                 <b>Date:- 2078/03/14 (B.S)</b>
             </div>
         </div>
         <div class="row">
             <div class="col-md-12 text-center" style="margin-top: 20px;margin-bottom: 20px;">
                 <h4 class="B U">Pre Valuation Report</h4>
                 <h4>({{ $sitevisit->valuation_type == "Land" ? 'Land' : 'Land & Building'}})</h4>
             </div>
         </div>
         <div class="col-md-12">
             <h4>1 Information of Client</h4>
         </div>
         <div class="col-md-12">
             <table class="table table-borderless">
                 <tbody>
                    <tr>
                        <td width="30"></td>
                        <td><b>Name</b></td>
                        <td class="B" width="30"><b>:</b></td>
                        <td class="U B">{{ $sitevisit->client->client_name ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <td width="30"></td>
                        <td>Address</td>
                        <td width="30"><b>:</b></td>
                        <td>{{ $sitevisit->client->address ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <td width="30"></td>
                        <td>District</td>
                        <td class="B" width="30"><b>:</b></td>
                        <td>{{ $sitevisit->client->district ?? 'N/A'}}</td>
                    </tr>
                     <tr>
                         <td width="30"></td>
                         <td>Contact No</td>
                         <td width="30">:</td>
                         <td>{{ $sitevisit->client->phone ?? 'N/A'}}</td>
                     </tr>
                 </tbody>
             </table>
         </div>

         <div class="col-md-12">
             <h4>2 Owner of the Property</h4>
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
                 </tbody>
             </table>
         </div>

         <div class="col-md-12">
             <h4>3 Property Evaluated</h4>
         </div>
         <div class="col-md-12">
             <table class="table table-bordered">
                 <tbody>
                     <tr>
                         <td width="30">SNo</td>
                         <td>Location of the Property</td>
                         <td>Plot No.</td>
                         <td>Area as per Lal Purja (R-A-P-D)</td>
                         <td>Area as per Actual Measurement (R-A-P-D)</td>
                         <td>Area Considered for Valuation(R-A-P-D)</td>
                     </tr>
                     <tr>
                         <td>1</td>
                         <td>{{$sitevisit->valuationDetails->location_of_land ?? 'N/A'}}</td>
                         <td> 441 &amp; 443</td>
                         <td>{{ $sitevisit->valuationDetails->total_rapd_as_lalpurja ?? 'N/A'}}</td>

                         <td>{{ $sitevisit->valuationDetails->total_rapd_as_measurement ?? 'N/A'}}</td>

                         <td>{{ $sitevisit->deduction->rAPDAPConsideration ?? 'N/A'}}</td>
                     </tr>
                     <tr>
                         <td colspan="5" style="text-align:right">Area considered for Valutation in Anna</td>
                         <td>{{ $sitevisit->deduction->annaAPConsideration ?? 'N/A'}}</td>
                     </tr>
                 </tbody>
             </table>
         </div>


         <div class="col-md-12">
             <h4>4 Accessibility and other Misc. Particulars of Land</h4>
         </div>
         <div class="col-md-12">
             <table class="table table-bordered">
                 <tbody>
                     <tr>
                         <td width="30">SNo</td>
                         <td>Plot No.</td>
                         <td>Access in the Site</td>
                         <td>Access in the Blue Print</td>
                         <td>Importance(Commercial, Residential etc.)</td>
                     </tr>
                     <tr>
                         <td>1</td>
                         <td> 441 &amp; 443</td>
                         <td>12'-0" wide Earthen Road (Dead End) on East &amp; 13'-0"</td>
                         <td>10'-7" &amp; 6'-5" (Dead End)</td>
                         <td>Residential</td>
                     </tr>
                 </tbody>
             </table>
         </div>


         <div class="col-md-12">
             <h4>5 Rate of Land in Anna (In Nrs)</h4>
         </div>
         <div class="col-md-12">
             <table class="table table-bordered">
                 <tbody>
                     <tr>
                         <td width="30">SNo</td>
                         <td>Plot No.</td>
                         <td>Market Rate</td>
                         <td>Government Rate</td>
                         <td>Weighted Rate ({{$sitevisit->bank->fair_market_rate ?? 0}}% of Market Rate &amp;  {{$sitevisit->bank->governmant_rate ?? 0}}% of Government Rate)</td>
                     </tr>
                     <tr>
                         <td>1</td>
                         <td> 441 &amp; 443</td>
                         <td>{{$sitevisit->rateofland->perAnnaAPMarketRate ?? 'N/A'}}</td>
                         <td>{{$sitevisit->rateofland->perAnnaAPGovRate ?? 'N/A'}}</td>
                         <td>{{$sitevisit->rateofland->perAnnaAPFairRate ?? 'N/A'}}</td>
                     </tr>
                 </tbody>
             </table>
         </div>



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

         <div class="PageBreak"></div>
         <br><br><br><br>
         @if($sitevisit->valuation_type != "Land" && $sitevisit->buildingValuations->count() > 0)
         <div class="col-md-12">
             <h4>7 Value of Building (Amounts in Nrs)</h4>
         </div>
         <div class="col-md-12">
             <table class="table table-bordered">
                 <tbody>
                     <tr>
                         <td>SNo</td>
                         <td>Area (Sq. ft.)</td>
                         <td>Rate (per Sq. ft.)</td>
                         <td>Total Amount</td>
                         <td>Sanitary ,Pulumbing Fitting @ of 0% of Total Value</td>
                         <td>Electricity Work @ 0 % of Total Value</td>
                         <td>Net Value of Builgin(A)</td>
                         <td>Depriciation of Building is 0 % @ 0 yrs=0%) (B)</td>
                         <td>Weighted Fair Market Value (WFMV) (A-B)</td>
                         <td>Total Distress Value of the Building @ 100% (WFMV)</td>
                     </tr>
                     @foreach ($sitevisit->buildingValuations as $buildingValuation)
                     <tr>
                         <td>1</td>
                         <td>495.51</td>
                         <td>600.00</td>
                         <td>2,97,306.00</td>
                         <td>0</td>
                         <td>0</td>
                         <td>2,97,306.00</td>
                         <td>0.00</td>
                         <td>2,97,306.00</td>
                         <td>2,97,306.00</td>
                     </tr>
                    @endforeach            
                     <tr>
                         <td style="text-align:right;">Total</td>
                         <td>1721.93</td>
                         <td></td>
                         <td>{{ $sitevisit->valuationDetails->totalBuildingAmount ?? 0}}</td>
                         <td>0</td>
                         <td>0</td>
                         <td>{{$sitevisit->valuationDetails->totalNetBuildingAmount ?? 0}}</td>
                         <td>{{$sitevisit->valuationDetails->totalBuildingDepriciation ?? 0}}</td>
                         <td>2,97,306.00</td>
                         <td>2,97,306.00</td>
                     </tr>
                 </tbody>
             </table>
         </div>
         @endif

         <div class="col-md-12">
             <h4>{{ $sitevisit->valuation_type == "Land" ? 8 : 9 }} Total Value Of the Properties</h4>
         </div>
         <div class="col-md-12">
             <table class="table table-bordered">
                 <tbody>
                     <tr>
                         <td width="30">SNo</td>
                         <td>Description</td>
                         <td>Weighted Fair Market Value (NRs.)</td>
                         <td>Distress Value (Rs.)</td>
                     </tr>
                     <tr>
                         <td>1</td>
                         <td>Land Value</td>
                         <td>12,95,600.00</td>
                         <td>12,95,600.00</td>
                     </tr>
                     <tr>
                         <td>2</td>
                         <td>Building Value</td>
                         <td>2,97,306.00</td>
                         <td>2,97,306.00</td>
                     </tr>
                     <tr>
                         <td colspan="2" style="text-align:right;">Total</td>
                         <td>15,92,000.00</td>
                         <td>15,92,000.00</td>
                     </tr>
                 </tbody>
             </table>
         </div>

         <div class="col-md-12">
             <h4>9 Total Value of Property Land &amp; Building</h4>
         </div>
         <div class="col-md-12">
             <table class="table table-borderless">
                 <tbody>
                     <tr style="border:1px solid #dee2e6;">
                         <td>Wighted Fair Market Value of Property is NRs. : 15,92,000.00 <br>
                             In word:- Fifteen lakh ninety two thousand rupees only /-
                         </td>
                     </tr>
                     <tr>
                         <td>&nbsp;</td>
                     </tr>
                     <tr style="border:1px solid #dee2e6;">
                         <th>Distress Value of Property is NRs. : 15,92,000.00 <br>
                             In word:- Fifteen lakh ninety two thousand rupees only /-
                         </th>
                     </tr>
                 </tbody>
             </table>
         </div>

         <div class="col-md-12">
             <div class="row">
                 <div class="col-md-2">
                     <h4>10 Road size</h4>
                 </div>
                 <div class="col-md-10">{{ $sitevisit->valuationDetails->road_size ?? ''}}</div>
             </div>
         </div>
         <div class="col-md-12">
             <div class="row">
                 <div class="col-md-2">
                     <h4>11 Note:-</h4>
                 </div>
                 <div class="col-md-10">This Pre valuation report is only for banking process, not for loan
                     disbursement.
                     Our consultant will not be responsible if loan is disburse without final valuation report. This pre
                     report is considered voidable without full valuation report &amp; the validity of this report is
                     only for three months.</div>
             </div>
         </div>
         <div class="col-md-12" style="text-align:right;">
            <img src="{{asset('backendfiles/sign/sign123.png')}}" alt="sign">

             <p style="margin-top:60px;">......................................................</p>
             <p>
             </p>
             <h6 class="text-bold">Er. Sanjay Mahato</h6>
             (Managing Director)<br>
             <p>NEC No {3700 Civil "A"}</p>
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
                     font-size: 17pt;
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
