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
                                <th>Khóa Học</th>
                                <th>Lớp Học</th>
                                <th>Ca Học Mong Muốn</th>
                                <th>Trạng Thái Xếp Lớp</th>
                                <th>Ngày Đăng Ký</th>
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
                                <td>{{$dt->Course}}</td>
                                <td>{{$dt->ClassName}}</td>
                                @if($dt->Lecture == 1)
                                    <td>9h30 - 11h00</td>
                                @elseif ($dt->Lecture == 1)
                                    <td>17h30 - 19h00</td>
                                @else
                                    <td>19h05 - 20h35</td>
                                @endif
                                <td><span class="label label-sm label-warning">Waiting...</span></td>
                                <td>{{$dt->RegDate}}</td>
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