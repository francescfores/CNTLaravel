    <div class="box-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('email', 'E-Mail Address', ['class' => 'awesome'])!!}
                    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'email']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password', 'Password', ['class' => 'awesome'])!!}
                    {!! Form::password('password', ['class' => 'form-control','placeholder' => 'password']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('name', 'Name', ['class' => 'awesome'])!!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('lastname', 'lastname', ['class' => 'awesome'])!!}
                    {!! Form::text('lastname', null, ['class' => 'form-control', 'placeholder' => 'Last name']) !!}
                </div>


                {{--<div class="checkbox">--}}
                {{--<label class="">--}}
                {{--<div class="icheckbox_minimal" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Check me out--}}
                {{--</label>--}}
                {{--</div>--}}
            </div>
            <div class="col-md-6">

                <div class="form-group">
                    {!! Form::label('date', 'Date', ['class' => 'awesome'])!!}
                    <div class='input-group date' id='datetimepicker1'>
                        <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    </div>


                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Sex</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Last name">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Rol</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Last name">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Status</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Last name">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" id="exampleInputFile">
                    <p class="help-block">Example block-level help text here.</p>
                </div>
                {{--<div class="checkbox">--}}
                {{--<label class="">--}}
                {{--<div class="icheckbox_minimal" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Check me out--}}
                {{--</label>--}}
                {{--</div>--}}
            </div>
        </div>

    </div><!-- /.box-body -->
