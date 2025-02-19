document.addEventListener('DOMContentLoaded', () => {
    // function EncodeText(text) {
    //     let result = '';
    //     let count = 1;

    //     for (i = 0; i < text.length; i++) {
    //         if (text[i] === text[i + 1]) {
    //             count++;
    //         } else {
    //             if (count > 1) {
    //                 result += count;
    //             }
    //             result += item[i];
    //             count = 1;
    //         }
    //     }

    //     return result;
    // }

    Fancybox.bind("[data-fancybox]", {});


    const burgerBtn = document.querySelector('.burger-btn')
    const mobileMenu = document.querySelector('.mobile-header')

    if (burgerBtn) {
        burgerBtn.addEventListener('click', (e) => {
            if (e.target.classList.contains('active')) {
                CloseMenu();
            } else {
                OpenMenu();
            }
        })
    }

    function OpenMenu() {
        document.querySelector('main.main').classList.add('filter-black')
        burgerBtn.classList.add('active');
        mobileMenu.classList.add('active');
        document.body.style.overflow = 'hidden';
        document.addEventListener('click', (e) => {
            if (!e.target.closest('.burger-btn') && !e.target.closest('.header')) {
                CloseMenu();
            }
        })
    }

    function CloseMenu() {
        document.querySelector('main.main').classList.remove('filter-black')
        burgerBtn.classList.remove('active');
        mobileMenu.classList.remove('active');
        document.body.style.overflow = 'auto';
    }

    const faqBtns = document.querySelectorAll('.faq__btn');
    const faqTexts = document.querySelectorAll('.faq__text');
    if (faqBtns.length != 0) {
        faqBtns.forEach(item => {
            item.addEventListener('click', (e) => {
                e.preventDefault();
                const target = e.target;

                if (!target.classList.contains('active')) {
                    OpenFaq(target);
                } else {
                    CloseFaq(target);
                }
            })
        })
    }

    function OpenFaq(item) {
        faqBtns.forEach(item => {
            item.classList.remove('active');
        })
        faqTexts.forEach(item => {
            item.classList.remove('active');
        })
        item.classList.add('active');
        item.nextElementSibling.classList.add('active');
    }

    function CloseFaq(item) {
        faqTexts.forEach(item => {
            item.classList.remove('active');
        })
        item.classList.remove('active');
        item.nextElementSibling.classList.remove('active');
    }


    const popupBtns = document.querySelectorAll('.main-btn[data-popup]');
    const popupWrap = document.querySelector('.popup');
    const popupCloseBtns = document.querySelectorAll('.close-menu');

    if (popupCloseBtns.length != 0) {
        popupCloseBtns.forEach(item => {
            item.addEventListener('click', () => {
                ClosePopup();
            })
        })
    }
    if (popupBtns.length != 0) {
        popupBtns.forEach(item => {
            item.addEventListener('click', (e) => {
                e.preventDefault();
                const target = item.getAttribute('data-popup');
                OpenPopup(target);
            })
        })
    }

    function OpenPopup(target) {
        const targetItem = document.querySelector(target);

        popupWrap.classList.add('active');
        targetItem.classList.add('active');

        document.addEventListener('click', (e) => {
            if (!e.target.closest('.main-btn') && !e.target.closest('.popup__item')) {
                ClosePopup();
            }
        })
    }

    function ClosePopup() {
        const popupItems = document.querySelectorAll('.popup__item')
        popupItems.forEach(item => {
            item.classList.remove('active');
        })
        popupWrap.classList.remove('active');
    }



    const form = document.getElementById('driver-form');
    if (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            const formData = new FormData(form);
            const messageContainer = form.querySelector('.form-message');

            fetch('/wp-admin/admin-ajax.php?action=driver_form', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        form.reset();
                        messageContainer.innerHTML = '<div class="success">Спасибо! Ваша заявка отправлена.</div>';
                    } else {
                        messageContainer.innerHTML = `<div class="error">Ошибка: ${data.data}</div>`;
                    }
                })
                .catch(error => {
                    messageContainer.innerHTML = '<div class="error">Произошла ошибка при отправке.</div>';
                });
        });
    }


})