@extends("layouts.master")

@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header d-flex justify-content-between">
        <h1>Quiz</h1>
        <a href="{{ route('article.create') }}" class="btn btn-primary">
            Tambah Soal
        </a>
    </div>

    <div class="section-body">
        <div class="row">
          <div class="col-8">
            <div class="card p-3 rounded shadow-sm">
              <span class="badge bg-secondary inline">No. 1</span>
              <h5 class="mt-4">Ini soal Lorem ipsum dolor sit amet.</h5>
              <div>
                <ol type="A">
                  <li>
                    Lorem ipsum, dolor sit
                  </li>
                  <li>dio corporis non eligendi hic maiores quo?
                  </li>
                  <li>
                    Loloremque omnis sit, earum perferendis? Ea, maiores. Assumenda se
                  </li>
                  <li>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere volupta
                  </li>
                </ol>
              </div>
              <div class="form-group">
                <div class="selectgroup w-100">
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="50" class="selectgroup-input" checked="">
                    <span class="selectgroup-button">A</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="100" class="selectgroup-input">
                    <span class="selectgroup-button">B</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="150" class="selectgroup-input">
                    <span class="selectgroup-button">C</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="200" class="selectgroup-input">
                    <span class="selectgroup-button">D</span>
                  </label>
                </div>
              </div>
            </div>
            <div class="card p-3 rounded shadow-sm">
              <span class="badge bg-secondary inline">No. 2</span>
              <h5 class="mt-4">Ini soal Lorem ipsum dolor sit amet.</h5>
              <div>
                <ol type="A">
                  <li>
                    Lorem ipsum, dolor sit
                  </li>
                  <li>dio corporis non eligendi hic maiores quo?
                  </li>
                  <li>
                    Loloremque omnis sit, earum perferendis? Ea, maiores. Assumenda se
                  </li>
                  <li>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere volupta
                  </li>
                </ol>
              </div>
              <div class="form-group">
                <div class="selectgroup w-100">
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="50" class="selectgroup-input" checked="">
                    <span class="selectgroup-button">A</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="100" class="selectgroup-input">
                    <span class="selectgroup-button">B</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="150" class="selectgroup-input">
                    <span class="selectgroup-button">C</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="200" class="selectgroup-input">
                    <span class="selectgroup-button">D</span>
                  </label>
                </div>
              </div>
            </div>
            <div class="card p-3 rounded shadow-sm">
              <span class="badge bg-secondary inline">No. 3</span>
              <h5 class="mt-4">Ini soal Lorem ipsum dolor sit amet.</h5>
              <div>
                <ol type="A">
                  <li>
                    Lorem ipsum, dolor sit
                  </li>
                  <li>dio corporis non eligendi hic maiores quo?
                  </li>
                  <li>
                    Loloremque omnis sit, earum perferendis? Ea, maiores. Assumenda se
                  </li>
                  <li>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere volupta
                  </li>
                </ol>
              </div>
              <div class="form-group">
                <div class="selectgroup w-100">
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="50" class="selectgroup-input" checked="">
                    <span class="selectgroup-button">A</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="100" class="selectgroup-input">
                    <span class="selectgroup-button">B</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="150" class="selectgroup-input">
                    <span class="selectgroup-button">C</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="200" class="selectgroup-input">
                    <span class="selectgroup-button">D</span>
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card p-3 position-sticky sticky-top">
              <h5>Soal</h5>
              <div class="row p-3">
                <div class="col-2 border text-center">
                  <a href="">1</a>
                </div>
                <div class="col-2 border text-center">
                  <a href="">2</a>
                </div>
                <div class="col-2 border text-center">
                  <a href="">3</a>
                </div>
                <div class="col-2 border text-center">
                  <a href="">4</a>
                </div>
                <div class="col-2 border text-center">
                  <a href="">5</a>
                </div>
                <div class="col-2 border text-center">
                  <a href="">6</a>
                </div>
                <div class="col-2 border text-center">
                  <a href="">7</a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </section>
</div>
@endsection