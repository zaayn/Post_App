@extends('layouts.app_admin')

@section('content_header')
<div class="panel">
    <div class="panel-body">
        <div class="col-md-6 col-sm-12">
            <h3 class="animated fadeInLeft">Admin</h3>
            <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> Sidoarjo, Indonesia</p>

        </div>
        <div class="col-md-6 col-sm-12">
            <div class="col-md-6 col-sm-6 text-right" style="padding-left:10px;">
                <h3 style="color:#DDDDDE;"><span class="fa  fa-map-marker"></span> Banyumas</h3>
                <h1 style="margin-top: -10px;color: #ddd;">30<sup>o</sup></h1>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="wheather">
                    <div class="stormy rainy animated pulse infinite">
                        <div class="shadow">
                    
                        </div>
                    </div>
                    <div class="sub-wheather">
                        <div class="thunder">
                    
                        </div>
                        <div class="rain">
                            <div class="droplet droplet1"></div>
                            <div class="droplet droplet2"></div>
                            <div class="droplet droplet3"></div>
                            <div class="droplet droplet4"></div>
                            <div class="droplet droplet5"></div>
                            <div class="droplet droplet6"></div>
                        </div>
                    </div>
                </div>
            </div>                   
        </div>
    </div>                    
</div>
@endsection

@section('content')
  <div class="col-md-12" style="padding:20px;">
      <div class="col-md-12 padding-0">
          <div class="col-md-12 padding-0">
              <div class="col-md-12 padding-0">

                  <div class="col-md-4">
                      <div class="panel box-v1">
                        <div class="panel-heading bg-white border-none">
                          <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                            <h4 class="text-left">Member</h4>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                             <h4>
                             <span class="icon-user icons icon text-right"></span>
                             </h4>
                          </div>
                        </div>
                        <div class="panel-body text-center">
                          <h1>100</h1>
                          <p>User active</p>
                          <hr/>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="panel box-v1">
                        <div class="panel-heading bg-white border-none">
                          <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                            <h4 class="text-left">Transaksi</h4>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                             <h4>
                             <span class="icon-basket-loaded icons icon text-right"></span>
                             </h4>
                          </div>
                        </div>
                        <div class="panel-body text-center">
                          <h1>51181,320</h1>
                          <p>New Orders</p>
                          <hr/>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-4">
                    <div class="panel box-v1">
                      <div class="panel-heading bg-white border-none">
                        <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                          <h4 class="text-left">Produk</h4>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                           <h4>
                           <span class="icon-basket-loaded icons icon text-right"></span>
                           </h4>
                        </div>
                      </div>
                      <div class="panel-body text-center">
                        <h1>51181,320</h1>
                        <p>New Orders</p>
                        <hr/>
                      </div>
                    </div>
                </div>
              </div>
          </div>
      </div>
</div>
@endsection

