@extends('layouts/contentNavbarLayout')

@section('title', 'Daduk')

@section('content')
<h6 class="py-1 mb-4">
  <span class="text-muted fw-light"><a href="/"><i class="mdi mdi-home mdi-18px"></i></a> / <a href="/daduk">Upload Daduk</a> /</span> Details
</h6>

<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <h4 class="card-header">Daduk Details</h4>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2"><h6>No Indikator &emsp; :</h6></div>
                    <div class="col-md-10"><h6>1</h6></div>
                </div>
                <div class="row">
                    <div class="col-md-2"><h6>Nama Indikator &nbsp; :</h6></div>
                    <div class="col-md-10"><h6>Tingkat Kematangan Kebijakan Internal Arsitektur SPBE Instansi Pusat/Pemerintah Daerah</h6></div>
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
                            <tr>
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
            </div>
        </div>
    </div>
</div>
@endsection