@extends('layouts.global')

@section('content') 
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="card mt-5">
                        <div class="card-body">

							<h3>Create Aspirasi</h3>
                          
                            <br/>
                            <form method="post" action="/aspirasi/store">
                                {{ csrf_field() }}
 
                                <div class="form-group">
                                    <label for="nik">NIK</label>
                                    <input class="form-control" type="text" name="nik" value="{{ old('nik') }}">
                                </div>
                                <div class="form-group">
                                    <label for="lokasi">Lokasi</label>
                                    <input class="form-control" type="text" name="lokasi" value="{{ old('lokasi') }}">
                                </div>
                                <div class="form-group">
                                    <label for="kategori">Id Kategori</label>
                                    <select name="kategori_id" class="form-control">
                                        @foreach ($aspirasi as $kategori)
                                        <option value="{{ $kategori->id }}"> {{ $kategori->ket_kategori }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="keterangan">Keterangan</label>
                                    <textarea class="form-control" name="ket" value="{{ old('keterangan') }}"></textarea>
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" value="Proses">
									<a href="/aspirasi" class="btn btn-primary">Back</a>
                                </div>
                            </form>
 
                        </div>
                    </div>
                </div>
            </div>
   
@endsection