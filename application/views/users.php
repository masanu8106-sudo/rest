<div class="container"><br>
    <div class="row">
        <h3 class="text-center" style="color: red;">Добро пожаловать в Ваш "Личный кабинет"!</h3><br>
        <div class="card">
        <h3 class="text-center" style="color: red;">Ваши заявки:</h3><br>
       <table class="table">
  <thead class="table-danger">
    <tr>
      <th scope="col">№</th>
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
        <td>'.$row['data'].'</td>
        <td>'.$row['time'].'</td>
        <td>'.$row['name_services'].'</td>
        <td>'.$row['statys'].'</td></tr>';}
   ?>
  </tbody>
</table>
</table>
        </div><br>
      

    </div>
</div>