@extends('master')
@section('title', 'Submit New Job | Kuli Koding')

@section('content')
<div class="container col-md-8 col-md-offset-2 konten">
    <div class="well well bs-component">
      @foreach ($errors->all() as $error)
        <p class="alert alert-danger">{{ $error }}</p>
      @endforeach
      @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
      @endif
        <form class="form-horizontal" method="post" >
          <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            <fieldset>
                <legend class="text-center">Submit a new job</legend>
                <div class="form-group">
                    <label for="title" class="col-lg-2 control-label">Job Title</label>
                    <div class="col-lg-10">
                        <input name="title" type="text" class="form-control" id="title" placeholder='"Laravel Developer", "PHP Developer", "Android Developer", atau "Fullstack Developer"'>
                    </div>
                </div>
                <div class="form-group">
                    <label for="category" class="col-lg-2 control-label">Category</label>
                    <div class="col-lg-10">
                        <select class="form-control" name="category">
                            @foreach ($categories as $cat)
                                <option value="{{ $cat->id }}">{{$cat->category}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="office" class="col-lg-2 control-label">Office Location</label>
                    <div class="col-lg-10">
                        <input type="text" name="office" placeholder="Bandung" class="form-control">
                        <span class="help-block">Cukup Tuliskan Nama Kota.</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="col-lg-2 control-label">Job Description</label>
                    <div class="col-lg-10">
                        <!--<div name="description" rows="8" cols="80" id="jobdesc"></div>-->
                        <textarea name="description" class="form-control" rows="8" cols="80"></textarea>
                        <span class="help-block">Jelaskan apa saja yang dibutuhkan dari calon pelamar. Tulis dengan format markdown</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="howtoapply" class="col-lg-2 control-label">How to Apply</label>
                    <div class="col-lg-10">
                        <textarea name="howtoapply" rows="8" cols="80" class="form-control"></textarea>
                        <span class="help-block">Penjelasan singkat bagaimana calon pelamar menghubungi anda. Tulis dengan format markdown</span>
                    </div>
                </div>
            </fieldset>
            <br><br><br>
            <fieldset>
                <legend class="text-center">About your company</legend>

                <div class="form-group">
                    <label for="companyname" class="col-lg-2 control-label">Company Name</label>
                    <div class="col-lg-10">
                        <input name="companyname" type="text" class="form-control" id="title" placeholder='My Company'>
                        <span class="help-block">Nama lengkap perusahaan.</span>
                    </div>

                </div>
                <div class="form-group">
                    <label for="companyurl" class="col-lg-2 control-label">Company URL</label>
                    <div class="col-lg-10">
                        <input name="companyurl" type="url" class="form-control" id="title" placeholder='https://mycompany.com/jobs'>
                        <span class="help-block">Website resmi perusahaan.</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="companyemail" class="col-lg-2 control-label">Company Email</label>
                    <div class="col-lg-10">
                        <input name="companyemail" type="email" class="form-control" id="title" placeholder='hr@mycompany.com'>
                        <span class="help-block">Email perusahaan untuk publikasi lowongan ini.</span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>

@endsection
