<div class="container"><br>
    <div class="row">
        <h3 style="color: red;">Личный кабинет Админестратора!</h3><br>
<br><br>
        <div class="card">
         <h3 class="text-center" style="color: red;;">Журнала предварительной записи</h3><br>
         <table class="table">
  <thead class="table-danger">
    <tr>
      <th scope="col">№</th>
      <th scope="col">Фамилия мастера</th>
      <th scope="col">Имя клиента</th>
      <th scope="col">дата</th>
      <th scope="col">время</th>
      <th scope="col">Наименование услуги</th>
      <th scope="col">Статус</th>
    </tr>
  </thead>
  <tbody>
   <?php  
   foreach($record as $row){
                echo'<tr>
        <td>'.$row['id_record'].'</td>
        <td>'.$row['id_masters'].'</td>
        <td>'.$row['id_users'].'</td>
        <td>'.$row['data'].'</td>
        <td>'.$row['time'].'</td>
        <td>'.$row['id_services'].'</td>
        <td>'.$row['statys'].'</td></tr>';}
   ?>
  </tbody>
</table>
        </div><br><br>









</div><br><br>


