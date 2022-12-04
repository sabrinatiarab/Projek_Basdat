@extends('/base_pelanggan')
    <!-- Page Header Start -->
    <div class="page-header mb-0">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2>History Pesanan</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Page Header End -->

    <div class="row">
      <div class="col-md-12">
        <div class="table-wrap">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>ID Order</th>
                <th>ID Menu</th>
                <th>Nama Menu</th>
                <th>Jumlah Kuantitas</th>
                <th>Jumlah Pembayaran</th>
                <th>Tanggal</th>
                <th>ID Pelanggan</th>
                <th>ID Pengiriman</th>
                <th>Jam Kirim</th>
                <th>Jam Diterima</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
            <?php
            include('koneksi.php');
            $no = 1;
            $bulan = array (1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
            while ($row = mysqli_fetch_array($query))
            {
            $tgl = explode('-', $row['tanggal']);
            $harga = $row['harga'] == 0 ? '' : number_format($row['harga'], 0, ',', '.');
            echo '<tr>
            <td>'.$no.'</td>
            <td>'.$row['pembeli'].'</td>
            <td>'.$row['barang'].'</td>
            <td>'.$tgl[2] . ' ' . $bulan[(int)$tgl[1]] . ' ' . $tgl[0] . '</td>
            <td>'.$harga.'</td>
            </tr>';
            $no++;
            }?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
