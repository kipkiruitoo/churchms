
@extends('layouts.app')

@section('title') All Branches @endsection

@section('content')
<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
    <div id="page-head">

        <!--Page Title-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div id="page-title">
            <h1 class="page-header text-overflow">Branch</h1>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->


        <!--Breadcrumb-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <ol class="breadcrumb">
          <li>
              <i class="fa fa-home"></i><a href="{{route('dashboard')}}"> Dashboard</a>
          </li>
            <li class="active">All</li>
        </ol>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End breadcrumb-->

    </div>


    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">



        <!-- Basic Data Tables -->
        <!--===================================================-->
        <div class="panel" style="overflow:scroll">
            <div class="panel-heading">
                <h3 class="panel-title">List of All Branches</h3>
            </div>
            <div class="panel-body">
              <?php // print_r($users); ?>
                <table id="demo-dt-basic" class="table table-striped table-bordered datatable " cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <!--th>Country</th-->
                            <th>Branch Name</th>
                            <th>Address</th>
                            <th class="min-tablet">City</th>
                            <th class="min-tablet">State</th>
                            <th class="min-tablet">Country</th>
                            <th class="min-tablet">Branch Code</th>
                            <th class="min-desktop">Branch Role</th>
                            <th class="min-tablet">Currency</th>
                            <th class="min-desktop">Pastor in Charge</th>
                            <th class="min-desktop">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <!--td><span class="flag-icon flag-icon-ng"></span> </td-->
                            <td>{{$user->branchname}}</td>
                            <td>{{ucwords($user->address)}}</td>
                            <td>{{ucwords($user->city)}}</td>
                            <td>{{ucwords($user->state)}}</td>
                            <td>{{ucwords($user->country)}}</td>
                            <td>{{$user->branchcode}}</td>
                            <td><?php echo $user->isAdmin() ? '<strong>HeadQuaters</strong>' : 'Branch Church'; ?></td>
                            <td>{{$user->currency_symbol}}</td>
                            <td>NULL <!--Mathew Ashimolowo --></td>
                            <td><a href="#" id="{{route('branch.destroy',$user->id)}}" onclick="del(this);" class="btn btn-danger" /><span>delete<i class="fa fa-trash"></i></span></a</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!--===================================================-->
        <!-- End Striped Table -->


    </div>
    <!--===================================================-->
    <!--End page content-->

</div>
<!--===================================================-->
<!--END CONTENT CONTAINER-->
@endsection
