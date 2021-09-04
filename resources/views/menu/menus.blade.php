 <!-- sidebar menu area start -->
 <div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo">
            <a href="index.html"><img src="{{ url('assets/images/icon/logohv.png')}}" alt="logo"></a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">
                    <li class="active">
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>quan ly </span></a>
                        <ul class="collapse">
                            
                            <li ><a href="{{url('admin-manager')}}">Bảng Giáo Vụ</a></li>
                            <li ><a href="{{url('admin-manager/create')}}">Thêm Giáo Vụ</a></li>
                         
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span> Sinh viên
                            </span></a>
                        <ul class="collapse">
                            <li><a href="{{url('sinhvien-manager')}}">Bảng Sinh viên</a></li>
                            <li><a href="{{url('sinhvien-manager/create')}}">Thêm Sinh Viên</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span> khóa
                            </span></a>
                        <ul class="collapse">
                            <li><a href="{{url('khoa-manager')}}">Bảng khóa</a></li>
                            <li><a href="{{url('khoa-manager/create')}}">Thêm khóa</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span> Lớp
                            </span></a>
                        <ul class="collapse">
                            <li><a href="{{url('lop-manager')}}">Bảng Lớp</a></li>
                            <li><a href="{{url('lop-manager/create')}}">Thêm Lớp</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span> Ngành
                            </span></a>
                        <ul class="collapse">
                            <li><a href="{{url('nganh-manager')}}">Bảng Ngành</a></li>
                            <li><a href="{{url('nganh-manager/create')}}">Thêm Ngành</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span> Môn
                            </span></a>
                        <ul class="collapse">
                            <li><a href="{{url('mon-manager')}}">Bảng Môn</a></li>
                            <li><a href="{{url('mon-manager/create')}}">Thêm Môn</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span> Điểm
                            </span></a>
                        <ul class="collapse">
                            <li><a href="index.html">Bảng điểm</a></li>
                            <li><a href="index3-horizontalmenu.html">Thêm điểm</a></li>
                        </ul>
                    </li>
                   
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-pie-chart"></i><span>thống kê</span></a>
                        <ul class="collapse">
                            <li><a href="barchart.html">bar chart</a></li>
                            <li><a href="linechart.html">line Chart</a></li>
                            <li><a href="piechart.html">pie chart</a></li>
                        </ul>
                    </li>
                    {{-- <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-palette"></i><span>UI Features</span></a>
                        <ul class="collapse">
                            <li><a href="accordion.html">Accordion</a></li>
                            <li><a href="alert.html">Alert</a></li>
                            <li><a href="badge.html">Badge</a></li>
                            <li><a href="button.html">Button</a></li>
                            <li><a href="button-group.html">Button Group</a></li>
                            <li><a href="cards.html">Cards</a></li>
                            <li><a href="dropdown.html">Dropdown</a></li>
                            <li><a href="list-group.html">List Group</a></li>
                            <li><a href="media-object.html">Media Object</a></li>
                            <li><a href="modal.html">Modal</a></li>
                            <li><a href="pagination.html">Pagination</a></li>
                            <li><a href="popovers.html">Popover</a></li>
                            <li><a href="progressbar.html">Progressbar</a></li>
                            <li><a href="tab.html">Tab</a></li>
                            <li><a href="typography.html">Typography</a></li>
                            <li><a href="form.html">Form</a></li>
                            <li><a href="grid.html">grid system</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-slice"></i><span>icons</span></a>
                        <ul class="collapse">
                            <li><a href="fontawesome.html">fontawesome icons</a></li>
                            <li><a href="themify.html">themify icons</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-table"></i>
                            <span>Tables</span></a>
                        <ul class="collapse">
                            <li><a href="table-basic.html">basic table</a></li>
                            <li><a href="table-layout.html">table layout</a></li>
                            <li><a href="datatable.html">datatable</a></li>
                        </ul>
                    </li>
                    <li><a href="maps.html"><i class="ti-map-alt"></i> <span>maps</span></a></li>
                    <li><a href="invoice.html"><i class="ti-receipt"></i> <span>Invoice Summary</span></a></li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layers-alt"></i> <span>Pages</span></a>
                        <ul class="collapse">
                            <li><a href="login.html">Login</a></li>
                            <li><a href="login2.html">Login 2</a></li>
                            <li><a href="login3.html">Login 3</a></li>
                            <li><a href="register.html">Register</a></li>
                            <li><a href="register2.html">Register 2</a></li>
                            <li><a href="register3.html">Register 3</a></li>
                            <li><a href="register4.html">Register 4</a></li>
                            <li><a href="screenlock.html">Lock Screen</a></li>
                            <li><a href="screenlock2.html">Lock Screen 2</a></li>
                            <li><a href="reset-pass.html">reset password</a></li>
                            <li><a href="pricing.html">Pricing</a></li>
                            <li><a href="404.html">Error 404</a></li>
                            <li><a href="500.html">Error 500</a></li>
                        </ul>
                    </li> --}}
                    {{-- <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-align-left"></i> <span>Multi
                                level menu</span></a>
                        <ul class="collapse">
                            <li><a href="#">Item level (1)</a></li>
                            <li><a href="#">Item level (1)</a></li>
                            <li><a href="#" aria-expanded="true">Item level (1)</a>
                                <ul class="collapse">
                                    <li><a href="#">Item level (2)</a></li>
                                    <li><a href="#">Item level (2)</a></li>
                                    <li><a href="#">Item level (2)</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Item level (1)</a></li>
                        </ul>
                    </li> --}}
                </ul>
            </nav>
        </div>
    </div>
</div>