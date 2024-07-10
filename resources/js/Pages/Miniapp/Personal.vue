<script setup>
import MiniappLayout from "@/Layouts/MiniappLayout.vue";
import useUserStore from "@/stores/user";
import ButtonPrimary from "@/Components/Miniapp/ButtonPrimary.vue";

import axios from "axios";
import { ref } from "vue";

const user = useUserStore().user;
const userName = user.name;
const name = ref(userName);
const loader = ref(false);

function update() {
	loader.value = true;

	axios
		.put(route('api.user.update'), { name: name.value })
		.then(resp => user.name = name.value)
		.catch((error) => {
			console.log(error);
		})
		.finally(() => loader.value = false)
}
</script>

<template>
    <MiniappLayout>
        <div class="hero-app">
            <div class="hero-app__container">
                <div class="hero-app__title title-app">Персональные данные</div>
                <div class="hero-app__form form">
                    <div class="form__row">
                        <label
                            for="name"
                            class="input-block__label input-app-label"
                            >Изменить имя</label
                        >
                        <div class="input-block">
                            <input
                                class="input-block__input"
                                id="name"
                                autocomplete="off"
                                type="text"
								v-model="name"
                            />
                            <button class="input-block__button" type="button">
                                <img
                                    src="/resources/images/miniapp/icons/pen.svg"
                                    alt="Image"
                                />
                            </button>
                        </div>
                    </div>
                    <div class="text-center form__row">
						<ButtonPrimary @click="update" :loader="loader">
							Сохранить
						</ButtonPrimary>
                    </div>
                </div>
                <div class="hero-app__action">
                    <a href="" class="button button_outline button_fw">
						Подключай свой кошелек TON
					</a>
                </div>
            </div>
        </div>
    </MiniappLayout>
</template>
