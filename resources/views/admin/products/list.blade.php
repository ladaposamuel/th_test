@extends('admin.master')


@section('contents')
    <div class="row">

        <!-- Area Chart -->
        <div class="col-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Product List</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Product Code</th>
                            <th>Specie</th>
                            <th>Grade</th>
                            <th>Drying Method</th>
                            <th>Treatment</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>S/N</th>
                            <th>Product Code</th>
                            <th>Specie</th>
                            <th>Grade</th>
                            <th>Drying Method</th>
                            <th>Treatment</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @php $i = 1 @endphp
                        @foreach($data['products'] as $pd)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td><a href="#." class="text-primary">{{ $pd->product->product_code }}</a></td>
                            <td>{{ $pd->specie->specie_name }}</td>
                            <td>{{ $pd->grade->getGradeName() }}/{{ $pd->grade->getGradeNameOption() }}</td>
                            <td>{{ $pd->dryMethod->method_name }}</td>
                            <td>{{ $pd->treatement->treatment_name ?? '' }}</td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>


    </div>




@endsection
