@extends('master')
@section('title', 'Mobile Programming Job | Kuli Koding')

@section('content')

    <div class="container">
        <div class="row banner">
            <div class="col-md-12">

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
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
