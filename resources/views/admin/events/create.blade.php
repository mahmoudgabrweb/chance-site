@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('page_title', __('voyager::generic.'.'add').' '.$dataType->getTranslatedAttribute('display_name_singular'))

@section('page_header')
    <h1 class="page-title">
        <i class="{{ $dataType->icon }}"></i>
        {{ __('voyager::generic.'.'add').' '.$dataType->getTranslatedAttribute('display_name_singular') }}
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
                          action="{{ route('voyager.'.$dataType->slug.'.store') }}"
                          method="POST" enctype="multipart/form-data">
                        <!-- CSRF TOKEN -->
                        {{ csrf_field() }}

                        <div class="panel-body">

                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="title">Title <span class="text-danger">*</span></label>
                                    <input type="text" name="title" id="title" class="form-control"
                                           value="{{ old("title") }}">
                                    @if($errors->has('title'))
                                        <div class="label label-danger">{{ $errors->first('title') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="start_date">Start Date <span class="text-danger">*</span></label>
                                    <input type="datetime-local" name="start_date" id="start_date" class="form-control"
                                           value="{{ old("start_date") }}">
                                    @if($errors->has('start_date'))
                                        <div class="label label-danger">{{ $errors->first('start_date') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="start_date">End Date <span class="text-danger">*</span></label>
                                    <input type="datetime-local" name="end_date" id="end_date" class="form-control"
                                           value="{{ old("end_date") }}">
                                    @if($errors->has('end_date'))
                                        <div class="label label-danger">{{ $errors->first('end_date') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="address">Address <span class="text-danger">*</span></label>
                                    <input type="text" name="address" id="address" class="form-control"
                                           value="{{ old("address") }}">
                                    @if($errors->has('address'))
                                        <div class="label label-danger">{{ $errors->first('address') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="map_url">Map URL</label>
                                    <input type="text" name="map_url" id="map_url" class="form-control"
                                           value="{{ old("map_url") }}">
                                    @if($errors->has('map_url'))
                                        <div class="label label-danger">{{ $errors->first('map_url') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="description">Description <span class="text-danger">*</span></label>
                                    <textarea name="description" class="form-control"
                                              rows="4">{{ old("description") }}</textarea>
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
@stop
