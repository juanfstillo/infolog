@extends('layout')
@section('title')
  NUESTRO CLIENTE | INFOLOG ARGENTINA
@endsection

@section('main')
  <style >
  /*
*
* ==========================================
* CUSTOM UTIL CLASSES
* ==========================================
*
*/
.animated-btn {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  line-height: 80px;
  display: inline-block;
  text-align: center;
  background: #ff3f3f;
  position: relative;
}

.animated-btn::before, .animated-btn::after {
  content: '';
  display: block;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  border-radius: 50%;
  background: rgba(255, 63, 63, 0.8);
  animation: ripple-1 2s infinite ease-in-out;
  z-index: -1;
}


@keyframes ripple-1 {
  0% {
      transform: scale(1);
      opacity: 1;
  }

  100% {
      transform: scale(1.5);
      opacity: 0;
  }
}

@keyframes ripple-2 {
  0% {
      transform: scale(1);
      opacity: 1;
  }

  100% {
      transform: scale(1.7);
      opacity: 0;
  }
}

/*
*
* ==========================================
* FOR DEMO PURPOSE
* ==========================================
*
*/
body {
  background: white;
}
  </style>
  <section class="pb-5 header text-center">
    <div class="pt-5">
      <h4> Nuestro Cliente</h2>
    </div>
      <div class="container py-5 text-white">
        <div class="text-center">
          <img src="/images/logo-ypf.jpg" class="rounded" alt="ypf-logo">
        </div>
         <p class="text-dark font-italic mb-1">Los Objetivos de Infolog S.R.L. están íntimamente relacionados con su política de calidad. Ésta se orienta a satisfacer permanentemente las necesidades y expectativas de YPF, su cliente.</p>

      </div>


      <div class="text-center">
        <a href="https://www.ypf.com/Paginas/home.aspx" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Conocé más</a>
      </div>

  </section>
@endsection
