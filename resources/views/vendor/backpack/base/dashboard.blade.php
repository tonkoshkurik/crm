@extends('backpack::layout')

@section('header')
    <section class="content-header">
      <h1>
        {{ trans('backpack::base.dashboard') }}<small>{{ trans('backpack::base.first_page_you_see') }}</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ backpack_url() }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">{{ trans('backpack::base.dashboard') }}</li>
      </ol>
    </section>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <div class="box-title">{{ 'Trello Dashboard test'  }}</div>
                </div>

                <div class="box-body">
{{--                    <blockquote class="trello-board-compact">--}}
{{--                        <a href="https://trello.com/b/2u7GRP5K/xelon-vdc">Trello Board</a>--}}
{{--                    </blockquote>--}}
                </div>
            </div>
        </div>
    </div>
@endsection
@push('after_scripts')
<script src="https://p.trellocdn.com/embed.min.js"></script>
<script>
    window.TrelloBoards.create('2u7GRP5K', document.querySelector('.box-body') );
</script>
@endpush