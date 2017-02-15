@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <!-- Default box -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Posts</h3>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    {{--{{ trans('adminlte_lang::message.logged') }}. Start creating your amazing application!--}}
                    @foreach ($news as $new)
                        <div class="box-body">
                            <li>{{ $new->name }}</li>
                        </div>
                        @endforeach
                                <!-- /.box-body -->
                        <div class="box-footer">
                            Footer
                        </div>
                        <!-- /.box-footer-->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </div>
@endsection