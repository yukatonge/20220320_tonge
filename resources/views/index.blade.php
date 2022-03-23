<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
   <div class="container">
     <div class="card">
       <p class="title">Todo List</p>
       </ul>
       <div class="todo">
         <form action="/todo/create" method="post">
           @csrf
           <input type="text" class="input-add" name="content" />
           <input class="button-add" type="submit" value='追加' />
         </form>
         <table>
           <tr>
             <th>作成日</th>
             <th>タスク名</th>
             <th>更新<th>
             <th>削除</th>
           </tr>
           @foreach($items as $item)
           <tr>
             <td>
               {{ $item->created_at }}
             </td>
             <form action="{{ route('todoexe.update', ['id' => $item->id]) }}" method="post">
               @csrf
               <td>
                 <input type="text" class="input-update" value="{{ $item->content }}" name="content" />
               </td>
               <td>
                 <button>更新</button>
               </td>
             </form>
             <td>
              <form action="{{ route('todoexe.delete', ['id' =>$item->id]) }}" method="post">
                @csrf
                <td>
                  <button>削除</button>
                </td>
              </form> 
             </td>
           </tr>
           @endforeach
         </table>
       </div>
     </div>
   </div>
  
</body>
</html>