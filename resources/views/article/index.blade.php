@extends("layouts.master")

@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header d-flex justify-content-between">
        <h1>Article</h1>
        <a href="{{ route('article.create') }}" class="btn btn-primary">
            Tambah Artikel
        </a>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-4">
                <article class="article article-style-c">
                    <div class="article-header">
                        <div
                            class="article-image"
                            data-background="{{ asset('template/dist/assets/img/news/img13.jpg') }}"
                        ></div>
                    </div>
                    <div class="article-details">
                        <div class="article-category">
                            <a href="#">News</a>
                            <div class="bullet"></div>
                            <a href="#">5 Days</a>
                        </div>
                        <div class="article-title">
                            <h2>
                                <a href="{{ route('article.show', ['article' => 1]) }}"
                                    >Excepteur sint occaecat
                                    cupidatat non
                                    proident</a
                                >
                            </h2>
                        </div>
                        <p>
                            Duis aute irure dolor in
                            reprehenderit in voluptate velit
                            esse cillum dolore eu fugiat
                            nulla pariatur.
                        </p>
                        <div class="article-user">
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
                                    <a href="#"
                                        >Hasan Basri</a
                                    >
                                </div>
                                <div class="text-job">
                                    Web Developer
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <article class="article article-style-c">
                    <div class="article-header">
                        <div
                            class="article-image"
                            data-background="{{ asset('template/dist/assets/img/news/img14.jpg') }}"
                        ></div>
                    </div>
                    <div class="article-details">
                        <div class="article-category">
                            <a href="#">News</a>
                            <div class="bullet"></div>
                            <a href="#">5 Days</a>
                        </div>
                        <div class="article-title">
                            <h2>
                                <a href="#"
                                    >Excepteur sint occaecat
                                    cupidatat non
                                    proident</a
                                >
                            </h2>
                        </div>
                        <p>
                            Duis aute irure dolor in
                            reprehenderit in voluptate velit
                            esse cillum dolore eu fugiat
                            nulla pariatur.
                        </p>
                        <div class="article-user">
                            <img
                                alt="image"
                                src="{{ asset('template/dist/assets/img/avatar/avatar-3.png') }}"
                            />
                            <div
                                class="article-user-details"
                            >
                                <div
                                    class="user-detail-name"
                                >
                                    <a href="#"
                                        >Rizal Fakhri</a
                                    >
                                </div>
                                <div class="text-job">
                                    UX Designer
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <article class="article article-style-c">
                    <div class="article-header">
                        <div
                            class="article-image"
                            data-background="{{ asset('template/dist/assets/img/news/img01.jpg') }}"
                        ></div>
                    </div>
                    <div class="article-details">
                        <div class="article-category">
                            <a href="#">News</a>
                            <div class="bullet"></div>
                            <a href="#">5 Days</a>
                        </div>
                        <div class="article-title">
                            <h2>
                                <a href="#"
                                    >Excepteur sint occaecat
                                    cupidatat non
                                    proident</a
                                >
                            </h2>
                        </div>
                        <p>
                            Duis aute irure dolor in
                            reprehenderit in voluptate velit
                            esse cillum dolore eu fugiat
                            nulla pariatur.
                        </p>
                        <div class="article-user">
                            <img
                                alt="image"
                                src="{{ asset('template/dist/assets/img/avatar/avatar-2.png') }}"
                            />
                            <div
                                class="article-user-details"
                            >
                                <div
                                    class="user-detail-name"
                                >
                                    <a href="#"
                                        >Irwansyah
                                        Saputra</a
                                    >
                                </div>
                                <div class="text-job">
                                    Mobile Developer
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <article class="article article-style-c">
                    <div class="article-header">
                        <div
                            class="article-image"
                            data-background="{{ asset('template/dist/assets/img/news/img13.jpg') }}"
                        ></div>
                    </div>
                    <div class="article-details">
                        <div class="article-category">
                            <a href="#">News</a>
                            <div class="bullet"></div>
                            <a href="#">5 Days</a>
                        </div>
                        <div class="article-title">
                            <h2>
                                <a href="#"
                                    >Excepteur sint occaecat
                                    cupidatat non
                                    proident</a
                                >
                            </h2>
                        </div>
                        <p>
                            Duis aute irure dolor in
                            reprehenderit in voluptate velit
                            esse cillum dolore eu fugiat
                            nulla pariatur.
                        </p>
                        <div class="article-user">
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
                                    <a href="#"
                                        >Hasan Basri</a
                                    >
                                </div>
                                <div class="text-job">
                                    Web Developer
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <article class="article article-style-c">
                    <div class="article-header">
                        <div
                            class="article-image"
                            data-background="{{ asset('template/dist/assets/img/news/img14.jpg') }}"
                        ></div>
                    </div>
                    <div class="article-details">
                        <div class="article-category">
                            <a href="#">News</a>
                            <div class="bullet"></div>
                            <a href="#">5 Days</a>
                        </div>
                        <div class="article-title">
                            <h2>
                                <a href="#"
                                    >Excepteur sint occaecat
                                    cupidatat non
                                    proident</a
                                >
                            </h2>
                        </div>
                        <p>
                            Duis aute irure dolor in
                            reprehenderit in voluptate velit
                            esse cillum dolore eu fugiat
                            nulla pariatur.
                        </p>
                        <div class="article-user">
                            <img
                                alt="image"
                                src="{{ asset('template/dist/assets/img/avatar/avatar-3.png') }}"
                            />
                            <div
                                class="article-user-details"
                            >
                                <div
                                    class="user-detail-name"
                                >
                                    <a href="#"
                                        >Rizal Fakhri</a
                                    >
                                </div>
                                <div class="text-job">
                                    UX Designer
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <article class="article article-style-c">
                    <div class="article-header">
                        <div
                            class="article-image"
                            data-background="{{ asset('template/dist/assets/img/news/img01.jpg') }}"
                        ></div>
                    </div>
                    <div class="article-details">
                        <div class="article-category">
                            <a href="#">News</a>
                            <div class="bullet"></div>
                            <a href="#">5 Days</a>
                        </div>
                        <div class="article-title">
                            <h2>
                                <a href="#"
                                    >Excepteur sint occaecat
                                    cupidatat non
                                    proident</a
                                >
                            </h2>
                        </div>
                        <p>
                            Duis aute irure dolor in
                            reprehenderit in voluptate velit
                            esse cillum dolore eu fugiat
                            nulla pariatur.
                        </p>
                        <div class="article-user">
                            <img
                                alt="image"
                                src="{{ asset('template/dist/assets/img/avatar/avatar-2.png') }}"
                            />
                            <div
                                class="article-user-details"
                            >
                                <div
                                    class="user-detail-name"
                                >
                                    <a href="#"
                                        >Irwansyah
                                        Saputra</a
                                    >
                                </div>
                                <div class="text-job">
                                    Mobile Developer
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
  </section>
</div>
@endsection