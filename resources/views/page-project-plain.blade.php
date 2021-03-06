{{--
  Template Name: Project Plain Page
--}}

@extends('layouts.app')

@section('content')
  <div class="pcc-project">
    @include('partials.project-header')
    <div class="project-content">
      @include('partials.project-menu')
      @include('partials.project-breadcrumbs')
      <h1 class="research">{!! $post->post_title !!}</h1>
      <section>
        <p>@php the_content() @endphp</p>
      </section>
    </div>
  </div>
@endsection
