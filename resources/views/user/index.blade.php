@extends("layouts.master")

@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header d-flex justify-content-between">
        <h1>User</h1>
        <a href="{{ route('quiz.create') }}" class="btn btn-primary">
            Tambah Materi
        </a>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table
                        class="table table-striped"
                    >
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>
                                Ilham Hafidz
                            </td>
                            <td
                                class="align-middle"
                            >
                                ilhamhafidz@gmail.com
                            </td>
                            <td>
                                <a href="" class="btn btn-danger">Hapus</a>
                                <a href="" class="btn btn-info">Detail</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
  </section>
</div>
@endsection