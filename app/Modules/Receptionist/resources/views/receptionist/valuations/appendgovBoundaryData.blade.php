@if (isset($sitevisit) && $sitevisit->govBoundaries->isNotEmpty())
    <table class="table table-bordered dataTable" id="TblBoundariesAsPerKitaNo" style="width:100%">
        <thead class="thead-light">
            <tr>
                <th scope="col" width="30">Sno</th>
                <th scope="col">Kita No</th>
                <th scope="col">East</th>
                <th scope="col">West</th>
                <th scope="col">North</th>
                <th scope="col">South</th>
                <th scope="col" width="50">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sitevisit->govBoundaries as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->kita_no }}</td>
                    <td>{{ $item->east }}</td>
                    <td>{{ $item->west }}</td>
                    <td>{{ $item->north }}</td>
                    <td>{{ $item->south }}</td>
                    <td></td>
                </tr>
            @endforeach
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
@endif
