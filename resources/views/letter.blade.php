<x-main-layout>
    <style>
        .pt-2 {
            padding-top: 5px;
        }
        .btn-primary {
            background-color: #47846D;
            border-color: #47846D;
        }
        .btn-primary:hover {
            background-color: #478422;
            border-color: #478422;
        }
    </style>

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Surat Permohonan
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Surat Permohonan</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-3">
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Surat Permohonan Beasiswa</h3>

                        <div class="box-tools">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body no-padding">
                        <ul class="nav nav-pills nav-stacked">
                            <li>
                                <a href="">
                                    <b>File Type</b>
                                    <p class="pt-2">General</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <b>Uploaded By:</b>
                                    <p class="pt-2">Super Admin</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <b>Uploaded On:</b>
                                    <p class="pt-2">24/09/2024 08:45 PM</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /. box -->
                <a href="" class="btn btn-primary btn-block margin-bottom">Download</a>
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Surat Permohonan Beasiswa</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="file-modal-preview">
                            <object class="obj-file-box" style="height: 800px; width: 100%"
                                    data="{{ asset('images/gofar.png') }}">
                            </object>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /. box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</x-main-layout>
