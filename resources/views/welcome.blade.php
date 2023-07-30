@extends('layouts.app')

@section('title', 'Main')

@section('content')
	<div class="bg-[#E5E5E5]">
    <section class="major">
        <div class="container">
            <div class="major__inner">
                <div class="major__left">
                    <h1 class="major__title">UMCHAIN – IT-решения для бизнеса на основе блокчейн</h1>
                    <div class="major__description">Стань одним из первых. Сделай шаг в децентрализованное будущее</div>
                    <div class="major__btn">

                        @if(Auth::check())
{{--                            <a href="{{ route('cabinet.personal.data') }}">Записаться на покупку umt токенов</a>--}}
                            <a href="#" id="majorBtn">Записаться на покупку umt токенов</a>
                        @else
{{--                            <a href="{{ route('register') }}">Записаться на покупку umt токенов</a>--}}
                            <a href="#" id="majorBtn">Записаться на покупку umt токенов</a>
                        @endif
                    </div>
                    <div class="major__img-block">
                        <img class="one" src="{{asset('images/logo01.png')}}" alt="">
                        <img class="two" src="{{asset('images/logo02.png')}}" alt="">
                    </div>
                </div>
{{--                <div class="major__right">--}}
{{--                    <div class="major__timer">До конца 1 раунда осталось:</div>--}}
{{--                    <div class="major__time">--}}
{{--                        <div class="major__one">--}}
{{--                            <div class="major__top">Токенов</div>--}}
{{--                            <div class="major__box">0 <span>млн.</span></div>--}}
{{--                            <div class="major__box">0<span></span></div>--}}
{{--                        </div>--}}
{{--                        <div class="major__one">--}}
{{--                            <div class="major__top">Модулей</div>--}}
{{--                            <div class="major__box">600</div>--}}
{{--                            <div class="major__box">0</div>--}}
{{--                        </div>--}}
{{--                        <div class="major__one">--}}
{{--                            <div class="major__top">Блоков</div>--}}
{{--                            <div class="major__box">12000</div>--}}
{{--                            <div class="major__box">0</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--            </div>--}}
        </div>
    </section>
    <div class="content__grid">
        <div class="content__left">
            <div class="content__list">
                <ul>
                    <li><a href="#what">Что такое Токен UMT?</a></li>
                    <li><a href="#bepartner">Как стать партнером</a></li>
                    <li><a href="#overview">Web 3.0</a></li>
                    <li><a href="#benefit">Преимущества DWB</a></li>
                    <li><a href="#distribution">Для кого предназначен DWB</a></li>
                    <li><a href="#about">Выгода для партнёра</a></li>
                    <li><a href="#team">Функция utility-токена UMC</a></li>
                    <li><a href="#reg">Функция технического токена UMT</a></li>
                    <li><a href="#tok">Tokenomics</a></li>
                    <li><a href="#map">Дорожная карта</a></li>
                    <li><a href="#feedback">Свяжитесь с нами</a></li>
                </ul>
            </div>
        </div>
        <div class="content__right">
            <section class="what" id="what">
                <div class="what__inner">
                    <h3 class="common__title">UMChain - Цифровая экосистема для электронной коммерции на блокчейн</h3>
                </div>
                <div class="what__text">
                    <p>Основной проект компании Umchain OU - Dwb.world. Миссией проекта является разработка децентрализованного конструктора сайтов DWB с функцией приёма платежей на свой кошелек и экосистемы Umchain, в рамках которой существуют продавцы и покупатели. Для продавцов открываются возможности создания собственного сайта, его наполнения, загрузки товаров и тд.</p>

                    <p><strong>Целями создания системы являются:</strong></p>

                    <p>
                        <strong>-	создание децентрализованной системы с обеспечением полной прозрачности всех осуществляемых в системе процедур за счет использования технологии публичных Блокчейн сетей</strong>
                    </p>
                    <p>
                        <strong>-	обеспечение прозрачности и достоверности расчетов между Поставщиками и Покупателями за счет использования Смарт контрактов</strong>
                    </p>
                    <p>
                        <strong>-	обеспечение доступности системы широкому кругу Покупателей за счет использования средств облачной подписи</strong>
                    </p>

                    <p>
                        Для реализации взаимоотношений (бизнес-процессов) с партнерами разработан прикладной протокол UMChain на базе блокчейн платформы Polygon и выпуск двух токенов,  один из которых (UMT) будет использоваться в расчетах продавцов и покупателей между собой, а второй (UMC) - давать возможность пользоваться экосистемой Umchain - этот токен является цифровым активом компании и будет представлен на биржах.
                    </p>

                    <p>
                        ICO проводится с целью разбработки и внедрения децентрализованного алгоритма взаимодействия внутри экосистемы Umchain. Таким образом держатели токенов UMС будут мотивированы работоспособностью экосистемы: база данных сервиса и база данных блокчейн обращаются друк к другу, в связи с чем вырабатывается новый мотивационный блок, который будет вознаграждать держателей токенов, распределяя вознаграждение между всеми держателями токенов. Блокчейн будет работать по алгоритму Proof-of-stake.
                    </p>
                </div>
            </section>
            <div class="bepartner" id="bepartner">
                <div class="bepartner__inner">
                    <h3 class="common__title">Как стать партнером</h3>
                    <div class="bepartner__wrapper">
                        <div class="bepartner__item">
                            <div class="bepartner__image">
                                <img src="{{asset('images/bepartnerOne.svg')}}" alt="">
                            </div>
                            <div class="bepartner__step">Шаг1</div>
                            <div class="bepartner__description">1. Зарегистрироваться в личном кабинете</div>
                        </div>
                        <div class="bepartner__item">
                            <div class="bepartner__image">
                                <img src="{{asset('images/bepartnerTwo.svg')}}" alt="">
                            </div>
                            <div class="bepartner__step">Шаг2</div>
                            <div class="bepartner__description">2. Выбрать количество Токенов</div>
                        </div>
                        <div class="bepartner__item">
                            <div class="bepartner__image">
                                <img src="{{asset('images/bepartnerThree.svg')}}" alt="">
                            </div>
                            <div class="bepartner__step">Шаг3</div>
                            <div class="bepartner__description">3. Инвестировать в токены, совершив обмен USDT на UMС Токен
                            </div>
                        </div>
                    </div>
                    <div class="bepartner__addition">*Для совершения транзакций необходимо быть владельцем любого
                        криптокошелька. Если у вас еще нет криптокошелька, вы можете воспользоваться нашей <a href="">инструкцией
                            по установке</a> приложения на ваш смартфон
                    </div>
                    <div class="bepartner__btn">
                        @if(Auth::check())
                            <a href="{{ route('cabinet.personal.data') }}">Купить по стартовой цене</a>
                        @else
                            <a href="{{ route('login') }}">Купить по стартовой цене</a>
                        @endif
                    </div>
                    <div class="bepartner__small">(!) Инвестиционная криптовалютная деятельность, включая получение Токенов UMC, подвержена рыночному риску. Мы предоставляем вам простые и удобные способы получения Токенов UMC. Мы прилагаем все усилия, чтобы исчерпывающе информировать пользователей о предложенных на бирже криптовалютах, но не несем ответственности за последствия, которые могут возникнуть в результате получения Токенов UMC. Любая информация, изложенная на данной странице, несет исключительно информационный характер относительно конкретных Токенов или способа их получения.</div>
                </div>
            </div>
            <section class="overview" id="overview">
                <div class="overview__inner">
                    <h3 class="common__title">Web 3.0</h3>
                    <p class="common__text"><span class="text--ping">dwb.world</span> - децентрализованный конструтор сайтов Web 3.0</p>
                    <div class="overview__box">
                        <div class="overview__info">
                            <p> DWB - децентрализованный оптимизированный конструктор сайтов. Проект предоставляет возможность создать полноценный сайт и заниматься коммерцией, продажей товара или услуг в интернете. </p>
                            <p>В личном кабинете есть всё необходимое для управления вашим бизнесом: настройки уведомлений, статистика по заказам, баланс и возможность вывода заработанных средств. </p>
                            <p>При создании сайта в индивидуальном порядке выбирается способ проведения платежей в системе: p2p платежи, либо использование интернет-эквайринга.</p>
                        </div>
                        <div class="overview__right">
                            <div class="overview__task">Возможности:</div>
                            <ul class="overview__list">
                                <li class="overview__item">Отслеживание всех транзакций на сайте</li>
                                <li class="overview__item">Вывод средств 24/7</li>
                                <li class="overview__item">Быстрое создание магазина за 15 минут</li>
                                <li class="overview__item">Возможность создания и продажи NFT</li>
                                <li class="overview__item">Peer to Peer Transaction</li>
                            </ul>
                        </div>
                    </div>
                    <div class="overview__competition" id="benefit">
                        <h4 class="overview__title">Преимущества DWB</h4>
                        <div class="overview__wrapper">
                            <div class="overview__one">
                                <div class="overview__name"><span>CMS</span> - конструктор</div>
                                <div class="overview__description">
                                      <p>
                                          Взаимодействие с платформой предполагает размещение товаров и услуг на индивидуально созданном сайте.
                                      </p>
                                      <p>
                                          Для создания ресурса используется ваш домен, информация о вашей компании, ваш номер кошелька (при p2p взаимодействии).

                                      </p>
                                      <p>
                                          Интуитивно понятный личный кабинет делает работу с сайтом на DWB легкой и приятной, а внутренняя SEO оптимизация и интерфейс пользователя - удобны для ваших клиентов и посетителей сайта.
                                      </p>
                                </div>
                            </div>
                            <div class="overview__one">
                                <div class="overview__name"><span>Модуль </span> интеграции с маркетплейсами</div>
                                <div class="overview__description">
                                    <p>Создание сайта на DWB открывает для предпринимателей возможность автоматической выгрузки товаров на маркетплейсы. </p>
                                    <p>Чтобы разместить товары на маркетплейсе, загрузите их на созданный сайт, а затем в настройках укажите, на каких маркетплейсах вы хотите разместить ваши товары.</p>
                                </div>
                            </div>
                            <div class="overview__one">
                                <div class="overview__name"><span>Безопасность </span> и прозрачность транзакций</div>
                                <div class="overview__description">
                                    <p>Так как внутренние бизнес-процессы системы происходят на основе блокчейн технологий, вы можете быть уверены в безопасности каждой транзакции. </p>
                                    <p>С помощью криптографии технология блокчейн помогает предотвратить любые несанкционированные и мошеннические действия. </p>
                                    <p>Распределение средств осуществляется по установленным в смарт-контракте правилам, что исключает ошибки в системе. </p>
                                </div>
                            </div>
                            <div class="overview__one">
                                <div class="overview__name"><span>Мгновенное </span> начисление средств на личный кошелёк</div>
                                <div class="overview__description">
                                    <p>Средства автоматические начисляются на Ваш личный кошелек.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="overview__trouble" id="distribution">
                        <h4 class="overview__title">Для кого предназначен конструктор DWB</h4>
                        <div class="overview__box">
                            <div class="overview__info">
                                <div class="overview__name"><span>Селлеры</span>, продающие товары онлайн</div>
                                <div class="overview__description">
                                    <p>Малый и средний бизнес в свете последних событий в мире столкнулся с непростыми проблемами и в полной степени ощутил последствия. Этот сегмент экономики зачастую не имеет финансовой подушки и оказывается без какой-либо поддержки, без защиты от влияния внешних факторов. </p>
                                    <p>Многие нуждаются в IT-инструментах, для содержания и управления которыми не потребуется большая компанда специалистов. </p>
                                </div>
                            </div>
                            <div class="overview__info">
                                <div class="overview__image">
                                    <img src="{{asset('images/cube.svg')}}" alt="">
                                </div>
                                <div class="overview__name overview__name--small"><span>Создатели</span> бизнеса и собственных продуктов
                                </div>
                                <div class="overview__description">
                                    <p>Тенденция перевода бизнеса в онлайн очевидна, поэтому предприниматели часто обращаются к известным действенным инструментам продаж и цифровизации своего дела, уделяя особенное внимание созданию собственного сайта.</p>
                                    <p>Для них важно иметь надежное IT-решение, на которое можно положиться, и которое будет работать невзирая на события, происходящие в стране и в мире.</p>
                                </div>
                            </div>
                        </div>
                        <div class="border-none overview__box">
                            <div class="overview__info">
                                <div class="overview__name"><span>NFT</span> Коллеционеры и художники</div>
                                <div class="overview__description">
                                    <p>
                                        Создавайте свои NFT коллекции и продавайте их на своем сайте, все техничские вопросы мы берем на себя.
                                    </p>
                                </div>
                            </div>
                            <div class="overview__info">
                                <div class="overview__image overview__image--investment">
                                   <img src="{{asset('images/investment.jpg')}}" alt="">
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="benefit mb-98" id="about ">
                <div class="benefit__inner">
                    <h3 class="common__title">Выгода для партнера</h3>
                    <div class="mb-20 benefit__wrapper">
                        <div class="benefit__item">
                            <div class="benefit__cube">
                                <img src="{{asset('images/cubeOne.svg')}}" alt="">
                            </div>
                            <div class="benefit__description">Быстрое создание сайта и наполнение товарами</div>
                        </div>
                        <div class="benefit__item">
                            <div class="benefit__cube">
                                <img src="{{asset('images/cubeOne.svg')}}" alt="">
                            </div>
                            <div class="benefit__description">Доступная и интуитивно понятная настройка сайта и управление личным кабинетом
                            </div>
                        </div>
                        <div class="benefit__item">
                            <div class="benefit__cube">
                                <img src="{{asset('images/cubeOne.svg')}}" alt="">
                            </div>
                            <div class="benefit__description">Возможность выбора базовой технологии: p2p, cryptoprocessing или  интернет-эквайринг
                            </div>
                        </div>
                        <div class="benefit__item">
                            <div class="benefit__cube">
                                <img src="{{asset('images/cubeOne.svg')}}" alt="">
                            </div>
                            <div class="benefit__description">Безопасность и прозрачность транзакций
                            </div>
                        </div>
                        <div class="benefit__item">
                            <div class="benefit__cube">
                                <img src="{{asset('images/cubeOne.svg')}}" alt="">
                            </div>
                            <div class="benefit__description">Интеграция с другими маркетплейсами</div>
                        </div>
                        <div class="benefit__item">
                            <div class="benefit__cube">
                                <img src="{{asset('images/cubeOne.svg')}}" alt="">
                            </div>
                            <div class="benefit__description">Оптимизированный пользовательский интерфейс
                            </div>
                        </div>
                    </div>
                    <div class="bepartner__btn">
                    @if(Auth::check())
                        <a  href="{{ route('cabinet.personal.data') }}">Стать партнёром</a>
                    @else
                        <a   href="{{ route('login') }}">Стать партнёром</a>
                    @endif
                    </div>
                </div>
            </section>
            <section class="mb-56" id="team">
                 <div >
                    <h3 class="common__title">Функция Utility-токена UMC</h3>
                    <div class="what__text">
                        <p>
                            В Umchain функционирует UMC (Utility-Token) – инфраструктурная единица, которая обслуживает экономическую модель экосистемы.
                        </p>
                        <p>
                            Возможность пользования экосистемой Umchain предполагает, что все взаиморасчеты происходят только в нативном токене UMC.
                        </p>
                        <p>
                            При каждой новой транзакции, система обращается к Utility-токену за подтверждением. В случае положительного ответа формируется новый блок, в котором создается карточка товара с количеством и ценой. Цена записывается в блокчейн и создается стейблтокен равный этой сумме. При продаже созданного товара сумма в виде стейблтокена поступает на кошелек продавца.
                        </p>
                        <p>
                            Владельцы Utility-токена получают вознаграждение с каждой транзации в сети: от создания товара до его продажи.
                        </p>
                    </div>
                </div>
            </section>
            <section class="mb-56" id="reg">
                 <div>
                    <h3 class="common__title">Функция Технического токена UMT</h3>
                    <div class="mb-56 what__text">
                        <p>
                           В Umchain функционирует UMT Token – он явлеятся стейбл токеном и вырабатывается в случае, когда при создании сайта выбран способ взаиморасчетов через нашу платежную систему.</p>

                        <p>
                           При создании карточки товара в платформе DWB, создается блок с ценой этой картчочки, при успешной транзакции UMT токен распределяется по сети (продавцу, реферералу и тд.)</p>
                        </p>
                    </div>

                    <div class="mb-98">
                        <picture>
                            <source srcset="{{asset('images/sxema-dest.png')}}" media="(min-width: 768px)">
                            <img class="distribution__img" src="{{asset('images/sxema-mob.png')}}" alt="фото">
                        </picture>
                    </div>
                </div>
            </section>

            <section class="mb-56">
                <div class="distribution__table">
                    <div class="distribution__left">
                        <div class="distribution__wrapper">
                            <div class="distribution__round"><span>Бизнес Роли</span></div>
                        </div>
                    </div>
                    <div class="distribution__middle">
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                                Оператор платформы
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                                Продавец (Поставщик)
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                                Покупатель
                            </div>
                        </div>
                    </div>
                    <div class="distribution__right">
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Оператор платформы, обеспечивающий ввод фиатных средств в систему, и, как следствие, эмиссию и сжигание токенов UMT
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Пользователь экосистемы, осуществляющий загрузку товаров на контракт Umchain
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Пользователь маркетплейса, осуществляющий покупку товаров на маркетплейс за UM токен
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <section class='mb-56'>
                <div class="distribution__table">
                    <div class="distribution__left">
                        <div class="distribution__wrapper">
                            <div class="distribution__round"><span>Описание компонентов системы</span></div>
                        </div>
                    </div>
                    <div class="distribution__middle">
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            UMT Token Contract
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            UMC Token Contract
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Access Control
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Seller Contract
                            </div>
                        </div>
                        <div class="distribution__item distribution__item-a">
                            <div class="distribution__wrapper">

                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Magic Wallet
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Seller-service
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            App DB
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Alchemy Poygon Node
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Gateway
                            </div>
                        </div>
                    </div>
                    <div class="distribution__right">
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Прикладной контракт, реализующий функции эмиссии, оборота и сжигания токенов UMT
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Прикладной контракт, реализующий функции эмиссии, оборота и сжигания токенов UMC
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            ACL Contract	Прикладной контракт, реализующий ролевую модель участников
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                                <div>Прикладной контракт, реализующий функции:</div>
                                <div>- создания, редактирования, удаления партнеров</div>
                            </div>
                        </div>
                        <div class="distribution__item distribution__item-a">
                            <div class="distribution__wrapper">
                                <ul>
                                    <li>- создания, редактирования, удаления товаров</li>
                                    <li>- расщепление платежа в соответствии с правилами</li>
                                </ul>
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Внешний сервис, реализующий аутентификацию и выдачу адреса в блокчейне через SMS/Email/Social Login
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            ACL Contract	Прикладной контракт, реализующий ролевую модель участников
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Системный компонент, база данных, обеспечивающая хранение витрин данных
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Системный компонент, узел блокчейна Polygon в Alchemy BaaS (Blockchain-as-a-Service)
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Системный компонент, nginx, реализующий единую точку входа в API системы
                            </div>
                        </div>
                    </div>
                </div>

            </section>


            <section id="tok">
                <div class="about__inner mb-44">
                    <h4 class="tok__title mb-44">Tokenomics</h4>
                    <picture>
                        <source srcset="{{asset('images/a-dest.png')}}" media="(min-width: 768px)">
                        <img class="distribution__img" src="{{asset('images/a-mob.png')}}" alt="фото">
                    </picture>
                </div>
                <div class="about__inner mb-44">
                    <h4 class="tok__title mb-44">Token distribution</h4>
                    <picture>
                        <source srcset="{{asset('images/b-dest.png')}}" media="(min-width: 768px)">
                        <img class="distribution__img" src="{{asset('images/b-mob.png')}}" alt="фото">
                    </picture>
                </div>
                <div class="about__inner mb-98">
                    <h4 class="tok__title mb-44">UMC Token emission</h4>
                    <picture>
                        <source srcset="{{asset('images/c-dest.png')}}" media="(min-width: 768px)">
                        <img class="distribution__img" src="{{asset('images/c-mob.png')}}" alt="фото">
                    </picture>
                </div>
            </section>

            <section>

                <p class="text-p mb-44 text-i">
                    Общее количество UMC Токенов составляет 444 000 000
                </p>
                <div class="distribution__table">
                    <div class="distribution__left">
                        <div class="distribution__wrapper">
                            <div class="distribution__round"><span>Seed</span></div>
                            <div class="distribution__target">Цель:</div>
                            <div class="distribution__description">
                                <p>Запустить dwb.world</p>
                                <p>Разработка смартконтракта NFT;</p>
                            </div>
                            <ul class="distribution__data">
                                <li>Дата</li>
                                <li>08.10.2022</li>
                            </ul>
                        </div>
                    </div>
                    <div class="distribution__middle">
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Allocation
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Percentage %
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Raise total
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Price
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Lock
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Vesting (linear)
                            </div>
                        </div>
                    </div>
                    <div class="distribution__right">
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            22 200 000
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            5,00 %
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            $ 33 300,00
                            </div>
                        </div>
                        <div class="distribution__item distribution__item--small">
                            <div class="distribution__wrapper">
                            0,0015 USDT
                            </div>
                            <!-- <div class="distribution__wrapper distribution--flex">
                                <div class="distribution__one distribution__one--normal">0,01287001 USDT</div>
                                <div class="distribution__one distribution__one--pink">0,00536251 USDT</div>
                            </div> -->
                        </div>
                        <div class="distribution__item distribution__item--small">
                            <div class="distribution__wrapper distribution__one--normal">
                            3 month
                            </div>
                        </div>
                        <div class="distribution__item distribution__item--small">
                            <div class="distribution__wrapper distribution__one--normal">
                            10% each month for 10 months after 6 month cliff from listing
                            </div>
                        </div>
                    </div>
                </div>


                <div class="distribution__table">
                    <div class="distribution__left">
                        <div class="distribution__wrapper">
                            <div class="distribution__round"><span>Private</span></div>
                            <div class="distribution__target">Цель:</div>
                            <div class="distribution__description">
                                <p>Старт запуска разработки блокчейн сети;</p>
                            </div>
                            <ul class="distribution__data">
                                <li>Дата</li>
                                <li>31.10.2022</li>
                            </ul>
                        </div>
                    </div>
                    <div class="distribution__middle">
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Allocation
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Percentage %
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Raise total
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Price
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Lock
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Vesting (linear)
                            </div>
                        </div>
                    </div>
                    <div class="distribution__right">
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            44 400 000
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            10,00 %
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            $ 111 100,00
                            </div>
                        </div>
                        <div class="distribution__item distribution__item--small">
                            <div class="distribution__wrapper distribution--flex">
                                <div class="distribution__one distribution__one--normal">0,0025 USDT</div>
                                <div class="distribution__one distribution__one--pink">0,001 USDT</div>
                            </div>
                        </div>
                        <div class="distribution__item distribution__item--small">
                            <div class="distribution__wrapper distribution__one--normal">
                            0
                            </div>
                        </div>
                        <div class="distribution__item distribution__item--small">
                            <div class="distribution__wrapper distribution__one--normal">
                            10% each month for 10 months after 6 month cliff from listing
                            </div>https://ico.umchain.org/
                        </div>
                    </div>
                </div>

                <div class="distribution__table">
                    <div class="distribution__left">
                        <div class="distribution__wrapper">
                            <div class="distribution__round"><span>Public </span></div>
                            <div class="distribution__target">Цель:</div>
                            <div class="distribution__description">

                            </div>
                            <ul class="distribution__data">
                                <li>Дата</li>
                                <li>12.01.2023</li>
                            </ul>
                        </div>
                    </div>
                    <div class="distribution__middle">
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Allocation
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Percentage %
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Raise total
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Price
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Lock
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Vesting (linear)
                            </div>
                        </div>
                    </div>
                    <div class="distribution__right">
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            22 200 000
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            5,00 %
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            $ 77 700,00
                            </div>
                        </div>
                        <div class="distribution__item distribution__item--small">
                            <div class="distribution__wrapper distribution--flex">
                                <div class="distribution__one distribution__one--normal">0,0035 USDT</div>
                                <div class="distribution__one distribution__one--pink">0,001 USDT</div>
                            </div>
                        </div>
                        <div class="distribution__item distribution__item--small">
                            <div class="distribution__wrapper distribution__one--normal">
                            0
                            </div>
                        </div>
                        <div class="distribution__item distribution__item--small">
                            <div class="distribution__wrapper distribution__one--normal">
                            10% each month for 10 months after 6 month cliff from listing
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <section class="about" id="map">
                <div class="about__inner">
                    <h4 class="overview__title">Дорожная карта</h4>
                    <div class="overview__choose">
                        <div class="overview__num">2022</div>
                        <div class="overview__arrow">
                            <img src="{{asset('images/arrow.svg')}}" alt="">
                        </div>
                        <div class="overview__spisok">
                            <div class="overview__uno">2020</div>
                            <div class="overview__uno">2021</div>
                            <div class="overview__uno">2022</div>
                            <div class="overview__uno">2023</div>
                        </div>
                    </div>
                        <div class="about__map about__map--four" style="display: none;">
                            <!-- <div class="about__table">
                                <div class="about__line">
                                    <img src="{{asset('images/lineThird.svg')}}" alt="">
                                </div>
                                <div class="about__counting">
                                    <div class="about__count">00</div>
                                    <div class="about__count">01</div>
                                </div>
                                <div class="about__block">
                                    <div class="about__texting">Разработка и запуск проекта по доставке цветов umflowers.ru
                                    </div>
                                </div>
                                <div class="about__boxing">
                                    <div class="about__point">
                                        <img src="{{asset('images/point.svg')}}" alt="">
                                    </div>
                                    <div class="about__point">
                                        <img src="{{asset('images/point.svg')}}" alt="">
                                    </div>
                                </div>
                                <div class="about__inform">
                                    <div class="about__information">
                                        <p>Запуск контекстной рекламы</p>
                                        <p>Создание аккаунтов в социальных сетях</p>
                                        <p>Участие в соревнованиях по бодибилдингу в Ростове Великом и Ярославле</p>
                                        <p>Участие в соревнованиях по бодибилдингу в Дзержинском</p>
                                    </div>
                                    <div class="about__information">
                                        <p>Участие в соревнованиях по бодибилдингу в Воронеже</p>
                                        <p>Участие в соревнованиях по бодибилдингу в Москве и Санкт-Петербурге</p>
                                        <p>Разработка CRM системы в части для рекламы и маркетинга</p>
                                        <p>Участие в соревнованиях по бодибилдингу в Краснодаре и Сочи </p>
                                        <p>Разработка CRM системы в части для call-центра</p>
                                    </div>
                                </div>
                            </div>
                            <div class="about__dates">
                                <div class="about__data about__data--pink">2020</div>
                                <div class="about__data about__data--text">UM Chain</div>
                                <div class="about__data about__data--small">07 / 2020</div>
                                <div class="about__data">2021</div>
                                <div class="about__data">2022</div>
                            </div>
                            <div class="about__bottom"></div>
                            <div class="hide__about">
                                <div class="about__item">
                                    <span class="about__num">00</span> – <span>UM Chain</span>
                                </div>
                                <div class="about__item">
                                    <span class="about__num">01</span> – <span>Разработка и запуск проекта по доставке цветов umflowers.ru</span>
                                </div>
                            </div> -->
                            <picture>
                                <source srcset="{{asset('images/сhart1-dest.png')}}" media="(min-width: 768px)">
                                <img class="distribution__img" src="{{asset('images/сhart1-mob.png')}}" alt="фото">
                            </picture>
                        </div>
                         <div class="about__map about__map--three">
                            <!-- <div class="about__table">
                                <div class="about__line">
                                    <img src="{{asset('images/lineThird.svg')}}" alt="">
                                </div>
                                <div class="about__counting">
                                    <div class="about__count">00</div>
                                    <div class="about__count">01</div>
                                </div>
                                <div class="about__block">
                                    <div class="about__texting">Разработка и запуск проекта по доставке цветов umflowers.ru
                                    </div>
                                </div>
                                <div class="about__boxing">
                                    <div class="about__point">
                                        <img src="{{asset('images/point.svg')}}" alt="">
                                    </div>
                                    <div class="about__point">
                                        <img src="{{asset('images/point.svg')}}" alt="">
                                    </div>
                                </div>
                                <div class="about__inform">
                                    <div class="about__information">
                                        <p>Запуск контекстной рекламы</p>
                                        <p>Создание аккаунтов в социальных сетях</p>
                                        <p>Участие в соревнованиях по бодибилдингу в Ростове Великом и Ярославле</p>
                                        <p>Участие в соревнованиях по бодибилдингу в Дзержинском</p>
                                    </div>
                                    <div class="about__information">
                                        <p>Участие в соревнованиях по бодибилдингу в Воронеже</p>
                                        <p>Участие в соревнованиях по бодибилдингу в Москве и Санкт-Петербурге</p>
                                        <p>Разработка CRM системы в части для рекламы и маркетинга</p>
                                        <p>Участие в соревнованиях по бодибилдингу в Краснодаре и Сочи </p>
                                        <p>Разработка CRM системы в части для call-центра</p>
                                    </div>
                                </div>
                            </div>
                            <div class="about__dates">
                                <div class="about__data about__data--pink">2020</div>
                                <div class="about__data about__data--text">UM Chain</div>
                                <div class="about__data about__data--small">07 / 2020</div>
                                <div class="about__data">2021</div>
                                <div class="about__data">2022</div>
                            </div>
                            <div class="about__bottom"></div>
                            <div class="hide__about">
                                <div class="about__item">
                                    <span class="about__num">00</span> – <span>UM Chain</span>
                                </div>
                                <div class="about__item">
                                    <span class="about__num">01</span> – <span>Разработка и запуск проекта по доставке цветов umflowers.ru</span>
                                </div>
                            </div> -->
                            <picture>
                                <source srcset="{{asset('images/сhart2-dest.png')}}" media="(min-width: 768px)">
                                <img class="distribution__img" src="{{asset('images/сhart2-mob.png')}}" alt="фото">
                            </picture>
                        </div>
                        <div class="about__map about__map--two">
                            <!-- <div class="about__table">
                                <div class="about__line">
                                    <img src="{{asset('images/lineSecond.svg')}}" alt="">
                                </div>
                                <div class="about__block">
                                    <div class="about__texting">Разработка CRM системы в части для руководителя</div>
                                    <div class="about__texting">Разработка и запуск автоматизированной системы
                                        взаимодействия партнеров с клиентами
                                    </div>
                                    <div class="about__texting">Разработка единой платформы для объединения 30 сфер бизнеса
                                    </div>
                                    <div class="about__texting">Выпуск Токенов UMT для привлечения инвестиций, закрытое
                                        Pre-ICO
                                    </div>
                                    <div class="about__texting">Поиск партнеров в категориях: Доставка ресторанной еды,
                                        Доставка свежих фруктов и овощей
                                    </div>
                                    <div class="about__texting">Тестирование платформы в категории доставка цветов</div>
                                    <div class="about__texting">Разработка категории доставка еды и продуктов, разработка
                                        личного кабинета инвестора
                                    </div>
                                </div>
                                <div class="about__counting">
                                    <div class="about__count">02</div>
                                    <div class="about__count">03</div>
                                    <div class="about__count">04</div>
                                    <div class="about__count">05</div>
                                    <div class="about__count">06</div>
                                    <div class="about__count">07</div>
                                    <div class="about__count">08</div>
                                </div>
                                <div class="about__boxing">
                                    <div class="about__point">
                                        <img src="{{asset('images/point.svg')}}" alt="">
                                    </div>
                                    <div class="about__point">
                                        <img src="{{asset('images/point.svg')}}" alt="">
                                    </div>
                                    <div class="about__point">
                                        <img src="{{asset('images/point.svg')}}" alt="">
                                    </div>
                                    <div class="about__point">
                                        <img src="{{asset('images/point.svg')}}" alt="">
                                    </div>
                                    <div class="about__point">
                                        <img src="{{asset('images/point.svg')}}" alt="">
                                    </div>
                                    <div class="about__point">
                                        <img src="{{asset('images/point.svg')}}" alt="">
                                    </div>
                                    <div class="about__point">
                                        <img src="{{asset('images/point.svg')}}" alt="">
                                    </div>
                                </div>
                                <div class="about__inform">
                                    <div class="about__information">
                                        <p>Запуск контекстной рекламы</p>
                                        <p>Создание аккаунтов в социальных сетях</p>
                                        <p>Участие в соревнованиях по бодибилдингу в Ростове Великом и Ярославле</p>
                                        <p>Участие в соревнованиях по бодибилдингу в Дзержинском</p>
                                    </div>
                                    <div class="about__information">
                                        <p>Участие в соревнованиях по бодибилдингу в Воронеже</p>
                                        <p>Участие в соревнованиях по бодибилдингу в Москве и Санкт-Петербурге</p>
                                        <p>Разработка CRM системы в части для рекламы и маркетинга</p>
                                        <p>Участие в соревнованиях по бодибилдингу в Краснодаре и Сочи </p>
                                        <p>Разработка CRM системы в части для call-центра</p>
                                    </div>
                                </div>
                            </div>
                            <div class="about__dates">
                                <div class="about__data about__start">2020</div>
                                <div class="about__data about__data--pink">2021</div>
                                <div class="about__data about__data--small">02 / 2021</div>
                                <div class="about__data about__data--small">03 / 2021</div>
                                <div class="about__data about__data--small">04 / 2021</div>
                                <div class="about__data about__data--small">05 / 2021</div>
                                <div class="about__data about__data--small">10 / 2021</div>
                                <div class="about__data about__data--small">11 / 2021</div>
                                <div class="about__data about__data--small">12 / 2021</div>
                                <div class="about__data">2022</div>
                            </div>
                            <div class="about__bottom"></div>
                            <div class="hide__about">
                                <div class="about__item">
                                    <span class="about__num">02</span> –
                                    <span>Разработка CRM системы в части для руководителя</span>
                                </div>
                                <div class="about__item">
                                    <span class="about__num">03</span> – <span>Разработка и запуск автоматизированной системы взаимодействия партнеров с клиентами</span>
                                </div>
                                <div class="about__item about__info">
                                    <span class="about__num">04</span> – <span>Разработка единой платформы для объединения 30 сфер бизнеса</span>
                                </div>
                                <div class="about__item about__info">
                                    <span class="about__num">05</span> – <span>Выпуск Токенов UMT для привлечения инвестиций, закрытое Pre-ICO</span>
                                </div>
                                <div class="about__item about__info">
                                    <span class="about__num">06</span> – <span>Поиск партнеров в категориях: Доставка ресторанной еды, Доставка свежих фруктов и овощей</span>
                                </div>
                                <div class="about__item about__info">
                                    <span class="about__num">07</span> – <span>Тестирование платформы в категории доставка цветов</span>
                                </div>
                                <div class="about__item about__info">
                                    <span class="about__num">08</span> – <span>Разработка категории доставка еды и продуктов,  разработка личного кабинета инвестора</span>
                                </div>
                            </div> -->
                            <picture>
                                <source srcset="{{asset('images/сhart4-dest.png')}}" media="(min-width: 768px)">
                                <img class="distribution__img" src="{{asset('images/сhart2-mob-mob.png')}}" alt="фото">
                            </picture>
                        </div>
                        <div class="about__map about__map--one">
                            <!-- <div class="about__table">
                                <div class="about__line">
                                    <img src="{{asset('images/line.svg')}}" alt="">
                                </div>
                                <div class="about__block">
                                    <div class="about__texting">Разработка модуля для категорий «Автосервис, гостиничный
                                        бизнес, Салоны красоты, фитнес»
                                    </div>
                                    <div class="about__texting"style="width: 435px;">Разработка блокчейна unitedcorporation.org
                                        и интеграция с базой unitedmarket.org, Разработка сайта umscan.org (информационный сайт о статусе
                                        заказа, транзакциях, блоках, токенах)
                                    </div>
                                    <div class="about__texting">Разработка модуля для интеграции Unitedmarket в сайты
                                        партнеров
                                    </div>
                                    <div class="about__texting">Листинг на Бирже</div>
                                    <div class="about__texting">Выход на мировой рынок, формирование call center</div>
                                    <div class="about__texting">Внедрение unitedmarket в Европе, Америки, Азии, Австралии,
                                        Африки
                                    </div>
                                </div>
                                <div class="about__counting">
                                    <div class="about__count">09</div>
                                    <div class="about__count">10</div>
                                    <div class="about__count">11</div>
                                    <div class="about__count">12</div>
                                    <div class="about__count">13</div>
                                    <div class="about__count">14</div>
                                </div>
                                <div class="about__boxing">
                                    <div class="about__point">
                                        <img src="{{asset('images/point.svg')}}" alt="">
                                    </div>
                                    <div class="about__point">
                                        <img src="{{asset('images/point.svg')}}" alt="">
                                    </div>
                                    <div class="about__point">
                                        <img src="{{asset('images/point.svg')}}" alt="">
                                    </div>
                                    <div class="about__point">
                                        <img src="{{asset('images/point.svg')}}" alt="">
                                    </div>
                                    <div class="about__point">
                                        <img src="{{asset('images/point.svg')}}" alt="">
                                    </div>
                                    <div class="about__point">
                                        <img src="{{asset('images/point.svg')}}" alt="">
                                    </div>
                                </div>
                                <div class="about__inform">
                                    <div class="about__information">
                                        <p>Запуск контекстной рекламы</p>
                                        <p>Создание аккаунтов в социальных сетях</p>
                                        <p>Участие в соревнованиях по бодибилдингу в Ростове Великом и Ярославле</p>
                                        <p>Участие в соревнованиях по бодибилдингу в Дзержинском</p>
                                    </div>
                                    <div class="about__information">
                                        <p>Участие в соревнованиях по бодибилдингу в Воронеже</p>
                                        <p>Участие в соревнованиях по бодибилдингу в Москве и Санкт-Петербурге</p>
                                        <p>Разработка CRM системы в части для рекламы и маркетинга</p>
                                        <p>Участие в соревнованиях по бодибилдингу в Краснодаре и Сочи </p>
                                        <p>Разработка CRM системы в части для call-центра</p>
                                    </div>
                                </div>
                            </div>
                            <div class="about__dates">
                                <div class="about__data about__start">2020</div>
                                <div class="about__data">2021</div>
                                <div class="about__data about__data--pink">2022</div>
                                <div class="about__data about__data--small">02 / 2022</div>
                                <div class="about__data about__data--small">03 / 2022</div>
                                <div class="about__data about__data--small">04 / 2022</div>
                                <div class="about__data about__data--small">05 / 2022</div>
                                <div class="about__data about__data--small">06 / 2022</div>
                            </div>
                            <div class="about__bottom"></div>
                            <div class="hide__about">
                                <div class="about__item">
                                    <span class="about__num">09</span><span> – Разработка модуля для категорий «Автосервис, гостиничный бизнес, Салоны красоты, фитнес» </span>
                                </div>
                                <div class="about__item">
                                    <span class="about__num">10</span><span> – Разработка блокчейна unitedcorporation.org и интеграция с базой unitedmarket.org, Разработка сайта umscan.org  (информационный сайт о статусе заказа, транзакциях, блоках, токенах)</span>
                                </div>
                                <div class="about__item">
                                    <span class="about__num">11</span><span> – Разработка модуля для интеграции Unitedmarket в сайты партнеров</span>
                                </div>
                                <div class="about__item">
                                    <span class="about__num">12</span><span> – Листинг на Бирже </span>
                                </div>
                                <div class="about__item">
                                    <span class="about__num">13</span><span> – Выход на мировой рынок, формирование call center</span>
                                </div>
                                <div class="about__item">
                                    <span class="about__num">14</span><span> – Внедрение unitedmarket  в Европе, Америки, Азии, Австралии, Африки</span>
                                </div>
                            </div> -->
                            <picture>
                                <source srcset="{{asset('images/сhart3-dest.png')}}" media="(min-width: 768px)">
                                <img class="distribution__img" src="{{asset('images/сhart3-mob.png')}}" alt="фото">
                            </picture>
                        </div>
                </div>
            </section>
            <section class="team" id="feedback">
                <div class="team__inner">

                </div>
            </section>
            {{-- @livewire('contact-us-component') --}}
        </div>
    </div>
</div>
<script src="/js/main.js"></script>

{{-- @include('livewire.popup-purchase-tokens-component') --}}
@endsection
