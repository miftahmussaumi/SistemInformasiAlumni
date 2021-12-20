@extends('Template.alumni')
@section('title','Alumni')
@section('isi blog')
<!-- Section Title Blog -->
<div class="section-title-bg text-center m-bottom-40">
    <h2 class="wow fadeInDown no-margin" data-wow-duration="1s" data-wow-delay="0.6s"><strong>WELCOME TO Data Alumni Sistem Informasi</strong></h2>
    <div class="divider-center-small wow zoomIn" data-wow-duration="1s" data-wow-delay="0.6s"></div>
    <p class="section-subtitle wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s"></p>
</div>

<!--BLog single section-->
<section class="blog-index">
    <!--Container-->
    <div class="container clearfix">
        <div class="row">
            <div class="col-sm-4 sidebar">
                <div class="widget widget-search">
                    <form action="{{url('cari-alumni')}}" method="GET" class="search-form">
                        <input type="text" name="cari" placeholder="Cari Alumni..." value="{{old('cari')}}">
                        <input type="submit" class="submit-search" value="Ok">
                    </form>
                </div>
                <!--End widget-->
            </div>
        </div>
        <div class="row">
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Nim</th>
                        <th>Tahun Lulus</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($dtAlumni as $data)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$data->nama}}</td>
                        <td>{{$data->nim}}</td>
                        <td>{{$data->thn_lulus}}</td>
                        <td>{{$data->email}}</td>
                        <td>
                            <a href="{{url('detail-alumni',$data->id)}}">Detail</a>
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