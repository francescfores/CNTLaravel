@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-aqua">
					<div class="inner">
						<h3>
							{{count($posts)}}
						</h3>
						<p>
							News
						</p>
					</div>
					<div class="icon">
						<i class="ion ion-ios-paper-outline"></i>
					</div>
					<a href="#" class="small-box-footer">
						More info <i class="fa fa-arrow-circle-right"></i>
					</a>
				</div>
			</div><!-- ./col -->
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-green">
					<div class="inner">
						<h3>
							{{count($users)}}
						</h3>
						<p>
							User Registrations
						</p>
					</div>
					<div class="icon">
						<i class="ion ion-ios-people-outline"></i>
					</div>
					<a href="#" class="small-box-footer">
						More info <i class="fa fa-arrow-circle-right"></i>
					</a>
				</div>
			</div><!-- ./col -->
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-yellow">
					<div class="inner">
						<h3>
							53<sup style="font-size: 20px">%</sup>
						</h3>
						<p>
							Bounce Rate
						</p>
					</div>
					<div class="icon">
						<i class="ion ion-ios-calendar-outline"></i>
					</div>
					<a href="#" class="small-box-footer">
						More info <i class="fa fa-arrow-circle-right"></i>
					</a>
				</div>
			</div><!-- ./col -->

			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-red">
					<div class="inner">
						<h3>
							65
						</h3>
						<p>
							Unique Visitors
						</p>
					</div>
					<div class="icon">
						<i class="ion ion-ios-personadd-outline"></i>
					</div>
					<a href="#" class="small-box-footer">
						More info <i class="fa fa-arrow-circle-right"></i>
					</a>
				</div>
			</div><!-- ./col -->
		</div>

		<div class="row">
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-blue">
					<div class="inner">
						<h3>
							230
						</h3>
						<p>
							Sales
						</p>
					</div>
					<div class="icon">
						<i class="ion ion-ios7-cart-outline"></i>
					</div>
					<a href="#" class="small-box-footer">
						More info <i class="fa fa-arrow-circle-right"></i>
					</a>
				</div>
			</div><!-- ./col -->
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-purple">
					<div class="inner">
						<h3>
							80<sup style="font-size: 20px">%</sup>
						</h3>
						<p>
							Conversion Rate
						</p>
					</div>
					<div class="icon">
						<i class="ion ion-ios7-briefcase-outline"></i>
					</div>
					<a href="#" class="small-box-footer">
						More info <i class="fa fa-arrow-circle-right"></i>
					</a>
				</div>
			</div><!-- ./col -->
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-teal">
					<div class="inner">
						<h3>
							14
						</h3>
						<p>
							Notofications
						</p>
					</div>
					<div class="icon">
						<i class="ion ion-ios7-alarm-outline"></i>
					</div>
					<a href="#" class="small-box-footer">
						More info <i class="fa fa-arrow-circle-right"></i>
					</a>
				</div>
			</div><!-- ./col -->
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-maroon">
					<div class="inner">
						<h3>
							160
						</h3>
						<p>
							Products
						</p>
					</div>
					<div class="icon">
						<i class="ion ion-ios7-pricetag-outline"></i>
					</div>
					<a href="#" class="small-box-footer">
						More info <i class="fa fa-arrow-circle-right"></i>
					</a>
				</div>
			</div><!-- ./col -->
		</div>
		{{--<div class="row">--}}
		{{--<div class="col-md-8 col-md-offset-2">--}}
		{{--<!-- Default box -->--}}
		{{--<div class="box">--}}
		{{--<div class="box-header with-border">--}}

		{{--<h3 class="box-title">Users</h3>--}}
		{{--<div class="box-tools pull-right">--}}
		{{--</div>--}}
		{{--</div>--}}
		{{--@foreach ($users as $user)--}}
		{{--<div class="box-body">--}}
		{{--<li>{{ $user->name }}</li>--}}
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
		<div class="row">
			<div class="col-md-12">
				<div class="box box-solid box-info">
					<div class="box-header">
						<h3 class="box-title">Info Solid Box</h3>
						<div class="box-tools pull-right">
							<button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
							<button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						Box class: <code>.box.box-solid.box-info</code>
						<p>
							amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
							berliner weisse wort chiller adjunct hydrometer alcohol aau!
							sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
						</p>
					</div><!-- /.box-body -->
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="box box-danger">
					<div class="box-header">
						<h3 class="box-title">Donut Chart</h3>
					</div>
					<div class="box-body chart-responsive">
						<div class="chart" id="sales-chart" style="height: 300px; position: relative;">
							<svg height="300" version="1.1" width="381" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;">
								<desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc>
								<defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs>
								<path fill="none" stroke="#3c8dbc" d="M190.5,243.33333333333331A93.33333333333333,93.33333333333333,0,0,0,278.7277551949771,180.44625304313007" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path>
								<path fill="#3c8dbc" stroke="#ffffff" d="M190.5,246.33333333333331A96.33333333333333,96.33333333333333,0,0,0,281.56364732624417,181.4248826052307L318.1151459070204,194.03833029452744A135,135,0,0,1,190.5,285Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
								<path fill="none" stroke="#f56954" d="M278.7277551949771,180.44625304313007A93.33333333333333,93.33333333333333,0,0,0,106.78484627831412,108.73398312817662" stroke-width="2" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path>
								<path fill="#f56954" stroke="#ffffff" d="M281.56364732624417,181.4248826052307A96.33333333333333,96.33333333333333,0,0,0,104.09400205154564,107.40757544301087L64.92726941747117,88.10097469226493A140,140,0,0,1,322.8416327924656,195.6693795646951Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
								<path fill="none" stroke="#00a65a" d="M106.78484627831412,108.73398312817662A93.33333333333333,93.33333333333333,0,0,0,190.47067846904883,243.333328727518" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#00a65a" stroke="#ffffff" d="M104.09400205154564,107.40757544301087A96.33333333333333,96.33333333333333,0,0,0,190.46973599126827,246.3333285794739L190.4575884998742,284.9999933380171A135,135,0,0,1,69.41200979541863,90.31165416754118Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
								<text x="190.5" y="140" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: 800; font-stretch: normal; font-size: 15px; line-height: normal; font-family: Arial;" font-size="15px" font-weight="800" transform="matrix(1.6685,0,0,1.6685,-127.5637,-99.2765)" stroke-width="0.5993303571428571"><tspan dy="5.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">In-Store Sales</tspan></text>
								<text x="190.5" y="160" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 14px; line-height: normal; font-family: Arial;" font-size="14px" transform="matrix(1.9444,0,0,1.9444,-180.0052,-143.5556)" stroke-width="0.5142857142857143">
									<tspan dy="5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">30</tspan></text>
							</svg>
						</div>
					</div><!-- /.box-body -->
				</div>
			</div>


			<div class="col-md-6">
				<div class="box box-primary">
					<div class="box-header">
						<h3 class="box-title">Area Chart</h3>
					</div>
					<div class="box-body chart-responsive">
						<div class="chart" id="revenue-chart" style="height: 300px;">
							<svg height="300" version="1.1" width="433" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc>
								<defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs>
								<text x="51.515625" y="261" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text>
								<path fill="none" stroke="#aaaaaa" d="M64.015625,261H408" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
								<text x="51.515625" y="202" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">7,500</tspan></text>
								<path fill="none" stroke="#aaaaaa" d="M64.015625,202H408" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
								<text x="51.515625" y="143" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">15,000</tspan></text>
								<path fill="none" stroke="#aaaaaa" d="M64.015625,143H408" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
								<text x="51.515625" y="84.00000000000003" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.000000000000028" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">22,500</tspan></text>
								<path fill="none" stroke="#aaaaaa" d="M64.015625,84.00000000000003H408" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="51.515625" y="25.00000000000003" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.000000000000028" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">30,000</tspan></text>
								<path fill="none" stroke="#aaaaaa" d="M64.015625,25.00000000000003H408" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="344.9016560870336" y="273.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2013</tspan></text>
								<text x="191.91908558427423" y="273.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan></text>
								<path fill="#74a5c1" stroke="none" d="M64.015625,219.05493333333334C73.62492978994734,219.56626666666668,92.84353936984203,222.6231049981125,102.45284415978938,221.10026666666667C112.06650296187536,219.57673833144582,131.2938205660473,209.1350666666667,140.90747936813327,206.86946666666668C150.42099589103083,204.6274666666667,169.448028936826,204.88256480506598,178.96154545972357,203.06986666666666C188.47070797048252,201.2579981383993,207.4890329920004,194.91349669779092,216.99819550275936,192.3712C226.6075002927067,189.80213003112425,245.8261098726014,182.51724094375237,255.43541466254874,182.6244C265.0490734646347,182.73160761041905,284.2763910688067,204.17807818499128,293.89004987089265,193.22866666666667C303.40356639379024,182.39331151832462,322.4305994395853,101.94542370540853,331.9441159624829,95.48533333333336C341.3487821819148,89.09915703874186,360.1581146207787,135.13648756583467,369.5627808402106,141.8436C379.172085630158,148.69665423250134,398.3906952100526,147.7554,408,149.726L408,261L64.015625,261Z" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path>
								<path fill="none" stroke="#3c8dbc" d="M64.015625,219.05493333333334C73.62492978994734,219.56626666666668,92.84353936984203,222.6231049981125,102.45284415978938,221.10026666666667C112.06650296187536,219.57673833144582,131.2938205660473,209.1350666666667,140.90747936813327,206.86946666666668C150.42099589103083,204.6274666666667,169.448028936826,204.88256480506598,178.96154545972357,203.06986666666666C188.47070797048252,201.2579981383993,207.4890329920004,194.91349669779092,216.99819550275936,192.3712C226.6075002927067,189.80213003112425,245.8261098726014,182.51724094375237,255.43541466254874,182.6244C265.0490734646347,182.73160761041905,284.2763910688067,204.17807818499128,293.89004987089265,193.22866666666667C303.40356639379024,182.39331151832462,322.4305994395853,101.94542370540853,331.9441159624829,95.48533333333336C341.3487821819148,89.09915703874186,360.1581146207787,135.13648756583467,369.5627808402106,141.8436C379.172085630158,148.69665423250134,398.3906952100526,147.7554,408,149.726" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
								<circle cx="64.015625" cy="219.05493333333334" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
								<circle cx="102.45284415978938" cy="221.10026666666667" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
								<circle cx="140.90747936813327" cy="206.86946666666668" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="178.96154545972357" cy="203.06986666666666" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="216.99819550275936" cy="192.3712" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="255.43541466254874" cy="182.6244" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="293.89004987089265" cy="193.22866666666667" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="331.9441159624829" cy="95.48533333333336" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
								<circle cx="369.5627808402106" cy="141.8436" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
								<circle cx="408" cy="149.726" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
								<path fill="#eaf2f5" stroke="none" d="M64.015625,240.02746666666667C73.62492978994734,239.8072,92.84353936984203,241.35446642506605,102.45284415978938,239.1464C112.06650296187536,236.93733309173274,131.2938205660473,223.3365417102967,140.90747936813327,222.35893333333334C150.42099589103083,221.39150837696334,169.448028936826,233.23306051728085,178.96154545972357,231.36626666666666C188.47070797048252,229.5003271839475,207.4890329920004,209.28948157595082,216.99819550275936,207.428C226.6075002927067,205.54691490928414,245.8261098726014,214.43960989052474,255.43541466254874,216.39600000000002C265.0490734646347,218.3532765571914,284.2763910688067,232.37735986038396,293.89004987089265,223.08266666666668C303.40356639379024,213.88479319371731,322.4305994395853,148.22814457230533,331.9441159624829,142.42573333333334C341.3487821819148,136.689711238972,360.1581146207787,170.46889944279064,369.5627808402106,176.92893333333336C379.172085630158,183.529532776124,398.3906952100526,190.23343333333335,408,194.66826666666668L408,261L64.015625,261Z" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path>
								<path fill="none" stroke="#a0d0e0" d="M64.015625,240.02746666666667C73.62492978994734,239.8072,92.84353936984203,241.35446642506605,102.45284415978938,239.1464C112.06650296187536,236.93733309173274,131.2938205660473,223.3365417102967,140.90747936813327,222.35893333333334C150.42099589103083,221.39150837696334,169.448028936826,233.23306051728085,178.96154545972357,231.36626666666666C188.47070797048252,229.5003271839475,207.4890329920004,209.28948157595082,216.99819550275936,207.428C226.6075002927067,205.54691490928414,245.8261098726014,214.43960989052474,255.43541466254874,216.39600000000002C265.0490734646347,218.3532765571914,284.2763910688067,232.37735986038396,293.89004987089265,223.08266666666668C303.40356639379024,213.88479319371731,322.4305994395853,148.22814457230533,331.9441159624829,142.42573333333334C341.3487821819148,136.689711238972,360.1581146207787,170.46889944279064,369.5627808402106,176.92893333333336C379.172085630158,183.529532776124,398.3906952100526,190.23343333333335,408,194.66826666666668" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
								<circle cx="64.015625" cy="240.02746666666667" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="102.45284415978938" cy="239.1464" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="140.90747936813327" cy="222.35893333333334" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="178.96154545972357" cy="231.36626666666666" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="216.99819550275936" cy="207.428" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="255.43541466254874" cy="216.39600000000002" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
								<circle cx="293.89004987089265" cy="223.08266666666668" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
								<circle cx="331.9441159624829" cy="142.42573333333334" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="369.5627808402106" cy="176.92893333333336" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
								<circle cx="408" cy="194.66826666666668" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg><div class="morris-hover morris-default-style" style="left: 319.563px; top: 80px; display: none;"><div class="morris-hover-row-label">2013 Q1</div><div class="morris-hover-point" style="color: #a0d0e0">
									Item 1:
									10,687
								</div><div class="morris-hover-point" style="color: #3c8dbc">
									Item 2:
									4,460
								</div></div></div>
					</div><!-- /.box-body -->
				</div>
			</div>
		</div>
	</div>
@endsection
