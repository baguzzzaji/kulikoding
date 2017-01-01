@extends('master')
@section('title', 'Desktop Programming Job | Kuli Koding')

@section('content')

    <div class="container">
        <div class="row banner">
            <div class="col-md-12">

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
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
