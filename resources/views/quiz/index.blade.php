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
            @forelse ($quizzes as $quiz)
                <div class="col-12">
                    <article class="row article article-style-c">
                        <div class="col-4 article-header">
                            <div
                                class="article-image"
                                data-background="{{ asset('quizzes/'.$quiz->banner) }}"
                            ></div>
                        </div>
                        <div class="col-7 article-details">
                            <div class="article-category">
                                <div class="bullet"></div>
                                <small>{{ $quiz->created_at->diffForHumans() }}</small>
                            </div>
                            <div class="article-title">
                                <h2>
                                    <a href="{{ route('quiz.show', ['quiz' => $quiz->slug]) }}">
                                        {{ $quiz->title }}
                                    </a>
                                </h2>
                            </div>
                            <p>{{ $quiz->description }}</p>
                            <div class="mt-5">
                                <a  href="{{ route('quiz.edit', ["quiz" => $quiz->slug]) }}" class="btn btn-primary">Edit</a>
                                <button class="btn btn-danger">Hapus</button>
                            </div>
                        </div>
                    </article>
                </div>
            @empty
                <div class="card col-12">
                  <div class="card-body">
                    <div class="empty-state" data-height="400">
                      <div class="empty-state-icon">
                        <i class="fas fa-question"></i>
                      </div>
                      <h2>Belum ada data Materi Quiz</h2>
                      <p class="lead">
                        Materi Quiz belum ditemukan, silahkan buat quiz terlebih dahulu!
                      </p>
                      <a href="{{ route('quiz.create') }}" class="btn btn-primary mt-4">
                        Tambah Materi
                      </a>
                      {{-- <a href="#" class="mt-4 bb">Need Help?</a> --}}
                    </div>
                  </div>
                </div>
            @endforelse
        </div>
    </div>
  </section>
</div>
@endsection