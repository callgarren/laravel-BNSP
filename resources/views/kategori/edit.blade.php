@extends('layouts.global')

@section('content') 
            <div class="card mt-5">
                <div class="card-body">
                    <br/>
                    <br/>

                    <h3>Edit Kategori</h3>
 
                    <form method="post" action="/kategori/update/{{ $kategori->id }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
 
                        <div class="form-group">
                            <label>Kategori</label>
                            <input type="text" name="ket_kategori" class="form-control" placeholder="Kategori" value="{{ $kategori->ket_kategori }}">
 
                            @if($errors->has('ket_kategori'))
                                <div class="text-danger">
                                    {{ $errors->first('ket_kategori')}}
                                </div>
                            @endif
 
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Save">
                            <a href="/kategori" class="btn btn-primary">Back</a>
                        </div>
 
                    </form>
 
                </div>
            </div>
@endsection