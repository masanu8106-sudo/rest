<div class="container"><br>
    <div class="row">
        <h3 class="text-center" style="color: red;">Регистрация</h3>
        <div class="card">
            <form method="post" action="main/reg_db">
               <div class="mb-3">
                 <label for="Input1" class="form-label">Ваше ФИО:</label>
                 <input type="text" class="form-control" id="fio" name="fio">
              </div>
               <div class="mb-3">
                 <label for="phone" class="form-label">Ваш номер телефона:</label>
                 <input type="text" class="form-control" id="phone" name="phone">
              </div>
              <div class="mb-3">
                 <label for="Input2" class="form-label">Ваш адрес электронной почты:</label>
                 <input type="email" class="form-control" id="email" name="email">
             </div>
               <div class="mb-3">
                 <label for="Input3" class="form-label">Придумайте Ваш логин:</label>
                 <input type="text" class="form-control" id="login" name="login">
              </div>
              <div class="mb-3">
                 <label for="Input4" class="form-label">Приумайте Ваш пароль:</label>
                 <input type="password" class="form-control" id="password" name="password">
              </div>    
               <br>
              <button type="submit" class="btn btn-danger">Зарегистрироваться</button>
            </form> <br>   
        </div>          
    </div>
</div>