 @extends('layouts.master')
@section('sidebarmenu')
    @include('normaluser.sidebarmenu')
@endsection
 @section('content')
<div class="container">
    <div class="row">
        <div class="col-12 ">
             <div class="card mt-4">
                <div class="card-body text-left">
                    <h5 class="card-header text-center">table</h5>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th rowspan="2">ተቁ.</th>
                                    <th rowspan="2">የእቃው ዝርዝር</th>
                                    <th rowspan="2">ፒን</th>
                                    <th rowspan="2">የፋብሪካ ቁጥር</th>
                                    <th colspan="2">FAIRR ማውጫ ሠነድ</th>
                                    <th rowspan="2">መለኪያ</th>
                                    <th rowspan="2">ብዛት</th>
                                    <th rowspan="2">ጠ/ዋጋ</th>
                                </tr>
                                <tr>
                                    <td>No.</td>
                                    <td>Date</td>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection