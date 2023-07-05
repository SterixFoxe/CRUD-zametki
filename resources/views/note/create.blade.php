<div class="main">
    <a href="http://127.0.0.1:8000/notes/">
        <h1>Создание заметки</h1>
    </a>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery.js') }}"></script>

    <div class="content">
    <input  placeholder="Название заметки" type="text" id="name" name="name" value="" required><br>
    <br>
    <input placeholder="Описание заметки" type="text" id="description" name="description" value="" required><br><br>
    <button onclick="save_note()" class="btn create">Сохранить</button>
    </div>
</div>
<script>
    function save_note(){
        console.log($('#name').val())
        $.ajax({
            url: `http://127.0.0.1:8000/api/notes`,
            contentType: 'application/json',
            type: 'post',
            dataType: 'json',

            data: JSON.stringify({
                 "name": $('#name').val(), "description": $('#description').val(), "done": false
             }),
            success: function (data) {
                window.location.replace("http://127.0.0.1:8000/notes");
            },
            error: function(){
                alert('Ошибка');
            }
        });
    }

</script>
