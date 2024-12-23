<x-main-layout>
    <style>
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
            Upload Surat
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Upload Surat</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group col-sm-6">
                            <label for="name">Name:</label>
                            <input class="form-control" name="name" type="text" id="name">
                        </div>
                        <div class="form-group col-sm-6 ">
                            <label for="tags[]">Tags</label>
                            <select class="form-control select2" id="tags" name="tags[]" multiple>
                                <option value="1">Surat Permohonan</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-12 ">
                            <label for="description">Description:</label>
                            <textarea class="form-control b-wysihtml5-editor" name="description" cols="50" rows="10" id="description"></textarea>
                        </div>

                        <div class="form-group col-sm-12">
                            <label for="file">File Upload</label>
                            <input class="form-control" name="file" type="file" id="file">
                        </div>

                        <div class="form-group col-sm-12">
                            <input class="btn btn-primary" type="submit" value="Upload">
                            <a href="" class="btn btn-default">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</x-main-layout>
