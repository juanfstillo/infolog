<div class="col-12 col-md-6 col-lg-6 p-2">

<div class="card p-2">
	<div class="card-body">
	  <div class="row">
  		<div class="col-md-6">
				<img class="card-img-top" style="width:250px" src="{{$new->imageUrl}}" alt="{{ $new->title }}">
  			<h4 class="card-title">{{ $new->title }}</h5>
  		</div>
			<div class="col-md-6 ">
				<p>{{ $new->abstract }}</p>
			</div>

			</button>
  		<div class="col-md-6 ml-auto">
				<a href="{{ route('noticiaunica', ['newSlug' => $new->slug]) }}" class="btn btn-outline-dark btn-sm">Leer más</a>

		</div>
	  </div>
	</div>
</div>

</div>
