

@if (isset($sitevisit) && $sitevisit->landbasedDatas->isNotEmpty())
    <table class="table table-bordered dataTable" id="TblAreaAsPerMeasurement" style="width:100%">
        <thead class="thead-light">
            <tr>
                <th scope="col" width="30">Sno</th>
                <th scope="col">Area Symbol</th>
                <th scope="col">Side A</th>
                <th scope="col">Side B</th>
                <th scope="col">Side C</th>
                <th scope="col">S = (a+b+c)/2</th>
                <th scope="col">Area Sq.F</th>
                <th scope="col">Area Sq.M</th>
                <th scope="col">Area In Anna</th>
                <th scope="col">Area in (R-A-P-D)</th>
                <th scope="col" width="50">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $ltotalSideA= 0;
                $ltotalSideB= 0;
                $ltotalSideC= 0;
                $ltotalSideT= 0;
                $ltotalSqM= 0;
                $ltotalSqF= 0;
                $ltotalAnna=0;
            @endphp
            @foreach ($sitevisit->landbasedDatas as $data)


            <tr>
                <th scope="row"></th>
                <td>{{ $data->areaSymbol }} </td>
                <td>{{ $data->sideA }}</td>
                <td>{{ $data->sideB }}</td>
                <td>{{ $data->sideC	 }}</td>
                <td>{{ $data->sideS }}</td>
                <td>{{ $data->sqFAPMeasurement }}</td>
                <td>{{ $data->sqMAPMeasurement }}</td>
                <td>{{ $data->areaInAnnaAPMeasurement }}</td>
                <td>{{ $data->total_rapd_as_cal }}</td>
                <td><span class="text-danger">Delete</td>
            </tr>
            @php
                $ltotalSideA= $ltotalSideA + $data->sideA;
                $ltotalSideB= $ltotalSideB + $data->sideB;
                $ltotalSideC= $ltotalSideC + $data->sideC;
                $ltotalSideT= $ltotalSideT + $data->sideS;
                $ltotalSqM= $ltotalSqM+$data->sqMAPMeasurement;
                $ltotalSqF= $ltotalSqF+$data->sqFAPMeasurement;
                $ltotalAnna= $ltotalAnna+$data->areaInAnnaAPMeasurement;
            @endphp
            @endforeach
           
        </tbody>
        <tfoot class="thead-light">
            <tr>
                <th scope="col" colspan="2" style="text-align: right;">TOTAL AREA BASED ON ACTUAL MEASUREMENT</th>
                <th scope="col">
                    <label id="LblTotalAreaSideA">{{ $ltotalSideA ?? 0 }}</label>
                    <input type="hidden" name="totalAreaSideA"
                        id="totalAreaSideA" value="{{ $ltotalSideA ?? 0}}">
                    </th>
                <th scope="col">
                    <label id="LblTotalAreaSideB">{{ $ltotalSideA ?? 0 }}</label>
                    <input type="hidden" name="totalAreaSideB" id="totalAreaSideB" value="{{ $ltotalSideB ?? 0}}">
                </th>
                <th scope="col">
                    <label id="LblTotalAreaSideC"> {{ $ltotalSideC ?? 0}}</label>
                    <input type="hidden" name="totalAreaSideC"
                        id="totalAreaSideC" value="{{ $ltotalSideC ?? 0}}">
                    </th>
                <th scope="col">
                    <label id="LblTotalAreaSideS"> {{ number_format($ltotalSideT,2)  ?? 0}}</label>
                    <input type="hidden" name="totalAreaSideS"
                        id="totalAreaSideS" value="{{  number_format($ltotalSideT,2) ?? 0}}">
                    </th>
                <th scope="col">
                    <label id="LblTotalSqFAsPerCal"> {{ number_format($ltotalSqF,2)??  $sitevisit->valuationDetails->total_sqf_as_measurement ?? 0}}</label>
                    <input type="hidden" name="totalSqFAsPerCal"
                        id="totalSqFAsPerCal" value="{{ $ltotalSqF??  $sitevisit->valuationDetails->total_sqf_as_measurement ?? 0}}">
                    </th>
                <th scope="col">
                    <label id="LblTotalSqMAsPerCal"> {{ number_format($ltotalSqM,2)??  $sitevisit->valuationDetails->total_sqm_as_measurement ?? 0}}</label>
                    <input type="hidden" name="totalSqMAsPerCal"
                        id="totalSqMAsPerCal" value="{{$ltotalSqM ??  $sitevisit->valuationDetails->total_sqm_as_measurement ?? 0}}">
                    </th>
                <th scope="col">
                    <label id="LblTotalAreaInAnnaAPMeasurement"> {{ number_format($ltotalAnna,2)??  $sitevisit->valuationDetails->total_anna_as_measurement ?? 0}}</label>
                    <input type="hidden"
                        name="totalAreaInAnnaAPMeasurement" id="totalAreaInAnnaAPMeasurement" value="{{ $ltotalAnna??  $sitevisit->valuationDetails->total_anna_as_measurement ?? 0}}">
                    </th>
                <th scope="col">
                    <label id="LblTotalAreaInRPADAsPerMeasurement"></label>
                    <input type="hidden" name="totalAreaInRPADAsPerMeasurement" id="LblTotalAreaInRPADAsPerMeasurementVal" value="{{ $sitevisit->valuationDetails->total_rapd_as_measurement ?? 0 }}">
                </th>
                <th scope="col"></th>
            </tr>
        </tfoot>
    </table>
@endif
