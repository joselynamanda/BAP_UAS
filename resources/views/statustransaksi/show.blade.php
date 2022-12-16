@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
        

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">statustransaksi {{ $statustransaksi->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/statustransaksi') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/statustransaksi/' . $statustransaksi->id . '/edit') }}" title="Edit statustransaksi"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/statustransaksi' . '/' . $statustransaksi->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete statustransaksi" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $statustransaksi->id }}</td>
                                    </tr>
                                    <tr><th> Namastatus </th><td> {{ $statustransaksi->namastatus }} </td></tr><tr><th> Idtransaksi </th><td> {{ $statustransaksi->idtransaksi }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
