<x-admin-web-layout title="daftarmenu">
    <div class="tabel1" id="section-2">
      <div class="container">
        <div class="card mb-4">
          <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Daftar Menu Ikan
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Ikan</th>
                    <th>Jenis Ikan</th>
                    <th>Gambar</th>
                    {{-- <th>Stok</th> --}}
                    <th>Harga Ikan</th>
                    <th>Action</th>
                  </tr>
                </thead>
                @php
                    $count=1;
                @endphp
                <tbody>
                  @foreach($AllIkan as $ikan) 
                  <tr>
                    <td>{{ $count++ }}</td>
                    <td>{{$ikan->name}}</td>
                    <td>{{$ikan->jenis}}</td>
                    <td><img src="{{asset('asset/gambar/'.$ikan->gambar)}}" width="80px" height="80px" alt="" data-bs-toggle="modal" data-bs-target="#myModals{{$ikan->id}}" /></td>
                    {{-- <td>{{$ikan->jumlah}}</td> --}}
                    <td>Rp .{{ number_format($ikan->harga,2,',','.'); }}</td>
                    <td>
                      <div>
                        
                      </div>
                      <div class="d-flex ">
                        <a class="btn btn-primary" href="{{ route('admin.ikan.edit', $ikan->id) }}"><i class="fas fa-edit"></i> Edit</a>&nbsp;
                      <form method="post" action="{{ route('admin.ikan.destroy', $ikan->id)}}">
                        @csrf 
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Hapus</button>
                      </form>
                      </div>
                    </td>
                  </tr>
    
                  <!-- Modal -->
                  <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-body">
                          <div class="row">
                            <div class="col-sm-3">Nama</div>
                            <div class="col-sm-9 text-left"><input type="text" class="form-control" readonly value="{{$ikan->name}}" /></div>
                          </div>

                          <div class="row">
                            <div class="col-sm-3">Jenis Ikan</div>
                            <div class="col-sm-9 text-left"><input type="text" class="form-control" readonly value="{{$ikan->jenis}}" /></div>
                          </div>
                          {{-- <div class="row">
                            <div class="col-sm-3">Stok</div>
                            <div class="col-sm-9 text-left"><input type="text" class="form-control" readonly value="{{$ikan->jumlah}}" /></div>
                          </div> --}}

                          <div class="row">
                            <div class="col-sm-3">Harga Ikan</div>
                            <div class="col-sm-9 text-left"><input type="text" class="form-control" readonly value="{{$ikan->harga }}" /></div>
                          </div>
                         
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                          <button type="button" class="btn btn-danger" onclick="">Hapus</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center">
      <a class="btn btn-info" href="{{ route('admin.ikan.create') }}"><i class="fas fa-plus"></i> Tambah Menu</a>
    </div>
    
  </x-admin-web-layout>  