@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Feedback Form</div>
                    <div class="card-body">
                        <form class="row g-3 needs-validation" novalidate>
                            @csrf
                            <div class="col-md-2 form-group">
                                <label for="name">Имя</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Введите имя" required>
                                <div class="valid-feedback">
                                    Все хорошо!
                                </div>
                            </div><br>
                            <div class="col-md-6 form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Введите E-mail" required>
                            </div><br>
                            <div class="col-md-4 form-group">
                                <label for="phone">Телефон</label>
                                <input type="text" class="mobile form-control" id="mobile" name="mobile" placeholder="Введите номер" required>
                            </div><br>
                            <div>
                                <input type="file" class="form-control" id="file" name="file" aria-label="file example" required>
                                <div class="invalid-feedback">Прикрепите файл</div>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                    <label class="form-check-label" for="invalidCheck">
                                        Примите условия и соглашения
                                    </label>
                                    <div class="invalid-feedback">
                                        Вы должны принять перед отправкой.
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Отправить форму</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
