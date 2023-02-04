<html><head></head><body><div class="PrintSectionPrePrint" id="PrintDiv">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
  <style type="text/css">
  body{font-size: 14px;font-family: "Times New Roman", Times, serif;}
  .table td, .table th{padding: .3rem;}
  .table-borderless td,.table-borderless th{border: none;}
  .table-bordered td, .table-bordered th{border: 1px solid #9a9a9a;}
  .B{font-weight: bold;}
  .U{text-decoration: underline;}
  .C{text-align:center;}
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
        <h5><b style="font-size: 40px;">Nepal Development Consultants</b></h5><strong><hr style="margin-top: 5px;margin-bottom: 5px;"></strong>
        <h5 style="font-size: 30px;"><b>Consulting Engineers [Valuer's & Designer]</b></h5>
        <p style="margin-bottom:10px;">Sankhamul-31,Ktm Tel 01-5242605, 9803658160,Email: ndcaccount@yahoo.com</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12" style="margin-top: 5px;">
        <b style="text-transform:uppercase;">{{ $sitevisit->bank->name ?? ''}}</b>
        <br>
        {{ $sitevisit->branch ?? 'N/A'}} Branch    </div>
      <div class="col-md-12 text-center" style="margin-top: -50px;margin-bottom: 5px;">
        <h2 class="B U">Pre Valuation Report Summary</h2>
        <h3>({{ $sitevisit->valuation_type == "Land" ? 'Land' : 'Land & Building'}})</h3>
      </div>
      <div class="col-md-12">
        <table class="table table-borderless mb-0">
          <tbody>
            <tr>
              <td width="170">Valuer Name</td>
              <td width="30">:</td>
              <td>Nepal Development Consultant</td>
              <td>Valuation Assignment No : {{$sitevisit->registration_id ?? 'registration_id'}}</td>
            </tr>
            <tr>
              <td class="B" width="170"><b>Customer Name</b></td>
              <td width="30">:</td>
              <td class="B U">{{ $sitevisit->client->client_name ?? 'N/A'}}</td>
              <td></td>
            </tr>
            <tr>
              <td>Valuation Date </td>
              <td width="30">:</td>
              <td>2078/03/14</td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-md-12">
        <table class="table table-borderless mb-0">
          <tbody><tr>
            <td class="B" width="250">Property Owner</td>
            <td class="B" width="30">:</td>
            <td class="B U">Name : {{ $sitevisit->client->owner->owner_name ?? 'N/A'}}</td>
          </tr>
                  <tr>
            <td></td>
            <td width="30"></td>
            <td>{{ $sitevisit->client->owner->address ?? 'N/A'}}</td>
          </tr>
          <tr>
            <td></td>
            <td width="30"></td>
            <td>{{ $sitevisit->client->owner->district ?? 'N/A'}}</td>
          </tr>
          <tr>
            <td class="B" width="250">Property Address</td>
            <td class="B" width="30">:</td>
            <td class="B U">Plot No. :  441 &amp; 443</td>
          </tr>
          <tr>
            <td></td>
            <td width="30"></td>
            <td>{{$sitevisit->valuationDetails->location_of_land ?? 'N/A'}}</td>
          </tr>
          <tr>
            <td></td>
            <td width="30"></td>
            <td>{{$sitevisit->valuationDetails->district ?? 'N/A'}}</td>
          </tr>
        </tbody></table>
      </div>
      <div class="col-md-12">
        <table class="table table-borderless mt-0">
          <tbody><tr>
            <td><strong>Market Rate Of Land</strong></td>
            <td><strong>{{$sitevisit->rateofland->perAnnaAPMarketRate ?? 'N/A'}}</strong></td>
            <td><strong>&nbsp;&nbsp;&nbsp;&amp; Goverement Rate</strong></td>
            <td><strong>{{$sitevisit->rateofland->perAnnaAPGovRate ?? 'N/A'}}</strong></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td><strong>Total Land Value (FMV)</strong></td>
            <td style="border-bottom:1px solid #000;">{{$sitevisit->rateofland->fairMarketValueOfLand ?? 'N/A'}}</td>
            <td><strong>&nbsp;&nbsp;&nbsp;Distress Value</strong></td>
            <td style="border-bottom:1px solid #000;">{{$sitevisit->rateofland->distressValueOfLand ?? 'N/A'}}</td>
            <td><strong>&nbsp;&nbsp;&nbsp;Area</strong></td>
            <td style="border-bottom:1px solid #000;">0-1-2-1.3 (1.58Anna)</td>
          </tr>
          <tr>
            <td><strong>Total Building Value (FMV)</strong></td>
            <td style="border-bottom:1px solid #000;">{{$sitevisit->valuationDetails->totalNetBuildingAmount ?? 0}}</td>
            <td><strong>&nbsp;&nbsp;&nbsp;Distress Value</strong></td>
            <td style="border-bottom:1px solid #000;">{{$sitevisit->valuationDetails->totalBuildingDistressValue ?? 0}}</td>
            <td><strong>&nbsp;&nbsp;&nbsp;Plinth Area</strong></td>
            <td style="border-bottom:1px solid #000;">495.51 sq.ft</td>
          </tr>
          <tr>
            <td><strong>Total Apartment Value (FMV)</strong></td>
            <td style="border-bottom:1px solid #000;">{{$sitevisit->valuationDetails->totalNetBuildingAmount ?? 0}}</td>
            <td><strong>&nbsp;&nbsp;&nbsp;Distress Value</strong></td>
            <td style="border-bottom:1px solid #000;">{{$sitevisit->valuationDetails->totalBuildingDistressValue ?? 0}}</td>
            <td><strong>&nbsp;&nbsp;&nbsp;Area</strong></td>
            <td style="border-bottom:1px solid #000;"></td>
          </tr>
          <tr>
            <td><strong>Construction Estimate Value</strong></td>
            <td style="border-bottom:1px solid #000;">47,21,000.00</td>
            <td><strong>&nbsp;&nbsp;&nbsp;Distress Value</strong></td>
            <td style="border-bottom:1px solid #000;">47,21,000.00</td>
            <td><strong>&nbsp;&nbsp;&nbsp;Total Area</strong></td>
            <td style="border-bottom:1px solid #000;">1721.93 sq.ft</td>
          </tr>
          <tr>
            <td><strong>Total of Property FMV</strong></td>
            <td style="border-bottom:1px solid #000;">15,92,000.00</td>
            <td><strong>&nbsp;&nbsp;&nbsp;Total Distress Value</strong></td>
            <td style="border-bottom:1px solid #000;">15,92,000.00</td>
            <td colspan="3"></td>
          </tr>
        </tbody></table>
      </div>
      <div class="col-md-8">
        <table class="table table-bordered aa mb-0">
          <tbody><tr>
            <td>Motorable Access</td>
            <td>√ Yes   ⌽ No </td>
          </tr>
          <tr>
            <td>River / stream near property</td>
            <td>√ Yes   ⌽ No</td>
          </tr>
          <tr>
            <td>Heritage sites near property</td>
            <td>⌽ Yes   √ No</td>
          </tr>
          <tr>
            <td>Property Type</td>
            <td>√ Residential  &nbsp;&nbsp;&nbsp; ⌽ Commercial <br> ⌽ Agricultural   ⌽ Others</td>
          </tr>
          <tr>
            <td>Property Ownership Type</td>
            <td>√ Single   ⌽ Joint</td>
          </tr>
          <tr>
            <td>Hold Type</td>
            <td>Free Hold</td>
          </tr>
          <tr>
            <td>Property Usage</td>
            <td>√ Residential   ⌽ Commercial   ⌽ Others</td>
          </tr>
          <tr>
            <td>Property Age</td>
            <td>0 Years </td>
          </tr>
          <tr>
            <td>Residual Age</td>
            <td>50 Years</td>
          </tr>
        </tbody></table>
      </div>
      <div class="col-md-4">
        <table class="table table-bordered aa mb-0">
          <tbody><tr>
            <td colspan="2" style="background-color: #dedede !important; -webkit-print-color-adjust: exact;">Four Boundary Details: All Plot</td>
          </tr>
          <tr>
            <td>East</td>
            <td> 442 &amp; 444</td>
          </tr>
          <tr>
            <td>West</td>
            <td> Motar Bato Tatha Raj Kulo Bato &amp; Motar Bato Tatha Raj Kulo Bato</td>
          </tr>
          <tr>
            <td>North</td>
            <td> 443 &amp; 444</td>
          </tr>
          <tr>
            <td>South</td>
            <td> 442 &amp; 441</td>
          </tr>
        </tbody></table>
  
        <table class="table table-borderless mt-3">
          <tbody><tr>
            <td><strong> Type of Access</strong></td>
            <td>☑ Earthen</td>
          </tr>
          <tr>
            <td></td>
            <td>☐ Gravel</td>
          </tr>
          <tr>
            <td></td>
            <td>☐ Black Topped</td>
          </tr>
          <tr>
            <td colspan="2" style="text-align:center; font-weight:bold;">(Please us "tick mark")</td>
          </tr>
        </tbody></table>
      </div>
      <div class="col-md-12" style="margin-top:5px;margin-bottom:5px; font-weight:bold;">
        Remarks:- The Propertiy is connected with 12'-0" wide Earthen Road (Dead End) on East &amp; 13'-0" Wide Earthen Road on South.
      </div>
      <div class="col-md-12">
        <table class="table table-borderless mt-0 mb-0">
          <tbody><tr>
            <td>A. Total Construction Project Cost: Nrs. 47,21,000.00</td>
          </tr>
          <tr>
            <td>B. Construction status Till Date: Nrs. 2,97,306.00</td>
          </tr>
          <tr>
            <td>C. Building Construction Approval Date: 2078/3/11</td>
          </tr>
          <tr>
            <td>D. Building Construction Completion Certificate (BCCC) : </td>
          </tr>
        </tbody></table>
      </div>
      <div class="col-md-12" style="margin-top:5px;margin-bottom:5px; font-weight:bold;">
        Special comments (Please include comments on flood zone and land slide)
      </div>
      <div class="col-md-12" style="margin-top:5px;margin-bottom:5px; font-weight:bold;">
        <table class="table table-borderless mt-0 mb-0">
          <tbody><tr>
            <td style="font-weight:bold;">Property for the Bank &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="checkbox" checked=""> Recommended &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox"> Not Recommended</td>
          </tr>
        </tbody></table>
      </div>
      <div class="col-md-12">
        <div class="row">
                  <div class="col-md-1"><h4>Note:-</h4></div>
          <div class="col-md-11">This Pre valuation report is only for banking process, not for loan disbursement. Our consultant will not be responsible if loan is disburse without final valuation report. This pre report is considered voidable without full valuation report &amp; the validity of this report is only for three months.</div>
        </div>
      </div>
      <div class="col-md-12" style="text-align:right;">
        <p style="margin-top:-20px; margin-bottom:0px;">......................................................</p>
          <h6 class="text-bold">Er. Sanjay Mahato</h6>
          (Managing Director)<br>
          <p>NEC No {3700 Civil "A"}</p>
      </div>
    </div>
  
  <style type="text/css">
  .table td, .table th{padding: .2rem;}
  @page {
    margin-top: 4pt;
    margin-right: 2pt;
    margin-bottom: 1pt;
  }
  @media print {
    html, body, div, span, applet, object, iframe, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, font, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td {
      font-size: 15pt;
      font-family: "Times New Roman", Times, serif;
    }
    h1, h2, h3, h4, h5, h6{
      font-size: 17pt;
      margin-bottom: 0px;
    }
  
    .bank{font-size:24px;}
    .aa td{font-size:17pt;}
  
    .table-bordered td, .table-bordered th{
      border-color: #9a9a9a !important;
      -webkit-print-color-adjust:exact ;
    }
  
    .table thead tr td,.table tbody tr td{
      border-color: #9a9a9a !important;
      -webkit-print-color-adjust:exact ;
    }
  
    .vendorListHeading th, .vendorListHeading td {
      background-color: #AEAEAE !important;
      -webkit-print-color-adjust: exact;
    }
  
    .table td, .table th{padding: .2rem;}
    .PageBreak {
      page-break-before: always;
    }
  }
  </style>
  </div></body></html>