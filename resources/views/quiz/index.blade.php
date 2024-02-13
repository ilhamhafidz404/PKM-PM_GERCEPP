@extends("layouts.master")

@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header d-flex justify-content-between">
        <h1>Quiz</h1>
        <a href="{{ route('quiz.create') }}" class="btn btn-primary">
            Tambah Materi
        </a>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <article class="row article article-style-c">
                    <div class="col-4 article-header">
                        <div
                            class="article-image"
                            data-background="{{ asset('template/dist/assets/img/news/img13.jpg') }}"
                        ></div>
                    </div>
                    <div class="col-7 article-details">
                        <div class="article-category">
                            <a href="#">News</a>
                            <div class="bullet"></div>
                            <a href="#">5 Days</a>
                        </div>
                        <div class="article-title">
                            <h2>
                                <a href="{{ route('quiz.show', ['quiz' => 1]) }}">
                                    Excepteur sint occaecat
                                    cupidatat non
                                    proident
                                </a>
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
            <div class="col-12">
                <article class="row article article-style-c">
                    <div class="col-4 article-header">
                        <div
                            class="article-image"
                            data-background="{{ asset('template/dist/assets/img/news/img13.jpg') }}"
                        ></div>
                    </div>
                    <div class="col-7 article-details">
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
            <div class="col-12">
                <article class="row article article-style-c">
                    <div class="col-4 article-header">
                        <div
                            class="article-image"
                            data-background="{{ asset('template/dist/assets/img/news/img13.jpg') }}"
                        ></div>
                    </div>
                    <div class="col-7 article-details">
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
            <div class="col-12">
                <article class="row article article-style-c">
                    <div class="col-4 article-header">
                        <div
                            class="article-image"
                            data-background="{{ asset('template/dist/assets/img/news/img13.jpg') }}"
                        ></div>
                    </div>
                    <div class="col-7 article-details">
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
        </div>
    </div>
  </section>
</div>
@endsection