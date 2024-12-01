<!doctype html>
<html>
    @if ($errors->any()) 
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>    
        </div>
    @endif
    <form action="{{ Route('bookStore') }}" method="post">
        @csrf
        <div>
            <label for="title">Название</label>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label for="author">Автор</label>
            <input type="text" name="author" id="author">
        </div>
        <div>
            <label for="genre">Жанр</label>    
            <select name="genre" id="genre">
                <option value="fantasy">Фэнтези</option>
                <option value="sci-fi">Научная фантастика</option>
                <option value="mystery">Мистика</option>
                <option value="drama">Драма</option>
            </select>
            <button type="submit">Отправить</button>
        </div>      
    </form>
</html>    