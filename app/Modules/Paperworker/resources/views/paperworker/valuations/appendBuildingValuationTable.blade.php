@if (isset($sitevisit) && $sitevisit->buildingValuations->isNotEmpty())
    <table class="table table-bordered dataTable" id="TblBuildingCalculation" style="width:100%">
        <thead class="thead-light">
            <tr>
                <th scope="col" width="30">Sno</th>
                <th scope="col">Floor</th>
                <th scope="col">Area (/SqF)</th>
                <th scope="col">Rate</th>
                <th scope="col">Amount</th>
                <th scope="col">Building Age</th>
                <th scope="col">Depric %</th>
                <th scope="col">Sanitary%</th>
                <th scope="col">Electric%</th>
                <th scope="col">Net Floor Amt</th>
                <th scope="col">Depriciation Amt</th>
                <th scope="col">Fair Market Val</th>
                <th scope="col">Distress Val</th>
                <th scope="col" width="50">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $buildingarea_sqf = 0;
                $building_amount = 0;
                $building_totalamount = 0;
                $deprication_amt = 0;
                $fair_market_val = 0;
                $distress_val = 0;

            @endphp
            @foreach ($sitevisit->buildingValuations as $building )
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $building->floor }}</td>
                <td>{{ $building->buildingarea_sqf }}</td>
                <td>{{ $building->building_rate }}</td>
                <td>{{ $building->building_amount }}</td>
                <td>{{ $building->building_age }}</td>
                <td>{{ $building->building_depreciation_percentage }}</td>
                <td>{{ $building->building_sanitary_plumbing_percentage }}</td>
                <td>{{ $building->building_electric_work_percentage }}</td>
                <td>{{ $building->building_totalamount }}</td>
                <td>{{ $building->deprication_amt }}</td>
                <td>{{ $building->fair_market_val }}</td>
                <td>{{ $building->distress_val }}</td>
                {{-- $building->deprication_amt = $request->floorDepriciationAmount;
                $building->fair_market_val = $request->floorFairMarketValue;
                $building->distress_val = $request->distressValue; --}}
                <td> <a class="deleteCalculationData" data-url="{{ route('paperworker.valuation.buildingValautionDelete', $building->id) }}"><span class="text-danger">REMOVE</span> </a></td>
            </tr>
            @php
                $buildingarea_sqf =  $buildingarea_sqf + $building->buildingarea_sqf ;
                $building_amount = $building->building_amount+$building_amount;
                $building_totalamount = $building->building_totalamount+$building_totalamount;
                $deprication_amt = $building->deprication_amt+$deprication_amt;
                $fair_market_val = $building->fair_market_val+$fair_market_val;
                $distress_val = $building->distress_val;
            @endphp
            @endforeach
        </tbody>
        <tfoot class="thead-light">
            <tr>
                <th scope="col" colspan="2" style="text-align: right;">TOTAL
                </th>
                <th scope="col"><label id="LblTotalBuildingAreaSqF">{{ number_format($buildingarea_sqf,2)}}</label><input type="hidden"
                        name="totalBuildingAreaSqF" id="totalBuildingAreaSqF" value="{{ $buildingarea_sqf}}"></th>
                <th scope="col"></th>
                <th scope="col"><label id="LblTotalBuildingAmount">{{ number_format($building_amount,2)}}</label><input type="hidden"
                        name="totalBuildingAmount" id="totalBuildingAmount" value="{{$building_amount }}"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col">
                    <label id="LblTotalNetBuildingAmount">{{ number_format($building_totalamount,2)}}</label>
                    <input type="hidden" name="totalNetBuildingAmount"  value="{{ $building_totalamount}}"></th>
                <th scope="col"><label id="LblTotalBuildingDepriciation">{{ number_format($deprication_amt,2)}}</label><input type="hidden"
                        name="totalBuildingDepriciation" id="totalBuildingDepriciation" value="{{$deprication_amt }}"></th>
                <th scope="col"><label id="LblTotalBuildingFairMarketValue">{{ number_format($fair_market_val,2)}}</label><input type="hidden"
                        name="totalBuildingFairMarketValue" id="totalBuildingFairMarketValue" value="{{ $fair_market_val }}"></th>
                <th scope="col"><label id="LblTotalBuildingDistressValue">{{ number_format($distress_val,2)}}</label><input type="hidden"
                        name="totalBuildingDistressValue" id="totalBuildingDistressValue" value="{{ $distress_val }}"></th>
                <th scope="col"></th>
            </tr>
        </tfoot>
    </table>
@endif
