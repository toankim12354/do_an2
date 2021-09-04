<!doctype html>
<html class="no-js" lang="en">

    @include('head.heads')

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        @include('menu.menus')
       {{-- menu --}}
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            @include('head.head_area')
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">QUẢN LÝ</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.html">Home</a></li>
                                <li><span> Danh sách lớp</span></li>
                            </ul>
                        </div>
                    </div>
                    @include('head.logout')
                </div>
            </div>
          
                  
                   <br>
                   <div style="width: 890px;
                   height: 100%; margin: 50px auto;"> 
                     <div>
                        <form action="{{ route('lop-manager.index') }}" method="get">
                            <input type="text" value="{{ $search ?? '' }}" name="search">
                            <button>Tìm Kiếm</button>
                        </form>
                    </div> 
                    <h4 class="header-title">Lớp</h4>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead class="text-uppercase bg-primary">
                                    <tr class="text-white">
                                        <th style="">Tên Lớp  </th>
                                        <th>Ngành Học</th>
                                        <th>Khóa Học</th>
                                        <th style="">Ngày bắt đầu</th>
                                        <th style="">Ngay ket thuc</th>
                                        <th style="">Ghi Chú</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                 
                                    @foreach ($lops as $lop)
                                    <tr style="background-color:#A4A4A4; " >
                                        <tr >
                                      
                                            <td>{{ $lop->ten }}</td>
                                            <td>{{ $lop->ten_nganh }}</td>
                                            <td>{{ $lop->ten_khoa }}</td>
                                            <td>{{ $lop->tg_bat_dau}}</td>
                                            <td>{{ $lop->tg_bket_thuc }}</td>
                                            <td >{{ $lop->ghi_chu }}</td>
                                            <td></td>
                                            
                                            <td>
                                                <a href="{{route('lop-manager.edit',$lop)}} " class="active styling-edit " ui-toggle-class="" style="margin-left: 5px; font-size:20px; ">
                                                    <i class="fa fa-edit text-success"></i>
                                                  &nbsp;&nbsp;&nbsp;
                                                  <a onClick="return confirm('Bạn có chắc muốn xóa giảng viên này không?')" href="" style="margin-left: 5px; font-size:20px;" class="active styling-edit" ui-toggle-class="">
                                                    <i class="fa fa-times text-danger "></i></a>
                                                  </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <br>
                   
                    
                    @if (isset($search) && $search !== '')
                        {{ $lops->appends(['search' => $search])->links() }}
                    @else
                        {{ $lops->links() }}
                    @endif
                </div>
                
                </div>
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>Facebook my: <a href="https://www.facebook.com/programToan/">Toàn kim</a>.</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
    @include('head.offset_area')
    <!-- offset area end -->
    <!-- jquery latest version -->
    @include('head.jquery')
</body>

</html>
