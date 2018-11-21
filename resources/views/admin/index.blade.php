@extends('layouts.home_layout')

@section('content')

 <main class="main-content bgc-grey-100">
        <div id="mainContent">
            <div class="container-fluid">
              <div class="col-md-12">
                <div class="bgc-white bd bdrs-3 p-20 mB-20">
                  <h4 class="c-grey-900 mB-20">Showroom <button type="button" class="btn btn-primary showroom" data-toggle="modal" data-target="#showroomModal">Add </button> </h4>

                  <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                      </tr>
                    </thead>                    
                    <tbody>
                      <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
                
                
                <div class="modal fade" id="showroomModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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