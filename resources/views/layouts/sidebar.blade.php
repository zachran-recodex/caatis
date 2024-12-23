<aside class="main-sidebar" id="sidebar-wrapper">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
            <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
            </div>
        </form>
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="{{ Request::is('/doc') ? 'active' : '' }}">
                <a href="{{ route('doc') }}" style="color: #FFF"><i class="fa fa-file"></i><span>Upload Surat</span></a>
            </li>
            <li class="treeview {{ Request::is('admin/advanced*') ? 'active' : '' }}">
                <a href="#" style="color: #FFF">
                    <i class="fa fa-file"></i>
                    <span>Surat Permohonan</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ Request::is('/letter*') ? 'active' : '' }}">
                        <a href="{{ route('letter') }}" style="color: #FFF"><span>Surat Permohonan Beasiswa</span></a>
                    </li>
                    <li class="{{ Request::is('admin/advanced/custom-fields*') ? 'active' : '' }}">
                        <a href="" style="color: #FFF"><span>Surat Permohonan Izin</span></a>
                    </li>
                    <li class="{{ Request::is('admin/advanced/file-types*') ? 'active' : '' }}">
                        <a href="" style="color: #FFF"><span>Surat Permohonan Magang</span></a>
                    </li>
                </ul>
            </li>
            <li class="treeview {{ Request::is('admin/advanced*') ? 'active' : '' }}">
                <a href="#" style="color: #FFF">
                    <i class="fa fa-file"></i>
                    <span>Surat Rekomendasi</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ Request::is('admin/advanced/settings*') ? 'active' : '' }}">
                        <a href="" style="color: #FFF"><span>Surat Rekomendasi Dosen</span></a>
                    </li>
                    <li class="{{ Request::is('admin/advanced/custom-fields*') ? 'active' : '' }}">
                        <a href="" style="color: #FFF"><span>Surat Rekomendasi Kerja</span></a>
                    </li>
                    <li class="{{ Request::is('admin/advanced/file-types*') ? 'active' : '' }}">
                        <a href="" style="color: #FFF"><span>Surat Rekomendasi Beasiswa</span></a>
                    </li>
                </ul>
            </li>
            <li class="treeview {{ Request::is('admin/advanced*') ? 'active' : '' }}">
                <a href="#" style="color: #FFF">
                    <i class="fa fa-file"></i>
                    <span>Surat Keterangan</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ Request::is('admin/advanced/settings*') ? 'active' : '' }}">
                        <a href="" style="color: #FFF"><span>Surat Keterangan</span></a>
                    </li>
                    <li class="{{ Request::is('admin/advanced/custom-fields*') ? 'active' : '' }}">
                        <a href="" style="color: #FFF"><span>Surat Keterangan</span></a>
                    </li>
                    <li class="{{ Request::is('admin/advanced/file-types*') ? 'active' : '' }}">
                        <a href="" style="color: #FFF"><span>Surat Keterangan</span></a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
