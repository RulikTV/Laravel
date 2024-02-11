<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

</head>
<body>
@yield('content')
@vite(['resources/css/app.css', 'resources/js/app.js'])
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
<script>
    $(document).ready(function() {
        $('.mobile').inputmask('+7(999)-999-9999');
    });
    // Пример стартового JavaScript для отключения отправки форм при наличии недопустимых полей
    (function () {
        'use strict'

        // Получите все формы, к которым мы хотим применить пользовательские стили проверки Bootstrap
        var forms = document.querySelectorAll('.needs-validation')

        // Зацикливайтесь на них и предотвращайте отправку
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>
</body>
</html>
