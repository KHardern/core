@extends('adm.layout')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title ">
                        All References
                    </h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <div class="btn-toolbar">
                        <div class="btn-group pull-right">
                            BUTTONS?
                        </div>
                    </div>
                    <span class="clearfix">&nbsp;</span>
                    <table id="facilities" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th class="col-md-1">ID #</th>
                            <th class="col-md-1">App ID</th>
                            <th class="col-md-1" style="text-align: center;">Applicant</th>
                            <th class="col-md-1" style="text-align: center;">App Type &amp; Facility</th>
                            <th class="col-md-1" style="text-align: center;">Referee Name</th>
                            <th class="col-md-1" style="text-align: center;">Referee Rating</th>
                            <th class="col-md-1" style="text-align: center;">Referee EMail</th>
                            <th class="col-md-1" style="text-align: center;">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($references as $r)
                            <tr>
                                <td align="center">
                                    {!! link_to_route('visiting.admin.reference.view', $r->id, [$r->id]) !!}
                                </td>
                                <td align="center">
                                    {!! link_to_route('visiting.admin.application.view', $r->application_id, [$r->application_id]) !!}
                                </td>
                                <td>{{ $r->application->account->name }}</td>
                                <td align="center">
                                    {{ $r->application->type_string }} - {{ $r->application->facility_name }}
                                </td>
                                <td align="center">
                                    {{ $r->referee_name }}
                                </td>
                                <td align="center">
                                </td>
                                <td align="center">
                                </td>
                                <td align="center">
                                </td>
                                <td align="center">
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td align="center" colspan="8">There are no references that match your criteria.</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>
@stop

@section('scripts')
    @parent
    {!! HTML::script('/assets/js/plugins/datatables/dataTables.bootstrap.js') !!}
@stop