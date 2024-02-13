@extends("layouts.master")

@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header d-flex justify-content-between">
        <h1>Add Article</h1>
        <a href="{{ route('article.index') }}" class="btn btn-primary">
            Kembali
        </a>
    </div>

    <div class="section-body bg-white shadow-sm">
        <div class="row p-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Header</h4>
                    </div>
                    <div class="card-body">
                        <form
                            action="#"
                            class="dropzone"
                            id="mydropzone"
                        >
                            <div class="fallback">
                                <input
                                    name="file"
                                    type="file"
                                    multiple
                                />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" class="form-control creditcard">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label>Penulis</label>
                    <input type="text" class="form-control creditcard">
                </div>
            </div>
            <div class="col-12">
                <label
                    class="col-form-label text-md-right"
                    >Content</label
                >
                <div class="">
                    <textarea
                        class="summernote"
                    ></textarea>
                </div>
            </div>
        </div>
    </div>
  </section>
</div>
@endsection