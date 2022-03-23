@extends('layouts.masterLayouts')

@section('content')
<div class="main">
      <div class="shop_top">
		<div class="container">
			<div class="row shop_box-top">
				@foreach($Products as $p)
				<div class="col-md-3 shop_box"><a href="single.html">
					<img src="assets/images/{{$p -> picture}}" class="img-responsive" alt=""/>
					<span class="new-box">
						<span class="new-label">New</span>
					</span>
					<span class="sale-box">
						<span class="sale-label">Sale!</span>
					</span>
					<div class="shop_desc">
						<h3><a href="#">{{$p -> productName}}</a></h3>
						<p>{{$p -> detailProduct}}</p>
						<span class="reducedfrom">$66.00</span>
						<span class="actual">{{$p -> price}}</span><br>
						<ul class="buttons">
							<li class="cart"><a href="#">Add To Cart</a></li>
							<li class="shop_btn"><a href="#">Read More</a></li>
							<div class="clear"> </div>
					    </ul>
				    </div>
				</a></div>
				@endforeach
			</div>
		 </div>
	   </div>
	  </div>
	  @endsection