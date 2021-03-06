<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
    <script type="text/javascript">
        try{ace.settings.loadState('sidebar')}catch(e){}
    </script>

    <div class="sidebar-shortcuts" id="sidebar-shortcuts">
        <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
            <button class="btn btn-success">
                <i class="ace-icon fa fa-signal"></i>
            </button>

            <button class="btn btn-info">
                <i class="ace-icon fa fa-pencil"></i>
            </button>

            <button class="btn btn-warning">
                <i class="ace-icon fa fa-users"></i>
            </button>

            <button class="btn btn-danger">
                <i class="ace-icon fa fa-cogs"></i>
            </button>
        </div>

        <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
            <span class="btn btn-success"></span>

            <span class="btn btn-info"></span>

            <span class="btn btn-warning"></span>

            <span class="btn btn-danger"></span>
        </div>
    </div><!-- /.sidebar-shortcuts -->

    <ul class="nav nav-list">
        <li class="active">
            <a href="javascript:void(0)">
                <i class="menu-icon fa fa-tachometer"></i>
                <span class="menu-text"> Dashboard </span>
            </a>

            <b class="arrow"></b>
        </li>

        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-list"></i>
                <span class="menu-text"> Tables </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="tables.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Simple &amp; Dynamic
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="jqgrid.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        jqGrid plugin
                    </a>

                    <b class="arrow"></b>
                </li>
            </ul>
        </li>

        <li class="">
            <a href="javascript:void(0)" class="dropdown-toggle">
                <i class="menu-icon fa fa-pencil-square-o"></i>
                <span class="menu-text"> Học Viên </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="{{ url('/new/') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Học Viên Đăng Ký Mới
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{{ url('/next/') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Học Viên Đăng Ký Tiếp
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="javascript:void(0)">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Danh Sách Lớp Kiểm Tra
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{{ url('/waiting/') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Danh Sách Chờ Xếp Lớp
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{{ url('/tutoring/') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                    Danh Sách Phụ Đạo
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{{ url('/off/') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Danh Sách Học Viên Nghỉ
                    </a>

                    <b class="arrow"></b>
                </li>
            </ul>
        </li>





    </ul><!-- /.nav-list -->

    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>
</div>