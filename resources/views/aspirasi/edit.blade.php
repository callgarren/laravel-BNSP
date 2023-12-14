@extends('layouts.global')

@section('content') 
            <div class="card mt-5">
                <div class="card-body">
                    <br/>
                    <br/>

                    <h3>Edit Aspirasi</h3>
 
                <form method="post" action="/aspirasi/update/{{ $aspirasi->id }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
 
                        <div class="form-group">
                            <label>NIK</label>
                            <input type="text" name="nik" class="form-control" placeholder="Name" value="{{ $aspirasi->nik }}" readonly>
 
                            @if($errors->has('nik'))
                                <div class="text-danger">
                                    {{ $errors->first('nik')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Lokasi</label>
                            <input type="text" name="lokasi" class="form-control" value="{{ $aspirasi->lokasi }}" readonly>
 
                             @if($errors->has('lokasi'))
                                <div class="text-danger">
                                    {{ $errors->first('lokasi')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Keterangan</label>
                            <input type="text" name="ket" class="form-control" value="{{ $aspirasi->ket }}" readonly>
 </textarea>
                            @if($errors->has('ket'))
                                <div class="text-danger">
                                    {{ $errors->first('ket')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Kategori</label>
                            <select name="status" class="form-control" readonly>
                            
                            <option value="{{$aspirasi->kategori_id}}">{{$aspirasi->kategori->ket_kategori}}</option>
                            
                             </select>
                                
                        </div>
                        @if(auth::user())
                        <div class="form-group">
                            <label>status</label>
                            <select name="status" class="form-control" value="{{ $aspirasi->status }}">
                                <option value="menunggu">Menunggu</option>
                                <option value="proses">Proses</option>
                                <option value="selesai">Selesai</option>
                                </select>
                        </div>
                        @else
                        @endif
                            <br>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Save">
                            <a href="/aspirasi" class="btn btn-primary">Back</a>
                        </div>
 
                    </form>
                    
 </div>
                </div>
            </div>
@endsection