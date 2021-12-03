@extends('layouts.admin')
@include('partials/admin.theme.nav', ['activeTab' => 'basic'])
@section('title')
    Theme
@endsection

@section('content-header')
    <h1>Basic Settings<small>Configure Pterocord to your liking.</small></h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.index') }}">Admin</a></li>
        <li class="active">Theme</li>
    </ol>
@endsection

@section('content')
    @yield('settings::nav')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Theme Settings</h3>
                </div>
                <form action="{{ route('admin.theme') }}" method="POST">
                    <div class="box-body">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label class="control-label">Background Color</label>
                                <div>
                                    <input type="text" class="form-control" id="bgcolor" name="theme:bgcolor" value="{{ old('theme:bgcolor', config('theme.bgcolor')) }}" />
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="control-label">Secondary Background Color</label>
                                <div>
                                    <input type="text" class="form-control" id="secondarybgcolor" name="theme:secondarybgcolor" value="{{ old('theme:secondarybgcolor', config('theme.secondarybgcolor')) }}" />
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="control-label">Main Navigation Color</label>
                                <div>
                                    <input type="text" class="form-control" id="navigationcolor" name="theme:navigationcolor" value="{{ old('theme:navigationcolor', config('theme.navigationcolor')) }}" />
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="control-label">Hover/Active Color</label>
                                <div>
                                    <input type="text" class="form-control" id="hoveractivecolor" name="theme:hoveractivecolor" value="{{ old('theme:hoveractivecolor', config('theme.hoveractivecolor')) }}" />
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="control-label">Text Color</label>
                                <div>
                                    <input type="text" class="form-control" id="textcolor" name="theme:textcolor" value="{{ old('theme:textcolor', config('theme.textcolor')) }}" />
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="control-label">Accent Color</label>
                                <div>
                                    <input type="text" class="form-control" id="accentcolor" name="theme:accentcolor" value="{{ old('theme:accentcolor', config('theme.accentcolor')) }}" />
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="control-label">Accent Hover/Active Color</label>
                                <div>
                                    <input type="text" class="form-control" id="accenthovercolor" name="theme:accenthovercolor" value="{{ old('theme:accenthovercolor', config('theme.accenthovercolor')) }}" />
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="control-label">Discord Link</label>
                                <div>
                                  <input type="text" class="form-control" name="theme:discord" value="{{ old('theme:discord', config('theme.discord')) }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        {!! csrf_field() !!}
						<div> <input type="button" class="btn pull-left btn-danger" value="Reset" style="margin-right:5px;" onclick="bgcolor.value = '36393F'; secondarybgcolor.value = '2F3137'; hoveractivecolor.value = '40444C'; textcolor.value = 'fff'; accentcolor.value = '7289DA'; accenthovercolor.value = 'AAB8E8'; navigationcolor.value = '202226';" /> </div>
                        <button type="submit" name="_method" value="PATCH" class="btn btn-sm btn-primary pull-right">Save</button>
                    </div>
            </div>
        </div>
      </form>
    </div>
@endsection
