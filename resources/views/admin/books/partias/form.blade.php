

<label for="">Название книги</label>
<input type="text" class="form-control" name="title" placeholder="название книги" value="{{$article->title or ""}}" required>



<label for="">Автор</label>

<input class="form-control" id="autor_name" name="autor" value="" required>

<label for="">Издательство</label>
<input class="form-control" id="publishment" name="publishment" value=""required>

<label for="">Публикация</label>
<input class="form-control" id="publishment" name="date" value="" required>

<hr />


<input class="btn btn-primary" type="submit" value="Сохранить">