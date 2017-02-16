@extends('adminlte::layouts.app')

@section('htmlheader_title')
    User Management
@endsection

@section('contentheader_title')
    User Management
@stop

@section('main-content')

    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        {{--Method 1--}}
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        {{--//Method 2--}}
                            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                @if(Session::has('alert-' . $msg))
                                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                                @endif
                            @endforeach
                        <h3 class="box-title">Add User</h3>

                    </div><!-- /.box-header -->
                    <!-- form start -->
                    {!! Form::open(['route' => 'users.store','method' => 'post']) !!}

                    @include('users.create')
                    <div class="box-footer">
                        {!! Form::button('Reset', ['type' => 'reset','class' => 'btn btn-default']) !!}
                        {!! Form::button('Submit', ['type' => 'submit','class' => 'btn btn-primary']) !!}
                    </div>
                    {!! Form::close() !!}

                </div><!-- /.box -->

            </div><!--/.col (left) -->
        </div>
        {{--<div class="row">--}}
        {{--<!-- left column -->--}}
        {{--<div class="col-md-6">--}}
        {{--<!-- general form elements -->--}}
        {{--<div class="box box-primary">--}}
        {{--<div class="box-header">--}}
        {{--<h3 class="box-title">Quick Example</h3>--}}
        {{--</div><!-- /.box-header -->--}}
        {{--<!-- form start -->--}}
        {{--<form role="form">--}}
        {{--<div class="box-body">--}}
        {{--<div class="form-group">--}}
        {{--<label for="exampleInputEmail1">Email address</label>--}}
        {{--<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
        {{--<label for="exampleInputPassword1">Password</label>--}}
        {{--<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
        {{--<label for="exampleInputFile">File input</label>--}}
        {{--<input type="file" id="exampleInputFile">--}}
        {{--<p class="help-block">Example block-level help text here.</p>--}}
        {{--</div>--}}
        {{--<div class="checkbox">--}}
        {{--<label class="">--}}
        {{--<div class="icheckbox_minimal" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Check me out--}}
        {{--</label>--}}
        {{--</div>--}}
        {{--</div><!-- /.box-body -->--}}

        {{--<div class="box-footer">--}}
        {{--<button type="submit" class="btn btn-primary">Submit</button>--}}
        {{--</div>--}}
        {{--</form>--}}
        {{--</div><!-- /.box -->--}}

        {{--<!-- Form Element sizes -->--}}
        {{--<div class="box box-success">--}}
        {{--<div class="box-header">--}}
        {{--<h3 class="box-title">Different Height</h3>--}}
        {{--</div>--}}
        {{--<div class="box-body">--}}
        {{--<input class="form-control input-lg" type="text" placeholder=".input-lg">--}}
        {{--<br>--}}
        {{--<input class="form-control" type="text" placeholder="Default input">--}}
        {{--<br>--}}
        {{--<input class="form-control input-sm" type="text" placeholder=".input-sm">--}}
        {{--</div><!-- /.box-body -->--}}
        {{--</div><!-- /.box -->--}}

        {{--<div class="box box-danger">--}}
        {{--<div class="box-header">--}}
        {{--<h3 class="box-title">Different Width</h3>--}}
        {{--</div>--}}
        {{--<div class="box-body">--}}
        {{--<div class="row">--}}
        {{--<div class="col-xs-3">--}}
        {{--<input type="text" class="form-control" placeholder=".col-xs-3">--}}
        {{--</div>--}}
        {{--<div class="col-xs-4">--}}
        {{--<input type="text" class="form-control" placeholder=".col-xs-4">--}}
        {{--</div>--}}
        {{--<div class="col-xs-5">--}}
        {{--<input type="text" class="form-control" placeholder=".col-xs-5">--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div><!-- /.box-body -->--}}
        {{--</div><!-- /.box -->--}}

        {{--<!-- Input addon -->--}}
        {{--<div class="box box-info">--}}
        {{--<div class="box-header">--}}
        {{--<h3 class="box-title">Input Addon</h3>--}}
        {{--</div>--}}
        {{--<div class="box-body">--}}
        {{--<div class="input-group">--}}
        {{--<span class="input-group-addon">@</span>--}}
        {{--<input type="text" class="form-control" placeholder="Username">--}}
        {{--</div>--}}
        {{--<br>--}}
        {{--<div class="input-group">--}}
        {{--<input type="text" class="form-control">--}}
        {{--<span class="input-group-addon">.00</span>--}}
        {{--</div>--}}
        {{--<br>--}}
        {{--<div class="input-group">--}}
        {{--<span class="input-group-addon">$</span>--}}
        {{--<input type="text" class="form-control">--}}
        {{--<span class="input-group-addon">.00</span>--}}
        {{--</div>--}}

        {{--<h4>With icons</h4>--}}
        {{--<div class="input-group">--}}
        {{--<span class="input-group-addon"><i class="fa fa-envelope"></i></span>--}}
        {{--<input type="text" class="form-control" placeholder="Email">--}}
        {{--</div>--}}
        {{--<br>--}}
        {{--<div class="input-group">--}}
        {{--<input type="text" class="form-control">--}}
        {{--<span class="input-group-addon"><i class="fa fa-check"></i></span>--}}
        {{--</div>--}}
        {{--<br>--}}
        {{--<div class="input-group">--}}
        {{--<span class="input-group-addon"><i class="fa fa-dollar"></i></span>--}}
        {{--<input type="text" class="form-control">--}}
        {{--<span class="input-group-addon"><i class="fa fa-ambulance"></i></span>--}}
        {{--</div>--}}

        {{--<h4>With checkbox and radio inputs</h4>--}}
        {{--<div class="row">--}}
        {{--<div class="col-lg-6">--}}
        {{--<div class="input-group">--}}
        {{--<span class="input-group-addon">--}}
        {{--<div class="icheckbox_minimal" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>--}}
        {{--</span>--}}
        {{--<input type="text" class="form-control">--}}
        {{--</div><!-- /input-group -->--}}
        {{--</div><!-- /.col-lg-6 -->--}}
        {{--<div class="col-lg-6">--}}
        {{--<div class="input-group">--}}
        {{--<span class="input-group-addon">--}}
        {{--<div class="iradio_minimal" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="radio" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>--}}
        {{--</span>--}}
        {{--<input type="text" class="form-control">--}}
        {{--</div><!-- /input-group -->--}}
        {{--</div><!-- /.col-lg-6 -->--}}
        {{--</div><!-- /.row -->--}}

        {{--<h4>With buttons</h4>--}}
        {{--<p class="margin">Large: <code>.input-group.input-group-lg</code></p>--}}
        {{--<div class="input-group input-group-lg">--}}
        {{--<div class="input-group-btn">--}}
        {{--<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Action <span class="fa fa-caret-down"></span></button>--}}
        {{--<ul class="dropdown-menu">--}}
        {{--<li><a href="#">Action</a></li>--}}
        {{--<li><a href="#">Another action</a></li>--}}
        {{--<li><a href="#">Something else here</a></li>--}}
        {{--<li class="divider"></li>--}}
        {{--<li><a href="#">Separated link</a></li>--}}
        {{--</ul>--}}
        {{--</div><!-- /btn-group -->--}}
        {{--<input type="text" class="form-control">--}}
        {{--</div><!-- /input-group -->--}}
        {{--<p class="margin">Normal</p>--}}
        {{--<div class="input-group">--}}
        {{--<div class="input-group-btn">--}}
        {{--<button type="button" class="btn btn-danger">Action</button>--}}
        {{--</div><!-- /btn-group -->--}}
        {{--<input type="text" class="form-control">--}}
        {{--</div><!-- /input-group -->--}}
        {{--<p class="margin">Small <code>.input-group.input-group-sm</code></p>--}}
        {{--<div class="input-group input-group-sm">--}}
        {{--<input type="text" class="form-control">--}}
        {{--<span class="input-group-btn">--}}
        {{--<button class="btn btn-info btn-flat" type="button">Go!</button>--}}
        {{--</span>--}}
        {{--</div><!-- /input-group -->--}}
        {{--</div><!-- /.box-body -->--}}
        {{--</div><!-- /.box -->--}}

        {{--</div><!--/.col (left) -->--}}
        {{--<!-- right column -->--}}
        {{--<div class="col-md-6">--}}
        {{--<!-- general form elements disabled -->--}}
        {{--<div class="box box-warning">--}}
        {{--<div class="box-header">--}}
        {{--<h3 class="box-title">General Elements</h3>--}}
        {{--</div><!-- /.box-header -->--}}
        {{--<div class="box-body">--}}
        {{--<form role="form">--}}
        {{--<!-- text input -->--}}
        {{--<div class="form-group">--}}
        {{--<label>Text</label>--}}
        {{--<input type="text" class="form-control" placeholder="Enter ...">--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
        {{--<label>Text Disabled</label>--}}
        {{--<input type="text" class="form-control" placeholder="Enter ..." disabled="">--}}
        {{--</div>--}}

        {{--<!-- textarea -->--}}
        {{--<div class="form-group">--}}
        {{--<label>Textarea</label>--}}
        {{--<textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
        {{--<label>Textarea Disabled</label>--}}
        {{--<textarea class="form-control" rows="3" placeholder="Enter ..." disabled=""></textarea>--}}
        {{--</div>--}}

        {{--<!-- input states -->--}}
        {{--<div class="form-group has-success">--}}
        {{--<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Input with success</label>--}}
        {{--<input type="text" class="form-control" id="inputSuccess" placeholder="Enter ...">--}}
        {{--</div>--}}
        {{--<div class="form-group has-warning">--}}
        {{--<label class="control-label" for="inputWarning"><i class="fa fa-warning"></i> Input with warning</label>--}}
        {{--<input type="text" class="form-control" id="inputWarning" placeholder="Enter ...">--}}
        {{--</div>--}}
        {{--<div class="form-group has-error">--}}
        {{--<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Input with error</label>--}}
        {{--<input type="text" class="form-control" id="inputError" placeholder="Enter ...">--}}
        {{--</div>--}}

        {{--<!-- checkbox -->--}}
        {{--<div class="form-group">--}}
        {{--<div class="checkbox">--}}
        {{--<label>--}}
        {{--<div class="icheckbox_minimal" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>--}}
        {{--Checkbox 1--}}
        {{--</label>--}}
        {{--</div>--}}

        {{--<div class="checkbox">--}}
        {{--<label>--}}
        {{--<div class="icheckbox_minimal" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>--}}
        {{--Checkbox 2--}}
        {{--</label>--}}
        {{--</div>--}}

        {{--<div class="checkbox">--}}
        {{--<label>--}}
        {{--<div class="icheckbox_minimal disabled" aria-checked="false" aria-disabled="true" style="position: relative;"><input type="checkbox" disabled="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>--}}
        {{--Checkbox disabled--}}
        {{--</label>--}}
        {{--</div>--}}
        {{--</div>--}}

        {{--<!-- radio -->--}}
        {{--<div class="form-group">--}}
        {{--<div class="radio">--}}
        {{--<label>--}}
        {{--<div class="iradio_minimal checked" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>--}}
        {{--Option one is this and that—be sure to include why it's great--}}
        {{--</label>--}}
        {{--</div>--}}
        {{--<div class="radio">--}}
        {{--<label>--}}
        {{--<div class="iradio_minimal" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>--}}
        {{--Option two can be something else and selecting it will deselect option one--}}
        {{--</label>--}}
        {{--</div>--}}
        {{--<div class="radio">--}}
        {{--<label>--}}
        {{--<div class="iradio_minimal disabled" aria-checked="false" aria-disabled="true" style="position: relative;"><input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>--}}
        {{--Option three is disabled--}}
        {{--</label>--}}
        {{--</div>--}}
        {{--</div>--}}

        {{--<!-- select -->--}}
        {{--<div class="form-group">--}}
        {{--<label>Select</label>--}}
        {{--<select class="form-control">--}}
        {{--<option>option 1</option>--}}
        {{--<option>option 2</option>--}}
        {{--<option>option 3</option>--}}
        {{--<option>option 4</option>--}}
        {{--<option>option 5</option>--}}
        {{--</select>--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
        {{--<label>Select Disabled</label>--}}
        {{--<select class="form-control" disabled="">--}}
        {{--<option>option 1</option>--}}
        {{--<option>option 2</option>--}}
        {{--<option>option 3</option>--}}
        {{--<option>option 4</option>--}}
        {{--<option>option 5</option>--}}
        {{--</select>--}}
        {{--</div>--}}

        {{--<!-- Select multiple-->--}}
        {{--<div class="form-group">--}}
        {{--<label>Select Multiple</label>--}}
        {{--<select multiple="" class="form-control">--}}
        {{--<option>option 1</option>--}}
        {{--<option>option 2</option>--}}
        {{--<option>option 3</option>--}}
        {{--<option>option 4</option>--}}
        {{--<option>option 5</option>--}}
        {{--</select>--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
        {{--<label>Select Multiple Disabled</label>--}}
        {{--<select multiple="" class="form-control" disabled="">--}}
        {{--<option>option 1</option>--}}
        {{--<option>option 2</option>--}}
        {{--<option>option 3</option>--}}
        {{--<option>option 4</option>--}}
        {{--<option>option 5</option>--}}
        {{--</select>--}}
        {{--</div>--}}

        {{--</form>--}}
        {{--</div><!-- /.box-body -->--}}
        {{--</div><!-- /.box -->--}}
        {{--</div><!--/.col (right) -->--}}
        {{--</div>--}}
        {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
        {{--<!-- Default box -->--}}
        {{--<div class="box">--}}
        {{--<div class="box-header with-border">--}}
        {{--<h3 class="box-title">Posts</h3>--}}
        {{--<div class="box-tools pull-right">--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--{{ trans('adminlte_lang::message.logged') }}. Start creating your amazing application!--}}
        {{--@foreach ($news as $new)--}}
        {{--<div class="box-body">--}}
        {{--<li>{{ $new->name }}</li>--}}
        {{--</div>--}}
        {{--@endforeach--}}
        {{--<!-- /.box-body -->--}}
        {{--<div class="box-footer">--}}
        {{--Footer--}}
        {{--</div>--}}
        {{--<!-- /.box-footer-->--}}
        {{--</div>--}}
        {{--<!-- /.box -->--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="row">--}}
        {{--<div class="col-md-6">--}}
        {{--<div class="box">--}}
        {{--<div class="box-header">--}}
        {{--<h3 class="box-title">Bordered Table</h3>--}}
        {{--</div><!-- /.box-header -->--}}
        {{--<div class="box-body">--}}
        {{--<table class="table table-bordered">--}}
        {{--<tbody><tr>--}}
        {{--<th style="width: 10px">#</th>--}}
        {{--<th>Task</th>--}}
        {{--<th>Progress</th>--}}
        {{--<th style="width: 40px">Label</th>--}}
        {{--</tr>--}}
        {{--<tr>--}}
        {{--<td>1.</td>--}}
        {{--<td>Update software</td>--}}
        {{--<td>--}}
        {{--<div class="progress xs">--}}
        {{--<div class="progress-bar progress-bar-danger" style="width: 55%"></div>--}}
        {{--</div>--}}
        {{--</td>--}}
        {{--<td><span class="badge bg-red">55%</span></td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
        {{--<td>2.</td>--}}
        {{--<td>Clean database</td>--}}
        {{--<td>--}}
        {{--<div class="progress xs">--}}
        {{--<div class="progress-bar progress-bar-yellow" style="width: 70%"></div>--}}
        {{--</div>--}}
        {{--</td>--}}
        {{--<td><span class="badge bg-yellow">70%</span></td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
        {{--<td>3.</td>--}}
        {{--<td>Cron job running</td>--}}
        {{--<td>--}}
        {{--<div class="progress xs progress-striped active">--}}
        {{--<div class="progress-bar progress-bar-primary" style="width: 30%"></div>--}}
        {{--</div>--}}
        {{--</td>--}}
        {{--<td><span class="badge bg-light-blue">30%</span></td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
        {{--<td>4.</td>--}}
        {{--<td>Fix and squish bugs</td>--}}
        {{--<td>--}}
        {{--<div class="progress xs progress-striped active">--}}
        {{--<div class="progress-bar progress-bar-success" style="width: 90%"></div>--}}
        {{--</div>--}}
        {{--</td>--}}
        {{--<td><span class="badge bg-green">90%</span></td>--}}
        {{--</tr>--}}
        {{--</tbody></table>--}}
        {{--</div><!-- /.box-body -->--}}
        {{--<div class="box-footer clearfix">--}}
        {{--<ul class="pagination pagination-sm no-margin pull-right">--}}
        {{--<li><a href="#">«</a></li>--}}
        {{--<li><a href="#">1</a></li>--}}
        {{--<li><a href="#">2</a></li>--}}
        {{--<li><a href="#">3</a></li>--}}
        {{--<li><a href="#">»</a></li>--}}
        {{--</ul>--}}
        {{--</div>--}}
        {{--</div><!-- /.box -->--}}

        {{--<div class="box">--}}
        {{--<div class="box-header">--}}
        {{--<h3 class="box-title">Condensed Full Width Table</h3>--}}
        {{--</div><!-- /.box-header -->--}}
        {{--<div class="box-body no-padding">--}}
        {{--<table class="table table-condensed">--}}
        {{--<tbody><tr>--}}
        {{--<th style="width: 10px">#</th>--}}
        {{--<th>Task</th>--}}
        {{--<th>Progress</th>--}}
        {{--<th style="width: 40px">Label</th>--}}
        {{--</tr>--}}
        {{--<tr>--}}
        {{--<td>1.</td>--}}
        {{--<td>Update software</td>--}}
        {{--<td>--}}
        {{--<div class="progress xs">--}}
        {{--<div class="progress-bar progress-bar-danger" style="width: 55%"></div>--}}
        {{--</div>--}}
        {{--</td>--}}
        {{--<td><span class="badge bg-red">55%</span></td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
        {{--<td>2.</td>--}}
        {{--<td>Clean database</td>--}}
        {{--<td>--}}
        {{--<div class="progress xs">--}}
        {{--<div class="progress-bar progress-bar-yellow" style="width: 70%"></div>--}}
        {{--</div>--}}
        {{--</td>--}}
        {{--<td><span class="badge bg-yellow">70%</span></td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
        {{--<td>3.</td>--}}
        {{--<td>Cron job running</td>--}}
        {{--<td>--}}
        {{--<div class="progress xs progress-striped active">--}}
        {{--<div class="progress-bar progress-bar-primary" style="width: 30%"></div>--}}
        {{--</div>--}}
        {{--</td>--}}
        {{--<td><span class="badge bg-light-blue">30%</span></td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
        {{--<td>4.</td>--}}
        {{--<td>Fix and squish bugs</td>--}}
        {{--<td>--}}
        {{--<div class="progress xs progress-striped active">--}}
        {{--<div class="progress-bar progress-bar-success" style="width: 90%"></div>--}}
        {{--</div>--}}
        {{--</td>--}}
        {{--<td><span class="badge bg-green">90%</span></td>--}}
        {{--</tr>--}}
        {{--</tbody></table>--}}
        {{--</div><!-- /.box-body -->--}}
        {{--</div><!-- /.box -->--}}
        {{--</div><!-- /.col -->--}}
        {{--<div class="col-md-6">--}}
        {{--<div class="box">--}}
        {{--<div class="box-header">--}}
        {{--<h3 class="box-title">Simple Full Width Table</h3>--}}
        {{--<div class="box-tools">--}}
        {{--<ul class="pagination pagination-sm no-margin pull-right">--}}
        {{--<li><a href="#">«</a></li>--}}
        {{--<li><a href="#">1</a></li>--}}
        {{--<li><a href="#">2</a></li>--}}
        {{--<li><a href="#">3</a></li>--}}
        {{--<li><a href="#">»</a></li>--}}
        {{--</ul>--}}
        {{--</div>--}}
        {{--</div><!-- /.box-header -->--}}
        {{--<div class="box-body no-padding">--}}
        {{--<table class="table">--}}
        {{--<tbody><tr>--}}
        {{--<th style="width: 10px">#</th>--}}
        {{--<th>Task</th>--}}
        {{--<th>Progress</th>--}}
        {{--<th style="width: 40px">Label</th>--}}
        {{--</tr>--}}
        {{--<tr>--}}
        {{--<td>1.</td>--}}
        {{--<td>Update software</td>--}}
        {{--<td>--}}
        {{--<div class="progress xs">--}}
        {{--<div class="progress-bar progress-bar-danger" style="width: 55%"></div>--}}
        {{--</div>--}}
        {{--</td>--}}
        {{--<td><span class="badge bg-red">55%</span></td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
        {{--<td>2.</td>--}}
        {{--<td>Clean database</td>--}}
        {{--<td>--}}
        {{--<div class="progress xs">--}}
        {{--<div class="progress-bar progress-bar-yellow" style="width: 70%"></div>--}}
        {{--</div>--}}
        {{--</td>--}}
        {{--<td><span class="badge bg-yellow">70%</span></td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
        {{--<td>3.</td>--}}
        {{--<td>Cron job running</td>--}}
        {{--<td>--}}
        {{--<div class="progress xs progress-striped active">--}}
        {{--<div class="progress-bar progress-bar-primary" style="width: 30%"></div>--}}
        {{--</div>--}}
        {{--</td>--}}
        {{--<td><span class="badge bg-light-blue">30%</span></td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
        {{--<td>4.</td>--}}
        {{--<td>Fix and squish bugs</td>--}}
        {{--<td>--}}
        {{--<div class="progress xs progress-striped active">--}}
        {{--<div class="progress-bar progress-bar-success" style="width: 90%"></div>--}}
        {{--</div>--}}
        {{--</td>--}}
        {{--<td><span class="badge bg-green">90%</span></td>--}}
        {{--</tr>--}}
        {{--</tbody></table>--}}
        {{--</div><!-- /.box-body -->--}}
        {{--</div><!-- /.box -->--}}

        {{--<div class="box">--}}
        {{--<div class="box-header">--}}
        {{--<h3 class="box-title">Striped Full Width Table</h3>--}}
        {{--</div><!-- /.box-header -->--}}
        {{--<div class="box-body no-padding">--}}
        {{--<table class="table table-striped">--}}
        {{--<tbody><tr>--}}
        {{--<th style="width: 10px">#</th>--}}
        {{--<th>Task</th>--}}
        {{--<th>Progress</th>--}}
        {{--<th style="width: 40px">Label</th>--}}
        {{--</tr>--}}
        {{--<tr>--}}
        {{--<td>1.</td>--}}
        {{--<td>Update software</td>--}}
        {{--<td>--}}
        {{--<div class="progress xs">--}}
        {{--<div class="progress-bar progress-bar-danger" style="width: 55%"></div>--}}
        {{--</div>--}}
        {{--</td>--}}
        {{--<td><span class="badge bg-red">55%</span></td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
        {{--<td>2.</td>--}}
        {{--<td>Clean database</td>--}}
        {{--<td>--}}
        {{--<div class="progress xs">--}}
        {{--<div class="progress-bar progress-bar-yellow" style="width: 70%"></div>--}}
        {{--</div>--}}
        {{--</td>--}}
        {{--<td><span class="badge bg-yellow">70%</span></td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
        {{--<td>3.</td>--}}
        {{--<td>Cron job running</td>--}}
        {{--<td>--}}
        {{--<div class="progress xs progress-striped active">--}}
        {{--<div class="progress-bar progress-bar-primary" style="width: 30%"></div>--}}
        {{--</div>--}}
        {{--</td>--}}
        {{--<td><span class="badge bg-light-blue">30%</span></td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
        {{--<td>4.</td>--}}
        {{--<td>Fix and squish bugs</td>--}}
        {{--<td>--}}
        {{--<div class="progress xs progress-striped active">--}}
        {{--<div class="progress-bar progress-bar-success" style="width: 90%"></div>--}}
        {{--</div>--}}
        {{--</td>--}}
        {{--<td><span class="badge bg-green">90%</span></td>--}}
        {{--</tr>--}}
        {{--</tbody></table>--}}
        {{--</div><!-- /.box-body -->--}}
        {{--</div><!-- /.box -->--}}
        {{--</div><!-- /.col -->--}}
        {{--</div>--}}
    </div>
@endsection
