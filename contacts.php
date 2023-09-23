<?php
if (!defined('ABSPATH')) {
    wp_die();
}

get_header('second');
?>

<!-- main -->
<main class="main">
    <div class="contacts-page">
        <div class="container">
            <div class="contacts-page__in">
                <h2 class="contacts-page__head section__title dark">контакты</h2>
                <div class="contacts-page__body">
                    <div class="contacts-page__body_main">
                        <div class="contacts-page__body_main_item">
                            г. Санкт-Петербург, ул. Лахтинская, д. 14. Индекс 19736
                        </div>
                        <div class="contacts-page__body_main_item">
                            +7 (812) 660-5-888
                            Запись / Консультация
                        </div>
                        <div class="contacts-page__body_main_item">
                            По вопросам сотрудничества
                            info@beautylounge.ru
                        </div>
                    </div>
                    <div class="contacts-page__body_list">
                        <a href="#" class="contacts-page__body_item google">
                            <div class="contacts-page__body_item_icon">
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M25.6728 12.0909C21.8613 12.089 18.0498 12.0899 14.2384 12.0904C14.2389 13.6713 14.2366 15.2521 14.2394 16.8325C16.4467 16.832 18.654 16.8316 20.8609 16.8325C20.6051 18.3474 19.7048 19.7328 18.4281 20.5856C17.6255 21.1252 16.7035 21.4755 15.7528 21.642C14.7961 21.8053 13.8075 21.8262 12.8531 21.633C11.8826 21.4393 10.9561 21.035 10.1479 20.465C8.85563 19.5571 7.8694 18.2287 7.36302 16.7337C6.84523 15.2132 6.84142 13.5212 7.36539 12.0021C7.72894 10.9314 8.33404 9.94234 9.12895 9.13746C10.1095 8.13369 11.3842 7.41612 12.7577 7.12187C13.9337 6.87082 15.1738 6.91873 16.3252 7.26707C17.3038 7.56419 18.206 8.10045 18.945 8.80616C19.692 8.06341 20.4352 7.31641 21.1808 6.57227C21.5718 6.17173 21.9828 5.78872 22.3616 5.37727C21.2292 4.32934 19.9018 3.48697 18.4514 2.95447C15.8402 1.99347 12.8953 1.97307 10.2666 2.8829C7.30414 3.89709 4.78168 6.11246 3.3831 8.91259C2.89618 9.87745 2.54068 10.9073 2.32712 11.9666C1.78987 14.6057 2.16434 17.4197 3.38166 19.8234C4.17282 21.3924 5.30707 22.7872 6.68294 23.8807C7.98096 24.9158 9.49393 25.6804 11.0981 26.107C13.1222 26.65 15.2768 26.6376 17.3143 26.174C19.1557 25.7502 20.8979 24.8703 22.2889 23.586C23.7592 22.2348 24.8081 20.4546 25.3633 18.5416C25.9689 16.4548 26.0524 14.227 25.6728 12.0909Z" fill="white" />
                                </svg>

                            </div>
                            <div class="contacts-page__body_item_text">Мы на Google Maps </div>
                        </a>
                        <a href="#" class="contacts-page__body_item whatsapp">
                            <div class="contacts-page__body_item_icon">
                                <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22.0884 5.10244C19.8732 2.88479 16.9275 1.66297 13.7889 1.66168C7.32219 1.66168 2.05892 6.92452 2.0564 13.3933C2.0555 15.4611 2.59575 17.4795 3.6225 19.2587L1.95801 25.3384L8.17758 23.7069C9.89122 24.6416 11.8207 25.1342 13.7843 25.1349H13.789C13.7894 25.1349 13.7888 25.1349 13.7891 25.1349C20.2552 25.1349 25.5188 19.8715 25.5215 13.4027C25.5227 10.2677 24.3034 7.32 22.0884 5.10244ZM13.789 23.1535H13.785C12.0353 23.1528 10.319 22.6827 8.82181 21.7942L8.46576 21.5829L4.77497 22.551L5.76014 18.9526L5.52826 18.5836C4.55214 17.031 4.0366 15.2365 4.03736 13.3939C4.03946 8.01737 8.41409 3.64321 13.7929 3.64321C16.3976 3.64402 18.846 4.65972 20.6871 6.50295C22.5282 8.34617 23.5416 10.7962 23.5405 13.4018C23.5383 18.7788 19.1638 23.1535 13.789 23.1535Z" fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M19.1381 15.8501C18.845 15.7033 17.4037 14.9942 17.135 14.8963C16.8663 14.7985 16.6708 14.7496 16.4754 15.043C16.28 15.3365 15.7182 15.9968 15.5472 16.1925C15.3762 16.3881 15.2051 16.4127 14.912 16.2658C14.6189 16.1191 13.6743 15.8096 12.5546 14.8108C11.6831 14.0334 11.0948 13.0735 10.9237 12.78C10.7527 12.4865 10.9055 12.3279 11.0523 12.1817C11.1841 12.0503 11.3455 11.8393 11.492 11.6681C11.6386 11.497 11.6874 11.3746 11.7852 11.1791C11.8829 10.9834 11.8341 10.8122 11.7607 10.6655C11.6874 10.5188 11.1012 9.07584 10.8569 8.48876C10.6189 7.91722 10.3772 7.99466 10.1973 7.98556C10.0265 7.97703 9.83084 7.97527 9.63543 7.97527C9.44003 7.97527 9.12237 8.04866 8.85372 8.34208C8.58502 8.63559 7.82764 9.34487 7.82764 10.7877C7.82764 12.2307 8.8781 13.6246 9.02469 13.8202C9.17123 14.016 11.0918 16.9769 14.0326 18.2467C14.732 18.5488 15.2781 18.7292 15.7038 18.8642C16.4061 19.0874 17.0452 19.0559 17.5503 18.9804C18.1135 18.8962 19.2847 18.2713 19.529 17.5866C19.7733 16.9017 19.7733 16.3147 19.7 16.1925C19.6267 16.0702 19.4313 15.9968 19.1381 15.8501Z" fill="white" />
                                </svg>

                            </div>
                            <div class="contacts-page__body_item_text">WHATSAPP</div>
                        </a>
                        <a href="#" class="contacts-page__body_item email">
                            <div class="contacts-page__body_item_icon">
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20.1252 7.07486V4.79167H2.87516V7.07441L11.5002 11.3874L20.1252 7.07486ZM20.1252 9.21776L11.5001 13.5303L2.87516 9.21735V18.2083H20.1252V9.21776ZM2.87516 2.875H20.1252C21.1837 2.875 22.0418 3.73312 22.0418 4.79167V18.2083C22.0418 19.2669 21.1837 20.125 20.1252 20.125H2.87516C1.81662 20.125 0.958496 19.2669 0.958496 18.2083V4.79167C0.958496 3.73312 1.81662 2.875 2.87516 2.875Z" fill="white" />
                                </svg>

                            </div>
                            <div class="contacts-page__body_item_text">Написать на E-mail</div>
                        </a>
                        <a href="#" class="contacts-page__body_item yandex">
                            <div class="contacts-page__body_item_icon">
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.162 23.7304V16.4438L6.29248 3.37529H8.74038L12.3288 13.4519L16.4569 1.26958H18.7074L13.4125 16.5272V23.7304H11.162Z" fill="white" />
                                </svg>

                            </div>
                            <div class="contacts-page__body_item_text">Мы на Яндекс Картах </div>
                        </a>
                        <a href="#" class="contacts-page__body_item  telegram">
                            <div class="contacts-page__body_item_icon">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M24.1902 27.11C23.9829 27.1116 23.7802 27.0487 23.6102 26.93L14.0002 20.19C13.8813 20.1062 13.7822 19.9975 13.7096 19.8714C13.6371 19.7453 13.5929 19.6049 13.5802 19.46C13.5667 19.3135 13.5857 19.1659 13.6359 19.0276C13.686 18.8893 13.766 18.7638 13.8702 18.66L16.4902 16L12.0002 18.81L14.0002 23.4L14.8802 22.52C15.0672 22.3317 15.3213 22.2254 15.5867 22.2244C15.852 22.2235 16.1069 22.328 16.2952 22.515C16.4835 22.702 16.5898 22.9561 16.5908 23.2215C16.5917 23.4868 16.4872 23.7417 16.3002 23.93L14.3002 25.85C14.1849 25.9665 14.0428 26.0528 13.8863 26.1014C13.7298 26.1501 13.5637 26.1595 13.4027 26.1289C13.2417 26.0983 13.0907 26.0285 12.963 25.9259C12.8352 25.8232 12.7347 25.6907 12.6702 25.54L9.78022 18.8C9.6877 18.5796 9.67717 18.3334 9.75055 18.1059C9.82393 17.8784 9.97636 17.6848 10.1802 17.56L22.7002 9.85C22.909 9.72148 23.1578 9.67414 23.3992 9.717C23.6406 9.75985 23.8579 9.88991 24.0097 10.0825C24.1615 10.275 24.2373 10.5166 24.2226 10.7613C24.208 11.0061 24.1039 11.2369 23.9302 11.41L16.1102 19.23L23.5502 24.45L27.5502 7.45L5.78022 15.55L8.19022 16.55C8.3196 16.5934 8.43872 16.6629 8.54025 16.7541C8.64178 16.8453 8.72356 16.9563 8.78057 17.0803C8.83757 17.2043 8.86859 17.3387 8.87171 17.4751C8.87483 17.6116 8.84998 17.7472 8.79871 17.8737C8.74743 18.0002 8.67081 18.1148 8.57355 18.2106C8.4763 18.3063 8.36048 18.3812 8.23321 18.4305C8.10595 18.4798 7.96994 18.5025 7.83356 18.4973C7.69718 18.492 7.56332 18.4589 7.44022 18.4L2.63022 16.45C2.44048 16.378 2.27714 16.25 2.16187 16.083C2.0466 15.916 1.98486 15.7179 1.98486 15.515C1.98486 15.3121 2.0466 15.114 2.16187 14.947C2.27714 14.78 2.44048 14.652 2.63022 14.58L28.6502 5C28.8186 4.93924 29.0003 4.92482 29.1762 4.95825C29.3521 4.99167 29.5158 5.07171 29.6502 5.19C29.7892 5.31176 29.8918 5.46967 29.9465 5.64619C30.0013 5.82271 30.006 6.01095 29.9602 6.19L25.1602 26.34C25.1232 26.5002 25.0473 26.6488 24.9391 26.7726C24.831 26.8965 24.694 26.9917 24.5402 27.05C24.4277 27.0894 24.3094 27.1096 24.1902 27.11Z" fill="white" />
                                </svg>

                            </div>
                            <div class="contacts-page__body_item_text">TELEGRAM</div>
                        </a>
                    </div>
                    <div class="contacts-page__body_ex">
                        <div class="contacts-page__body_ex_img">
                            <picture>
                                <source srcset="" type="image/webp">
                                <img src="./img/hero-img.png" alt="contacts-image">
                            </picture>
                        </div>
                        <h2 class="contacts-page__body_ex_head section__title dark">
                            Сотрудничество
                        </h2>
                        <div class="contacts-page__body_ex_text">
                            Для предложения заведения нового бренда вам необходимо подать заявку. Условия рассмотрения заявок.
                        </div>
                        <div class="contacts-page__body_ex_action">
                            <button class="contacts-page__body_ex_action_btn">
                                Подать заявку
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- main -->


<!-- footer -->
<footer class="footer">
    <div class="container">
        <div class="footer__top">
            <h1 class="footer__top_title">Связаться с нами</h1>
            <a href="mailto:" class="footer__top_link">
                <div class="footer__top_link_name">Напишите нам <span>на EMAIL</span></div>
                <div class="footer__top_link_icon"></div>
            </a>
        </div>
        <div class="footer__mid">
            <div class="footer__mid_main">
                <ul class="footer__mid_main_nav">
                    <li class="footer__mid_main_nav_item"><a href="#">Акции</a></li>
                    <li class="footer__mid_main_nav_item"><a href="#">Клиентские дни</a></li>
                    <li class="footer__mid_main_nav_item"><a href="#">Услуги</a></li>
                    <li class="footer__mid_main_nav_item"><a href="#">Прайс</a></li>
                    <li class="footer__mid_main_nav_item"><a href="#">Бутик</a></li>
                    <li class="footer__mid_main_nav_item"><a href="#">О салоне</a></li>
                    <li class="footer__mid_main_nav_item"><a href="#">Новости</a></li>
                    <li class="footer__mid_main_nav_item"><a href="#">Контакт</a></li>
                </ul>
                <div class="footer__mid_main_soc">
                    <a href="#" class="footer__mid_main_soc_item">WHATSAPP</a>
                    <a href="#" class="footer__mid_main_soc_item">VK</a>
                    <a href="#" class="footer__mid_main_soc_item">TELEGRAM</a>
                    <a href="#" class="footer__mid_main_soc_item">YOUTUBE</a>
                </div>
            </div>
            <div class="footer__mid_ex">
                <a href="#" class="footer__mid_ex_policy">Политика конфиденциальности
                </a>
                <a href="#" class="footer__mid_ex_license">ЛИЦЕНЗИИ И ДОКУМЕНТЫ</a>
            </div>
        </div>
        <div class="footer__bottom">
            ©COPYRIGHT 2022. BEAUTY LOUNGE SALON & BOUTIQUE. Powered by Jr.
        </div>
    </div>
</footer>
<!-- footer -->
<div class="menu">
    <div class="container">
        <div class="menu__in">
            <ul class="menu__part">
                <li class="menu__part_item active">
                    <a class="menu__part_item_link" href="#">Услуги</a>
                    <div class="menu__part_item_arrow active"></div>
                    <ul class="menu__part_submenu">
                        <li class="menu__part_submenu_item"><a href="#">Эстетическая косметология</a></li>
                        <li class="menu__part_submenu_item"><a href="#">Аппаратная косметология </a></li>
                        <li class="menu__part_submenu_item"><a href="#">Лазерная эпиляция и Депиляция</a></li>
                        <li class="menu__part_submenu_item"><a href="#">Процедуры по телу</a></li>
                        <li class="menu__part_submenu_item"><a href="#">Массажи лица</a></li>
                        <li class="menu__part_submenu_item"><a href="#">Инъекционная косметология Уход за руками и ногами </a></li>
                        <li class="menu__part_submenu_item"><a href="#">Make up / brow & lashes</a></li>
                        <li class="menu__part_submenu_item"><a href="#">Процедуры для волос</a></li>
                        <li class="menu__part_submenu_item"><a href="#">Перманент</a></li>
                    </ul>
                </li>

            </ul>
            <ul class="menu__part">
                <li class="menu__part_item">
                    <a href="#" class="menu__part_item_link">Акции</a>
                </li>
                <li class="menu__part_item">
                    <a href="#" class="menu__part_item_link">Клиентские дни</a>
                </li>
                <li class="menu__part_item">
                    <a href="#" class="menu__part_item_link">Прайс</a>
                </li>
                <li class="menu__part_item">
                    <a href="#" class="menu__part_item_link">Бутик</a>
                </li>
                <li class="menu__part_item">
                    <a href="#" class="menu__part_item_link">О салоне</a>
                </li>
                </li>
            </ul>
            <ul class="menu__part">
                <li class="menu__part_item">
                    <a href="#" class="menu__part_item_link">Новости</a>
                </li>
                <li class="menu__part_item">
                    <a href="#" class="menu__part_item_link">Контакты</a>
                </li>
            </ul>
        </div>
    </div>






    <footer class="footer">
        <div class="container">
            <div class="footer__top">
                <h1 class="footer__top_title">Связаться с нами</h1>
                <a href="mailto:" class="footer__top_link">
                    <div class="footer__top_link_name">Напишите нам <span>на EMAIL</span></div>
                    <div class="footer__top_link_icon"></div>
                </a>
            </div>
            <div class="footer__mid">
                <div class="footer__mid_main">
                    <ul class="footer__mid_main_nav">
                        <li class="footer__mid_main_nav_item"><a href="#">Акции</a></li>
                        <li class="footer__mid_main_nav_item"><a href="#">Клиентские дни</a></li>
                        <li class="footer__mid_main_nav_item"><a href="#">Услуги</a></li>
                        <li class="footer__mid_main_nav_item"><a href="#">Прайс</a></li>
                        <li class="footer__mid_main_nav_item"><a href="#">Бутик</a></li>
                        <li class="footer__mid_main_nav_item"><a href="#">О салоне</a></li>
                        <li class="footer__mid_main_nav_item"><a href="#">Новости</a></li>
                        <li class="footer__mid_main_nav_item"><a href="#">Контакт</a></li>
                    </ul>
                    <div class="footer__mid_main_soc">
                        <a href="#" class="footer__mid_main_soc_item">WHATSAPP</a>
                        <a href="#" class="footer__mid_main_soc_item">VK</a>
                        <a href="#" class="footer__mid_main_soc_item">TELEGRAM</a>
                        <a href="#" class="footer__mid_main_soc_item">YOUTUBE</a>
                    </div>
                </div>
                <div class="footer__mid_ex">
                    <a href="#" class="footer__mid_ex_policy">Политика конфиденциальности
                    </a>
                    <a href="#" class="footer__mid_ex_license">ЛИЦЕНЗИИ И ДОКУМЕНТЫ</a>
                </div>
            </div>
            <div class="footer__bottom">
                ©COPYRIGHT 2022. BEAUTY LOUNGE SALON & BOUTIQUE. Powered by Jr.
            </div>
        </div>
    </footer>

</div>







</div>
<script src="js/app.min.js"></script>
</body>

</html>