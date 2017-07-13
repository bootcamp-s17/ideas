@extends('layouts.app')

@section('content')

<div class="container" ng-app="app" ng-controller="Controller">

[[ name ]]

</div>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>

<script>
  function Controller($scope) {

    $scope.name = "Janine";

  }
  angular
    .module('app', [], function($interpolateProvider) {
      $interpolateProvider.startSymbol('[[');
      $interpolateProvider.endSymbol(']]');
    })
    .controller('Controller', Controller);

</script>

@endsection