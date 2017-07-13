@extends('layouts.app')

@section('content')

<div class="container" ng-app="app" ng-controller="Controller">

  <div class="panel panel-default">
    <div class="panel-heading clearfix">
      <h3 class="panel-title pull-left">[[ idea.title ]]</h3>
      <form method="post" action="[[ idea.action ]]">
        {{ csrf_field() }}
        {{ method_field('DELETE')}}
        <button class="btn btn-danger btn-xs pull-right" type="submit">Delete</button>
      </form>
      <button class="btn btn-warning btn-xs pull-right" style="margin-right: 10px;" XXXng-click="edit([[ idea.id ]])"><a href="/ideas/[[ idea.id ]]/edit">Edit</a></button>
    </div>
    <div class="panel-body">
      [[ idea.content ]]
      <br />
    </div>
  </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>

<script>
  function Controller($scope, $location) {

    $scope.idea = {!! $idea !!};

  }
  angular
    .module('app', [], function($interpolateProvider) {
      $interpolateProvider.startSymbol('[[');
      $interpolateProvider.endSymbol(']]');
    })
    .controller('Controller', Controller);
</script>

@endsection