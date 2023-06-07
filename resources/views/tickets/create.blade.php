@extends('layouts.app')
@section('content')

<div class="container">
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <h1 class="text-center">Pemesanan Ticket</h1>
        <div class="row justify-content-center">
            <div class="col-12 col-md-5 col-sm-12">
                <div class="card">
    
                    <div class="card-body">
                       <form action="{{route('tickets.store')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-md-12 mb-2">
                                    <label>Nomor Ticket</label>
                                    <input type="text" name="nomor_tiket" class="form-control pl-2" placeholder="No Tiket">
                                </div>
                                <div class="col-12 col-md-12 mb-2">
                                    <label>Nama</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Nama">
                                </div>
                                <div class="col-12 col-md-12 mb-2">
                                    <label>Usia</label>
                                    <input type="text" name="usia" class="form-control" placeholder="Usia">
                                </div>
                                <div class="col-12 col-md-12 mb-2">
                                    <label>Jenis Kelamin</label>
                                    <select class="form-select" name="jenis_kelamin">
                                        <option selected>- PILIH -</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-12 mb-2">
                                    <label>Nomor Bangku</label>
                                    <input type="text" name="nomor_bangku" class="form-control" placeholder="Nomor Bangku">
                                </div>
                                <div class="col-12 col-md-12 mb-2">
                                    <label>Tanggal Checkin</label>
                                    <input type="text" name="tanggal_checkin" class="form-control" placeholder="Tanggal Checkin" id="datepicker">
                                </div>
                                <div class="col-12 col-md-12">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection