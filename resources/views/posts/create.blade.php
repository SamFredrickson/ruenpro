@extends('layouts.app')

@section('content')
<div class="container min-h">
    <div class="row flex-column-reverse flex-md-row">
        @guest
        <div class="col-md-12">
            <div>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Внимание!</strong> Чтобы оставить свой перевод необходимо <a href="/login" class="text-dark underline"><u>авторизироваться.</u></a>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
            </div>
        </div>
        @endguest
        <div class="col-md-8">
            <div>
                <form action="/post" method="post" enctype="multipart/form-data">
                  @csrf
                  <h2>Добавление перевода</h2>

                  <div class="form-group">
                     <label for="title">Заголовок (на русском)</label>
                     <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Заголовок" required autocomplete="title">

                     @error('title')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                    @enderror

                  </div>

                  <div class="form-group">
                     <label for="subtitle">Подзаголовок (на русском)</label>
                     <input type="text" name="subtitle" class="form-control @error('subtitle') is-invalid @enderror" id="subtitle" placeholder="Подзаголовок" required autocomplete="subtitle">

                     @error('subtitle')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                    @enderror
                    
                  </div>

                  <div class="form-group">
                     <label for="image">Картинка ( по тематике )</label>
                     <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image" placeholder="Картинка" required autocomplete="image">

                     @error('image')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                    @enderror
                    
                  </div>

                  <div class="form-group">
                     <label for="initial">Исходный текст</label>
                     <textarea class="form-control @error('initial') is-invalid @enderror" name="initial" id="initial" placeholder="Исходный перевод" rows="5" required autocomplete="initial"></textarea>

                     @error('initial')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                    @enderror
                    
                  </div>

                  <div class="form-group">
                     <label for="done">Переведенный текст</label>
                     <textarea name="done" class="form-control @error('done') is-invalid @enderror" id="done" placeholder="Конечный перевод" rows="5" required autocomplete="done"></textarea>

                     @error('done')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                    @enderror
                    
                  </div>
                  <button type="submit" class="btn float-right btn-lg w-50 btn-success">
                     Добавить
                  </button>
               </form>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="sticky-top" style="top: 10px;">
                <form class="form-group mb-2 d-flex flex-column" enctype="multipart/form-data" method="POST" action="/search">
                    @csrf
                    <input class="form-control mr-sm-2 col-md-12 mb-2" name="search" style="height: 40px;" type="search" placeholder="Что ищем?" aria-label="Search">
                    <button class="btn btn-outline-info" type="submit">Поиск</button>
                </form>
                    <h4 class="text-center text-underline p-1">
                        Недавние переводы
                    </h4>
                    <div class="card shadow-sm">
                        <img src="https://static.scientificamerican.com/sciam/cache/file/4E0744CD-793A-4EF8-B550B54F7F2C4406.jpg" alt="" src="" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text text-muted mb-1">
                                10.08.2020 г.
                            </p>
                            <h5 class="card-title font-weight-bold">
                                Мать некита увезли на носилках
                            </h5>
                            <h6 class="card-subtitle text-muted mb-1">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem tempora fugiat beatae debitis corporis dignissimos! Beatae eum illo veritatis suscipit accusamus voluptatibus nemo eaque consequatur laudantium temporibus? Officia, vel ut?
                            </h6>
                            <p class="card-text">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. At, enim.
                            </p>
                            <a class="btn btn-primary float-right" href="#">Подробнее...</a>   
                            <p class="card-text pt-2">
                                <i class="fa fa-eye" style="font-size: 16px;"></i>
                                <span>12</span>
                                <i class="fa fa-comments pl-2"></i>
                                <span>15</span>
                            </p>                       
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

