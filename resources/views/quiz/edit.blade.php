@extends("layouts.master")

@php
    $questionCount= 0;

    if (isset($_GET["questionCount"])) {
        $questionCount = $_GET["questionCount"];
    }
@endphp

@section('content')
<div class="main-content">
    <form action="{{ route('quiz.store') }}" method="POST" enctype="multipart/form-data">
        @if ($questionCount)
            @csrf
            <section class="section">
                <div class="section-header d-flex justify-content-between">
                    <h1>Tambah Quiz</h1>
                    <a href="{{ route('article.index') }}" class="btn btn-secondary">
                        Kembali
                    </a>
                </div>
    
                <div class="section-body bg-white shadow-sm">
                    <div class="row p-4">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Banner</label>
                                <br>
                                <input
                                    name="banner"
                                    type="file"
                                />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" name="title" class="form-control creditcard">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                            <label>Untuk</label>
                            <select class="form-control" name="for">
                                @foreach ($levels as $level)
                                    <option value="{{ $level->name }}">{{ $level->name }}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="col-form-label text-md-right">
                                Description
                            </label>
                            <div class="">
                                <textarea
                                    class="form-control"
                                    name="description"
                                ></textarea>
                            </div>
                        </div>
                    </div>
                </div>
        
                @for ($i=0; $i < $questionCount; $i++)
                    <div class="section-body bg-white shadow-sm mt-5">
                        <div class="row p-4">
                            <div class="col-12 mb-5">
                                <span class="badge badge-primary">Soal No. {{ $i+1 }}</span>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Soal</label>
                                    <input type="text" name="questions[]" class="form-control creditcard">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Opsi A</label>
                                    <input type="text" name="a[]" class="form-control creditcard">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Opsi B</label>
                                    <input type="text" name="b[]" class="form-control creditcard">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Opsi C</label>
                                    <input type="text" name="c[]" class="form-control creditcard">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Opsi D</label>
                                    <input type="text" name="d[]" class="form-control creditcard">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Jawaban</label>
                                    <div class="selectgroup w-100">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="{{ 'answers[]'.$i }}" value="a" class="selectgroup-input">
                                            <span class="selectgroup-button">A</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="{{ 'answers[]'.$i }}" value="b" class="selectgroup-input">
                                            <span class="selectgroup-button">B</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="{{ 'answers[]'.$i }}" value="c" class="selectgroup-input">
                                            <span class="selectgroup-button">C</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="{{ 'answers[]'.$i }}" value="d" class="selectgroup-input">
                                            <span class="selectgroup-button">D</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
    
                @if ($questionCount)
                    <div class="col-12 d-flex justify-content-end mt-3">
                        <button type="reset" class="btn btn-danger mr-2">
                            Reset
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-upload me-2"></i>
                            Submit
                        </button>
                    </div>
                @endif
            </section>
        @endif
    </form>

    @if (!$questionCount)
        <div class="bg-white p-3 rounded shadow-sm mt-5">
            <form action="" method="get">
                <div class="col-12">
                    <div class="form-group">
                        <label>Jumlah Soal</label>
                        <input type="text" name="questionCount" class="form-control creditcard">
                    </div>
                </div>
                <div>
                    <button class="btn btn-primary">Konfirmasi</button>
                </div>
            </form>
        </div>
    @endif
</div>
@endsection