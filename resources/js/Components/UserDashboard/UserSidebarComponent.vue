<template>
    <div class="sidebar">
      <div class="sidebar-header">
        <div class="app-icon">
          <font-awesome-icon icon="fa-solid fa-bolt" />
        </div>
      </div>
      <ul class="sidebar-list">
        <li class="sidebar-list-item">
          <router-link :to="{ path: '/userdashboard' }" exact>
            <font-awesome-icon icon="fa-solid fa-industry fa-xl" />
            <span>Станции</span>
          </router-link>
        </li>

      </ul>
    </div>
</template>