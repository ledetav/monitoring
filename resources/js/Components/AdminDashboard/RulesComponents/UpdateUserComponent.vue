<template>
<div>
    <div class="app-content-header">
        <h3 class="app-content-largeText">Права пользователей</h3>
    </div>
    <div class="paragraf">
        <p>
            Пользователю в системе имеют различные права доступа: на этой вкладке его можно сделать <b>администратором системы</b> с полным комплектом прав или же <b>открыть ему доступ</b> к закрытым электростанциям.
        </p>
    </div>
    <hr>
    <h3 class="app-content-largeText">Назначение администратором</h3>
    <div class="paragraf">
        <p>
            Повторное назначение прав администратора <b>снимет</b> с пользователя эти права.
        </p>
    </div>
    <div class="form-group">
        <div style="display: flex; justify-content:space-evenly; margin-top: 40px;">
            <div>
                <p>Выберите пользователя: </p>
                <select class="select-form" name="user" required>
                    <option class="list-item" disabled selected>Выберите пользователя</option>
                    <option class="list-item"
                        v-for="(user, id) in users"
                        v-bind:key="id"
                    >
                        {{user.name}}
                    </option>
                </select>
            </div>
            <div>
                <p>Выберите права доступа: </p>
                <select class="select-form" name="user" required>
                    <option class="list-item" disabled selected>Выберите права </option>
                    <option class="list-item" value="admin">Администратор</option>
                    <option class="list-item" value="user">Пользователь</option>
                </select>
            </div>
        </div>
        <button class="dashboard-btn register" style="top: 40px;">Изменить права пользователя</button>
    </div>
    <hr>
    <h3 class="app-content-largeText">Права на просмотр данных станций</h3>
    <div class="paragraf">
        <p>
            Повторное назначение прав на станцию, к которой у пользователя есть права, <b>снимет</b> с него эти права.
        </p>
    </div>
    <div class="form-group">
        <div style="display: flex; justify-content:space-evenly; margin-top: 40px;">
            <div>
                <p>Выберите пользователя: </p>
                <select class="select-form" name="user" required>
                    <option class="list-item" disabled selected>Выберите пользователя</option>
                    <option class="list-item"
                        v-for="(user, id) in users"
                        v-bind:key="id"
                    >
                        {{user.name}}
                    </option>
                </select>
            </div>
            <div>
                <p>Выберите станцию: </p>
                <select class="select-form" name="user" required>
                    <option class="list-item" disabled selected>Выберите станцию</option>
                    <option class="list-item" 
                        v-for="(station, id) in stations"
                        v-bind:key="id"
                    >
                        {{station.key}}
                    </option>
                </select>
            </div>
        </div>
        <button class="dashboard-btn register" style="top: 40px;">Изменить права пользователя</button>
    </div>
</div>
</template>
<script>
export default {
  data: function () {
        return {
            users: [{
              id: "1",
              name: "85937q89",
              password: "eiofui84",
              rule: "администратор",
            }, 
            {
              id: "2",
              name: "85649839",
              password: "eiofui84",
              rule: "пользователь",
            }, 
            {
              id: "3",
              name: "839463yyr",
              password: "eiofui84",
              rule: "пользователь",
            }, 
            {
              id: "4",
              name: "9802374hh",
              password: "eiofui84",
              rule: "пользователь",
            }, 
          ],
          stations: [{
              id: "1",
              key: "85937q89",
              created: "22-01-2018",
              updated: "18-09-2021",
            }, 
            {
              id: "2",
              key: "85649839",
              created: "12-08-2018",
              updated: "16-12-2021",
            }, 
            {
              id: "3",
              key: "839463yyr",
              created: "26-03-2019",
              updated: "23-09-2021",
            }, 
            {
              id: "4",
              key: "9802374hh",
              created: "08-06-2020",
              updated: "13-10-2021",
            }, 
          ] 
        }
    }
}
</script>