@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">


        <a href="{{route('admin.books.create')}}"  class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i> Создать книгу</a>
        <table class="table table-striped">
            <thead>
            <th>id</th>
            <th>Наименование</th>
            <th>Автор</th>
            <th>Издание</th>
            <th>Публикация</th>
            <th class="text-right">Действие</th>
            </thead>
            <tbody>
            @forelse ($books as $book)
                <tr>
                    <td class="id">{{$book->id}}</td>
                    <td>{{$book->title}}</td>
                    <td>{{$book->autor}}</td>
                    <td>{{$book->publishment}}</td>
                    <td>{{$book->date}}</td>

                    <td class="text-right">
                        <form id="formDeleteProduct" onsubmit="if(confirm('Удалить?')){return true}else{return false}"  action="{{route('admin.books.destroy',$book)}}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            {{csrf_field()}}
                            <button type="button" onclick="deleteItem({{ $book->id }})" id="Reco" class="btn btn-danger">Delete</button>
                        </form>

                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center"><h2>Данные отсутствуют</h2></td>
                </tr>
            @endforelse
            </tbody>
            <tfoot>
            <tr>
                <td colspan="3">
                    <ul class="pagination pull-right">

                    </ul>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>

    <script>
        function deleteItem(id) {


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });



            $.ajax({
                type: "delete",
                url: '/public/admin/books/'+id,

                success: function(result) {
                    alert('vvhvh');
                    console.log(result);
                }
            });

            var delstr =$(".id");
            for(var i=0; i<=delstr.length; i++) {

                if(delstr[i].innerHTML == id){
                    delstr[i].parentElement.remove();
                }

            }
        }
    </script>

@endsection

@section('script')



    @endsection
