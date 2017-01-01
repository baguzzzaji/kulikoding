@extends('master')
@section('title', 'Network Programming Job | Kuli Koding')

@section('content')

    <div class="container">
        <div class="row banner">
            <div class="col-md-12">

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
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
