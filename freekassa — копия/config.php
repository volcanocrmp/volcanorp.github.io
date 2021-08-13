<?php

class Config
{
    // Настроек от проекта в личном кабинете free-kassa.ru
    const MERCHANT_ID = '';
    const SECRET_KEY_1 = '';
    const SECRET_KEY_2 = '';
    
    // Стоимость товара в руб.
    const ITEM_PRICE = 1;

    // Таблица начисления товара, например `users`
    const TABLE_ACCOUNT = 'accounts';
    // Название поля из таблицы начисления товара по которому производится поиск аккаунта/счета, например `email`
    const TABLE_ACCOUNT_NAME = 'Name';
    // Название поля из таблицы начисления товара которое будет увеличено на колличево оплаченого товара, например `sum`, `donate`
    const TABLE_ACCOUNT_DONATE= 'pRub';

    // Параметры соединения с бд
    // Хост
    const DB_HOST = '217.106.107.72';
    // Имя пользователя
    const DB_USER = 'H42685';
    // Пароль
    const DB_PASS = '111222333444';
    // Назывние базы
    const DB_NAME = 'EVE42685';
}