@extends("layouts.master")

@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header d-flex justify-content-between">
        <h1>Artikel</h1>
        <a href="{{ route('article.create') }}" class="btn btn-primary">
            Tambah Artikel
        </a>
    </div>
    <div class="section-body">
        <div class="row">
            @foreach ($articles as $article)
                <div class="col-12 col-md-4 col-lg-4">
                    <article class="article article-style-c">
                        <div class="article-header">
                            <div
                                class="article-image"
                                data-background="{{ asset('articles/'.$article->banner) }}"
                            ></div>
                        </div>
                        <div class="article-details">
                            <div class="article-category">
                                @if ($article->for == "SD")
                                    <span class="badge bg-danger text-white">SD</span>
                                @elseif ($article->for == "SMP")
                                    <span class="badge bg-primary text-white">SMP</span>
                                @elseif ($article->for == "SMA")
                                    <span class="badge bg-secondary text-white">SMA</span>
                                @else
                                    <span class="badge bg-warning text-white">S1</span>
                                @endif
                                <div class="bullet"></div>
                                <a href="#">{{ $article['created_at']->diffForHumans() }}</a>
                            </div>
                            <div class="article-title">
                                <h2>
                                    <a href="{{ route('article.show', ['article' => $article["slug"]]) }}">
                                        {{ $article["title"] }}
                                    </a>
                                </h2>
                            </div>
                            {{-- <p>
                                {!! $article["content"] !!}
                            </p> --}}
                            <div class="article-user d-flex align-items-center">
                                <img
                                    alt="image"
                                    src="{{ asset('template/dist/assets/img/avatar/avatar-1.png') }}"
                                />
                                <div
                                    class="article-user-details"
                                >
                                    <div
                                        class="user-detail-name"
                                    >
                                        <a href="#">
                                            {{ $article["writer"] }}
                                        </a>
                                    </div>
                                    {{-- <div class="text-job">
                                        Web Developer
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
  </section>
</div>
@endsection