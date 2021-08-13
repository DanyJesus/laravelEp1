<h1>Lista de Usuário</h1>
<p>O nome do usuário é {{$userList->name}}  e eçe tem o email {{$userList->email}}</p>


<table style="width:100%">
    <tr>
      <th>Nome</th>
      <th>Email</th> 
      <th>Senha</th>
    </tr>
    <tr>
      <td>{{$userList->name}}</td>
      <td>{{$userList->email}}</td>
      <td>{{$userList->password}}</td>
    </tr>
  
  </table>