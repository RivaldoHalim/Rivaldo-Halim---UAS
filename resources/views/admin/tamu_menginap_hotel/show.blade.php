@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">tamu_menginap_hotel {{ $tamu_menginap_hotel->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/tamu_menginap_hotel') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/tamu_menginap_hotel/' . $tamu_menginap_hotel->id . '/edit') }}" title="Edit tamu_menginap_hotel"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/tamu_menginap_hotel' . '/' . $tamu_menginap_hotel->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete tamu_menginap_hotel" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $tamu_menginap_hotel->id }}</td>
                                    </tr>
                                    <tr><th> Deposit Tamu </th><td> {{ $tamu_menginap_hotel->deposit_tamu }} </td></tr><tr><th> Tanggal Menginap </th><td> {{ $tamu_menginap_hotel->tanggal_menginap }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
