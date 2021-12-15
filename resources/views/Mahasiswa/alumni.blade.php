@extends('Template.web')
@section('title','Data Alumni')
@section('isi blog')
<!-- Section Title Blog -->
<div class="section-title-bg text-center m-bottom-40">
    <h2 class="wow fadeInDown no-margin" data-wow-duration="1s" data-wow-delay="0.6s"><strong>Data Alumni Sistem Informasi</strong></h2>
    <div class="divider-center-small wow zoomIn" data-wow-duration="1s" data-wow-delay="0.6s"></div>
    <p class="section-subtitle wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">Silahkan explore alumni favoritmu</p>
</div>


<!--BLog single section-->
<section class="blog-index">

    <!--Container-->
    <div class="container clearfix">
        <div class="row m-bottom-40">
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Nim</th>
                        <th>Tahun Lulus</th>
                        <th>email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1;?>
                    @foreach ($dtAlumni as $data)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$data->nama}}</td>
                        <td>{{$data->nim}}</td>
                        <td>{{$data->thn_lulus}}</td>
                        <td>{{$data->email}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div> <!-- /.row -->
    </div> <!-- /.container -->

</section>
<!--End blog single section-->

@endsection