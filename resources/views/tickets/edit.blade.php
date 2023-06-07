@extends('layouts.app')
@section('content')
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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-5">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('tickets.update',$ticket->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <label>Nomor Ticket</label>
                                    <input type="text" name="nomor_tiket" class="form-control" value="{{$ticket->nomor_tiket}}" readonly>
                                </div>
                                <div class="col-12 col-md-12">
                                    <label>Nama</label>
                                    <input type="text" name="nama" class="form-control" value="{{$ticket->nama}}" readonly>
                                </div>
                                <div class="col-12 col-md-12">
                                    <label>Usia</label>
                                    <input type="text" name="usia" class="form-control" value="{{$ticket->usia}}" readonly>
                                </div>
                                <div class="col-12 col-md-12">
                                    <label>Jenis Kelamin</label>
                                    <input type="text" name="jenis_kelamin" class="form-control" value="{{$ticket->jenis_kelamin}}" readonly>
                                </div>
                                <div class="col-12 col-md-12">
                                    <label>Nomor Bangku</label>
                                    <input type="text" name="nomor_bangku" class="form-control" value="{{$ticket->nomor_bangku}}" readonly>
                                </div>
                                <div class="col-12 col-md-12">
                                    <label>Tanggal Checkin</label>
                                    <input type="text" name="tanggal_checkin" class="form-control" value="{{$ticket->tanggal_checkin}}" readonly>
                                </div>
                                <div class="col-12 col-md-12">
                                    <label>Status</label>
                                    <input type="text" name="tanggal_checkin" class="form-control" value="{{$ticket->status}}">
                                </div>

                                <div class="col-12 col-md-12">
                                    <button class="btn btn-primary mt-3" type="submit">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection