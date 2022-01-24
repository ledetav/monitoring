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
                <select class="select-form" name="user" required v-model="selectedUser">
                    <option class="list-item" disabled selected value="">Выберите пользователя</option>
                    <option class="list-item"
                        v-for="user in users"
                        v-bind:key="user.id"
                        v-bind:value="user.id"
                    >
                        {{user.name}}
                    </option>
                </select>
            </div>
            <div>
                <p>Выберите права доступа: </p>
                <select class="select-form" name="user" required v-model="selectedRule">
                    <option class="list-item" disabled selected value="">Выберите права </option>
                    <option class="list-item" value="1">Администратор</option>
                    <option class="list-item" value="0">Пользователь</option>
                </select>
            </div>
        </div>
        <button class="dashboard-btn register" style="top: 40px;" @submit.prevent="submit">Изменить права пользователя</button>
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
                        v-bind:vlue="id"
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
            selectedUser: '',
            selectedRule: '',
            users: [],
          stations: []
        }
    },
    methods: {
        submit(){
            axios.post('/api/v1/users'+'\/'+this.selectedUser, {
                rule: this.selectedRule,
                _method: 'PUT'
            }).then(function (response) {
                console.log(response);
            })
            .then(response => {
                this.rule = response.data.data.rule
            })
        },
        
    },
    mounted() {
        axios.get('/api/v1/users')
            .then(response => {
                this.users = response.data.data
        })
        .catch(error => {
            console.log(error)
         })
        axios.get('/api/v1/stations')
            .then(response => {
                this.stations = response.data.data
         })
        .catch(error => {
            console.log(error)
        })
    },
}
</script>