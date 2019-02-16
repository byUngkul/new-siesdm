<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url();?>assets/dist/img/logo-jabar.png" class="img-circle" alt="Logo Image">
        </div>
        <div class="pull-left info">
          <p>SiESDM</p>
          
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        
                              

        <li class="">
          <a href="<?=base_url('dashboard')?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Data Air Tanah</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          
          <ul class="treeview-menu">
          <!-- Akses Admin-->
          <?php if($this->session->userdata('akses')=='1'):?>
            <!--li class="treeview">
              <a href="#">
                <span>SELURUH DATA</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                
              </ul>
            </li -->
            <li><a href="<?=base_url('perusahaan')?>"><i class="fa fa-circle-o"></i> Data Perusahaan</a></li>
            <li><a href="<?=base_url('sumur')?>"><i class="fa fa-circle-o"></i> Data Sumur</a></li>
            <li><a href="<?=base_url('pengambilan_air')?>"><i class="fa fa-circle-o"></i> Data Pengambilan Air</a></li>
            <li><a href="<?=base_url('pajak')?>"><i class="fa fa-circle-o"></i> Data Pajak Air Tanah</a></li>
            <!--li class="treeview">
              <a href="#">
                <span>KOTA BANDUNG</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?=base_url('perusahaan')?>"><i class="fa fa-circle-o"></i> Data Perusahaan</a></li>
                <li><a href="<?=base_url('sumur')?>"><i class="fa fa-circle-o"></i> Data Sumur</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Data Pengambilan Air</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <span>KOTA CIMAHI</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?=base_url('perusahaan')?>"><i class="fa fa-circle-o"></i> Data Perusahaan</a></li>
                <li><a href="<?=base_url('sumur')?>"><i class="fa fa-circle-o"></i> Data Sumur</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Data Pengambilan Air</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                  <span>KAB. BANDUNG BARAT</span>
                  <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                  </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?=base_url('perusahaan')?>"><i class="fa fa-circle-o"></i> Data Perusahaan</a></li>
                <li><a href="<?=base_url('sumur')?>"><i class="fa fa-circle-o"></i> Data Sumur</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Data Pengambilan Air</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                  <span>KAB. SUBANG</span>
                    <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                  </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?=base_url('perusahaan')?>"><i class="fa fa-circle-o"></i> Data Perusahaan</a></li>
                <li><a href="<?=base_url('sumur')?>"><i class="fa fa-circle-o"></i> Data Sumur</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Data Pengambilan Air</a></li>
              </ul>
            </li -->
          <!-- Akses Bnadung-->
          <?php elseif($this->session->userdata('akses')=='5'):?>
            <li class="treeview">
              <a href="#">
                <span>KOTA BANDUNG</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?=base_url('perusahaan')?>"><i class="fa fa-circle-o"></i> Data Perusahaan</a></li>
                <li><a href="<?=base_url('sumur')?>"><i class="fa fa-circle-o"></i> Data Sumur</a></li>
                <li><a href="<?=base_url('pengambilan_air')?>"><i class="fa fa-circle-o"></i> Data Pengambilan Air</a></li>
                <li><a href="<?=base_url('pajak')?>"><i class="fa fa-circle-o"></i> Data Pajak Air Tanah</a></li>
              </ul>
            </li>
          <!-- Akses Cimahi-->
          <?php elseif($this->session->userdata('akses')=='4'):?>
            <li class="treeview">
              <a href="#">
                <span>KOTA CIMAHI</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?=base_url('perusahaan')?>"><i class="fa fa-circle-o"></i> Data Perusahaan</a></li>
                <li><a href="<?=base_url('sumur')?>"><i class="fa fa-circle-o"></i> Data Sumur</a></li>
                <li><a href="<?=base_url('pengambilan_air')?>"><i class="fa fa-circle-o"></i> Data Pengambilan Air</a></li>
                <li><a href="<?=base_url('pajak')?>"><i class="fa fa-circle-o"></i> Data Pajak Air Tanah</a></li>
              </ul>
            </li
          <!-- Akses Bandung barat-->
          <?php elseif($this->session->userdata('akses')=='6'):?>
            <li class="treeview">
              <a href="#">
                  <span>KAB. BANDUNG BARAT</span>
                  <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                  </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?=base_url('perusahaan')?>"><i class="fa fa-circle-o"></i> Data Perusahaan</a></li>
                <li><a href="<?=base_url('sumur')?>"><i class="fa fa-circle-o"></i> Data Sumur</a></li>
                <li><a href="<?=base_url('pengambilan_air')?>"><i class="fa fa-circle-o"></i> Data Pengambilan Air</a></li>
                <li><a href="<?=base_url('pajak')?>"><i class="fa fa-circle-o"></i> Data Pajak Air Tanah</a></li>
              </ul>
            </li>
          <!-- Akses Subang -->
          <?php elseif($this->session->userdata('akses')=='7'):?>
            <li class="treeview">
              <a href="#">
                  <span>KAB. SUBANG</span>
                    <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                  </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?=base_url('perusahaan')?>"><i class="fa fa-circle-o"></i> Data Perusahaan</a></li>
                <li><a href="<?=base_url('sumur')?>"><i class="fa fa-circle-o"></i> Data Sumur</a></li>
                <li><a href="<?=base_url('pengambilan_air')?>"><i class="fa fa-circle-o"></i> Data Pengambilan Air</a></li>
                <li><a href="<?=base_url('pajak')?>"><i class="fa fa-circle-o"></i> Data Pajak Air Tanah</a></li>
              </ul>
            </li>
          <?php else: ?>
            <li class="treeview">
              <a href="#">
                <span>KOTA BANDUNG</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?=base_url('perusahaan')?>"><i class="fa fa-circle-o"></i> Data Perusahaan</a></li>
                <li><a href="<?=base_url('sumur')?>"><i class="fa fa-circle-o"></i> Data Sumur</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Data Pengambilan Air</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <span>KOTA CIMAHI</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?=base_url('perusahaan')?>"><i class="fa fa-circle-o"></i> Data Perusahaan</a></li>
                <li><a href="<?=base_url('sumur/k_cmh')?>"><i class="fa fa-circle-o"></i> Data Sumur</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Data Pengambilan Air</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                  <span>KAB. BANDUNG BARAT</span>
                  <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                  </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?=base_url('perusahaan')?>"><i class="fa fa-circle-o"></i> Data Perusahaan</a></li>
                <li><a href="<?=base_url('sumur')?>"><i class="fa fa-circle-o"></i> Data Sumur</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Data Pengambilan Air</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                  <span>KAB. SUBANG</span>
                    <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                  </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?=base_url('perusahaan')?>"><i class="fa fa-circle-o"></i> Data Perusahaan</a></li>
                <li><a href="<?=base_url('sumur')?>"><i class="fa fa-circle-o"></i> Data Sumur</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Data Pengambilan Air</a></li>
              </ul>
            </li>
          <?php endif;?>
          </ul>
        
        </li>
        <?php if($this->session->userdata('akses')=='1'):?>
        <li class="">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Data Bidang Energi</span>
          </a>
        </li>
        <li class="">
          <a href="<?=base_url('user')?>">
            <i class="fa fa-user"></i> <span>User</span>
          </a>
        </li>
        <?php endif; ?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>