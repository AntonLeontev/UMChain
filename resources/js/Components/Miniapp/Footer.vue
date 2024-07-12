<script setup></script>

<template>
  <footer class="footer-mini">
    <div class="footer-mini__container">
      <div class="panel">
        <RouterLink
          :to="{ name: 'miniapp.game' }"
          activeClass="_active"
          class="panel__btn"
        >
          <img src="/resources/images/miniapp/icons/footer/game.svg" alt="Image" />
          Game
        </RouterLink>
        <RouterLink
          :to="{ name: 'miniapp.meal' }"
          activeClass="_active"
          class="panel__btn"
        >
          <img src="/resources/images/miniapp/icons/footer/meal.svg" alt="Image" />
          Meal
        </RouterLink>
        <button href="" class="panel__btn">
          <img src="/resources/images/miniapp/icons/footer/sport.svg" alt="Image" />
          Sport
        </button>
        <button href="" class="panel__btn">
          <img src="/resources/images/miniapp/icons/footer/shop.svg" alt="Image" />
          Shop
        </button>
        <button href="" class="panel__btn">
          <img src="/resources/images/miniapp/icons/footer/blockchain.svg" alt="Image" />
          Blockchain
        </button>
      </div>
    </div>
  </footer>
</template>
