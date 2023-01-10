

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
                <td>{{ $data->areaSymbol }}</td>
                <td>{{ $data->areaSymbol }}</td>
            </tr>
            @endforeach
            <tr>
                <th scope="row"></th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
        <tfoot class="thead-light">
            <tr>
                <th scope="col" colspan="2" style="text-align: right;">TOTAL AREA
                    BASED ON ACTUAL MEASUREMENT</th>
                <th scope="col"><label id="LblTotalAreaSideA"></label><input type="hidden" name="totalAreaSideA"
                        id="totalAreaSideA" value="0"></th>
                <th scope="col"><label id="LblTotalAreaSideB"></label><input type="hidden" name="totalAreaSideB"
                        id="totalAreaSideB" value="0"></th>
                <th scope="col"><label id="LblTotalAreaSideC"></label><input type="hidden" name="totalAreaSideC"
                        id="totalAreaSideC" value="0"></th>
                <th scope="col"><label id="LblTotalAreaSideS"></label><input type="hidden" name="totalAreaSideS"
                        id="totalAreaSideS" value="0"></th>
                <th scope="col"><label id="LblTotalSqFAsPerCal"></label><input type="hidden" name="totalSqFAsPerCal"
                        id="totalSqFAsPerCal" value="0"></th>
                <th scope="col"><label id="LblTotalSqMAsPerCal"></label><input type="hidden" name="totalSqMAsPerCal"
                        id="totalSqMAsPerCal" value="0"></th>
                <th scope="col"><label id="LblTotalAreaInAnnaAPMeasurement"></label><input type="hidden"
                        name="totalAreaInAnnaAPMeasurement" id="totalAreaInAnnaAPMeasurement" value="0"></th>
                <th scope="col"><label id="LblTotalAreaInRPADAsPerMeasurement"></label><input type="hidden"
                        name="totalAreaInRPADAsPerMeasurement" id="totalAreaInRPADAsPerMeasurement" value="0"></th>
                <th scope="col"></th>
            </tr>
        </tfoot>
    </table>
@endif
