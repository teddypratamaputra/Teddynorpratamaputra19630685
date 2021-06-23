@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Data Biaya</div>
                <div class="card-body">
                    <form action="{{ route('update.biaya', $biaya->id_biaya) }}" method="POST" class="form-item">
                        @csrf
                        <div class="form-group">
                            <label>Jenis Kendaraan</label>
                            <input type="text" value="{{ is_null($biaya) ? '' : $biaya->jenis }}" name="jenis" class="form-control col-md-9" placeholder="Masukkan Jenis">
                        </div>

                        <div class="form-group">
                            <label>Biaya</label>
                            <input type="number" value="{{ is_null($biaya) ? '' : $biaya->biaya }}" name="biaya" class="form-control col-md-9" placeholder="Masukkan Biaya">
                        </div>

                        <td>
                            <button class="btn btn-sm btn-primary" type="submit">SAVE</button>
                            <a href="{{ route('biaya') }}" class="btn btn-sm btn-danger">CANCEL</a>
                        </td><br><br>
                        </tr>
                
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection