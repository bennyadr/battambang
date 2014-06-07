<?php
use Battambang\Cpanel\Libraries\PageHeader\PageHeaderItem as PageHeardItem;

PageHeader::make(
    'cpanel.login',
    function (PageHeardItem $header) {
        $header->iconLogin();
        $header->add('Login');
    }
);
PageHeader::make(
    'cpanel.package',
    function (PageHeardItem $header) {
        $header->iconBriefcase();
        $header->add('Package');
    }
);
PageHeader::make(
    'cpanel.package.home',
    function (PageHeardItem $header) {
        $header->iconHome();
        $header->add('Home');
    }
);
PageHeader::make(
    'cpanel.company.edit',
    function (PageHeardItem $header) {
        $header->iconEdit();
        $header->add('Company');
    }
);
PageHeader::make(
    'cpanel.office.index',
    function (PageHeardItem $header) {
        $header->iconList();
        $header->add('Office');
    }
);
PageHeader::make(
    'cpanel.office.create',
    function (PageHeardItem $header) {
        $header->iconList();
        $header->add('Office');
    }
);
PageHeader::make(
    'cpanel.office.edit',
    function (PageHeardItem $header) {
        $header->iconEdit();
        $header->add('Office');
    }
);
PageHeader::make(
    'cpanel.workday.index',
    function (PageHeardItem $header) {
        $header->iconList();
        $header->add('Work Day');
    }
);
PageHeader::make(
    'cpanel.workday.create',
    function (PageHeardItem $header) {
        $header->iconPlus();
        $header->add('Work Day');
    }
);
PageHeader::make(
    'cpanel.workday.edit',
    function (PageHeardItem $header) {
        $header->iconEdit();
        $header->add('Work Day');
    }
);
PageHeader::make(
    'cpanel.decode.index',
    function (PageHeardItem $header) {
        $header->iconBarcode();
        $header->add('Decode');
    }
);
PageHeader::make(
    'cpanel.group.index',
    function (PageHeardItem $header) {
        $header->iconList();
        $header->add('Group');
    }
);
PageHeader::make(
    'cpanel.group.create',
    function (PageHeardItem $header) {
        $header->iconPlus();
        $header->add('Group');
    }
);
PageHeader::make(
    'cpanel.group.edit',
    function (PageHeardItem $header) {
        $header->iconEdit();
        $header->add('Group');
    }
);
PageHeader::make(
    'cpanel.user.index',
    function (PageHeardItem $header) {
        $header->iconList();
        $header->add('User');
    }
);
PageHeader::make(
    'cpanel.user.create',
    function (PageHeardItem $header) {
        $header->iconPlus();
        $header->add('User');
    }
);
PageHeader::make(
    'cpanel.user.edit',
    function (PageHeardItem $header) {
        $header->iconEdit();
        $header->add('User');
    }
);
PageHeader::make(
    'cpanel.changepwd.index',
    function (PageHeardItem $header) {
        $header->iconEdit();
        $header->add('Change Password');
    }
);