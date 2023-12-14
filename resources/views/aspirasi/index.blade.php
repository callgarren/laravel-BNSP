@extends('layouts.global')

@section('content') 
            <div class="card mt-5">
                <div class="card-header text-center">
                    Pengaduan
                </div>
                <div class="card-body">
                <a href="/aspirasi" class="btn btn-danger"> << Back</a>
                <a href="/aspirasi/create" class="btn btn-primary">Input Aspirasi Baru</a>
                    <br/>
                    <br/>
                    <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>NIK</th>
                                <th>Lokasi</th>
                                <th>Keterangan</th>
                                <th>Kategori</th>
                                <th> Status </th>
                                <th> Feedback </th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($aspirasi as $p)
                            <tr>
                                <td>{{ $p->nik }}</td>
                                <td>{{ $p->lokasi }}</td>
                                <td>{{ $p->ket }}</td>
                                <td>{{ $p->kategori->ket_kategori}}</td>
                                <td>{{ $p->aspirasi->status }}</td>
                                <td>{{ $p->aspirasi->feedback }}
                                <td>@if(auth::user())
                                        
                                        @else
                                @if($p->aspirasi->status == 'selesai')
                                        <a href="aspirasi/feedback/{{$p->id}}" class="btn btn-primary">Berikan Feedback</a>
                                        @else
                                            Dalam Proses
                                        @endif
                                        @endif
                                    @if(auth::user())
                                        
                                        <a href="aspirasi/edit/{{$p->id}}" class="btn btn-primary">Verifikasi Status</a>
                                    @endif
                                    </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
</div>
                    <br>

                    @if(auth::user())
                        
                    @else
                    <form method="POST" action="/aspirasi/nik">
                    @csrf
                    <div class="form-group">
                        <label for="lokasi">Cari Berdasarkan NIK Anda</label>
                        <input class="form-control" type="text" name="nik" value="{{ old('lokasi') }}">
                        <input type="submit" class="btn btn-primary btn-sm">
                                </div>
                        </form>
                    @endif
                    @if(auth::user())
                    <h1> Search By Filter </h1>
                    <form method="POST" action="/aspirasi">
                    @csrf
                    <div class="form-group">
                                <select name="kategori" class="form-control">
                                @foreach ($kategori as $kat)
                                <option value="{{ $kat->id }}">{{ $kat->ket_kategori }}</option>
                                    @endforeach
                                    </select>
                                    <input type="submit" class="btn btn-success form-control" value="Search">
                            </form>
                            </div>
                    <form method="POST" action="/aspirasi/nik">
                    @csrf
                    <div class="form-group" class="form-control">
                            <select name="nik">
                            @foreach($aspirasi as $p)
                            <option value="{{ $p->nik }}" @if(isset($nik)) @if($nik == $p->nik) selected @endif @endif>{{ $p->nik }}</option>
                            @endforeach
                            </select>
                            <input type="submit" class="btn btn-primary btn-sm">
                        </div>
                        </form>

                            <form action="/aspirasi/tanggal" method="post">
                            @csrf
                            <div class="form-group">
                            <input type="date" class="form-control" name="tanggal"><input type="submit" class="btn btn-primary btn-sm">
                        </div></form>
                            
                        
                            @endif
                </div>
            </div>
@endsection