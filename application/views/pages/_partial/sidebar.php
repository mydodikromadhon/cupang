 <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
     <div class="sb-sidenav-menu">
         <div class="nav">
             <div class="sb-sidenav-menu-heading">Dashboard</div>
             <a class="nav-link" href="<?= base_url('dashboard') ?>">
                 <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>Pusat Data
             </a>
         </div>
         <div class="nav">
             <div class="sb-sidenav-menu-heading">Master Data</div>
             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayoutsMasterData" aria-expanded="false" aria-controls="collapseLayouts">
                 <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                 Master Data
                 <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
             </a>
             <div class="collapse" id="collapseLayoutsMasterData" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                 <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="<?= base_url('customer') ?>">Data Customer</a>
                    <a class="nav-link" href="<?= base_url('farm') ?>">Data Farm</a>
                    <a class="nav-link" href="<?= base_url('addcupang') ?>">Data Ikan Cupang</a>
                    <a class="nav-link" href="<?= base_url('source') ?>">Data Source</a>
                    <a class="nav-link" href="<?= base_url('spkto') ?>">Data Sales</a>
                </nav>
             </div>
         </div>
         <div class="nav">
             <div class="sb-sidenav-menu-heading">Transaksi</div>
             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayoutsPO" aria-expanded="false" aria-controls="collapseLayouts">
                 <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                 Purchasing Order
                 <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
             </a>
             <div class="collapse" id="collapseLayoutsPO" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                 <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="po">Purchasing Order</a>
                    <a class="nav-link" href="transaksi">Transaksi</a>
                    <!--<a class="nav-link" href="notaspk">Nota Invoice</a>-->
                </nav>
             </div>
         </div>
         <div class="nav">
             <div class="sb-sidenav-menu-heading">Reporting</div>
             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayoutsFin" aria-expanded="false" aria-controls="collapseLayouts">
                 <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                 Modul Finance
                 <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
             </a>
             <div class="collapse" id="collapseLayoutsFin" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                 <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="monitoringharian">Monitoring Penjualan Bulanan</a>
                    <a class="nav-link" href="monitoringmediarcm">Monitoring Pendapatan Bulanan</a>
                    <a class="nav-link" href="#">Monitoring Hutang</a>
                    <a class="nav-link" href="#">Monitoring Pendapatan Sales</a>
                    
                </nav>
             </div>
         </div>
         <div class="sb-sidenav-footer">
             <div class="small">Logged in as:</div>
             <?= $this->session->userdata('fname') ?>&nbsp<?= $this->session->userdata('lname') ?>
         </div>
 </nav>