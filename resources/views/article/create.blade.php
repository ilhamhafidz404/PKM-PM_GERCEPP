@extends("layouts.master")

@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header d-flex justify-content-between">
        <h1>Tambah Artikel</h1>
        <a href="{{ route('article.index') }}" class="btn btn-secondary">
            Kembali
        </a>
    </div>

    <div class="section-body bg-white shadow-sm">
        <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row p-4">
                <div class="col-12">
                    <div class="form-group">
                        <label>Banner</label>
                        <br>
                        <input
                            name="banner"
                            type="file"
                            {{-- class="dropzone"
                            id="mydropzone" --}}
                        />
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="title" class="form-control creditcard">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Penulis</label>
                        <input type="text" name="writer" class="form-control creditcard">
                    </div>
                </div>
                <div class="col-6">
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
                        Content
                    </label>
                    <div class="">
                        <textarea
                            name="content"
                            class="summernote"
                        ></textarea>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-end">
                    <button type="reset" class="btn btn-danger mr-2">
                        Reset
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-upload me-2"></i>
                        Submit
                    </button>
                </div>
            </div>
        </form>
    </div>
  </section>
</div>
@endsection