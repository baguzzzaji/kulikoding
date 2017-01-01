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

                <div class="well">
                    <div class="row">
                      <h2 class="text-center category-name">Web Programming</h2>
                      @if($web_jobs->isEmpty())
                      <p class="lead no-job">No job available yet.</p>
                      @endif
                      <ul>
                          @foreach($web_jobs as $webjob)
                          <li class="job">
                            <p class="job-header">{{$webjob->companyname}}</p> <a href="#"><p class="job-title">{{$webjob->title}}</p></a>
                          </li>
                          @endforeach
                      </ul>
                      <div class="col-md-4 col-md-offset-4 text-center">
                          <a href="/web" class="btn btn-info btn-raised text-center">More ...</a>
                      </div>
                    </div>
                </div>

                <div class="well">
                    <div class="row">
                      <h2 class="text-center category-name">Mobile Programming</h2>
                      @if($mobile_jobs->isEmpty())
                      <p class="lead no-job">No job available yet.</p>
                      @endif
                      <ul>
                          @foreach($mobile_jobs as $mobjob)
                          <li class="job">
                            <p class="job-header">{{$mobjob->companyname}}</p> <a href="#"><p class="job-title">{{$mobjob->title}}</p></a>
                          </li>
                          @endforeach
                      </ul>
                      <div class="col-md-4 col-md-offset-4 text-center">
                          <a href="/mobile" class="btn btn-info btn-raised text-center">More ...</a>
                      </div>
                    </div>
                </div>

                <div class="well">
                    <div class="row">
                      <h2 class="text-center category-name">Desktop Programming</h2>
                      @if($desktop_jobs->isEmpty())
                      <p class="lead no-job">No job available yet.</p>
                      @endif
                      <ul>
                          @foreach($desktop_jobs as $djob)
                          <li class="job">
                            <p class="job-header">{{$djob->companyname}}</p> <a href="#"><p class="job-title">{{$djob->title}}</p></a>
                          </li>
                          @endforeach
                      </ul>
                      <div class="col-md-4 col-md-offset-4 text-center">
                          <a href="/desktop" class="btn btn-info btn-raised text-center">More ...</a>
                      </div>
                    </div>
                </div>

                <div class="well">
                    <div class="row">
                      <h2 class="text-center category-name">Network Programming</h2>
                      @if($network_jobs->isEmpty())
                      <p class="lead no-job">No job available yet.</p>
                      @endif
                      <ul>
                          @foreach($network_jobs as $netjob)
                          <li class="job">
                            <p class="job-header">{{$netjob->companyname}}</p> <a href="#"><p class="job-title">{{$netjob->title}}</p></a>
                          </li>
                          @endforeach
                      </ul>
                      <div class="col-md-4 col-md-offset-4 text-center">
                          <a href="/network" class="btn btn-info btn-raised text-center">More ...</a>
                      </div>
                    </div>
                </div>

                <div class="well">
                    <div class="row">
                      <h2 class="text-center category-name">System Programming</h2>
                      @if($system_jobs->isEmpty())
                      <p class="lead no-job">No job available yet.</p>
                      @endif
                      <ul>
                          @foreach($system_jobs as $sysjob)
                          <li class="job">
                            <p class="job-header">{{$sysjob->companyname}}</p> <a href="#"><p class="job-title">{{$sysjob->title}}</p></a>
                          </li>
                          @endforeach
                      </ul>
                      <div class="col-md-4 col-md-offset-4 text-center">
                          <a href="system" class="btn btn-info btn-raised text-center">More ...</a>
                      </div>
                    </div>
                </div>
        </div>
    </div>

@endsection
