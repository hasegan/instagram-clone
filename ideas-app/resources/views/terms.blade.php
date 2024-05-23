@extends('layout.layout')

@section('title', 'Terms')

@section('content')
    <div class="row">
        <div class="col-3">
            @include('shared.left-sidebar')
        </div>
        <div class="col-6">
            <h1>{{ trans('ideas.terms') }}</h1>
            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam venenatis, turpis sed tempus tristique,
                massa arcu varius lacus, ac gravida mauris turpis eget metus. Ut imperdiet risus non lacus blandit, et
                eleifend quam maximus. Fusce lacinia venenatis urna in vehicula. Vivamus vehicula purus fermentum, porttitor
                est in, vulputate libero. Sed suscipit mauris a cursus tristique. Integer leo arcu, accumsan vel ligula et,
                venenatis pellentesque eros. Donec quis vestibulum risus. Curabitur bibendum nunc et metus gravida
                condimentum. Nam sit amet risus odio. Vestibulum maximus ligula ac erat tincidunt tempor ac quis purus. Cras
                sollicitudin nisl non euismod malesuada. Duis massa nulla, convallis non nisl vel, sollicitudin commodo
                nunc. Proin imperdiet tempus cursus. Suspendisse vitae pharetra nulla. Vestibulum at ornare nisi. Nam
                placerat sit amet arcu a volutpat.</div>
        </div>
        <div class="col-3">
            @include('shared.search-bar')
            @include('shared.follow-box')
        </div>
    </div>
@endsection
