<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    *{
        font-family:arial;
    }
    body{
        font-family:arial !important;
        }
    table{
        border-collapse: collapse;
        width:100%;
      }
    table, th, td{
        border: 1px solid #708090;
      }
      th{
        /* text-align: center; */
        height:40px;
      }
      td{
        text-align: center;
        padding:2px;
      }
      br{
          margin-bottom: 5px !important;
      }
     .judul{
         text-align: center;
     }
     .header{
         text-align: center;
         padding: 0px;
     }
     .pemko{
         width:80px;
     }
     .bakti_husada{
         width:140px;
     }
     .logo{
         float: left;
         margin-right: 0px;
         width: 15%;
         padding:0px;
         text-align: right;
     }
     .headtext{
         /* float:right; */
         margin-left: 0px;
         width: 100%;
         padding-left:60px !important;
         padding-right:8%;
     }
     hr{
         height: 3px;
         background-color: black;
     }
     .ttd{
         margin-left:70%;
         text-align: center;
         text-transform: uppercase;
     }
     .text-center{
       text-align:center;
     }

     @page { 
        size: 29 cm 21.5 cm ; 
         margin: 1 cm 1 cm 0 cm 1 cm !important;
         padding: 0px !important;
         }
    </style>
</head>
<body>
<div class="header" style="padding=0px; margin:0px">
            <table style="border: none"> 
                <tr style="border: none">
                    <td style="width:20%; border: none;"> <img  class="pemko" src="asset_template/images/pemkab.png"></td>
                    <td style="width:60%; border: none">
                        <h4 style="margin:0px; border: none">PEMERINTAH KOTA YOGAYAKARTA </h4>
                        <h2 style="margin:0px; border: none">DINAS KESEHATAN </h2>
                        <h2 style="margin:0px; border: none">PUSKESMAS KRATON </h2>
                        <p style="margin:0px; border: none">Jalan Musikanan KT II No.457, Panembahan, Kecamatan Kraton, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55131</p>
                    </td>
                    <td style="width:20%; border: none"><img  class="bakti_husada" src="asset_template/images/logo.png" width="100%"></td>
                </tr>
            </table>
            <hr>
    </div>
    <div class="container" style="padding=0px; margin:0px">
        <div class="isi" style="padding=0px; margin:0px">
        <h3 class="headtext" style="text-align: center;">Data Imunisasi</h3>
        <p>Laporan Data Tahun : <?php echo date("Y"); ?></p>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Vaksin</th>
                            <th>Petugas Imunisasi</th>
                            <th>Tanggal Imunisasi</th>
                            <th>Tempat Imunisasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $d)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$d->bidan->nama}}</td>
                            <td>{{$d->vaksin->nama_vaksin}}</td>
                            <td>{{carbon\carbon::parse($d->tanggal_imunisasi)->translatedFormat('d F Y')}}</td>
                            <td>{{$d->tempat_imunisasi}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table> 
                <br>
                <div class="ttd" >
                <table style="border: none; width:200px !important;">
                    <tr style="border: none">
                        <td style="border: none; text-align:center;">
                            Yogyakarta , {{Carbon\carbon::now()->translatedFormat('d F Y')}}
                            <br><br>
                            <p style="margin:0px;">Kepala Posyandu</p>
                            <br>
                            <br>
                            <br>
                            <br>
                            <p style="margin:0px;">.......................</p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>      
</body>
</html>