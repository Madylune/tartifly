@extends('layouts.account')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div>
				    <h2>Bonjour, {{ Auth::user()->name }} </h2>			
						
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

@endsection