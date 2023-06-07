@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-5">
                <div class="card">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-12 col-md-12 mb-3">
                                <label>Nomor Ticket</label>
                                <input type="text" name="nomor_tiket" class="form-control" value="{{$ticket->nomor_tiket}}" readonly>
                            </div>
                            <div class="col-12 col-md-12 mb-3">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" value="{{$ticket->nama}}" readonly>
                            </div>
                            <div class="col-12 col-md-12 mb-3">
                                <label>Usia</label>
                                <input type="text" name="usia" class="form-control" value="{{$ticket->usia}}" readonly>
                            </div>
                            <div class="col-12 col-md-12 mb-3">
                                <label>Jenis Kelamin</label>
                                <input type="text" name="jenis_kelamin" class="form-control" value="{{$ticket->jenis_kelamin}}" readonly>
                            </div>
                            <div class="col-12 col-md-12 mb-3">
                                <label>Nomor Bangku</label>
                                <input type="text" name="nomor_bangku" class="form-control" value="{{$ticket->nomor_bangku}}" readonly>
                            </div>

                            <div class="col-12 col-md-12 mb-3">
                                <label>Tanggal Checkin</label>
                                <input type="text" name="tanggal_checkin" class="form-control" value="{{$ticket->tanggal_checkin}}" readonly>
                            </div>
                            <div class="col-12 col-md-12 mb-3">
                                <a class="btn btn-secondary btn-xs" href="{{route('tickets.index')}}">OK</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection