@extends("layouts.master")

@section('content')
<div class="main-content">
  <section class="section">

    <div class="section-body bg-white p-5 shadow-sm">
      <h1>Ini Judul Artikel</h1>
      <p>2 Februari 2024</p>
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
                <a href="#">Penulis</a>
              </div>
              <div class="text-job">
                Web Developer
              </div>
          </div>
        </div>
        <div>
          <button class="btn btn-danger">Hapus</button>
          <button class="btn btn-info">Edit</button>
        </div>
      </div>
      <img
        alt="image"
        src="{{ asset('template/dist/assets/img/news/img13.jpg') }}"
        style="width: 100%; height: 350px; object-fit: cover"
        class="rounded"
      />
      <hr>
      <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam, praesentium laboriosam impedit quia culpa officia necessitatibus nisi totam sit repudiandae eaque molestiae facere ipsa illo fuga commodi corrupti aspernatur assumenda. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius voluptates iste, dolore, impedit autem molestias alias dolores, facilis perspiciatis consequuntur illo ratione ea esse. Officiis commodi fugiat fuga minima deserunt totam facilis similique dolor eos autem, quaerat molestiae doloremque laudantium ex sit ad quo. Voluptas voluptatibus, commodi accusantium dolor esse non repellendus reprehenderit architecto quisquam doloremque aliquid voluptate laboriosam voluptatem necessitatibus, veniam nobis sequi officia debitis illum recusandae obcaecati optio fugit rerum eaque! Sint est illo, ipsum eligendi amet reiciendis ad laudantium quisquam accusamus voluptas optio quia rerum possimus? Mollitia quis, temporibus omnis optio provident earum enim vitae voluptate rem.
      </p>
    </div>
  </section>
</div>
@endsection