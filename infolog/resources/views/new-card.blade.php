<div class="col-12 col-md-6 col-lg-6">
         <div class="card mb-4 text-white bg-dark">
            <img class="card-img-top" size:'10px' src="{{ $new->imageUrl }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{ $new->title }}</h5>
               {{-- <p class="card-text">{{ $new->abstract }}</p> --}}
               <a href="{{ route('noticiaunica', ['newSlug' => $new->slug]) }}" class="btn btn-outline-light btn-sm">Leer más</a>
            </div>
         </div>
      </div>
