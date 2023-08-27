document.addEventListener('DOMContentLoaded', () => {
    function radioChange(radio, block) {
        document.querySelectorAll(radio).forEach((item) => {
            item.addEventListener("change", () => {
                if (radio == "#regDel input") {
                    document.querySelector(block).style.display = "block";
                    document.querySelector(".hide__address").style.display =
                        "none";
                    document.querySelector(
                        "input.address__yourself"
                    ).parentElement.style.paddingBottom = "";
                    document.querySelector(".divOut__copy").style.display =
                        "none";
                } else if (radio == "input.address__yourself") {
                    document.querySelector(block).style.display = "block";
                    document.querySelector(
                        radio
                    ).parentElement.style.paddingBottom = 98 + "px";
                    document.querySelector("#anotherCity").style.display =
                        "none";
                    document.querySelector(".divOut__copy").style.display =
                        "block";
                }
            });
        });
    }
    try {
        radioChange("#regDel input", "#anotherCity");
    } catch {}
    try {
        radioChange("input.address__yourself", ".hide__address");
    } catch {}

    const showListBirthday = (arrow, list) => {
        document.querySelectorAll(arrow).forEach((item, index, arr) => {
            item.addEventListener("click", () => {
                if (item.classList.contains("active")) {
                    document.querySelectorAll(list)[index].style.display =
                        "none";
                    item.classList.remove("active");
                } else {
                    document.querySelectorAll(list)[index].style.display =
                        "block";
                    item.classList.add("active");
                }
            });
        });
    };

    try {
        showListBirthday(".birthday__arrow", ".birthday__list");
    } catch {}

    const showListAgain = (arrow) => {
        document.querySelectorAll(arrow).forEach((item) => {
            item.addEventListener("click", (e) => {
                if (
                    e.target.className == "rate__arrow" ||
                    e.target.tagName == "IMG"
                ) {
                    if (e.target.className == "rate__arrow") {
                        if (e.target.classList.contains("active")) {
                            e.target.classList.remove("active");
                            e.target.nextElementSibling.style.display = "none";
                        } else {
                            e.target.classList.add("active");
                            e.target.nextElementSibling.style.display = "block";
                        }
                    } else {
                        if (
                            e.target.parentElement.classList.contains("active")
                        ) {
                            e.target.parentElement.classList.remove("active");
                            e.target.parentElement.nextElementSibling.style.display =
                                "none";
                        } else {
                            e.target.parentElement.classList.add("active");
                            e.target.parentElement.nextElementSibling.style.display =
                                "block";
                        }
                    }
                }
            });
        });
    };

    try {
        showListAgain(".reg__one--rate");
    } catch {}

    let myValue,
        countValue = 0;
    const changeInput = (item) => {
        document.querySelectorAll(item).forEach((one) => {
            one.addEventListener("click", (e) => {
                e.preventDefault();
                if (item == ".rate__item") {
                    one.parentElement.parentElement.firstElementChild.nextElementSibling.value =
                        one.textContent;
                }
                if (item == ".birthday__item") {
                    countValue++;
                    if (countValue == 6) {
                        document
                            .querySelector(".main__data .reg__btn")
                            .classList.remove("reg__btn--grey");
                    }
                }
                one.parentElement.parentElement.firstElementChild.value =
                    one.textContent;
                myValue = one.textContent;
                one.parentElement.style.display = "none";
                one.parentElement.previousElementSibling.classList.remove(
                    "active"
                );
            });
        });
    };

    try {
        changeInput(".birthday__item");
    } catch {}
    try {
        changeInput(".replenish__item");
    } catch {}

    const showHidePassword = (eye, input) => {
        document.querySelectorAll(eye).forEach((item, index) => {
            item.addEventListener("click", () => {
                if (item.classList.contains("active")) {
                    document.querySelectorAll(input)[index].type = "password";
                    item.classList.remove("active");
                } else {
                    document.querySelectorAll(input)[index].type = "text";
                    item.classList.add("active");
                }
            });
        });
    };

    try {
        showHidePassword(".password__eye", ".password__hide input");
    } catch {}

    const sortTable = (item) => {
        const firstValue = document.querySelector(
                ".reg__field--city input"
            ).value,
            secondValue = document.querySelector(
                ".reg__field--block input"
            ).value;

        try {
            document
                .querySelector(".reg__one--pass")
                .addEventListener("click", (e) => {
                    e.preventDefault();
                    document.querySelector(".reg__field--city input").value =
                        "";
                    document.querySelector(".reg__field--block input").value =
                        "";
                    document
                        .querySelectorAll(".order__item")
                        .forEach((elem) => {
                            elem.style.display = "block";
                        });
                    document.querySelectorAll(".order__one").forEach((one) => {
                        if (document.documentElement.clientWidth <= 1024) {
                            one.style.display = "grid";
                        } else {
                            one.style.display = "flex";
                        }
                    });
                });
        } catch {}

        if (firstValue && secondValue) {
            document.querySelectorAll(".order__block--city").forEach((one) => {
                if (
                    firstValue == one.textContent ||
                    (firstValue == "Екатеринбург1" &&
                        one.textContent == "Екб1") ||
                    (firstValue == "Екатеринбург2" &&
                        one.textContent == "Екб2") ||
                    (firstValue == "Екатеринбург3" &&
                        one.textContent == "Екб3") ||
                    (firstValue == "Екатеринбург4" && one.textContent == "Екб4")
                ) {
                    one.parentElement.classList.add("trueCity");
                    document
                        .querySelector(".reg__one--pass")
                        .classList.add("active");
                } else {
                    one.parentElement.classList.remove("trueCity");
                }
            });

            document
                .querySelectorAll(".order__childblock--block")
                .forEach((one) => {
                    if (secondValue == one.textContent) {
                        one.parentElement.classList.add("trueBlock");
                        document
                            .querySelector(".reg__one--pass")
                            .classList.add("active");
                    } else {
                        one.parentElement.classList.remove("trueBlock");
                    }
                });

            document
                .querySelectorAll(".order__childblock--block")
                .forEach((one) => {
                    if (
                        one.parentElement.classList.contains("trueCity") &&
                        one.parentElement.classList.contains("trueBlock")
                    ) {
                        if (document.documentElement.clientWidth <= 1024) {
                            one.parentElement.style.display = "grid";
                            document
                                .querySelector(".reg__one--pass")
                                .classList.add("active");
                        } else {
                            one.parentElement.style.display = "flex";
                            document
                                .querySelector(".reg__one--pass")
                                .classList.add("active");
                        }
                    } else {
                        one.parentElement.style.display = "none";
                    }
                });
        } else if (item.parentElement.classList.contains("order__list--city")) {
            const city =
                item.parentElement.previousElementSibling.previousElementSibling
                    .value;
            document.querySelectorAll(".order__block--city").forEach((one) => {
                if (
                    city == one.textContent ||
                    (firstValue == "Екатеринбург1" &&
                        one.textContent == "Екб1") ||
                    (firstValue == "Екатеринбург2" &&
                        one.textContent == "Екб2") ||
                    (firstValue == "Екатеринбург3" &&
                        one.textContent == "Екб3") ||
                    (firstValue == "Екатеринбург4" && one.textContent == "Екб4")
                ) {
                    if (document.documentElement.clientWidth <= 1024) {
                        one.parentElement.style.display = "grid";
                        document
                            .querySelector(".reg__one--pass")
                            .classList.add("active");
                    } else {
                        one.parentElement.style.display = "flex";
                        document
                            .querySelector(".reg__one--pass")
                            .classList.add("active");
                    }
                } else {
                    one.parentElement.style.display = "none";
                }
            });
        } else if (
            item.parentElement.classList.contains("order__list--block")
        ) {
            const block =
                item.parentElement.previousElementSibling.previousElementSibling
                    .value;
            document
                .querySelectorAll(".order__childblock--block")
                .forEach((one) => {
                    if (block == one.textContent) {
                        if (document.documentElement.clientWidth <= 1024) {
                            one.parentElement.style.display = "grid";
                            document
                                .querySelector(".reg__one--pass")
                                .classList.add("active");
                        } else {
                            one.parentElement.style.display = "flex";
                            document
                                .querySelector(".reg__one--pass")
                                .classList.add("active");
                        }
                    } else {
                        one.parentElement.style.display = "none";
                    }
                });
        }
    };

    const changeInputDinamic = (item) => {
        document.querySelector(item).addEventListener("click", (e) => {
            if (e.target.className == "rate__item") {
                e.target.parentElement.style.display = "none";
                e.target.parentElement.previousElementSibling.classList.remove(
                    "active"
                );
                e.target.parentElement.previousElementSibling.previousElementSibling.value =
                    e.target.textContent;
            }
        });
    };
    try {
        changeInputDinamic(".reg__one--rate");
    } catch {}

    const showLists = (title, list) => {
        document.querySelectorAll(title).forEach((elem, index) => {
            elem.addEventListener("click", () => {
                document.querySelectorAll(title).forEach((element, number) => {
                    if (index == number) {
                        element.style.color = "#ED0474";
                    } else {
                        element.style.color = "#2A2A2A";
                    }
                });
                document.querySelectorAll(list).forEach((one, num) => {
                    if (index == num) {
                        one.style.display = "block";
                    } else {
                        one.style.display = "none";
                    }
                });
            });
        });
    };
    try {
        showLists(".ref__name", ".ref__hide");
    } catch {}

    const arrowClick = (input) => {
        document.querySelectorAll(input).forEach((item) => {
            item.addEventListener("click", (e) => {
                if (e.target.tagName == "INPUT") {
                    e.target.nextElementSibling.click();
                }
            });
        });
    };
    try {
        arrowClick(".reg__one--rate");
    } catch {}

    const showMyBlock = (btn, block) => {
        document.querySelector(btn).addEventListener("click", (e) => {
            e.preventDefault();
            document.querySelector(block).style.display = "block";
        });
    };

    try {
        showMyBlock("#majorBtn", "#popup");
    } catch {}

    const lengthValue = (item, length) => {
        document.querySelector(item).addEventListener("click", () => {
            document.querySelector(item).nextElementSibling.click();
        });
        document.querySelector(item).addEventListener("input", () => {
            if (document.querySelector(item).value.length == length) {
                myValue = document.querySelector(item).value;
            }
            if (document.querySelector(item).value.length >= length) {
                document.querySelector(item).value = myValue;
                if (item == ".birthday__one--year input") {
                    if (
                        myValue < 1965 ||
                        myValue > 2003 ||
                        myValue.length !== 4
                    ) {
                        document.querySelector(item).value = "";
                    }
                }
                if (item == ".birthday__one--day input") {
                    if (myValue <= 1 || myValue > 31 || myValue.length !== 2) {
                        document.querySelector(item).value = "";
                    }
                }
                if (item == ".birthday__one--month input") {
                    if (myValue <= 1 || myValue > 12 || myValue.length !== 2) {
                        document.querySelector(item).value = "";
                    }
                }
            }
        });
        document.querySelector(item).addEventListener("change", () => {
            document.querySelector(
                item
            ).nextElementSibling.nextElementSibling.style.display = "none";
            document
                .querySelector(item)
                .nextElementSibling.classList.remove("active");
            if (document.querySelector(item).value.length == 1 && length == 2) {
                document.querySelector(item).value = `0${
                    document.querySelector(item).value
                }`;
                myValue = document.querySelector(item).value;
            }
        });
    };

    try {
        lengthValue(".birthday__one--day input", 2);
        lengthValue(".birthday__one--month input", 2);
        lengthValue(".birthday__one--year input", 4);
    } catch {}

    const searchCity = (item) => {
        let myString;
        let myArr = [];
        let childerElements;
        document.querySelector(item).addEventListener("input", (e) => {
            myString = e.target.value.toUpperCase();
            childerElements = Array.from(
                e.target.nextElementSibling.nextElementSibling.children
            );
            childerElements.forEach((item, index) => {
                myArr[index] = item.textContent.toUpperCase();
            });
            myArr.filter((one, num) => {
                if (one.indexOf(myString) > -1) {
                    e.target.nextElementSibling.nextElementSibling.children[
                        num
                    ].style.display = "block";
                } else {
                    e.target.nextElementSibling.nextElementSibling.children[
                        num
                    ].style.display = "none";
                }
            });
        });
    };

    try {
        searchCity(".reg__one--rate");
    } catch {}

    const changeInputaValue = (inputOne, inputTwo, btn) => {
        document.querySelector(btn).addEventListener("click", () => {
            const firstValue = document.querySelector(inputOne).value,
                secondValue = document.querySelector(inputTwo).value;

            document.querySelector(inputOne).value = secondValue;
            document.querySelector(inputTwo).value = firstValue;
        });
    };

    const showHideList = (arrow, list) => {
        document.querySelectorAll(arrow).forEach((item, index) => {
            item.addEventListener("click", () => {
                if (item.classList.contains("active")) {
                    document.querySelectorAll(list)[index].style.display =
                        "none";
                    if (list == ".header__hide") {
                        document
                            .querySelector(".header")
                            .classList.remove("active");
                    }
                    item.classList.remove("active");
                } else {
                    document.querySelectorAll(list)[index].style.display =
                        "block";
                    if (list == ".header__hide") {
                        document
                            .querySelector(".header")
                            .classList.add("active");
                    }
                    item.classList.add("active");
                }
            });
        });
    };

    // try {
    //     showHideList(".lang__arrow", ".lang__list");
    // } catch {}

    try {
        showHideList(".order__arrow", ".order__list");
    } catch {}
    try {
        showHideList(".replenish__arrow", ".replenish__list");
    } catch {}
    // try {
    //     showHideList(".header__btn", ".header__hide");
    // } catch {}
    try {
        showHideList(".overview__arrow", ".overview__spisok");
    } catch {}

    const changeLang = (items) => {
        document.querySelectorAll(items).forEach((elem) => {
            elem.addEventListener("click", () => {
                elem.parentElement.parentElement.nextElementSibling.click();
                elem.parentElement.parentElement.previousElementSibling.textContent =
                    elem.textContent;
            });
        });
    };

    try {
        changeLang(".lang__item a");
    } catch {}

    const fakeClick = (input, arrow) => {
        document.querySelectorAll(input).forEach((item, index) => {
            item.addEventListener("click", () => {
                document.querySelectorAll(arrow)[index].click();
            });
        });
    };

    // try{
    //     fakeClick('.main__orders input', '.order__arrow');
    // } catch {}
    // try{
    //     fakeClick('.main__orders input', '.rate__arrow');
    // } catch {}
    try {
        fakeClick(".replenish__input input", ".replenish__arrow");
    } catch {}

    const showBlock = (trigger, block) => {
        const myBlock = document.querySelector(block),
            myTrigger = document.querySelector(trigger);
        myTrigger.addEventListener("click", (e) => {
            e.preventDefault();
            if (myTrigger.classList.contains("active")) {
                myTrigger.classList.remove("active");
                myBlock.style.display = "none";
            } else {
                myTrigger.classList.add("active");
                myBlock.style.display = "block";
            }
        });
    };

    try {
        showBlock(".card__btn", ".card__form");
    } catch {}

    const removeCard = (parentElement) => {
        const allArray = Array.from(
            document.querySelector(parentElement).children
        );
        document.querySelector(parentElement).addEventListener("click", (e) => {
            e.preventDefault();
            if (e.target.className == "card__btn" || e.target.tagName == "A") {
                const card = e.target.parentElement.parentElement.parentElement;
                card.remove();
                allArray.forEach((item) => {
                    if (item.offsetTop == -35) {
                        item.style.right = 0;
                        item.style.top = 0;
                        item.classList.add("target");
                    } else if (item.offsetTop == -70) {
                        item.style.right = -39 + "px";
                        item.style.top = -35 + "px";
                        if (document.documentElement.clientWidth < 500) {
                            item.style.right = 0;
                        }
                    }
                });
            }
        });
    };

    try {
        removeCard(".card__inner");
    } catch {}

    const clickCard = (card) => {
        document.querySelectorAll(card).forEach((item, index, arr) => {
            let oldTop;
            item.addEventListener("click", () => {
                if (item.classList.contains("card__neo")) {
                    oldTop = item.offsetTop;
                    arr.forEach((uno) => {
                        if (uno.classList.contains("target")) {
                            uno.style.top = oldTop + "px";
                        }
                        uno.classList.remove("target");
                    });
                    item.classList.add("target");
                    item.style.top = 0;
                    arr.forEach((uno, index) => {
                        if (uno.offsetTop == 0) {
                            uno.style.zIndex = 5;
                            if (document.documentElement.clientWidth > 500) {
                                uno.style.right = 0;
                            }
                        } else if (uno.offsetTop == -35) {
                            uno.style.zIndex = 4;
                            if (document.documentElement.clientWidth > 500) {
                                uno.style.right = -38 + "px";
                            }
                        } else if (uno.offsetTop == -70) {
                            uno.style.zIndex = 1;
                            if (document.documentElement.clientWidth > 500) {
                                uno.style.right = -78 + "px";
                            }
                        }
                    });
                }
            });
        });
    };
    try {
        clickCard(".card__neo");
    } catch {}

    /**
     *  Изменение активного пункта в меню
     */

    let anchors = document.querySelectorAll(".anchor");
    let menuItems = document.querySelectorAll(".pcmenu-item");
    let menu = document.querySelector(".pcmenu");

    document.addEventListener("scroll", () => {
        let anchorInView = null;
        let closestY = null;

        anchors.forEach((el) => {
            let y = el.getBoundingClientRect().y;

            if (y > 0) return;

            if (anchorInView === null) {
                anchorInView = el;
                closestY = y;
                return;
            }

            if (closestY < y) {
                anchorInView = el;
                closestY = y;
                return;
            }
        });

        menuItems.forEach((el) => {
            if (el.dataset.id === anchorInView.id) {
                el.classList.add("active");
                return;
            }

            el.classList.remove("active");
        });
    });

    menu.addEventListener("click", (event) => {
        if (!event.target.closest(".pcmenu-item")) return;

        setTimeout(() => {
            menuItems.forEach((el) => {
                el.classList.remove("active");
            });

            event.target.closest("li").classList.add("active");
        }, 100);
    });

    /**------------------ */

    if (localStorage.getItem("top") == "true") {
        document.querySelector(".header__top").style.display = "none";
    }

    const closeWindow = (trigger, window) => {
        document.querySelector(trigger).addEventListener("click", (e) => {
            e.preventDefault();
            document.querySelector(window).style.display = "none";
            if (trigger == ".replenish__get") {
                document.querySelector(
                    ".replenish__btn--copy"
                ).style.background = "#ED0474";
                document.querySelector(".replenish__btn--copy").style.color =
                    "#fff";
            }
            if (window == ".header__top") {
                document.querySelector(window).classList.add(".header__none");
                localStorage.setItem("top", true);
            }
        });
    };

    try {
        closeWindow(".replenish__close", ".replenish__wrapper");
        closeWindow(".replenish__get", ".replenish__wrapper");
    } catch {}
    try {
        closeWindow(".header__before--close", ".header__top");
    } catch {}
    try {
        closeWindow(".cookie__btn", ".cookie");
    } catch {}
    try {
        closeWindow("#popupClose", "#popup");
    } catch {}
    try {
        closeWindow("#thanksClose", "#thanks");
    } catch {}

    const allInputs = (one) => {
        document.querySelectorAll(one).forEach((item, index, array) => {
            item.addEventListener("change", (e) => {
                if (item.value.length > 0) {
                    countValue++;
                }
                if (countValue == array.length) {
                    document
                        .querySelector(".main__data .reg__btn")
                        .classList.remove("reg__btn--grey");
                }
            });
        });
    };

    allInputs(".main__data .reg__one input");

    const cleanTextContent = (item) => {
        if (document.documentElement.clientWidth < 769) {
            document.querySelectorAll(item).forEach((one) => {
                one.textContent = "";
            });
        }
    };

    try {
        cleanTextContent(".about__data");
    } catch {}

    const shooseList = (item, block, list, map, arrow) => {
        document.querySelectorAll(item).forEach((one, index) => {
            one.addEventListener("click", () => {
                document.querySelector(list).style.display = "none";
                document.querySelector(arrow).classList.remove("active");
                one.classList.add("active");
                document.querySelector(block).textContent = one.textContent;
                document.querySelectorAll(map).forEach((uno, num) => {
                    uno.style.display = "none";
                    if (index == num) {
                        uno.style.display = "block";
                    }
                });
            });
        });
    };
    try {
        shooseList(
            ".overview__uno",
            ".overview__num",
            ".overview__spisok",
            ".about__map",
            ".overview__arrow"
        );
    } catch {}
})
