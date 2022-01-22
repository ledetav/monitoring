<template>
    <div>
        <div class="app-content-header">
            <h3 class="app-content-largeText">Данные профиля пользователя</h3>
        </div>
    <div class="paragraf">
        <p>
            Здесь находится вся основная информация о пользователе. Изменить информацию можно по кнопке "Редактировать профиль".
        </p>
    </div>
    <hr>
    <div>
        <ul class="profile-list">
            <li class="profile-list-item">
                <p>ID пользователя: </p> <span>ID</span>
            </li>
            <li class="profile-list-item">
                <p>Имя пользователя: </p> <span>NAME</span>
            </li>
            <li class="profile-list-item">
                <p>Роль в системе: </p> <span>RULE</span>
            </li>
        </ul>
        <button class="dashboard-btn register">Редактировать профиль</button>
    </div>
    </div>
</template>