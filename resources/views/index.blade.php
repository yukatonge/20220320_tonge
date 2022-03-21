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
       <ul>
         @foreach ($items as $item)
         <tr>
           <td>
             {{ $item->created_at}}
           </td>
         </tr>
         @endforeach
       </ul>
       <div class="todo">
         <form action="/todo/create" method="post">
           @csrf
           <input type="text" name="content">
           <input type="submit">
         </form>
       </div>
     </div>
   </div>
  
</body>
</html>