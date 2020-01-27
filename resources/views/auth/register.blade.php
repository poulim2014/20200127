<!DOCTYPE html>
<html lang="en">
<head>
    <title>STR | MOF LAOS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Datta Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template"/>
    <meta name="author" content="CodedThemes"/>
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <nav class="pcoded-navbar">
        <div class="navbar-wrapper">
            <div class="navbar-brand header-logo">
            <a href="{{ route('register')}}" class="b-brand">
                   <div class="b-bg">
                       <i class="feather icon-trending-up"></i>
                   </div>
                   <span class="b-title">STR | MOF LAOS</span>
               </a>
               <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
           </div>
            <div class="navbar-content scroll-div">
                <ul class="nav pcoded-inner-navbar">
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item">
                        <a href="{{ route('welcome') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">ໜ້າລັກ</span></a>
                    </li>
                    <li data-username="form elements advance componant validation masking wizard picker select" class="nav-item active">
                        <a href="{{ route('register')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">ເປີດບັນຊີຜູ້ໃຊ້ໃຫມ່</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>ຂັ້ນຕອນທີ 1/2 - ສ້າງບັນຊີຜູ້ນຳໃຊ້</h5>
                                        </div>
                                        <div class="card-body">
                                            <h5>ກະລຸນາປ້ອນຂໍ້ມູນ:</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <form method="POST" action="{{ route('register') }}">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">ເລກບັດປະຈຳຕົວ/ທະບຽນວິສາຫະກິດ</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" autofocus>
                                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">ຊື່:</label>
                                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">ນາມສະກຸນ:</label>
                                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">ຊື່ວິສາຫະກິດ:</label>
                                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">ຖະໜົນ/ບ້ານ:</label>
                                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">ຕູ້ໄປສະນີ:</label>
                                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                        </div>
                                                </div>
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="exampleFormControlSelect1">ແຂວງ</label>
                {{ Form::select('province_id', App\Province::all()->pluck('name_lao','id'), null, ['placeholder' => 'Pick a size...','class' => 'form-control']) }}
                                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleFormControlSelect1">ເມືອງ:</label>
               {{ Form::select('district_id', App\District::all()->pluck('name_lao','id'), null, ['placeholder' => 'Pick a size...','class' => 'form-control']) }}
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="exampleFormControlSelect1">ບ້ານ</label>
             {{ Form::select('province_id', App\Province::all()->pluck('name_lao','id'), null, ['placeholder' => 'Pick a size...','class' => 'form-control']) }}
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">ໂທລະສັບ</label>
                                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">ແຟັກ:</label>
                                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">ຊື່ອີເມລ:</label>
                                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                        </div>
                                                    </div>
                                            </div>
                                            <h5 class="mt-5">ຜູ້ຕາງໜ້າທາງກົດໝາຍ</h5>
                                             <div class="row">
                                                <div class="col-md-6">
                                                    <label for="exampleInputPassword1">ຊື່:</label>
                                                    <input class="mb-3 form-control form-control-lg" type="text" placeholder="ຊື່:">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="exampleInputPassword1">ນາມສະກຸນ:</label>
                                                    <input class="mb-3 form-control form-control-lg" type="text" placeholder="ນາມສະກຸນ:">
                                                </div>
                                            </div>
                                            <div class="card-header">
                                                <h5>ຂໍ້ມູນຜູ້ນຳໃຊ້</h5>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="exampleInputPassword1">ຊື່ສຳລັບເຂົ້າລະບົບ:</label>
                                                    <input class="mb-3 form-control form-control-lg" type="text" placeholder="ຊື່ສຳລັບເຂົ້າລະບົບ">
                                                    <label for="exampleInputPassword1">ລະຫັດຜ່ານ/PIN:</label>
                                                    <input class="mb-3 form-control form-control-lg" type="text" placeholder="ລະຫັດຜ່ານ/PIN:">
                                                    <label for="exampleInputPassword1">ລະຫັດຜ່ານ/PIN ອີກເທື່ອໜຶ່ງ:</label>
                                                    <input class="mb-3 form-control form-control-lg" type="text" placeholder="ລະຫັດຜ່ານ/PIN ອີກເທື່ອໜຶ່ງ:">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                    <div class="form-group row mb-0">
                                                        <div class="col-md-6 offset-md-4">
                                                            <button type="submit" class="btn btn-primary">
                                                                {{ __('Register') }}
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
</body>
</html>
