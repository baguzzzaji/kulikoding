@extends('master')
@section('title', 'Home | Kuli Koding')

@section('content')

    <div class="container">
        <div class="row banner">

            <div class="col-md-12">

                <div class="jumbotron">
                    <h1 class="text-center">Kuli Koding</h1>

                    <h2 class="text-center">Mempermudah programmer mencari pekerjaan dan membantu perusahaan mencari calon pekerja.</h2>

                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                        <form class="" action="index.html" method="post">
                            <div class="form-group">
                              <label class="control-label" for="addon1">Contoh kata kunci: 'django', 'laravel', 'php'</label>
                              <div class="input-group">
                                <input type="text" id="addon1" class="form-control">
                                <span class="input-group-btn">
                                    <button class="btn btn-info btn-raised" type="button">Cari</button>
                                </span>
                              </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

@endsection
