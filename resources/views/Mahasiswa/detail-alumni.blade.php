@extends('Template.web')
@section('title','Detail Alumni')
@section('isi blog')
<!-- Section Title Blog -->
<div class="section-title-bg text-center m-bottom-40">
    <h2 class="wow fadeInDown no-margin" data-wow-duration="1s" data-wow-delay="0.6s"><strong>Detail Data Alumni</strong></h2>
    <div class="divider-center-small wow zoomIn" data-wow-duration="1s" data-wow-delay="0.6s"></div>
    <p class="section-subtitle wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s"></p>
</div>

<section id="blog-single" class="p-top-80 p-bottom-80">
    <!--Container-->
    <div class="container clearfix">
        <a href="{{url()->previous()}}"><strong>
                << BACK</strong></a><br>
        <div class="row">
            <div class="col-sm-4 sidebar">
                <div class="team-item wow zoomIn" data-wow-duration="1s" data-wow-delay="0.9s">
                    @foreach($profil as $dt)
                    <div class="team-item-image">
                        <img src="{{asset('img/alumni/'. $dt->foto)}}" alt="Alumni belum meng-upload foto" />
                    </div>
                    @endforeach
                    <div class="team-item-info">
                        @foreach($profil as $data)
                        <div class="team-item-name">
                            {{$data->nama}}
                        </div>
                        <div class="team-item-position">
                            {{$data->nim}}
                        </div>
                        @endforeach
                    </div><br>
                    <div class="widget">
                        <h3>About Me!</h3>
                        {!! $data->about !!}
                    </div>
                </div>

            </div> <!-- /.col -->
            <div class="col-sm-8">
                <div class="widget">
                    <table>
                        @foreach($profil as $data1)
                        <tr>
                            <td>
                                <p style="font-size: 15px;"><strong>Nama </strong></p>
                            </td>
                            <td>
                                <p style="font-size: 15px;"> {{$data1->nama}} </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="font-size: 15px;"><strong>Nim </strong></p>
                            </td>
                            <td>
                                <p style="font-size: 15px;">{{$data1->nim}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="font-size: 15px;"><strong>IPK </strong></p>
                            </td>
                            <td>
                                <p style="font-size: 15px;">{{$data1->ipk}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="font-size: 15px;"><strong>Tahun Lulus </strong></p>
                            </td>
                            <td>
                                <p style="font-size: 15px;">{{$data1->thn_lulus}} </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="font-size: 15px;"><strong>Pekerjaan </strong></p>
                            </td>
                            <td>
                                <p style="font-size: 15px;">{{$data1->pekerjaan}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="font-size: 15px;"><strong>Tempat Kerja </strong></p>
                            </td>
                            <td>
                                <p style="font-size: 15px;">{{$data1->tpt_kerja}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="font-size: 15px;"><strong>Nomor Hp </strong></p>
                            </td>
                            <td>
                                <p style="font-size: 15px;">{{$data1->no_hp}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="font-size: 15px;"><strong>Jenis Kelamin </strong></p>
                            </td>
                            <td>
                                <p style="font-size: 15px;">{{$data1->jk}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="font-size: 15px;"><strong>Tempat Lahir </strong></p>
                            </td>
                            <td>
                                <p style="font-size: 15px;">{{$data1->tempat_lahir}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="font-size: 15px;"><strong>Tanggal Lahir </strong></p>
                            </td>
                            <td>
                                <p style="font-size: 15px;">{{$data1->tgl_lahir}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="font-size: 15px;"><strong>Alamat </strong></p>
                            </td>
                            <td>
                                <p style="font-size: 15px;">{{$data1->alamat}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="200px">
                                <p style="font-size: 15px;"><strong>Pengalaman Organisasi </strong></p>
                            </td>
                            <td>
                                <p style="font-size: 15px;">{!!$data1->organisasi!!}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="font-size: 15px;"><strong>Prestasi </strong></p>
                            </td>
                            <td>
                                <p style="font-size: 15px;">{!!$data1->prestasi!!}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="font-size: 15px;"><strong>Sosial Media </strong></p>
                            </td>
                            <td>
                                <p style="font-size: 15px;"></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="font-size: 15px;">Instagram</p>
                            </td>
                            <td>
                                <p style="font-size: 15px;">{{$data1->instagram}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="font-size: 15px;">LinkedIn</p>
                            </td>
                            <td>
                                <p style="font-size: 15px;">{{$data1->linkedin}}</p>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <!--End widget-->
            </div> <!-- /.col -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>
<!--End blog single section-->
@endsection