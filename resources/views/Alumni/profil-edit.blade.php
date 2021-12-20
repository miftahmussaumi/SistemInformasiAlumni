@extends('Template.alumni')
@section('title','Edit Profil')
<script src="{{asset('editor-about/ckeditor.js')}}"></script>
<script src="{{asset('editor-about/samples/js/sample.js')}}"></script>
<link rel="stylesheet" href="{{asset('editor-about/samples/css/samples.css')}}">
<link rel="stylesheet" href="{{asset('editor-about/samples/toolbarconfigurator/lib/codemirror/neo.css')}}">
@section('isi blog')
<section id="blog-single" class="p-top-80 p-bottom-80">
    <!--Container-->
    <div class="container clearfix">
        <a href="/profil-alumni"><strong>
                << BACK</strong></a><br>
        @foreach ($profil as $data)
        <div class="row">
            <div class="col-sm-4 sidebar">
                <div class="team-item wow zoomIn" data-wow-duration="1s" data-wow-delay="0.9s">
                    <div class="team-item-image">
                        <img src="{{asset('web/img/team/3.jpg')}}" alt="" />
                    </div>
                    <div class="team-item-info">
                        <div class="team-item-name">
                            Ganti Foto <br>
                        </div>
                        <div class="team-item-info">
                            <table style="margin-left: 20px;">
                                <tr>
                                    <td><input type="file"></td>
                                    <td> <button type="submit" class="send_message btn btn-main btn-theme wow fadeInUp">SAVE</button></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div><br>
                <div class="widget">
                    <form action="{{url('profil-edit-about', $data->id)}}" method="POST">
                        {{csrf_field()}}
                        <textarea name="about" id="about" cols="30" rows="10">{!!$data->about!!}</textarea><br>
                        <button type="submit" class="send_message btn btn-main btn-theme wow fadeInUp">SAVE</button></td>
                    </form>
                </div>
            </div> <!-- /.col -->
            <div class=" col-sm-8">
                <form action="{{url('profil-edit-simpan',$data->id)}}" method="POST">
                    {{csrf_field()}}
                    <div class="widget">
                        <h4>Edit Profil</h4>
                        <table>
                            <tr>
                                <td>
                                    <p style="font-size: 15px;"><strong>Nama </strong></p>
                                </td>
                                <td>
                                    <input type="text" size="40" name="nama" value="{{$data->nama}}">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="font-size: 15px;"><strong>Nim </strong></p>
                                </td>
                                <td>
                                    <input type="text" size="40" name="nim" maxlength="10" value="{{$data->nim}}">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="font-size: 15px;"><strong>IPK </strong></p>
                                </td>
                                <td>
                                    <input type="text" size="40" name="ipk" maxlength="4" value="{{$data->ipk}}">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="font-size: 15px;"><strong>Tahun Lulus </strong></p>
                                </td>
                                <td>
                                    <input type="text" size="40" name="thn_lulus" maxlength="4" value="{{$data->thn_lulus}}">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="font-size: 15px;"><strong>Pekerjaan </strong></p>
                                </td>
                                <td>
                                    <input type="text" size="40" name="pekerjaan" value="{{$data->pekerjaan}}">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="font-size: 15px;"><strong>Tempat Kerja </strong></p>
                                </td>
                                <td>
                                    <input type="text" size="40" name="tpt_kerja" value="{{$data->tpt_kerja}}">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="font-size: 15px;"><strong>Nomor Hp </strong></p>
                                </td>
                                <td>
                                    <input type="text" size="40" name="no_hp" value="{{$data->no_hp}}">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="font-size: 15px;"><strong>Jenis Kelamin </strong></p>
                                </td>
                                <td>
                                    <input type="radio" name="jk" value="Laki-Laki"> Laki-Laki
                                    <input type="radio" name="jk" value="Perempuan"> Perempuan
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="font-size: 15px;"><strong>Tempat Lahir </strong></p>
                                </td>
                                <td>
                                    <input type="text" size="40" name="tempat_lahir" value="{{$data->tempat_lahir}}">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="font-size: 15px;"><strong>Tanggal Lahir </strong></p>
                                </td>
                                <td>
                                    <input type="date" size="40" name="tgl_lahir" value="{{$data->tgl_lahir}}">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="font-size: 15px;"><strong>Alamat </strong></p>
                                </td>
                                <td>
                                    <textarea name="alamat" cols="35" rows="3"> {{$data->alamat}}</textarea>
                                </td>
                            </tr>
                            <tr>
                                <td width="200px">
                                    <p style="font-size: 15px;"><strong>Pengalaman Organisasi </strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <textarea name="organisasi" id="organisasi" cols="35" rows="5"> {{$data->organisasi}}</textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="font-size: 15px;"><strong>Prestasi </strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <textarea name="prestasi" id="prestasi" cols="35" rows="5"> {{$data->prestasi}}</textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="font-size: 15px;"><strong>Sosial Media </strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="font-size: 15px;">Instagram</p>
                                </td>
                                <td>
                                    <input type="text" size="40" name="instagram" placeholder="Username Instagaram" value="{{$data->instagram}}">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="font-size: 15px;">LinkedIn</p>
                                </td>
                                <td>
                                    <input type="text" size="40" name="linkedin" placeholder="Username LinkedIn" value="{{$data->linkedin}}">
                                </td>
                            </tr>
                        </table>
                        <button type="submit" class="send_message btn btn-main btn-theme wow fadeInUp">Submit</button>
                    </div>
                </form>
                <!--End widget-->
            </div> <!-- /.col -->
        </div> <!-- /.row -->
        @endforeach
    </div> <!-- /.container -->
</section>
<!--End blog single section-->
<script>
    CKEDITOR.replace('about');
</script>
<script>
    CKEDITOR.replace('organisasi');
</script>
<script>
    CKEDITOR.replace('prestasi');
</script>
@endsection