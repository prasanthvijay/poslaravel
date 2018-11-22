@extends('layouts.home_layout')

@section('content')

 <main class="main-content bgc-grey-100">
        <div id="mainContent">
            <div class="container-fluid">
              <div class="col-md-12">
                <div class="bgc-white bd bdrs-3 p-20 mB-20">
                  <h4 class="c-grey-900 mB-20">Showroom <button type="button" class="btn btn-primary showroom" data-toggle="modal" data-target="#showroomModal">Add </button> </h4>
                  <!-- {{ dump($showroom)}} -->
                  <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>S.no</th>
                        <th>Name</th>
                        <th>TIN number</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>City</th>
                        <th>Pin number</th>
                        <th>Action</th>
                      </tr>
                    </thead>                    
                    <tbody>
                     @foreach($showroom as $key => $showrooms)
                      <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{  ucfirst($showrooms->sh_name)  }}</td>
                        <td>{{  $showrooms->TIN_number  }}</td>
                        <td>{{  $showrooms->sh_address  }}</td>
                        <td>{{  $showrooms->sh_phone  }}</td>
                        <td>{{  ucfirst($showrooms->sh_city)  }}</td>
                        <td>{{  $showrooms->sh_pincode  }}</td>
                        <td>
                        <a href="#" class="showroom" data-sh_id="{{ $showrooms->id }}" data-toggle="modal" data-target="#showroomModal" >Edit</a>
                        / <a href="#" >Delete</a>
                        </td>
                      </tr>
                    @endforeach     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
                
                
                <div class="modal fade" id="showroomModal" tabindex="-1" role="dialog" 
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Showroom</h5><button type="button" class="close"
                            data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body" id="showroom_form">
                            
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
             
      </main>



@endsection