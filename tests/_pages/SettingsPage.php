<?php

namespace tests\_pages;

use yii\codeception\BasePage;

/**
 * Represents email settings page.
 *
 * @property \FunctionalTester $actor
 */
class SettingsPage extends BasePage
{
    /** {@inheritdoc} */
    public $route = '/user/settings/account';

    /**
     * @param $email
     * @param $username
     * @param null $password
     * @param $currentPassword
     */
    public function update($email, $username, $currentPassword, $password = null)
    {
        $this->actor->fillField('#settingsform-email', $email);
        $this->actor->fillField('#settingsform-username', $username);
        $this->actor->fillField('#settingsform-new_password', $password);
        $this->actor->fillField('#settingsform-current_password', $currentPassword);
        $this->actor->click('Save');
    }
}
