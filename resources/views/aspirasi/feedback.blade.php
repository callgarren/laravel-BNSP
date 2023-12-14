@extends('layouts.global')

@section('content') 
            <div class="card mt-5">
                <div class="card-body">
                    <br/>
                    <br/>

                    <h3>Edit Aspirasi</h3>
 
                <form method="post" action="/aspirasi/feedupdate/{{ $aspirasi->id }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label>Feedback</label>
                            <select name="feedback" class="form-control" value="{{ $aspirasi->feedback }}">
                                <option value="puas">Puas</option>
                                <option value="tidakpuas">Tidak Puas</option>
                                </select>
                        </div>

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