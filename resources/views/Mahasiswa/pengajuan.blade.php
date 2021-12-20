@extends('Template.web')
@section('title','Pengajuan Akun')
@section('isi blog')
<section id="blog-single" class="p-top-80 p-bottom-80">

    <!--Container-->
    <div class="container clearfix">
        <div class="row">
            <div class="col-sm-4 sidebar">
                <!-- Widget 3 -->
                <div class="widget">
                    <h4>Form Pendaftaran Akun</h4>
                    <form action="{{route('save-pengajuan')}}" method="post">
                        {{csrf_field()}}
                        <div class="card-body">
                            <table>
                                <tr height="30px">
                                    <td width="100px">
                                        <label>Nama</label>
                                    </td>
                                    <td>
                                        <input type="text" name="nama" placeholder="Nama Mahasiswa">
                                    </td>
                                </tr>
                                <tr height="30px">
                                    <td>
                                        <label>Nim</label>
                                    </td>
                                    <td>
                                        <input type="text" name="nim" placeholder="Nim Mahasiswa">
                                    </td>
                                </tr>
                                <tr height="30px">
                                    <td>
                                        <label>Tahun Lulus</label>
                                    </td>
                                    <td>
                                        <input type="text" name="thn_lulus" placeholder="Tahun Lulus Mahasiswa">
                                    </td>
                                </tr>
                                <tr height="30px">
                                    <td>
                                        <label>Email</label>
                                    </td>
                                    <td>
                                        <input type="text" name="email" placeholder="xxxx@gmail.com">
                                    </td>
                                </tr>
                                <tr height="30px">
                                    <td>
                                        <label>Password</label>
                                    </td>
                                    <td>
                                        <input type="password" name="password" placeholder="Input password">
                                    </td>
                                </tr>
                                <tr height="50px">
                                    <td>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </form>
                </div>
                <!--End widget-->
            </div> <!-- /.col -->

            <div class="col-sm-8">
                <!--Post Single-->
                <div class="postSingle">

                    <!--Post title-->
                    <div class="postTitle">
                        <h1>Tata Cara Mendaftar Akun Alumni</h1>
                        <div class="divider-small"></div>
                    </div>
                    <!--Post image-->
                    <div class="postMedia">
                        <img alt="" src="{{asset('web/img/blog/b1.png')}}">
                    </div>

                    <p>Syarat utama dari pengajuan akun alumni yaitu mahasiswa harus dipastikan telah wisuda atau lulus dari perkuliahan. Setelah dipastikan telah wisuda, barulah mahasiswa dapat mengajukan pembuatan Akun Alumni ini.</p>
                    <blockquote>Keuntungan memiliki Akun Alumni</blockquote>
                    <p>
                        1. Alumni dapat Login ke dalam website <br>
                        2. Alumni dapat mempunyai fasilitas melihat informasi yang dikhususkan untuk para fresh graduate <br>
                        3. Alumni dapat menambah/mengupload informasi seputar info yang dapat bermanfaat bagi alumni lain <br>
                        4. Alumni dapat melihat data alumni lainnya
                    </p>
                    <blockquote>Tata cara</blockquote>
                    <p>
                        1. Mahasiswa mengisi form pengajuan untuk membuat akun alumni. <br>
                        2. Setelah di submit, mahasiswa dapat menunggu Admin untuk menyetujui pengajuan tersebut. <br>
                        3. Apabila telah disetujui oleh admin, mahasiswa dapat login menggunakan email dan password yang telah didaftarkan pada pengajuan tadi. <br>
                        4. Pastikan pengisian form benar dan tidak adanya kesalahan. <br>
                    </p>

                </div>
                <!--End post single-->
            </div> <!-- /.col -->

        </div> <!-- /.row -->
    </div> <!-- /.container -->

</section>
<!--End blog single section-->
@endsection