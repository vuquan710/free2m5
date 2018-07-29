@extends('ClientView.AppLayouts.default')

@section('title', __('Dashboard'))

@section('sidebar')
@endsection

@section('content')
    <div class="main-content">
        <div class="main-content-inner">
            @include('ClientView.Share.breadcrumbs')
            <div class="page-content">
                Client PAGE
            </div><!-- /.page-content -->

        </div>
    </div><!-- /.main-content -->

@endsection