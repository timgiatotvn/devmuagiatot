@extends('clients::layouts.new')

@section('content')
    <section style="padding:0 10px" id="box-new-list">
        <div class="pc-head">
            <div class="row">
                <div class="col-12">
                    <span>{{ $data['category']->title }}</span>
                </div>
            </div>
        </div>
        @if(!empty($data['category']->description))
            <div class="ctct mb-4">
                {!! $data['category']->description !!}
            </div>
        @endif
        <div class="nrl-content">
            <ul>
                @foreach($data['list'] as $row)
                    <li>
                        <div class="pr-item">
                            <a href="{{ route('client.post.show', ['slug' => $row->slug]) }}"
                               title="{{ $row->title }}">
                                <img src="{{ \App\Helpers\Helpers::renderThumb($row->thumbnail, 'list_new_index') }}"
                                     title="{{ $row->title }}">
                            </a>
                            <div class="name-title">
                                <a href="{{ route('client.post.show', ['slug' => $row->slug]) }}"
                                   title="{{ $row->title }}">
                                    {{ $row->title }}
                                </a>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        {{ $data['list']->links('admins::elements.extend.pagination') }}
    </section>
@endsection

@include('clients::elements.extend.replaceLinkJs')