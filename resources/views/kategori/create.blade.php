@extends('layouts.global')

@section('content') 
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="card mt-5">
                        <div class="card-body">

							<h3>Create Kategori</h3>
                          
                            <br/>
                            <form method="post" action="/kategori/store">
                                {{ csrf_field() }}
 
                                <div class="form-group">
                                    <label for="kategori">Kategori</label>
                                    <input class="form-control" type="text" name="ket_kategori" value="{{ old('ket_kategori') }}">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" value="Proses">
									<a href="/kategori" class="btn btn-primary">Back</a>
                                </div>
                            </form>
 
                        </div>
                    </div>
                </div>
            </div>
   
@endsection