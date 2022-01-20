<template>
    <div class="sidebar">
      <div class="sidebar-header">
        <div class="app-icon">
          <font-awesome-icon icon="fa-solid fa-bolt" />
        </div>
      </div>
      <ul class="sidebar-list">
        <li class="sidebar-list-item">
          <router-link :to="{ path: '/admindashboard/rules' }" v-bind:class="[{ active: isActive }, isExactActive ]" >
            <font-awesome-icon icon="fa-solid fa-users-gear fa-xl" />
            <span>Пользователи и станции</span>
          </router-link>
        </li>

        <li class="sidebar-list-item">
          <router-link :to="{ path: '/admindashboard' }" v-bind:class="[{ active: isActive}, isExactActive ]" exact>
            <font-awesome-icon icon="fa-solid fa-industry fa-xl" />
            <span>Станции</span>
          </router-link>
        </li>

        <li class="sidebar-list-item">
          <router-link :to="{ path: '/admindashboard/profile' }" v-bind:class="[{ active: isActive }, isExactActive ]">
            <font-awesome-icon icon="fa-solid fa-circle-user fa-xl" />
            <span>Профиль</span>
          </router-link>
        </li>
      </ul>
    </div>
</template>