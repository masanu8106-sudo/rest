<div class="container"><br>
    <div class="row">
        <h3 class="text-center" style="color: red;">Заявка на приём</h3>
        <div class="card">
            <form class="row g-3" action="<?= site_url('client/zakaz') ?>" method="post">
                
                <!-- Мастер -->
                <div class="col-md-4">
                    <label for="id_masters" class="form-label">Выберите мастера</label>
                    <select class="form-select" name="id_masters" id="id_masters" required>
                        <option value="">-- Выберите мастера --</option>
                        <?php foreach ($masters as $master): ?>
                            <option value="<?= $master['id_masters'] ?>"><?= $master['fio'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <!-- Дата -->
                <div class="col-md-4">
                    <label for="data" class="form-label">Дата</label>
                    <input type="date" class="form-control" id="data" name="data" required>
                </div>

                <!-- Время -->
                <div class="col-md-4">
                    <label for="time" class="form-label">Время</label>
                    <input type="time" class="form-control" id="time" name="time" required>
                </div>

                <!-- Услуга -->
                <div class="col-md-4">
                    <label for="id_services" class="form-label">Выберите услугу</label>
                    <select class="form-select" name="id_services" id="id_services" required>
                        <option value="">-- Выберите услугу --</option>
                        <?php foreach ($services as $service): ?>
                            <option value="<?= $service['id_services'] ?>"><?= $service['name_services'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <!-- Кнопка -->
                <div class="col-12">
                    <button class="btn btn-danger" type="submit">Записаться</button>
                </div>
            </form><br>
        </div>
    </div>
</div>