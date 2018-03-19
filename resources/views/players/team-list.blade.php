@extends('layout.default')
@section('title', 'Players of Team')
@section('pagecss')

@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <li><a href="/"><i class="fas fa-home"></i></a></li>
                <li class="active">{{ucfirst($team->teamname)}}</li>
                <li class="active">Squad</li>
            </ol>
        </div>
    </div>
    <div class="row">
    @if(!empty($players))
    @foreach($players AS $player)
    <div class="col-xs-12 col-sm-6 col-lg-4">
        <div class="panel panel-default">							
            <div class="panel-title text-center">
                <h3 class="panel-heading">{{ucfirst($player->firstName)}} {{ucfirst($player->lastName)}}</h3>
            </div>
            <div class="panel-body text-center">
                <img src="{{$player->profileimage}}" class="img-thumbnail img-responsive">
            </div>

        </div>
        <div class="space"></div>
    </div>
    @endforeach
    @else
    <div class="col-md-12 col-sm-12 col-lg-12 text-center">
        <div class="alert alert-warning">
            <h3><i class="fas fa-exclamation-circle"></i> Sorry we have not any players for this teams yet! Please check back later.</h3>
        </div>
    </div>
    @endif
    </div>
</div>
@endsection
@section('pageScript')

@endsection