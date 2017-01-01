@extends('master')
@section('title', 'System Programming Job | Kuli Koding')

@section('content')

    <div class="container">
        <div class="row banner">
            <div class="col-md-12">

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
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
