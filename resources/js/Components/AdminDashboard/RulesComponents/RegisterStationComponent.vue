<template>
  <div>
    <div class="app-content-header">
      <h3 class="app-content-largeText">Регистрация станции</h3>
    </div>
  <div class="paragraf">
    <p>Чтобы зарегистрировать новую электростанцию для мониторинга, требуется ввести ее индефикационный номер — <span><b>ключ</b></span></p>
  </div>
    <form method="POST">
      <div class="form_group">
        <font-awesome-icon icon="fa-solid fa-key" class="form_icon" :class="{ 'is-invalid-icon': $v.key.$error }"/>
        <input
          type="input"
          class="form_field form_input"
          :class="{ 'is-invalid-form': $v.key.$error }"
          placeholder="Ключ станции"
          name="key"
          v-model.trim="$v.key.$model"
          @blur="setKey"
          required
          focus
        />
        <div class="validate" v-if="!$v.key.required">
          <p class="validate">
            Это поле является обязательным!
          </p>
        </div>
      </div>
     <button class="dashboard-btn register">Зарегистрировать</button>
    </form>
    <hr>
      <h3 class="app-content-largeText">Список зарегистрированных станций</h3>
      <div class="stations-list tableView">
        <div class="stations-header">
          <div class="stations-item id">
            <span>ID станции</span>
          </div>
          <div class="stations-item key">
            <span>Ключ</span>
          </div>
          <div class="stations-item created-up">
            <span>Дата появления в системе</span>
          </div>
          <div class="stations-item delete">
            <span>Удаление из системы</span>
          </div>
        </div>
        <div class="error" v-if="errors">
          <p>
            Ошибка загрузки данных!
          </p>
        </div>
        <div class="loader" v-if="loading">
          <div class="clock-loader"></div>
        </div>
        <div class="stations-row"  
          v-for="(station, id) in stations"
          v-bind:key="id"
          >
          <div class="stations-item id">
            <span class="station-label">ID станции:</span>
            {{ station.id }}
          </div>
          <div class="stations-item key"> 
            <span class="station-label">Ключ:</span>
            {{ station.key }}
          </div>
          <div class="stations-item created-up"> 
            <span class="station-label">Дата появления в системе:</span>
            {{ station.created_at }}
            </div>
          <div class="stations-item delete">
            <button class="dashboard-btn delete-btn">
              Удалить
              <font-awesome-icon icon="fa-solid fa-trash-can" />
            </button>
          </div>
        </div>
      </div>
  </div>
</template>
<script>

import { required } from 'vuelidate/lib/validators';

export default {
  data: function () {
        return {
          key: '',
          stations: [

          ],
          errors: false,
          loading: true
        }
    },
    methods: {
      setKey() {
        this.$v.$touch()
        if (value === '') return true;
        if(this.$v.$anyError){
          return;
        }
      },
    },
    mounted(){
      axios.get('/api/v1/stations')
      .then(response => {
        this.stations = response.data.data
      })
      .catch(error => {
        console.log(error)
        this.errors = true
      })
      .finally(() => {
        this.loading = false
      })
    },
    validations: {
      key: {
        required
      }
    }
}
</script>