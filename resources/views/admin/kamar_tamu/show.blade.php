@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">kamar_tamu {{ $kamar_tamu->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/kamar_tamu') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/kamar_tamu/' . $kamar_tamu->id . '/edit') }}" title="Edit kamar_tamu"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/kamar_tamu' . '/' . $kamar_tamu->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete kamar_tamu" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $kamar_tamu->id }}</td>
                                    </tr>
                                    <tr><th> No Kamar Tamu </th><td> {{ $kamar_tamu->no_kamar_tamu }} </td></tr><tr><th> Jenis Kamar </th><td> {{ $kamar_tamu->jenis_kamar }} </td></tr><tr><th> Harga Kamar </th><td> {{ $kamar_tamu->harga_kamar }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
