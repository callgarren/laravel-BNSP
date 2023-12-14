@extends('layouts.global')

@section('content') 
            <div class="card mt-5">
                <div class="card-header text-center">
                    Kategori
                </div>
                <div class="card-body">
                @if(auth::user())
                <a href="/kategori/create" class="btn btn-primary">Input Kategori Baru</a>
                @endif
                    <br/>
                    <br/>
                    <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>KATEGORI</th>
                                <th>Stts</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kategori as $p)
                            <tr>
                                <td>{{ $p->ket_kategori }}</td>
                                <td>@if(auth::user())
                                    <a href="/kategori/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/kategori/delete/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                                    @else
                                    Anda Bukan Admin
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
</div>
                </div>
            </div>
@endsection