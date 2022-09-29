@extends('admin.master')


@section('contents')
    <div class="row">
        <!-- Area Chart -->
        <div class="col-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">New Product</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form action="{{ route('admin.products.save') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="twitter">1. Species:</label>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                       id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Default radio
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                       id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Default checked radio
                                </label>
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="twitter">2. Grade :</label>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                       id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Default radio
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                       id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Default checked radio
                                </label>
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="twitter">3. Drying Method :</label>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                       id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Default radio
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                       id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Default checked radio
                                </label>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="twitter">4. Treatment :</label>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                       id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Default radio
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                       id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Default checked radio
                                </label>
                            </div>

                        </div>



                        <div class="form-group">
                            <label for="">5. Dimensions</label>

                            <div class="col-5">

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">Thickness</span>
                                    </div>
                                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">Width</span>
                                    </div>
                                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                </div>
                            </div>   <div class="col-5">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">Length</span>
                                    </div>
                                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                </div>
                            </div>
                        </div>

                        <hr>

                        <button type="submit" class="btn btn-primary">Save Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
