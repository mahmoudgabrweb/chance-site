@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('page_title', __('voyager::generic.'.'edit').' '.$dataType->getTranslatedAttribute('display_name_singular'))

@section('page_header')
    <h1 class="page-title">
        <i class="{{ $dataType->icon }}"></i>
        {{ __('voyager::generic.'.'edit').' '.$dataType->getTranslatedAttribute('display_name_singular') }}
    </h1>
    @include('voyager::multilingual.language-selector')
@stop

@section('content')
    <div class="page-content edit-add container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-bordered">
                    <!-- form start -->
                    <form role="form"
                          class="form-edit-add"
                          action="{{ route('voyager.'.$dataType->slug.'.update', $details->id) }}"
                          method="POST" enctype="multipart/form-data">
                        <!-- CSRF TOKEN -->
                        {{ csrf_field() }}
                        @method('PATCH')

                        <div class="panel-body">

                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="title">Title <span class="text-danger">*</span></label>
                                    <input type="text" name="title" id="title" class="form-control"
                                           value="{{ $details->title }}">
                                    @if($errors->has('title'))
                                        <div class="label label-danger">{{ $errors->first('title') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="start_date">Start Date <span class="text-danger">*</span></label>
                                    <input type="datetime-local" name="start_date" id="start_date" class="form-control"
                                           value="{{ $details->start_date }}">
                                    @if($errors->has('start_date'))
                                        <div class="label label-danger">{{ $errors->first('start_date') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="start_date">End Date <span class="text-danger">*</span></label>
                                    <input type="datetime-local" name="end_date" id="end_date" class="form-control"
                                           value="{{ $details->end_date }}">
                                    @if($errors->has('end_date'))
                                        <div class="label label-danger">{{ $errors->first('end_date') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="title">Image <span class="text-danger">*</span></label>
                                    <div class="form-group col-md-12">
                                        @foreach($details->images as $image)
                                            <div class="img_settings_container" data-field-name="image"
                                                 style="float:left;padding-right:15px;">
                                                <a href="javascript:;" class="voyager-x remove-multi-image"
                                                   style="position: absolute;" data-id="{{ $image->id }}"></a>
                                                <img
                                                    src="{{ \Illuminate\Support\Facades\Storage::url($image->image_title) }}"
                                                    data-file-name="{{ $image->image_title }}"
                                                    style="max-width:100px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:5px;">
                                            </div>
                                        @endforeach
                                    </div>
                                    <input type="file" name="image[]" id="image" class="form-control" multiple>
                                    @if($errors->has('image'))
                                        <div class="label label-danger">{{ $errors->first('image') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="address">Address <span class="text-danger">*</span></label>
                                    <input type="text" name="address" id="address" class="form-control"
                                           value="{{ $details->address }}">
                                    @if($errors->has('address'))
                                        <div class="label label-danger">{{ $errors->first('address') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="map_url">Map URL</label>
                                    <input type="text" name="map_url" id="map_url" class="form-control"
                                           value="{{ $details->map_url }}">
                                    @if($errors->has('map_url'))
                                        <div class="label label-danger">{{ $errors->first('map_url') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="description">Description <span class="text-danger">*</span></label>
                                    <textarea name="description" class="form-control"
                                              rows="4">{{ $details->description }}</textarea>
                                    @if($errors->has('description'))
                                        <div class="label label-danger">{{ $errors->first('description') }}</div>
                                    @endif
                                </div>
                            </div>

                        </div><!-- panel-body -->

                        <div class="panel-footer">
                            @section('submit-buttons')
                                <button type="submit"
                                        class="btn btn-primary save">{{ __('voyager::generic.save') }}</button>
                            @stop
                            @yield('submit-buttons')
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-danger fade" tabindex="-1" id="delete_modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"
                            aria-label="{{ __('voyager::generic.close') }}"><span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title"><i
                            class="voyager-trash"></i> {{ __('voyager::generic.delete_question') }} image
                        ?</h4>
                </div>
                <div class="modal-footer">
                    <form action="#" id="delete_form" method="POST">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-danger pull-right delete-confirm"
                               value="{{ __('voyager::generic.delete_confirm') }}">
                    </form>
                    <button type="button" class="btn btn-default pull-right"
                            data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@stop

@section("javascript")
    <script type="text/javascript">
        $(document).on("click", ".remove-multi-image", function (e) {
            e.preventDefault();
            let baseUrl = "{{ env("APP_URL") }}"
            let eventId = "{{ $details->id }}";
            $('#delete_form')[0].action = `${baseUrl}/admin/events/delete-event-image/${eventId}/` + $(this).data('id');
            $('#delete_modal').modal('show');
        });
    </script>
@stop
