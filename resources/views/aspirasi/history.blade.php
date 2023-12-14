@extends('layouts.global')

@section('content') 
            <div class="card mt-5">
                <div class="card-header text-center">
                    Pengaduan
                </div>
                <div class="card-body">
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
                                <th> Waktu Kejadian </th>
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
                                <td>{{ $p->aspirasi->updated_at}}</td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
</div>
                </div>
            </div>
@endsection