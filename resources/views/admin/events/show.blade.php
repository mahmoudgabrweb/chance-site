@extends('voyager::master')

@section('page_title', __('voyager::generic.view').' '.$dataType->getTranslatedAttribute('display_name_singular'))

@section('page_header')
    <h1 class="page-title">
        <i class="{{ $dataType->icon }}"></i> {{ __('voyager::generic.viewing') }} {{ ucfirst($dataType->getTranslatedAttribute('display_name_singular')) }}
        &nbsp;

        @can('edit', $details)
            <a href="{{ route('voyager.'.$dataType->slug.'.edit', $details->getKey()) }}" class="btn btn-info">
                <i class="glyphicon glyphicon-pencil"></i> <span
                    class="hidden-xs hidden-sm">{{ __('voyager::generic.edit') }}</span>
            </a>
        @endcan
        @can('delete', $details)

            <a href="javascript:;" title="{{ __('voyager::generic.delete') }}" class="btn btn-danger delete"
               data-id="{{ $details->getKey() }}" id="delete-{{ $details->getKey() }}">
                <i class="voyager-trash"></i> <span
                    class="hidden-xs hidden-sm">{{ __('voyager::generic.delete') }}</span>
            </a>
        @endcan
        @can('browse', $details)
            <a href="{{ route('voyager.'.$dataType->slug.'.index') }}" class="btn btn-warning">
                <i class="glyphicon glyphicon-list"></i> <span
                    class="hidden-xs hidden-sm">{{ __('voyager::generic.return_to_list') }}</span>
            </a>
        @endcan
    </h1>
    @include('voyager::multilingual.language-selector')
@stop

@section('content')
    <div class="page-content read container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-bordered" style="padding-bottom:5px;">
                    <!-- form start -->

                    <div class="col-md-5">
                        <div class="panel-heading" style="border-bottom:0;">
                            <h3 class="panel-title">ID</h3>
                        </div>
                        <div class="panel-body" style="padding-top:0;">
                            <p>{{ $details->id }}</p>
                        </div>

                        <div class="panel-heading" style="border-bottom:0;">
                            <h3 class="panel-title">Title</h3>
                        </div>
                        <div class="panel-body" style="padding-top:0;">
                            <p>{{ $details->title }}</p>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="panel-heading" style="border-bottom:0;">
                            <h3 class="panel-title">Start Date</h3>
                        </div>
                        <div class="panel-body" style="padding-top:0;">
                            <p>{{ $details->start_date }}</p>
                        </div>

                        <div class="panel-heading" style="border-bottom:0;">
                            <h3 class="panel-title">End Date</h3>
                        </div>
                        <div class="panel-body" style="padding-top:0;">
                            <p>{{ $details->end_date }}</p>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="panel-heading" style="border-bottom:0;">
                            <h3 class="panel-title">Address</h3>
                        </div>
                        <div class="panel-body" style="padding-top:0;">
                            <p>{{ $details->address }}</p>
                        </div>

                        <div class="panel-heading" style="border-bottom:0;">
                            <h3 class="panel-title">Map URL</h3>
                        </div>
                        <div class="panel-body" style="padding-top:0;">
                            <p><a href="{{ $details->map_url }}" target="_blank">{{ $details->map_url }}</a></p>
                        </div>
                    </div>


                    <div class="col-md-10">
                        <div class="panel-heading" style="border-bottom:0;">
                            <h3 class="panel-title">Description</h3>
                        </div>
                        <div class="panel-body" style="padding-top:0;">
                            <p>{{ $details->description }}</p>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="panel-heading" style="border-bottom:0;">
                            <h3 class="panel-title">Updated At</h3>
                        </div>
                        <div class="panel-body" style="padding-top:0;">
                            <p>{{ $details->updated_at }}</p>
                        </div>

                        <div class="panel-heading" style="border-bottom:0;">
                            <h3 class="panel-title">Created At</h3>
                        </div>

                        <div class="panel-body" style="padding-top:0;">
                            <p>{{ $details->created_at }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Single delete modal --}}
    <div class="modal modal-danger fade" tabindex="-1" id="delete_modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"
                            aria-label="{{ __('voyager::generic.close') }}"><span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title"><i
                            class="voyager-trash"></i> {{ __('voyager::generic.delete_question') }} {{ strtolower($dataType->getTranslatedAttribute('display_name_singular')) }}
                        ?</h4>
                </div>
                <div class="modal-footer">
                    <form action="{{ route('voyager.'.$dataType->slug.'.index') }}" id="delete_form" method="POST">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-danger pull-right delete-confirm"
                               value="{{ __('voyager::generic.delete_confirm') }} {{ strtolower($dataType->getTranslatedAttribute('display_name_singular')) }}">
                    </form>
                    <button type="button" class="btn btn-default pull-right"
                            data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@stop

@section('javascript')
    <script>
        var deleteFormAction;
        $('.delete').on('click', function (e) {
            var form = $('#delete_form')[0];

            if (!deleteFormAction) {
                // Save form action initial value
                deleteFormAction = form.action;
            }

            form.action = deleteFormAction.match(/\/[0-9]+$/)
                ? deleteFormAction.replace(/([0-9]+$)/, $(this).data('id'))
                : deleteFormAction + '/' + $(this).data('id');

            $('#delete_modal').modal('show');
        });

    </script>
@stop
