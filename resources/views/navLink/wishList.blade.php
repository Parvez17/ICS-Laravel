@extends('mainLayout')
@section('content')
@include('navLink.carousel')
<br>
<br>
<div class="container">
    <h1>My Wishlist</h1><table class="table table-dark">
        <thead>
          <tr>
            <th  scope="col">Product Name</th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row"></th>
            <td>No Product in Wishlist</td>
            <td></td>
          </tr>
        </tbody>
      </table>

</div>
@include('home.subscribe')
<br>
<br>
@endsection
<b></b>