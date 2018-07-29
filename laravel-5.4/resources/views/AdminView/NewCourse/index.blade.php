@extends('AdminView.AppLayouts.default')

@section('title', __('Dashboard'))

@section('sidebar')
@endsection

@section('content')
    <div class="main-content">
        <div class="main-content-inner">
            @include('AdminView.Share.breadcrumbs')
            <div class="page-content">
                <div class="row">
                    <div class="col-xs-12">
                        <table id="simple-table" class="table  table-bordered table-hover">
                            <thead>
                            <tr>
                                {{--<th class="center">--}}
                                    {{--<label class="pos-rel">--}}
                                        {{--<input type="checkbox" class="ace" />--}}
                                        {{--<span class="lbl"></span>--}}
                                    {{--</label>--}}
                                {{--</th>--}}
                                <th>STT</th>
                                <th>Họ Tên</th>
                                <th>Ngáy Sinh</th>
                                <th>Tên Phụ Huynh</th>
                                <th>Số Điện Thoại</th>
                                <th>Facebook</th>
                                <th>Khóa Học</th>
                                <th>Lớp Học</th>
                                <th>Ca Học</th>
                                <th>Ngày Đăng Ký</th>
                                <th></th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($data as $dt)
                            <tr>
                                {{--<td class="center">--}}
                                    {{--<label class="pos-rel">--}}
                                        {{--<input type="checkbox" class="ace" />--}}
                                        {{--<span class="lbl"></span>--}}
                                    {{--</label>--}}
                                {{--</td>--}}
                                <td>{{$dt->Stt}}</td>
                                <td>{{$dt->Name}}</td>
                                <td>{{$dt->Bod}}</td>
                                <td>{{$dt->Parent}}</td>
                                <td>{{$dt->Phone}}</td>
                                <td>{{$dt->Facebook}}</td>
                                <td>{{$dt->Course}}</td>
                                <td>{{$dt->ClassName}}</td>
                                {{--<td>{{$dt->Lecture}}</td>--}}
                                @if($dt->Lecture == 1)
                                    <td>9h30 - 11h00</td>
                                    @elseif ($dt->Lecture == 1)
                                    <td>17h30 - 19h00</td>
                                @else
                                    <td>19h05 - 20h35</td>
                                @endif
                                <td>{{$dt->RegDate}}</td>

                                <td>
                                    <div class="hidden-sm hidden-xs btn-group">
                                        <button class="btn btn-xs btn-success">
                                            <i class="ace-icon fa fa-check bigger-120"></i>
                                        </button>

                                        <button class="btn btn-xs btn-info">
                                            <i class="ace-icon fa fa-pencil bigger-120"></i>
                                        </button>

                                        <button class="btn btn-xs btn-danger">
                                            <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                        </button>

                                        <button class="btn btn-xs btn-warning">
                                            <i class="ace-icon fa fa-flag bigger-120"></i>
                                        </button>
                                    </div>

                                    <div class="hidden-md hidden-lg">
                                        <div class="inline pos-rel">
                                            <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                            </button>

                                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                <li>
                                                    <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																			<span class="blue">
																				<i class="ace-icon fa fa-search-plus bigger-120"></i>
																			</span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																			<span class="green">
																				<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																			</span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																			<span class="red">
																				<i class="ace-icon fa fa-trash-o bigger-120"></i>
																			</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
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