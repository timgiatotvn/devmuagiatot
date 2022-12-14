@extends('clients::layouts.app')

@section('content')
    {{-- <section id="box-category-suggest">
        <div class="cs-head">
            <h2>TÌM GIÁ TỐT & KHUYẾN MÃI HOT</h2>
            <div class="line"></div>
        </div>
        <div class="cs-list">
            <ul>
                @foreach($data['link'] as $row)
                    <li>
                        <div class="cs-item">
                            <div class="cs-item-right">
                                <a href="{{ $row->url_title }}" title="{{ $row->title }}" target="_blank">
                                    <img src="{{ \App\Helpers\Helpers::renderThumb($row->thumbnail, 'link') }}"
                                         title="{{ $row->title }}">
                                </a>
                            </div>
                            <div class="cs-item-left">
                                <label>{{ $row->title }}</label>
                                <p>{{ \App\Helpers\Helpers::shortDesc($row->description, 42) }}</p>
                                <a href="{{ $row->url }}" title="{{ $row->url_title }}" target="_blank">
                                    {{ $row->url_title }}
                                </a>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section> --}}
    <section class="box-product">
        <div class="pr-head">
            <div class="row">
                <div class="col-8">
                    <label>TÌM KIẾM NHIỀU</label>
                </div>
            </div>
        </div>
        <div class="pr-content">
            <ul>
                @foreach($data['products'] as $row)
                    <li>
                        <div class="pr-item">
                            @if($row->type == "crawler")
                                <a href="{{ route('client.product.showSosanh', ['slug' => $row->slug.'-'.$row->id]) }}"
                                   title="{{ $row->title }}" rel="nofollow sponsored">
                                    <img src="{{ \App\Helpers\Helpers::renderThumb((!empty($row->thumbnail_cr) ? $row->thumbnail_cr : $row->thumbnail), 'list_product') }}"
                                         title="{{ $row->title }}">
                                </a>
                                <p class="price">{{ \App\Helpers\Helpers::formatPrice($row->price) }}</p>
                                <div class="name-sp">
                                    <a href="{{ route('client.product.showSosanh', ['slug' => $row->slug.'-'.$row->id]) }}"
                                       title="{{ $row->title }}" rel="nofollow sponsored">
                                        {{ $row->title }}
                                    </a>
                                </div>
                                <div class="count-location-buy">
                                    Có {{ $row->count_suggest }} nơi bán
                                </div>
                            @else
                                <a href="{{ route('client.product.show', ['slug' => $row->slug.'-'.$row->id]) }}"
                                   title="{{ $row->title }}" rel="nofollow sponsored">
                                    <img src="{{ \App\Helpers\Helpers::renderThumb($row->thumbnail, 'list_product') }}"
                                         title="{{ $row->title }}">
                                </a>
                                <p class="price">{{ \App\Helpers\Helpers::formatPrice($row->price) }}</p>
                                <div class="name-sp">
                                    <a href="{{ route('client.product.show', ['slug' => $row->slug.'-'.$row->id]) }}"
                                       title="{{ $row->title }}" rel="nofollow sponsored">
                                        {{ $row->title }}
                                    </a>
                                </div>
                                <div class="count-location-buy"></div>
                            @endif
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
    @foreach($data['cate'] as $cate)
        <section class="box-product">
            <div class="pr-head">
                <div class="row">
                    <div class="col-8">
                        <label>{{$cate['name']}}</label>
                    </div>
                    <div class="col-4 text-right show_all_product">
                        <a href="{{ route('client.category.index', ['slug' => $cate['slug']])}}"
                           title="Xem tất cả">Xem tất cả &raquo;
                        </a>
                    </div>
                </div>

            </div>
            <div class="pr-content">
                <ul>
                    @foreach($cate['data'] as $row)
                        <li>
                            <div class="pr-item">
                                @if($row->type == "crawler")
                                    <a href="{{ route('client.product.showSosanh', ['slug' => $row->slug.'-'.$row->id]) }}"
                                       title="{{ $row->title }}" rel="nofollow sponsored">
                                        <img src="{{ \App\Helpers\Helpers::renderThumb((!empty($row->thumbnail_cr) ? $row->thumbnail_cr : $row->thumbnail), 'list_product') }}"
                                             title="{{ $row->title }}">
                                    </a>
                                    <p class="price">{{ \App\Helpers\Helpers::formatPrice($row->price) }}</p>
                                    <div class="name-sp">
                                        <a href="{{ route('client.product.showSosanh', ['slug' => $row->slug.'-'.$row->id]) }}"
                                           title="{{ $row->title }}" rel="nofollow sponsored">
                                            {{ $row->title }}
                                        </a>
                                    </div>
                                    <div class="count-location-buy">
                                        Có {{ $row->count_suggest }} nơi bán
                                    </div>
                                @else
                                    <a href="{{ route('client.product.show', ['slug' => $row->slug.'-'.$row->id]) }}"
                                       title="{{ $row->title }}" rel="nofollow sponsored">
                                        <img src="{{ \App\Helpers\Helpers::renderThumb($row->thumbnail, 'list_product') }}"
                                             title="{{ $row->title }}">
                                    </a>
                                    <p class="price">{{ \App\Helpers\Helpers::formatPrice($row->price) }}</p>
                                    <div class="name-sp">
                                        <a href="{{ route('client.product.show', ['slug' => $row->slug.'-'.$row->id]) }}"
                                           title="{{ $row->title }}" rel="nofollow sponsored">
                                            {{ $row->title }}
                                        </a>
                                    </div>
                                    <div class="count-location-buy"></div>
                                @endif
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>
    @endforeach
    <?php
    $arr1 = [];
    $arr2 = [];
    $dem = 0;
    if (isset($data)) {
        foreach ($data['ads_home'] as $k => $row) {
            if ($dem < 2) {
                $arr1[] = $row;
            } else {
                $arr2[] = $row;
            }
            $dem++;
        }
    }
    ?>

    @if(!empty($arr1))
        <section>
            <div class="wrap-slide slidehome" style="display: none;">
                <div id="slideHome1" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach($arr1 as $k=>$row)
                            <li data-target="#carouselExampleIndicators" data-slide-to="{{ $k }}"
                                class="{{ !$k ? 'active' : '' }}"></li>
                        @endforeach
                    </ol>
                    <div class="carousel-inner">
                        @foreach($arr1 as $k => $row)
                            <div class="carousel-item {{ !$k ? 'active' : '' }}">
                                <a href="{{ $row->url }}" title="{{ $row->title }}">
                                    <img src="{{ \App\Helpers\Helpers::renderThumb($row->thumbnail, 'slide') }}"
                                         title="{{ $row->title }}">
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#slideHome1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#slideHome1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="wrap-ads">
                <ul>
                    @foreach($arr1 as $k=>$row)
                        <li>
                            <a href="{{ $row->url }}" title="{{ $row->title }}" target="_blank">
                                <img src="{{ \App\Helpers\Helpers::renderThumb($row->thumbnail, 'ads_home') }}"
                                     title="{{ $row->title }}" alt="{{ $row->title }}"/>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>
    @endif
    @if(!empty($arr2))
        <section>
            <div class="wrap-slide slidehome" style="display: none;">
                <div id="slideHome2" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach($arr2 as $k=>$row)
                            <li data-target="#carouselExampleIndicators" data-slide-to="{{ $k }}"
                                class="{{ !$k ? 'active' : '' }}"></li>
                        @endforeach
                    </ol>
                    <div class="carousel-inner">
                        @foreach($arr2 as $k => $row)
                            <div class="carousel-item {{ !$k ? 'active' : '' }}">
                                <a href="{{ $row->url }}" title="{{ $row->title }}">
                                    <img src="{{ \App\Helpers\Helpers::renderThumb($row->thumbnail, 'slide') }}"
                                         title="{{ $row->title }}">
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#slideHome2" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#slideHome2" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="wrap-ads">
                <ul>
                    @foreach($arr2 as $k=>$row)
                        <li>
                            <a href="{{ $row->url }}" title="{{ $row->title }}" target="_blank">
                                <img src="{{ \App\Helpers\Helpers::renderThumb($row->thumbnail, 'ads_home') }}"
                                     title="{{ $row->title }}" alt="{{ $row->title }}"/>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>
    @endif

@endsection

@section('javascript')
    <script type="text/javascript">
        $('#slideHome1').carousel({
            interval: 5000
        });
        $('#slideHome2').carousel({
            interval: 6000
        });
    </script>
@endsection


