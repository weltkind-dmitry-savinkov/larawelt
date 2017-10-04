@extends('admin::admin.form')

@section('form_content')

    {!! BootForm::open([
        'model' => $entity,
        'store' => $routePrefix.'store',
        'update' => $routePrefix.'update',
        'autocomplete' => 'off',
        'files' => true
    ]) !!}

    @section('topmenu')
        @include('admin::common.topmenu.entry', ['routePrefix'=>$routePrefix])
    @endsection

    <div class="col-md-6">
        {!! BootForm::text('title', trans('admin::fields.title')) !!}

        <div class="row">
            <div class="col-md-6">
                {!! BootForm::hidden('active', 0) !!}
                {!! BootForm::checkbox('active', trans('admin::fields.active'), 1) !!}
            </div>
            <div class="col-md-6">
                {!! BootForm::hidden('on_main', 0) !!}
                {!! BootForm::checkbox('on_main', trans('admin::fields.on_main'), 1) !!}
            </div>
        </div>

        {!! BootForm::textarea('preview', trans('admin::fields.preview'), null, ['rows'=>'5']) !!}
    </div>

    <div class="col-md-6">
        {!! BootForm::text('date', trans('admin::fields.date'), $entity->date?null:date('Y-m-d')) !!}

        @include('admin::common.forms.image', ['entity'=>$entity, 'routePrefix'=>$routePrefix, 'field'=>'image'])
    </div>

    <div class="clearfix"></div>

    <div class="col-md-12">
        {!! BootForm::textarea('content', trans('admin::fields.content'), null) !!}
    </div>

    @include('admin::common.forms.seo')

@endsection
