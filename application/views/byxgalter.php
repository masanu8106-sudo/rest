t<div class="container"><br>
    <div class="row">
        <h3 class="text-center" style="color: red;">Личный кабинет Бухгалтера!</h3><br><br>
        <div class="card"><br>

        </div><br><br>
        <div class="card"><br>
        <h4 class="text-center" style="color: red;">Отчет о работе специалиста мастера</h4><br>
      <table class="table">
  <thead class="table-danger">
    <tr>
      <th scope="col">№ талонат</th>
      <th scope="col">Дата</th>
      <th scope="col">Время</th>
      <th scope="col">Наименование услуги</th>
      <th scope="col">сумма</th>
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
        <td>'.$row['price'].'</td></tr>';}
   ?>
  </tbody>
</table>
        </div><br><br>
        <div class="card"><br>
        <h4 class="text-center" style="color: red;">Сводный отчет об объемах оказанных услуг</h4><br>
      <table class="table">
  <thead class="table-danger">
    <tr>
      <th scope="col">№ талонат</th>
      <th scope="col">Наименование услуги</th>
      <th scope="col">Кол-во оказанных услуг</th>
      <th scope="col">Сумма</th>
    </tr>
  </thead>
  <tbody>
   <?php  
foreach($record as $row){
                echo'<tr>
        <td>'.$row['id_record'].'</td>
        <td>'.$row['name_services'].'</td>
        <td>'.$row['id_users'].'</td>
        <td>'.$row['price'].'</td></tr>';}
   ?>
  </tbody>
  
</table>


    
        </div>         <br><br>
    </div>
</div><br><br>