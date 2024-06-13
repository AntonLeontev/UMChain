<template>
  <header class="header">
    <div class="header__container">
      <a href="/" class="header__logo logo"
        ><img src="/resources/images/logo.svg" alt="Logo"
      /></a>
      <!-- menu-active -> add class menu_active. Example: <div class="header__menu menu menu_active"> -->
      <div class="header__menu menu">
        <button type="button" class="menu__icon icon-menu"><span></span></button>
        <nav class="menu__body">
          <ul class="menu__list">
            <li class="menu__item"><a href="#" class="menu__link">Функции</a></li>
            <li class="menu__item">
              <a href="#" class="menu__link">Экосистема</a>
            </li>
            <li class="menu__item">
              <a href="#" class="menu__link">
                <a class="button" href="">Присоединиться</a>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
</template>
