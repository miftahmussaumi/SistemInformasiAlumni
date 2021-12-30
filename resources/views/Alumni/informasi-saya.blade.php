@extends('Template.alumni')
@section('title','Informasi Saya')
@section('isi blog')
<!-- Section Title Blog -->
<div class="section-title-bg text-center m-bottom-40">
    <h2 class="wow fadeInDown no-margin" data-wow-duration="1s" data-wow-delay="0.6s"><strong>WELCOME TO Informasi Saya</strong></h2>
    <div class="divider-center-small wow zoomIn" data-wow-duration="1s" data-wow-delay="0.6s"></div>
    <p class="section-subtitle wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s"></p>
</div>

<!--BLog single section-->
<section class="blog-index">
    <!--Container-->
    <div class="container clearfix">
        <a href="/informasi"><strong>
                << BACK</strong></a><br><br>
        <div class="row">
            <a type="button" href="{{route('informasi-tambah')}}" class="send_message btn btn-main btn-theme wow fadeInUp">TAMBAHKAN INFORMASI</a>
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Tanggal Post</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($dtInfo as $data)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$data->judul}}</td>
                        <td>{{$data->nama_kategori}}</td>
                        <td>{{$data->tgl_up}}</td>
                        <td>
                            <a href="{{url('informasi-detail',$data->id_informasi)}}">Detail</a> |
                            <a href="{{url('informasi-edit',$data->id_informasi)}}">Edit</a> |
                            <a href="{{url('informasi-hapus',$data->id_informasi)}}" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div> <!-- /.row -->
    </div> <!-- /.container -->

</section>
<!--End blog single section-->
@endsection