@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Lihat Data Supplaier')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Supplaier</a></li>
        <li class="active">Lihat Supplaier</li>
    </ol>
</section>
<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Supplaier</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                <h1>Supplaier</h1>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No. </th> <th>Nama</th><th>Alamat</th><th>Telp</th><th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $supplaier->supplaier_id }}</td>
                                <td> {{ $supplaier->nama }} </td>
                                <td> {{ $supplaier->alamat }} </td>
                                <td> {{ $supplaier->telp }} </td>
                                <td> {{ $supplaier->status }} </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection
