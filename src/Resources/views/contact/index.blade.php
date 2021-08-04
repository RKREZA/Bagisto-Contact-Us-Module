@extends('admin::layouts.content')

@section('page_title')
    {{ __('contact_lang::app.contact.title') }}
@stop

@section('content')

    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h1>{{ __('contact_lang::app.contact.title') }}</h1>
            </div>
        </div>

        <div class="page-content">
            @inject('contactGrid','RKREZA\Contact\DataGrids\ContactDataGrid')

            {!! $contactGrid->render() !!}
        </div>
    </div>


@stop

