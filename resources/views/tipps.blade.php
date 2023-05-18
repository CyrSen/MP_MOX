@extends('layouts.master')

@section('title', 'ChapsChat')

@section('content')


<div class="container">
    <div class="d-flex justify-content-center align-items-center vh-100" style="margin-top:-2%;">
      <div class="card shadow-2-strong shadow mb-0 bg-body">
        <div class="row justify-content-evenly">
          <div class="col-md-6 col-lg-5 mb-3 my-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Warm</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo at velit alias, architecto accusantium in explicabo eos quibusdam, voluptatem quos vel amet, inventore voluptate quas? Distinctio voluptatum accusantium voluptatibus minima!</p>
                <a href="#" class="text-dark" data-bs-toggle="modal" data-bs-target="#modal1">Launch static backdrop modal</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 mb-3 my-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Lalt</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo at velit alias, architecto accusantium in explicabo eos quibusdam, voluptatem quos vel amet, inventore voluptate quas? Distinctio voluptatum accusantium voluptatibus minima!</p>
                <a href="#" class="text-dark" data-bs-toggle="modal" data-bs-target="#modal2">Launch static backdrop modal</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-evenly">
          <div class="col-md-6 col-lg-5 mb-3 my-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Luft</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo at velit alias, architecto accusantium in explicabo eos quibusdam, voluptatem quos vel amet, inventore voluptate quas? Distinctio voluptatum accusantium voluptatibus minima!</p>
                <a href="#" class="text-dark" data-bs-toggle="modal" data-bs-target="#modal3">Launch static backdrop modal</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 mb-3 my-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Lärm</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo at velit alias, architecto accusantium in explicabo eos quibusdam, voluptatem quos vel amet, inventore voluptate quas? Distinctio voluptatum accusantium voluptatibus minima!</p>
                <a href="#" class="text-dark" data-bs-toggle="modal" data-bs-target="#modal4">
                        Launch static backdrop modal
                    </a>

                    </div>
                  </div>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5 mb-3 my-4 bg-info">
                  <h5 class="display">Card 3</h5>
                  <p class="lead">ALL GOOD? NOT? Give Commentary or EFF OFF...jk...lol</p>
                  <i class="fa-regular fa-comment-dots"></i>
                </div>
                <div class="col-md-6 col-lg-5 mb-3 my-4 bg-warning">
                  <h5 class="display">Card 4</h5>
                  <p class="lead">Commentar:</p>
                  {{-- <form action="{{ route('feedback.commentary.store', ['feedbackMapId' => $feedbackMap->id]) }}" method="POST"> --}}
                    <form action="{{ route('feedback.commentary.store', ['feedbackMap' => $feedbackMapId]) }}" method="POST">
                            @csrf
                        <div class="mb-3">
                            <div class="input-group">
                            <span class="input-group-text"><i class="fa-regular fa-comment-dots"></i></span>
                            <textarea  type="text" name="commentary" class="form-control" aria-label="With textarea" placeholder="Commentary"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Button</button>
                    </form> 
                </div>
                <div class="col-sm-3">
                    {{-- @foreach ($feedbackMaps as $feedbackMap)
                    <li>{{ $feedbackMap->commentary }}</li>
                        
                    @endforeach --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      
        <!-- Modal1 -->
        <div class="modal fade" id="modal1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel1" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel1">Warm</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <!-- Modal1 content goes here -->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
              </div>
            </div>
          </div>
        </div>
      
        <div class="modal fade" id="modal2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel2" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="staticBackdropLabel2">Kalt</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <!-- Modal2 content goes here -->
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Understood</button>
                </div>
              </div>
            </div>
          </div>
        
          <!-- Modal3 -->
          <div class="modal fade" id="modal3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel3" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="staticBackdropLabel3">Luft</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <!-- Modal3 content goes here -->
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Understood</button>
                </div>
              </div>
            </div>
          </div>
        
          <!-- Modal4 -->
          <div class="modal fade" id="modal4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel4" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="staticBackdropLabel4">Lärm</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <!-- Modal4 content goes here -->
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Understood</button>
                </div>
              </div>
            </div>
          </div>
        
  
 
    

@endsection