@extends('adm.layout')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title ">
                        All Facilities
                    </h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <div class="btn-toolbar">
                        <div class="btn-group pull-right">
                            {!! link_to_route("visiting.admin.facility.create", "Create Facility", [], ["class" => "btn btn-success"]) !!}
                        </div>
                    </div>
                    <span class="clearfix">&nbsp;</span>
                    <table id="facilities" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th class="col-md-1">ID #</th>
                            <th>Name</th>
                            <th class="col-md-1" style="text-align: center;">Training Required</th>
                            <th class="col-md-1" style="text-align: center;">Statement</th>
                            <th class="col-md-1" style="text-align: center;">Reference</th>
                            <th class="col-md-1" style="text-align: center;">Checks</th>
                            <th class="col-md-1" style="text-align: center;">Auto</th>
                            <th class="col-md-1" style="text-align: center;">Open</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($facilities as $f)
                            <tr>
                                <td align="center">{!! link_to_route('visiting.admin.facility.update', $f->id, [$f->id]) !!}</td>
                                <td>{{ $f->name }}</td>
                                <td align="center">
                                    @if($f->training_required)
                                        {!! Label::success("YES") !!}
                                        {!! Label::info($f->training_spaces . " available") !!}
                                    @else
                                        {!! Label::danger("NO") !!}
                                    @endif
                                </td>
                                <td align="center">
                                    @if($f->stage_statement_enabled)
                                        {!! Label::success("YES") !!}
                                    @else
                                        {!! Label::danger("NO") !!}
                                    @endif
                                </td>
                                <td align="center">
                                    @if($f->stage_reference_enabled)
                                        {!! Label::success("YES") !!}
                                        {!! Label::info($f->stage_reference_quantity . " required") !!}
                                    @else
                                        {!! Label::danger("NO") !!}
                                    @endif
                                </td>
                                <td align="center">
                                    @if($f->stage_checks)
                                        {!! Label::success("YES") !!}
                                    @else
                                        {!! Label::danger("NO") !!}
                                    @endif
                                </td>
                                <td align="center">
                                    @if($f->auto_acceptance)
                                        {!! Label::success("YES") !!}
                                    @else
                                        {!! Label::danger("NO") !!}
                                    @endif
                                </td>
                                <td align="center">
                                    @if($f->open)
                                        {!! Label::success("YES") !!}
                                    @else
                                        {!! Label::danger("NO") !!}
                                    @endif
                                </td>
                            </tr>
                        @endforeach
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