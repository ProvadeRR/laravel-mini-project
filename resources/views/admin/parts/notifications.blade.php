<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">События на проекте</h3>

                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Имя & Фамилия</th>
                        <th>Почта</th>
                        <th>Сообщение</th>
                        <th>Дата</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($notifications as $notificate)
                        <tr>
                            <td>{{ $notificate->data['id'] }}</td>
                            <td>{{ $notificate->data['name_surname'] }}</td>
                            <td>{{ $notificate->data['email'] }}</td>
                            <td><span class="tag tag-warning">{{ $notificate->data['message'] }}</span></td>
                            <td><span class="tag tag-warning">{{ $notificate->data['time'] }}</span></td>
                        <tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
