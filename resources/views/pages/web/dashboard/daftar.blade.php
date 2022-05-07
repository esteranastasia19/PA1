<x-web-layout title="Daftar ikan">
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
                  <th>Harga Ikan</th>
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
                  <td>Rp .{{ number_format($ikan->harga,2,',','.'); }}</td>
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

                        <div class="row">
                          <div class="col-sm-3">Harga Ikan</div>
                          <div class="col-sm-9 text-left"><input type="text" class="form-control" readonly value="{{$ikan->harga }}" /></div>
                        </div>
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
</x-web-layout>