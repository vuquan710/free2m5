@extends('ClientView.AppLayouts.default')

@section('title', __('Dashboard'))

@section('sidebar')
@endsection

@section('content')
    <div class="main-content">
        <div class="main-content-inner">
            @include('ClientView.Share.breadcrumbs')
            <div class="page-content">
                <div class="row">
                    <div class="col-xs-12">
                        <table id="simple-table" class="table  table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Họ Tên</th>
                                <th>Ngáy Sinh</th>
                                <th>Tên Phụ Huynh</th>
                                <th>Số Điện Thoại</th>
                                <th>Facebook</th>
                                <th>Buổi Nghỉ</th>
                                <th>Ngày Phụ Đạo</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($data as $dt)
                            <tr>
                                <td>{{$dt->Stt}}</td>
                                <td>{{$dt->Name}}</td>
                                <td>{{$dt->Bod}}</td>
                                <td>{{$dt->Parent}}</td>
                                <td>{{$dt->Phone}}</td>
                                <td>{{$dt->Facebook}}</td>
                                <td>{{$dt->RegDate}}</td>
                                <td>{{$dt->RegDateNew}}</td>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div><!-- /.span -->
                </div><!-- /.row -->
            </div><!-- /.page-content -->

        </div>
    </div><!-- /.main-content -->

@endsection