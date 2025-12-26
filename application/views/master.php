<div class="container"><br>
    <div class="row">
        <h3 class="text-center" style="color: red;">Личный кабинет Мастера!</h3><br><br>
         <br><br>
         <h5 class="text-center" style="color: red;">Список записавшихся клиентов</h5><br><br>
         <div class="card">
      <table class="table">
  <thead class="table-danger">
    <tr>
      <th scope="col">№</th>
      <th scope="col">Имя клиента</th>
      <th scope="col">дата</th>
      <th scope="col">время</th>
    </tr>
  </thead>
  <tbody>
   <?php  
foreach($record as $row){
              echo'<tr>
        <td>'.$row['id_record'].'</td>
        <td>'.$row['fio'].'</td>
        <td>'.$row['data'].'</td>
        <td>'.$row['time'].'</td></tr>';}
   ?>
  </tbody>
</table>
         </div>
            


    </div>
</div><br><br>