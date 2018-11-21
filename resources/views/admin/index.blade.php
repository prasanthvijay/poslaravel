@extends('layouts.home_layout')

@section('content')

 <main class="main-content bgc-grey-100">
        <div id="mainContent">
          <div class="row gap-20 masonry pos-r">
            <h4 class="c-grey-900">UI Elements</h4>
            <div class="masonry-sizer col-md-6"></div>
        
            <div class="masonry-item col-md-12">
              <div class="bgc-white p-20 bd">
                <h6 class="c-grey-900">Showroom</h6>
                <div class="mT-30"><button type="button" class="btn btn-primary showroom" data-toggle="modal" data-target="#showroomModal">Add </button>
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
              </div>
            </div>
            
          </div>
        </div>
      </main>



@endsection