<x-admin-web-layout title="Tambah Ikan">
    <div class="container">
      <div class="edit">
        <div class="card">
          <div class="text-center">
            <h3>Restok</h3>
          </div>
          <div class="card-body">
              <form action="{{ route('admin.restok.update', $data->id) }}" method="post" enctype="multipart/form-data">
              @method('PATCH')
            @csrf
  
            <div id="gambar" class="modal fade" tabindex="-1" role="dialog">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-body">
                    <img src="{{asset('asset/gambar/'.$data->gambar)}}" class="img-fluid" />
                  </div>
                </div>
              </div>
            </div>
  
              {{-- <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Nama </label>
                <div class="col-sm-9">
                  <input type="text"  id="name" name="name" value="{{ $data->name }}"class="form-control @error('name') is-invalid @enderror" />
                </div>
                @error('name')
                  <div class="alert alert-danger">{{$message}}</div>
                @enderror
              </div>
              
              <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Gambar</label>
                <div class="col-sm-9">
                  <input type="file" name="gambar" class="form-controll @error('gambar') is invalid @enderror" id="gambar" value="{{ $data->gambar }}">
                </div>
                @error('gambar')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div> --}}
  
              <div class="mb-3 row">
                <label class="col-sm-3 col-form-label"> Stok </label>
                <div class="col-sm-9">
                  <input type="text"  id="jumlah" name="jumlah" value="{{ $data->stok }}"class="form-control @error('jumlah') is-invalid @enderror" />
                </div>
                @error('stok')
                  <div class="alert alert-danger">{{$message}}</div>
                @enderror
              </div>
  
              <div class="text-center">
                <a type="button" class="btn btn-danger" href="{{ url('admin/restok') }}" ><i class="fas fa-times"></i> Batal</a>
                <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Tambah</button>
              </div>
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </x-admin-web-layout>   