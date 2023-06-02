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
                                    <label for="header">Header <span class="text-danger">*</span></label>
                                    <input type="text" name="header" id="header" class="form-control"
                                           value="{{ $details->header }}">
                                    @if($errors->has('header'))
                                        <div class="label label-danger">{{ $errors->first('header') }}</div>
                                    @endif
                                </div>
                            </div>

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
                                    <label for="title">Image <span class="text-danger">*</span></label>
                                    <div class="form-group col-md-12">
                                        <img src="{{ \Illuminate\Support\Facades\Storage::url($details->image) }}" style="width: 100px; height: 100px">
                                    </div>
                                    <input type="file" name="image" id="image" class="form-control">
                                    @if($errors->has('image'))
                                        <div class="label label-danger">{{ $errors->first('image') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="link">Link</label>
                                    <input type="text" name="link" id="link" class="form-control"
                                           value="{{ $details->link }}">
                                    @if($errors->has('link'))
                                        <div class="label label-danger">{{ $errors->first('link') }}</div>
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
@stop
