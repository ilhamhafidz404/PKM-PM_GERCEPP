@extends("layouts.master")

@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header d-flex justify-content-between">
        <h1>Quiz  {{ $quiz->title }}</h1>
        <a href="{{ route('quiz.index') }}" class="btn btn-secondary">
          Kembali
        </a>
    </div>

    <div class="section-body">
        <div class="row">
          <div class="col-8">
            @foreach ($quiz->question as $index => $question)
                <div class="card p-3 rounded shadow-sm" id="no{{ $index+1 }}">
                  <span class="badge bg-secondary inline">No. {{ $index + 1 }}</span>
                  <h5 class="mt-4">{{ $question->question }}</h5>
                  <div>
                    <ol type="A">
                      <li>
                        {{ $question->a }}
                      </li>
                      <li>
                        {{ $question->b }}
                      </li>
                      <li>
                        {{ $question->c }}
                      </li>
                      <li>
                        {{ $question->d }}
                      </li>
                    </ol>
                  </div>
                  <div class="form-group">
                    <div class="selectgroup w-100">
                      <label class="selectgroup-item">
                        <input 
                          type="radio" 
                          disabled
                          name="answer{{ $index+1 }}" 
                          value="{{ $question->a }}" 
                          class="selectgroup-input" 
                          @if ($question->answer_text == $question->a)
                            checked
                          @endif
                        >
                        <span class="selectgroup-button">A</span>
                      </label>
                      <label class="selectgroup-item">
                        <input 
                          type="radio" 
                          disabled
                          name="answer{{ $index+1 }}" 
                          value="{{ $question->b }}" 
                          class="selectgroup-input"
                           @if ($question->answer_text == $question->b)
                            checked
                          @endif
                        >
                        <span class="selectgroup-button">B</span>
                      </label>
                      <label class="selectgroup-item">
                        <input 
                          type="radio" 
                          disabled
                          name="answer{{ $index+1 }}" 
                          value="{{ $question->c }}" 
                          class="selectgroup-input"
                           @if ($question->answer_text == $question->c)
                            checked
                          @endif
                        >
                        <span class="selectgroup-button">C</span>
                      </label>
                      <label class="selectgroup-item">
                        <input 
                          type="radio" 
                          disabled
                          name="answer{{ $index+1 }}" 
                          value="{{ $question->d }}" 
                          class="selectgroup-input"
                           @if ($question->answer_text == $question->d)
                            checked
                          @endif
                        >
                        <span class="selectgroup-button">D</span>
                      </label>
                    </div>
                  </div>
                </div>
            @endforeach
          </div>
          <div class="col-4">
            <div class="card p-3 position-sticky sticky-top">
              <h5>Soal</h5>
              <div class="row p-3">
                @foreach ($quiz->question as $index => $question)
                  <div class="col-2 border text-center">
                    <a href="#no{{ $index+1 }}">{{ $index+1 }}</a>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
    </div>
  </section>
</div>
@endsection