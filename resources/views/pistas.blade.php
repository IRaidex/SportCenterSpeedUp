@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-around my-3">
        <div class="col-lg-1 d-none d-lg-block dia">Vi 24</div>
        <div class="col-lg-1 d-none d-lg-block dia">Sa 25</div>
        <div class="col-lg-1 d-none d-lg-block dia">Do 26</div>
        <div class="col-lg-1 d-none d-lg-block dia">Lu 27</div>
        <div class="col-lg-1 d-none d-lg-block dia">Ma 28</div>
        <div class="col-lg-1 d-none d-lg-block dia">Mi 29</div>
        <div class="col-lg-1 d-none d-lg-block dia">Ju 30</div>
        <div class="col-12 d-lg-none d-block text-center">Elija un dia
            <select class="custom-select">
                <option selected>Viernes 24</option>
                <option value="1">Sabado 25</option>
                <option value="2">Domingo 26</option>
                <option value="3">Lunes 27</option>
                <option value="3">Martes 28</option>
                <option value="3">Miercoles 28</option>
                <option value="3">Jueves 30</option>
            </select>
        </div>
    </div>
    <div class="row justify-content-center text-center my-5">
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="row">
                <div class="col-12">
                    <h6 class="text-uppercase font-weight-bold mt-4">Pista 1</h6>
                    <hr class="mb-5 mt-0 d-inline-block w-50">
                </div>
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-12">
                            <span>08:00 - 09:30</span>
                        </div>   
                        <div class="col-12">
                            <img src="{{asset('img/pista.png')}}" alt="pista">
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-12">
                            <span>09:30 - 11:00</span>
                        </div>   
                        <div class="col-12">
                            <img src="{{asset('img/pista.png')}}" alt="pista">
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-12">
                            <span>11:00 - 12:30</span>
                        </div>   
                        <div class="col-12">
                            <img src="{{asset('img/pista.png')}}" alt="pista">
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-12">
                            <span>12:30 - 14:00</span>
                        </div>   
                        <div class="col-12">
                            <img src="{{asset('img/pista.png')}}" alt="pista">
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-12">
                            <span>14:00 - 15:30</span>
                        </div>   
                        <div class="col-12">
                            <img src="{{asset('img/pista.png')}}" alt="pista">
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-12">
                            <span>15:30 - 17:00</span>
                        </div>   
                        <div class="col-12">
                            <img src="{{asset('img/pista.png')}}" alt="pista">
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-12">
                            <span>17:00 - 18:30</span>
                        </div>   
                        <div class="col-12">
                            <img src="{{asset('img/pista.png')}}" alt="pista">
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-12">
                            <span>18:30 - 20:00</span>
                        </div>   
                        <div class="col-12">
                            <img src="{{asset('img/pista.png')}}" alt="pista">
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-12">
                            <span>20:00 - 21:30</span>
                        </div>   
                        <div class="col-12">
                            <img src="{{asset('img/pista.png')}}" alt="pista">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="row">
                <div class="col-12">
                    <h6 class="text-uppercase font-weight-bold mt-4">Pista 2</h6>
                    <hr class="mb-5 mt-0 d-inline-block w-50">
                </div>
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-12">
                            <span>08:00 - 09:30</span>
                        </div>   
                        <div class="col-12">
                            <img src="{{asset('img/pista.png')}}" alt="pista">
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-12">
                            <span>09:30 - 11:00</span>
                        </div>   
                        <div class="col-12">
                            <img src="{{asset('img/pista.png')}}" alt="pista">
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-12">
                            <span>11:00 - 12:30</span>
                        </div>   
                        <div class="col-12">
                            <img src="{{asset('img/pista.png')}}" alt="pista">
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-12">
                            <span>12:30 - 14:00</span>
                        </div>   
                        <div class="col-12">
                            <img src="{{asset('img/pista.png')}}" alt="pista">
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-12">
                            <span>14:00 - 15:30</span>
                        </div>   
                        <div class="col-12">
                            <img src="{{asset('img/pista.png')}}" alt="pista">
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-12">
                            <span>15:30 - 17:00</span>
                        </div>   
                        <div class="col-12">
                            <img src="{{asset('img/pista.png')}}" alt="pista">
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-12">
                            <span>17:00 - 18:30</span>
                        </div>   
                        <div class="col-12">
                            <img src="{{asset('img/pista.png')}}" alt="pista">
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-12">
                            <span>18:30 - 20:00</span>
                        </div>   
                        <div class="col-12">
                            <img src="{{asset('img/pista.png')}}" alt="pista">
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-12">
                            <span>20:00 - 21:30</span>
                        </div>   
                        <div class="col-12">
                            <img src="{{asset('img/pista.png')}}" alt="pista">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="row">
                <div class="col-12">
                    <h6 class="text-uppercase font-weight-bold mt-4">Pista 3</h6>
                    <hr class="mb-5 mt-0 d-inline-block w-50">
                </div>
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-12">
                            <span>08:00 - 09:30</span>
                        </div>   
                        <div class="col-12">
                            <img src="{{asset('img/pista.png')}}" alt="pista">
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-12">
                            <span>09:30 - 11:00</span>
                        </div>   
                        <div class="col-12">
                            <img src="{{asset('img/pista.png')}}" alt="pista">
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-12">
                            <span>11:00 - 12:30</span>
                        </div>   
                        <div class="col-12">
                            <img src="{{asset('img/pista.png')}}" alt="pista">
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-12">
                            <span>12:30 - 14:00</span>
                        </div>   
                        <div class="col-12">
                            <img src="{{asset('img/pista.png')}}" alt="pista">
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-12">
                            <span>14:00 - 15:30</span>
                        </div>   
                        <div class="col-12">
                            <img src="{{asset('img/pista.png')}}" alt="pista">
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-12">
                            <span>15:30 - 17:00</span>
                        </div>   
                        <div class="col-12">
                            <img src="{{asset('img/pista.png')}}" alt="pista">
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-12">
                            <span>17:00 - 18:30</span>
                        </div>   
                        <div class="col-12">
                            <img src="{{asset('img/pista.png')}}" alt="pista">
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-12">
                            <span>18:30 - 20:00</span>
                        </div>   
                        <div class="col-12">
                            <img src="{{asset('img/pista.png')}}" alt="pista">
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-12">
                            <span>20:00 - 21:30</span>
                        </div>   
                        <div class="col-12">
                            <img src="{{asset('img/pista.png')}}" alt="pista">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="row">
                <div class="col-12">
                    <h6 class="text-uppercase font-weight-bold mt-4">Pista 4</h6>
                    <hr class="mb-5 mt-0 d-inline-block w-50">
                </div>
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-12">
                            <span>08:00 - 09:30</span>
                        </div>   
                        <div class="col-12">
                            <img src="{{asset('img/pista.png')}}" alt="pista">
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-12">
                            <span>09:30 - 11:00</span>
                        </div>   
                        <div class="col-12">
                            <img src="{{asset('img/pista.png')}}" alt="pista">
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-12">
                            <span>11:00 - 12:30</span>
                        </div>   
                        <div class="col-12">
                            <img src="{{asset('img/pista.png')}}" alt="pista">
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-12">
                            <span>12:30 - 14:00</span>
                        </div>   
                        <div class="col-12">
                            <img src="{{asset('img/pista.png')}}" alt="pista">
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-12">
                            <span>14:00 - 15:30</span>
                        </div>   
                        <div class="col-12">
                            <img src="{{asset('img/pista.png')}}" alt="pista">
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-12">
                            <span>15:30 - 17:00</span>
                        </div>   
                        <div class="col-12">
                            <img src="{{asset('img/pista.png')}}" alt="pista">
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-12">
                            <span>17:00 - 18:30</span>
                        </div>   
                        <div class="col-12">
                            <img src="{{asset('img/pista.png')}}" alt="pista">
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-12">
                            <span>18:30 - 20:00</span>
                        </div>   
                        <div class="col-12">
                            <img src="{{asset('img/pista.png')}}" alt="pista">
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-12">
                            <span>20:00 - 21:30</span>
                        </div>   
                        <div class="col-12">
                            <img src="{{asset('img/pista.png')}}" alt="pista">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop