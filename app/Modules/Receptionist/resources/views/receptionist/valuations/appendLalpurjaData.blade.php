@if (isset($sitevisit) && $sitevisit->lalpurjaDatas->isNotEmpty())


<table class="table table-bordered dataTable" id="TblAreaAsPerLalpurja" style="width:100%;">
    <thead class="thead-light">
        <tr>
            <th scope="col" width="30">Sno</th>
            <th scope="col">Kita No</th>
            <th scope="col">Sheet No</th>
            <th scope="col">Ropani</th>
            <th scope="col">Anna</th>
            <th scope="col">Paisa</th>
            <th scope="col">Dam</th>
            <th scope="col">Area Sq.M</th>
            <th scope="col">Area R-A-P-D</th>
            <th scope="col">Area Sq.F</th>
            <th scope="col">Area In Anna</th>
            <th scope="col" width="50">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($sitevisit->lalpurjaDatas as $lalpurja)


        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $lalpurja->kita_no }}</td>
            <td>{{ $lalpurja->sheet_no }}</td>
            <td>{{ $lalpurja->ropani_as_lalpurja }}</td>
            <td>{{ $lalpurja->anna_as_lalpurja }}</td>
            <td>{{ $lalpurja->paisa_as_lalpurja }}</td>
            <td>{{ $lalpurja->dam_as_lalpurja }}</td>
            <td>{{ $lalpurja->sqm_as_lalpurja }}</td>
            <td>{{ $lalpurja->area_in_anna_as_lalpurja }}</td>
            <td>{{ $lalpurja->sqf_as_lalpurja }}</td>
            <td>{{ $lalpurja->rapd_as_lalpurja }}</td>
        </tr>
        @endforeach
    </tbody>
    <tfoot class="thead-light">
        {{-- @foreach ($sitevisit->lalpurjaDatas as $lalpurja) --}}


        <tr>
            <th scope="col" colspan="3" style="text-align: right;">TOTAL AREA AS
                PER LALPURJA</th>
            <th scope="col"><label id="totalRopani"></label><input type="hidden" name="totalRopani" id="totalRopani"
                    value="0"> </th>
            <th scope="col"><label id="totalAnna"></label><input type="hidden" name="totalAnna" id="totalAnna"
                    value="0"></th>
            <th scope="col"><label id="totalPaisa"></label><input type="hidden" name="totalPaisa" id="totalPaisa"
                    value="0"></th>
            <th scope="col"><label id="totalDam"></label><input type="hidden" name="totalDam" id="totalDam"
                    value="0"></th>
            <th scope="col"><label id="totalSqM"></label><input type="hidden" name="totalSqM" id="totalSqM"
                    value="0"></th>
            <th scope="col"><label id="totalRAPD"></label><input type="hidden" name="totalRAPD" id="totalRAPD"
                    value="0"></th>
            <th scope="col"><label id="totalSqF"></label><input type="hidden" name="totalSqF" id="totalSqF"
                    value="0"></th>
            <th scope="col"><label id="totalAreaInAnna"></label> <input type="hidden" name="totalAreaInAnna"
                    id="totalAreaInAnna" value="0"></th>
            <th scope="col"></th>
        </tr>
        {{-- @endforeach --}}
    </tfoot>
</table>
@endif
