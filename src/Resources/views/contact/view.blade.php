@extends('admin::layouts.content')

@section('page_title')
    {{ __('contact_lang::app.contact.view_title') }}
@stop

<style>
    table{
        margin-top: 20px;
        width:100%;
        border-collapse:collapse;
        border:1px solid #00F;
        font-size:13px;
    }

    table tr{
        padding: 10px;
    }

    table tr th{
        padding: 10px;
        border: 1px solid #e9e9e9;
        font-size: 16px;
        font-weight: bold;
    }

    table tr td{
        padding: 10px;
        border: 1px solid #e9e9e9;
    }

    .message{
        background: #e9e9e9;
        padding: 15px;
        border: 1px solid #ccc;
        margin-top: 20px;
        font-size: 16px;
    }
</style>

@section('content')

    <div class="content">
        <div class="page-header" style="border-bottom: 1px solid #e9e9e9">
            <div class="page-title">
                <h1>{{ __('contact_lang::app.contact.view_title') }} of "{{ $contact->name}}"</h1>

                <i class="icon angle-left-icon back-link" onclick="history.length > 1 ? history.go(-1) : window.location = '{{ url('/admin/dashboard') }}';"></i>

            </div>
        </div>

        <div class="page-content">

            <div>
                <table>
                    <tr>
                        <th>Name</th>
                        <td>{{$contact->name}}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{$contact->email}}</td>
                    </tr>
                </table>
            </div>

            <div class="message">
                {{$contact->message_body}}
            </div>
        </div>
    </div>


@stop

