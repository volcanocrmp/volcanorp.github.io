<?php

class Config
{
    // �������� �� ������� � ������ �������� free-kassa.ru
    const MERCHANT_ID = '';
    const SECRET_KEY_1 = '';
    const SECRET_KEY_2 = '';
    
    // ��������� ������ � ���.
    const ITEM_PRICE = 1;

    // ������� ���������� ������, �������� `users`
    const TABLE_ACCOUNT = 'accounts';
    // �������� ���� �� ������� ���������� ������ �� �������� ������������ ����� ��������/�����, �������� `email`
    const TABLE_ACCOUNT_NAME = 'Name';
    // �������� ���� �� ������� ���������� ������ ������� ����� ��������� �� ��������� ���������� ������, �������� `sum`, `donate`
    const TABLE_ACCOUNT_DONATE= 'pRub';

    // ��������� ���������� � ��
    // ����
    const DB_HOST = '217.106.107.72';
    // ��� ������������
    const DB_USER = 'H42685';
    // ������
    const DB_PASS = '111222333444';
    // �������� ����
    const DB_NAME = 'EVE42685';
}