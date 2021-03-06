@extends('master')
@section('title', 'Web Programming Job | Kuli Koding')

@section('content')

    <div class="container">
        <div class="row banner">
            <div class="col-md-12">

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

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
