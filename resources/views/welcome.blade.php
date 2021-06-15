@extends('layouts.app')


@section('content')
    <div class="container">
       @if(\Illuminate\Support\Facades\Session::has('roleDenied'))
            <div class="alert alert-danger text-center" role="alert">
                {{ \Illuminate\Support\Facades\Session::get('roleDenied') }}
            </div>
           @endif

        <div class="content">
            <div class="left-bar">
                    <div class="card-header text-center">
                        Новости
                    </div>
                   @foreach([1,1,1,1,1,1,1,1,1,1] as $arr)
                    <div class="mt-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="news-card">
                                        <h5 class="card-title">Special title treatment</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.With supporting text below as a natural lead-in to additional content.</p>
                                        <a href="#" class="btn btn-primary news-link">Подробнее</a>
                                    </div>
                                    <img class="news-img" src="https://img.championat.com/s/735x490/news/big/u/j/evro-2020-tretij-den_16236168741468622767.jpg" alt="" style="width: 30%">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="right-bar">
                    <div class="card-header text-center">
                        Сортировать
                    </div>

                <div class="form-group mt-3 filter-form" >
                    <label for="" >Категория</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="news_all" checked>
                        <label class="form-check-label" for="news_all">
                            Показывать все
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="news_sport">
                        <label class="form-check-label" for="news_sport">
                            Новости спорта
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="0" id="news_science">
                        <label class="form-check-label" for="news_science">
                            Новости науки
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="0" id="news_politics">
                        <label class="form-check-label" for="news_politics">
                            Политические новости
                        </label>
                    </div>
                </div>
                <hr>
                <div class="form-group mt-3 filter-form">
                    <label for="view-only" >Сортировать</label>
                    <select class="form-select" id="view-only" aria-label="Выберите порядок сортировки" name="view" style="width: 95%">
                        <option selected>Выберите порядок сортировки</option>
                        <option value="popular">Популярные</option>
                        <option value="new-old">От новых к старым</option>
                        <option value="old-new">От старых к новым</option>
                    </select>
                </div>

                <hr>

                <input type="submit" class="btn btn-secondary w-100" value="Применить" >

            </div>
        </div>
    </div>


    <style>
        .news-card{
            width: 70%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .news-link{
            width: 25%;
        }
        .content{
            display: flex;
            justify-content: space-between;
        }
        .left-bar{
            width: 75%
        }
        .right-bar{
            width: 20%;
        }
        .filter-form{
            padding: 0 10px
        }
        @media screen and (max-width: 992px) {
            .right-bar{
                display: none;
            }
            .left-bar{
                width: 100%;
            }
        }
        @media screen and (max-width: 768px){
            .news-img{
                display: none;
            }
            .news-card{
                width: 100%;
            }
            .news-link{
                width: 100%;
            }
        }
    </style>
@endsection
