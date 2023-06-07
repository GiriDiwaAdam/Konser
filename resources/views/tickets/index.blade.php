@extends('layouts.app')

@section('content')
<div class="container">
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <div class="card">
        <div class="card-body">
            <table class="table table-stripped table-bordered" id="example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No Tiket</th>
                        <th>Nama</th>
                        <th>Usia</th>
                        <th>Jenis kelamin</th>
                        <th>Nomor Bangku</th>
                        <th>Tanggal Checkin</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                @foreach ($tickets as $ticket)
                <tbody>
                    <td>{{ ++$i }}</td>
                    <td>{{ $ticket->nomor_tiket }}</td>
                    <td>{{ $ticket->nama }}</td>
                    <td>{{ $ticket->usia }}</td>
                    <td>{{ $ticket->jenis_kelamin }}</td>
                    <td>{{ $ticket->nomor_bangku }}</td>
                    <td>{{ $ticket->tanggal_checkin }}</td>
                    <td>{{ $ticket->status }}</td>
                    <td>
                                        <form action="{{ route('tickets.destroy',$ticket->id) }}" method="POST">
                                         <a class="btn btn-info" href="{{ route('tickets.show',$ticket->id) }}">Show</a>
                                        <a class="btn btn-primary" href="{{ route('tickets.edit',$ticket->id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                </td>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
    <div class="row justify-content-center">     
    
        </div>
    </div>
</div>
    
@endsection