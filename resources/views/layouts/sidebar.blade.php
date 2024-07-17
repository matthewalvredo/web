<div class="sidebar" id="sidebar">
  <div class="sidebar-inner slimscroll">
    <div id="sidebar-menu" class="sidebar-menu">
      <ul class="sidebar-vertical">

        <li class="menu-title"><span>Main</span></li>
        <li>
          <a href="main" class="{{ request()->is('main') ? 'active' : '' }}"><i class="fe fe-user"></i>
            <span>Inventory</span></a>
        </li>
        <li>
          <a href="baku" class="{{ request()->is('baku') ? 'active' : '' }}"><i class="fe fe-shopping-cart"></i>
            <span>Bahan Baku</span></a>
        </li>
        <li>
          <a href="jadi" class="{{ request()->is('jadi') ? 'active' : '' }}"><i class="fe fe-package"></i>
            <span>Barang Produksi</span></a>
        </li>
        <li>
          <a href="jual" class="{{ request()->is('jual') ? 'active' : '' }}"><i class="fe fe-edit"></i>
            <span>Jual Hasil</span></a>
        </li>

        <li class="menu-title"><span>Reports</span></li>
        <li class="submenu">
          <a href="#"><i class="fe fe-box"></i><span>Laporan</span> <span class="menu-arrow"></span></a>
          <ul>
            <li><a class="{{ request()->is('laporanstock') ? 'active' : '' }}" href="laporanstock">Laporan Stock</a>
            </li>
            <li><a class="{{ request()->is('laporancredit') ? 'active' : '' }}" href="laporancredit">Laporan
                Keuangan</a></li>
          </ul>
        </li>

        <li class="menu-title"><span>Super Admin</span></li>
        <li class="submenu" style="display:{{ Auth::user()->role == '1' ? '' : 'none' }}">
          <a href="#"><i class="fe fe-user"></i> <span> Add</span> <span class="menu-arrow"></span></a>
          <ul>
            <li><a href="storebaku" class="{{ request()->is('storebaku') ? 'active' : '' }}">Bahan Baku</a></li>
            <li><a href="storejadi" class="{{ request()->is('storejadi') ? 'active' : '' }}">Barang Jadi</a> </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>
