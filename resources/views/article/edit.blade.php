@extends("layouts.master")

@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header d-flex justify-content-between">
        <h1>Edit Artikel</h1>
        <a href="{{ route('article.show', ["article" => $article->slug]) }}" class="btn btn-secondary">
            Kembali
        </a>
    </div>

    <div class="section-body bg-white shadow-sm">
        <form action="{{ route('article.update', ["article" => $article->slug]) }}" method="POST" enctype="multipart/form-data">
            @method("PATCH")
            @csrf
            <div class="row p-4">
                <div class="col-12">
                    <div class="form-group">
                        <label>Banner</label>
                        <img
                          alt="image"
                          src="{{ asset('articles/'. $article->banner) }}"
                          style="width: 100%; height: 350px; object-fit: cover"
                          class="rounded"
                        />
                        <br><br>
                        <input
                            name="banner"
                            type="file"
                        />
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="title" class="form-control creditcard" value="{{ $article->title }}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Penulis</label>
                        <input type="text" name="writer" class="form-control creditcard"  value="{{ $article->writer }}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                      <label>Untuk</label>
                      <select class="form-control" name="for">
                        <option  value="{{ $article->for }}" hidden selected>{{ $article->for }}</option>
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
                        >{{ $article->content }}</textarea>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
  </section>
</div>
@endsection