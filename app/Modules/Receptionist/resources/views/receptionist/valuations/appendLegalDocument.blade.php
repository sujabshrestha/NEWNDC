@if (isset($sitevisit) && $sitevisit->legaldocuments->isNotEmpty())

<table class="table table-bordered dataTable" style="width:100%"
    id="TblUploadDocument">
    <thead class="thead-light">
        <tr>
            <th scope="col" width="20">Sno</th>
            <th scope="col">File Name <a href="#" class="text-danger"
                    data-toggle="modal" data-target="#ViewAllCADJpgModal"> View</a></th>
            <th scope="col" width="30">Action</th>
        </tr>
    </thead>
    <tbody>
            @foreach ($sitevisit->legaldocuments as $document)
                <tr>
                    <th scope="col" width="20">{{ $loop->iteration }}</th>
                    <th scope="col">{{ getFileTitle($document->file_id) ?? '' }} <a
                            href="{{ url('/') . getOrginalUrl($document->file_id) }}"
                            target="_blank" class="text-danger"> View</a></th>
                    <th scope="col" width="30">
                        <a class="deleteDoc" data-url="{{ route('receptionist.valuation.legaldocDelete', $document->id) }}">Delete </a></th>
                </tr>
            @endforeach

        <tr>
            <th scope="row"></th>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th scope="row"></th>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>
@endif
