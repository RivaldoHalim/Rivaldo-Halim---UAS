<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Invoice Sewa Kamar Hotel</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href='{{ asset("AdminLTE/plugins/fontawesome-free/css/all.min.css") }}'>
  <!-- Theme style -->
  <link rel="stylesheet" href='{{ asset("AdminLTE/dist/css/adminlte.min.css") }}'>
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h2 class="page-header">
          <img src='{{ asset("AdminLTE/dist/img/Logo_UPH.gif") }}' style="margin: 2% 0 0 35%; width: 20%;">
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    
      <!-- /.col -->
      
      <!-- /.col -->
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-12 table-responsive">
        <table class="table">
          <thead class="table-danger">
              <tr>
                  <th>Id Tamu</th>
                  <th>Nama Tamu</th>
                  <th>Jenis Kamar</th>
                  <th>No. Kamar</th>
                  <th>Tanggal Menginap</th>
                  <th>Harga</th>
                  <th>Keterangan</th>               
               </tr>
          </thead>
          @foreach ($tamuhotel as $th) 
          <tr class="table-success">
              <th>{{ $th->id_tamu }}</th>
              <th>{{ $th->nama_tamu }}</th>
              <th>{{ $th->jenis_kamar }}</th>
              <th>{{ $th->no_kamar_tamu }}</th>
              <th>{{ $th->tanggal_menginap }}</th>
              <th>{{ $th->harga_kamar }}</th>
              <th>{{ $th->keterangan }}</th>
             
          </tr>
          @endforeach
      </table> 
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
<!-- Page specific script -->
  <script>
    window.addEventListener("load", window.print());
  </script>
</body>
</html>
