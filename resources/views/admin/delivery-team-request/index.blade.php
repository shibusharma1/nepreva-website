@extends('admin.master')
@section('title', 'Delivery Team Requests')
@section('breadcrumb')
@endsection
@section('content')
<div class="tray tray-center" style="height: 647px;">
    <div class="panel">
        <div class="panel-heading">
            <span class="panel-title">Delivery Team Requests</span>
        </div>
        <div class="panel-body ph20">
            <div class="tab-content">
                <div id="users" class="tab-pane active">
                    <div class="table-responsive mhn20 mvn15">
                        <table class="table admin-form table-striped dataTable" id="datatable3">
                            <thead>
                                <tr class="bg-light">
                                    <th>SN</th>
                                    <th>Full Name</th>
                                    <th>Contact Details</th>
                                    <th>Service Requirements</th>
                                    <th>Timeline / Model</th>
                                    <th>Systems</th>
                                    <th>Message</th>
                                    <th>Status</th>
                                    <th class="text-left">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($inquiry as $key => $row)
                                    <tr class="bg-light">
                                        <td>{{ $key + 1 }}</td>
                                        {{-- Customer Details --}}
                                        <td>
                                            <strong>{{ ucfirst($row->name) }}</strong>
                                            <br>
                                            Company: {{ $row->company ?? 'N/A' }}
                                            <br>
                                            Role: {{ $row->role ?? 'N/A' }}
                                            <br>
                                            <small>
                                                {{ optional($row->created_at)->format('d M Y') }}
                                            </small>
                                        </td>
                                        {{-- Contact Details --}}
                                        <td>
                                            <strong>{{ $row->email }}</strong>
                                            <br>
                                            Country: {{ $row->country ?? 'N/A' }}
                                        </td>
                                        {{-- Service Requirements --}}
                                        <td>
                                            <strong>{{ $row->service ?? 'N/A' }}</strong>
                                            <br>
                                            Volume: {{ $row->volume ?? 'N/A' }}
                                            <br>
                                            Currency: {{ $row->currency ?? 'N/A' }}
                                            <br>
                                            Destination: {{ $row->destination ?? 'N/A' }}
                                        </td>
                                        {{-- Timeline and Model --}}
                                        <td>
                                            <strong>{{ $row->timeline ?? 'N/A' }}</strong>
                                            <br>
                                            Model: {{ $row->engagement_model ?? 'N/A' }}
                                        </td>
                                        {{-- Systems --}}
                                        <td>
                                            {{ $row->systems ?? 'N/A' }}
                                        </td>
                                        {{-- Message --}}
                                        <td>
                                            <textarea readonly
                                                class="form-control"
                                                rows="3">{{ $row->message ?? '' }}</textarea>
                                        </td>
                                        {{-- Status --}}
                                        <td>
                                            <span class="label label-warning">
                                                {{ $row->status ?? 'Pending' }}
                                            </span>
                                        </td>

                                        {{-- Action --}}
                                        <td class="text-left">
                                            <form action="{{ route('delivery-team-requests.delete', $row->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this delivery team request?');">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="fa fa-trash form-control" style="color:red;" title="Delete Request"></button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="9" class="text-center">
                                            No delivery team requests found.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('libraries')
<script src="{{ asset('vendor/plugins/datatables/media/js/jquery.dataTables.js') }}"></script>
<script src="{{ asset('vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js') }}"></script>
<script src="{{ asset('vendor/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js') }}"></script>
<script src="{{ asset('vendor/plugins/datatables/media/js/dataTables.bootstrap.js') }}"></script>
<script type="text/javascript">
    $('document').ready(function () {
        $('#datatable3').dataTable({
            "aoColumnDefs": [{
                'bSortable': false,
                'aTargets': [-1]
            }],
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": "Previous",
                    "sNext": "Next"
                }
            },
            "iDisplayLength": 10,
            "aLengthMenu": [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, "All"]
            ],
            "sDom": '<"dt-panelmenu clearfix"Tfr>t<"dt-panelfooter clearfix"ip>',
            "oTableTools": {
                "sSwfPath": "{{ asset('vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf') }}"
            }
        });
    });
</script>
@endsection
