<?php

namespace App\Enums;

enum ModalName
{
    case APP_LOGIN;
    case APP_LISTING_SEARCH;
    case APP_CATEGORY;
    case APP_CATEGORY_TAG;

    case APP_COMMENT;
    case APP_INFORMATION;
    case APP_POST;
    case APP_FAQ;
    case APP_PLAN;
    case APP_USP;
    case APP_CONTACT;

    case ADMIN_MESSAGE;
    case BLOG;
    case PARTNER;
    case PARTNER_COMPANY;
    case PARTNER_PLAN;
    case PARTNER_ADVERT;
    case PARTNER_ADVERT_DESCRIPTION;
    case PARTNER_ADVERT_ACCESS;
    case PARTNER_ADVERT_SEO;
    case PARTNER_ADVERT_IMAGE;
    case PARTNER_ADVERT_REQUEST;
}
