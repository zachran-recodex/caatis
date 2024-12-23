<x-main-layout>
    <section class="content-header">
        <h1 class="pull-left">Dashboard</h1>
    </section>
    <section class="content" style="margin-top: 20px;">
        <div class="clearfix"></div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-8">
                <div class="box box-default">
                    <div class="box-header no-border text-center">
                        <h3 class="box-title">Quick Upload</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                    class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <form action="#" class="text-center" style="width: 30vw;margin: 0 auto;" onsubmit="return gotoUpload()">
                            <div class="form-group">
                                <label for="">Choose Documents</label>
                                <select name="document_id" id="document_id" class="form-control select2" required>
                                    <option value="1">Surat Permohonan</option>
                                    <option value="2">Surat Rekomendasi</option>
                                    <option value="3">Surat Keterangan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary">Upload</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-box bg-yellow">
                    <span class="info-box-icon"><i class="fa fa-tags"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Tags</span>
                        <span class="info-box-number">12</span>
                        <span class="progress-description">
                    Total Tags in system
                  </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <div class="info-box bg-green">
                    <span class="info-box-icon"><i class="fa fa-folder"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Documents</span>
                        <span class="info-box-number">12</span>
                        <span class="progress-description">
                    Containing 12 Documents
                  </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
        </div>
    </section>

    <script>
        function gotoUpload() {
            var docId = $("#document_id").val();
            var urlToUp = ""+"/"+docId;
            console.log(urlToUp);
            window.location.href = urlToUp;
            return false;
        }
    </script>
</x-main-layout>
