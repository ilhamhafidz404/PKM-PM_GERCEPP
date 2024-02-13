@extends("layouts.master")

@section('content')

<div class="main-content">
  <section class="section">
    <div class="section-body bg-white p-5 shadow-sm">

      <h1>{{ $article->title }}</h1>
      <p>{{ $article->created_at->diffForHumans() }}</p>
      <div class="d-flex justify-content-between">
        <div class="d-flex align-items-center my-3" style="gap: 20px">
          <img
              alt="image"
              src="{{ asset('template/dist/assets/img/avatar/avatar-1.png') }}"
              class="rounded-circle"
              width="50"
              height="50"
          />
          <div
              class="article-user-details"
          >
              <div
                class="user-detail-name"
              >
                <a href="#">{{ $article->writer }}</a>
              </div>
          </div>
        </div>
        <div>
          <button class="btn btn-danger" id="hapus">Hapus</button>
          <a href="{{ route('article.edit', ["article" => $article->slug]) }}" class="btn btn-info">Edit</a>
        </div>
      </div>
      <img
        alt="image"
        src="{{ asset('articles/'. $article->banner) }}"
        style="width: 100%; height: 350px; object-fit: cover"
        class="rounded"
      />
      <hr>
      <p>{!! $article->content !!}</p>
    </div>
  </section>
</div>
@endsection

@section('script')
<script>
  $("#hapus").click(function () {
      swal({
          title: "Apakah Yakin?",
          text: "Data Artikel akan terhapus permanen!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
      }).then((willDelete) => {
          if (willDelete) {
            // window.location.href = "{{ route('article.destroy', ['article' => $article->id]) }}";
            $.ajax({
              url: "{{ route('article.destroy', ['article' => $article->id]) }}",
              type: 'DELETE',
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              success: function(result) {
                  window.location.href = "{{ route('article.index') }}";
              },
              error: function(err) {
                  swal("Terjadi kesalahan saat menghapus data!", {
                      icon: "error",
                  });
              }
            });
          }
      });
  });
</script>
@endsection