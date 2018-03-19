@extends('layout.default')
@section('title', 'World Football')
@section('pagecss')

@endsection
@section('content')
<div class="container">
    <div class="row">
    @if(!empty($teams))
    @foreach($teams AS $team)
    <div class="col-xs-12 col-sm-6 col-lg-4">
        <div class="box">							
            <div class="icon">
                <div class="image"><img width="128" height="128" src="{{$team->logopath}}" class="img-rounded"> </div>
                <div class="info">
                    <h3 class="title">{{ucfirst($team->teamname)}}</h3>
                    <div class="more">
                        <a href="/players/{{$team->id}}" title="View Players">
                            Players List <i class="far fa-arrow-alt-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="space"></div>
        </div> 
    </div>
    @endforeach
    @else
    <div class="col-md-12 col-sm-12 col-lg-12 text-center">
        <div class="alert alert-warning">
            <h3><i class="fas fa-exclamation-circle"></i> Sorry we have not added any Teams yet! Please check back later.</h3>
        </div>
    </div>
    @endif
    </div>
</div>
@endsection
@section('pageScript')

@endsection