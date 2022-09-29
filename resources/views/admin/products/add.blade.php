@extends('admin.master')


@section('contents')
    <div class="row">

        <div class="col-12">

            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            @if(session()->has('error'))
                <div class="alert alert-warning">
                    {{ session()->get('error') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>


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

                            @foreach($data['species'] as $spc)
                                <div class="form-check">
                                    <input class="form-check-input @error('specie') is-invalid @enderror" type="radio" name="specie"
                                           value="{{$spc->id}}" id="specie">
                                    <label class="form-check-label" for="specie">
                                        {{ $spc->specie_name }}
                                    </label>
                                </div>
                            @endforeach

                        </div>

                        <div class="form-group">
                            <label for="twitter">2. Grade :</label>

                            @foreach($data['grade_names'] as $gn)
                                <div class="form-check">
                                    <input class="form-check-input  @error('grade_name') is-invalid @enderror" type="radio" name="grade_name"
                                           value="{{$gn->id}}" id="grade_name">
                                    <label class="form-check-label" for="grade_name">
                                        {{ $gn->grade_name }}
                                    </label>
                                </div>
                            @endforeach
                        </div>


                        <div class="form-group">
                            <label for="twitter">2.5. Grade Option :</label>

                            @foreach($data['grade_name_options'] as $gnOption)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="grade_name_option"
                                           value="{{$gnOption->id}}" id="grade_name_option">
                                    <label class="form-check-label" for="grade_name_option">
                                        {{ $gnOption->grade_option }}
                                    </label>
                                </div>
                            @endforeach
                        </div>





                        <div class="form-group">
                            <label for="twitter">3. Drying Method :</label>

                            @foreach($data['drying_method'] as $dm)
                                <div class="form-check">
                                    <input class="form-check-input  @error('drying_method') is-invalid @enderror" type="radio" name="drying_method"
                                           value="{{$dm->id}}" id="drying_method">
                                    <label class="form-check-label" for="drying_method">
                                        {{ $dm->method_name }}
                                    </label>
                                </div>
                            @endforeach

                        </div>
                        <div class="form-group">
                            <label for="twitter">4. Treatment :</label>

                            @foreach($data['treatment'] as $ts)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="treatment"
                                           value="{{$ts->id}}" id="treatment">
                                    <label class="form-check-label" for="treatment">
                                        {{ $ts->treatment_name }}
                                    </label>
                                </div>
                            @endforeach
                        </div>

                        <div class="form-group">
                            <label for="">5. Dimensions</label>
                            <div class="col-5">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="thickness">Thickness</span>
                                    </div>
                                    <input type="text" class="form-control  @error('thickness') is-invalid @enderror" id="thickness"
                                           aria-describedby="thickness" name="thickness">
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="width">Width</span>
                                    </div>
                                    <input type="text" class="form-control @error('width') is-invalid @enderror" id="width" name="width"
                                           aria-describedby="width">
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="length">Length</span>
                                    </div>
                                    <input type="text" class="form-control @error('length') is-invalid @enderror" id="length"
                                           aria-describedby="length" name="length">
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

<script>


</script>
