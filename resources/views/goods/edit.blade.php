@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('layouts.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Ubah Data Barang</div>
                    <div class="card-body">
                        <a href="{{ route('goods.index') }}" title="Back">
                            <button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                                Kembali
                            </button>
                        </a>
                        <br/>
                        <br/>

                        <form method="POST" action="{{ route('goods.update', $good->id) }}" accept-charset="UTF-8"
                              class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('goods.form', ['formMode' => 'edit'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
