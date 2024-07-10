@extends('layouts/contentNavbarLayout')

@section('title', 'Daduk')

@section('content')
<h6 class="py-1 mb-4">
  <span class="text-muted fw-light"><a href="/"><i class="mdi mdi-home mdi-18px"></i></a> /</span> Upload Daduk
</h6>

<div class="row gy-4">
  <div class="col-md-12">
    <div class="card mb-">
      <div class="card-header">
        <div class="row">
          <div class="col-md-12">
            <h5>Select Domain</h5>
          </div>
        </div>
        <div class="row hstack gap-6">
          <div class="col-md-4 mt-2">
            <div class="input-group">
              <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                <option value="1">Pokja Kebijakan</option>
                <option value="2">Pokja Tata Kelola</option>
                <option value="3">Pokja Manajemen</option>
                <option value="3">Pokja Layanan</option>
              </select>
              <button class="btn btn-outline-primary text-capitalize" type="button">Select</button>
            </div>
          </div>
          <div class="col-md-2"></div>
          <div class="col-md-4 mt-2">
            <div class="input-group input-group-merge">
              <span class="input-group-text" id="basic-addon-search31"><i class="mdi mdi-magnify"></i></span>
              <input type="text" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon-search31" />
            </div>
          </div>
          <div class="col-md-2 mt-2">
            <div class="input-group">
              <label class="input-group-text" for="inputGroupSelect01">Show</label>
              <select class="form-select" id="inputGroupSelect01">
                <option selected>10</option>
                <option value="1">15</option>
                <option value="2">25</option>
                <option value="3">30</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      
      <div class="table-responsive text-nowrap">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>No Indikator</th>
              <th>Nama Indikator</th>
              <th >Nilai 2024</th>
              <th>Target 2025</th>
              <th>Progress</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            <tr>
              <td>Indkator 1</td>
              <td>
                <span class="d-inline-block text-truncate" style="max-width: 25rem;">
                  Tingkat Kematangan Kebijakan Internal Arsitektur SPBE Instansi Pusat/Pemerintah Daerah
                </span>
              </td>
              <td>2</td>
              <td>5</td>
              <td>
                <div class="progress bg-label-info">
                  <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                </div>
              </td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="/daduk/detail"><i class="mdi mdi-eye-outline me-1"></i> See more</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>Indkator 10</td>
              <td>
                <span class="d-inline-block text-truncate" style="max-width: 25rem;">
                  Tingkat Kematangan Kebijakan Internal Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah
                </span>
              </td>
              <td>3</td>
              <td>5</td>
              <td>
                <div class="progress bg-label-info">
                  <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                </div>
              </td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="javascript:void(0);"><i class="mdi mdi-eye-outline me-1"></i> See more</a>
                  </div>
                </div>
              </td>
            </tr>
            <td>Indkator 11</td>
              <td>
                <span class="d-inline-block text-truncate" style="max-width: 25rem;">
                  Tingkat Kematangan Arsitektur SPBE Instansi Pusat/Pemerintah Daerah
                </span>
              </td>
              <td>3</td>
              <td>5</td>
              <td>
                <div class="progress bg-label-info">
                  <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                </div>
              </td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="javascript:void(0);"><i class="mdi mdi-eye-outline me-1"></i> See more</a>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="demo-inline-spacing">
            <nav aria-label="Page navigation">
              <ul class="pagination pagination-sm justify-content-center">
                <li class="page-item prev">
                  <a class="page-link" href="javascript:void(0);"><i class="tf-icon mdi mdi-chevron-double-left mdi-14px"></i></a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="javascript:void(0);">1</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="javascript:void(0);">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="javascript:void(0);">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="javascript:void(0);">4</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="javascript:void(0);">5</a>
                </li>
                <li class="page-item next">
                  <a class="page-link" href="javascript:void(0);"><i class="tf-icon mdi mdi-chevron-double-right mdi-14px"></i></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
  </div>
</div>

@endsection